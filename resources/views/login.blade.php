<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css
    ">
    <title>Rental Buku | Login</title>
    <style>
        .main {
            height: 100vh;
            box-sizing: border-box;
        }

        .login-box {
            width: 500px;
            border: solid 1px;
            padding: 20px;
        }

        form div {
            margin-bottom: 15px;
        }

        .login {
            min-height: 100vh;
        }

        .bg-image {
            background-image: url('https://images.unsplash.com/photo-1481627834876-b7833e8f5570?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=928&q=80');
            background-size: cover;
            background-position: center;
        }

        .login-heading {
            font-weight: 300;
        }

        .btn-login {
            font-size: 0.9rem;
            letter-spacing: 0.05rem;
            padding: 0.75rem 1rem;
        }
    </style>
</head>

<body>
    <div class="container-fluid ps-md-0">
        <div class="row g-0">
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
            <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <h3 class="login-heading">Selamat datang di,
                                    <img src="{{asset('images/logo.svg')}}" alt="" srcset="" height="50%" >!
                                </h3>
                                <h5 class="login-heading mb-4 mt-2">Silahkan login terlebih dahulu</h5>
                                @if (session('status'))
                                    <div class="alert alert-{{ session('status') }}">
                                        {{ session('message') }}
                                    </div>
                                @endif

                                <!-- Sign In Form -->
                                <form action="login" method="post">
                                    @csrf
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="username" name="username"
                                            placeholder="Your Username" required>
                                        <label for="username">Username</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" id="password" name="password"
                                            placeholder="Password">
                                        <label for="password">Password</label>
                                    </div>

                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="rememberPasswordCheck">
                                        <label class="form-check-label" for="rememberPasswordCheck">
                                            Remember password
                                        </label>
                                    </div>

                                    <div class="d-grid">
                                        <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2"
                                            type="submit">Sign In</button>
                                        <div class="text-center">
                                            don't have account? <a href="/register">Sign Up</a>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js
    "></script>
</body>

</html>
