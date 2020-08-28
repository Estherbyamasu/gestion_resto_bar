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
        <div class="col-lg-12">
            <h1 class="page-header">Product categories</h1>
        </div>
    </div>
    <!--/.row-->
    
  
    <div class="row">
        <div class="col-lg-10">
            <div class="panel panel-default">
                
                <div class="panel-body">
                    <div class="col-md-12">
                    <div class="row">
        <div class="col-lg-10">
        <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      

       
            

            <div class="panel panel-default">
               
                <div class="panel-body">
                    <div class="col-md-8">
                        <form role="form" action="{{ url('categories') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Nom categorie:</label>
                                <input type="text" name="cat_name" class="form-control" placeholder="Entrez le nom d'une categorie" required>
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
            </div><!-- /.panel-->
        </div><!-- /.panel-->

                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Category Name</th>
                                    <th scope="col">Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->cat_name }}</td>
                                    <td>
                                        <a href="categories/edit/{{ $category->id }}" class="glyphicon glyphicon-edit   btn btn-info">edit</a>
                                        <a href="categories/show/{{$category->id}}" class="glyphicon glyphicon-play btn btn-primary" >Voir les produits</a>
                                        <form action="categories/destroy/{{ $category->id }}" method="post" class="form-inline">
                                        @csrf
                                <button type="submit" onclick="return confirm('Voulez vs vraiment supprimer cette categorie ?')" class="glyphicon glyphicon-delite glyphicon-trash   btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div><!-- /.panel-->
        </div><!-- /.panel-->
    </div>
</div><!-- /.row -->
</div>
<!--/.main-->

@endsection