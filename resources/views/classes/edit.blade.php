@extends('layouts.app')

@section('title', $title)

@section('content')
<div class="container mx-auto px-4 py-6 max-w-2xl">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Edit Data Kelas</h1>

    <form action="{{ route('classes.index') }}" method="GET" class="bg-white p-6 rounded-lg shadow space-y-4">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Nama Kelas</label>
            <input type="text" name="name" value="{{ $class['name'] }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm border p-2 focus:ring-blue-500 focus:border-blue-500" required>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Tingkat</label>
            <select name="grade" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm border p-2 focus:ring-blue-500 focus:border-blue-500">
                <option value="X" {{ $class['grade'] == 'X' ? 'selected' : '' }}>X</option>
                <option value="XI" {{ $class['grade'] == 'XI' ? 'selected' : '' }}>XI</option>
                <option value="XII" {{ $class['grade'] == 'XII' ? 'selected' : '' }}>XII</option>
            </select>
        </div>

       <div>
    <label class="block text-sm font-medium text-gray-700 mb-1">Jurusan</label>
    <select name="major_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm border p-2 focus:ring-blue-500 focus:border-blue-500">
        <option value="1" {{ ($class['major'] ?? $class['major_id'] ?? '') == 'AKL' || ($class['major_id'] ?? '') == '1' ? 'selected' : '' }}>AKL - Akuntansi dan Keuangan Lembaga</option>
        <option value="2" {{ ($class['major'] ?? $class['major_id'] ?? '') == 'TKJ' || ($class['major_id'] ?? '') == '2' ? 'selected' : '' }}>TKJ - Teknik Komputer dan Jaringan</option>
        <option value="3" {{ ($class['major'] ?? $class['major_id'] ?? '') == 'BD' || ($class['major_id'] ?? '') == '3' ? 'selected' : '' }}>BD - Bisnis Digital</option>
    </select>
        </div>

<div>
    <label class="block text-sm font-medium text-gray-700 mb-1">Wali Kelas</label>
    <select name="teacher_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm border p-2 focus:ring-blue-500 focus:border-blue-500">
        <option value="1" {{ ($class['homeroom_teacher'] ?? $class['teacher_id'] ?? '') == 'Budi Santoso' || ($class['teacher_id'] ?? '') == '1' ? 'selected' : '' }}>Budi Santoso</option>
        <option value="2" {{ ($class['homeroom_teacher'] ?? $class['teacher_id'] ?? '') == 'Siti Aminah' || ($class['teacher_id'] ?? '') == '2' ? 'selected' : '' }}>Siti Aminah</option>
    </select>
</div>
        <div class="flex justify-end space-x-3 pt-4 border-t">
            <a href="{{ route('classes.index') }}" class="bg-gray-200 text-gray-700 px-4 py-2 rounded-lg text-sm font-medium hover:bg-gray-300">Batal</a>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-blue-700">Update</button>
        </div>
    </form>
</div>
@endsection