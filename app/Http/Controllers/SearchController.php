<?php

namespace App\Http\Controllers;

use App\Models\Curriculo;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search(){
        //$dataCurriculo = Curriculo::all();
        $dataCurriculo = DB::select('SELECT DISTINCT NomeProfissional,CienciaVitaeID FROM funcionarios WHERE CienciaVitaeID != null ');
        return view('search')->with(['funcionarios'=>$dataCurriculo]);
    }


}
