@extends('layout.board')
@section('title','gestion client')
@section('content')
    <div class="dropdown-divider border border-primary mb-2"></div>
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="teal text-success">liste des clients</h1>
        <div>
            <a href="" class="btn btn-warning btn-sm"><i class="fa fa-plus"></i>ajouter</a>
        </div>
    </div>
    <div class="dropdown-divider border border-primary mt-4"></div>
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">prenom</th>
                <th scope="col">email</th>
                <th scope="col">Ntelephone</th>
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
                <td>{{$post->name}}</td>
                <td>{{$post->prenom}}</td>
                <td>{{$post->email}}</td>
                <td>{{$post->tel}}</td>
                <td>
                    <a href="" class="text-info me-2"><i class="fa fa-eye"></i></a>
                    <a href="" class="text-danger me-2"><i class="fa fa-trash"></i></a>
                    <a href=""><i class="fa fa-edit"></i></a>
                </td>
              </tr>
              @php
                  $nb++
              @endphp
              @endforeach

            </tbody>
        </table>
        {{$posts->links()}}
    </div>
@endsection
