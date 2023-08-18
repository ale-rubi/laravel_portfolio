<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Proyecto;
use Illuminate\Http\Request;

class PortafolioController extends Controller
{
    //
    public function index()
    {
        $proyectos = Proyecto::paginate();
        return view('welcome', compact('proyectos'));
    }
}
