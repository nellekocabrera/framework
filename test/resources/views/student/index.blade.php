@extends('master')

@section('content')

<ul>
@foreach($students as $row)
<li>
{{$row['first_name']}}
</li>
@endforeach
</ul>

@endsection