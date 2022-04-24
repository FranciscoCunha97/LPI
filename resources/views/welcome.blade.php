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
                height: 50px;
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
        <!--Navbar-->
        @include('layout.navbar')

        <!--Showcase-->
        <section class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
            <div class="container">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <div>
                        <h1>Procura <spant class="text-warning">
                                Curriculos
                            </spant></h1>
                        <p class="lead my-4">
                            Plataforma para pesquisar publicações de todos os docentes da faculdade Fernando Pessoa
                        </p>
                        <button class="btn btn-success btn-lg" data-bs-toogle="modal" onclick="window.location.href='{{route('pages.search')}}';">
                            Começa a Pesquisa
                        </button>
                    </div>
                    <img class="img-fluid w-50 d-none d-sm-block" src="resources/img/showcase2.png" alt=""/>
                </div>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!--About-->
        @include('layout.about')

        <!--Criadores-->
        @include('layout.programers')

        <!--Contact&Map-->
        @include('layout.contact&map')

    </body>
</html>
