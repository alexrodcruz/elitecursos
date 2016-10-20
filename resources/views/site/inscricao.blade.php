
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



<br>
<div class="container">
    @if(count($errors)>0)
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<div class="contact-grids1">

<!-- form -->
{!! Form::open(['route' => 'inscricao.storePessoa', 'method' => 'post', 'id' => 'pessoas']) !!}
    <!-- form start -->
    <div class="box-body">
        <div class="row">
            <div class="form-group col-md-6">
                {!! Form::label('nome', 'Nome:') !!}
                {!! Form::text('nome', NULL, ['class' => 'form-control', 'onChange' => 'this.value = this.value.toUpperCase()']) !!}
            </div>
            <div class="form-group col-md-2">
                {!! Form::label('dataNascimento', 'Data Nascimento:') !!}
                {!! Form::date('dataNascimento', NULL, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-2">
                {!! Form::label('sexo', 'Sexo:') !!}
                {!! Form::select('sexo', ['M' => 'MASCULINO', 'F' => 'FEMININO'], null, ['class' => 'form-control', 'placeholder' => 'Selecione...']) !!}
            </div>
            <div class="form-group col-md-2">
                {!! Form::label('estadoCivil', 'Estado Civil:') !!}
                {!! Form::select('estadoCivil', ['SOLTEIRO(A)' => 'SOLTEIRO(A)', 'CASADO(A)' => 'CASADO(A)', 'SEPARADO(A)' => 'SEPARADO(A)', 'DIVORCIADO(A)' => 'DIVORCIADO(A)', 'VIÚVO(A)' => 'VIÚVO(A)'], null, ['class' => 'form-control', 'placeholder' => 'Selecione...']) !!}
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-2">
                {!! Form::label('cpf', 'CPF:') !!}
                {!! Form::text('cpf', NULL, ['class' => 'form-control', 'data-inputmask' => '"mask": "999.999.999-99"', 'data-mask']) !!}
            </div>
            <div class="form-group col-md-2">
                {!! Form::label('rg', 'RG:') !!}
                {!! Form::text('rg', NULL, ['class' => 'form-control', 'onChange' => 'this.value = this.value.toUpperCase()']) !!}
            </div>
            <div class="form-group col-md-4">
                {!! Form::label('orgaoEmissor', 'Orgão Emissor:') !!}
                {!! Form::text('orgaoEmissor', NULL, ['class' => 'form-control', 'onChange' => 'this.value = this.value.toUpperCase()' ]) !!}
            </div>
            <div class="form-group col-md-2">
                {!! Form::label('fone1', 'Fone 1:') !!}
                {!! Form::text('fone1', NULL, ['class' => 'form-control', 'data-inputmask' => '"mask": "(99) 99999-9999"', 'data-mask']) !!}
            </div>
            <div class="form-group col-md-2">
                {!! Form::label('fone2', 'Fone 2:') !!}
                {!! Form::text('fone2', NULL, ['class' => 'form-control', 'data-inputmask' => '"mask": "(99) 99999-9999"', 'data-mask']) !!}
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                {!! Form::label('enderecoRua', 'Endereço:') !!}
                {!! Form::text('enderecoRua', NULL, ['class' => 'form-control', 'onChange' => 'this.value = this.value.toUpperCase()']) !!}
            </div>
            <div class="form-group col-md-2">
                {!! Form::label('enderecoNumero', 'Número:') !!}
                {!! Form::text('enderecoNumero', NULL, ['class' => 'form-control', 'onChange' => 'this.value = this.value.toUpperCase()']) !!}
            </div>
            <div class="form-group col-md-2">
                {!! Form::label('enderecoBairro', 'Bairro:') !!}
                {!! Form::text('enderecoBairro', NULL, ['class' => 'form-control', 'onChange' => 'this.value = this.value.toUpperCase()']) !!}
            </div>
            <div class="form-group col-md-2">
                {!! Form::label('enderecoCep', 'CEP:') !!}
                {!! Form::text('enderecoCep', NULL, ['class' => 'form-control', 'data-inputmask' => '"mask": "99999-999"', 'data-mask']) !!}
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-2">
                {!! Form::label('enderecoCidade', 'Cidade:') !!}
                {!! Form::text('enderecoCidade', NULL, ['class' => 'form-control', 'onChange' => 'this.value = this.value.toUpperCase()']) !!}
            </div>
            <div class="form-group col-md-2">
                {!! Form::label('enderecoEstado', 'Estado:') !!}
                {!! Form::select('enderecoEstado', ['Acre' => 'Acre', 'Alagoas' => 'Alagoas', 'Amazonas' => 'Amazonas', 'Amapá' => 'Amapá', 'Bahia' => 'Bahia', 'Ceará' => 'Ceará', 'Distrito Federal' => 'Distrito Federal', 'Espírito Santo' => 'Espírito Santo', 'Goiás' => 'Goiás', 'Maranhão' => 'Maranhão', 'Mato Grosso' => 'Mato Grosso', 'Mato Grosso do Sul' => 'Mato Grosso do Sul', 'Minas Gerais' => 'Minas Gerais', 'Pará' => 'Pará', 'Paraíba' => 'Paraíba', 'Paraná' => 'Paraná', 'Pernambuco' => 'Pernambuco', 'Piauí' => 'Piauí', 'Rio de Janeiro' => 'Rio de Janeiro', 'Rio Grande do Norte' => 'Rio Grande do Norte', 'Rondônia' => 'Rondônia', 'Rio Grande do Sul' => 'Rio Grande do Sul', 'Roraima' => 'Roraima', 'Santa Catarina' => 'Santa Catarina', 'Sergipe' => 'Sergipe', 'São Paulo' => 'São Paulo', 'Tocantins' => 'Tocantins'], null, ['class' => 'form-control', 'placeholder' => 'Selecione...']) !!}
            </div>
            <div class="form-group col-md-8">
                {!! Form::label('email', 'Email:') !!}
                {!! Form::email('email', NULL, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                {!! Form::label('password', 'Senha:') !!}
                {!! Form::password('password', ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-4">
                {!! Form::label('confimaSenha', 'Confirma Senha:') !!}
                {!! Form::password('confimaSenha', ['class' => 'form-control']) !!}
            </div>
        </div>
        {!! Form::hidden('isAluno', 1, ['class' => 'form-control']) !!}
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
        <br>
    </div>
{!! Form::close() !!}
<!--/#associados_create-->

<!-- fim do form -->

</div>
</div>


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
</script>

<script>

      var password = document.getElementById("password"), confirm_password = document.getElementById("confirmaSenha");
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
</body>
</html>