<form>
    <div class="row">
        <div class="column">
            <h2>Front</h2>
        </div>
        <div class="column">
            <h2>Body</h2>
        </div>
        <div class="column">
            <h2>Back</h2>
        </div>
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">Title</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Title"
            wire:model="name">
        @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Journal Id</label>
        <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Enter Journal Id"
            wire:model="journal_id">
        @error('journal_id')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput3">Publisher Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="Enter Publisher Name"
            wire:model="publisher_name">
        @error('publisher_name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput4">Country</label>
        <input type="text" class="form-control" id="exampleFormControlInput4" placeholder="Enter Country"
            wire:model="country">
        @error('country')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput5">Email</label>
        <input type="text" class="form-control" id="exampleFormControlInput5" placeholder="Enter Email"
            wire:model="email">
        @error('email')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <button wire:click.prevent="store()" class="btn btn-success">Save</button>
</form>
