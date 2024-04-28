<?php

namespace App\Http\Livewire\Admin\Authors;

use App\Models\Authors;
use Livewire\Component;

class Single extends Component
{

    public $authors;

    public function mount(Authors $Authors){
        $this->authors = $Authors;
    }

    public function delete()
    {
        $this->authors->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('Authors') ]) ]);
        $this->emit('authorsDeleted');
    }

    public function render()
    {
        return view('livewire.admin.authors.single')
            ->layout('admin::layouts.app');
    }
}
