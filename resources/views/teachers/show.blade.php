@extends('layouts.app')

@section('title', $title)

@section('content')
<div class="container mx-auto px-4 py-6 max-w-2xl">
    <div class="bg-white p-6 rounded-lg shadow">
        <div class="flex justify-between items-center mb-6 border-b pb-4">
            <h1 class="text-2xl font-bold text-gray-800">Detail Guru</h1>
            <a href="{{ route('teachers.index') }}" class="text-sm text-gray-600 hover:text-gray-900">&larr; Kembali ke Daftar</a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <span class="block text-xs font-semibold text-gray-500 uppercase tracking-wider">NIP</span>
                <p class="text-gray-900 mt-1">{{ $teacher['nip'] }}</p>
            </div>

            <div>
                <span class="block text-xs font-semibold text-gray-500 uppercase tracking-wider">Nama Lengkap</span>
                <p class="text-lg font-bold text-gray-900 mt-1">{{ $teacher['name'] }}</p>
            </div>

            <div>
                <span class="block text-xs font-semibold text-gray-500 uppercase tracking-wider">Jenis Kelamin</span>
                <p class="text-gray-800 mt-1">{{ $teacher['gender'] }}</p>
            </div>

            <div>
                <span class="block text-xs font-semibold text-gray-500 uppercase tracking-wider">Mata Pelajaran</span>
                <p class="text-gray-800 mt-1">{{ $teacher['subject'] }}</p>
            </div>

            <div>
                <span class="block text-xs font-semibold text-gray-500 uppercase tracking-wider">No. Telepon</span>
                <p class="text-gray-800 mt-1">{{ $teacher['phone'] }}</p>
            </div>

            <div>
                <span class="block text-xs font-semibold text-gray-500 uppercase tracking-wider">Status</span>
                <div class="mt-1">
                    <x-status-badge :status="$teacher['status']" />
                </div>
            </div>
        </div>

        <div class="flex justify-end space-x-3 pt-6 mt-6 border-t">
            <a href="{{ route('teachers.edit', $teacher['id']) }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg text-sm font-medium">Edit Guru</a>
        </div>
    </div>
</div>
@endsection