<?php

namespace App\Http\Livewire;

use App\Model\questions;
use Livewire\Component;

class NewQuestion extends Component
{
    public $title ='';
    public $body ='';
    public $msg =false;

    public function updated(){
        $this->validate([
           'title' =>'required|min:15|max:255',
           'body' => 'required|min:100|max:2555'
        ]);
    }
    public function add_new_question(){
        $this->validate([
            'title' =>'required|min:15|max:255',
            'body' => 'required|min:100|max:2555'
        ]);
       $slug =str_replace(' ','-',$this->title);
        questions::create([
           'user_id' => auth()->id(),
           'title' => $this->title,
           'body' => $this->body,
           'slug' =>$slug
        ]);
        $this->msg =true;
        $this->title ='';
        $this->body ='';
    }

    public function render()
    {
        return view('livewire.new-question');
    }
}
