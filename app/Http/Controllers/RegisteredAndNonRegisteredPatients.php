<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisteredAndNonRegisteredPatients extends Controller
{
    //
    public function index(Request $request)
    {
        return view('admin.Registeredandnonregisteredpatients.index');
    }
}
