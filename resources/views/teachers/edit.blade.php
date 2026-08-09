@extends('layouts.app')

@section('title', $title)

@section('content')
<div class="container mx-auto px-4 py-6 max-w-2xl">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Edit Data Guru</h1>

    <form action="{{ route('teachers.index') }}" method="GET" class="bg-white p-6 rounded-lg shadow space-y-4">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">NIP</label>
            <input type="text" name="nip" value="{{ $teacher['nip'] }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm border p-2 focus:ring-blue-500 focus:border-blue-500" required>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
            <input type="text" name="name" value="{{ $teacher['name'] }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm border p-2 focus:ring-blue-500 focus:border-blue-500" required>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Jenis Kelamin</label>
            <select name="gender" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm border p-2 focus:ring-blue-500 focus:border-blue-500">
                <option value="Laki-laki" {{ $teacher['gender'] == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option value="Perempuan" {{ $teacher['gender'] == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Mata Pelajaran</label>
            <input type="text" name="subject" value="{{ $teacher['subject'] }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm border p-2 focus:ring-blue-500 focus:border-blue-500" required>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">No. Telepon</label>
            <input type="text" name="phone_number" value="{{ $teacher['phone'] }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm border p-2 focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
            <select name="status" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm border p-2 focus:ring-blue-500 focus:border-blue-500">
                <option value="Aktif" {{ $teacher['status'] == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                <option value="Tidak Aktif" {{ $teacher['status'] == 'Tidak Aktif' ? 'selected' : '' }}>Tidak Aktif</option>
            </select>
        </div>

        <div class="flex justify-end space-x-3 pt-4 border-t">
            <a href="{{ route('teachers.index') }}" class="bg-gray-200 text-gray-700 px-4 py-2 rounded-lg text-sm font-medium hover:bg-gray-300">Batal</a>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-blue-700">Update</button>
        </div>
    </form>
</div>
@endsection