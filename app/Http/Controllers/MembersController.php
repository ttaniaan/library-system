<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembersController extends Controller 
{
    public function index() {
        $members = ['Rion Kenzo', 'Caine Chana', 'Gin Geheboi', 'Krow Boloni', 'Harris Morgan'];
        return view('members.index', compact('members'));
    }
}