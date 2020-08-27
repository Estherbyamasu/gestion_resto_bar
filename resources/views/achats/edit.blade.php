@extends('templates.default_layout')
@section('content')
<div class="modal-dialog form-dark" role="document">
    <!--Content-->
    <div class="modal-content " >
      <div class="text-white  py-5 px-5 ">
        <!--Header--><div class="modal-header text-center pb-4">
        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
          <h3 class="modal-title w-100 white-text font-weight-bold" id="myModalLabel"><strong>Modification des achats</strong> <a
              class="green-text font-weight-bold"><strong> </strong></a></h3>
     </ul>
              <a href="{{ url('achats') }}" > <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
            
            <span aria-hidden="true">&times;</span></a>
          </button></a>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-8">
            
            <div class="panel-heading">Modifier l'achat n&deg; {{ $achat->id }}</div>
            <form action="/achats/{{$achat->id}}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="nom_fournisseur">Nom fournisseur</label>
                    <select name="fournisseur_id" id="" class="form-control">
                        <option value="">Select fournisseur</option>
                        @foreach($fournisseurs as $fournisseur)
                        <option value="{{$fournisseur->id}}">{{$fournisseur->nom_fournisseur}}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="">Date achat</label>
                    <input type="text" name="date_achat" id="date_achat" value="{{$achat->date_achat}}"  class="@error('date_achat') is-danger @enderror form-control datepicker" placeholder="" aria-describedby="helpId">
                    @error('date_achat')
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
    </div>
    <!--/.row-->

    
</div><!-- /.row -->
@endsection()