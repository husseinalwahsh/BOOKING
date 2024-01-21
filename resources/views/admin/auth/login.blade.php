@extends('Master/layouts')
@section('logn')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.login') }}">
                        @csrf
                        @error('username')
                           <span class="text-danger">{{ $message }}</span> 
                        @enderror
      <input
        type="text"
        name="username"
        placeholder="username"
        id="username"
        onChange={handleChange}
        class="lInput"
   
      />
      @error('password')
      <span class="text-danger">{{ $message }}</span> 
   @enderror
      <input
        type="password"

        name="password"
        placeholder="password"
        id="password"
        onChange={handleChange}
        class="lInput"
        name="password"
      />
    
     <button type="submit" class="btn btn-primary">Login
      </button>
    </form>
</div>
</div>
</div>
</div>
</div>
@endsection