<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;

class Students extends Component
{
    public $students;
    public $studentId,$nis,$nama,$jk,$temp_lahir,$tgl_lahir,$alamat,$asal_sekolah,$kelas,$jurusan;
    public $isOpen= 0;

    public function render()
    {
        $this->students = Student::all();
        return view('livewire.students');
    }

    public function showModal(){
        $this->isOpen = true;
    }

    public function hideModal(){
        $this->isOpen = false;
    }

    public function store(){
        $this->validate( [
            'nis' => 'required',
            'nama' => 'required',
            'jk' => 'required',
            'temp_lahir' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'asal_sekolah' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required'
        ]); 

        Student::updateOrCreate(['id' => $this->studentId], [
            'nis' => $this->nis,
            'nama' => $this->nama,
            'jk' => $this->jk,
            'temp_lahir' => $this->temp_lahir,
            'tgl_lahir' => $this->tgl_lahir,
            'alamat' => $this->alamat,
            'asal_sekolah' => $this->asal_sekolah,
            'kelas' => $this->kelas,
            'jurusan' => $this->jurusan
        ]);

        $this->hidemodal();

        $this->nis = '';
        $this->nama = '';
        $this->jk = '';
        $this->temp_lahir = '';
        $this->tgl_lahir = '';
        $this->alamat = '';
        $this->asal_sekolah = '';
        $this->kelas = '';
        $this->jurusan = '';
    }
    
    public function edit($id){
        $student = Student::findOrFail($id);
        $this->studentId = $id;
        $this->nis = $student->nis;
        $this->nama = $student->nama;
        $this->jk = $student->jk;
        $this->temp_lahir = $student->temp_lahir;
        $this->tgl_lahir = $student->tgl_lahir;
        $this->alamat = $student->alamat;
        $this->asal_sekolah = $student->asal_sekolah;
        $this->kelas = $student->kelas;
        $this->jurusan = $student->jurusan;

        $this->showModal();
    }
}
