<?php

namespace App\Http\Livewire\Admin\Authors;

use App\Models\Authors;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $firstname;
    public $lastname;
    public $organism;
    
    protected $rules = [
        
    ];

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function create()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('Authors') ])]);
        
        Authors::create([
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'organism' => $this->organism,
            'user_id' => auth()->id(),
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.authors.create')
            ->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('Authors') ])]);
    }
}
