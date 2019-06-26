@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>@lang('welcome.msg')</h1>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">@lang('welcome.login')</a> <a class="btn btn-success btn-lg" href="/register" role="button">@lang('welcome.register')</a></p>
    </div>
@endsection
