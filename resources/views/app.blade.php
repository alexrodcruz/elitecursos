
<!DOCTYPE html>
<html>
<head>
<title>Elite Cursos</title>
<link href="{{asset('site/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('site/js/jquery.min.js')}}"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="{{asset('site/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />  
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!---->
<script src="{{asset('site/js/bootstrap.min.js')}}"></script>
<link href='//fonts.googleapis.com/css?family=Catamaran:400,100,300,500,700,600,800,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
 <div class="header">
    <div class="container">
        <div class="head-top">
            <div class="logo">
                <a href="index.html"><img src="{{asset('site/images/bo.png')}}" alt=""></a>
                <!-- <a href="index.html"><img src="images/bo.png" alt="" title="Academic"></a> -->
            </div>
            <div class="login">
                <ul class="nav-login">
                    <li><a href="/login" data-toggle="modal" >Área Restrita</a></li>
                    <li><a href="/inscricao" data-toggle="modal" >Pré-Inscrição</a></li>
                    <!-- <li><a href="#" data-toggle="modal" data-target="#myModal2">Signup</a></li> -->
                </ul>

            </div>
            <div class="clearfix"></div>
        </div>
    </div>
        <!-- login -->

            <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-info">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                        </div>
                        <div class="modal-body modal-spa">
                            <div class="login-grids">
                            
                                    <div class="login-right">
                                        <h3>Área Restrita </h3> 

                                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                                            {{ csrf_field() }}

                                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                <label for="email" class="col-md-4 control-label">E-Mail</label>

                                                <div class="col-md-6">
                                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                                    @if ($errors->has('email'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                <label for="password" class="col-md-4 control-label">Senha</label>

                                                <div class="col-md-6">
                                                    <input id="password" type="password" class="form-control" name="password" required>

                                                    @if ($errors->has('password'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-md-6 col-md-offset-4">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="remember"> Lembrar
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-md-8 col-md-offset-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        Entrar
                                                    </button>

                                                    <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                                        Recuperar Senha?
                                                    </a>
                                                </div>
                                            </div>
                                        </form>


<!--
                                        
                                            
<input type="text" value="Usuário" id="email" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your mobile number or Email';}" required=""> 
<input type="password" value="Senha" id="password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">  
<h4><a href="#">Recuperar Senha</a> / <a href="#">Criar Usuário</a></h4>
<div class="single-bottom">
<input type="checkbox"  id="brand" value="">

                                            </div>
                                            <input type="submit" value="Entrar" >
                                        </form>
                                    -->












                                    </div>
                                    
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //login -->
            <!-- signup -->
            <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-info">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                        </div>
                        <div class="modal-body modal-spa">
                            <div class="login-grids">
                            
                                    <div class="login-right">
                                        <form action="#" method="post">
                                            <h3>Create your account </h3>
                                            <input type="text" value="Name" name="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
                                            <input type="text" value="Mobile number" name="Mobile number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile number';}" required="">
                                            <input type="text" value="Email id" name="Email id" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email id';}" required="">   
                                            <input type="password" value="Password" name="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">   
                                            
                                            <input type="submit" value="CREATE ACCOUNT" >
                                        </form>
                                    </div>
                                
                                <p>By logging in you agree to our <span>Terms and Conditions</span> and <span>Privacy Policy</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //signup -->
        <div class="banner">
            <div class="container">
                
                
            </div>
        
        </div>
        <div class="nav-top">
            <div class="container">
                <div class="nav1">
                    <div class="navbar1">
                    <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" >
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
         
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav cl-effect-8">
                                <li ><a class="active" href="index.php">Home </a></li>
                                <li><a href="institucional">Institucional</a></li>
                                <li><a href="professores">Professores</a></li>
                                <li><a href="#">Turmas</a></li>
                                <li><a href="#">Aprovados!</a></li>
                                <li><a href="depoimentos">Depoimentos</a></li>
                                <li><a href="contato">Contato</a></li> 
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div>
                    <!-- start search-->
                    <ul class="social-ic">
                        <li><a href="#"><i></i></a></li>
                        <li><a href="#"><i class="ic"></i></a></li>
                        <li><a href="#"><i class="ic1"></i></a></li>
                        <li><a href="#"><i class="ic2"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div> 
            </div> 
        </div> 
</div> 
<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
  <!-- Overlay -->
  <div class="overlay"></div>

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
    <li data-target="#bs-carousel" data-slide-to="2"></li>
  </ol>
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item slides active">
      <div class="slide-1"></div>
      <div class="hero">
        <hgroup>
            <h1>We are creative</h1>        
            <h3>Get start your next awesome project</h3>
        </hgroup>
        <button class="btn btn-hero btn-lg" role="button">See all features</button>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-2"></div>
      <div class="hero">        
        <hgroup>
            <h1>We are smart</h1>        
            <h3>Get start your next awesome project</h3>
        </hgroup>       
        <button class="btn btn-hero btn-lg" role="button">See all features</button>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-3"></div>
      <div class="hero">        
        <hgroup>
            <h1>We are amazing</h1>        
            <h3>Get start your next awesome project</h3>
        </hgroup>
        <button class="btn btn-hero btn-lg" role="button">See all features</button>
      </div>
    </div>
  </div> 
</div>
    

    <section class="content">

        @yield('conteudo')

    </section>    
    
</body>
</html>