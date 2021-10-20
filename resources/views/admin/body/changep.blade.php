@extends('admin.index')
@section('tst')
<div class="card card-default" style="margin-top: 3%">
    <div class="card-header card-header-border-bottom">
        <h2>Change Password</h2>
    </div>
    <div class="card-body">
        <form class="form-pill" action="{{Route('update.password')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="current_password">Current Password </label>
                <input type="password" class="form-control" name="old_pass" id="current_password" placeholder="">
            </div>
            <div class="form-group">
                <label for="password">New Password</label>
                <input type="password"  class="form-control" name="password" id="password" placeholder="New Password">
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirmation Password</label>
                <input type="password" class="form-control" id="password_confirmatio" name="password_confirmation" placeholder="Confirmation Password">
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