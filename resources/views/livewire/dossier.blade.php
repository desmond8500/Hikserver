<div class="mt-4">
    <div class="row">
        <div class="col-md-3">
            <ul class="list-group">
                @foreach ($folders as $folder)
                    @php
                        $name = explode('-', basename($folder));
                    @endphp
                    <button class="list-group-item list-group-item-action" wire:click="getImages('{{ $folder }}')">{{ $name[0] }}</button>

                @endforeach
            </ul>
        </div>

        <div class="col-md-9">
            @if ($images)
                <div class="card-columns">
                    @foreach ($images as $item)
                        <div class="card">
                            @php
                                $file = App\Http\Controllers\CaptureController::getImageName(basename($item));
                            @endphp
                            <div class="text-center bg-dark text-light">
                                {{ $file[0] }} : {{ $file[1] }}
                            </div>
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
