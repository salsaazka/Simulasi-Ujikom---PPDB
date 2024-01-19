<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - PPDB</title>

    <!--Bootstrap Assets-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <!--Auth Css-->
    <link rel="stylesheet" href="{{ url('assets/css/auth.css') }}">
</head>
<body>

    <div id="auth">
        <div class="imagesAuth">
            <img src="{{ asset('assets/img/2.-Gedung-2.jpg') }}" alt="">
        </div>
        <div class="sectionFormAuth">
            <div class="headAuth">
                <h1>Welcome</h1>
                <p>Log in to your account to continue</p>
            </div>
            <form action="{{ route('auth') }}" method="post" class="formAuth">
                @csrf
                <div class="mb-3 inputForm">
                    <div class="icon">
                        <label for="email">
                            <img src="../assets/img/iconUser.svg" alt="">
                        </label>
                    </div>
                    <input type="email" class="form-control" id="email" placeholder="email" name="email">
                </div>
                <div class="mb-3 inputForm passwordForm">
                    <div class="icon">
                        <label for="password">
                            <img src="../assets/img/iconLock.svg" alt="">
                        </label>
                    </div>
                    <div class="wrapperToggle">
                        <i class="bi bi-eye-fill" id="togglePassword"></i>
                    </div>
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                </div>
                <div class="mb-4 d-flex justify-content-end">
                    <a href="#" class="forgotPassword">Forgot your password ?</a>
                </div>
                <div class="actionUser d-flex justify-content-center flex-column align-items-center">
                    <button class="btn btnPrimary">Log In</button>
                    <p class="text">Don’t have an account ? <a href="{{ route('register') }}">Sign up!</a></p>
                </div>
            </form>
        </div>
    </div>
    



    <!--Vendor-->
        <!--Bootstrap JS-->
        <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!--Script Auth-->
    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');
        
        togglePassword.addEventListener('click', function (e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);

            this.classList.toggle('bi-eye-slash-fill');
        });
    </script>
</body>
</html>