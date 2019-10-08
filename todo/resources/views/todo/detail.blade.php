@extends('base')

@section('body')
<dl>
    <dt>Description</dt>
    <dd>{{ $todo->description }}</dd>
    <dt>Status</dt>
    @if ($todo->status == 0)
    <dd>Unfinished</dd>
    @elseif ($todo->status == 1)
    <dd>Finished</dd>
    @endif
</dl>
@endsection