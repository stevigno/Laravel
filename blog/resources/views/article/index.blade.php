@extends('layouts.main')

@section('content')

<div class="row">

    <div class="col-lg-3">
      @include('includes.sidebar')
    </div>
    <!-- /.col-lg-3 -->

    <div class="col-lg-9">
    @foreach($articles as $article)
      <div class="card mt-4">
        
        <div class="card-body">
          <h2 class="card-title"><a href="{{route('articles.show', ['article'=>$article->id])}}">{{ $article->title }}</a></h2>
          <p class="card-text">{{Str::limit($article->content, 50) }}</p>
          
          <span class="auhtor">Par <a href="">Hamid</a></span> <br>
          <span class="time">Il y'a 1 heure</span>
        </div>
      </div>
    @endforeach
      <!-- /.card -->

      {{-- <div class="card card-outline-secondary my-4">
        <div class="card-header">
          Commentaires
        </div>
        <div class="card-body">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
          <small class="text-muted">Jean le 25 Janvier à 19h02</small>
          <hr>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
          <small class="text-muted">Paul le 29 Juin à 15h09</small>
          <hr>

          <a href="#" class="btn btn-success">Laisser un commentaire</a>
        </div>
      </div>
      <!-- /.card --> --}}

    </div>
    <!-- /.col-lg-9 -->

  </div>
  
@endsection