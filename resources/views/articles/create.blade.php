@extends('templates.dashboard')
@section('contenu')
<div class="container-fluid pt-4 px-4">
    <div class="row vh-100 bg-light rounded align-items-start justify-content-start mx-0">
        <div class="col-md-6  p-4">
            <h6 class="mb-4">Ajouter article</h6>
                <form action="{{route('article.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-1 ">
                        <label for="nom" class="form-label">Nom de l'article</label>
                        <input type="text" class="form-control" name="nom">
                    </div>
                    <div class="mb-1 ">
                        <label for="prix" class="form-label">Prix</label>
                        <input type="text" class="form-control" name="prix">
                    </div>
                    <div class="mb-1 ">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="mb-1 ">
                      <label for="image1" class="form-label">Image vue profile</label>
                      <input type="file" class="form-control" name="image1">
                  </div>
                  <div class="mb-1 ">
                    <label for="image2" class="form-label">Image vue entiere</label>
                    <input type="file" class="form-control" name="image2">
                </div>
                    <div class="mb-1 ">
                        
                        <div class="form-group">
                        <label for="size" class="form-label">Taille</label>
                          <select class="form-control" name="size" >
                            <option value="S">S</option>
                            <option value="L">L</option>
                            <option value="M">M</option>
                            <option value="XL">XL</option>
                          </select>
                        </div>
                    </div>
                    <div class="mb-1 ">
                        <div class="form-group">
                            <label for="color" class="form-label">Couleur</label>
                              <select class="form-control" name="color" >
                                <option value="rouge">rouge</option>
                                <option value="bleu">bleu</option>
                                <option value="blanc">blanc</option>
                                <option value="vert">vert</option>
                              </select>
                            </div>
                    </div>
                    <div class="mb-1 ">
                        <div class="form-group">
                            <label for="categorie" class="form-label">Categorie</label>
                              <select class="form-control" name="categorie" >
                                @foreach ($categories as $categorie)
                                  <option value="{{$categorie->id}}">{{$categorie->nom}}</option>
                                @endforeach
                              </select>
                            </div>
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
                
            
        </div>
    </div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif
</div>

@endsection