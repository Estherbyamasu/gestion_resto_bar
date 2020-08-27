@extends('templates.default_layout')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-8 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Achats</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="modal-content">
    <div class="modal-body text-center mb-1">
   
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
            
                <div class="panel-body">
                    <div class="col-lg-12">
                    <div class="row">
        <div class="col-lg-10">
        <div class="modal-dialog modal-lg" role="document">
             <div class="modal-content">

      <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
            <h1 class="page-header">L'ajout des achats</h1>
        </ul>
             <div class="panel panel-default">
             <div class="panel-body">
                    <div class="col-md-8">
            
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
                    <label for="">Date achat</label>
                    <input type="datetime-local" name="date_achat" id="" 
                    class="@error('date_achat') is-danger @enderror form-control datepicker" placeholder="" aria-describedby="helpId" required>
                    @error('date_achat')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                
                <div class="row">
            <div class="text-center mb-3 col-md-6">
              <button type="submit" class=" glyphicon glyphicon-plus btn  btn-primary btn-block btn-rounded z-depth-1">Save</button>
              </div>
              <div class="text-center mb-3 col-md-6">
              <button  type="reset"class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Reset</button>
              </div>
             </div>
            </form>
         </div>
        </div>
        </div>
        </div>
        </div>
    </div>
            <table id="example1" class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nom fournisseur</th>
                        <th scope="col">Date achat</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($achats as $achat)
                    <tr>
                        <td>{{$achat->id}}</td>
                        <td>{{$achat->nom_fournisseur}}</td>
                         <td>{{$achat->date_achat}}</td>
                        <td>
                            <a href="achats/edit/{{$achat->id}}" class="glyphicon glyphicon-edit    btn btn-primary">Edit</a>
                            <form action="achats/destroy/{{$achat->id}}" method="POST">
                            @csrf
                                <button type="submit" onclick="return confirm('Voulez vs vraiment supprimer cet achat ?')" class="glyphicon glyphicon-delite glyphicon-trash  btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    </div>
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