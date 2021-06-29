<?php

namespace App\Http\Livewire;

use App\Model\questions;
use Livewire\Component;

class DisplayQuestions extends Component
{
    protected $questions ;

    public $listeners =['updateParent' =>'$refresh'];
    public function mount()
    {
        $this->questions =questions::latest()->paginate(2);
    }
    public function render()
    {
        return view('livewire.display-questions',[
            'questions' =>$this->questions
        ]);
    }
}
