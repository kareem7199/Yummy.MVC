@extends("layouts.dashboard")

@section('content')
    <h1>All Reservations</h1>
    <br/>
    <br />
    @if(count($reservations) > 0)
        <table class="table table-striped table-hover mt-4">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Phone</th>  
                    <th>people</th>   
                    <th>date</th>   
                    <th>Details</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reservations as $reservation)
                <tr>
                    <td class="align-middle">{{$reservation->id}}</td>
                    <td class="align-middle">{{$reservation->name}}</td>
                    <td class="align-middle">{{$reservation->phone}}</td>
                    <td class="align-middle">{{$reservation->people}}</td>
                    <td class="align-middle">{{$reservation->date}}</td>
                    <td class="align-middle">
                        <a href="{{route('reservations.show', $reservation->id)}}" class="btn btn-warning"> <i class="fas fa-eye"></i> Details</a>
                    </td>
                    <td class="align-middle">
                        <!-- Button to trigger the modal -->
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteConfirmationModal-{{$reservation->id}}">
                            <i class="fas fa-trash"></i> Delete
                        </button>
                        <!-- Modal for delete confirmation -->
                        <div class="modal fade" id="deleteConfirmationModal-{{$reservation->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmationModalLabel-{{$reservation->id}}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteConfirmationModalLabel-{{$reservation->id}}">Delete Confirmation</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete this reservation?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <form method="post" action="{{route('reservations.destroy' , $reservation -> id)}}">
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
    
    