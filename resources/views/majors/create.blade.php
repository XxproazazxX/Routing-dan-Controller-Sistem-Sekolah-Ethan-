@extends('layouts.app')

@section('title', $title)

@section('content')
<div class="container mx-auto px-4 py-6 max-w-2xl">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Tambah Jurusan Baru</h1>

    <form action="{{ route('majors.index') }}" method="GET" class="bg-white p-6 rounded-lg shadow space-y-4">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Kode Jurusan</label>
            <input type="text" name="code" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm border p-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Contoh: AKL, TKJ, BD" required>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Nama Jurusan</label>
            <input type="text" name="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm border p-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Contoh: Akuntansi dan Keuangan Lembaga" required>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Deskripsi</label>
            <textarea name="description" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm border p-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Penjelasan singkat mengenai jurusan..."></textarea>
        </div>

        <div class="flex justify-end space-x-3 pt-4 border-t">
            <a href="{{ route('majors.index') }}" class="bg-gray-200 text-gray-700 px-4 py-2 rounded-lg text-sm font-medium hover:bg-gray-300">Batal</a>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-blue-700">Simpan</button>
        </div>
    </form>
</div>
@endsection