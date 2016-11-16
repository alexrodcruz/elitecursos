<!-- Inicio Dados Cadastrais -->

<div class="box box-primary" xmlns="http://www.w3.org/1999/html">
    <!-- form start -->
    <div class="box-body">
        <div class="row">
            <div class="form-group col-md-8">
                {!! Form::label('descricao', 'Descrição:') !!}
                {!! Form::text('descricao', isset($assunto->nome) ? $assunto->nome : NULL, ['class' => 'form-control', 'onChange' => 'this.value = this.value.toUpperCase()']) !!}
            </div>
        </div>
        <div class="row">
            {!! Form::hidden('idProfessor', 40000, ['class' => 'form-control', 'id' => 'idProfessor']) !!}
            <div class="form-group col-md-4">
                <label>Turma</label>
                <select id="idTurma" name="idTurma" class="form-control select2">
                    <option>SELECIONE A TURMA</option>
                    @foreach($turma as $turmas)
                        <option value="{{$turmas['id']}}">{{$turmas['nome']}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-4">
                <label>Disciplina</label>
                <select id="idDisciplina" name="idDisciplina" class="form-control select2"></select>
            </div>
        </div>
        <div class="row">
            <div class="box-body pad" style="width: 1000px">
                {!! Form::label('sumario', 'Sumário:') !!}
                <textarea id="conteudo" name="sumario" rows="10" cols="80">
                    {{isset($assunto->sumario) ? $assunto->sumario : NULL}}
                </textarea>
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </div>
</div><!-- /.box-body -->
<!--/#associados_create-->