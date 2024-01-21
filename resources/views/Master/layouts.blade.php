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
              <a id="StayFinder" href={{url('/')}} >StayFinder</a>
            </div>
            <div>
              @guest
              <a href={{route('admin.showlogin')}}> <button class="navButton">Login</button></a> 

              @else 
Welcome:  {{ Auth::user()->name }}


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
                 
                  <span id="home"><a  href={{route('admin.dashboard')}}>Dashboard</a></span>
                </div>
                <div class="headerListItem">
                
                    
                  <span><a href="{{route('admin.index')}}">BOOKING</a></span>
                </div>
      
    
               
                <div class="headerListItem">
                  
                  <span><a href="{{route('hotel.create')}}">Create</a></span>
                </div>
               
               
              </div>
 
           
           </div>
           
           <div>
            <div>
               
                @yield('Home')
                @yield('logn')
                @yield('create')
                @yield('indexBooking')
                @yield('booking')
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