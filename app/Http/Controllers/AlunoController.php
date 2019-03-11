<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlunoController extends Controller
{
    //
    public function listaAluno(){
        return view('layout.layout');
    }
    
    public function listasAlunos(){
        $data = array('nome1' => 'Wellyngton', 'nome2' => 'Felipe');
        dd($data);
        echo $data['Wellyngton'];
    }   
}
