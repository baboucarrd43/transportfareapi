@extends('includes.layout')
@section('content')

@include('includes.nav')
  <h1>View all fares</h1>
<table class="table mt-4 table-striped">
      <tr>
    <th scope="col">From</th>
    <th scope="col">To</th>
    <th scope="col">Price</th>
    <th scope="col">Action</th>
      </tr>

  </thead>
   <tbody>
    @foreach ($fa as $fares )
    <tr>
         <td><a href="/fares/{{$fares->id}}">{{$fares->departure}}</a></td>
        <td>{{$fares->destination}}</td>
              <td>{{$fares->price}}</td>
  <td>

                        <a href="/fares/{{$fares->id}}/edit" class="btn btn-primary">Edit</a>
                    </td>

    </tr>
    @endforeach
   </tbody>
</table>
@endsection

