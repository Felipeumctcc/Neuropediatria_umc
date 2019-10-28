<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>NeuroPed UMC</title>
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <!--<link rel="stylesheet" type="text/css" href="../node_modules/bootstrap/dist/css/bootstrap.css">-->
</head>


<body>

    <!--<form>
        <div class="container mt-5 col-lg-6 col-md-6 jumbotron">
            <center><img class="logo" src="img/logo.svg"  width="140"></center>
            <div class="form-group">
                <label for="exampleInputRgm"></label>
                <input type="text" class="form-control" id="id_rgm" placeholder="RGM">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1"></label>
                <input type="password" class="form-control" name="nome" placeholder="Senha">
            </div>
            <button type="submit" class="btn btn-primary">Acessar</button>
            <div><br></div>
            <div class="text-small copyright">
                <span>Copyright © 2000 - 2019 UMC. Todos os direitos reservados. All rights reserved.</span>
            </div>
        </div>
    </form>-->

    <div class="wrap">
        <img class="logo" src="../img/logo.svg" width="140"><br>
        <h2 id="title">NeuroPed UMC</h2>
        <form action="http://aluno.umc.br/entra.php" method="post" id="login_form" name="frm_login"
            onsubmit="return valida();">
            <div class="NeuroPed">
                <input type="text" id="txt_rgm" placeholder="RGM" name="txt_rgm" maxlength="11">
            </div>
            <div class="NeuroPed">
                <input type="password" id="txt_senha" placeholder="Senha" name="txt_senha" maxlength="10">
            </div>
            <div class="NeuroPed">
                <input type="submit" id="acesso" value="Acessar">
            </div>
        </form>
        <div class="text-small copyright"><span>Copyright 2019 UMC. Todos os direitos reservados. All rights
                reserved.</span></div>
    </div>
    <style type="text/css">
        .wrap {
            padding-bottom: 79px !important;
        }
    </style>
</body>

</html>