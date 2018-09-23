@extends('layouts.admin')
@section('content')

    <!-- Breadcrumb-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><h1>City</h1></li>
    </ol>

        <!-- content header-->
    <section class="content">
     <div class="container-fluid">
        <p>
            <a href="{{ route('admin.cities.create') }}" class="btn btn-primary">Add New City</a>
        </p>
        <table class="table table-boardered table-striped">
            <tr>
                <th>State</th>
                <th>City</th>
                <th>Action</th>
            </tr>
            @foreach($cities as $c)
                <tr>
                    <td>{{ $c->state }}</td>
                    <td>{{ $c->city }}</td>
                    <td>
                        <a href="{{ route('admin.cities.edit', $c->id) }}" class="btn btn-info">Edit</a>
                        <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
                        <form action="{{ route('admin.cities.destroy', $c->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $cities->render() }}
     </div>
    </section>


@endsection
