<?php

namespace App\Http\Controllers;

use App\Types;

use Illuminate\Http\Request;

class TypesController extends Controller
{
    public function index() 
    {
        $types = Types::all();

        return view('types.index', compact('types'));
    }

    public function type(Types $type)
    {
        return view('types.accounts', compact('type'));
    }
}
