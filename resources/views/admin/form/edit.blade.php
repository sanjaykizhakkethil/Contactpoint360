@extends('layouts.admin')
@section('content')
<!-- Page Header -->
<div class="page-header">
    <div class="page-leftheader">
        <h4 class="page-title mb-0 text-primary">Update Form</h4>
    </div>
    <div class="page-rightheader">
        <a href="{{route('form.index')}}"><button class="btn btn-outline-primary"><i class="fa fa-plus me-2"></i>
                Back</button>
        </a>
    </div>
</div>
<!-- Page Header Close -->
<x-alert />
<!-- Start:: row-1 -->
<div class="row">
    <div class="col-xl-12">
        <form action="{{route('form.update', $result->form_id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card custom-card">
                <div class="card-header justify-content-between">
                    <div class="card-title">
                        Form
                    </div>
                </div>
                <div class="card-body">
                    <div class="row gy-4">
                        <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                            <label for="input-label" class="form-label">Name</label>
                            <input type="text" class="form-control" id="input" name="form_name" placeholder="Enter Title" value="{{$result->form_name}}">
                        </div>



                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <label for="input-label" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="input-label" name="form_phone" value="{{$result->form_phone}}" placeholder="Enter Phone">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <label for="input-label" class="form-label">Gender</label>
                            <select type="text" class="form-control select2-show-search" id="input-label" name="package_duration" value="{{$result->package_duration}}" placeholder="Enter Salary">
                                <option selected disabled>Select Gender</option>
                                <option value="male" {{ $result->form_gender == 'male' ? 'selected' : ''
                                    }}>Male</option>
                                <option value="female" {{ $result->form_gender == 'female' ? 'selected' : ''
                                    }}>Female</option>
                            </select>
                        </div>
                        
                    </div>
                    <div class="form-group mb-0 mt-4 row ">
                        <div class="col-md-9">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- End:: row-1 -->
@endsection