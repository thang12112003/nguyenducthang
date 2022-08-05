@extends('students.layout')

@section('content')
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Students</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('students.create') }}">Add Student</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Address</th>
            <th>Telephone</th>
            <th width="280px">Actions</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->age }}</td>
                <td>{{ $student->address }}</td>
                <td>{{$student->telephone}}</td>
                <td>
                    <form action="{{ route('students.destroy',$student->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('students.show',$student->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('students.edit',$student->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $students->links() !!}

@endsection