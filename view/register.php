<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="shortcut icon" href="../asset/images/user.png" type="image/x-icon">
    <link rel="stylesheet" href="../asset/css/form.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body>

    <main class="m-auto">
        <div class="container-form rounded">
            <form class="p-3" id="form">

                <div class="input-group input-group-sm input mt-4">
                    <div class="input-group-text">
                        <img src="../asset/images/svg/username-icon.svg" alt="username-icon" style="height: 1rem">
                    </div>
                    <input class="form-control bg-light" name="username" autofocus type="text" placeholder="Username">
                </div>

                <div class="input-group input-group-sm mt-1">
                    <div class="input-group-text">
                        <img src="../asset/images/svg/password-icon.svg" alt="password-icon" style="height: 1rem">
                    </div>
                    <input class="form-control bg-light" name="password" type="password" placeholder="Password">
                </div>

                <div class="form-check d-flex justify-content-between mt-3 text-white">
                    <label class="form-check-label small" for="flexCheckDefault">
                        <input class="form-check-input me-2 small" type="checkbox" id="flexCheckDefault">
                        Recuerdame
                    </label>
                    <a href="#" class="text-decoration-none text-white fw-semibold small fst-italic">¿Olvidaste tu
                        contraseña?</a>
                </div>

                <input class="btn btn-outline-primary text-white w-100 my-3 fw-semibold shadow-sm" type="submit"
                    id="submit" value="Ingresar">

                <div class="d-flex gap-1 justify-content-between align-items-baseline text-white my-1">
                    <span class="small">¿No tienes una cuenta?</span>
                    <a href="#" class="text-decoration-none text-light fw-semibold">Registrarme</a>
                </div>

                <div class="or"></div>

                <a class="btn bg-white w-100 fw-semibold mt-3 p-1 text-secondary" href="#">
                    <img src="../asset/images/svg/google-icon.svg" alt="google-icon" style="height: 1.6rem" />
                    Continue with Google
                </a>

            </form>
        </div>
    </main>

    <script src="./asset/js/sweetalert2.all.min.js"></script>
    <script src="./asset/js/jquery.min.js"></script>

</body>

</html>