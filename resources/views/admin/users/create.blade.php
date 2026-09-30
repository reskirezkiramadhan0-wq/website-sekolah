
<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Tambah User - SMK YPC CINTAWA</title>

    <link rel="stylesheet"
          href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet"
          href="{{ asset('assets/libs/bootstrap-icons/bootstrap-icons.css') }}">

    <style>

        body {
            background: #f4f7fb;
        }

        .content {
            max-width: 800px;
            margin: 50px auto;
        }

        .card {
            border: none;
            border-radius: 15px;
        }

    </style>

</head>

<body>

<div class="content">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h2 class="mb-1">
                Tambah User
            </h2>

            <p class="text-muted mb-0">
                Tambahkan pengguna baru
            </p>

        </div>

        <a href="{{ route('admin.users.index') }}"
           class="btn btn-secondary">

            <i class="bi bi-arrow-left"></i>
            Kembali

        </a>

    </div>


    <div class="card shadow-sm">

        <div class="card-body p-4">

            <form action="{{ route('admin.users.store') }}"
                  method="POST">

                @csrf


                <!-- Username -->

                <div class="mb-3">

                    <label class="form-label">
                        Username
                    </label>

                    <input
                        type="text"
                        name="username"
                        class="form-control"
                        value="{{ old('username') }}"
                        placeholder="Masukkan username"
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
                        placeholder="Masukkan password"
                        required
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

                        <option value="">
                            -- Pilih Role --
                        </option>

                        <option value="Admin"
                            {{ old('role') == 'Admin' ? 'selected' : '' }}>
                            Admin
                        </option>

                        <option value="Operator"
                            {{ old('role') == 'Operator' ? 'selected' : '' }}>
                            Operator
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

                    <i class="bi bi-save"></i>
                    Simpan User

                </button>


                <a href="{{ route('admin.users.index') }}"
                   class="btn btn-secondary">

                    Batal

                </a>

            </form>

        </div>

    </div>

</div>


<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
