@extends('layouts.app')

@section('title', $title)

@section('content')
<div class="container mx-auto px-4 py-6 max-w-2xl">
    <div class="bg-white p-6 rounded-lg shadow">
        <div class="flex justify-between items-center mb-6 border-b pb-4">
            <h1 class="text-2xl font-bold text-gray-800">Detail Jurusan</h1>
            <a href="{{ route('majors.index') }}" class="text-sm text-gray-600 hover:text-gray-900">&larr; Kembali ke Daftar</a>
        </div>

        <div class="space-y-4">
            <div>
                <span class="block text-xs font-semibold text-gray-500 uppercase tracking-wider">Kode Jurusan</span>
                <p class="text-lg font-bold text-gray-900 mt-1">{{ $major['code'] }}</p>
            </div>

            <div>
                <span class="block text-xs font-semibold text-gray-500 uppercase tracking-wider">Nama Jurusan</span>
                <p class="text-gray-800 mt-1">{{ $major['name'] }}</p>
            </div>

            <div>
                <span class="block text-xs font-semibold text-gray-500 uppercase tracking-wider">Deskripsi</span>
                <p class="text-gray-600 mt-1 leading-relaxed">{{ $major['description'] }}</p>
            </div>
        </div>

        <div class="flex justify-end space-x-3 pt-6 mt-6 border-t">
            <a href="{{ route('majors.edit', ['major' => $major['id']]) }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg text-sm font-medium">Edit Jurusan</a>
        </div>
    </div>
</div>
@endsection