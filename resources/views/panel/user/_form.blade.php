<div class="card-body">
    <div class="form-group row">

        {!! Form::label('email', 'E-mail', ['class' => 'col-sm-1 control-label']) !!}
        <div class="col-sm-3 ">
            {!! Form::text('email',null,['class' => 'form-control input-jqv', 'id' => 'email', 'autocomplete' =>
            'username' ]) !!}
        </div>
        @error('name')
        <span class="invalid-feedback d-block"> {{ $message }} </span>
        @enderror
        {!! Form::label('password', 'Senha', ['class' => 'col-sm-1 control-label']) !!}
        <div class=" col-sm-3">
            {!! Form::password('password',['class' => 'form-control input-jqv', 'id' => 'password', 'autocomplete' =>
            'new-password', 'data-toggle' => 'password']) !!}
            <div class="input-group-append">
                <span class="input-group-text input-password-hide" style="cursor: pointer;"><i
                        class="fa fa-eye"></i></span>
            </div>
            @error('password')
            <span class="invalid-feedback d-block"> {{ $message }} </span>
            @enderror
        </div>

        {!! Form::label('name', 'Nome Completo', ['class' => 'col-sm-1 control-label']) !!}
        <div class="col-sm-3">
            {!! Form::text('name',null,['class' => 'form-control input-jqv', 'id' => 'name']) !!}
        </div>
        @error('name')
        <span class="invalid-feedback d-block"> {{ $message }} </span>
        @enderror
        
    </div>

</div>

<div class="card-footer">
    <div class="box-footer">
        <a class="btn btn-danger float-right"
            href="{{ (auth()->user()->can('index', [App\User::class, auth()->user()])) ? route('panel.user.index') : route('panel.index') }}">Voltar</a> {!!
        Form::submit('Salvar',['class'
        => 'btn btn-primary pull-left']) !!}
    </div>
</div>
@section('css')
<link rel="stylesheet" href="/panel/js/plugins/jquery-ui/jquery-ui.min.css">
@endsection
@section('js_form')
<script type="text/javascript" src="/panel/js/via-cep.js"></script>
<script type="text/javascript" src="/panel/js/plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
    $(document).ready(function() {
            // $("#form_id").validate();
            $('.datepicker').datepicker({
                dateFormat: 'dd/mm/yy',
                dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
                dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
                dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
                monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
                monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
                nextText: 'Próximo',
                prevText: 'Anterior'
            });
        });
</script>
@stop