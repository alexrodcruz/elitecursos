<!-- Inicio Dados Cadastrais -->

<div class="box box-primary" xmlns="http://www.w3.org/1999/html">
    <!-- form start -->
    <div class="box-body">
        <div class="row">
            <div class="form-group col-md-4">
                {!! Form::label('idAluno', 'Aluno(s):') !!}
                <select id="idAluno[]" name="idAluno[]" class="form-control select2" multiple="multiple">
                    <option value="">SELECIONE</option>
                    @if($idAluno)
                        <option value="{{$idAluno[0]['id']}}" selected>{{$idAluno[0]['nome']}}</option>
                        @foreach($aluno as $alunos)
                            <option value="{{$alunos['id']}}">{{$alunos['nome']}}</option>
                        @endforeach
                    @else
                        @foreach($aluno as $alunos)
                            <option value="{{$alunos['id']}}">{{$alunos['nome']}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
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
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Matricular</button>
        </div>
    </div>
</div><!-- /.box-body -->
<!--/#associados_create-->