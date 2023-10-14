@extends('layout.base')
@section('title', 'sign')

@section('content')
    <main class="main-content  mt-0">
        <section class="min-vh-100 mb-8">
            <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
                style="background-image: url('img/sign.jpg');background-attachment: fixed;background-size: 2000px 1000px;background-repeat: no-repeat;">
                <span class="mask bg-gradient-dark opacity-6"></span>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 text-center m-auto">
                            <h1 class="text-warning mb-2 mt-5 pb-5">Bienvenue!</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">

                <div class="row mt-lg-n10 mt-md-n11 mt-n10">
                    <div class="col mx-auto">
                        <div class="card z-index-0">
                            <div class="card-header text-center pt-4">
                                <h5>inscription</h5>
                            </div>
                            <div class="container">

                            </div>
                            <div class="card-body">
                                <form class="form text-left" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <input type="text" class="form-control" placeholder="Nom :"
                                                            name="name">
                                                            @error('name')
                                                                {{$message}}
                                                            @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <input type="email" class="form-control" placeholder="Email :"
                                                            name="email">
                                                            @error('email')
                                                                {{$message}}
                                                            @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <input type="password" class="form-control" placeholder="Mot De Passe :"
                                                            name="password">
                                                            @error('password')
                                                                {{$message}}
                                                            @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <input type="number" class="form-control" placeholder="Poids :"
                                                            name="poids">
                                                            @error('poids')
                                                                {{$message}}
                                                            @enderror
                                                    </div>

                                                </div>
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <input type="text" class="form-control" placeholder="Prenom :"
                                                            name="prenom">
                                                            @error('prenom')
                                                            {{$message}}
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <input type="number" class="form-control" placeholder="Tel :"
                                                            name="tel">
                                                            @error('tel')
                                                            {{$message}}
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <input type="number" class="form-control" placeholder="taille :"
                                                            name="taille">
                                                            @error('taille')
                                                            {{$message}}
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <input type="number" class="form-control" placeholder="Age :"
                                                            name="age">
                                                            @error('age')
                                                            {{$message}}
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="adresse">Adresse :</label>
                                                    <textarea name="adresse" id="adresse" class="form-control"></textarea>
                                                    @error('adresse')
                                                    {{$message}}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-1">
                                                <img src="img/ijc.jpg" alt="" class="img-fluid" style="height: 280px">
                                            </div>
                                            <div class="mb-3">
                                                <label for="formFile" class="form-label fs-5">choisir une image :</label>
                                                <input class="form-control" type="file" id="formFile" name="file">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center w-50 mx-auto">
                                        <input type="submit" value="sign up" class="btn btn-primary">
                                    </div>
                                    <p class="text-sm mt-3 mb-0">Vous avez un compte? <a href="{{ route('login') }}"
                                            class="text-primary font-weight-bolder">Sign in</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
        <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    </main>

@endsection
