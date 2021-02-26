@extends('layouts.master')
@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Categories</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active">Categories List</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">


                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <h5 class="card-title">Category List</h5><br>

                        <a href="{{route('categories.create')}}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>Add Category</a><br><br>
                        <table class="table table-bordered datatable">

                            <thead>

                                <tr>
                                    <th>#SL</th>
                                    <th>Name</th>
                                    <th>Action</th>


                                </tr>

                            </thead>
                            <tbody>
                                @foreach($categories as $key=>$row)

                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$row->name ?? ''}}</td>
                                    <td>
                                        <a href="{{route('categories.edit',$row->id)}}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i>Edit
                                        </a>
                                        <a href="javascript:;" class="btn btn-sm btn-danger  sa-delete" data-form-id="category-delete-{{$row->id}}"><i class="fa fa-trash"></i>Delete
                                        </a>

                                        <form id="category-delete-{{$row->id}}" action="{{route('categories.destroy',$row->id)}}" method="post">

                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>

                                </tr>

                                @endforeach

                            </tbody>

                        </table>
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