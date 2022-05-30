<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css' rel='stylesheet' />
    <title>Search Curriculum</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- CSS Style -->
    <style>
        body::before {
            display: block;
            content: '';
            height: 40px;
        }
        #map {
            width: 100%;
            height: 100%;
            border-radius: 10px;
        }
        @media(min-with: 768px) {
            .news-input {
                width: 50%;
            }
        }
    </style>
</head>
<body>
    <!--About-->
    <section>
        <section id="Sobre" class="p-5">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col md">
                        <h2>Sobre a Aplicação Web</h2>
                        <p class="lead">
                            Este WebSite foi criado no ambito do projeto final do curso da Licenciatura em Engenharia Inforamtica e segue o proposito da consulta e analise do Curriculo Vitae de varios profissionais da Universidade Fernando Pessoa bem como das publicações dos mesmos.
                        </p>
                    </div>
                    <div class="col-md">
                        <img class="img-fluid" src="{{asset('storage/images/web.png')}}" alt="" width="300" height="300">
                    </div>
                </div>
            </div>
        </section>
    </section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
