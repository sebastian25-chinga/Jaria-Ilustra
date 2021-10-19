<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrate</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <style>
        body{
            background-image: url(../img/logo.jpg);
            background-position: center center center center;
        }
    </style>
</head>
<body>
    <div class="container w-75 mt-5 mb-5">
        <div class="row align-items-stretch">
            <div class="col">
                <h2 class="text-center">Registrate</h2>
                <hr>
                <form action="../Controller/registrarController.php" method="POST">
                    <div class="mb-4">
                        <input type="text" name="nombreRegister" placeholder="Ingresa tus nombres" class="form-control">
                    </div>
                    <div class="mb-4">
                        <input type="text" name="apellidosRegister" placeholder="Ingrese sus apellidos" class="form-control">
                    </div>
                    <div class="mb-4">
                        <input type="email" name="emailRegister" placeholder="Ingrese un correo" class="form-control">
                    </div>
                    <div class="mb-4">
                        <input type="password" name="passwordRegister" placeholder="Ingresa una contraseña" class="form-control">
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Registrate</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>