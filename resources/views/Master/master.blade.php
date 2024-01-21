<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BOOKING</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  
</head>



<body>


  <div>
    <div class="navbar">
  
        <div class="navContainer" >
          
            <div class="navItems" >
              <div>
              <a id="StayFinder" href={{route('Home')}} >StayFinder</a>
            </div>
            <div>
              @guest
              <a href={{route('register')}}><button class="navButton">Register</button></a>
              <a href={{route('login')}}> <button class="navButton">Login</button></a> 

              @else 
              @if(isset($bookings) && count($bookings) > 0)
              {{-- Display the bookings --}}
              @foreach($bookings as $booking)
                  {{-- Your code to display each booking --}}
              @endforeach
          @else
              {{-- No bookings found --}}
              Welcome: <a href="{{ route('index_user', Auth::user()->name) }}">{{ Auth::user()->name }}</a>
          @endif

<a href="{{ route('logout') }}"
onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
        <button class="navButton">Logout</button>       

</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
 @csrf
</form>
              @endguest
            </div>
            </div>
          
        </div>
         
     </div>
 

        
            <div
              class= "headerContainer" 
         
            >
              <div class="headerList">
                <div class="headerListItem active">
                 
                  <span id="home"><a href={{url('/')}}>Home</a></span>
                </div>
                <div class="headerListItem">
                
                    
                  <span><a href="{{url('/hotel')}}">Hotel</a></span>
                </div>
      
    
               
               
                <div class="headerListItem">
              
                  <span>Attractions</span>
                </div>
                <div class="headerListItem">
                 
                  <span>Airport taxis</span>
                </div>
              </div>
 
           
           </div>
           
           <div>
            <div>
                @yield('content')
                @yield('Home')
                @yield('logn')
                @yield('Hotel')
                @yield('cont')
                @yield('booking')
                @yield('create')
                @yield('indexBooking')
                
            </div>
                         


           </div>
              <div class="mail" >
    
                <h1 class="mailTitle">Save time, save money!</h1>
                <span class="mailDesc">Sign up and we'll send the best deals to you</span>
                <div class="mailInputContainer">
                  <input type="text" placeholder="Your Email" />
                  <button>Subscribe</button>
                </div>
              </div>

       </div>

    


</body>
</html>