@extends("layouts.dashboard")

@section('content')

<h1>Create New Category</h1>

<br/>
<br/>

<form action="{{ route('categories.store') }}" method="POST" >
    @csrf 
    <div class="form-group">
        <label class="col-form-label" for="name">Name</label>
        <input name="name" class="form-control" required/>
    </div>

    <input type="submit" value="Create" class="btn btn-primary" /> |
    <a href="{{ route('categories.index') }}" class="btn btn-light">Back To List</a>

</form>

@endsection
