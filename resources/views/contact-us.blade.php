
{{--
/**
 * Created by PhpStorm.
 * User: raphael
 * Date: 10/29/18
 * Time: 10:19 AM
 */--}}
@extends('layouts.app')
@section('title','Talk to us')
@section('desc','Contact Us - Call Now ')

@section('content')

<div class="container-fluid" id="contact-us">
    <div class="row">
        <div class="text-center col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h2>Talk to Us</h2>
            <p><a href="tel:254722768788"><i class="fas fa-phone-square" style="font-size: 1.5em"></i>&nbsp;+254 722 768 788</a>  |   hello@raphaeliam.co.ke</p>
            
            <hr/>
            @if(Session::has('message'))
                        <div class="alert alert-success alert-dismisable">
                            {{Session::get('message')}}
                        </div>
                    @endif
        </div>
    </div>
    <div class="row" style="background-image: url(https://www.google.com/recaptcha/intro/images/bg-ease-01.jpg)">
            <div class="col-xs-12 col-md-4"></div>
            <div class="col-md-offset-8 col-xs-12 col-md-4">
                    <div class="contact-us-form animated fadeIn slow">
                  
                        <div class="row text-center">
                            
                            <div class="text-left col-lg-10 col-lg-offset-1 col-md-12 col-xs-12 co col-sm-12 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.3);">
                            
                                    {!! Form::open(['route'=>'mail'])!!}
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control input-lg " id="name" name="name" placeholder="Name">
                                        <span class="help-block" style="display: none;">Please enter your name.</span></div>
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control input-lg" id="phone" name="phone" placeholder="Phone Number" maxlength="10">
                                        <span class="help-block" style="display: none;">Please enter a valid phone no.</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">E-Mail</label>
                                        <input type="email" class="form-control input-lg" id="email" name="email" placeholder="Email Address">
                                        <span class="help-block" style="display: none;">Please enter a valid e-mail address.</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea rows="7" cols="100" class="form-control" id="message" name="message" placeholder="Message"></textarea>
                                        <span class="help-block" style="display: none;">Please enter a message.</span>
                                    </div>
                                    <span class="help-block" style="display: none;">Please enter a the security code.</span>
                                    <div id="success"></div>
                                    <button  id="feedbackSubmit" class="btn btn-primary btn-lg btn-outline-light btn-block" style=" margin-top: 10px;"> Send Message</button>
                                </form>
                                
                                <!-- END CONTACT FORM -->
                            </div>
                        </div>
                    </div>
                </div>
                
    </div>
</div>
@endsection