@extends('base')

@section('body')
<form method="post" action="{{ route('TodoCreate') }}">
    @csrf
    <div>
        <label>Description:</label>
        <input type="text" name="description">
    </div>
    <div>
        <input type="submit">
    </div>
</form>
@endsection