@extends('layouts.admin')
@section('content')

    <!-- Breadcrumb-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><h1>Edit Trip</h1></li>
    </ol>

        <!-- content header-->
    <section class="content">
     <div class="container-fluid">
       <form method="post" action="{{ route('admin.trips.update', $trip->id) }}">
            @method('PUT')
            @csrf
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <select name="from" class="form-control">
                            <option value="{{ $trip->from }}">{{ $trip->from }}</option>
                            <option value="0">-- From --</option>
                            @foreach($cities as $c)
                            <option value="{{ $c->state }} ({{ $c->city }})">{{ $c->state }} ({{ $c->city }})</option>
                            @endforeach
                        </select><br>
                        <select name="to" class="form-control">
                            <option value="{{ $trip->to }}">{{ $trip->to }}</option>
                            <option value="0">-- To --</option>
                            @foreach($cities as $c)
                            <option value="{{ $c->state }} ({{ $c->city }})">{{ $c->state }} ({{ $c->city }})</option>
                            @endforeach
                        </select><br>
                        <input type="text" name="cost" class="form-control" placeholder="Cost" value="{{ $trip->cost }}"><br>
                        <input type="date" name="date" class="form-control" placeholder="Departure Date" value="{{ $trip->departure_date }}"><br>
                        <select name="time" class="form-control">
                            <option value="{{ $trip->departure_time }}">{{ $trip->departure_time }}</option>
                            <option value="0">Departure Time</option>
                            <option value="Morning">6:30 AM</option>
                            <option value="Afternon">1:00 PM</option>
                            <option value="Evening">6:00 PM</option>
                            <option value="Night">9:30 PM</option>
                        </select>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-info" value="save">
            </div>
       </form>
     </div>
    </section>


@endsection
