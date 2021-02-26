@extends('layouts.master')
@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Brands</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active">Brands Create</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">


                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <h5 class="card-title">Create Brand</h5><br>
                        <form role="form" action="{{route('brands.store')}}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter Brand Name">
                                    @if($errors->has('name'))
                                    <span class="text-danger">{{$errors->first('name')}}</span>

                                    @endif
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i>Submit</button>
                            </div>
                        </form>
                    </div>
                </div><!-- /.card -->
            </div>
            <!-- /.col-md-6 -->

            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@stop