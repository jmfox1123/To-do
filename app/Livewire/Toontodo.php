<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\todo;

class Toontodo extends Component
{
    public function render()
    {
        // maakt todo toegankelijk in toontodo blade
        return view('livewire.toontodo',[
            'todo' => todo::all(),
        ]); 
    }
    public function delete($id){
        // verwijder todo
        todo::find($id)->delete();
    }
    public function update($id){
        //voeg 1 toe in database zodat taak voltooid is
        todo::where('id', $id)->update([
            'Gedaan' => '1',
        ]);
    }
}
