<?php

namespace App\Http\Controllers;

use App\Teacher;

class TeachersController extends Controller {

    public function index()
    {
        $teachers = Teacher::paginate(1);
        //$teachers->setPath('teachers/');

        return view('teacher.index', compact('teachers'));
    }

	public function show($id)
	{
		$teacher = Article::findBySlugOrId($id);

		return view('teacher.view', compact('teacher'));
	}

}
