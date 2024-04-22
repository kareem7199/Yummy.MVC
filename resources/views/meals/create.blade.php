@extends("layouts.dashboard")

@section('content')

<h1>Create New Meal</h1>

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

<form action="{{ route('meals.store') }}" method="POST" enctype="multipart/form-data">
    @csrf 
    <div class="form-group">
        <label class="col-form-label" for="name">Name</label>
        <input name="name" class="form-control" required value="{{ old('name') }}"/>
    </div>

    <div class="form-group">
        <label class="col-form-label" for="ingredients">Ingredients</label>
        <input name="ingredients" class="form-control" required value="{{ old('ingredients') }}"/>
    </div>

    <div class="form-group">
        <label class="col-form-label" for="price">Price</label>
        <input name="price" class="form-control" required value="{{ old('price') }}"/>
    </div>

    <div class="form-group">
        <label class="col-form-label" for="category_id">Category</label>
        <select  name="category_id" class="form-control" required>
            <option value={{null}}>-- Select Category --</option>
            @foreach ($categories as $category)
                <option @if (old('category_id') == $category -> id) selected @endif value={{$category -> id}}>{{$category -> name}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label class="col-form-label" for="img">Image</label>
        <input type="file" name="img" class="form-control" required>
    </div>

    <input type="submit" value="Create" class="btn btn-primary" /> |
    <a href="{{ route('meals.index') }}" class="btn btn-light">Back To List</a>

</form>

@endsection
