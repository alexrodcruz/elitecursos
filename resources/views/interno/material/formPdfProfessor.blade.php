<!-- Inicio Dados Cadastrais -->

<div class="box box-primary" xmlns="http://www.w3.org/1999/html">
    <!-- form start -->
    <div class="box-body">
        <div class="row">
            <div class="form-group col-md-4">
                {!! Form::label('descricao', 'Descrição:') !!}
                {!! Form::text('descricao', NULL, ['class' => 'form-control', 'onChange' => 'this.value = this.value.toUpperCase()']) !!}
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                {!! Form::label('tipoMaterial', 'Tipo Material:') !!}
                {!! Form::text('tipoMaterial', 'PDF', ['class' => 'form-control', 'readonly']) !!}
                {!! Form::hidden('idProfessor', $idProfessor, ['class' => 'form-control', 'id' => 'idProfessor']) !!}
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label>Turma</label>
                <select id="idTurma" name="idTurma" class="form-control select2">
                    <option>SELECIONE A TURMA</option>
                    @foreach($turma as $turmas)
                        <option value="{{$turmas->id}}">{{$turmas->nome}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label>Disciplina</label>
                <select id="idDisciplina" name="idDisciplina" class="form-control select2"></select>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label>Arquivo(s)</label>
                <input type="file" id="material[]" name="material[]" class="form-control" multiple/>
            </div>
        </div>
    </div>
    <div class="box-footer">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>