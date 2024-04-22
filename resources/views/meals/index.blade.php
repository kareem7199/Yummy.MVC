@extends("layouts.dashboard")

@section('content')
    <h1>All Meals</h1>
    <br/>
    <br />
    <a class="btn btn-primary" href="{{route('meals.create')}}" >Create New Meal</a>
    @if(count($meals) > 0)
        <table class="table table-striped table-hover mt-4">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Price</th>  
                    <th>Category</th>
                    <th>Img</th>
                </tr>
            </thead>
            <tbody>
                @foreach($meals as $meal)
                <tr>
                    <td class="align-middle">{{$meal->id}}</td>
                    <td class="align-middle">{{$meal->name}}</td>
                    <td class="align-middle">{{$meal->price}}</td>
                    <td class="align-middle">{{$meal->category->name}}</td>
                    <td class="align-middle"><img class="rounded-3" style="width: 150px;" src="{{ asset('storage/meals/'.$meal->img) }}" alt="meal image" /></td>
                </tr>
                @endforeach
            </tbody>
            
        </table>
    @else
    <p class="alert alert-danger mt-4">No meals available</p>
    @endif
    <br />
@endsection
    
    