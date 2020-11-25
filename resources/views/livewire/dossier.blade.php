<div class="mt-4">
    <div class="row">
        <div class="col-md-3">
            <ul class="list-group">
                @foreach ($folders as $folder)
                    <button class="list-group-item list-group-item-action" wire:click="getImages('{{ $folder }}')">{{ basename($folder) }}</button>

                @endforeach
            </ul>
        </div>

        <div class="col-md-9">
            @if ($images)
                <div class="card-columns">
                    @foreach ($images as $item)
                        <div class="card">
                            <div> {{ basename($item) }} </div>
                            <a href="{{ asset("storage/$item") }}" data-lightbox="image-1" data-title="My caption">
                                <img src="{{ asset("storage/$item") }}" class="img-fluid" alt="{{ asset("storage/$item") }}">
                            </a>
                            <a href="{{ asset("storage/$item") }}" download class="btn btn-block btn-dark">Télécharger</a>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

    </div>


</div>
