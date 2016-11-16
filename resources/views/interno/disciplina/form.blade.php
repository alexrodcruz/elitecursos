<!-- Inicio Dados Cadastrais -->

<div class="box box-primary" xmlns="http://www.w3.org/1999/html">
    <!-- form start -->
    <div class="box-body">
        <div class="row">
            <div class="form-group col-md-8">
                {!! Form::label('nome', 'Nome:') !!}
                {!! Form::text('nome', isset($disciplina->nome) ? $disciplina->nome : NULL, ['class' => 'form-control', 'onChange' => 'this.value = this.value.toUpperCase()']) !!}
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label>Turma</label>
                <select id="idTurma" name="idTurma" class="form-control select2">
                    <option value="">SELECIONE</option>
                    @if(isset($idTurma))
                        <option value="{{$idTurma[0]['id']}}" selected>{{$idTurma[0]['nome']}}</option>
                        @foreach($turma as $turmas)
                            <option value="{{$turmas['id']}}">{{$turmas['nome']}}</option>
                        @endforeach
                    @else
                        @foreach($turma as $turmas)
                            <option value="{{$turmas['id']}}">{{$turmas['nome']}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div class="form-group col-md-4">
                <label>Professor</label>
                <select id="idProfessor" name="idProfessor" class="form-control select2">
                    <option value="">SELECIONE</option>
                    @if($idProfessor)
                        <option value="{{$idProfessor[0]['id']}}" selected>{{$idProfessor[0]['nome']}}</option>
                        @foreach($professor as $professores)
                            <option value="{{$professores['id']}}">{{$professores['nome']}}</option>
                        @endforeach
                    @else
                        @foreach($professor as $professores)
                            <option value="{{$professores['id']}}">{{$professores['nome']}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-2">
                {!! Form::label('cargaHoraria', 'Carga Horária:') !!}
                {!! Form::text('cargaHoraria', isset($disciplina->cargaHoraria) ? $disciplina->cargaHoraria : NULL, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="row">
            <div class="box-body pad" style="width: 1000px">
                {!! Form::label('sumario', 'Sumário:') !!}
                <textarea id="conteudo" name="sumario" rows="10" cols="80">
                    {{isset($disciplina->sumario) ? $disciplina->sumario : NULL}}
                </textarea>
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </div>
</div><!-- /.box-body -->
<!--/#associados_create-->