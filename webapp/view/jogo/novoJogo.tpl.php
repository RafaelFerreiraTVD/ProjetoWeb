<?php
global $APP_Router;
global $APP_ViewDisp;
global $APP_WebAsset;

$user_ativo = $APP_ViewDisp->dataComposer->getDataForView('user');

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="../images/favicon_1.ico">

        <title>Jogo da Forca</title>

        <!--Morris Chart CSS -->
		    <link rel="stylesheet" href="../public/plugins/morris/morris.css">

        <!--@yield('css')-->
        <link href="../public/plugins/sweetalert/dist/sweetalert.css" rel="stylesheet" type="text/css">
        <link href="../public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../public/css/core.css" rel="stylesheet" type="text/css" />
        <link href="../public/css/components.css" rel="stylesheet" type="text/css" />
        <link href="../public/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="../public/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="../public/css/responsive.css" rel="stylesheet" type="text/css" />
        <link href="../public/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" rel="stylesheet">

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="../public/js/modernizr.min.js"></script>


    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->

            <?php

             include( 'view/elements/topbar.php');

             ?>
            <!-- Top Bar End -->

            <!-- ========== Left Sidebar Start ========== -->


            <?php include ('view/elements/menu.php'); ?>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
              <!-- Start content -->
              <div class="content">
                <div class="container">
                  <!-- ####################### CONTENT ###################### -->
                  <form class="form-horizontal" action="router.php?route=jogo&action=novoJogo" method="post" role="form">
                        <div class="col-sm-12">
                        	<div class="card-box">
                        		<div class="col-md-8">
                                    <h4 class="m-t-0 header-title"><b>Adicionar Utilizador</b></h4>
                            		<p class="text-muted m-b-30 font-13">
                            			Adicionar um novo utilizador.
                            		</p>
                                </div>
                        		<div class="row">
                        			<div class="col-md-12">
                                  <div class="form-group">
                                      <label class="col-md-2 control-label" for="primeiro_nome">Primeiro nome</label>
                                      <div class="col-md-4">
                                          <input type="text" id="nome" name="primeiro_nome" class="form-control" placeholder="Primeiro nome">
                                      </div>
                                      <label class="col-md-2 control-label" for="ultimo_nome">Último nome</label>
                                      <div class="col-md-4">
                                          <input type="text" id="morada" name="ultimo_nome" class="form-control" placeholder="Último nome">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-md-2 control-label" for="username">Username</label>
                                      <div class="col-md-4">
                                          <input type="text" class="form-control" name="username" placeholder="Username">
                                      </div>
                                      <label class="col-md-2 control-label" for="email">Email</label>
                                      <div class="col-md-4">
                                          <input type="text" class="form-control" name="email" placeholder="Email" >
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-md-2 control-label" for="password">Password</label>
                                      <div class="col-md-4">
                                          <input type="password" class="form-control" name="password" placeholder="Password">
                                      </div>
                                      <label class="col-md-2 control-label" for="repeat_password">Repetir Password</label>
                                      <div class="col-md-4">
                                          <input type="password" class="form-control" name="repeat_password" placeholder="Repetir password">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-md-2 control-label" for="datepicker-autoclose">Data de Nascimento</label>
                                      <div class="col-sm-4">
                                          <div class="input-group">
                                              <input type="text" class="form-control" name="data_nascimento" placeholder="dd/mm/yyyy" id="datepicker-autoclose">
                                              <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                                          </div><!-- input-group -->
                                      </div>
                                      <div class="col-md-6">
                                        <div class="pull-right">
                                            <button type="reset" class="btn btn-danger waves-effect waves-light" value="submit">Limpar</button>
                                            <button type="submit" class="btn btn-facebook waves-effect waves-light" value="submit">Guardar</button>
                                        </div>
                                      </div>
                                  </div>
                                 </div>
                            </div>
                        </div>
                    </div>
                    </form>

<!-- ############## CONTENT ############## -->
</div>
</div>
</div>


<!-- content -->

<footer class="footer text-right">
© 2016 Programação para a web - servidor.
</footer>
</div>
<!-- END wrapper -->

<script>
var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="../public/js/jquery.min.js"></script>
<script src="../public/js/bootstrap.min.js"></script>
<script src="../public/js/detect.js"></script>
<script src="../public/js/fastclick.js"></script>
<script src="../public/js/jquery.slimscroll.js"></script>
<script src="../public/js/jquery.blockUI.js"></script>
<script src="../public/js/waves.js"></script>
<script src="../public/js/wow.min.js"></script>
<script src="../public/js/jquery.nicescroll.js"></script>
<script src="../public/js/jquery.scrollTo.min.js"></script>

<script src="../public/plugins/peity/jquery.peity.min.js"></script>

<!-- jQuery  -->
<script src="../public/plugins/waypoints/lib/jquery.waypoints.js"></script>
<script src="../public/plugins/counterup/jquery.counterup.min.js"></script>



<script src="../public/plugins/morris/morris.min.js"></script>
<script src="../public/plugins/raphael/raphael-min.js"></script>

<script src="../public/plugins/jquery-knob/jquery.knob.js"></script>

<script src="../public/pages/jquery.dashboard.js"></script>

<script src="../public/js/jquery.core.js"></script>
<script src="../public/js/jquery.app.js"></script>
<script src="../public/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<script>

jQuery('#datepicker-autoclose').datepicker({
autoclose: true,
todayHighlight: true
});

</script>

<script type="text/javascript">
jQuery(document).ready(function($) {
$('.counter').counterUp({
    delay: 100,
    time: 1200
});

$(".knob").knob();

});
</script>
<?php

if(isset($_SESSION['Sucesso'])){
unset($_SESSION['Sucesso']);
?>

<script src="../public/plugins/sweetalert/dist/sweetalert.min.js"></script>
<script src="../public/pages/jquery.sweet-alert.init.js"></script>


<script>

$(document).ready(function(){
    sweetAlert(
      'Utilizador adicionado',
      'Inseriu um novo utilizador com sucesso!',
      'success'
    )
});
</script>
<?php
}

if(isset($_SESSION["erro"])){

$msg = "";

switch($_SESSION["erro"]){
case 1:
$msg = "'Campos em falta',
'Existem campos em falta, preencha todos os campos obrigatórios!',
'error'";
break;
case 2:
$msg = "'Password incorreta',
'As passwords que inseriu não coincidem, volte a inserir de novo por favor!',
'error'";
break;
case 3:
$msg = "'Erro de ligação',
'Ocorreu um erro no servidor quando tentava guardar, volte a tentar de novo por favor!',
'error'";
break;
default:
$msg = "'Erro desconhecido',
'Ocorreu um erro atualmente desconhecido, volte a tentar mais tarde, por favor!',
'error'";
break;
}
unset($_SESSION['erro']);
?>

<script src="../public/plugins/sweetalert/dist/sweetalert.min.js"></script>
<script src="../public/pages/jquery.sweet-alert.init.js"></script>


<script>

$(document).ready(function(){
sweetAlert(
  <?php echo $msg; ?>
)
});
</script>
<?php
}
?>
<!--@yield('script')-->


</body>
</html>
