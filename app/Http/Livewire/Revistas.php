<?php
  
namespace App\Http\Livewire;
  
use Livewire\Component;
use App\Models\Revista;
  
class Revistas extends Component
{
    public $revistas, $name, $revista_id, $revista_identificacion, $revista_name, $revista_journal_id;
    public $xml_version, $xml_model, $doctype, $article, $journal_id, $publisher_name, $country, $email, $revista_publisher_name, $revista_country, $revista_email;
    public $isOpen = 0;
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function render()
    {
        $this->revistas = Revista::all();
        return view('livewire.revistas')->layout('layouts.app-revista');
        // return view('livewire.revistas-home');
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function create()
    {
        $this->resetInputFields();
        // $this->openModal();
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function openModal()
    {
        $this->isOpen = true;
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function closeModal()
    {
        $this->isOpen = false;
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields(){
        $this->name = '';
        $this->revista_id = '';
        $this->journal_id = '';
        $this->publisher_name = '';
        $this->country = '';
        $this->email = '';
    }
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $xml_version = '<?xml version="1.0" encoding="UTF-8"?>';
        $doctype = '<!DOCTYPE article PUBLIC "-//NLM//DTDJATS(Z39.96)JournalPublishingDTDv1.1d320150301//EN" "http://jats.nlm.nih.gov/publishing/1.1d3/JATS-journalpublishing1.dtd"[]>';
        $article = '<article xmlns:ali="http://www.niso.org/schemas/ali/1.0" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:mml="http://www.w3.org/1998/Math/MathML" dtd-version="1.1d3" specific-use="Marcalyc 1.2" article-type="editorial" xml:lang="es">';

        $this->validate([
            'name' => 'required',
            'journal_id' => 'required',
        ]);
   
        Revista::updateOrCreate(['id' => $this->revista_id], [
            'name' => $this->name,
            'xml_version' => $xml_version,
            'doctype' => $doctype,
            'article' => $article,
            'journal_id' => $this->journal_id,
            'publisher_name' => $this->publisher_name,
            'country' => $this->country,
            'email' => $this->email,
        ]);
  
        session()->flash('message', 
            $this->revista_id ? 'Revista Updated Successfully.' : 'Revista Created Successfully.');
  
        $this->closeModal();
        $this->resetInputFields();
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $revista = Revista::findOrFail($id);
        $this->revista_id = $id;
        $this->name = $revista->name;
        $this->journal_id = $revista->journal_id;
        $this->publisher_name = $revista->publisher_name;
        $this->country = $revista->country;
        $this->email = $revista->email;
    
        $this->openModal();
    }
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Revista::find($id)->delete();
        session()->flash('message', 'Revista Deleted Successfully.');
    }

    public function detail($id)
    {
        $revista = Revista::findOrFail($id);

        // dd($revista);
        $this->revista_identificacion = $id;
        $this->revista_name = $revista->name;
        $this->xml_version = $revista->xml_version;
        $this->doctype = $revista->doctype;
        $this->article = $revista->article;
        $this->revista_journal_id = $revista->journal_id;
        $this->revista_publisher_name = $revista->publisher_name;
        $this->revista_country = $revista->country;
        $this->revista_email = $revista->email;

        $this->resetInputFields();
    
        // $this->openModal();
        // return view('livewire.detail_revista');
    }
}