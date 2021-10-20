 
    @extends('admin.index')
@section('admin_title',' About') 

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
                    <th scope="col">title</th>
                    <th scope="col">short_dis </th>
                  <!--  <th scope="col">ADD BY </th>-->
                  <th scope="col">Lang </th>
                    <th scope="col">created_at</th>
                    <th scope="col">Action</th>
                  </tr>
               
                
@foreach ($all as $item)

                  <tr>
                    <td scope="row">{{$item->id}}</td>
                    <td>{{$item->title}}</td>
                    <td>{{$item->short_dis}}</td>
                   
                     <td>{{$item->long_dis}}</td> 
                    
                    <td>{{(Carbon\Carbon::parse($item->created_at)->diffForHumans())}}</td>
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
            <div class="card-header">ADD ABOUT</div>
            <div class="card-body">
            <form action="{{route('About.store')}}" method="POST"  >
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">ABOUT Name</label>
                  <input type="text" name="title" class="form-control" id="text" aria-describedby="tex" placeholder="Enter Nom De Category">
                  <label for="Chose Brande Categorie">short text</label>
                  <textarea type="tel" class="form-select" name="short_dis" id="lan" aria-label="Default select example" style="
                  width: 100%;
              " ></textarea>
                  <label for="Chose Brande Categorie">lange text</label>
                  <textarea type="tel" class="form-select" name="long_dis" id="select" aria-label="Default select example" style="
                  width: 100%;
              "  value=0></textarea>
    
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