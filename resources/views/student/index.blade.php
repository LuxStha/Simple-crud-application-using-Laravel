@extends('master')

@section('content')
  <div class="row">
    <br>
    <button class="btn btn-success"><a href="{{route('student.create')}}">Add</a></button>
  <br>
  <br>
    <table class="table  table-bordered">
      <tr>
        <th>First Name</th>
        <th>last Name</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
      @foreach($students as $row)
        <tr>
          <td>{{$row['first_name']}}</td>
          <td>{{$row['last_name']}}</td>
          <td><button type="button" class="btn btn-success"><a style="color:white" href="{{action('StudentController@edit',$row['id'])}}">Edit</a></button></td>
          <td>
              <form class="delete_form" action="{{action('StudentController@destroy',$row['id'])}}" method="post">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" name="button" class="btn btn-danger">Delete</button>
              </form>
          </td>
        </tr>
      @endforeach
    </table>
  </div>
@endsection
