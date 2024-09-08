@extends('layouts.app')
@section('content')
<div class="mb-3">
    <a href="{{ route('books.create') }}" class="btn btn-primary">
        Create book
    </a>
</div>
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Books Data</h4>
    </div>
    <div class="card-content">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-lg">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Author</th>
                            <th>Publisher</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($books as $book)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$book->name}}</td>
                            <td>{{$book->author}}</td>
                            <td>{{$book->publisher}}</td>
                            <td>
                                <div class="d-flex justify-content-center gap-2">
                                    <a href=" {{ route('books.edit', $book->id) }} " class="btn btn-warning">Edit</a>
                                    <form action="{{route('books.destroy', $book->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
