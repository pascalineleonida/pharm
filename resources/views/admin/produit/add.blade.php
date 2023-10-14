@extends('layout.board')
@section('title','formulaire')
@section('content')
    <div class="container">
        <form class="v-stack gap-2" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
               <div class="card shadow p-2">
                <h1>
                    @if($product->id)
                        modifier les information
                    @else
                    entrer les infos
                    @endif
                </h1>
                <div class="mb-3">
                    <select name="category_id" class="form-control">
                        <option value="">select categories</option>
                        @foreach ($catgs as $p)
                        <option value="{{$p->id}}" @if($p->id == $product->category_id) selected @endif>{{$p->nom}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <input type="number" class="form-control" id="code" name="code" placeholder="Code :"  value="{{old('code',$product->code)}}">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom :" value="{{old('code',$product->nom)}}">
                </div>
                <div class="mb-3">
                    <input type="file" class="form-control" id="image" name="image" placeholder="Image :" value="{{old('code',$product->image)}}">
                </div>
                <div class="mb-3">
                    <input type="number" class="form-control" id="prix" name="prix" placeholder="Prix :" value="{{old('code',$product->prix)}}">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="detail" name="detail" placeholder="courte description :" value="{{old('code',$product->detail)}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">description</label>
                    <textarea name="description" id="" class="form-control">{{old('code',$product->description)}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">
                    @if($product->id)
                        modifier
                    @else
                        ajouter
                    @endif
                </button>
               </div>

               <div class="col-md-3"></div>
            </div>
        </div>
        </form>
    </div>
@endsection
