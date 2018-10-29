@extends('master')
@section('content')
<div class="row">
    <div class="col-md-6">
      <br>
      @if(count($errors)>0)
        <div class="alert alert-danger">
          <ul>
            @foreach($errors->all as $error)
              <li>{{$error}}</li>
            @endforeach
          </ul>
        </div>
      @endif
      @if(\Session::has('success'))
      <div class="alert alert-success">
        <p>{{\Session::get('success')}}</p>
      </div>
      @endif
      <form class="form-group" action="{{url('student')}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
          <input type="text" name="first_name" class="form-control" value="" placeholder="First Name" required>
        </div>
        <div class="form-group">
          <input type="text" name="last_name" class="form-control" value="" placeholder="Last Name" required>
        </div>
        <div class="form-group">
          <input type="submit" name="submit" class="btn btn-primary">
          </div>
      </form>

    </div>
</div>
@endsection
