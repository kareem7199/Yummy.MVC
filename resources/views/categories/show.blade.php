@extends("layouts.dashboard")

@section('content')

<h1>Category Details</h1>
<br />
<br />

<div class="form-group">
    <label class="col-form-label" for="id">Id</label>
    <input name="id" class="form-control" value="{{$category -> id}}" disabled />
</div>

<div class="form-group">
    <label class="col-form-label" for="name">Name</label>
    <input name="name" class="form-control" value="{{$category -> name}}" disabled />
</div>

<div class="form-group">
    <label class="col-form-label" for="name">Created At</label>
    <input name="name" class="form-control" value="{{$category -> created_at}}" type="datetime" disabled />
</div>

<a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary">Edit</a> |
<a href="{{ route('categories.index') }}" class="btn btn-light">Cancel</a>

@endsection