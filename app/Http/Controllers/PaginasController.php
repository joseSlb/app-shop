<?php

namespace pruebaB\Http\Controllers;

use pruebaB\Http\Controllers\Controller;

class PaginasController extends Controller
{

    public function contacto()
    {
        return view('contacto');
    }
    /******************************************/
    public function servicios()
    {
        return view('servicios');
    }
}