<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="{{$description ?? ''}}">

  <title>{{ $title ?? ''}}</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
  integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
    <h1 class="title"><a class="navbar-brand" href="{{url('/')}}">{{ config('app.name') }}</a></h1>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{url('/')}}">Accueil</a>
          </li>
          @if (Auth::guest())
          <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Connexion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('register')}}">Inscription</a>
          </li>
          @else
            <li class="nav-item">
              <a class="nav-link" href="{{route('articles.create')}}">Ajouter un article</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('logout')}}">Déconnexion</a>
            </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    @yield('content');

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Formation Laravel 2020</p>
    </div>
    <!-- /.container -->
  </footer>

</body>

</html>
