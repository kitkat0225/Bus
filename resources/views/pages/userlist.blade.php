@extends('layouts.main')

@section('page-content')
  <div>
    <table class="table table-info">
      <thead>
        <td>id</td>
        <td>name</td>
        <td>email</td>
        <td>password</td>
        <td>Edit/Delete</td>
      </thead>
      <tbody>
        @foreach($users as $user)
          <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td>
              <form method="POST" action="" class="form-inline">
                 <input type="hidden" name="_token" value="{{csrf_token()}}">
                 <input type="hidden" name="id" value="{{$user->id}}">
                 <button type="submit" class="btn btn-success btn-xs">Edit</button>
              </form>
              <form method="GET" action="{{ url('delete') }}" class="form-inline">
                <input type="hidden" value="{{csrf_token()}}" name="_token" >
                <input type="hidden" value="{{$user->id}}" name="id">
                <button type="submit" class="btn btn-danger btn-xs">Delete </button>
              </form> 
              
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection