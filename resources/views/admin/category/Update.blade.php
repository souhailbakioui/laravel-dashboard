
@extends('admin.index')
@section('admin_title','Edite Category') 

@section('tst')
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <b>EDITE CATEGORIE</b>
        </h2>
    

    
    <div class="py-12">
        <div class="container">
            <div class="row">





                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Edite CATEGORY</div>
                        <div class="card-body">
                        <form action="{{Route('Category.update',$cat)}}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                              <label for="exampleInputEmail1">CATEGORY Name</label>
                              <input type="text" name="cat_name" class="form-control" id="text" aria-describedby="tex" value={{$cat->cat_name}}>
                              @error('cat_name')
                              <span class="text-danger">{{$message}}</span>
                          @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Save Edite CATEGORY</button>
                            <form>
            
                            </div>
                    </div>
                  </div>

            </div>
        </div>
    </div>










@endsection 