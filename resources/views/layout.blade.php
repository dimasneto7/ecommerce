<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyShop - Ecommerce</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>
<body>
    <nav class="navbar navbar-light navbar-expand-md bg-light pl-5 pr-5 mb-5">
        <a href="#" class="navbar-brand">MyShop</a>
        <div class="collapse navbar-collapse">
            <div class="navbar-nav">
                <a class="nav-link" href="{{ route('home') }}">Home</a>
                <a class="nav-link" href="{{ route('categoria') }}">Categorias</a>
                <a class="nav-link" href="{{ route('cadastrar') }}">Cadastrar</a>
            </div>
        </div>
        <a href="#" class="btn btn-sm"><i class="fa fa-shopping-cart"></i></a>
    </nav>

    <div class="container">
        <div class="row">
            @yield("conteudo")
        </div>
    </div>

</body>
</html>
