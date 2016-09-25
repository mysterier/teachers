<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\SpecialRequest;

use App\User;

class SpecialController extends Controller
{   
    public function create()
    {
        return view('special.create');
    }
    
    public function store(SpecialRequest $request)
    {
        $user = new User ($request->all());
        $user->save();
        return redirect('http://www.tt.com');
    }
}
