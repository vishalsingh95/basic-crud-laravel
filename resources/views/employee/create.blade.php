@extends('layouts.app')

@section('content')

<div class="container mt-5 ">
    <div class="col-md-12">
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
    <div class="col-md-12 bg-white p-4 rounded shadow ">
    <h1 class="my-4">Create Employee</h1>
    <form action="{{ route('employee.store') }}" method="POST" class="needs-validation" novalidate>
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="mobile" class="form-label">Mobile:</label>
            <input type="text" id="mobile" name="mobile" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Age:</label>
            <input type="number" id="age" name="age" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="gender" class="form-label">Gender:</label>
            <select id="gender" name="gender" class="form-control" required>
                <option value="">Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address:</label>
            <textarea id="address" name="address" class="form-control" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="position" class="form-label">Position:</label>
            <input type="text" id="position" name="position" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
    </div>
</div>
@endsection
