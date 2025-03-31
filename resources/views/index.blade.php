<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Homepage</title>
    <style>
        body {
            background-color: #919eab;
            font-family: Arial, sans-serif;
            color: white;
        }
        .btn-style {
            color: white;
            background-color: rgb(19, 212, 2);
            text-align: justify;
            align-items: center;
        }
        .btn-style2 {
            color: white;
            background-color: rgb(207, 107, 8);
            text-align: justify;
            align-items: center;
        }
        .btn-style:hover {
            background-color: #555;
            color: white;
        }
        .btn-style2:hover {
            background-color: #555;
            color: white;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Welcome to the Homepage</h1>

    <div class="container mt-5">
        <div class="card w-50 mx-auto">
            <div class="card-body" style="background-color: #7d96af; border-radius: 20px; border: none;">
                <h2 style="text-align: center; color: white;">Registered Users</h2>

                @if (session('successMessage'))
                    <div class="alert alert-success text-center mt-3">
                        {{ session('successMessage') }}
                    </div>
                @endif

                <ul class="list-group mt-3">
                    @forelse ($users as $user)
                        <li class="list-group-item" style="background-color: #7d96af; color: white; border: none;">
                            {{ $user->name }} - {{ $user->email }}
                        </li>
                    @empty
                        <li class="list-group-item" style="background-color: #7d96af; color: white; border: none;">
                            No users registered yet.
                        </li>
                    @endforelse
                </ul>
                <div class="d-flex justify-content-center mt-3">
                    <a href="/registration" class="btn btn-style me-2">Go to Registration</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
