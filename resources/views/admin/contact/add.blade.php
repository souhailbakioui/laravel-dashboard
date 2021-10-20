@extends('admin.index')
@section('admin_title','Add Contact') 

@section('tst')
    


<form name="f1" action="{{Route('Contact.store')}}" method="POST">
    @csrf
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
        </ul>
    </div>

    

    @endif
    <div class="form-group" style="margin-top: 2%;">
      <label for="exampleInputEmail1">Address</label>
      <textarea class="form-control" name="adress" id="Adress" rows="3" required minlength="6"></textarea>
      
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Phone</label>
        <input type="text" class="form-control" name="phone" name="phon"  required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  

  @endsection

  