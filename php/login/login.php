<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/login.css">
    <link rel="stylesheet" href="css/style.css">
    <title></title>
</head>
<body>
<!-- <div class="container">
    <div class="row">
        <div class="col-md-offset-8 col-md-3">
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
</div> -->
    <div class="container" style="margin-top:40px">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-md-offset-7">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong> Continue fazendo o login</strong>
                    </div>
                    <div class="panel-body">
                        <form action="auth.php" method="POST">
                            <fieldset>
                                <div class="row">
                                    <div class="center-block">
                                        <img class="profile-img"
                                            src="img/login.jpg" alt="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="glyphicon glyphicon-user"></i>
                                                </span> 
                                                <input class="form-control" placeholder="Username" name="username" type="text" id="userName" autofocus>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="glyphicon glyphicon-lock"></i>
                                                </span>
                                                <input class="form-control" placeholder="senha" name="password" type="password" id="userPassword" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-lg btn-primary btn-block" value="Sign in">
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="panel-footer ">
                        Ainda não é cadastrado? <a href="adduser.html" onClick=""> Cadastre-se é de graça </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>








