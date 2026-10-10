
<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Login - SMK YPC CINTAWA</title>

    <link rel="stylesheet"
          href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet"
          href="{{ asset('assets/libs/bootstrap-icons/bootstrap-icons.css') }}">

    <style>

        body {
            min-height: 100vh;
            background: #f4f7fb;

            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-card {
            width: 420px;

            background: white;

            border-radius: 20px;

            padding: 40px;

            box-shadow:
                0 10px 30px rgba(0, 0, 0, 0.08);
        }

        .login-logo {
            width: 90px;
            height: 90px;

            object-fit: contain;

            display: block;

            margin: 0 auto 15px;
        }

        .login-title {
            text-align: center;

            font-weight: 700;

            color: #0d3b35;
        }

        .login-subtitle {
            text-align: center;

            color: #777;

            margin-bottom: 30px;
        }

        .form-control {
            height: 48px;

            border-radius: 10px;
        }

        .btn-login {
            width: 100%;

            height: 48px;

            border: none;

            border-radius: 10px;

            background: #0d3b35;

            color: white;

            font-weight: 600;
        }

        .btn-login:hover {
            background: #092c27;

            color: white;
        }

        .alert {
            border-radius: 10px;
        }

    </style>

</head>


<body>


<div class="login-card">


    <!-- LOGO -->

    <img
        src="{{ asset('assets/images/logo.png') }}"
        alt="Logo SMK YPC CINTAWA"
        class="login-logo"
    >


    <!-- JUDUL -->

    <h3 class="login-title">
        SMK SIRAHCAI
    </h3>


    <p class="login-subtitle">
        Login Admin
    </p>



    <!-- ERROR -->

    @if ($errors->any())

        <div class="alert alert-danger">

            {{ $errors->first() }}

        </div>

    @endif



    <!-- FORM -->

    <form
        action="{{ route('admin.login.process') }}"
        method="POST">

        @csrf


        <!-- USERNAME -->

        <div class="mb-3">

            <label class="form-label">
                Username
            </label>

            <div class="input-group">

                <span class="input-group-text">
                    <i class="bi bi-person"></i>
                </span>

                <input
                    type="text"
                    name="username"
                    class="form-control"
                    value="{{ old('username') }}"
                    placeholder="Masukkan username"
                    required
                >

            </div>

        </div>



        <!-- PASSWORD -->

        <div class="mb-4">

            <label class="form-label">
                Password
            </label>

            <div class="input-group">

                <span class="input-group-text">
                    <i class="bi bi-lock"></i>
                </span>

                <input
                    type="password"
                    name="password"
                    class="form-control"
                    placeholder="Masukkan password"
                    required
                >

            </div>

        </div>



        <!-- LOGIN -->

        <button
            type="submit"
            class="btn btn-login">

            <i class="bi bi-box-arrow-in-right me-1"></i>

            Login

        </button>


    </form>


</div>


</body>

</html>