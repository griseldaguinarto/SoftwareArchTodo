@extends('base')

@section('body')
<button ><a href="{{ route('TodoNewForm') }}">Add New</a></button>
<table>
    <tr>
        <th>ID</th>
        <th>Description</th>
        <th>Action</th>
    </tr>
    @foreach ($todos as $todo)
    <tr>
        <td><a href="{{ route('TodoDetail', ['id' => $todo->id]) }}">{{ $todo->id }}</a></td>
        <td><a href="">{{ $todo->description }}</a></td>
        <td><a href="{{ route('TodoDelete', ['id' => $todo->id]) }}"
            onclick="return confirm('Are you sure?')">Delete</a>
            <a href="{{ route('TodoEditForm', ['id'=> $todo->id]) }}">Edit</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection