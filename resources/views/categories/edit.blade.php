<!-- edit.blade.php -->

@extends("layouts.dashboard")

@section('content')
    <h1>Edit Category</h1>
    <br>
    <br>

    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label class="col-form-label" for="name">Name</label>
            <input name="name" class="form-control" value="{{ $category->name }}" />
        </div>

        <input type="submit" value="Update" class="btn btn-primary" /> |
        <a href="{{ route('categories.index') }}" class="btn btn-light">Back To List</a>
    </form>
@endsection
