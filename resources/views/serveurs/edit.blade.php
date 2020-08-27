@extends('templates.default_layout')
@section('content')
<div class="modal-dialog form-dark" role="document">
    <!--Content-->
    <div class="modal-content " >
      <div class="text-white  py-5 px-5 ">
        <!--Header--><div class="modal-header text-center pb-4">
        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
          <h3 class="modal-title w-100 white-text font-weight-bold" id="myModalLabel"><strong>Modification des serveurs</strong> <a
              class="green-text font-weight-bold"><strong> </strong></a></h3>
     </ul>
              <a href="{{ url('serveurs') }}" > <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
            
            <span aria-hidden="true">&times;</span></a>
          </button></a>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-8">
            
            <div class="panel-heading">Modifier la seveur n&deg; {{ $serveur->id }}</div>
            <form action="/serveurs/{{$serveur->id}}" method="POST">
            @csrf
            @method('PUT')
            
                <div class="form-group">
                    <label for="">nom serveur</label>
                    <input type="text" name="nom_serveur" id="" 
                    value="{{$serveur->nom_serveur}}" class="form-control" class="@error('nom_serveur') is-danger @enderror" placeholder="" aria-describedby="helpId">
                    @error('nom_serveur')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">prenom serveur</label>
                    <input type="text" name="prenom_serveur" id="" 
                    value="{{$serveur->prenom_serveur}}" class="form-control" class="@error('prenom_serveur') is-danger @enderror" placeholder="" aria-describedby="helpId">
                    @error('prenom_serveur')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">address</label>
                    <input type="text" name="address" id="" 
                    value="{{$serveur->address}}" class="form-control" class="@error('address') is-danger @enderror" placeholder="" aria-describedby="helpId">
                    @error('address')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">tel</label>
                    <input type="text" name="tel" id="" 
                    value="{{$serveur->tel}}" class="form-control" class="@error('tel') is-danger @enderror" placeholder="" aria-describedby="helpId">
                    @error('tel')
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