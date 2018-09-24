@extends('layouts.client')

@section('booking')
<div class="container-fluid">
    <form method="post" action="#">
        @csrf
        <legend><strong>Buy Ticket</strong></legend>
        <div class="form-group">
            <div class="row">
                <div class="col-md-4">
                    <label>Where are you leaving from?</label><br>
                    <select name="from" class="form-control">
                        <option value="0">Select your departure Terminal</option>
                        @foreach($trips as $t)
                        <option value="{{ $t->id }}">{{ $t->from }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4">
                    <label>Where are you going?</label><br>
                    <select name="to" class="form-control">
                        <option value="0">Select your destination</option>
                        @foreach($trips as $t)
                        <option value="{{ $t->to }}">{{ $t->to }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3">
                    <label>When are you going?</label><br>
                    <input type="date" name="date" class="form-control" placeholder="Departure Date">
                </div>
                <div class="col-md-1">
                    <label>Search</label><br>
                    <input type="submit" class="btn btn-info" value="search">
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

@section('content')
<div class="w3-image w3-animate-opacity">
  <img class="testimg" src="img/1.jpg" alt="" style="width:1600px;min-height:350px;max-height:800px;">
  </div>



@endsection
