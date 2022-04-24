<?php

namespace App\Http\Controllers;

use App\Models\Curriculo;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    /*
     * Pesquisa todos os Docentes para listar na tabela com os nomes
     */
    public function search(){
        //$dataCurriculo = Curriculo::all();
        $dataFuncionario = DB::select('SELECT DISTINCT NomeProfissional,CienciaVitaeID FROM funcionarios WHERE CienciaVitaeID != null ');
        return view('search')->with(['funcionarios'=>$dataFuncionario]);
    }


    /*
     * Pesquisa todos os curriculos de todos os docentes
     */
    public function searchAll(){
        $dataCurriculo = DB::select('Select funcionarios.NomeProfissional, Curriculos.CienciaVitaeID, Curriculos.Tipo, Curriculos.Titulo, Curriculos.DataPublicacao
                                            From funcionarios INNER JOIN Curriculos ON funcionarios.CienciaVitaeID = Curriculos.CienciaVitaeID');
        return view('allCurriculos')->with(['curriculos'=>$dataCurriculo]);

    }




}
