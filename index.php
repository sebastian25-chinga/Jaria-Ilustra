<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jaria-Ilustra</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            background: #f93ffb;
            background: linear-gradient(to right, #b43ab3, #f93ffb);
        }

        .bg {
            background-image: url(img/logo.jpg);
            background-position: center center;
        }
    </style>
</head>

<body>
    <div class="container w-75 bg-primary mt-5 mb-5 rounded shadow">
        <div class="row align-items-stretch">
            <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded">

            </div>
            <div class="col bg-white p-5 rounded-end">
                <div class="text-end">
                    <img src="" alt="">
                </div>

                <h2 class="fw-bold text-center py-5">Bienvenido</h2>

                <form action="Controller/ingreso.php" method="post">
                    <div class="mb-4">
                        <label for="email" class="for-label">Correo electronico</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="for-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
                    </div>
                    <div class="my-3">
                        <span>No tienes cuenta? <a href="View/Registro.php">Registrate</a></span> <br>
                        <span><a href="">¿Olvidó su contraseña?</a></span>
                    </div>
                </form>

                <!--LOGIN CON REDES SOCIALES
                <div class="container w-100 my-5">
                    <div class="row text-center">
                        <div class="col-12">Iniciar Sesion</div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-outline-primary w-100 my-1">
                                <div class="row align-items-center">
                                    <div class="col-2">

                                    </div>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
                -->
            </div>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
    <script>
        window.watsonAssistantChatOptions = {
            integrationID: "b919bcd5-3b4d-4dc3-8b6a-eecac0e998dd", // The ID of this integration.
            region: "us-south", // The region your integration is hosted in.
            serviceInstanceID: "4b1d325d-cc17-432c-82b5-932dcab2435f", // The ID of your service instance.
            onLoad: function (instance) { instance.render(); }
        };
        setTimeout(function () {
            const t = document.createElement('script');
            t.src = "https://web-chat.global.assistant.watson.appdomain.cloud/versions/" +
                (window.watsonAssistantChatOptions.clientVersion || 'latest') +
                "/WatsonAssistantChatEntry.js"
            document.head.appendChild(t);
        });
    </script>
</body>

</html>