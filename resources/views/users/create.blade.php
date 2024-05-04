@extends("layouts.dashboard")

@section('content')

<h1>Create New User</h1>

<br/>
<br/>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('users.store') }}" method="POST" >
    @csrf 
    <div class="form-group">
        <label class="col-form-label" for="name">Name</label>
        <input name="name" class="form-control" required/>
    </div>

    <div class="form-group">
        <label class="col-form-label" for="email">Email</label>
        <input name="email" class="form-control" required/>
    </div>

    <div class="form-group">
        <label class="col-form-label" for="password">Password</label>
        <input name="password" type="password" class="form-control" required/>
    </div>

    <div class="form-group">
        <label class="col-form-label" for="password_confirmation">Password Confirmation</label>
        <input name="password_confirmation" type="password" class="form-control" required/>
    </div>

    <input type="submit" value="Create" class="btn btn-primary" /> |
    <a href="{{ route('users.index') }}" class="btn btn-light">Back To List</a>

</form>

@endsection
