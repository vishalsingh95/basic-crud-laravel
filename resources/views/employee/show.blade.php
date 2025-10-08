@extends('layouts.app')
@section('content')
<div>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
</div>

<div>
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
</div>

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

<div>
    @if (session('warning'))
        <div class="alert alert-warning">
            {{ session('warning') }}
        </div>
    @endif
</div>

<div>
    @if (session('info'))
        <div class="alert alert-info">
            {{ session('info') }}
        </div>
    @endif
</div>

<div class="container mt-4 mb-4 p-3 border rounded bg-light ">
    <div class="card ">
        <div class="card-header">
            <h1 >Employee Details</h1>
        </div>
        <div class="card-body mt-3 mb-3 p-3 border rounded bg-white">
            <p class="card-text"><strong>Name:</strong> {{ $employee->name }}</p>
            <p class="card-text"><strong>Email:</strong> {{ $employee->email }}</p>
            <p class="card-text"><strong>Position:</strong> {{ $employee->position }}</p>
            <p class="card-text"><strong>Mobile:</strong> {{ $employee->mobile }}</p>
            <p class="card-text"><strong>Age:</strong> {{ $employee->age }}</p>
            <p class="card-text"><strong>Address:</strong> {{ $employee->address }}</p>
            <a class="btn btn-primary" href="{{ route('employee.index') }}">Back to List</a>
            <a class="btn btn-secondary" href="{{ route('employee.edit', $employee->id) }}">Edit</a>
        </div>
    </div>
</div>

@endsection