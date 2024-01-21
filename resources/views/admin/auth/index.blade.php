@extends('Master.layouts')
@section('indexBooking')

<style>
 /* styles.css */

/* Style the container div */
.sss {
  max-width: 85%;
  margin: 20px auto;
  padding: 20px;
  background-color: #f8f8f8;
  border: 1px solid #ddd;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Style the table within the div */
.table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 10px;
}

/* Style the table headers */
th {
  background-color: #f2f2f2;
}

/* Style the table cells */
td {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: left;
}

/* Alternate row background color */
tr:nth-child(even) {
  background-color: #f9f9f9;
}

/* Hover effect on rows */
tr:hover {
  background-color: #f5f5f5;
}

</style>



 <div class="sss">
  
 <table class="table table-bordered mt-4" >
  <tr>
    <th>name</th>
    <th>checkin</th>
    <th>checkoutt</th>
    <th>hotel_id</th> 
    <th>rooms_num</th>
    <th>persons_num</th>
    <th>price</th>
    <th>rating</th>
    <th>status</th>
    <th></th>
    </tr>
    
    @foreach ($bookings as $booking)

  
    <tr>

      <td>{{$booking->name}}</td>
      <td>{{$booking->checkin}}</td>
      <td>{{$booking->checkout}}</td>
      <td>{{$booking->hotel->name}}</td> 
      <td>{{$booking->rooms_num}}</td>
      <td>{{$booking->persons_num}}</td>
      <td>{{$booking->price}}</td>
      <td>{{$booking->rating}}</td>
      <td>{{$booking->status}}</td>
      <td>
        <a href="{{route('admin.edit',$booking->id)}}"><i class="bi bi-pencil-square"></i></a>
      </td>
      <td>
        <a href="{{route('admin.delete',$booking->id)}}"><i class="bi bi-trash"></i></a>
      </td>
    </tr>
    @endforeach
  </table>

 </div>








@endsection