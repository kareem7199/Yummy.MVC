<!-- edit.blade.php -->

@extends("layouts.dashboard")

@section('content')
    <h1>Edit Meal</h1>
    <br>
    <br>

    <form action="{{ route('meals.update', $meal->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label class="col-form-label" for="name">Name</label>
            <input name="name" class="form-control" value="{{ $meal->name }}" />
        </div>

        <div class="form-group">
            <label class="col-form-label" for="ingredients">Ingredients</label>
            <input name="ingredients" class="form-control" value="{{ $meal->ingredients }}" />
        </div>

        <div class="form-group">
            <label class="col-form-label" for="price">Price</label>
            <input name="price" class="form-control" value="{{ $meal->price }}" />
        </div>

        <div class="form-group">
            <label class="col-form-label" for="category_id">Category</label>
            <select name="category_id" class="form-control">
                <option value="">-- Select Category --</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $meal->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <input type="submit" value="Update" class="btn btn-primary" /> |
        <a href="{{ route('meals.index') }}" class="btn btn-light">Back To List</a>
    </form>
@endsection
