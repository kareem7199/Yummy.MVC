@extends("layouts.dashboard")

@section('content')

<h1>Meal Details</h1>
<br />
<br />

<div class="text-center">
    <img class="rounded-3" style="width: 150px;" src="{{ asset('storage/meals/'.$meal->img) }}" alt="meal image" />
</div>


<br/>
<br/>

<div class="form-group">
    <label class="col-form-label" for="id">Id</label>
    <input name="id" class="form-control" value="{{$meal -> id}}" disabled />
</div>

<div class="form-group">
    <label class="col-form-label" for="name">Name</label>
    <input name="name" class="form-control" value="{{$meal -> name}}" disabled />
</div>

<div class="form-group">
    <label class="col-form-label" for="ingredients">Ingredients</label>
    <input name="ingredients" class="form-control" value="{{$meal -> ingredients}}" disabled />
</div>

<div class="form-group">
    <label class="col-form-label" for="price">Price</label>
    <input name="price" class="form-control" value="{{$meal -> price}}" disabled />
</div>

<div class="form-group">
    <label class="col-form-label" for="category">Category</label>
    <input name="category" class="form-control" value="{{$meal -> category -> name}}" disabled />
</div>

<div class="form-group">
    <label class="col-form-label">Created At</label>
    <input type="datetime"  class="form-control" value="{{$meal -> created_at}}" disabled />
</div>

<a href="{{ route('meals.edit', $meal->id) }}" class="btn btn-primary">Edit</a> |
<a href="{{ route('meals.index') }}" class="btn btn-light">Cancel</a>

@endsection