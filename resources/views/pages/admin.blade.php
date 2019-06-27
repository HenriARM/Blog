@extends('layouts.app')

@section('content')
<div class="container">
    @if (Auth::user()->isAdmin)
    <h1>Admin Page </h1>
    @else
    <h1> Your are not admin </h1>
    @endif
</div>
@endsection