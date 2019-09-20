@extends('layouts.panel')

@section('title', 'Edição de Usuário')

@section('content')
@include('includes.alert')

<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Edição Usuário</h3>
    </div>
    {!! Form::model($registro, [
    'route' => ['panel.user.update', $registro->id],
    'method' => 'PUT',
    'files' => true,
    'class' => 'form-horizontal',
    'id' => 'form_id'
    ]) !!}
    @include('panel.user._form')
    {!! Form::close() !!}
</div>
@stop
@section('js')
    <script type="text/javascript" src="/vendor/jsvalidation/js/jsvalidation.js"></script>
    {!! JsValidator::formRequest('App\Http\Requests\User\UpdateRequest', '#form_id'); !!}
@yield('js_form')
@endsection