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
      <form class="form-group" action="{{action('StudentController@update', $id)}}" method="post">
        {{csrf_field()}}
        <form class="form-group" action="index.html" method="post">
          <div class="form-group">
            <input type="hidden" name="_method" class="form-control" value="PATCH"/>
          </div>

          <div class="form-group">
            <input type="text" name="first_name" value="{{$student->first_name}}" class="form-control" placeholder="Enter First Name">
            </div>

          <div class="form-group">
            <input type="text" name="last_name" value="{{$student->last_name}}" class="form-control" placeholder="Enter Last Name">
            </div>

          <div class="form-group">
            <input type="submit" name="" class="form-control btn btn-success" value="Edit">
          </div>
      </form>
    </div>
  </div>
@endsection
