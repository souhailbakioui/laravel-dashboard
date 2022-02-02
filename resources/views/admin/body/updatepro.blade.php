@extends('admin.index')
@section('tst')
<div class="card card-default" style="margin-top: 3%">
    <div class="card-header card-header-border-bottom">
        <h2>Change Password</h2>
        <h2 class="pull right btn-info">Cannot change password , That Account for demo project </h2>
    </div>

    <div class="card-body">
        <form class="form-pill" method="POST">
            @csrf
            <h2 class="font-semibold text-xl text-gray-800 leading-tight" id="h2">


                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block" style="margin-top: 1%;">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong id=message>{{ $message }}</strong>
                </div>
                @endif

            </h2>
            <div class="form-group">
                <label for="current_password">EMAIL</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="" value="{{$us->email}}">
            </div>
            <div class="form-group">
                <label for="password">NAME</label>
                <input type="text"  class="form-control" name="name" id="name" placeholder="" value="{{$us->name}}">
            </div>

          <button class="btn btn-primary btn-default">Submit</button>
          @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>



        @endif
        </form>
    </div>
</div>



@endsection
