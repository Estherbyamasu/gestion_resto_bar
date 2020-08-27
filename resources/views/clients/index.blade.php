@extends('templates.default_layout')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-8 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Clients</li>
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
            <h1 class="page-header">L'ajout des clients</h1>
        </ul>
             <div class="panel panel-default">
             <div class="panel-body">
                    <div class="col-md-8">
            <form action="{{url('clients')}}" method="POST">
                @csrf
                <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                    <label for="">nom client</label>
                    <input type="text" name="nom_client" id="" class="form-control" 
                    class="@error('nom_client') is-danger @enderror" placeholder="" aria-describedby="helpId" required>
                    @error('nom_client')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label for="">prenom client</label>
                    <input type="text" name="prenom_client" id="" class="form-control" 
                    class="@error('prenom_client') is-danger @enderror" placeholder="" aria-describedby="helpId" required>
                    @error('prenom_client')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                </div>
                </div>
                <div class="form-group">
                    <label for="">Adresse</label>
                    <input type="text" name="address" id="" class="form-control" 
                    class="@error('address') is-danger @enderror" placeholder="" aria-describedby="helpId" required>
                    @error('address')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                
                
                
                <div class="form-group">
                    <label for="">Telephone</label>
                    <input type="text" name="tel" id="" class="form-control" 
                    class="@error('tel') is-danger @enderror" placeholder="" aria-describedby="helpId" required>
                    @error('tel')
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
                        <th scope="col"> nom client</th>
                       
                        <th scope="col">prenom client</th>
                        <th scope="col">tel</th>
                        <th scope="col">address</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clients as $client)
                    <tr>
                        <td>{{$client->id}}</td>
                        <td>{{$client->nom_client}}</td>
                       
                        <td>{{$client->prenom_client}}</td>
                        <td>{{$client->tel}}</td>
                        <td>{{$client->address}}</td>
                        
                        <td>
                            <a href="clients/edit/{{$client->id}}" class="glyphicon glyphicon-edit    btn btn-primary">Edit</a>
                            <form action="clients/destroy/{{$client->id}}" method="POST">
                            @csrf
                                <button type="submit" onclick="return confirm('Voulez vs vraiment supprimer cette client ?')" class="glyphicon glyphicon-delite glyphicon-trash      btn btn-danger">Delete</button>
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


    
</div><!-- /.row -->
@endsection()