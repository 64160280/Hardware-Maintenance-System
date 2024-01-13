้
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">

    <style>
        .input-box {
            box-sizing: border-box;
        }

        .input-box header {
            font-weight: 700;
            text-align: center;
            margin-bottom: 45px;
        }

        .input-field {
            display: flex;
            flex-direction: column;
            position: relative;
            padding: 0 10px 0 10px;
        }

        .input {
            height: 45px;
            width: 100%;
            background: transparent;
            border: none;
            border-bottom: 1px solid rgba(0, 0, 0, 0.2);
            outline: none;
            margin-bottom: 20px;
            color: #40414a;
        }

        .input-box .input-field label {
            position: absolute;
            top: 10px;
            left: 10px;
            pointer-events: none;
            transition: .5s;
        }

        .input-field .input:focus~label {
            top: -10px;
            font-size: 13px;
        }

        .input-field .input:valid~label {
            top: -10px;
            font-size: 13px;
            color: #5d5076;
        }

        .input-field .input:focus,
        .input-field .input:valid {
            border-bottom: 1px solid #e13a45;
        }
    </style>

</head>

<body>
    <form method="POST" action="{{ route('Login') }}">
        @csrf
        <div class="row">
            <div class="col-md-6 col-sm-12 ps-4">
                <span class="text">
                    ทุกวัน ตลอด 24 ชม.
                    <br>
                    สอบถาม แจ้งซ่อมอุปกรณ์ และแจ้งเบิกอุปกรณ์
                </span>
                <img src="{{ asset('logo1_prev_ui 1.svg') }}" alt="" class="img-login">

            </div>
            <div class="col-md-6 col-sm-12 d-flex justify-content-center rounded-4 rounded-end" id="white-box">

                <div class="login-group">
                    <div class="d-flex justify-content-center mb-5">
                        <img src="{{ asset('logo.svg') }}" alt="" id="logo-login">
                    </div>

                    <div class="input-box">
                        <div>

                            <div class="input-field">
                                <input id="username" type="username"
                                    class="input @error('username') is-invalid @enderror" name="username"
                                    value="{{ old('username') }}" required autocomplete="username" autofocus>
                                <label for="username" class="">{{ __('Username') }}</label>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-5">

                            <div class="input-field">
                                <input id="password" type="password"
                                    class="input @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password">
                                <label for="password">{{ __('Password') }}</label>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div>
                        <div>
                            <button type="submit" class="btn login-btn w-100 mt-5">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </form>

</body>

</html>
