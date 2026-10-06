<?php

namespace App\Http\Controllers;

use App\Models\Shelter;

class ShelterController extends Controller
{
    public function index()
    {
        $shelters = Shelter::latest()->get();

        return view('shelters.index', compact('shelters'));
    }
}