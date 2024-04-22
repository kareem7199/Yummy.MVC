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
                    <th>Details</th>
                    <th>Update</th>
                    <th>Delete</th>
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
                    <td class="align-middle">
                        <a href="{{route('meals.show', $meal->id)}}" class="btn btn-warning"> <i class="fas fa-eye"></i> Details</a>
                    </td>
                    <td class="align-middle">
                        <a href="{{route('meals.edit' , $meal->id)}}" class="btn btn-success"> <i class="fas fa-edit"></i> Update</a>
                    </td>
                    <td class="align-middle">
                        <!-- Button to trigger the modal -->
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteConfirmationModal-{{$meal->id}}">
                            <i class="fas fa-trash"></i> Delete
                        </button>
                        <!-- Modal for delete confirmation -->
                        <div class="modal fade" id="deleteConfirmationModal-{{$meal->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmationModalLabel-{{$meal->id}}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteConfirmationModalLabel-{{$meal->id}}">Delete Confirmation</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete this meal?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <form method="post" action="{{route('meals.destroy' , $meal -> id)}}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
            
        </table>
    @else
    <p class="alert alert-danger mt-4">No meals available</p>
    @endif
    <br />
@endsection
    
    