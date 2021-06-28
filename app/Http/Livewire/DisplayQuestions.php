<?php

namespace App\Http\Livewire;

use App\Model\questions;
use Livewire\Component;

class DisplayQuestions extends Component
{
    public $questions;
    public $title ='';
    public $body ='';
    public $msg =false;

    public function mount()
    {
        $this->questions =questions::all();
    }
    public function render()
    {
        return view('livewire.display-questions');
    }
}
