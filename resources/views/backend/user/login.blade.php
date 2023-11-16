<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <title>Document</title>
    <style>
        .khung {
            max-width: 600px;
            text-align: center;
            border: 1px solid #ccc;
            border-radius: 10px;
            margin: auto;
        }
    </style>
</head>

<body>
    <div class="khung">
        <form action="{{ route('admin.login') }}" method="post">
            @csrf
            <div class="container p-3">
                <h3 class="text-center text-danger">ĐĂNG NHẬP</h3>
                <div class="mb-3">
                    <label for="username">
                        <strong>Tên đăng nhập(*)</strong>

                    </label>
                    <input type="text" placeholder="Tên đăng nhập hoặc email" name="username" id="username" required
                        class="form-control mt-2">
                </div>
                <div class="mb-3">
                    <label for="password">
                        <strong>Mật khẩu(*)</strong>

                    </label>
                    <input type="password" placeholder="Nhập mật khẩu" name="password" id="password"
                        required class="form-control mt-2">
                </div>
                <div class="mb-3">
                    <button type="submit " class="btn btn-success form-control">Đăng Nhập</button>
                </div>
                {{-- <div class="mb-3">
                   {{$error}}
                </div> --}}
            </div>
        </form>
    </div>
</body>

</html>
