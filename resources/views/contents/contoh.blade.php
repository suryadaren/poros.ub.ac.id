@extends('layouts.master')
@section('content')
<h1>Yoo Whatsapp!!</h1>
@foreach($texts as $text)
	<h2>{{$text}}</h2>
@endforeach
@endsection