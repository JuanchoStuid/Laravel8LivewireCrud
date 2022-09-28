@extends('layouts.app')

@section('content')
    <div class="text-center">
        {{-- @if ($updateMode) --}}
        {{-- @include('livewire.update') --}}
        {{-- @else --}}
        @include('livewire.create_revista')
        {{-- @endif --}}
        <table class="table table-bordered mt-5">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($revistas as $value)
                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->name }}</td>
                        <td>
                            <button wire:click="edit({{ $value->id }})" class="btn btn-primary btn-sm">Edit</button>
                            <button wire:click="delete({{ $value->id }})" class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
