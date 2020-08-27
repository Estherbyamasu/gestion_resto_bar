@extends('templates.default_layout')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Clients</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Product clients</h1>
            <form action="{{url('clients')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">nom client</label>
                    <input type="text" name="nom_client" id="" class="form-control" class="@error('nom_client') is-danger @enderror" placeholder="" aria-describedby="helpId">
                    @error('nom_client')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">prenom client</label>
                    <input type="text" name="prenom_client" id="" class="form-control" class="@error('prenom_client') is-danger @enderror" placeholder="" aria-describedby="helpId">
                    @error('prenom_client')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="">Adresse</label>
                    <input type="text" name="address" id="" class="form-control" class="@error('address') is-danger @enderror" placeholder="" aria-describedby="helpId">
                    @error('address')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Telephone</label>
                    <input type="text" name="tel" id="" class="form-control" class="@error('tel') is-danger @enderror" placeholder="" aria-describedby="helpId">
                    @error('tel')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>

                 
                <button class="btn btn-primary" type="submit">Save</button>
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