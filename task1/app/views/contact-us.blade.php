@extends('layout')

@section('content')
<form method="POST">
    <label>Name<br>
    <input name="name" type="text">
    </label><br>
    <label>Message<br>
    <textarea name="message"></textarea>
    </label><br>
    <button type="submit">Send</button>
</form>
@stop