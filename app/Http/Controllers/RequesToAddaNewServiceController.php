<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use Illuminate\Http\Request;

class RequesToAddaNewServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('healthcare.Requesttoaddanewservice.index');
    }
    public function create()
    {
        return view('healthcare.Requesttoaddanewservice.create');
    }

    

}
