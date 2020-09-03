@extends('templates.default_layout')

@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Categories</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
    <div class="col-lg-12">  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header text-center pb-4">
        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    
        <div class="col-md-12">
            <a href="{{ url('categories') }}" class="   btn btn-link"><h1 class="page-header">Product categories</h1></a>
            <a href="{{ url('categories') }}" > <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
            
            <span aria-hidden="true">&times;</span></a>
          </button></a>
        </div>
        
       
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-md-12">
     
        <div class="row">
          <div class="col-md-10">
            <div class="panel panel-default">
          
            <div class="panel-body">
           
                <div class="panel-heading">Liste des produits appartenant dans la categorie {{ $category_products->cat_name }}</div>
                
                
                   
                    
            <form action="{{url('categorie')}}" method="POST">
                    @csrf
                        <div class="form-group">
                    <label for="">Nom produit</label>
                    <input type="text" name="nom_produit" id="" class="form-control" 
                    class="@error('nom_produit') is-danger @enderror" placeholder="" aria-describedby="helpId" required>
                    <input type="hidden" name="category_id" id="" value="{{ $category_products->id }}" >
                    @error('nom_produit')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
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
            <div class="modal-content">
      <!--Modal cascading tabs-->
      <div class="modal-body text-center mb-1">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nom produits</th>
                                    <th>Prix</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($category_products->products as $product)
                                <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->nom_produit }}</td>
                                <td>{{ $product->prix }}</td>
                                
                                </tr>
                                @endforeach
                                <tr>
                                    <td colspan="2" align="left"><b>Prix total</b></td>
                                    <td colspan="" align="left">
                                    @foreach($somme as $somme)
                                    <b>{{ $somme->prix }}</b>
                                    @endforeach
                                </td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                    </div>
                    </div>
                </div>
            </div><!-- /.panel-->
        </div><!-- /.panel-->
    </div>
    </div>
        </div>
        </div> </div>

</div><!-- /.row -->
</div>
<!--/.main-->

@endsection