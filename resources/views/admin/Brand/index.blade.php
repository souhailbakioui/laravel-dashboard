






@extends('admin.index')
@section('admin_title','Brands')

@section('tst')


    <div class="py-12">
        <div class="container">
            <div class="row">

 <div class="col-md-8">


    <div class="card-header">
        Brand  List
    </div>
            <table class="table" id='table'>
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">name</th>
                    <th scope="col">Image </th>
                  <!--  <th scope="col">ADD BY </th>-->
                    <th scope="col">Category</th>
                    <th scope="col">created_at</th>
                    <th scope="col">Action</th>
                  </tr>


@foreach ($Brand as $item)

                  <tr>
                    <td scope="row">{{$item->id}}</td>
                    <td>{{$item->Brand_name}}</td>
                    <td><img src="Image/brand/{{$item->Brand_img}}" alt="" style="
                      height: 100px;
                      width: 106%;
                  "></td>

                     <td>{{$item->Category->cat_name}}</td>

                    <td>{{(Carbon\Carbon::parse($item->created_at)->diffForHumans())}}</td>
                    <td>
                        @can('update', $item)
                        <a href="{{Route('Brand.edit',$item->id)}}" class="btn btn-info">Update</a>
                        @else
                        <p class="badge badge-danger">you don't have permission to edit it</p>
                        @endcan
                       <!-- <a href=""  class="btn btn-danger"  onclick="delete()">Delete</a> !-->
                      </td>
                    <td>
                        @can('delete', $item)

                        <button class="btn btn-danger delete" name="{{$item->id}}" id="{{$item->Brand_name}}" onclick=" t($( this )[0]);">Delete</button>
                        @else
                        <p class="badge badge-danger">you don't have permission to edit it</p>
                        @endcan
                    </td>
                  </tr>
@endforeach

              </table>


            </div>
      <div class="col-md-4">
        <div class="card" style="width: 18rem;">
            <div class="card-header">ADD BRAND</div>
            <div class="card-body">
            <form action="{{route('Brand.store')}}" method="POST"  enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">BRAND Name</label>
                  <input type="text" name="brand_name" class="form-control" id="text" aria-describedby="tex" placeholder="Enter Nom De Category">
                  <div class="input-group" style="margin-top: 9%;margin-bottom: 7%;">
                  <br>
                    <div class="custom-file">

                      <input type="file" class="custom-file-input" name="file" id="inputGroupFile01"aria-describedby="inputGroupFileAddon01"  accept="image/png, image/gif, image/jpeg">
                      <label class="custom-file-label" for="inputGroupFile01">Choose Brand Image</label>
                    </div>
                  </div>
                  <label for="Chose Brande Categorie">Chose Brande Categorie</label>
                  <select class="form-select" name="select" id="select" aria-label="Default select example" style="
                  width: 100%;
              "  value=0>
          @foreach ($Cat as $item)


                    <option selected value="{{$item->id}}">{{$item->cat_name}}</option>
                    @endforeach
                  </select>

                    @if ($errors->any())
                    <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>



                  @endif
                </div>
                <button type="submit" class="btn btn-primary">ADD BRAND</button>
                <form>

                </div>
        </div>
      </div>



  </div>



        </div>
    </div>








<script>
  function t(data){
    var token = $("meta[name='csrf-token']").attr("content");
    console.log(data['id']);
  Notiflix.Confirm.Show( 'DELETE '+data['id'], 'Do you Delete '+data['id']+'  Brand', 'Yes', 'No',
   function(){

    $.ajax({
    url: "Brand/delete/"+data['name']+'/'+data['id'],
    type: 'post',
    data:{"id": data['name'],
    "nom": data['id'],
    "_token": token,

    },
    success: function(result) {
   //   $('#table').remove();
     $( "#h2" ).load( window.location.href+" #h2" );
     $( "#table" ).load( window.location.href+" #table" );


     //$( "#alert" ).load( window.location.href+" #alert" );

    //  console.log($( "#h2" ).load( window.location.href+" #h2" ) );
        console.log(result);

    }
});


    } );
}
 /* $( document ).ready(function() {
    $( ".delete" ).click(function() {
      alert('clecked');
  t($( this )[0]['name']);
});
});*/
  </script>







@endsection
