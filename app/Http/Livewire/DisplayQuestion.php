<?php

namespace App\Http\Livewire;

use App\Model\questions;
use Illuminate\Http\Request;
use Livewire\Component;

class DisplayQuestion extends Component
{
    public $question;

//    public function updateParent(){
//        return $refresh;
//    }
    public function mount(Request $request){
        $getQuestion =questions::where('slug',$request->slug)->first();
        $getQuestion->views +=1;
        $getQuestion->update();
        $this->question =$getQuestion;

    }
    public function render()
    {
        return view('livewire.display-question');
    }
}
