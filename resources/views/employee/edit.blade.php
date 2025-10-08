@extends('layouts.app')

@section('content')

<div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>

<div class="container mt-4 mb-4 p-3 border rounded bg-light ">
    <h1 class="text-center ">Edit Employee</h1>
    <div>
        <a href="{{ route('employee.index') }}" class="btn btn-secondary mb-3">Back to Employee List</a>
    </div>
    <form action="{{ route('employee.update', $employee) }}" method="POST" class="mb-3">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name" >Name:</label>
            <input class="form-control" type="text" id="name" name="name" value="{{ $employee->name }}" >
            <br>
        <label for="email">Email:</label>
        <input class="form-control" type="email" id="email" name="email" value="{{ $employee->email }}" >
        <br>
        <label for="mobile">Mobile:</label>
        <input class="form-control" type="text" id="mobile" name="mobile" value="{{ $employee->mobile }}" >
        <br>
        <label for="age">Age:</label>
        <input class="form-control" type="number" id="age" name="age" value="{{ $employee->age }}" >
        <br>
        <label for="address">Address:</label>
        <textarea class="form-control" id="address" name="address" >{{ $employee->address }}</textarea>
        <br>
        <label for="position">Position:</label>
        <input class="form-control" type="text" id="position" name="position" value="{{ $employee->position }}" >
        <br>
        </div>
        <div class="text-center">
            <button class="btn btn-primary" type="submit">Update</button>
        </div>
    </form>
</div>
@endsection
