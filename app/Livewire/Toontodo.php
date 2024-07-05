<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\todo;


class Toontodo extends Component
{
    public function render()
    {
        return view('livewire.toontodo',[
            'todo' => todo::all(),
        ]); 
    }
    public function delete($id){
        todo::find($id)->delete();
    }
    public function update($id){
        todo::where('id', $id)->update([
            'Gedaan' => '1',
        ]);
    }
}
