<?php

namespace App\Http\Controllers;
use App\Models\Sepeda;
use Illuminate\Http\Request;

class SepedaController extends Controller
{
    public function index()
    {
        $sepedas = Sepeda::all();
        return view('index', compact('sepedas'));
    }
}
