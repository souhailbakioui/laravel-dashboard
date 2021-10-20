
       
           
         
@extends('admin.index')
@section('admin_title',' Protofilio') 

@section('tst')
    

@if ($message = Session::get('success'))
<div class="alert alert-success alert-block" style="margin-top: 1%;">
    <button type="button" class="close" data-dismiss="alert">×</button>	
        <strong id=message>{{ $message }}</strong>
</div>
@endif

<div class="py-12">
  <div class="container">
      <div class="row">

<div class="col-md-8">

<div class="card-group">
@foreach ($Multi as $item)
    <div class="col-md-4 mt-5">
      <div class="card">
        
        <img src="Image/multiImages/{{$item->image}}" alt="">
      
      
      </div>  
    
    </div> 
@endforeach


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