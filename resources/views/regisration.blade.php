@extends('Master')
@section('content')

<style>
    .registration-container {
        min-height: 80vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, #f5f7fa 0%, #e4edf5 100%);
        padding: 20px;
    }

    .registration-card {
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        border: none;
        transition: transform 0.3s ease;
    }

    .registration-card:hover {
        transform: translateY(-5px);
    }

    .registration-header {
        background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
        color: white;
        padding: 25px;
        text-align: center;
    }

    .registration-header h4 {
        font-weight: 700;
        margin-bottom: 0;
        font-size: 1.8rem;
    }

    .registration-body {
        padding: 30px;
        background: white;
    }

    .form-label {
        font-weight: 600;
        color: #495057;
        margin-bottom: 8px;
    }

    .form-control {
        border-radius: 10px;
        padding: 12px 15px;
        border: 2px solid #e9ecef;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        border-color: #6a11cb;
        box-shadow: 0 0 0 0.2rem rgba(106, 17, 203, 0.25);
    }

    .input-group {
        position: relative;
    }

    .input-icon {
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: #6c757d;
        z-index: 5;
    }

    .btn-register {
        background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
        border: none;
        border-radius: 10px;
        padding: 12px;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .btn-register:hover {
        background: linear-gradient(135deg, #2575fc 0%, #6a11cb 100%);
        transform: translateY(-2px);
    }

    .login-redirect {
        text-align: center;
        margin-top: 20px;
        color: #6c757d;
    }

    .login-redirect a {
        color: #6a11cb;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .login-redirect a:hover {
        color: #2575fc;
        text-decoration: underline;
    }

    .password-toggle {
        cursor: pointer;
        transition: color 0.3s ease;
    }

    .password-toggle:hover {
        color: #6a11cb;
    }

    @media (max-width: 576px) {
        .registration-card {
            margin: 0 10px;
        }

        .registration-body {
            padding: 20px;
        }
    }
</style>

<div class="registration-container">
    <div class="col-md-5">
        <div class="registration-card">
            <div class="registration-header">
                <h4><i class="fas fa-user-plus me-2"></i>Create Account</h4>
            </div>

            <div class="registration-body">
                <form action='/register' method="post">
                    @csrf

                    <div class="mb-4">
                        <label class="form-label">User Name</label>
                        <div class="input-group">
                            <input type="text" name="name" class="form-control" placeholder="Enter your full name">
                            <span class="input-icon"><i class="fas fa-user"></i></span>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Email address</label>
                        <div class="input-group">
                            <input type="email" name="email" class="form-control" placeholder="Enter your email">
                            <span class="input-icon"><i class="fas fa-envelope"></i></span>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Password</label>
                        <div class="input-group">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Create a strong password">
                            <span class="input-icon password-toggle" id="passwordToggle">
                                <i class="fas fa-eye"></i>
                            </span>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-register w-100">
                        <i class="fas fa-user-plus me-2"></i> Register
                    </button>

                    <div class="login-redirect">
                        Already have an account? <a href="/">Sign In</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

@endsection
