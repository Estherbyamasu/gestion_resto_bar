@extends('templates.default_layout')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-9 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Detaille Factures</li>
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
            
            <form action="{{url('detaillefactures')}}" method="POST">
                @csrf
                <div class="row">
                <div class="col-lg-6">
                <div class="form-group">
                    <label for="nom_produit">Nom produit</label>
                    <select name="product_id" id="" class="form-control" 
                    class="@error('prix_unitaire') is-danger @enderror" required>
                        <option value="">Select product</option>
                        @foreach($products as $product)
                        <option value="{{$product->id}}">{{$product->nom_produit}}</option>
                        @endforeach
                        @error('product_id')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    </select>
                </div>
                </div>
                <div class="col-lg-6">
                <div class="form-group">
                    <label for="date_facture">Date facture</label>
                    <select name="facture_id" id="" class="form-control" 
                    class="@error('prix_unitaire') is-danger @enderror" required>
                        <option value="">Select facture</option>
                        @foreach($factures as $facture)
                        <option value="{{$facture->id}}">{{$facture->date_facture}}</option>
                        @endforeach
                        @error('facture_id')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    </select>
                </div>
                </div>
                </div>
                
                <div class="form-group">
                    <label for="">Quantite</label>
                    <input type="text" name="quantite" id="quantite" class="form-control"
                    class="@error('quantite') is-danger @enderror  " placeholder="" aria-describedby="helpId" required>
                    @error('quantite')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Prix unitaire</label>
                    <input type="text" name="prix_unitaire" id="prix_unitaire" class="form-control"
                    class="@error('prix_unitaire') is-danger @enderror  " placeholder="" aria-describedby="helpId" required>
                    @error('prix_unitaire')
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
                        <th scope="col">Nom produit</th>
                        <th scope="col">Date facture</th>
                        
                        <th scope="col">Quantite</th>
                        <th scope="col">Prix unitaire</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($detaillefactures as $detaillefacture)
                    <tr>
                        <td>{{$detaillefacture->id}}</td>
                        <td>{{$detaillefacture->nom_produit}}</td>
                        <td>{{$detaillefacture->date_facture}}</td>
                        
                        <td>{{$detaillefacture->quantite}}</td>
                        <td>{{$detaillefacture->prix_unitaire}}</td>
                        <td>
                            <a href="detaillefactures/edit/{{$detaillefacture->id}}" class="glyphicon glyphicon-edit    btn btn-primary">Edit</a>
                            <form action="detaillefactures/destroy/{{$detaillefacture->id}}" method="POST">
                            @csrf
                                <button type="submit" onclick="return confirm('Voulez vs vraiment supprimer cet detaillefacture ?')" class="glyphicon glyphicon-delite glyphicon-trash  btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
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