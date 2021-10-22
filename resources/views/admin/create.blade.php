@extends('layouts.app')
@section('content')
     <div class="form-form">
            <div class="form-form-wrap">
                
                <div class="form-container">
                    
                    <div class="form-content alert-gradient">
                        {{-- <img src="assets/images/logo.png" class="logo"> --}}
                        <h1 class="">Register</h1>
                        <p class="signup-link register">Already have an account? <a href="/admin">Log in</a></p>
                        {{-- <form  novalidate action="javascript:void(0);"> --}}
                            {!! Form::open(['action'=>'App\Http\Controllers\AdminsController@store','class'=>'needs-validation', 'novalidate','method'=>'POST','enctype'=>'multipart/form-data'])!!}
                            <div class="form-row">
                                <div id="username-field" class="field-wrapper input">
                                    <div class="field-wrapper input">
                                        <div class="d-flex justify-content-between">
                                            <label for="password">FIRSTNAME</label>
                                    
                                        </div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        
                                         {{Form::text('fname', '', ['class'=>'form-control','id'=>'validationCustom01','placeholder'=>'First Name.......','required','autofocus'])}}

                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="field-wrapper input">
                                        <div class="d-flex justify-content-between">
                                            <label for="password">LASTNAME</label>
                                    
                                        </div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        {{Form::text('surname', '', ['class'=>'form-control','id'=>'validationCustom01','placeholder'=>'Surname.......','required','autofocus'])}}

                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                        
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
                    
                                        {{-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            id="toggle-password" class="feather feather-eye">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg> --}}
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                        
                                    </div>
                        
                                    <div class="d-sm-flex justify-content-between">
                                        <div class="field-wrapper">
                                               {{Form::submit('Register',['class'=>'btn btn-primary'])}}
                                        </div>
                                    </div>
                                </div>
                             </div>
                           
                    {!! Form::close()!!}

                    </div>                    
                </div>
            </div>
        </div>
@endsection