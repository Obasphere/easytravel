@extends('layouts.admin')
@section('content')

    <!-- Breadcrumb-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><h1>Edit City</h1></li>
    </ol>

        <!-- content header-->
    <section class="content">
     <div class="container-fluid">
       <form method="post" action="{{ route('admin.cities.update',$city->id) }}">
            @method('PUT')
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <input type="text" name="city" class="form-control" placeholder="City" value="{{ $city->city }}">
                        <input type="text" name="state" class="form-control" placeholder="State" value="{{ $city->state }}">
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
