<div class="text-center">
    {{-- @if ($updateMode) --}}
    {{-- @include('livewire.update') --}}
    {{-- @else --}}

    {{-- @endif --}}
    <div class="row">
        <div class="col-md-4">
            @include('livewire.create_revista')

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
                                <button wire:click="detail({{ $value->id }})"
                                    class="btn btn-info btn-sm">Detalle</button>
                                <button wire:click="edit({{ $value->id }})"
                                    class="btn btn-primary btn-sm">Edit</button>
                                <button wire:click="delete({{ $value->id }})"
                                    class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-8">
            <div class="card" style="box-shadow: 3px 5px #888888;">
                {{-- <img src="img_avatar.png" alt="Avatar" style="width:100%"> --}}
                <div class="container" style="text-align: left;">
                    <p><b>{{ $xml_version ?? '' }}</b></p>
                    <p><b>{{ $doctype ?? '' }}</b></p>
                    <p><b>{{ $article ?? '' }}</b></p>
                    <h4><b>{{ $revista_identificacion ?? '' }}</b></h4>
                    {{-- <p>{{ $revista_name ?? '' }}</p> --}}
                    <p>{{ '<front>' }}</p>
                    <p style="text-indent :2em;">{{ '<journal-meta>' }}</p>
                    <p style="text-indent :2em;">{{ '<journal-id journal-id-type="redalyc">' }}{{ $revista_journal_id ?? '' }}{{ '</journal-id>' }}</p>
                    <p style="text-indent :2em;">{{ '<journal-title-group>' }}</p>
                        <p style="text-indent :4em;">{{ '<journal-title specific-use="original" xml:lang="en">' }}{{ $revista_name ?? '' }}{{ '</journal-title>' }}</p>
                    <p style="text-indent :2em;">{{ '</journal-title-group>' }}</p>      
                    <p style="text-indent :2em;">{{ '</journal-meta>' }}</p>
                    <p style="text-indent :2em;">{{ '<issn pub-type="ppub">' }}{{ $ppub_type ?? '' }}{{ '</issn>' }}</p>
                    <p style="text-indent :2em;">{{ '<issn pub-type="epub">' }}{{ $epub_type ?? '' }}{{ '</issn>' }}</p>
                    <p style="text-indent :2em;">{{ '<publisher>' }}</p>
                        <p style="text-indent :4em;">{{ '<publisher-name>' }}{{ $revista_publisher_name ?? '' }}{{ '</publisher-name>' }}</p>
                        <p style="text-indent :4em;">{{ '<publisher-loc>' }}</p>
                            <p style="text-indent :6em;">{{ '<country>' }}{{ $revista_country ?? '' }}{{ '</country>' }}</p>
                            <p style="text-indent :6em;">{{ '<email>' }}{{ $revista_email ?? '' }}{{ '</email>' }}</p>
                        <p style="text-indent :4em;">{{ '</publisher-loc>' }}</p>
                    <p style="text-indent :2em;">{{ '</publisher>' }}</p>
                    </p>
                    <p>{{ '</front>' }}</p>
                    <p>

                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
