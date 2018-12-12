@extends('master')

@section('content')

<h1>Create Student</h1>

@if(count($errors) > 0)
	<ul>
	@foreach($errors->all() as $error)
		<li>{{$error}}</li>
	@endforeach
	</ul>
@endif


@if(\Session::has('success'))
	<h1>{{ \Session::get('success') }}</h1>
@endif
<form method="post" action="{{url('student')}}">
	{{csrf_field()}}
	<input type="text" name="first_name" placeholder="firstname"/>
	<input type="text" name="last_name" placeholder="lastname"/>
	<input type="submit" class="btn btn-primary"/>
</form>

@endsection