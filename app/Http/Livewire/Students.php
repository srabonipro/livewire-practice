<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;

class Students extends Component
{
    public function render()
    {
        $data['students'] = Student::latest('id')->get();
        return view('livewire.students', $data);
    }
}
