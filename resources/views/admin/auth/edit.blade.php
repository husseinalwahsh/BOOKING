@extends('Master.layouts')
@section('booking')
<style>
   
    form {
      max-width: 400px;
      margin: 0 auto;
    }

    label {
      display: block;
      margin-bottom: 8px;
    }

    input {
      width: 100%;
      padding: 8px;
      margin-bottom: 16px;
      box-sizing: border-box;
    }
#desc{
  width: 100%;
}
    </style>
 @if ($errors->any())
 <div class="alert alert-danger">
     <ul>
         @foreach ($errors->all() as $error)
             <li>{{ $error }}</li>
         @endforeach
     </ul>
 </div>
@endif
     @if(session()->has('success'))
        <div class="alert alert-success">
       {{ session()->get('success') }}
      </div>
       @endif


<form action="{{ route('admin.update',$booking->id) }}" method="post">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required value="{{ $booking->name }}"><br>

    <label for="checkin">Check-in date:</label>
    <input value="{{ $booking->checkin }}"  type="date" id="checkin" name="checkin" required><br>

    <label for="checkout">Check-out date:</label>
    <input value="{{ $booking->checkout }}"  type="date" id="checkout" name="checkout" required><br>
    
  <label for="rooms_num">hotel_id</label>
    <input  value="{{ $booking->hotel_id }}" type="number" id="hotel_id" name="hotel_id" min="1" required><br>

    <label for="rooms_num">Number of rooms:</label>
    <input value="{{ $booking->rooms_num	 }}"  type="number" id="rooms_num" name="rooms_num" min="1" required><br>
    

    <label for="persons_num">Number of persons:</label>
    <input value="{{ $booking->persons_num	 }}" type="number" id="persons_num" name="persons_num" min="1" required><br>

    <label for="price">Price:</label>
    <input value="{{ $booking->price	 }}" type="text" id="price" name="price" required><br>

    <label for="price">Rating:</label>
    <input value="{{ $booking->rating	 }} " type="text" id="rating" name="rating" required><br>
    <label for="price">Status:</label>
    <input value="{{ $booking->status	 }}" type="text" id="status" name="status" required><br>
     
    <input type="submit" value="Book">
</form>
@endsection