<?php
namespace App\Livewire;

use App\Models\todo;
use Livewire\Component;

class Nieuwtodo extends Component
{
//Post nieuwe To do op in Database;
    public $Todo ='';

    protected $rules = [
        'Todo' => 'required|min:3'
    ];

    public function save()
    {
        $this->validate();

        todo::create(
            $this->only(['Todo']) 
        );  
        return $this->redirect('/');
    }
    public function render()
    {
        return view('livewire.nieuwtodo');
    }
}
