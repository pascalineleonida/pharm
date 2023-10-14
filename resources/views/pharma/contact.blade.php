@extends('layout.base')
@section('title','contact')
@section('content')

<div class="hero-wrap hero-bread" style="background-image: url('images/aa.jpg');">
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Accueil</a></span> <span>Contactez Nous</span></p>
        <h1 class="mb-0 bread">Contactez Nous</h1>
      </div>
    </div>
  </div>
</div>

<section class="ftco-section contact-section bg-light">
  <div class="container">
      <div class="row d-flex mb-5 contact-info">
      <div class="w-100"></div>
      <div class="col-md-3 d-flex">
          <div class="info bg-white p-4">
            <p><span>Addresse:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
          </div>
      </div>
      <div class="col-md-3 d-flex">
          <div class="info bg-white p-4">
            <p><span>tel:</span> <a href="tel://1234567920">+ 237 697 18 57 28</a></p>
          </div>
      </div>
      <div class="col-md-3 d-flex">
          <div class="info bg-white p-4">
            <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
          </div>
      </div>
      <div class="col-md-3 d-flex">
          <div class="info bg-white p-4">
            <p><span>Website</span> <a href="#">yoursite.com</a></p>
          </div>
      </div>
    </div>
    <div class="row block-9">
      <div class="col-md-6 order-md-last d-flex">
        <form action="#" class="bg-white p-5 contact-form">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Nom">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Email">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Sujet">
          </div>
          <div class="form-group">
            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="envoyer Message" class="btn btn-primary py-3 px-5">
          </div>
        </form>

      </div>

      <div class="col-md-6 d-flex">
          <div id="map" class="bg-white"></div>
      </div>
    </div>
  </div>
</section>

@endsection
