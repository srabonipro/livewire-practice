<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Illuminate\Http\Request;
use Livewire\Component;

class Students extends Component
{
    public $firstname;
    public $lastname;
    public $email;
    public $phone;

    public function resetInputs()
    {
        $this->firstname = '';
        $this->lastname = '';
        $this->email = '';
        $this->phone = '';
    }

    public function store()
    {
        $this->validate([
            'firstname' => "required",
            'lastname' => "required",
            'email' => "required|email|unique:students,email",
            'phone' => "required",
        ]);

        Student::create([
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'phone' => $this->phone,
        ]);
        session()->flash('message', 'Student created successfully!');
        $this->resetInputs();
    }

    public function render()
    {
        $data['students'] = Student::latest('id')->get();
        return view('livewire.students', $data);
    }
}
