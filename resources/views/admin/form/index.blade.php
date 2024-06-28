@extends('layouts.admin')
@section('content')
<div class="page-header">
    <div class="page-leftheader">
        <h4 class="page-title mb-0 text-primary">Form </h4>
    </div>
    <div class="page-rightheader">
        <a href="{{route('form.create')}}"><button class="btn btn-outline-primary"><i class="fa fa-plus me-2"></i>
                Add New</button>
        </a>
    </div>
</div>
<x-alert />
<div class="row">
    <div class="col-xl-12">
        <div class="card custom-card">
            <div class="card-header">
                <div class="card-title">
                    Form List

                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable-basic" class="table table-bordered text-nowrap w-100">
                        <thead>
                            <tr>
                                <th>Slno</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Gender</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1; @endphp
                            @foreach($result as $val)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$val->form_name}}</td>
                                <td>{{$val->form_phone}}</td>
                                <td>{{$val->form_gender}}</td>
                                <td>
                                    <form method="post" action="{{route('form.destroy',$val->form_id)}}">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <a href="{{route('form.edit',$val->form_id)}}" class="btn bg-success-transparent"><i class="ri-edit-line"></i></a>
                                        <button type="submit" class="btn bg-danger-transparent"><i class="fe fe-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @php $i++; @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- Internal Scripts :: Datatable -->
@push('scripts')
<!-- INTERNAL Data tables -->
<script src="{{asset('admin/assets/plugins/datatables/DataTables/js/jquery.dataTables.js') }}"></script>
<script src="{{asset('admin/assets/plugins/datatables/DataTables/js/dataTables.bootstrap5.js') }}"></script>
<script src="{{asset('admin/assets/plugins/datatables/Buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{asset('admin/assets/plugins/datatables/Buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{asset('admin/assets/plugins/datatables/JSZip/jszip.min.js') }}"></script>
<script src="{{asset('admin/assets/plugins/datatables/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{asset('admin/assets/plugins/datatables/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{asset('admin/assets/plugins/datatables/Buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{asset('admin/assets/plugins/datatables/Buttons/js/buttons.print.min.js') }}"></script>
<script src="{{asset('admin/assets/plugins/datatables/Buttons/js/buttons.colVis.min.js') }}"></script>
<script src="{{asset('admin/assets/plugins/datatables/Responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{asset('admin/assets/plugins/datatables/Responsive/js/responsive.bootstrap5.min.js') }}"></script>
<script src="{{asset('admin/assets/js/datatables.js') }}"></script>
@endpush