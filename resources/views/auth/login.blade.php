@extends('layouts.master')

@section('title')

LOGIN
    
@endsection

@section('content')

<div class="container">

<form method="POST" action="{{ route('show-login')}}">
@csrf

<div class="form-group row">
        <label for="text" class="col-4 col-form-label">email</label>
        <div class="col-8">
            <input type="text" name="email" type="text" class="form-control">     
        </div>
 </div>
        <div class="form-group row">
                <label for="text" class="col-4 col-form-label">password</label>
                <div class="col-8">
                    <input type="text" name="password" type="text" class="form-control">
                </div>
</div>
               

        <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class=
                    "btn btn-primary">Login</button>
                </div>
                </div>



</form>
    
@endsection

</div>

