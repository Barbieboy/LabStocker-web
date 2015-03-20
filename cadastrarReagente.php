<?php include("testLogin.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LabStocker - Cadastrar Reagente</title>


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

        <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

</head>

<body>

    <div id="wrapper">
        <?php require("header.php"); ?>

        <?php require("sidebar.php"); ?>

        <div id="page-wrapper">
           <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Cadastrar Reagente</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                            <form role="form" action="" method="post" id="form-cadastrar-reagente">
                                <div class="col-lg-6">
                                    
                                        <div class="form-group">
                                            <label>Nome*</label>
                                            <input class="form-control" id="nome">
                                            <p class="help-block">Exemplo: Ácido Clorídrico</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Classificação*</label>
                                            <select class="form-control" id="classificacao">
                                            <?php 
                                            $query = "SELECT * FROM Reagentes_Classificacao";
                                            $result = mysqli_query($dbc, $query);
                                            while($row = mysqli_fetch_array($result)):
                                            ?>
                                                <option value="<?php echo $row['idClassificacao']; ?>"><?php echo $row['prateleira'].' - '.utf8_encode($row['nome']); ?></option>
                                            <?php endwhile; ?>
                                            </select>

                                        </div>
                                        <div class="form-group">
                                            <label>Fórmula</label>
                                            <input class="form-control" id="formula">
                                            <p class="help-block">Exemplo: HCl</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Fabricante*</label>
                                            <select class="form-control" id="fabricante">
                                            <?php 
                                            $query = "SELECT * FROM Reagentes_Fabricante";
                                            $result = mysqli_query($dbc, $query);
                                            while($row = mysqli_fetch_array($result)):
                                            ?>
                                                <option value="<?php echo $row['idFabricante']; ?>"><?php echo utf8_encode($row['nome']); ?></option>
                                            <?php endwhile; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Quantidade</label>
                                            <div class="row">

                                                <div class="col-md-8"><input class="form-control" id="quantidade"></div>
                                                <div class="col-md-4"><select class="form-control" id="unidadeQuantidade">
                                                    <option>mg</option>
                                                    <option>g</option>
                                                    <option>kg</option>
                                                    <option>mL</option>
                                                    <option>L</option>
                                                </select> </div>
                                            </div>
                                        </div> 
                                        
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Código</label>
                                        <input class="form-control" id="codigo">
                                    </div>            
                                        
                                    <div class="form-group">
                                        <label>Dados Adicionais</label>
                                        <textarea class="form-control" rows="3" id="dadosAdicionais"></textarea>
                                        <p class="help-block">Exemplo: Validade</p>
                                    </div>                           
                                    
                                    <div class="form-group">
                                        <label>Imagem Reagente</label>
                                        <input type="file">
                                    </div>
                                    <button type="limpar" class="btn btn-outline btn-warning">Limpar</button>
                                    <input type="submit" class="btn btn-outline btn-success" value="Cadastrar">
                                </div>
                                <!-- /.col-lg-6 (nested) -->

                            </div>
                            </form>
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



    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>>

    <!-- Custom Theme JavaScript -->
    <script src="assets/js/labstocker-main.js"></script>

    <script type="text/javascript">
        function limparReagente(){
            $("#nomeFabricante").val("");
            $("#nome").val(),
            $("#classificacao").val(),
            $("#formula").val(),
            $("#fabricante").val(),
            $("#quantidade").val(),
            $("#unidadeQuantidade").val(),
            $("#codigo").val(),
            $("#dadosAdicionais").val(),
            $(".alert").detach();
        }


        $(function(){
            $("#form-cadastrar-reagente").submit(function(event) {
                event.preventDefault();
                $.post(
                    'action/inserirReagente.php', 
                    {
                        nome: $("#nome").val(),
                        classificacao: $("#classificacao").val(),
                        formula: $("#formula").val(),
                        fabricante: $("#fabricante").val(),
                        quantidade: $("#quantidade").val(),
                        unidadeQuantidade: $("#unidadeQuantidade").val(),
                        codigo: $("#codigo").val(),
                        dadosAdicionais: $("#dadosAdicionais").val(),
                    }, 
                    function(data) {
                        limparReagente();
                        if(data != "OK") {
                            $('<div class="alert alert-warning">'+data+'</div>').prependTo('#form-cadastrar-reagente > div:first').hide().show('slow');
                        } 
                        else {
                            $('<div class="alert alert-success">Reagente cadastrado com sucesso.</div>').prependTo('#form-cadastrar-reagente > div:first').hide().show('slow');
                        }
                    }
                );
            });
        });
    </script>
</body>

</html>
