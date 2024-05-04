<!-- edit.blade.php -->

@extends("layouts.dashboard")


@section('content')
    <h1>Edit User</h1>
    <br>
    <br>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label class="col-form-label" for="name">Name</label>
            <input name="name" class="form-control" value="{{ $user->name }}" required/>
        </div>

        <div class="form-group">
            <label class="col-form-label" for="email">Email</label>
            <input name="email" class="form-control" value="{{ $user->email }}" required/>
        </div>

        <input type="submit" value="Update" class="btn btn-primary" /> |
        <a href="{{ route('users.index') }}" class="btn btn-light">Back To List</a>
    </form>
@endsection
