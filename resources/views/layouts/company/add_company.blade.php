@extends('layouts.master')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add New Company</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Add company</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">

                <!-- left column -->
                <div class="col-md-10">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Company Form</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" method="POST" action="{{route('saveCompany')}}">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter company name" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="website">Website</label>
                                    <input type="text" class="form-control" id="website" placeholder="Enter company website" name="website">
                                </div>

                                <div class="form-group">
                                    <label for="Email">Email address</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="Password">Password</label>
                                    <input type="text" class="form-control" id="password" placeholder="Enter Password" name="password">
                                </div>
                                <div>
                                    <label for="category">Category</label>
                                    <select name="category[]" class="select2" multiple="multiple" data-placeholder="Select all that apply" style="width: 100%;">
                                        @foreach($categories as $category)
                                        <option>{{$category->category}}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->

                </div>
            </div>
        </div>
    </section>
    </div>
@endsection