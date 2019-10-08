@extends('base')

@section('body')
<form method="post" action="{{ route('TodoUpdate', ['id'=>$todo->id]) }}">
    @csrf
    <div>
        <label>Description:</label>
        <input type="text" name="description" value="{{ $todo->description }}">
    </div>
    <div>
        <label>Status:</label>
        <input type="hidden" name="status" value="0">
        @if($todo->status == 1)
            <input type="checkbox" name="status" value="1" checked>
        @else 
            <input type="checkbox" name="status" value="1">
        @endif
    </div>
    <div>
        <input type="submit">
    </div>
</form>
@endsection
