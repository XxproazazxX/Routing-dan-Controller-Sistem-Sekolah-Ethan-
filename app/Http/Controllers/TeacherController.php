<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    // Data dummy guru sesuai ketentuan tugas
    private $teachers = [
        [
            'id' => 1,
            'nip' => '198501012024',
            'name' => 'Budi Santoso',
            'gender' => 'Laki-Laki',
            'subject' => 'Akuntansi Dasar',
            'phone' => '081234560001',
            'status' => 'Aktif',
        ],
        [
            'id' => 2,
            'nip' => '198703152024',
            'name' => 'Siti Aminah',
            'gender' => 'Perempuan',
            'subject' => 'Jaringan Komputer',
            'phone' => '081234560002',
            'status' => 'Aktif',
        ]
    ];

    public function index()
    {
        return view('teachers.index', [
            'title' => 'Sistem Sekolah - Daftar Guru',
            'teachers' => $this->teachers
        ]);
    }

    public function create()
    {
        return view('teachers.create', [
            'title' => 'Sistem Sekolah - Tambah Guru'
        ]);
    }

    public function show($id)
    {
        // Mencari guru berdasarkan ID
        $teacher = collect($this->teachers)->firstWhere('id', $id);

        return view('teachers.show', [
            'title' => 'Sistem Sekolah - Detail Guru',
            'teacher' => $teacher
        ]);
    }

    public function edit($id)
    {
        // Mencari guru berdasarkan ID untuk di-edit
        $teacher = collect($this->teachers)->firstWhere('id', $id);

        return view('teachers.edit', [
            'title' => 'Sistem Sekolah - Edit Guru',
            'teacher' => $teacher
        ]);
    }
}