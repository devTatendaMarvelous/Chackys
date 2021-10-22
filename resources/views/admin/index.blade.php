@extends('layouts.app')
@section('content')
     <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container ">
                    <div class="form-content alert-gradient">
                        {{-- <img src="assets/images/logo.png" class="logo"> --}}
                        <h1 class="">Sign In</h1>
                        <p class="">Log in to your account to continue.</p>
                          {!! Form::open(['action'=>'App\Http\Controllers\AdminsController@login','class'=>'needs-validation', 'novalidate','method'=>'GET','enctype'=>'multipart/form-data'])!!}
                            <div class="form-row">
                                <div id="username-field" class="field-wrapper input">
                                   
                        
                                    <div class="field-wrapper input">
                                        <div class="d-flex justify-content-between">
                                            <label for="password">EMAIL</label>
                        
                                        </div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-at-sign register">
                                            <circle cx="12" cy="12" r="4"></circle>
                                            <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
                                        </svg>
                                        {{Form::email('email', '', ['class'=>'form-control','id'=>'validationCustom01','placeholder'=>'Email.......','required','autofocus'])}}
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="field-wrapper input" id="password-field">
                        
                        
                                        <div class="d-flex justify-content-between">
                                            <label for="password">PASSWORD</label>
                                            <a href="#" class="forgot-pass-link">Forgot Password?</a>
                                        </div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-lock">
                                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                        </svg>
                                        {{Form::text('password', '', ['class'=>'form-control','id'=>'password','placeholder'=>'Password.......','required','autofocus'])}}
                    
                                       
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                        
                                    </div>
                        
                                    <div class="d-sm-flex justify-content-between">
                                        <div class="field-wrapper">
                                               {{Form::submit('Login',['class'=>'btn btn-primary'])}}
                                        </div>
                                    </div>
                                    <p class="signup-link">Not registered ? <a href="/create">Create an account</a></p>                          
                              
                        
                                   
                        
                                </div>
                             </div>
                           
                    {!! Form::close()!!}
                        

                    </div>                    
                </div>
            </div>
        </div>
@endsection