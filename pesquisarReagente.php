<?php include("testLogin.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LabStocker - Pesquisar Reagente</title>


    <link href="http://fontsgoogleapis.com/css?family=Open+Sans:300italic,400italic,400,700,300" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="assets/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/labstocker-main.css" rel="stylesheet">

     <!-- DataTables CSS -->
    <link href="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

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
                    <h1 class="page-header">Pesquisar Reagente</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                   <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Nome</th>
                                                <th>Classificação</th>
                                                <th>Fórmula</th>
                                                <th>Fabricante</th>
                                                <th>Quantidade</th>
                                                <th>Código</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $query = "SELECT * FROM Reagentes";
                                            $result = mysqli_query($dbc, $query);
                                            while($row = mysqli_fetch_array($result)):
                                                $queryFabricante = "SELECT * FROM Reagentes_Fabricante WHERE idFabricante = ".$row["fabricante"]." LIMIT 1";
                                                $resultFabricante = mysqli_query($dbc, $queryFabricante);
                                                $rowFabricante = mysqli_fetch_assoc($resultFabricante);

                                                $queryClassificacao = "SELECT * FROM Reagentes_Classificacao WHERE idClassificacao = ".$row["classificacao"]." LIMIT 1";
                                                $resultClassificacao = mysqli_query($dbc, $queryClassificacao);
                                                $rowClassificacao = mysqli_fetch_assoc($resultClassificacao);
                                            ?>
                                            <tr class="odd gradeX">
                                                <td><?php echo utf8_encode($row['nome']); ?></td>
                                                <td><?php echo utf8_encode($rowClassificacao['nome']); ?></td>
                                                <td><?php echo utf8_encode($row['formula']); ?></td>
                                                <td><?php echo utf8_encode($rowFabricante['nome']); ?></td>
                                                <td class="center"><?php echo $row['quantidade']." ".$row['unidadeQuantidade']; ?></td>
                                                <td class="center"><?php echo utf8_encode($row['codigo']); ?></td>
                                            </tr>
                                            <?php endwhile; ?>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
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

     <!-- DataTables JavaScript -->
    <script src="bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="assets/js/labstocker-main.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true,
                language: {
                    url: "bower_components/datatables/dataTables.ptbr.lang"
                }
        });
    });
    </script>

</body>

</html>
