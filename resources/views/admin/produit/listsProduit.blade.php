@extends('layout.board')
@section('title','gestion client')
@section('content')
    <div class="dropdown-divider border border-primary mb-2"></div>
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="teal text-success">liste des categories</h1>
        <div>
            <a href="{{route('admin.add-produit')}}" class="btn btn-warning btn-sm"><i class="fa fa-plus"></i> ajouter</a>
        </div>
    </div>
    <div class="dropdown-divider border border-primary mt-2"></div>
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Code</th>
                <th scope="col">Nom</th>
                <th scope="col">Prix</th>
                <th scope="col">detail</th>
                <th scope="col">category</th>
                <th scope="col">action</th>
              </tr>
            </thead>
            <tbody>
              @php
                  $nb = 1;
              @endphp
              @foreach ($posts as $post)
              <tr>
                <th scope="row">{{$nb}}</th>
                <td>{{$post->code}}</td>
                <td>{{$post->nom}}</td>
                <td>{{$post->prix}}</td>
                <td>{{$post->detail}}</td>
                <td>{{$post->category->nom}}</td>
                <td>
                    <a href="" class="text-info me-2"><i class="fa fa-eye"></i></a>
                    <a href="{{route('admin.editProduit',['id'=>$post->id])}}"><i class="fa fa-edit"></i></a>
                    <a href="" class="text-danger me-2"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
              @php
                  $nb++
              @endphp
              @endforeach

            </tbody>
          </table>
    </div>
@endsection
