@extends('layouts.admin')
@section('content')

    <!-- Breadcrumb-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><h1>Cities</h1></li>
    </ol>

        <!-- content header-->
    <section class="content">
     <div class="container-fluid">
        <p>
            <a href="#" class="btn btn-primary">Add New City</a>
        </p>
        <table class="table table-boardered table-striped">
            <tr>
                <th>ID</th>
                <th>City</th>
                <th>State</th>
                <th>Action</th>
            </tr>
            @foreach($cities as $c)
                <tr>
                    <td>{{ $c->id }}</td>
                    <td>{{ $c->city }}</td>
                    <td>{{ $c->state }}</td>
                    <td><a href="#" class="btn btn-info">Edit</a> <a href="#" class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach
        </table>
     </div>
    </section>
     

@endsection