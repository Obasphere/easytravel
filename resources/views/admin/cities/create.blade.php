@extends('layouts.admin')
@section('content')

    <!-- Breadcrumb-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><h1>Add City</h1></li>
    </ol>

        <!-- content header-->
    <section class="content">
     <div class="container-fluid">
       <form method="post" action="{{ route('admin.cities.store') }}">
            @csrf
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" name="city" class="form-control" placeholder="City"><br>
                        <input type="text" name="state" class="form-control" placeholder="State">
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
