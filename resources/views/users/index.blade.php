@extends("layouts.dashboard")

@section('content')
    <h1>All Users</h1>
    <br/>
    <br />
    <a class="btn btn-primary" href="{{route('users.create')}}" >Create New User</a>
    @if(count($users) > 0)
        <table class="table table-striped table-hover mt-4">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Details</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td class="align-middle">{{$user->id}}</td>
                    <td class="align-middle">{{$user->name}}</td>
                    <td class="align-middle">{{$user->email}}</td>
                    <td class="align-middle">
                        <a href="{{route('users.show', $user->id)}}" class="btn btn-warning"> <i class="fas fa-eye"></i> Details</a>
                    </td>
                    <td class="align-middle">
                        <a href="{{route('users.edit' , $user->id)}}" class="btn btn-success"> <i class="fas fa-edit"></i> Update</a>
                    </td>
                    <td class="align-middle">
                        <!-- Button to trigger the modal -->
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteConfirmationModal-{{$user->id}}">
                            <i class="fas fa-trash"></i> Delete
                        </button>
                        <!-- Modal for delete confirmation -->
                        <div class="modal fade" id="deleteConfirmationModal-{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmationModalLabel-{{$user->id}}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteConfirmationModalLabel-{{$user->id}}">Delete Confirmation</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete this user?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <form method="post" action="{{route('users.destroy' , $user -> id)}}">
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
    <p class="alert alert-danger mt-4">No Users available</p>
    @endif
    <br />
@endsection
    
    