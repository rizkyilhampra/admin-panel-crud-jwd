@extends('layouts.app')
@section('content')
<div class="row match-height">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Form Edit Book</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form" action="{{ route('books.update', $book->id) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        value="{{old('name', $book->name)}}">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="author">Author</label>
                                    <input type="text" id="author" class="form-control" name="author"
                                        value="{{old('author', $book->author)}}">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="publisher">Publisher</label>
                                    <input type="text" id="publisher" class="form-control" name="publisher"
                                        value="{{old('publisher', $book->publisher)}}">
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
