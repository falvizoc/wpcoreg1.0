<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class UsersIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;

    public function render()
    {
        $users = User::where('email','LIKE','%'. $this->search. '%')
                    ->orWhere('name','LIKE','%'. $this->search. '%')
                    ->paginate(5);

        return view('livewire.admin.users-index', compact('users'));
    }

    public function updatingSearch($value)
    {
        $this->resetPage();
    }

}
