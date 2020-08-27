@extends('templates.default_layout')
@section('content')
<div class="modal-dialog form-dark" role="document">
    <!--Content-->
    <div class="modal-content " >
      <div class="text-white  py-5 px-5 ">
        <!--Header--><div class="modal-header text-center pb-4">
        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
          <h3 class="modal-title w-100 white-text font-weight-bold" id="myModalLabel"><strong>Modification des factures</strong> <a
              class="green-text font-weight-bold"><strong> </strong></a></h3>
     </ul>
              <a href="{{ url('factures') }}" > <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
            
            <span aria-hidden="true">&times;</span></a>
          </button></a>-->

    <!--/.row-->

    <div class="row">
        <div class="col-lg-8">
            
            <div class="panel-heading">Modifier  la facture n&deg; {{ $facture->id }}</div>
            <form action="/factures/{{$facture->id}}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="nom_client">Nom client</label>
                    <select name="client_id" id="" class="form-control">
                        <option value="">Select client</option>
                        @foreach($clients as $client)
                        <option value="{{$client->id}}">{{$client->nom_client}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="nom_caissier">Nom caissier</label>
                    <select name="caissier_id" id="" class="form-control">
                        <option value="">Select caissier</option>
                        @foreach($caissiers as $caissier)
                        <option value="{{$caissier->id}}">{{$caissier->nom_caissier}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="nom_serveur">Nom serveur</label>
                    <select name="serveur_id" id="" class="form-control">
                        <option value="">Select serveur</option>
                        @foreach($serveurs as $serveur)
                        <option value="{{$serveur->id}}">{{$serveur->nom_serveur}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Date facture</label>
                    <input type="text" name="date_facture" id="date_facture" value="{{$facture->date_facture}}"  class="@error('date_facture') is-danger @enderror form-control datepicker" placeholder="" aria-describedby="helpId">
                    @error('date_facture')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Montant</label>
                    <input type="text" name="montant" id="montant" value="{{$facture->montant}}"  class="form-control " class="@error('montant') is-danger @enderror " placeholder="" aria-describedby="helpId">
                    @error('montant')
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