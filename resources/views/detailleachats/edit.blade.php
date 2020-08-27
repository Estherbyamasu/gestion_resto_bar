@extends('templates.default_layout')
@section('content')
<div class="modal-dialog form-dark" role="document">
    <!--Content-->
    <div class="modal-content " >
      <div class="text-white  py-5 px-5 ">
        <!--Header--><div class="modal-header text-center pb-4">
        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
          <h3 class="modal-title w-100 white-text font-weight-bold" id="myModalLabel"><strong>Modification des detaille achats</strong> <a
              class="green-text font-weight-bold"><strong> </strong></a></h3>
     </ul>
              <a href="{{ url('detailleachats') }}" > <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
            
            <span aria-hidden="true">&times;</span></a>
          </button></a>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-10">
          
            <div class="panel-heading">Modifier detaille achat n&deg; {{ $detailleachat->id }}</div>
            <form action="/detailleachats/{{$detailleachat->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nom_produit">Nom produit</label>
                    <select name="product_id" id="" class="form-control">
                        <option value="">Select product</option>
                        @foreach($products as $product)
                        <option value="{{$product->id}}">{{$product->nom_produit}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="date_achat">Date achat</label>
                    <select name="achat_id" id="" class="form-control">
                        <option value="">Select achat</option>
                        @foreach($achats as $achat)
                        <option value="{{$achat->id}}">{{$achat->date_achat}}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="">Quantite</label>
                    <input type="text" name="quantite" id="quantite" value="{{$detailleachat->quantite}}" class="form-control "
                     class="@error('quantite') is-danger @enderror " placeholder="" aria-describedby="helpId">
                    @error('quantite')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Prix</label>
                    <input type="text" name="prix" id="prix" value="{{$detailleachat->prix}}" class="form-control "
                     class="@error('prix') is-danger @enderror " placeholder="" aria-describedby="helpId">
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
    </div>
    </div>
    </div>
    </div>
</div><!-- /.row -->
@endsection()