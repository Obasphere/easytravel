@extends('layouts.client')

@section('navbar')
<ul class="nav navbar-nav navbar-right menu-top">
    <li><a class="active" href="{{ ('/') }}">Home</a></li>
    <li><a href="{{ ('/about') }}">About Us </a></li>
    <li><a href="{{ ('/services') }}">Services</a></li>
</ul>
@endsection

@section('booking')
<div class="container-fluid">
    <span id="baseUrl" data-url="{{ URL('searchRoutes') }}"></span>
    <form method="post" action="{{ ('/booking') }}">
        @csrf
        <legend><strong>Buy Ticket</strong></legend>
        <div class="form-group">
            <div class="row">
                <div class="col-md-4 text-center">
                    <label><h5>Where are you leaving from?</h5></label><br>
                    <select name="from" class="form-control" id="fromLocation">
                        <option value="0">Select your departure Terminal</option>
                        @foreach($trips as $t)
                            <option value="{{ $t->from }}">{{ $t->from }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4 text-center">
                    <label><h5>Where are you going?</h5></label><br>
                    <select name="to" class="form-control" id="toLocation">
                    </select>
                </div><br><br><br>
                <div class="col-md-4 text-center">
                    <label><h5>When are you going?</h5></label><br>
                    <input type="date" name="date" class="form-control" placeholder="Departure Date">
                </div>
                <div class="col-md-4 text-center">
                    <label><h5>Cost (Naira)</h5></label><br>
                    <select name="cost" class="form-control" id="costLocation">
                    </select>
                </div>
                <div class="col-md-2 text-center">
                    <label><h5>Proceed here</h5></label><br>
                    <input type="submit" class="btn btn-info" value="Proceed">
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
