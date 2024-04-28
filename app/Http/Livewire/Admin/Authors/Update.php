<?php

namespace App\Http\Livewire\Admin\Authors;

use App\Models\Authors;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $authors;

    public $firstname;
    public $lastname;
    public $organism;
    
    protected $rules = [
        
    ];

    public function mount(Authors $Authors){
        $this->authors = $Authors;
        $this->firstname = $this->authors->firstname;
        $this->lastname = $this->authors->lastname;
        $this->organism = $this->authors->organism;        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Authors') ]) ]);
        
        $this->authors->update([
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'organism' => $this->organism,
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.authors.update', [
            'authors' => $this->authors
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Authors') ])]);
    }
}
