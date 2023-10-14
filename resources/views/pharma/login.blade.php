@extends('layout.base')
@section('title','login')
@section('content')
<main class="main-content mt-0 p-5" style="background-image: url('img/bg_2.jpg');background-repeat: no-repeat;background-size: cover;">
    <section>
            <div class="page-header min-vh-75 p-4">
                    <div class="container">
                            <div class="row">
                                    <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                                            <div class="card card-plain mt-5">
                                                    <div class="card-header pb-0 text-left bg-transparent">
                                                            <p class="mb-0 text-center">Entrer vos coordonne</p>
                                                    </div>
                                                    <div class="card-body">
                                                            <form class="form" method="post">
                                                                @csrf
                                                                    <label>Nom :</label>
                                                                    <div class="mb-3">
                                                                            <input type="text" class="form-control" placeholder="Nom :" name="name">
                                                                            @error('name')
                                                                                {{$message}}
                                                                            @enderror
                                                                    </div>
                                                                    <label>Mot De Passe :</label>
                                                                    <div class="mb-3">
                                                                            <input type="password" class="form-control" placeholder="********" name="password">
                                                                            @error('password')
                                                                                {{$message}}
                                                                            @enderror
                                                                    </div>
                                                                    <div class="text-center">
                                                                            <input type="submit" value="connexion" name="connexion" class="btn btn-primary btn-sm">
                                                                    </div>
                                                            </form>
                                                    </div>
                                                    <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                                            <p class="mb-4 text-sm mx-auto">
                                                                    Vous n'avez pas de compte?
                                                                    <a href="{{route('sign')}}" class="text-primary font-weight-bold">creer un compte</a>
                                                            </p>
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="col-md-3"></div>
                                    <div class="col-md-3"></div>
                            </div>
                    </div>
            </div>
    </section>
</main>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                    damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>

<script>
    $(document).ready(function() {
            var quantitiy = 0;
            $(".quantity-right-plus").click(function(e) {
                    // Stop acting like a button
                    e.preventDefault();
                    // Get the field name
                    var quantity = parseInt($("#quantity").val());

                    // If is not undefined

                    $("#quantity").val(quantity + 1);

                    // Increment
            });

            $(".quantity-left-minus").click(function(e) {
                    // Stop acting like a button
                    e.preventDefault();
                    // Get the field name
                    var quantity = parseInt($("#quantity").val());

                    // If is not undefined

                    // Increment
                    if (quantity > 0) {
                            $("#quantity").val(quantity - 1);
                    }
            });
    });
</script>

@endsection
