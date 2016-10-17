<!-- Inicio Dados Cadastrais -->

<div class="box box-primary" xmlns="http://www.w3.org/1999/html">
    <!-- form start -->
    <div class="box-body">
        <div class="row">
            <div class="form-group col-md-2">
                {!! Form::label('tipoMaterial', 'Tipo Material:') !!}
                {!! Form::select('tipoMaterial', ['PDF' => 'PDF', 'Vídeo' => 'Vídeo'], null, ['class' => 'form-control', 'placeholder' => 'Selecione...']) !!}
            </div>
            <div class="form-group col-md-2">
                <label>Turma</label>
                <select id="idTurma" name="idTurma" class="form-control select2">
                    <option></option>
                    @foreach($turma as $turmas)
                        <option value="{{$turmas['id']}}">{{$turmas['nome']}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>





    <div class="box-footer">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>
