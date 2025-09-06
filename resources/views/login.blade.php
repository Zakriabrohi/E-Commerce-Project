@extends('Master')
@section('content')
    <style>
        .login-time-container {
            max-width: 400px;
            margin: 20px auto;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .login-time-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .time-display {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: white;
            padding: 15px;
            text-align: center;
        }
        .time {
            font-size: 1.8rem;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .date {
            font-size: 1rem;
            opacity: 0.9;
        }
        .login-form {
            padding: 25px;
        }
        .form-control:focus {
            border-color: #4e73df;
            box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.25);
        }
        .btn-login {
            background: #4e73df;
            border: none;
            padding: 10px;
            font-weight: bold;
        }
        .btn-login:hover {
            background: #2e59d9;
        }
        .login-footer {
            text-align: center;
            padding: 15px;
            color: #6c757d;
            font-size: 0.9rem;
            border-top: 1px solid #e9ecef;
        }
    </style>

    <div class="login-time-container">
        <div class="login-time-card">
            <div class="time-display">
                    <h4 class="text-center mb-4">Login to Your Account</h4>
          </div>

            <div class="login-form">

                 <form action='login' method="get">
                  @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email">
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 btn-login">Login</button>


                </form>
            </div>

            <div class="login-footer">
                <p class="mb-0">© 2023 Your Company. All rights reserved.</p>
            </div>
        </div>
    </div>


@endsection
