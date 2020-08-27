@extends('templates.default_layout')
@section('content')
<div class="modal-dialog form-dark" role="document">
    <!--Content-->
    <div class="modal-content " >
      <div class="text-white  py-5 px-5 ">
        <!--Header--><div class="modal-header text-center pb-4">
        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
          <h3 class="modal-title w-100 white-text font-weight-bold" id="myModalLabel"><strong>Modification des Produits</strong> <a
              class="green-text font-weight-bold"><strong> </strong></a></h3>
     </ul>
              <a href="{{ url('products') }}" > <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
            
            <span aria-hidden="true">&times;</span></a>
          </button></a>-->

    <div class="row">
        <div class="col-lg-8">
        <div class="panel-heading">Modifier le produit n&deg; {{ $product->id }}</div>
            <form action="/products/{{$product->id}}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="cat_name">Category name</label>
                    <select name="category_id" id="" class="form-control">
                        <option value="">Select category</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->cat_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Nom produit</label>
                    <input type="text" name="nom_produit" id="" value="{{$product->nom_produit}}"
                     class="form-control" class="@error('nom_produit') is-danger @enderror" placeholder="" aria-describedby="helpId" >
                    @error('nom_produit')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Prix</label>
                    <input type="text" name="prix" id="" value="{{$product->prix}}" class="form-control" 
                    class="@error('prix') is-danger @enderror" placeholder="" aria-describedby="helpId" >
                    @error('prix')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="row">
            <div class="text-center mb-3 col-md-6">
              <button type="submit" class=" glyphicon glyphicon-edit btn btn-success btn-block btn-rounded z-depth-1">Modifier</button>
              </div>
             
             </div>
            </form>
        </div>
    </div>
    <!--/.row-->

     </div>
        </div>
    </div>
    </div>
    </div>
    </div>
</div><!-- /.row -->
@endsection()
