<?php

namespace App\Http\Controllers;

use App\Phonebook;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function index()
    {
//        $users = Phonebook::all();
        $users = Phonebook::orderBy('name')->paginate(10);
        return view('home', compact('users'));
    }

}
