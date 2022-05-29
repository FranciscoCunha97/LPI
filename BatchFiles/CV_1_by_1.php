<?php
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Stream\Stream;



//connection to API CienciaVitae
$username = "UFP_ADMIN";
$password = "uR*r78M3m3B-D";

$opts = array(
    'http'=> array(
        'method' => "GET",
        'header' => "Authorization: Basic " . base64_encode("$username:$password")
    )
);

$context = stream_context_create($opts);

//connection to database
$serverName = "DESKTOP-BKFJB4D\\SQLEXPRESS";
$connectionInfo = array("Database"=>"CienciaVitae");
$conn = sqlsrv_connect($serverName,$connectionInfo);

if( $conn ) {
    echo "Connection established.<br />";
}else{
    echo "Connection could not be established.<br />";
    die( print_r( sqlsrv_errors(), true));
}

$nomeCompleto = 'NomeCompleto';
$idCiencia = 'CienciaVitaeID';


$query_insert_curriculo = "INSERT INTO curriculos(CienciaVitaeID,Tipo,Titulo,DataPublicacao) VALUES (?,?,?,?)";

$nPublicacoes = 0;
$nCVID = "9215-7DC5-6245";

//vai buscar o curriculo de cada funcionario
$remote_url2 = 'https://api.cienciavitae.pt/v1.1/curriculum/' . $nCVID . '/output';
$context2 = stream_context_create($opts);
$file2 = file_get_contents($remote_url2,false,$context2);
$xml2=simplexml_load_string($file2) or die ("Error: Cannot create object");

$publicacoes = $xml2->xpath('//output:outputs/output:output');
foreach($publicacoes as $publicacao){

    $pid = $publicacao->xpath('output:output-type/@code');
    $id_publicacao = strval($pid[0]);

    if(strcmp($id_publicacao, "P101")==0){
        
        $tipo = "Artigo de Jornal";
        $title = $publicacao->xpath('output:journal-article/output:article-title');
        $t = strval($title[0]);
        $data = $publicacao->xpath('output:journal-article/output:publication-date/@year');
        $d = strval($data[0]);
        

    }else if(strcmp($id_publicacao, "P102")==0){
        $tipo = "Edição de Jornal";
        $title = $publicacao->xpath('output:journal-issue/output:issue-title');
        $t = strval($title[0]);
        $data = $publicacao->xpath('output:journal-issue/output:publication-date/@year');
        $d = strval($data[0]);
        

    }else if(strcmp($id_publicacao, "P103")==0){
        $tipo = "Livro";
        $title = $publicacao->xpath('output:book/output:title');
        $t = strval($title[0]);
        $data = $publicacao->xpath('output:book/output:publication-year');
        $d = strval($data[0]);
        

    }else if(strcmp($id_publicacao, "P104")==0){
        $tipo = "Edição de Livro";
        $title = $publicacao->xpath('output:edited-book/output:title');
        $t = strval($title[0]);
        $data = $publicacao->xpath('output:edited-book/output:publication-year');
        $d = strval($data[0]);
        

    }else if(strcmp($id_publicacao, "P105")==0){
        $tipo = "Capítulo de Livro";
        $title = $publicacao->xpath('output:book-chapter/output:chapter-title');
        $t = strval($title[0]);
        $data = $publicacao->xpath('output:book-chapter/output:publication-year');
        $d = strval($data[0]);

    }else if(strcmp($id_publicacao, "P106")==0){
        $tipo = "Revisão de Livro";
        $title = $publicacao->xpath('output:book-review/output:review-title');
        $t = strval($title[0]);

    }else if(strcmp($id_publicacao, "P107")==0){
        $tipo = "Tradução";
        $title = $publicacao->xpath('output:translation/output:title');
        $t = strval($title[0]);
        $data = $publicacao->xpath('output:translation/output:publication-year');
        $d = strval($data[0]);

    }else if(strcmp($id_publicacao, "P108")==0){
        $tipo = "Dissertação";
        $title = $publicacao->xpath('output:dissertation/output:title');
        $t = strval($title[0]);
        $data = $publicacao->xpath('output:dissertation/output:completion-date/@year');
        $d = strval($data[0]);

    }else if(strcmp($id_publicacao, "P110")==0){
        $tipo = "Artigo de Jornal";
        $title = $publicacao->xpath('output:newspapper-article/output:article-title');
        $t = strval($title[0]);
        $data = $publicacao->xpath('output:newspapper-article/output:publication-date/@year');
        $d = strval($data[0]);

    }else if(strcmp($id_publicacao, "P111")==0){
        $tipo = "Artigo de Boletim Informativo";
        $title = $publicacao->xpath('output:newsletter-article/output:article-title');
        $t = strval($title[0]);
        $data = $publicacao->xpath('output:newsletter-article/output:publication-date/@year');
        $d = strval($data[0]);

    }else if(strcmp($id_publicacao, "P112")==0){
        $tipo = "Entrada Enciclopédia";
        $title = $publicacao->xpath('output:encyclopedia-entry/output:entry-title');
        $t = strval($title[0]);
        $data = $publicacao->xpath('output:encyclopedia-entry/output:publication-year');
        $d = strval($data[0]);

    }else if(strcmp($id_publicacao, "P113")==0){
        $tipo = "Artigo de Revista";
        $title = $publicacao->xpath('output:magazine-article/output:article-title');
        $t = strval($title[0]);
        $data = $publicacao->xpath('output:magazine-article/output:publication-date/@year');
        $d = strval($data[0]);

    }else if(strcmp($id_publicacao, "P114")==0){
        $tipo = "Entrada de Dicionário";
        $title = $publicacao->xpath('output:dictionary-entry/output:entry-title');
        $t = strval($title[0]);
        $data = $publicacao->xpath('output:dictionary-entry/output:publication-year');
        $d = strval($data[0]);

    }else if(strcmp($id_publicacao, "P115")==0){
        $tipo = "Relatório";
        $title = $publicacao->xpath('output:report/output:report-title');
        $t = strval($title[0]);
        $data = $publicacao->xpath('output:report/output:date-submitted/@year');
        $d = strval($data[0]);

    }else if(strcmp($id_publicacao, "P116")==0){
        $tipo = "Documento de Trabalho";
        $title = $publicacao->xpath('output:working-paper/output:title');
        $t = strval($title[0]);
        $data = $publicacao->xpath('output:working-paper/output:publication-date/@year');
        $d = strval($data[0]);

    }else if(strcmp($id_publicacao, "P118")==0){
        $tipo = "Manual";
        $title = $publicacao->xpath('output:manual/output:title');
        $t = strval($title[0]);
        $data = $publicacao->xpath('output:manual/output:publication-year');
        $d = strval($data[0]);

    }else if(strcmp($id_publicacao, "P119")==0){
        $tipo = "Recurso Online";
        $title = $publicacao->xpath('output:online-resource/output:title');
        $t = strval($title[0]);
        $data = $publicacao->xpath('output:online-resource/output:creation-date/@year');
        $d = strval($data[0]);

    }else if(strcmp($id_publicacao, "P121")==0){
        $tipo = "Web Site";
        $title = $publicacao->xpath('output:website/output:title');
        $t = strval($title[0]);
        $data = $publicacao->xpath('output:website/output:launch-date/@year');
        $d = strval($data[0]);

    }else if(strcmp($id_publicacao, "P122")==0){  // duas datas
        $tipo = "Documento de Conferência";
        $title = $publicacao->xpath('output:conference-paper/output:paper-title');
        $t = strval($title[0]);
        //$data = $publicacao->xpath('output:conference-paper/output:presentation-date/@year');
        //$d = strval($data[0]);
        $data = $publicacao->xpath('output:conference-paper/output:conference-date/@year');
        $d = strval($data[0]);

    }else if(strcmp($id_publicacao, "P123")==0){
        $tipo = "Resumo de Conferência";
        $title = $publicacao->xpath('output:conference-abstract/output:article-title');
        $t = strval($title[0]);
        $data = $publicacao->xpath('output:conference-abstract/output:publication-date/@year');
        $d = strval($data[0]);

    }else if(strcmp($id_publicacao, "P124")==0){
        $tipo = "Cartaz de Conferência";
        $title = $publicacao->xpath('output:conference-poster/output:title');
        $t = strval($title[0]);
        $data = $publicacao->xpath('output:conference-poster/output:conference-date/@year');
        $d = strval($data[0]);

    }else if(strcmp($id_publicacao, "P126")==0){
        $tipo = "Prefácio Posfácio";
        $title = $publicacao->xpath('output:preface-postface/output:preface-postface-title');
        $t = strval($title[0]);
        $data = $publicacao->xpath('output:preface-postface/output:publication-year');
        $d = strval($data[0]);

    }else if(strcmp($id_publicacao, "P301")==0){
        $tipo = "Exposição Artistica";
        $title = $publicacao->xpath('output:artistic-exhibition/output:the-title-of-work');
        $t = strval($title[0]);
        $data = $publicacao->xpath('output:artistic-exhibition/output:date-of-first-performance/@year');
        $d = strval($data[0]);

    }else if(strcmp($id_publicacao, "P306")==0){
        $tipo = "Programa Rádio-TV";
        $title = $publicacao->xpath('output:radio-tv-program/output:program-title');
        $t = strval($title[0]);
        $data = $publicacao->xpath('output:radio-tv-program/output:broadcast-date/@year');
        $d = strval($data[0]);

    }else if(strcmp($id_publicacao, "P311")==0){ // sem data
        $tipo = "Artes Visuais";
        $title = $publicacao->xpath('output:visual-artwork/output:title');
        $t = strval($title[0]);


    }else if(strcmp($id_publicacao, "P508")==0){
        $tipo = "Outros Tipos";
        $title = $publicacao->xpath('output:other-output/output:title');
        $t = strval($title[0]);
        $data = $publicacao->xpath('output:other-output/output:publication-date/@year');
        $d = strval($data[0]);

    }

    echo "tipo-> " . $id_publicacao . ", " . $tipo . " titulo-> " . $t . " data-> " . $d . "\n";

    
    $paramsCV = array(
        array($nCVID,SQLSRV_PARAM_IN, SQLSRV_PHPTYPE_STRING(SQLSRV_ENC_CHAR), SQLSRV_SQLTYPE_NVARCHAR(50)),
        array($tipo,SQLSRV_PARAM_IN, SQLSRV_PHPTYPE_STRING(SQLSRV_ENC_CHAR), SQLSRV_SQLTYPE_NVARCHAR(50)),
        array($t,SQLSRV_PARAM_IN, SQLSRV_PHPTYPE_STRING(SQLSRV_ENC_CHAR), SQLSRV_SQLTYPE_NVARCHAR('max')),
        array($d,SQLSRV_PARAM_IN, SQLSRV_PHPTYPE_STRING(SQLSRV_ENC_CHAR), SQLSRV_SQLTYPE_NVARCHAR(10)),
    );

    $stmtCV = sqlsrv_query( $conn, $query_insert_curriculo, $paramsCV);
    if( $stmtCV === false ) {
        die( print_r( sqlsrv_errors(), true));
    }
    


}





?>