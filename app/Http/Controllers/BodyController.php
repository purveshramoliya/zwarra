<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BodyController extends Controller
{
    //
    public function index(){
        return view('admin.body.index');
    }
    public function create(){
        return view('admin.body.create');
    }
}
