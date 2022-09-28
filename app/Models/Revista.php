<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Revista extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'xml_version', 'xml_model', 'doctype', 'article', 'journal_id', 'publisher_name', 'country', 'email'
    ];
}
