<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnLibrary</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>
    <div class="header">
        <div class="logo">
            <a href="catalago.php"><img src="assets/img/logo.png" alt=""></a>
        </div>
    </div>

    <div class="form">
        <div class="container">
            <fieldset>
                <legend>Login</legend>
                <form action="assets/php/entrar.php" method="POST">
                    <div class="row">
                        <div class="col">
                            <label for="user" class="form-label">Usuário</label>
                            <input type="email" name="user" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="senha" class="form-label">Senha</label>
                            <input type="password" name="senha" class="form-control" placeholder="">
                        </div>
                    </div>
                    <button type="submit">Entrar</button>
                </form>
            </fieldset>
        </div>
    </div>
</body>

</html>