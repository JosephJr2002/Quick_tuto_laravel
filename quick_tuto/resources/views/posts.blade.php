@extends('layouts.app')
@section('content')
  <div class="container-fluid">
    <div class="row">
      @foreach($all_posts as $post)
      <div class="card mb-2">
        <div class="card-header">
            <h3 class="card-title">{{$post->titre}}</h3>
            <h6>{{$post->soustitre}}</h6>
        </div>
        <div class="card-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          <b>{{($post->contenu)}}</b><br>                                       
        </div>
        <div class="card-footer">
          <small>Ecrit par: <b>{{$post->auteur}}</b> le {{$post->ecritle}}</small>
          <p class="float-end"><a href="#" class="btn btn-info">Modifier</a> <input type="submit" name="" class="btn btn-danger" value="Supprimer"></p>
        </div>
      </div>
      @endforeach 
    </div>
  </div>
@endsection

<<<<<<< HEAD
    <p>ici c'est la section appartenant au x posts
        elle est encore vide mais bientot elle sera pleine merci de bien vouloir patientiter
    </p>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
=======
    
>>>>>>> a4eec86acfc589840d816b5ea0383e25d566e821
