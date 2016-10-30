<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Elite Cursos - Área Restrira</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('backend/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('backend/dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('backend/dist/css/skins/_all-skins.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('backend/plugins/iCheck/flat/blue.css')}}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{asset('backend/plugins/morris/morris.css')}}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{asset('backend/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{asset('backend/plugins/datepicker/datepicker3.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('backend/plugins/daterangepicker/daterangepicker-bs3.css')}}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{asset('backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
    <!-- SELECT 2 -->
    <link rel="stylesheet" href="{{asset('backend/plugins/select2/select2.min.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="{{asset('backend/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('backend/plugins/datatables/dataTables.bootstrap.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('backend/dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('backend/dist/css/skins/_all-skins.min.css')}}">


  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <img src="{{asset('backend/dist/img/logo.png')}}" class="user-image" alt="User Image">
          <span class="logo-mini"><b>A</b>LT</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Elite</b>LTE</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              
              <!-- Dados do Usuario -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
                  <span class="hidden-xs">{{ Auth::user()->name }}</span>
                </a>

              <li>
                <a href="{{ url('/logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  Sair
                </a>

                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form>
              </li>


                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
                    <p>
                      {{ Auth::user()->name }}
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                    
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><font size="1.8"> {{ Auth::user()->name }}</font></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>


          <!-- sidebar menu: : style can be found in sidebar.less -->
              @if( Auth::user()->isAdm == 1 )
                  <ul class="sidebar-menu">
                      <li class="header">MENU DE ACESSO - ADMINISTRADOR</li>
                      <li class="treeview">
                          <a href="#">
                              <i class="fa fa-edit"></i> <span>Cadastro</span>
                              <i class="fa fa-angle-left pull-right"></i>
                          </a>
                          <ul class="treeview-menu">
                              <li><a href="{{ route('interno.pessoas.index') }}"><i class="fa fa-circle-o"></i> Pessoa</a></li>
                              <li><a href="{{ route('interno.turma.index') }}"><i class="fa fa-circle-o"></i> Turma</a></li>
                              <li><a href="{{ route('interno.disciplina.index') }}"><i class="fa fa-circle-o"></i> Disciplina</a></li>
                          </ul>
                      </li>
                      <li>
                          <a href="{{ route('interno.matricula.pre') }}">
                              <i class="fa fa-book"></i> <span>Pré-Inscrição</span>
                          </a>
                      </li>
                      <li>
                          <a href="{{ route('interno.matricula.index') }}">
                              <i class="fa fa-book"></i> <span>Matrícula</span>
                          </a>
                      </li>
                      <li class="treeview">
                          <a href="#">
                              <i class="fa fa-folder"></i> <span>Material Didático</span>
                              <i class="fa fa-angle-left pull-right"></i>
                          </a>
                          <ul class="treeview-menu">
                              <li><a href="{{ route('interno.material.index') }}"><i class="fa fa-circle-o"></i> Consultar</a></li>
                              <li>
                                  <a href="#"><i class="fa fa-circle-o"></i> Enviar <i class="fa fa-angle-left pull-right"></i></a>
                                  <ul class="treeview-menu">
                                      <li><a href="{{ route('interno.material.createPdf')}}"><i class="fa fa-circle-o"></i> PDF</a></li>
                                      <li><a href="{{ route('interno.material.createVideo')}}"><i class="fa fa-circle-o"></i> Vídeo</a></li>
                                  </ul>
                              </li>
                          </ul>
                      </li>
                      <li class="treeview">
                          <a href="#">
                              <i class="fa fa-laptop"></i><span>Site</span>
                              <i class="fa fa-angle-left pull-right"></i>
                          </a>
                          <ul class="treeview-menu">
                              <li><a href="{{ route('interno.carousel.index') }}"><i class="fa fa-circle-o"></i> Carousel</a></li>
                          </ul>
                      </li>
                  </ul>
              @endif


              @if( Auth::user()->isProfessor == 1 )
                  <ul class="sidebar-menu">
                      <li class="header">MENU DE ACESSO - PROFESSOR</li>
                      <li class="treeview">
                          <a href="#">
                              <i class="fa fa-folder"></i> <span>Material Didático</span>
                              <i class="fa fa-angle-left pull-right"></i>
                          </a>
                          <ul class="treeview-menu">
                              <li><a href="{{ route('interno.material.indexProfessor') }}"><i class="fa fa-circle-o"></i> Consultar</a></li>
                              <li>
                                  <a href="#"><i class="fa fa-circle-o"></i> Enviar <i class="fa fa-angle-left pull-right"></i></a>
                                  <ul class="treeview-menu">
                                      <li><a href="{{ route('interno.material.createPdfProfessor')}}"><i class="fa fa-circle-o"></i> PDF</a></li>
                                      <li><a href="{{ route('interno.material.createVideoProfessor')}}"><i class="fa fa-circle-o"></i> Vídeo</a></li>
                                  </ul>
                              </li>
                          </ul>
                      </li>
                  </ul>
              @endif
              @if( Auth::user()->isAluno == 1 )
                  <ul class="sidebar-menu">
                      <li class="header">MENU DE ACESSO - ALUNO</li>
                      <li>
                          <a href="{{ route('interno.aluno.index') }}">
                              <i class="fa fa-folder"></i> <span>Material Didático</span>
                          </a>
                      </li>
                  </ul>
              @endif
        </section>
        <!-- /.sidebar -->
      </aside>


     
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            @yield('conteudo')
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Versão</b> 1.0
        </div>
        <strong>Copyright &copy; 2016-2016 <a href="#">SHIFT - Consultoria em Tecnologia</a>.</strong>
      </footer>
    </div>

    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('backend/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="{{asset('backend/plugins/morris/morris.min.js')}}"></script>
    <!-- Sparkline -->
    <script src="{{asset('backend/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <!-- jvectormap -->
    <script src="{{asset('backend/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{asset('backend/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{asset('backend/plugins/knob/jquery.knob.js')}}"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="{{asset('backend/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <!-- datepicker -->
    <script src="{{asset('backend/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{asset('backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
    <!-- Slimscroll -->
    <script src="{{asset('backend/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('backend/plugins/fastclick/fastclick.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('backend/dist/js/app.min.js')}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{asset('backend/dist/js/pages/dashboard.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('backend/dist/js/demo.js')}}"></script>




    <!-- jQuery 2.1.4 -->
    <script src="{{asset('backend/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('backend/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- DataTables -->
    <script src="{{asset('backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('backend/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>

    <!-- FastClick -->
    <script src="{{asset('backend/plugins/fastclick/fastclick.min.js')}}"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('backend/plugins/select2/select2.full.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('backend/dist/js/app.min.js')}}"></script>

    <!-- InputMask -->
    <script src="{{asset('backend/plugins/input-mask/jquery.inputmask.js')}}"></script>
    <script src="{{asset('backend/plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
    <script src="{{asset('backend/plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>




    <script>
      $(".select2").select2();

      $("[data-mask]").inputmask();

      $(document).ready(function() {
        $('#example1').DataTable( {
          "language": {
            "lengthMenu": "Mostrar  _MENU_  regristro(s) por página.",
            "zeroRecords": "Nenhum Registro encontrado.",
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(filtered from _MAX_ total records)",
            "paginate": {
              "first":      "Primeira",
              "last":       "Última",
              "next":       "Próxima",
              "previous":   "Anterior"
            },
            "search":        "Pesquisar:"
          }
        } );
      } );
    </script>

    <script>
      var password = document.getElementById("password"), confirm_password = document.getElementById("password-confirm");
      function validatePassword(){
        if(password.value != confirm_password.value)
        {
          confirm_password.setCustomValidity("As Senhas devem ser Iguais!");
        }
        else
        {
          confirm_password.setCustomValidity('');
        }
      }
      password.onchange = validatePassword;
      confirm_password.onkeyup = validatePassword;
    </script>
    <script>
      $('#idTurma').on('change',function(e){

        console.log(e);

        var idTurma = e.target.value
        var idProfessor =  document.getElementById('idProfessor').value

        //ajax
        $.get('/ajax-disciplina?idTurma='+idTurma+'&idProfessor='+idProfessor, function(data){

          $('#idDisciplina').empty();

            $('#idDisciplina').append('<option></option>')
          $.each(data, function(index, disciplinaObj){


            $('#idDisciplina').append('<option value="'+disciplinaObj.id+'">'+disciplinaObj.nome+'</option>')

          });

        })

      })
    </script>
  </body>
</html>
