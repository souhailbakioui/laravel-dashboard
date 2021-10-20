@extends('admin.index')
@section('tst')

    <div class="py-12">
        <div class="container">
            <div class="row">
            
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">nom</th>
                    <th scope="col">email</th>
                    <th scope="col">created_at</th>
                  </tr>
                </thead>
                <tbody>
@foreach ($users as $item)


                  <tr>
                    <td scope="row">{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{(Carbon\Carbon::parse($item->created_at)->diffForHumans())}}</td>
                  </tr>

              @endforeach
                </tbody>
              </table>
    

            </div>





        </div>
    </div>
   

@endsection