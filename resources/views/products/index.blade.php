@extends('templates.default_layout')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-8 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">produit</li>
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
        <div class="col-lg-12">
        <div class="modal-dialog modal-lg" role="document">
             <div class="modal-content">

      <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
            <h1 class="page-header">L'ajout des Produits</h1>
        </ul>
             <div class="panel panel-default">
             <div class="panel-body">
                    <div class="col-md-8">
           
            <form action="{{url('products')}}" method="POST">
                @csrf
               <div class="row">
               <div class="col-md-6">
            <div class="form-group">
                     <label for="cat_name">Category name</label>
                    <select name="category_id" id="" class="form-control" 
                    class="@error('prix') is-danger @enderror" required>
                        <option value="">Select category</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->cat_name}}</option>
                        @endforeach
                        @error('category_id')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    </select>
                </div>
                </div>
                <div class="col-md-6">
               
               <div class="form-group">
                   <label for="">Nom produit</label>
                    <input type="text" name="nom_produit" id="" class="form-control" 
                    class="@error('nom_produit') is-danger @enderror" placeholder="" aria-describedby="helpId" required>
                    @error('nom_produit')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                </div>
                </div>
                       
                      
                   <div class="form-group">
                   <label for="">Prix</label>    
                    <input type="text" name="prix" id="" class="form-control" 
                    class="@error('prix') is-danger @enderror" placeholder="" aria-describedby="helpId" required>
                    @error('prix')
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
    <div >
         
          </div>
            <table id="example1" class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Category name</th>
                        <th scope="col">Nom produit</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->cat_name}}</td>
                        <td>{{$product->nom_produit}}</td>
                        <td>{{$product->prix}}</td>
                        <td>
                            <a href="products/edit/{{$product->id}}" class="glyphicon glyphicon-edit   btn btn-primary">Edit</a>
                            <form action="products/destroy/{{$product->id}}" method="POST">
                            @csrf
                                <button type="submit" onclick="return confirm('Voulez vs vraiment supprimer ce produit ?')" class="glyphicon glyphicon-delite glyphicon-trash   btn btn-danger">Delete</button>
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
    </div>
</div><!-- /.row -->
@endsection()