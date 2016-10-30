<!-- Inicio Dados Cadastrais -->

<div class="box box-primary" xmlns="http://www.w3.org/1999/html">
    <!-- form start -->
    <div class="box-body">
        <div class="row">
            <div class="form-group col-md-4">
                <?php echo Form::label('nome', 'Nome:'); ?>

                <?php echo Form::text('nome', isset($pessoa->nome) ? $pessoa->nome : NULL, ['class' => 'form-control', 'onChange' => 'this.value = this.value.toUpperCase()']); ?>

            </div>
            <div class="form-group col-md-2">
                <?php echo Form::label('dataNascimento', 'Data Nascimento:'); ?>

                <?php echo Form::date('dataNascimento', isset($pessoa->dataNascimento) ? $pessoa->dataNascimento : NULL, ['class' => 'form-control']); ?>

            </div>
            <div class="form-group col-md-2">
                <?php echo Form::label('sexo', 'Sexo:'); ?>

                <?php echo Form::select('sexo', ['M' => 'MASCULINO', 'F' => 'FEMININO'], null, ['class' => 'form-control', 'placeholder' => 'Selecione...']); ?>

            </div>
            <div class="form-group col-md-2">
                <?php echo Form::label('estadoCivil', 'Estado Civil:'); ?>

                <?php echo Form::select('estadoCivil', ['SOLTEIRO(A)' => 'SOLTEIRO(A)', 'CASADO(A)' => 'CASADO(A)', 'SEPARADO(A)' => 'SEPARADO(A)', 'DIVORCIADO(A)' => 'DIVORCIADO(A)', 'VIÚVO(A)' => 'VIÚVO(A)'], null, ['class' => 'form-control', 'placeholder' => 'Selecione...']); ?>

            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <?php echo Form::label('cpf', 'CPF:'); ?>

                <?php echo Form::text('cpf', isset($pessoa->cpf) ? $pessoa->cpf : NULL, ['class' => 'form-control', 'data-inputmask' => '"mask": "999.999.999-99"', 'data-mask']); ?>

            </div>
            <div class="form-group col-md-4">
                <?php echo Form::label('rg', 'RG:'); ?>

                <?php echo Form::text('rg', isset($pessoa->rg) ? $pessoa->rg : NULL, ['class' => 'form-control', 'onChange' => 'this.value = this.value.toUpperCase()']); ?>

            </div>
            <div class="form-group col-md-2">
                <?php echo Form::label('orgaoEmissor', 'Orgão Emissor:'); ?>

                <?php echo Form::text('orgaoEmissor', isset($pessoa->orgaoEmissor) ? $pessoa->orgaoEmissor : NULL, ['class' => 'form-control', 'onChange' => 'this.value = this.value.toUpperCase()' ]); ?>

            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <?php echo Form::label('enderecoRua', 'Endereço:'); ?>

                <?php echo Form::text('enderecoRua', isset($pessoa->enderecoRua) ? $pessoa->enderecoRua : NULL, ['class' => 'form-control', 'onChange' => 'this.value = this.value.toUpperCase()']); ?>

            </div>
            <div class="form-group col-md-2">
                <?php echo Form::label('enderecoNumero', 'Número:'); ?>

                <?php echo Form::text('enderecoNumero', isset($pessoa->enderecoNumero) ? $pessoa->enderecoNumero : NULL, ['class' => 'form-control', 'onChange' => 'this.value = this.value.toUpperCase()']); ?>

            </div>
            <div class="form-group col-md-2">
                <?php echo Form::label('enderecoBairro', 'Bairro:'); ?>

                <?php echo Form::text('enderecoBairro', isset($pessoa->enderecoBairro) ? $pessoa->enderecoBairro : NULL, ['class' => 'form-control', 'onChange' => 'this.value = this.value.toUpperCase()']); ?>

            </div>
            <div class="form-group col-md-2">
                <?php echo Form::label('enderecoCep', 'CEP:'); ?>

                <?php echo Form::text('enderecoCep', isset($pessoa->enderecoCep) ? $pessoa->enderecoCep : NULL, ['class' => 'form-control', 'data-inputmask' => '"mask": "99999-999"', 'data-mask']); ?>

            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <?php echo Form::label('enderecoCidade', 'Cidade:'); ?>

                <?php echo Form::text('enderecoCidade', isset($pessoa->enderecoCidade) ? $pessoa->enderecoCidade : NULL, ['class' => 'form-control', 'onChange' => 'this.value = this.value.toUpperCase()']); ?>

            </div>
            <div class="form-group col-md-2">
                <?php echo Form::label('enderecoEstado', 'Estado:'); ?>

                <?php echo Form::select('enderecoEstado', ['Acre' => 'Acre', 'Alagoas' => 'Alagoas', 'Amazonas' => 'Amazonas', 'Amapá' => 'Amapá', 'Bahia' => 'Bahia', 'Ceará' => 'Ceará', 'Distrito Federal' => 'Distrito Federal', 'Espírito Santo' => 'Espírito Santo', 'Goiás' => 'Goiás', 'Maranhão' => 'Maranhão', 'Mato Grosso' => 'Mato Grosso', 'Mato Grosso do Sul' => 'Mato Grosso do Sul', 'Minas Gerais' => 'Minas Gerais', 'Pará' => 'Pará', 'Paraíba' => 'Paraíba', 'Paraná' => 'Paraná', 'Pernambuco' => 'Pernambuco', 'Piauí' => 'Piauí', 'Rio de Janeiro' => 'Rio de Janeiro', 'Rio Grande do Norte' => 'Rio Grande do Norte', 'Rondônia' => 'Rondônia', 'Rio Grande do Sul' => 'Rio Grande do Sul', 'Roraima' => 'Roraima', 'Santa Catarina' => 'Santa Catarina', 'Sergipe' => 'Sergipe', 'São Paulo' => 'São Paulo', 'Tocantins' => 'Tocantins'], null, ['class' => 'form-control', 'placeholder' => 'Selecione...']); ?>

            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-2">
                <?php echo Form::label('fone1', 'Fone 1:'); ?>

                <?php echo Form::text('fone1', isset($pessoa->fone1) ? $pessoa->fone1 : NULL, ['class' => 'form-control', 'data-inputmask' => '"mask": "(99) 99999-9999"', 'data-mask']); ?>

            </div>
            <div class="form-group col-md-2">
                <?php echo Form::label('fone2', 'Fone 2:'); ?>

                <?php echo Form::text('fone2', isset($pessoa->fone2) ? $pessoa->fone2 : NULL, ['class' => 'form-control', 'data-inputmask' => '"mask": "(99) 99999-9999"', 'data-mask']); ?>

            </div>
            <div class="form-group col-md-6">
                <?php echo Form::label('email', 'Email:'); ?>

                <?php echo Form::email('email', isset($pessoa->email) ? $pessoa->email : NULL, ['class' => 'form-control']); ?>

            </div>
        </div>
        </br>
        <legend class="form-group text-info">Dados de Usuário</legend>
        </br>
        <?php if( isset($pessoas) ): ?>

        <?php else: ?>
            <div class="row">
                <div class="form-group col-md-4">
                    <?php echo Form::label('password', 'Senha:'); ?>

                    <?php echo Form::password('password', ['class' => 'form-control']); ?>

                </div>
                <div class="form-group col-md-4">
                    <?php echo Form::label('password-confirm', 'Confirma Senha:'); ?>

                    <?php echo Form::password('password-confirm', ['class' => 'form-control']); ?>

                </div>
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="form-group col-md-2">
                <?php echo Form::checkbox('isAdm', 1); ?>

                <?php echo Form::label('isAdm', 'Administrador'); ?>

            </div>
            <div class="form-group col-md-2">
                <?php echo Form::checkbox('isProfessor', 1); ?>

                <?php echo Form::label('isProfessor', 'Professor'); ?>

            </div>
            <div class="form-group col-md-2">
                <?php echo Form::checkbox('isAluno', 1); ?>

                <?php echo Form::label('isAluno', 'Aluno'); ?>

            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </div>
</div><!-- /.box-body -->
<!--/#associados_create-->