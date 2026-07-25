<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        return "Menampilkan halaman daftar guru";
    }

    public function create()
    {
        return "Menampilkan halaman tambah guru";
    }

    public function store(Request $request)
    {
        return "Melakukan penambahan data guru";
    }

    public function show($id)
    {
        return "menampilkan detail guru dengan ID: {$id}";
    }

    public function edit($id)
    {
        return "Menampilkan halaman edit guru";
    }

    public function update(Request $request, $id)
    {
        return "Melakukan perubahan data guru";
    }

    public function destroy($id)
    {
        return "Menghapus data guru";
    }
}