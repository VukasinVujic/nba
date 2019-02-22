@extends('layouts.master')

@section('title')
    
    REGISTER

@endsection

<div class="container">

    <form method="POST" action="{{ route('register')}}" >
    @csrf
    
            <div class="form-group row">
            <label for="text" class="col-4 col-form-label">Name</label>
            <div class="col-8">
                <input type="text" name="name" type="text" class="form-control">     
            </div>
            </div>

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
            <label for="text" class="col-4 col-form-label">password_confirmation</label>
            <div class="col-8">
                <input type="text" name="password_confirmation" type="text" class="form-control">
            </div>
        </div>

            <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class=
                        "btn btn-primary">Register</button>
                    </div>
                    </div>


            </form>




</div>