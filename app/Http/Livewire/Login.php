<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class User extends Component
{
    public $user = [];


    public function render()
    {
        return view('auth.livewire.login');
    }
    public function rules(){
        return [
        'member.name' => 'required|string|min:4',
        'member.email'=>'required|email|unique:members,email',
        'member.address' => 'required|string',
        'member.contact' => 'required|unique:members,contact'
        ];
    }
    /**
     * @param mixed $propertyName
     *
     * @return [type]
     */
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    /**
     * @return [type]
     */
    public function submitMember(){
        $validated = $this->validate();
         Auth::create($validated['member']);
            dd($validated['member']);
    }
    /**
     * @return [type]
     */
    public function messages(){
        return [
            'member.name.string'=> 'include only Strings',
            'member.address.string' => 'include strings only.'
        ];
    }
}
