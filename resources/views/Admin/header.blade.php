<nav class="navbar navbar-light bg-white shadow-sm p-3">
    <span class="navbar-brand mb-0 h5">Admin Dashboard</span>
    <div>
        <i class="fa-solid fa-user-circle"></i> {{ Auth::user()->name ?? 'Admin' }}
    </div>
</nav>
