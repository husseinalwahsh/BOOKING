@extends( 'Master/master')
@section('Hotel')

<div class="listContainer" > 
  <div class="listWrapper">
      <div class="listSearch"  >
          <h1 class="lsTitle">Search</h1>
          <div class="lsItem" >
            <label>Destination</label>
            <input  type="text" />
          </div>
          <div class="lsItem">
            <label>Check-in Date</label>
           
          </div>
          <div class="lsItem">
            <label>Options</label>
            <div class="lsOptions">
              <div class="lsOptionItem">
                <span class="lsOptionText">
                  Min price <small>per night</small>
                </span>
                <input
                  type="number"
                  class="lsOptionInput"
                />
              </div>
              <div class="lsOptionItem">
                <span class="lsOptionText">
                  Max price <small>per night</small>
                </span>
                <input
                  type="number"
                  class="lsOptionInput"
                />
              </div>
              <div class="lsOptionItem">
                <span class="lsOptionText">Adult</span>
                <input
                  type="number"
                  min=1
                  class="lsOptionInput"
                  
                />
              </div>
              <div class="lsOptionItem">
                <span class="lsOptionText">Children</span>
                <input
                  type="number"
                  min=0
                  class="lsOptionInput"
                  
                />
              </div>
              <div class="lsOptionItem">
                <span class="lsOptionText">Room</span>
                <input
                  type="number"
                  min= 1
                  class="lsOptionInput"
                />
              </div>
            </div>
          </div>
          <button>Search</button>
        </div>

        <div class="listResult">

       @foreach ($Hotels as $item)
           
       
          <div class="searchItem" >
            <a href="{{$item->id}}"> <img src="{{url('uploads/'.$item->image)}}" alt="" class="siImg" /></a>  <
              
              <div class="siDesc">
                <h1 class="siTitle">{{$item->name}}</h1>
                <span class="siDistance">{{$item->distance}}m from center</span>
                <span class="siTaxiOp">Free airport taxi</span>
                <span class="siSubtitle">
                  Studio Apartment with Air conditioning
                </span>
                <span class="siFeatures">{{$item->desc}}</span>
                <span class="siCancelOp">Free cancellation </span>
                <span class="siCancelOpSubtitle">
                  You can cancel later, so lock in this great price today!
                </span>
              </div>
              <div class="siDetails">
               
                {{$item->rating}} <div class="siRating">
                  <span class="siSubtitle">Excellent</span>
                  <button>{{$item->rating}}</button>
                </div>
                <div class="siDetailTexts">
                  <span class="siPrice">${{$item->Price}}</span>
                  <span class="siTaxOp">Includes taxes and fees</span>
                  <a href="#">
                  <a class="siCheckButton" href="{{  route('booking.create',$item->id)}}">Book Now</a>
                  </a>
                </div>
                
              </div>
            </div>



            @endforeach






        </div>

  </div>
</div>






@endsection