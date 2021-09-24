@extends('Layouts/base')
@section('content')  


<form  action='{{route('store')}}' method="POST">
    <div class="form-group" >
      <label for="locationInput">Location</label>
      <input type="text" class="form-control" id="locationInput" name='location'  placeholder="Enter location">
    </div>
    <div class="form-group">
      <label for="descriptionInput">Description</label>
      <input type="text" class="form-control" id="descriptionInpuut" name='description' placeholder="Enter a description">
    </div>
    <div class="form-group">
        <label for="dateTravelInput">Date du voyage</label>
        <input type="date" class="form-control" id="dateTravelInput" name='travelDate' placeholder="Enter a date">
    </div>
    <div class="form-group">
        <label for="priceInput">Price</label>
        <input type="number" class="form-control" id="priceInput" name='price' placeholder="Enter the price" min='0' max=9999 step=.01>
    </div>
    <div class="form-group">
        <label for="organizeInput">Organizer</label>
        <input type="text" class="form-control" id="organizerInput" name='organizer' placeholder="Enter Organizer">
    </div>
    <div class="form-group">
        <label for="noteInput">Note</label>
        <input type="number" class="form-control" id="noteInput" name='note' placeholder="Enter Note" min="0" max='5'>
    </div>
    <div class="form-group">
        <label for="viewsInput">Views</label>
        <input type="number" class="form-control" id="viewsInput" name='views' placeholder="Enter Note" min="0" max='99999'>
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
    @csrf
</form>

@endsection