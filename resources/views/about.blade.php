@extends('layouts.client')

@section('navbar')
<ul class="nav navbar-nav navbar-right menu-top">
    <li><a href="{{ ('/') }}">Home</a></li>
    <li><a class="active" href="{{ ('/about') }}">About Us </a></li>
    <li><a href="{{ ('/services') }}">Services</a></li>
</ul>
@endsection

@section('content')
<div id="about" class="section wb nopadtop">
        <div class="container">
            <div class="row">
				<div class="col-md-6 m40">
                    <br><br>
                    <div class="message-box">
                        <h2>About Company</h2>
                        <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed vitae rutrum neque. Ut id erat sit amet libero bibendum aliquam. Donec ac egestas libero, eu bibendum risus. Phasellus et congue justo. </p>
						<p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed vitae rutrum neque. Ut id erat sit amet libero bibendum aliquam. Donec ac egestas libero, eu bibendum risus. Phasellus et congue justo. </p>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->


@endsection
