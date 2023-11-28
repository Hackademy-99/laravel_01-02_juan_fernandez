<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lavori Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

    {{-- Inizio | Navbar --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about-us')}}" >Chi siamo</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- Fine | Navbar --}}

    {{-- Inizio | Elenco di animali divisi in: Specie, Continente, Tipo, Ordine, Classe, Phylum, Regno, Dominio,  --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6">
                <h1>Elenco di Animali</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            {{-- @dd($animals) --}}
            @foreach($animals as $animal)
            <div class="col-12 col-md-4 py-5">
                <div class="card" style="width: 18rem;">
                    <img src="{{$animal['image']}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$animal['species']}}</h5>
                      <p class="card-text">Questo animale si trova nel {{$animal['continent']}}, é di tipo {{$animal['life']}}. Fa parte della famiglia dei {{$animal['family']}}  </p>
                      <a href="{{route('animals.show', [
                        'animalId' => $animal['id']
                      ])}}" class="btn btn-primary">Altri dettagli</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    {{-- Fine | Elenco di animali divisi in: Specie, Continente, Tipo, Ordine, Classe, Phylum, Regno, Dominio,  --}}


    {{-- Script JavaScript --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>