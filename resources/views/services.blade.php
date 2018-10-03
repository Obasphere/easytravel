@extends('layouts.client')

@section('navbar')
<ul class="nav navbar-nav navbar-right menu-top">
    <li><a href="{{ ('/') }}">Home</a></li>
    <li><a href="{{ ('/about') }}">About Us </a></li>
    <li><a class="active" href="{{ ('/services') }}">Services</a></li>
</ul>
@endsection

@section('content')

<div class="row text-center">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="service-widget">
                        <div class="post-media wow fadeIn">
                            <img src="uploads/seo_01.png" alt="" class="img-responsive img-rounded">
                        </div>
                        <h3>SEO Optimization</h3>
                        <p>Aliquam sagittis ligula et sem lacinia, ut facilisis enim sollicitudin. Proin nisi est, convallis nec purus vitae, iaculis posuere sapien. Cum sociis natoque.</p>
                    </div><!-- end service -->
                </div><!-- end col -->

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="service-widget">
                        <div class="post-media wow fadeIn">
                            <img src="uploads/seo_02.png" alt="" class="img-responsive img-rounded">
                        </div>
                        <h3>Backlink Management</h3>
                        <p>Duis at tellus at dui tincidunt scelerisque nec sed felis. Suspendisse id dolor sed leo rutrum euismod. Nullam vestibulum fermentum erat. It nam auctor. </p>
                    </div><!-- end service -->
                </div><!-- end col -->

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="service-widget">
                        <div class="post-media wow fadeIn">
                            <img src="uploads/seo_03.png" alt="" class="img-responsive img-rounded">
                        </div>
                        <h3>Pay Per Click</h3>
                        <p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet lacus vitae massa sodales aliquam at eget quam. Integer ultricies et magna quis accumsan.</p>
                    </div><!-- end service -->
                </div><!-- end col -->
            </div><!-- end row -->

            <hr class="invis">

            <div class="row text-center">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="service-widget">
                        <div class="post-media wow fadeIn">
                            <img src="uploads/seo_04.png" alt="" class="img-responsive img-rounded">
                        </div>
                        <h3>Dashboard Statics</h3>
                        <p>Aliquam sagittis ligula et sem lacinia, ut facilisis enim sollicitudin. Proin nisi est, convallis nec purus vitae, iaculis posuere sapien. Cum sociis natoque.</p>
                    </div><!-- end service -->
                </div><!-- end col -->

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="service-widget">
                        <div class="post-media wow fadeIn">
                            <img src="uploads/seo_05.png" alt="" class="img-responsive img-rounded">
                        </div>
                        <h3>Onepage SEO</h3>
                        <p>Duis at tellus at dui tincidunt scelerisque nec sed felis. Suspendisse id dolor sed leo rutrum euismod. Nullam vestibulum fermentum erat. It nam auctor. </p>
                    </div><!-- end service -->
                </div><!-- end col -->

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="service-widget">
                        <div class="post-media wow fadeIn">
                            <img src="uploads/seo_06.png" alt="" class="img-responsive img-rounded">
                        </div>
                        <h3>Black Hat SEO</h3>
                        <p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet lacus vitae massa sodales aliquam at eget quam. Integer ultricies et magna quis accumsan.</p>
                    </div><!-- end service -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->


@endsection
