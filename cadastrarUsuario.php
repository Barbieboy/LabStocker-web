<?php include("testLogin.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LabStocker - Cadastrar Usuário</title>


    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,700,300" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="assets/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/labstocker-main.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">
        <?php require("header.php"); ?>

        <?php require("sidebar.php"); ?>

        <div id="page-wrapper">
           <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Cadastrar Usuário</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Usuário</label>
                                            <input class="form-control">
                                            <p class="help-block"></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Senha</label>
                                            <input class="form-control">                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Nome</label>
                                            <input class="form-control">                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Matrícula</label>
                                            <input class="form-control">                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control">                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Telefone</label>
                                            <input class="form-control">                                            
                                        </div>
                                             
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Grupo</label>
                                                <select class="form-control">
                                                    <option>Extensão</option>
                                                    <option>Pesquisa</option>
                                                    <option>CNPQ</option>
                                                    <option>PFRH</option>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Função</label>
                                            <select class="form-control">
                                                <option>Bolsista</option>
                                                <option>Orientador</option>
                                                <option>Professor</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Nível de Acesso</label>
                                            <select class="form-control">
                                                <option>Usuário</option>
                                                <option>Administrador</option>
                                            </select>
                                        </div>                         
                                        <div class="form-group">
                                            <label>Imagem Perfil</label>
                                            <input type="file">
                                        </div>
                                        <button type="limpar" class="btn btn-outline btn-warning">Limpar</button>
                                        <button type="cadastrar" class="btn btn-outline btn-success">Cadastrar</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="bower_components/raphael/raphael-min.js"></script>
    <script src="bower_components/morrisjs/morris.min.js"></script>
    <script src="assets/js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="assets/js/labstocker-main.js"></script>

</body>

</html>
