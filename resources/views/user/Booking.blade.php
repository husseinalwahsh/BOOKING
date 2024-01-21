@extends('Master.master')
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

    #desc {
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

<form action="{{ route('booking.store',$id) }}" method="post" id="bookingForm">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required value="{{ Auth::user()->name }}"><br>

    <label for="name">user id:</label>
    <input type="number" id="user_id" name="user_id" required  readonly value="{{  Auth::user()->id}}"><br>

    <label for="checkin">Check-in date:</label>
    <input type="date" id="checkin" name="checkin" required><br>

    <label for="checkout">Check-out date:</label>
    <input type="date" id="checkout" name="checkout" required><br>

    <label for="rooms_num">Number of rooms:</label>
    <input type="number" id="rooms_num" name="rooms_num" min="1" required max="4"><br>

    <label for="persons_num">Number of persons:</label>
    <input type="number" id="persons_num" name="persons_num" min="1" required><br>

    <label for="price">Price:</label>
    <input type="text" id="price" name="price" required readonly><br>

    <input type="submit" value="Book">
</form>

<script>
    
    document.getElementById('bookingForm').addEventListener('input', function () {
  
        var roomsNum = parseInt(document.getElementById('rooms_num').value);
        var personsNum = parseInt(document.getElementById('persons_num').value);

      
        var price = roomsNum * personsNum * 70;
        document.getElementById('price').value = price;
    });
    
    </script>
@endsection