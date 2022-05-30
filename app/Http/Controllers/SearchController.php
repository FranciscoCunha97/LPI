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
        $dataFuncionario = DB::select('Select distinct NomeProfissional,CienciaVitaeID from funcionarios where CienciaVitaeID != null ');
        return view('search')->with(['funcionarios'=>$dataFuncionario],'docentes');
    }

    /*
     * Pesquisa todos os curriculos de todos os docentes
     */
    public function searchAll(){
        $dataCurriculo = DB::select('Select funcionarios.NomeProfissional, Curriculos.CienciaVitaeID, Curriculos.Tipo, Curriculos.Titulo, Curriculos.DataPublicacao
                                            From funcionarios INNER JOIN Curriculos ON funcionarios.CienciaVitaeID = Curriculos.CienciaVitaeID');
        return view('allCurriculos')->with(['curriculos'=>$dataCurriculo]);
    }

    public function curriculumId($cienciaVitaeId){
        $docente = DB::select("SELECT Tipo, Titulo, DataPublicacao FROM Curriculos WHERE CienciaVitaeID = '$cienciaVitaeId'");
        return view('curriculum')->with(['docentes'=>$docente]);
    }
}
