<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <link href='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css' rel='stylesheet' />
        <link rel="stylesheet" href="resources/css/style.css">
        <title>Search Curriculum</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


        <!-- CSS Style -->
        <!--
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
        -->
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
                    <img class="img-fluid w-50 d-none d-sm-block" src="{{asset('storage/images/curriculum-clipart-1.jpg')}}" alt="" height="200" width="200"/>
                </div>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!--About-->
        @include('layout.about')

        <!--Criadores-->
        @include('layout.programers')

        <!--Contact&Map-->
        <section class="p-5">
            <div class="container">
                <div class="row-g-4">
                    <div class="col-md">
                        <h2 class="text-center mb-4">Contactos</h2>
                        <ul class="list-group list-goup-flush lead">
                            <li class="list-group-item">
                                <span class="fw-bold">Localização:</span> Universidade Fernando Pessoa
                            </li>
                            <li class="list-group-item">
                                <span class="fw-bold">Telefone:</span> 919191919
                            </li>
                            <li class="list-group-item">
                                <span class="fw-bold">Email do Estudante:</span> 35545@ufp.edu.pt
                            </li>
                            <li class="list-group-item">
                                <span class="fw-bold">Email do Estudante:</span> 35545@ufp.edu.pt
                            </li>
                        </ul>
                    </div>
                    <div class="col-md">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </section>
        <!--Footer-->
        <footer class="p-5 bg-dark text-white text-center position-relative">
            <div class="container">
                <p class="lead">Copyright &copy; 2022 Search Curriculum</p>

                <a href="#" class="position-absolute bottom-0 end-0 p-5">
                    <i class="bi bi-arrow-up-circle h1"></i>
                </a>
            </div>
        </footer>

        <script>
            mapboxgl.accessToken =
                'pk.eyJ1IjoiYnRyYXZlcnN5IiwiYSI6ImNrbmh0dXF1NzBtbnMyb3MzcTBpaG10eXcifQ.h5ZyYCglnMdOLAGGiL1Auw'
            const map = new mapboxgl.Map({
                container: 'map',
                style: 'mapbox://styles/mapbox/streets-v11',
                center: [-71.060982, 42.35725],
                zoom: 18,
            });
        </script>
    </body>
</html>
