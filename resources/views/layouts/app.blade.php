<?php
use App\Models\Employee;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Employee Management</title>
    <!-- ✅ Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Optional: Font Awesome (for icons) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-4 mb-4 p-4 bg-white rounded shadow-sm ">
        <h1 class="my-4 ">Employee Management System</h1>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
            <li class="nav-item "><a class="nav-link " href="{{ route('employee.index') }}">Employee List</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('employee.create') }}">Create Employee</a></li>
        </ul>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>