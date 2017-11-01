<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/login.css">
    <title></title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-offset-5 col-md-3">
            <div class="form-login">
            <h4>Login de Funcionario</h4>
            <form action="auth.php" method="POST">
            <input type="text" id="userName" class="form-control input-sm chat-input" placeholder="username" name="username" />
            </br>
            <input type="text" id="userPassword" class="form-control input-sm chat-input" placeholder="password" name="password" />
            </br>
            <div class="wrapper">

            <span class="group-btn">     
                <input class="btn btn-success btn-md" type="submit" value="login">
                <a href="adduser.html" class="btn btn-md btn-primary">Cadastre-se é de graça</a>
                </form>    
            </span>

            </div>
            </div>
        
        </div>
    </div>
</div>

</body>
</html>