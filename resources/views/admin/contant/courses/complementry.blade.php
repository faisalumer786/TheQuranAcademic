@extends('admin.layout.app')
@section('contant')
<!-- <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 9 CRUD Example from scratch - ItSolutionStuff.com</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('religious.create') }}"> Create New Product</a>
            </div>
        </div>
    </div> -->
    <a class="btn btn-warning m-5 mb-0"
                       href="{{ route('export') }}">
                              Export All Data
                      </a>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr class="success">
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Course</th>
            <th>DOB</th>
            <th>City</th>
            <th>Country</th>
            <th>Gender</th>
            <th width="580px">Action</th>
        </tr>
        @foreach ($complementry as $comp)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $comp->name }}</td>
            <td>{{ $comp->email }}</td>
            <td>{{ $comp->contact }}</td>
            <td>{{ $comp->course }}</td>
            <td>{{ $comp->date_of_birth }}</td>
            <td>{{ $comp->city }}</td>
            <td>{{ $comp->country }}</td>
            <td>{{ $comp->gender }}</td>
            <td>
                <form action="{{ route('religious.destroy',$comp->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
@endsection