@extends('layouts.default')
@section('content')
	@include('layouts.default.title')
	@include('layouts.default.alerts')
	{{ Form::model($signup, array('route' => 'signups.store', 'signup' => $signup->id)) }}
		@include('signups.partials.form')
	{{ Form::close() }}
@endsection
