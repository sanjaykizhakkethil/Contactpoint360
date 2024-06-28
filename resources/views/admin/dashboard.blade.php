@extends('layouts.admin')
@section('content')

<div class="page-header">
    <div class="page-leftheader">
        <h4 class="page-title mb-0 text-primary">Welcome Admin Dashboard</h4>
    </div>

</div>
<div class="row">
    <div class="col-xxl-3 col-lg-6 col-md-6 col-xm-12">
        <div class="card overflow-hidden dash1-card border-0 dash1">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-6">
                        <div>
                            <span class="fs-14 fw-normal text-fixed-white">Total Form</span>
                            <h3 class="mb-2 mt-1 text-fixed-white carn2"></h3>


                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-6 my-auto ms-auto text-end">
                        <div id="btc-chart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-lg-6 col-md-6 col-xm-12">
        <div class="card overflow-hidden dash1-card border-0 dash2">

           
        </div>
    </div>
</div>
@endsection