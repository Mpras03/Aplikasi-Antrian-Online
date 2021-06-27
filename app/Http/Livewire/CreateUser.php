<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class CreateUser extends Component
{
    public $user;
    public $userId;
    public $action;
    public $button;

    protected function getRules()
    {
        $rules = ($this->action == "updateUser") ? [
            'user.email' => 'required|email|unique:users,email,' . $this->userId
        ] : [
            'user.password' => 'required|min:8|confirmed',
            'user.password_confirmation' => 'required' // livewire need this
        ];

        return array_merge([
            'user.name' => 'required|min:3',
            'user.email' => 'required|email|unique:users,email'
        ], $rules);
    }

    public function createUser ()
    {
        $this->resetErrorBag();
        $this->validate();
        $this->user['username'] = $this->user['email'];
        $password = $this->user['password'];

        if ( !empty($password) ) {
            $this->user['password'] = Hash::make($password);
        }
        User::create($this->user);

        $this->emit('saved');
        $this->reset('user');
    }

    public function updateUser ()
    {
        $this->resetErrorBag();
        $this->validate();

        User::query()
            ->where('id', $this->userId)
            ->update([
                "name" => $this->user->name,
                "email" => $this->user->email,
            ]);

        $this->emit('saved');
    }

    public function mount ()
    {
        if (!$this->user && $this->userId) {
            $this->user = User::find($this->userId);
        }

        $this->button = $this->create_button($this->action, "User");
    }

    function create_button ($action, $model)
    {
        $action = str_replace($model, "", $action);

        return [
            'submit_text' => ($action == "update") ? "Perbarui" : "Simpan",
            'submit_response' => ($action == "update") ? "Diperbarui." : "Disimpan.",
            'submit_response_notyf' => ($action == "update") ?
                "Data ".$model." Berhasil diperbarui" : "Data ".$model." Berhasil ditambahkan"
        ];
    }

    public function render()
    {
        return view('livewire.create-user');
    }
}
