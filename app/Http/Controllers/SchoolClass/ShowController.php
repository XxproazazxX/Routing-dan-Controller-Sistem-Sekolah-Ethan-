<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;

class ShowController extends Controller
{
    public function __invoke($id)
    {
        $title = 'Sistem Sekolah - Detail Kelas';
        $classes = [
            [
                'id' => 1,
                'name' => 'XII AKL 1',
                'grade' => 'XII',
                'major' => 'AKL',
                'homeroom_teacher' => 'Budi Santoso'
            ],
            [
                'id' => 2,
                'name' => 'XII TKJ 1',
                'grade' => 'XII',
                'major' => 'TKJ',
                'homeroom_teacher' => 'Siti Aminah'
            ]
        ];

        $class = collect($classes)->firstWhere('id', (int) $id);

        if (!$class) {
            abort(404);
        }

        return view('classes.show', compact('title', 'class'));
    }
}