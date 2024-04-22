@extends("layouts.dashboard")

@section('content')

<h1>Reservation Details</h1>
<br />
<br />

<br/>
<br/>

<div class="form-group">
    <label class="col-form-label" for="id">Id</label>
    <input name="id" class="form-control" value="{{$reservation -> id}}" disabled />
</div>

<div class="form-group">
    <label class="col-form-label" for="name">Name</label>
    <input name="name" class="form-control" value="{{$reservation -> name}}" disabled />
</div>

<div class="form-group">
    <label class="col-form-label" for="ingredients">People</label>
    <input name="ingredients" class="form-control" value="{{$reservation -> people}}" disabled />
</div>

<div class="form-group">
    <label class="col-form-label" for="category">Date</label>
    <input type="datetime-local" class="form-control" value="{{$reservation -> date}}" disabled />
</div>

<div class="form-group">
    <label class="col-form-label" for="category">Message</label>
    <textarea class="form-control" name="message" rows="5" placeholder="Message" disabled>{{$reservation -> message}}</textarea>
</div>



<div class="form-group">
    <label class="col-form-label">Created At</label>
    <input type="datetime"  class="form-control" value="{{$reservation -> created_at}}" disabled />
</div>

<a href="{{ route('reservations.index') }}" class="btn btn-info">Back</a>

@endsection