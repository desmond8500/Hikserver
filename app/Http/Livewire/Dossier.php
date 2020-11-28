<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Dossier extends Component
{
    public $folders= "hello";
    public $images = 0;
    public $folder = null;
    public $page_name = "Vidéo surveillance";

    public function mount(){
        $this->folders = Storage::disk('public')->Directories('cctv/point_e');

    }

    public function getImages($folder){
        $name = explode('-', basename($folder));
        $this->page_name = $name[0];
        $this->images = Storage::disk('public')->files($folder);
    }

    public function render()
    {
        return view('livewire.dossier');
    }
}
