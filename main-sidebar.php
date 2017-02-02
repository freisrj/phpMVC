<!-- Jquery para atualização de dados dinâmicos-->
<script type="text/javascript">
    function showPage(pageURL, titulo, breadcrumb) {
        $.ajax({
            type: "post",
            url: pageURL,
            data: {
                titulo: titulo,
                breadcrumb: breadcrumb
            },
        }).done(function(data) {
            console.log(data);
            //$(".content").text(data);
            document.getElementById("content-wrapper").innerHTML = data;
        });
    };

</script>

<!-- Coluna lateral esquerda. Contém a logo e a sidebar. -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <!--<img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">-->
                <img src="<?php echo MAINURL.$_SESSION ['Imagem_path']; ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>
                    <?php echo $_SESSION ['Nome']; ?>
                </p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">NAVEGAÇÃO PRINCIPAL</li>

            <!--Inicio Menus do nivel de acesso ADMINISTRATIVO-->
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-folder"></i> <span>Configurações - Adm</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="javascript:showPage('/phpMVC/pages/configuracao/access-level.php','Nível Acesso','Home,Configuração,Nível Acesso');"><i class="fa fa-circle-o"></i> Nível Acesso</a></li>
                    <li><a href="javascript:showPage('/phpMVC/pages/configuracao/menu-sidebar.php','Menus','Home,Configuração,Menus');"><i class="fa fa-circle-o"></i> Menus</a></li>
                    <li><a href="javascript:showPage('/phpMVC/pages/configuracao/users.php','Usuários','Home,Configuração,Usuários');"><i class="fa fa-circle-o"></i> Usuários</a></li>
                </ul>
            </li>

            <!--Inicio Menus do nivel de acesso ADMINISTRATIVO-->

            <!--Inicio Menus do nivel de acesso USUARIO-->
            <li>
                <a href="/phpMVC/pages/perfil-usuario/profile.php">
                    <i class="fa fa-th"></i> <span>Perfil de usuário</span>
                    <!--<small class="label pull-right bg-green">new</small>-->
                </a>
            </li>
            <!--Fim Menus do nivel de acesso USUARIO-->


            <!--
            <li>
              <a href="/phpMVC/pages/perfil-usuario/register.php">
                <i class="fa fa-th"></i> <span>Novo perfil de usuário</span> <!--<small class="label pull-right bg-green">new</small>
                </a>
                </li>

                <li class="active treeview">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                        <li class="active"><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>Opções de Layout</span>
                        <span class="label label-primary pull-right">4</span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Topo de Navegação</a></li>
                        <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
                        <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
                        <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Barra Lateral</a></li>
                    </ul>
                </li>

                <li>
                    <a href="pages/widgets.html">
                        <i class="fa fa-th"></i> <span>Widgets</span> <small class="label pull-right bg-green">new</small>
                    </a>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-pie-chart"></i>
                        <span>Gráficos</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
                        <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
                        <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
                        <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-laptop"></i>
                        <span>Elementos de IU</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> Gerais</a></li>
                        <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icones</a></li>
                        <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Botões</a></li>
                        <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
                        <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Linha do Tempo</a></li>
                        <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modelos</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-edit"></i> <span>Formulários</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> Elementos Gerais</a></li>
                        <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Elementos Avançados</a></li>
                        <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editores</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-table"></i> <span>Tabelas</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Tabelas Simples</a></li>
                        <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Tabelas de Dados</a></li>
                    </ul>
                </li>

                <li>
                    <a href="pages/calendar.html">
                        <i class="fa fa-calendar"></i> <span>Calendário</span>
                        <small class="label pull-right bg-red">3</small>
                    </a>
                </li>

                <li>
                    <a href="pages/mailbox/mailbox.html">
                        <i class="fa fa-envelope"></i> <span>Mensagens</span>
                        <small class="label pull-right bg-yellow">12</small>
                    </a>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-folder"></i> <span>Exemplos</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
                        <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
                        <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
                        <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
                        <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
                        <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
                        <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
                        <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-share"></i> <span>Multilevel</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                        <li>
                            <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                                <li>
                                    <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                                    <ul class="treeview-menu">
                                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                    </ul>
                </li>

                <li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>

                <li class="header">LABELS</li>
                <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
                <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
                <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
                -->
            </li>
        </ul>

    </section>
    <!-- /.sidebar -->
</aside>
