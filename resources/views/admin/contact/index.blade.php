
     
   
@extends('admin.index')
@section('admin_title',' Contact') 

@section('tst')
<h2 class="font-semibold text-xl text-gray-800 leading-tight" id="h2">
            
      
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block" style="margin-top: 1%;">
        <button type="button" class="close" data-dismiss="alert">×</button>	
            <strong id=message>{{ $message }}</strong>
    </div>
    @endif
 
</h2>
        <a  class="btn btn-primary" href="{{Route('Contact.create')}}" >
            ADD CONTACT 
        </a>
    <div class="py-12">
        <div class="container">
            <div class="row">


          
    
    
            <table class="table" id='table'>
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">adress</th>
                    <th scope="col">email </th>
                  <!--  <th scope="col">ADD BY </th>-->
                    <th scope="col">phone</th>
                    <th scope="col">created_at</th>
                    <th scope="col">Action</th>
                  </tr>
               
                
@foreach ($Cont as $item)

                  <tr>
                    <td scope="row">{{$item->id}}</td>
                  
                    <td>{{$item->adress}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->phone}}</td>
                    
                    
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