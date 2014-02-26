@extends('photogallery::layouts.scaffold')

@section('main')

<h1>Create Photo</h1>
{{ Form::open(array('action' => 'Ffy\Photogallery\PhotosController@store', 'files'=> true)) }}
	<ul class="list-unstyled">
        <li>
            {{ Form::label('name', 'Photo name:') }}
            {{ Form::text('name', null, array('class'=> 'form-control')) }}
        </li>
        <li>
            {{ Form::label('url', 'Image:') }}
            {{ Form::file('url') }}
        </li>

        <li>
            {{ Form::label('alt', 'Alt text:') }}
            {{ Form::text('alt', null, array('class'=> 'form-control')) }}
        </li>

		<li>
            <br/>
			{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


