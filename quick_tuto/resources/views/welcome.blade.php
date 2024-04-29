<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accueil</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

        </header>
        <nav class="navbar navbar-expand-lg bg-info">
          <div class="container">
            <a class="navbar-brand  btn-outline-danger" href="#"> <b>BLOG DE BRICO </b>  </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active btn btn-outline-danger" aria-current="page" href="#">Bienvenue</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link btn btn-outline-danger" href="#">nouveau  chez brice</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link  btn btn-outline-danger" href="{{'/apropos'}}">A propos de brice</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link btn btn-outline-danger" href="{{'/contact'}}">Contacts de brice</a>
                </li>
              </ul>
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Rechercher</button>
              </form>
            </div>
          </div>
        </nav>
        <header>
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{$titlle}}</h3>
                        <h6>{{$undertitle}}</h6>
                    </div>
                    <div class="card-body">
                   Ceci est notre premier page laravel au cours de notre initiation au fremework laravel.Le site n'est pas encore jolie a voir mais dans quelques jours elle ressemblera a un vrai site pro et dynamyque 
                    <b>{{_($content)}}</b><br>                    
                    <ul>
                        @foreach($table as $table)
                        <li>{{$table}}</li>
                        @endforeach
                    </ul> 
                    {{-- <ul>
                        @forelse($table as $table)
                        <li>{{$table}}</li>
                        @enforeslse
                    </ul> --}}                   
                    </div>
                    <div class="card-footer">
                    <small>Ecrit par: <b>{{$name}}</b> le {{$data}}</small>
                    <p class="float-end"><a href="#" class="btn btn-primary">Modifier</a> <input type="submit" name="" class="btn btn-danger" value="Supprimer"></p>
                    </div>
                </div>
            </div>
          
        </header>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>