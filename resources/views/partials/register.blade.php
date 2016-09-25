@extends('layouts.app')

{{-- Web site Title --}}
@section('title') {!! trans('site/user.register') !!} :: @parent @endsection

{{-- Content --}}
@section('content')
    <div class="row">
        <div class="page-header">
            <h2>{!! trans('site/user.register') !!}</h2>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            {!! Form::open(array('url' => url('auth/register'), 'method' => 'post', 'files'=> true)) !!}
            <div class="form-group  {{ $errors->has('name') ? 'has-error' : '' }}">
                {!! Form::label('name', trans('site/user.name'), array('class' => 'control-label')) !!}
                <div class="controls">
                    {!! Form::text('name', null, array('class' => 'form-control')) !!}
                    <span class="help-block">{{ $errors->first('name', ':message') }}</span>
                </div>
            </div>
            <div class="form-group  {{ $errors->has('mobile') ? 'has-error' : '' }}">
                {!! Form::label('mobile', trans('site/user.mobile'), array('class' => 'control-label')) !!}
                <div class="controls">
                    {!! Form::text('mobile', null, array('class' => 'form-control')) !!}
                    <span class="help-block">{{ $errors->first('mobile', ':message') }}</span>
                </div>
            </div>
            <div class="form-group  {{ $errors->has('email') ? 'has-error' : '' }}">
                {!! Form::label('email', trans('site/user.e_mail'), array('class' => 'control-label')) !!}
                <div class="controls">
                    {!! Form::text('email', null, array('class' => 'form-control')) !!}
                    <span class="help-block">{{ $errors->first('email', ':message') }}</span>
                </div>
            </div>
            <div class="form-group  {{ $errors->has('password') ? 'has-error' : '' }}">
                {!! Form::label('password', trans('site/user.password'), array('class' => 'control-label')) !!}
                <div class="controls">
                    {!! Form::password('password', array('class' => 'form-control')) !!}
                    <span class="help-block">{{ $errors->first('password', ':message') }}</span>
                </div>
            </div>
            <div class="form-group  {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                {!! Form::label('password_confirmation', trans('site/user.password_confirmation'), array('class' => 'control-label')) !!}
                <div class="controls">
                    {!! Form::password('password_confirmation', array('class' => 'form-control')) !!}
                    <span class="help-block">{{ $errors->first('password_confirmation', ':message') }}</span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        	注册
                    </button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
