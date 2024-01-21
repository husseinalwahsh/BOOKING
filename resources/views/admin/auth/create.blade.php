@extends('Master/layouts')



@section('create')


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
     
  <form    action="{{route('hotel.store')}}"   method="POST"    enctype="multipart/form-data">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" >

    <label for="distance">Distance:</label>
    <input type="number" id="distance" name="distance" >

    <label for="image">Upload Image:</label>
    <input type="file" id="image" name="image" accept="image/*" >
    <label for="price">Price:</label>
    <input type="number" id="price" name="price" >

    <label for="desc">Description:</label>
    <input type="number" iid="desc" name="desc" >
    
    <label for="rating">Rating:</label>
    <input type="number" id="rating" name="rating" min="1" max="5" >

    <label for="country_id">Country:</label>
    <select id="country_id" name="countrie_id">
     
<option value="kd" >routan</option>
<option value="kd" >routan</option>
<option value="kd" >routan</option>
<option value="{{$key}}">{{ $value}}</option>
<option value="{{$key}}">{{ $value}}</option>
    </select>

    

    <select id="country_id" name="countrie_id">
      @foreach ($countrys as $key=>$value)
<option value="{{$key}}">{{ $value}}</option>
@endforeach
    </select>

    <button type="submit"   class="primary-btn order-subnit">Submit</button>
  </form>

  


@endsection