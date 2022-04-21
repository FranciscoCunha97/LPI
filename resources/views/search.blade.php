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
        table{
            border-color:black;
            border:4;
            border-style: solid;
            width:800px;
            margin-top: 100px;
        }
        table.linhas td {
            border-color:red;
            border:2;
            border-style:dotted;
            padding-top: 1em ;
            padding-bottom: 1em ;
            font-family: Calibri}

        table.linhas th {
            background-color: grey;
            border-color:black;
            border:2;
            border-style:solid;
            font-family: Arial}


    </style>
</head>
<body>
<!--Navbar-->
@include('layout.navbarSearchPage');

<!--Table-->
<div class="container">
    <div class="table-responsive">
        <table class="linhas" align="center">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Nome </th>
                <th scope="col">Tipo de Publicação</th>
                <th scope="col">Titulo de Publicação</th>
                <th scope="col">Data de Publicação</th>
            </tr>
            </thead>
            <tbody>
            <tr>

            </tr>
        </table>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
