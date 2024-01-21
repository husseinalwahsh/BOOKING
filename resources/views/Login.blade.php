@extends('Master/master')
@section('logn')

<div class="login">
   
    <div class="lContainer">
      <h1 class="h1login">Sign in or create an account</h1>
      
      <span></span>
      <input
        type="text"
        placeholder="username"
        id="username"
        onChange={handleChange}
        class="lInput"
      />
      <input
        type="password"
        placeholder="password"
        id="password"
        onChange={handleChange}
        class="lInput"
      />
    
      <button disabled={loading} onClick={handleClick} class="lButton">
        <a href=""> Login </a>  
      </button>
    
      
 
    </div>

  </div>   
@endsection