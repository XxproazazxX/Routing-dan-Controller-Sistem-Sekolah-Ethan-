<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return "Menampilkan daftar siswa";
    }

    public function create()
    {
        return "Menampilkan form untuk menambahkan siswa baru";
    }

    public function store(Request $request)
    {
        return "Menyimpan data siswa baru";
    }

    public function show($id)
    {
        return "menampilkan detail siswa dengan ID: {$id}";
    }

    public function edit($id)
    {
        return "Menampilkan form untuk mengedit siswa dengan ID: {$id}";
    }

    public function update(Request $request, $id)
    {
        return "Memperbarui data siswa dengan ID: {$id}";
    }

    public function destroy($id)
    {
        return "Menghapus data siswa dengan ID: {$id}";
    }
}
