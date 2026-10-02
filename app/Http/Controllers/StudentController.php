<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $title = "Sistem Sekolah - Daftar Siswa";
        $students = [
            [
                'id' => 1,
                'nis' => '1001',
                'name' => 'Andi',
                'class' => 'XII TKJ 1',
                'major' => 'TKJ'
            ],
            [
                'id' => 2,
                'nis' => '1002',
                'name' => 'Budi',
                'class' => 'XII RPL 1',
                'major' => 'RPL'
            ],
            [
                'id' => 3,
                'nis' => '1003',
                'name' => 'Nina',
                'class' => 'XI TKJ 3',
                'major' => 'TKJ'
            ],
        ];
        return view('students.index', [
            'title' => $title,
            'students' => $students
        ]);
    }

    public function create()
    {
        $title = "Sistem Sekolah - Tambah Siswa";
        return view('students.create', ['title' => $title]);
    }

    public function store(Request $request)
    {  
        //validasi
       $request->validate([
            'nis' => 'required|String|Size:4|Unique:students,nis',
            'name' => 'required|String',
            'class' => 'required',
            'major' => 'required'
        ]);

        // Simpan data siswa ke database
        // Student::create($request->all());

        return redirect()->route('students.index')->with('success', 'Data siswa berhasil ditambahkan.');
    }

    public function show($id)
    {
        $title = "Sistem Sekolah - Detail Siswa";
        return view('students.show', ['title' => $title]);
    }

    public function edit($id)
    {
        $title = "Sistem Sekolah - Ubah Siswa";
        return view('students.edit', ['title' => $title]);
    }

    public function update(Request $request, $id)
    {
        return "Melakukan perubahan data siswa";
    }

    public function destroy($id)
    {
        return "Menghapus data siswa";
    }
}
