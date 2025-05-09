<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('admin.home.edit') }}">Admin Panel</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.hero.edit') }}">Hero</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.about.edit') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.resume.index') }}">Resume</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.skill.index') }}">Skills</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.project.index') }}">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.contact.edit') }}">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @yield('content')
    </div>
</body>
</html>
