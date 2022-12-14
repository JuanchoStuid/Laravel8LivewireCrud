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
            wire:model="title">
        @error('title')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Description</label>
        <input type="text" class="form-control" id="exampleFormControlInput2" wire:model="description"
            placeholder="Enter Description">
        @error('description')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <button wire:click.prevent="store()" class="btn btn-success">Save</button>
</form>
