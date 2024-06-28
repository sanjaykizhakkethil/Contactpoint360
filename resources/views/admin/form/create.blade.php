@extends('layouts.admin')
@section('content')
<!-- Page Header -->
<div class="page-header">
    <div class="page-leftheader">
        <h4 class="page-title mb-0 text-primary">Form</h4>
    </div>
    <div class="page-rightheader">
        <a href="{{route('form.index')}}"><button class="btn btn-outline-primary"><i class="fa fa-plus me-2"></i>
                Back</button>
        </a>
    </div>
</div>
<x-alert />
<div class="row">
    <div class="col-xl-12">
        <form action="{{route('form.store')}}" method="POST">
            @csrf
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
                            <input type="text" class="form-control" id="input" name="form_name" placeholder="Enter Name">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <label for="input-label" class="form-label">phone</label>
                            <input type="number" class="form-control" id="input-label" name="form_phone" placeholder="Enter Phone Number">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <label for="input-label" class="form-label">Gender</label>
                            <select type="text" class="form-control select2-show-search" id="input-label" name="form_gender" placeholder="Enter Gender">
                                <option selected disabled>Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
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
@endsection