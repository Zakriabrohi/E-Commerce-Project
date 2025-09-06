@extends('Admin.MasterView')

@section('title', 'Users')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4 text-center text-primary fw-bold">👥 User Management</h2>

    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body p-4">
            <table class="table table-hover align-middle text-center">
                <thead style="background: #0d6efd; color: white;">
                    <tr>
                        <th><i class="fas fa-id-card"></i> User ID</th>
                        <th><i class="fas fa-user"></i> Name</th>
                        <th><i class="fas fa-envelope"></i> Email</th>
                        <th><i class="fas fa-lock"></i> Password</th>
                        <th><i class="fas fa-user-shield"></i> Role</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $values)
                    <tr style="transition: 0.3s;">
                        <td>{{ $values->id }}</td>
                        <td class="fw-semibold text-dark">{{ $values->name }}</td>
                        <td class="text-muted">{{ $values->email }}</td>
                        <td>
                            <span class="badge bg-secondary">••••••</span>
                        </td>
                        <td>
                            @if($values->role == 'admin')
                                <span class="badge bg-danger p-2 rounded-pill">
                                    <i class="fas fa-shield-alt"></i> Admin
                                </span>
                            @else
                                <span class="badge bg-success p-2 rounded-pill">
                                    <i class="fas fa-user"></i> User
                                </span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
