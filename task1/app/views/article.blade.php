@extends('layout')

@section('content')
@if($titles and $texts)
<h2>{{$titles[$id]}}</h2>
<p>{{$texts[$id]}}</p>
@endif


@stop