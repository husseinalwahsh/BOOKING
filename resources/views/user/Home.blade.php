@extends('Master/master')
@section('Home')

<div class="homeContainer">
 <img src="https://q-xx.bstatic.com/xdata/images/xphoto/2880x868/296661902.jpeg?k=81d5ab638f6a52308efde9aff4e7f4d468ee89a8db0677723edf0ff76410d6ec&o=" alt="" width="100%"  height="30%">
  <div class="description">
    <h1>Find your next stay</h1>
    <p >Search low prices on hotels, homes and much more...</p>
</div >

<div class="searchContainer">
    <form action="{{ route('hotel.sreach')}}" method="post">
      @csrf
<input onkeyup="total()" id="text" class="searchBoxItem" type="text" name="country" placeholder="Where are you going?">
<input onmouseup="total()" id="datetime" class="searchBoxItem" type="datetime-local" name="">
<input onmouseup="total()" id="number" class="searchBoxItem" type="number" min="1" name="" placeholder="How many people?">
<button  id="btnSearch" type="submit" >Search</button>
</form>
</div>

<div class="featured">

@foreach ($countrys as $item)
    

<div class="featuredItem" >
  
  <a href="{{route('hotel.index')}}">
      <img src="{{ $item->image }}" alt="" class="featuredImg" />
  </a>

  <div class="featuredTitles">
      <h1>{{ $item->name }}</h1>
      <h2>{{ $item->d }} properties</h2>
  </div>
</div>

      @endforeach
     

</div>
<h1 class="homeTitle">Browse by property type</h1>
<?php

$arr=[ "https://cf.bstatic.com/xdata/images/xphoto/square300/57584488.webp?k=bf724e4e9b9b75480bbe7fc675460a089ba6414fe4693b83ea3fdd8e938832a6&o=",
    "https://cf.bstatic.com/static/img/theme-index/carousel_320x240/card-image-apartments_300/9f60235dc09a3ac3f0a93adbc901c61ecd1ce72e.jpg",
    "https://cf.bstatic.com/static/img/theme-index/carousel_320x240/bg_resorts/6f87c6143fbd51a0bb5d15ca3b9cf84211ab0884.jpg",
    "https://cf.bstatic.com/static/img/theme-index/carousel_320x240/card-image-villas_300/dd0d7f8202676306a661aa4f0cf1ffab31286211.jpg",
    "https://cf.bstatic.com/static/img/theme-index/carousel_320x240/card-image-chalet_300/8ee014fcc493cb3334e25893a1dee8c6d36ed0ba.jpg",];
?>

    

<div class="pList">
   
    
  @foreach ($arr as $item)
    
<div class="pListItem" key={i}>
<img
src= {{$item}}

alt=""
class="pListImg"
/>

    </div>
    @endforeach    
</div>

<h1 class="homeTitle">Homes guests love</h1>
</div>

@endsection