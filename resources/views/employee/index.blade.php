@extends('layouts.app')

@section('content')

<div class="container">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
</div>
<div class="container">
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
</div>


<div class="container">
    <h1 class="my-4">Employee List</h1>
    <table class="table">
        <thead class="thead-light">
            <tr class="table-primary">
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile</th>
                <th>Actions</th>
                <th>Position</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($employees as $employee)
                <tr class="table-light">
                    <td >{{ $employee->id }}</td>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->age }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->mobile }}</td>
                    <td>{{ $employee->age }}</td>
                    <td>{{ $employee->position }}</td>
                    <td>
                        <a class="btn btn-info btn-sm" href="{{ route('employee.show', $employee) }}">View</a>
                        <a class="btn btn-warning btn-sm" href="{{ route('employee.edit', $employee) }}">Edit</a>
                        <form action="{{ route('employee.destroy', $employee) }}" method="POST" style="display:inline;" onsubmit="return confirmDelete()">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm ">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <style>
        .table th, .table td {
            text-align: center;
            vertical-align: middle;
        }
        .table .btn {
            margin: 0 2px;
        }
        
    </style>
    <script>
    function confirmDelete() {
        return confirm("Are you sure you want to delete this employee?");
    }
    </script>
@endsection
