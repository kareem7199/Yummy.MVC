@extends("layouts.dashboard")

@section('content')
    <h1>All Categories</h1>
    <br/>
    <br />
    <a class="btn btn-primary" href="{{route('categories.create')}}" >Create New Category</a>
    @if(count($categories) > 0)
        <table class="table table-striped table-hover mt-4">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Details</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td class="align-middle">{{$category->id}}</td>
                    <td class="align-middle">{{$category->name}}</td>
                    <td class="align-middle">
                        <a href="{{route('categories.show', $category->id)}}" class="btn btn-warning"> <i class="fas fa-eye"></i> Details</a>
                    </td>
                    <td class="align-middle">
                        <a href="{{route('categories.edit' , $category->id)}}" class="btn btn-success"> <i class="fas fa-edit"></i> Update</a>
                    </td>
                    <td class="align-middle">
                        <!-- Button to trigger the modal -->
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteConfirmationModal-{{$category->id}}">
                            <i class="fas fa-trash"></i> Delete
                        </button>
                        <!-- Modal for delete confirmation -->
                        <div class="modal fade" id="deleteConfirmationModal-{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmationModalLabel-{{$category->id}}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteConfirmationModalLabel-{{$category->id}}">Delete Confirmation</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete this category?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <form method="post" action="{{route('categories.destroy' , $category -> id)}}">
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
    <p class="alert alert-danger mt-4">No Categories available</p>
    @endif
    <br />
@endsection
    
    