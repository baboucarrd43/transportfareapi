@extends('includes.layout')

@section('title')
  Edit
@endsection

@section('content')
    <h1 class="center-text">Edit Fare</h1>
  <form method="POST" action="{{action('FaresController@update',$id)}}">
    @method('PATCH')
    @csrf
     <div class="form__group">
       <label for="departure">Departure</label>
       <input type="text" value="{{$fares->departure}}" name="departure" id="desinationt">
     </div>
     <div class="form__group">
       <label for="departure">Destination</label>
       <input type="text" value="{{$fares->destination}}" name="destination" id="destination">
     </div>

     <div class="form__group">
       <label for="departure">Price</label>
       <input type="text" value="{{$fares->price}}" name="price" id="price">
     </div>


      <input type="submit" value="Update">
  </form>
@endsection
