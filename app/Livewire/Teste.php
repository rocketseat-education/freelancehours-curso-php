<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Teste extends Component
{
    public string $search = '';

    public function render()
    {
        return view('livewire.teste', [
            'users' => User::query()
                ->when($this->search, fn ($q) => $q->where('name', 'like', "%{$this->search}%"))
                ->get(),
        ]);
    }
}
