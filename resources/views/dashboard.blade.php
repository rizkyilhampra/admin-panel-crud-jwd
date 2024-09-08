@extends('layouts.app')
@section('content')

<form action="{{route('logout')}}" method="POST">
    @method('DELETE')
    @csrf
    <button type="submit" class="btn btn-warning">Logout</button>
</form>

@endsection
