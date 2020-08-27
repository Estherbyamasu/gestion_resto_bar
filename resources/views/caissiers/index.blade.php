@extends('templates.default_layout')
@section('content')

      
<div class="col-sm-9 col-sm-offset-3 col-lg-8 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Caissiers</li>
        </ol>
    </div>
    <!--/.row-->
    <div class="modal-content">
    <div class="modal-body text-center mb-1">
      <!--Modal cascading tabs-->
<div class="row">
    <div class="col-lg-12">
        <div class="modal-dialog cascading-modal" role="document">
         
        <div class="modal-content"  >
      <!--Modal cascading tabs-->
      <div class="modal-body text-center mb-1">
         <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
            <h1 class="page-header">L'ajout des caissiers</h1>
        </ul>
            <div class="row">
        <div class="col-lg-10">
            
            <form action="{{url('caissiers')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">nom caissier</label>
                    <input type="text" name="nom_caissier" id="" class="form-control" 
                    class="@error('nom_caissier') is-danger @enderror" placeholder="" aria-describedby="helpId" required>
                    @error('nom_caissier')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">prenom caissier</label>
                    <input type="text" name="prenom_caissier" id="" class="form-control"
                     class="@error('prenom_caissier') is-danger @enderror" placeholder="" aria-describedby="helpId" required>
                    @error('prenom_caissier')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
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
            </div>
            </form>
            </div>
            </div>
       
        </div>
    </div>
    <div class="modal-content">
      <!--Modal cascading tabs-->
      <div class="modal-body text-center mb-1">
            <table id="example1" class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">nom caissier</th>
                        <th scope="col">prenom caissier</th>
                        <th scope="col">address</th>
                        <th scope="col">tel</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($caissiers as $caissier)
                    <tr>
                        <td>{{$caissier->id}}</td>
                        <td>{{$caissier->nom_caissier}}</td>
                        <td>{{$caissier->prenom_caissier}}</td>
                        <td>{{$caissier->address}}</td>
                        <td>{{$caissier->tel}}</td>
                       
                        
                        <td>
                            <a href="caissiers/edit/{{$caissier->id}}" class="glyphicon glyphicon-edit   btn btn-primary">Edit</a>
                            <form action="caissiers/destroy/{{$caissier->id}}" method="POST">
                            @csrf
                                <button type="submit" onclick="return confirm('Voulez vs vraiment supprimer cette caissier ?')" class="glyphicon glyphicon-delite glyphicon-trash    btn btn-danger">Delete</button>
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
    <!--/.row-->


    <div class="row">
        <div class="col-lg-12">
        </div><!-- /.panel-->
    </div><!-- /.col-->
    <div class="col-sm-12">
          <p class="back-link">Magasin<a href="https://www.medialoot.com">Resto-bar</a></p>
    </div>
</div><!-- /.row -->
@endsection()