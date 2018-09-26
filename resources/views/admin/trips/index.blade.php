@extends('layouts.admin')
@section('content')

    <!-- Breadcrumb-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><h1>Trip</h1></li>
    </ol>

        <!-- content header-->
    <section class="content">
     <div class="container-fluid">
        <p>
            <a href="{{ route('admin.trips.create') }}" class="btn btn-primary">Add New Trip</a>
        </p>
        <table class="table table-bordered table-striped">
            <tr>
                <th>No.</th>
                <th>From</th>
                <th>To</th>
                <th>Cost</th>
                <th>Departure Time</th>
                <th>Departure Date</th>
                <th>Action</th>
            </tr>
            <?php $no=1; ?>
            @foreach($trips as $t)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $t->from }}</td>
                    <td>{{ $t->to }}</td>
                    <td>{{ $t->cost }}</td>
                    <td>{{ $t->departure_time }}</td>
                    <td>{{ $t->departure_date }}</td>
                    <td>
                        <a href="{{ route('admin.trips.edit', $t->id) }}" class="btn btn-info">Edit</a>
                        <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
                        <form action="{{ route('admin.trips.destroy', $t->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
     </div>
    </section>


@endsection
