<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <?php echo $_POST['titulo'] ?>
    </h1>

    <ol class="breadcrumb">
        <li><a href="/phpMVC/main2.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li> Configurações</li>
        <li class="active">
            <?php echo $pagina; ?>
        </li>
    </ol>

</section>

<!-- Main content -->
<section class="content">

    <div class="box box-pimary">
        <div class="panel-body">

            <div class="row">

                <div class="col-sm-12">

                    <form class="form-horizontal">

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-4">
                                <button type="submit" class="btn btn-primary">Confirmar</button>
                                <button type="button" class="btn btn-danger">Cancelar</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>


</section>
<!-- /.content -->
