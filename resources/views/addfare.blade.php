@extends('includes.layout')

@section('title')
  AddFare
@endsection

@section('content')
 <h1 class="center-text"> Add Fare</h1>
  <form action="{{route('add')}}" method="POST">
       {{csrf_field()}}
      <div class="form__group">
       <label for="departure">Departure</label>
       <input type="text" name="departure" id="departure">
      </div>

       <div class="form__group">
       <label for="destination">Destination</label>
       <input type="text" name="destination" id="destination">
      </div>

      <div class="form__group">
       <label for="price"> Price</label>
      <input type="text" name="price" id="price">
      </div>

      <input type="submit" value="Save">
  </form>


@endsection
