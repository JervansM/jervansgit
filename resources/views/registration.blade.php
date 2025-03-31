<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Registration</title>
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

        .modal-content {
            background-color: #7d96af;
            color: white;
            border-radius: 15px;
            border: none;
        }
        .modal-header {
            border-bottom: 1px solid #555;
        }
        .modal-footer {
            border-top: 1px solid #555;
        }
        .btn-close {
            background-color: white;
            border-radius: 50%;
        }
        .btn-close:hover {
            background-color: #555;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card w-50 mx-auto">
            <div class="card-body" style="background-color: #7d96af; border-radius: 20px; border: none;">
                <h1 style="text-align: center; color: white;">Registration Form</h1>
                <form action="/registration" method="POST" style="color: white;">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <a href="/" class="btn btn-style2 me-2">Homepage</a>
                        <button type="submit" class="btn btn-style">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        @if (session('successMessage'))
            <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="successModalLabel">Success</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            {{ session('successMessage') }}
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    var successModal = new bootstrap.Modal(document.getElementById('successModal'));
                    successModal.show();
                });
            </script>
        @endif
    </div>
</body>
</html>
