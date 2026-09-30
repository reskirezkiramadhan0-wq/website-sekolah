<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Edit User - SMK YPC CINTAWA</title>

    <link rel="stylesheet"
          href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}">

    <style>
        body {
            background: #f4f7fb;
        }

        .content {
            max-width: 800px;
            margin: 40px auto;
        }

        .card {
            border: none;
            border-radius: 15px;
        }
    </style>

</head>

<body>

<div class="content">

    <div class="card shadow-sm">

        <div class="card-body p-4">

            <h1 class="mb-4">
                Edit User
            </h1>


            <form action="{{ route('admin.users.update', $user->id) }}"
                  method="POST">

                @csrf

                @method('PUT')


                <!-- Username -->

                <div class="mb-3">

                    <label class="form-label">
                        Username
                    </label>

                    <input
                        type="text"
                        name="username"
                        class="form-control"
                        value="{{ old('username', $user->username) }}"
                        required
                    >

                    @error('username')

                        <div class="text-danger mt-1">
                            {{ $message }}
                        </div>

                    @enderror

                </div>


                <!-- Password -->

                <div class="mb-3">

                    <label class="form-label">
                        Password
                    </label>

                    <input
                        type="password"
                        name="password"
                        class="form-control"
                        placeholder="Kosongkan jika tidak ingin mengubah password"
                    >

                    @error('password')

                        <div class="text-danger mt-1">
                            {{ $message }}
                        </div>

                    @enderror

                </div>


                <!-- Role -->

                <div class="mb-4">

                    <label class="form-label">
                        Role
                    </label>

                    <select
                        name="role"
                        class="form-select"
                        required>

                        <option value="Admin"
                            {{ old('role', $user->role) == 'Admin' ? 'selected' : '' }}>
                            Admin
                        </option>

                        <option value="Guru"
                            {{ old('role', $user->role) == 'Guru' ? 'selected' : '' }}>
                            Guru
                        </option>

                        <option value="User"
                            {{ old('role', $user->role) == 'User' ? 'selected' : '' }}>
                            User
                        </option>

                    </select>

                    @error('role')

                        <div class="text-danger mt-1">
                            {{ $message }}
                        </div>

                    @enderror

                </div>


                <!-- Tombol -->

                <button type="submit"
                        class="btn btn-primary">

                    Update

                </button>


                <a href="{{ route('admin.users.index') }}"
                   class="btn btn-secondary">

                    Kembali

                </a>

            </form>

        </div>

    </div>

</div>

</body>

</html>