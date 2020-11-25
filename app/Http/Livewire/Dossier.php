<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Dossier extends Component
{
    public $folders= "hello";
    public $images = 0;
    public $folder = null;

    public function mount(){
        $this->folders = Storage::disk('public')->Directories('cctv/point_e');

    }

    public function getImages($folder){

        // $this->images = $folder;
        // $this->images = Storage::files('public/cctv/point_e');
        $this->images = Storage::disk('public')->files($folder);
    }

    public function render()
    {
        return view('livewire.dossier');
    }
}
