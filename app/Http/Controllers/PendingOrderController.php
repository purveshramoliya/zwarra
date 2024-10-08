<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PendingOrderController extends Controller
{
    //
    public function index(){
        return view('admin.pendingorder.index');
    }
    public function decline(){
        return view('admin.pendingorder.decline');
    }
}
