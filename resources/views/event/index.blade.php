@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>All Events</h2>
            <hr>
        </div>
        @foreach ($events as $event)
            @include('partials.panel.event')
        @endforeach
    </div>
    <div class="row">
    	<div class="col-md-8 col-md-offset-2">
    		<h5><strong>Add an Event</strong></h5>
    		<hr>
	    	<form method="POST" action="events">
	    		{{ csrf_field() }}
	    		<div class="form-group">
    	    		<input type="text" class="form-control" name="title" id="title" placeholder="Event Title">
    	    	</div>
    	    	<div class="form-group">	
    	    		<input type="text" class="form-control" name="country" id="country" placeholder="Country">
    	    	</div>
    	    	<div class="form-group">	
    	    		<input type="text" class="form-control" name="city" id="city" placeholder="City">
    	    	</div>
    	    	<div class="form-group">	
    	    		<input type="text" class="form-control" name="address" id="address" placeholder="Address">
    	    	</div>
    	    	<div class="form-group">	
    	    		<textarea class="form-control" name="body" id="body" rows="5" placeholder="Event Description"></textarea>
    	    	</div>
    	    	<input type="submit" class="btn btn-primary">
	    	</form>
		</div>    
    </div>
</div>
@endsection
