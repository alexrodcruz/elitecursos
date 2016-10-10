<!-- Inicio Dados Cadastrais -->

<div class="box box-primary" xmlns="http://www.w3.org/1999/html">
    <!-- form start -->
    <div class="box-body">
        <div class="row">
            <div class="form-group col-md-4">
                {!! Form::label('nome', 'Nome:') !!}
                {!! Form::text('nome', isset($pessoa->nome) ? $pessoa->nome : NULL, ['class' => 'form-control', 'onChange' => 'this.value = this.value.toUpperCase()']) !!}
            </div>
            <div class="form-group col-md-2">
                {!! Form::label('dataNascimento', 'Data Nascimento:') !!}
                {!! Form::date('dataNascimento', isset($pessoa->dataNascimento) ? $pessoa->dataNascimento : NULL, ['class' => 'form-control']) !!}
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
            <div class="form-group col-md-4">
                {!! Form::label('cpf', 'CPF:') !!}
                {!! Form::text('cpf', isset($pessoa->cpf) ? $pessoa->cpf : NULL, ['class' => 'form-control'    ]) !!}
            </div>
            <div class="form-group col-md-4">
                {!! Form::label('rg', 'RG:') !!}
                {!! Form::text('rg', isset($pessoa->rg) ? $pessoa->rg : NULL, ['class' => 'form-control', 'onChange' => 'this.value = this.value.toUpperCase()']) !!}
            </div>
            <div class="form-group col-md-2">
                {!! Form::label('orgaoEmissor', 'Orgão Emissor:') !!}
                {!! Form::text('orgaoEmissor', isset($pessoa->orgaoEmissor) ? $pessoa->orgaoEmissor : NULL, ['class' => 'form-control'    ]) !!}
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                {!! Form::label('enderecoRua', 'Endereço:') !!}
                {!! Form::text('enderecoRua', isset($pessoa->enderecoRua) ? $pessoa->enderecoRua : NULL, ['class' => 'form-control', 'onChange' => 'this.value = this.value.toUpperCase()']) !!}
            </div>
            <div class="form-group col-md-2">
                {!! Form::label('enderecoNumero', 'Número:') !!}
                {!! Form::text('enderecoNumero', isset($pessoa->enderecoNumero) ? $pessoa->enderecoNumero : NULL, ['class' => 'form-control', 'onChange' => 'this.value = this.value.toUpperCase()']) !!}
            </div>
            <div class="form-group col-md-2">
                {!! Form::label('enderecoBairro', 'Bairro:') !!}
                {!! Form::text('enderecoBairro', isset($pessoa->enderecoBairro) ? $pessoa->enderecoBairro : NULL, ['class' => 'form-control', 'onChange' => 'this.value = this.value.toUpperCase()']) !!}
            </div>
            <div class="form-group col-md-2">
                {!! Form::label('enderecoCep', 'CEP:') !!}
                {!! Form::text('enderecoCep', isset($pessoa->enderecoCep) ? $pessoa->enderecoCep : NULL, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                {!! Form::label('enderecoCidade', 'Cidade:') !!}
                {!! Form::text('enderecoCidade', isset($pessoa->enderecoCidade) ? $pessoa->enderecoCidade : NULL, ['class' => 'form-control', 'onChange' => 'this.value = this.value.toUpperCase()']) !!}
            </div>
            <div class="form-group col-md-2">
                {!! Form::label('enderecoEstado', 'Estado:') !!}
                {!! Form::text('enderecoEstado', isset($pessoa->enderecoEstado) ? $pessoa->enderecoEstado : NULL, ['class' => 'form-control', 'onChange' => 'this.value = this.value.toUpperCase()']) !!}
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-2">
                {!! Form::label('fone1', 'Fone 1:') !!}
                {!! Form::text('fone1', isset($pessoa->fone1) ? $pessoa->fone1 : NULL, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-2">
                {!! Form::label('fone2', 'Fone 2:') !!}
                {!! Form::text('fone2', isset($pessoa->fone2) ? $pessoa->fone2 : NULL, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-6">
                {!! Form::label('email', 'Email:') !!}
                {!! Form::email('email', isset($pessoa->email) ? $pessoa->email : NULL, ['class' => 'form-control']) !!}
            </div>
        </div>
        </br>
        <legend class="form-group text-info">Dados de Usuário</legend>
        </br>
        <div class="row">
            <div class="form-group col-md-4">
                {!! Form::label('senha', 'Senha:') !!}
                {!! Form::password('senha', ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-4">
                {!! Form::label('senha2', 'Confirma Senha:') !!}
                {!! Form::password('senha2', ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-2">
                <label>
                    <input id="isadm" name="isadm" type="checkbox">
                    Administrador
                </label>
            </div>
            <div class="form-group col-md-2">
                <label>
                    <input id="isprofessor" name="isprofessor" type="checkbox">
                    Professor
                </label>
            </div>
            <div class="form-group col-md-2">
                <label>
                    <input id="isaluno" name="isaluno" type="checkbox">
                    Aluno
                </label>
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </div>
</div><!-- /.box-body -->
<!--/#associados_create-->