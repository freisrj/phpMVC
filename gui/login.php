<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Área administrativa | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo MAINURL;?>bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo MAINURL;?>bootstrap/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo MAINURL;?>dist/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo MAINURL;?>dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo MAINURL;?>plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">

      <div class="login-logo">
        <!--<b>Área administrativa</b>-->
        <img src="<?php echo MAINURL; ?>img/nlogocomp.png" style="width: 360px">
      </div><!-- /.login-logo -->

      <div class="login-box-body">
        <p class="login-box-msg">Entre com usuário e senha para iniciar.</p>
        
			<?php 
				if (isset($_SESSION ['loginErro'])) {
        			echo "<div class='alert alert-danger role='alert'>".$_SESSION ['loginErro']."</div>";
        }

        // Segurança - para evitar que alguém que cole a URL de uma página interna possa entrar diretamente
        unset($_SESSION ['Id']);
        unset($_SESSION ['Id_fun']);
        unset($_SESSION ['Login']);
        unset($_SESSION ['Senha']);
        unset($_SESSION ['Acesso']);
        unset($_SESSION ['Unidade']);

        unset($_SESSION ['Nome']);
        unset($_SESSION ['Funcao']);
        unset($_SESSION ['Imagem_path']);

        unset($_SESSION ['loginErro']);
      ?>
        </p>
        
        <form action="<?php echo MAINURL;?>controle-login/validaLogin" method="post">
          
          <div class="form-group has-feedback">
            <input type="text" name="txtLogin" class="form-control" placeholder="Digite o usuário">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          
          <div class="form-group has-feedback">
            <input type="password" name="txtSenha" class="form-control" placeholder="Digite a senha">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          
          
          <div class="row">
            
            <div class="col-xs-8">
			  <!-- /.col --> 
              <div class="checkbox icheck">
                <label>
                <input type="checkbox"> Lembre-me
                </label>
              </div>
            </div>
            
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
            </div><!-- /.col -->
          </div>
        </form>

		<!-- /.social-auth-links -->
		
        
        <!--<a href="#">Não lembro minha senha</a><br>
        <a href="register.html" class="text-center">Cadastre-se</a>-->


      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="./plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="./plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
