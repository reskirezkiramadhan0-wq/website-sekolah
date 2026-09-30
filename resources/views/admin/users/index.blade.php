@extends('template')

@section('content')

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Data User - SMK YPC CINTAWA</title>

    <link rel="stylesheet"
          href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet"
          href="{{ asset('assets/libs/bootstrap-icons/bootstrap-icons.css') }}">

    <style>

        .main-content{
            margin-left: 255px;
            min-height: 100vh;
            padding-top: 70px;
            background: #f5f7fb;
        }

        .content{
            margin-left: 255;
            padding: 90px 30px 30px;
            min-height: 100vh;
            background: #f5f7fb;
        }

        body {
            background: #f4f7fb;
        }

        .content {
            padding: 40px;
        }

        .card-user {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        }

        .btn-tambah {
            background: #2864e8;
            color: white;
            border: none;
            padding: 10px 18px;
            border-radius: 8px;
            text-decoration: none;
        }

        .btn-tambah:hover {
            background: #1554d1;
            color: white;
        }

        .btn-edit {
            background: #f59e0b;
            color: white;
            border: none;
        }

        .btn-hapus {
            background: #ef233c;
            color: white;
            border: none;
        }

    </style>

</head>

<body>

<div class="content">

    <!-- HEADER -->

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h1>
                Data User
            </h1>

            <p class="text-muted mb-0">
                Kelola data pengguna website sekolah
            </p>

        </div>


        <a href="{{ route('admin.users.create') }}"
           class="btn-tambah">

            <i class="bi bi-plus-lg"></i>
            Tambah User

        </a>

    </div>


    <!-- PESAN SUCCESS -->

    @if(session('success'))

        <div class="alert alert-success">

            {{ session('success') }}

        </div>

    @endif


    <!-- TABLE -->

    <div class="card-user">

        <div class="table-responsive">

            <table class="table align-middle">

                <thead class="table-light">

                    <tr>

                        <th width="70">
                            No
                        </th>

                        <th>
                            Username
                        </th>

                        <th>
                            Role
                        </th>

                        <th width="220">
                            Aksi
                        </th>

                    </tr>

                </thead>


                <tbody>

                    @forelse($users as $user)

                        <tr>

                            <td>
                                {{ $loop->iteration }}
                            </td>


                            <!-- USERNAME -->

                            <td>

                                <strong>
                                    {{ $user->username }}
                                </strong>

                            </td>


                            <!-- ROLE -->

                            <td>

                                @if($user->role == 'Admin')

                                    <span class="badge bg-primary">
                                        Admin
                                    </span>

                                @elseif($user->role == 'Operator')

                                    <span class="badge bg-success">
                                        Operator
                                    </span>

                                @else

                                    <span class="badge bg-secondary">
                                        {{ $user->role }}
                                    </span>

                                @endif

                            </td>


                            <!-- AKSI -->

                            <td>

                                <a href="{{ route('admin.users.edit', $user->id) }}"
                                   class="btn btn-sm btn-edit">

                                    <i class="bi bi-pencil"></i>
                                    Edit

                                </a>


                                <form action="{{ route('admin.users.destroy', $user->id) }}"
                                      method="POST"
                                      class="d-inline">

                                    @csrf

                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn btn-sm btn-hapus"
                                            onclick="return confirm('Yakin ingin menghapus user ini?')">

                                        <i class="bi bi-trash"></i>
                                        Hapus

                                    </button>

                                </form>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="4"
                                class="text-center py-4">

                                Belum ada data user.

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>


<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>

@endsection