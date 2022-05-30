<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script
        src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <style>
        div{
            width: 80%;
            margin-left: auto;
            margin-right: auto;
            height: 50%;
        }
        table.table-fluid{
            height: 80%;
        }
    </style>

</head>
<body>

<!--Navbar-->
@include('layout.navbarSearchPage');
<br>
<br>
<div class="container">
    <h1>Docentes</h1>
    <table class="table table-fluid table-success table-striped" id="myTable">
       <thead class="table-dark">
        <tr><th>Nome</th><th></th></tr>
       </thead>
        <tbody>
        @foreach($funcionarios as $funcionario)
            <tr><td>{{$funcionario->NomeProfissional}}</td><td align="center"><a href="{{route('pages.curriculum',$funcionario->CienciaVitaeID)}}" class="btn btn-success">Ver Publicações</a></td></tr>
        @endforeach
        </tbody>
    </table>
</div>
<br>
<br>
<br>
<!--Footer-->
<footer class="p-5 bg-dark text-white text-center position-relative">
    <div class="container">
        <p class="lead">2022 Search Curriculum</p>

        <a href="#" class="position-absolute bottom-0 end-0 p-5">
            <i class="bi bi-arrow-up-circle h1"></i>
        </a>
    </div>
</footer>
<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>
</body>
</html>
