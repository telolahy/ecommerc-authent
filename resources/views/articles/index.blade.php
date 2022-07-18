@extends('templates.dashboard')
@section('contenu')
<div class="container-fluid pt-4 px-4">
    <div class="row vh-100 bg-light rounded align-items-start justify-content-start mx-0">
       
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <div class=" d-flex align-items-center ">
                    <h6 class="mb-4">Listes des articles</h6>
                    <a  href="{{route('article.create')}}" class="btn btn-primary m-2">Ajouter article</a>
                </div>
                
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">nom</th>
                            <th scope="col">prix</th>
                            <th scope="col">image</th>
                            <th scope="col">size</th>
                            <th scope="col">color</th>
                            {{-- <th scope="col">categorie</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($articles as $article)
                        <tr>
                            <th scope="row">{{$article->id}}</th>
                            <td>{{$article->nom}}</td>
                            <td>{{$article->prix}}</td>
                            <td>{{$article->image}}</td>
                            <td>{{$article->size}}</td>
                            <td>{{$article->color}}</td>
                            {{-- <td>{{$article->categorie}}</td> --}}
                            
                        </tr>
                        @empty
                        <div class="alert alert-danger" role="alert">
                            tableau vide pour l'instant
                        </div>
                        @endforelse
                        
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection