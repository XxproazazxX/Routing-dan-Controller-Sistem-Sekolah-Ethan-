@extends('layouts.app')

@section('title', $title)

@section('content')
<div class="container mx-auto px-4 py-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Teacher List</h1>
        <a href="{{ route('teachers.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium">
            Add Teacher
        </a>
    </div>

    <div class="bg-white shadow rounded-lg overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">NIP</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Subject</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Tindakan</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($teachers as $teacher)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $teacher['nip'] }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $teacher['name'] }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $teacher['subject'] }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                        <x-status-badge :status="$teacher['status']" />
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-2">
                        <a href="{{ route('teachers.show', ['id' => $teacher['id']]) }}" class="text-blue-600 hover:text-blue-900">Show</a>
                        <a href="{{ route('teachers.edit', ['id' => $teacher['id']]) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection