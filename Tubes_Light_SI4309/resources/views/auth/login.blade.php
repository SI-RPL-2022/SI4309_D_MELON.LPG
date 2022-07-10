<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="/login.css">
    <title>Tubes Light</title>
</head>

<body>
    @error('phone')
        <div class="container">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Nomor Telepon dan Password Tidak Cocok
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @enderror

    <div class="container-login">
        <div class="row">
            <div class="col">
                <p id="buka">Silahkan Login Terlebih Dahulu</p>
                <p class="text-center mt-2"><img src="foto/logomelon-lpg.png" width="52px">MELON.LPG </p>
                <p id="login">LOGIN</p>
                <form class="ms-4" action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="phone" class="form-label">{{ __('Phone Number') }}</label>
                        <input value="{{ old('phone') }}" type="text" class="form-control" id="phone" name="phone"
                            aria-describedby="phoneHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" required>
                    </div>
                    <div class="tombol d-grid">
                        <button type="submit" class="btn fw-bold">Login</button>
                    </div>
                </form>
            </div>
            <div class="col">
                <div class="logo">
                    <div class="lingkaran">
                        <img src="/foto/logomelon-lpg.png" width="350px" class="m-4">
                    </div>
                </div>
                {{-- <p><img src="foto/logomelon-lpg.png" width="82px">MELON.LPG<p> --}}
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
