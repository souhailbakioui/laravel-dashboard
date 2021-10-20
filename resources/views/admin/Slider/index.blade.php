 
    @extends('admin.index')
@section('admin_title',' Slider') 

    @section('tst')

<div class="py-12">
    <div class="container">
        <div class="row">

<div class="col-md-8">
      

<div class="card-header">
    Slider  List
</div>
        <table class="table" id='table'>
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">titre</th>
                <th scope="col">description </th>
              <th scope="col">image </th>
              <th scope="col">Action </th>
              </tr>
           
            
@foreach ($slider as $item)

              <tr>
                <td scope="row">{{$item->id}}</td>
                <td>{{$item->titre}}</td>
                
            
                 <td>{{$item->description}}</td> 
                 <td><img src="Image/slider/{{$item->image}}" alt="" style="
                    height: 100px;
                    width: 100%;
                "></td>
                
                <td>
                    <a href="{{Route('Brand.edit',$item->id)}}" class="btn btn-info">Update</a>
                   <!-- <a href=""  class="btn btn-danger"  onclick="delete()">Delete</a> !-->
                  </td>
                <td>
                    <button class="btn btn-danger delete" name="{{$item->id}}" id="{{$item->Brand_name}}" onclick=" t($( this )[0]);">Delete</button>
                </td>
              </tr>
@endforeach
       
          </table>


        </div>
  <div class="col-md-4">
    <div class="card" style="width: 18rem;">
        <div class="card-header">ADD Slider</div>
        <div class="card-body">
        <form action="{{route('slider_store')}}" method="POST"  enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Titre Slider</label>
              <input type="text" name="brand_name" class="form-control" id="text" aria-describedby="tex" placeholder="Enter Nom De Category">
              <div class="input-group" style="margin-top: 9%;margin-bottom: 7%;">
              <br>
                <div class="custom-file">
              
                  <input type="file" class="custom-file-input" name="file" id="inputGroupFile01"aria-describedby="inputGroupFileAddon01"  accept="image/png, image/gif, image/jpeg">
                  <label class="custom-file-label" for="inputGroupFile01">Choose slider Image</label>
                </div>
              </div>
              <label for="Chose Brande Categorie">Chose slider Description</label>
              <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" name="text" rows="3"></textarea>
      
            </div>
            <button type="submit" class="btn btn-primary">ADD slider</button>
            <form>

            </div>
    </div>
  </div>

    

</div>



    </div>
</div>






@endsection