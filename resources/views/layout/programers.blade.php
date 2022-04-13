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
<!--Programers-->
<section>
    <section id="fundadores" class="p-5 bg-primary">
        <div class="container">
            <h2 class="text-center text-white">Os Criadores</h2>
            <p class="lead text-center text-white mb-5">
                Criadores formados na Universidade Fernando Pessoa
            </p>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body text center">
                            <h3 class="card-title mb-3">Francisco Cunha</h3>
                            <!--Falta meter a imagem e assim-->
                            <p class="card-text">
                                (Texto sobre mim)
                                <a href="https://www.facebook.com/profile.php?id=100013732751272"><i class="bi bi-facebook text-dark mx-1"></i></a>
                                <a href="https://www.linkedin.com/in/francisco-cunha-39962112a/"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                                <a href="https://www.instagram.com/_francisco_cunha/"><i class="bi bi-instagram text-dark mx-1"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body text center">
                            <h3 class="card-title mb-3">Vasco Cardoso</h3>
                            <!--Falta meter a imagem e assim-->
                            <p class="card-text">
                                (Texto sobre mim)
                                <a href="https://www.facebook.com/vasco.cardos0"><i class="bi bi-facebook text-dark mx-1"></i></a>
                                <a href="https://www.linkedin.com/in/vasco0c/"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                                <a href="https://www.instagram.com/vasco_sc/"><i class="bi bi-instagram text-dark mx-1"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
