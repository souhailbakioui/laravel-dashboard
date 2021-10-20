
    
    

@extends('admin.index')
@section('admin_title',' Category') 

@section('tst')
    <div class="py-12">
        <div class="container">
            <div class="row">

 <div class="col-md-8">
          
    
    <div class="card-header">
        Categorie  List
    </div>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">name</th>
           
                    <th scope="col">created_at</th>
                    <th scope="col">Action</th>
                  </tr>
               
                
@foreach ($Cat as $item)


                  <tr>
                    <td scope="row">{{$item->id}}</td>
                    <td>{{$item->cat_name}}</td>
             
                    <td>{{(Carbon\Carbon::parse($item->created_at)->diffForHumans())}}</td>
                    <td>
                        <a href="{{Route('Category.edit',$item->id)}}" class="btn btn-info">Update</a>
                        <a href="{{Route('sdelete',$item->id)}}"  class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
@endforeach
           
              </table>
    {{$Cat->links()}}

            </div>
      <div class="col-md-4">
        <div class="card" style="width: 18rem;">
            <div class="card-header">ADD CATEGORY</div>
            <div class="card-body">
            <form action="{{route('Category.store')}}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">CATEGORY Name</label>
                  <input type="text" name="cat_name" class="form-control" id="text" aria-describedby="tex" placeholder="Enter Nom De Category">
                    @error('cat_name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">ADD CATEGORY</button>
                <form>

                </div>
        </div>
      </div>

        

  </div>

  <div class="row">



    <div class="col-md-8">
             
       <div class="card-header">
           Trashed  List
       </div>
   
               <table class="table">
                   <thead>
                     <tr>
                       <th scope="col">ID</th>
                       <th scope="col">name</th>
                       <th scope="col">Add By </th>
                       <th scope="col">created_at</th>
                       <th scope="col">Action</th>
                     </tr>
                  
              
   @foreach ($Trashed as $item)
   
   
                     <tr>
                       <td scope="row">{{$item->id}}</td>
                       <td>{{$item->cat_name}}</td>
                       <td>{{$item->user->name}}</td>
                       <td>{{(Carbon\Carbon::parse($item->created_at)->diffForHumans())}}</td>
                       <td>
                        <a href="{{Route('restory',$item->id)}}" class="btn btn-info">Restore</a>
                        <a href="{{Route('destroy',$item->id)}}" class="btn btn-danger">Delete For Ever</a>
                       </td>
                     </tr>
   @endforeach
              
                 </table>
       {{$Trashed->links()}}
   
               </div>
 
   
           
   
     </div>


        </div>
    </div>
   













@endsection