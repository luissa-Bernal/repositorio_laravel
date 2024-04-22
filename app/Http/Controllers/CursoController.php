<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return "Bienvenido a la pagina de cursos";
    }

    public function create(){
        return "En esta pagina podras crear curso";
    }

    public function show($curso){
        return "Bienvenido al curso $curso";
    }
}