<?php

namespace App\Http\Livewire;

use App\Model\answers;
use App\Model\questions;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddAnswer extends Component
{
    public $question;
    public $msg =false;
    public $body;
    public function updateParent(){
        $this->emit('updateParent');
    }
    public function mount(questions $question){
     $this->question=$question;
    }
    public function updated(){
        $this->validate([
            'body' =>'required|min:15|max:2555'
        ]);
    }
    public function add_new_answer(){

        $this->validate([
            'body' =>'required|min:15|max:2555'
        ]);
        answers::create([
            'user_id' => Auth::id(),
            'question_id' =>$this->question->id,
            'body' =>$this->body
        ]);
       $this->msg =true;
       $this->body ='';

    }
    public function render()
    {
        return view('livewire.add-answer');
    }
}
