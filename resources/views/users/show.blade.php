@extends("layouts.dashboard")

@section('content')

<h1>User Details</h1>
<br />
<br />

<div class="form-group">
    <label class="col-form-label" for="id">Id</label>
    <input name="id" class="form-control" value="{{$user -> id}}" disabled />
</div>

<div class="form-group">
    <label class="col-form-label" for="name">Name</label>
    <input name="name" class="form-control" value="{{$user -> name}}" disabled />
</div>

<div class="form-group">
    <label class="col-form-label" for="name">Email</label>
    <input name="email" class="form-control" value="{{$user -> email}}" type="email" disabled />
</div>

<a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Edit</a> |
<a href="{{ route('users.index') }}" class="btn btn-light">Cancel</a>

@endsection