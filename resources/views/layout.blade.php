<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - Student Management System</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS (Optional) -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">Student Management</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link @if(request()->is('/')) active @endif" aria-current="page" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(request()->is('students')) active @endif" href="{{ route('students.index') }}">Students</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(request()->is('students/create')) active @endif" href="{{ route('students.create') }}">Add Student</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <!-- If you have authentication, you can include login/logout links -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-4">
        <p>&copy; {{ date('Y') }} Student Management System. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS and dependencies (Optional but recommended for interactivity) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
