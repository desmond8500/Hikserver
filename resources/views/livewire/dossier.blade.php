<div class="mt-4">
    <div class="row">
        <div class="col-md-3"><h3 class="text-center">Dates</h3></div>
        <div class="col-md-9">
            <h3 class="text-center">{{ basename($page_name) }}</h3>
        </div>
        <div class="col-md-3 mb-2">
            <ul class="list-group">
                @foreach ($folders as $folder)
                    @php
                        $name = explode('-', basename($folder));
                    @endphp
                    <button class="list-group-item list-group-item-action {{ $name[0]==$page_name ? 'active' : '' }}" wire:click="getImages('{{ $folder }}')">{{ $name[0] }}</button>
                @endforeach
            </ul>

            {{-- <input type="date" class="form-control" wire:model="date">
            {{ $date }} --}}
        </div>

        <div class="col-md-9">

            @if ($images)
                <div class="row">
                    @foreach ($images as $item)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            @php
                                $file = App\Http\Controllers\CaptureController::getImageName(basename($item));
                            @endphp
                            <div class="bg-dark text-light">
                                <span class="text-right ml-3">
                                    {{ $file[0] }} : {{ $file[1] }}
                                </span>
                                <span class="float-right mr-3">
                                    {{ $file[0] }} : {{ $file[1] }}
                                </span>

                            </div>
                            <a href="{{ asset("storage/$item") }}" data-lightbox="image-1" data-title="My caption">
                                <img src="{{ asset("storage/$item") }}" class="img-fluid" alt="{{ asset("storage/$item") }}">
                            </a>
                            <a href="{{ asset("storage/$item") }}" download class="btn btn-block btn-dark">Télécharger</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            @else
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center mt-4">Veuillez choisir une date pour afficher les images</h2>

                    </div>
                </div>


            @endif
        </div>
    </div>
</div>
