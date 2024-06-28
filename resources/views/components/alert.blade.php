@if(session()->has('success'))
<div class="col-lg-12">
    <div class="alert alert-success" role="alert"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
        <i class="fa fa-check-circle-o me-2" aria-hidden="true"></i> {{Session::get('success')}}
    </div>

</div>
@endif
@if(session()->has('danger'))
<div class="col-lg-12">

    <div class="alert alert-danger" role="alert"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
        <i class="fa fa-check-circle-o me-2" aria-hidden="true"></i> {{Session::get('danger')}}
    </div>


</div>
@endif
@if(session()->has('error'))
<div class="col-lg-12">

    <div class="alert alert-danger" role="alert"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
        <i class="fa fa-check-circle-o me-2" aria-hidden="true"></i> {{Session::get('error')}}
    </div>


</div>
@endif  