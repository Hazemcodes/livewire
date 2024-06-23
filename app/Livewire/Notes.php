<?php

namespace App\Livewire;

use App\Models\Note;
use Livewire\Component;

class Notes extends Component
{
    public $titles = [];
    public $title;

    protected $rules = [
        'title' => ['required'],
    ];

    public function storeNote()
    {
        Note::create([
            'title' => $this->title,
        ]);
        session()->flash('message', 'The note successfully saved!');

        return redirect('/');
    }

    public function mount()
    {
        $this->titles = Note::get();
    }

    public function render()
    {
        return view('livewire.notes');
    }
}
