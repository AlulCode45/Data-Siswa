<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Aplikasi Datasiswa SMKN 4 Bojonegoro</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css'
        integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA=='
        crossorigin='anonymous' />
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js'
        integrity='sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ=='
        crossorigin='anonymous'></script>
    <link rel="stylesheet" href="{{ asset('assets/css/Login.css') }}">
</head>

<body>
    <div class="row vw-100 vh-100">
        <div class="col-md-7 d-none d-md-block col-12 bg-smk"></div>
        <div class="col-md-5 col-sm-12 bg-white d-flex">
            <div class="my-auto p-5">
                <h1>Aplikasi DataSiswa SMKN 4 Bojonegoro</h1>
                <p>
                    Selamat datang di DataSiwa SMKN 4 Bojonegoro. Aplikasi yang digunakan untuk mengelola datasiswa dan alumni SMKN 4 Bojonegoro
                </p>
                <hr />
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('loginProcess') }}">
                    @csrf
                    <input type="hidden" name="role" value="1">
                    <div class="form-group">
                        <label htmlFor="">NISN</label>
                        <input type="number" name="nisn" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label htmlFor="">Nama Ayah/Ibu/Wali</label>
                        <input type="text" name="nama_ortu" class="form-control" />
                    </div>
                    <div class="form-group d-flex">
                        <button type="submit" class="btn btn-success fw-bold ms-auto mt-3">
                            Masuk
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

</body>

</html>
