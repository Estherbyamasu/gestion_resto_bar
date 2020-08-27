@extends('templates.default_layout')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Achats</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">l'ajout des Achats</h1>
            <form action="{{url('achats')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nom_fournisseur">Nom fournisseur</label>
                    <select name="fournisseur_id" id="" class="form-control" 
                    class="@error('date_achat') is-danger @enderror" required>
                        <option value="">Select fournisseur</option>
                        @foreach($fournisseurs as $fournisseur)
                        <option value="{{$fournisseur->id}}">{{$fournisseur->nom_fournisseur}}</option>
                        @endforeach
                        @error('fournisseur_id')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    </select>
                </div>
                <div class="form-group">
                    <label for="nom_utilisateur">Nom utilisateur</label>
                    <select name="utilisateur_id" id="" class="form-control" 
                    class="@error('date_achat') is-danger @enderror" required>
                        <option value="">Select utilisateur</option>
                        @foreach($utilisateurs as $utilisateur)
                        <option value="{{$utilisateur->id}}">{{$utilisateur->nom_utilisateur}}</option>
                        @endforeach
                        @error('utilisateur_id')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Date achat</label>
                    <input type="datetime-local" name="date_achat" id="date_achat" 
                    class="@error('date_achat') is-danger @enderror form-control datepicker" placeholder="" aria-describedby="helpId" required>
                    @error('date_achat')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
               
                <button class="glyphicon glyphicon-plus-sign    btn btn-primary" type="submit">Save</button>
                <button class="btn btn-default" type="reset">Reset</button>
            </form>
        </div>
    </div>
    <!--/.row-->


    <div class="row">
        <div class="col-lg-12">
        </div><!-- /.panel-->
    </div><!-- /.col-->
    <div class="col-sm-12">
        <p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
    </div>
</div><!-- /.row -->
@endsection()