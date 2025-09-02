<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <style>
        body { background: #f8f9fa; }
        .sidebar {
            width: 220px; height: 100vh; position: fixed;
            background: #343a40; color: #fff; padding-top: 20px;
        }
        .sidebar a {
            color: #fff; display: block; padding: 12px 20px;
            text-decoration: none; transition: 0.3s;
        }
        .sidebar a:hover { background: #495057; }
        .content { margin-left: 220px; padding: 20px; }
    </style>
</head>
<body>

    {{-- Sidebar --}}
    @include('Admin.Sidebar')

    <div class="content">
        {{-- Header --}}
        @include('Admin.header')

        {{-- Page Content --}}
        <div class="mt-4">
            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
