@extends('layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>All Companies</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Companies</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Company data with keywords and descriptions</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="companies_table" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Website</th>
                                    <th>Keywords</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($companies as $company)
                                <tr>
                                    <td>{{$company->name}}</td>
                                    <td><a href="{{$company->website}}">{{$company->website}}</a></td>
                                    <td>{{$company->keywords}}</td>
                                    <td>{{$company->description}}</td>
                                    <td><a class="btn btn-xs btn-outline-primary" id="approveButton" data-toggle="modal" data-target="#addKeywords" data-id="{{$company->id}}" data-keys="{{$company->keywords}}" data-desc="{{$company->description}}" onclick="getID(this)" ><i class="fa fa-key" title="Keywords and Description"></i></a> |
                                        <a class="btn btn-xs btn-outline-primary" id="company_update" data-toggle="modal" data-target="#updateCompany" data-id="{{$company->id}}" data-name="{{$company->name}}" data-website="{{$company->website}}" onclick="getIDCompany(this)" ><i class="fa fa-wrench" title="Update Company"></i></a></td>
                                </tr>
                                @endforeach

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        @include('layouts.company.modals.keywords')
        @include('layouts.company.modals.update_company')
        <!-- /.content -->
    </div>

    <script>
        function getID(el){
            var company_id = $(el).data('id');
            var keys = $(el).data('keys');
            var desc = $(el).data('desc');
            console.log(company_id +' '+ keys +' '+ desc);
            $("#addKeyWordsForm").attr('action', 'save_key_desc/'+company_id);
            $("#keywords").val(keys);
            $("#description").val(desc);
        }

        function submitForm(event){
            var myForm = $('#addKeyWordsForm');
            event.preventDefault();
            var formData = myForm.serialize();
            var url = $("#addKeyWordsForm").attr('action');
            console.log(url);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                data: formData,
                cache: false,
                processData: false,
                // contentType: string,
                type: 'POST',
                success: function (dataofconfirm) {
                    toastr.success("Lead status updated");
                    // console.log(dataofconfirm);
                    location.reload();
                },
                error:function(){
                    console.log('Failure');
                    toastr.error('Failed to update status');
                }
            });

        }

        function getIDCompany(event){
            var company_id = $(event).data('id');
            var name = $(event).data('name');
            var website = $(event).data('website');
            console.log(company_id +' '+ name +' '+ website);
            $("#updateCompanyForm").attr('action', 'update_company/'+company_id);
            $("#name").val(name);
            $("#website").val(website);
        }

        function submitFormCompanyUpdate(event){
            var myForm = $('#updateCompanyForm');
            event.preventDefault();
            var formData = myForm.serialize();
            var url = $("#updateCompanyForm").attr('action');
            console.log(url);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                data: formData,
                cache: false,
                processData: false,
                // contentType: string,
                type: 'POST',
                success: function (dataofconfirm) {
                    toastr.success("Company updated");
                    // console.log(dataofconfirm);
                    location.reload();
                },
                error:function(){
                    console.log('Failure');
                    toastr.error('Failed to update');
                }
            });

        }


    </script>
@endsection