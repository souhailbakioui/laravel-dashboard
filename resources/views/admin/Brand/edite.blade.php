


    @extends('admin.index')
    @section('admin_title','Edit Brands')
    @section('tst')  <h2 class="font-semibold text-xl text-gray-800 leading-tight">
    <b>EDITE CATEGORIE</b>
    </h2>
<div class="py-12">
  <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="card" >
              <div class="card-header">EDITE BRAND</div>
              <div class="card-body">
              <form action="{{route('Brand.update',$item)}}" method="POST"  enctype="multipart/form-data" >
                  @csrf
                  @method('PUT')
                  <div class="form-group">
                    <label for="exampleInputEmail1">BRAND Name</label>
                    <input type="text" name="brand_name" class="form-control" id="text" aria-describedby="tex" placeholder="Enter Nom De Category" value="{{old('Brand_name', $item->Brand_name)}}"
                    >
                    <div class="input-group" style="margin-top: 9%;margin-bottom: 7%;">
                    <br>
                      <div class="custom-file">

                        <input type="file" class="custom-file-input" name="file" id="file" id="inputGroupFile01"aria-describedby="inputGroupFileAddon01"value="{{old('Brand_img', $item->Brand_img)}}"  accept="image/png, image/gif, image/jpeg">
                        <label class="custom-file-label" for="inputGroupFile01">Choose Brand Image</label>
                      </div>
                    </div>
                    <label for="Chose Brande Categorie">Chose Brande Categorie</label>
                    <select class="form-select" name="select" id="select" aria-label="Default select example" style="
                    width: 100%;
                "  gh>
            @foreach ($Cat as $items)
   @if ($items->id==$item->Cat_id)

     <option value="{{$items->id}}" selected>{{$items->cat_name}}
   @else
     <option value="{{$items->id}}" >{{$items->cat_name}}

   @endif
                      </option>
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
        <div class="col-md-6">
        <center>
          <img id='img'src="{{asset('Image/brand/'.$item->Brand_img)}}" alt="">

        </center>

        </div>

      </div>
  </div>





</div>
<script>
$(document ).ready(function() {
  function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#img').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#file").change(function(){
    readURL(this);
});
});
</script>
@endsection
