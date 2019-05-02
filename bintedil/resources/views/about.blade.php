@extends('navbar')
@section('content')

<h1>This is ABOUT Page</h1>
@foreach($ad as $a)
<ul><li><h1>{{$a}}</h1></li></ul>
@endforeach
@foreach($co as $c)

<ul><li><h1>{{$c}}</h1></li></ul>
@endforeach



@endsection('content')