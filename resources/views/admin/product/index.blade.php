@extends('admin.layout.master')
@section('title', 'product list-')
@push('css_link')
    <!-- Bootstrap -->
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

    <!-- Datatables -->

    <link href="{{ asset('admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('admin/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">
@endpush
@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>User List</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <a class="btn btn-primary btn-sm " href="{{ route('product.create') }}">{{ __('Create Product') }}</a>

                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>

                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">

                            <table id="datatable-responsive"
                                class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
                                width="100%">
                                <thead>
                                    <tr>
                                        <th>sl</th>
                                        <th>Name</th>
                                        <th>photo</th>
                                        <th>Description</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <th>{{ $loop->iteration }}</th>
                                            <th>{{ $product->name }}</th>
                                            <th>
                                                <img src="{{ asset('storage/' . $product->image) }}"
                                                    alt="{{ __('image') }}" width="50px" height="50px">
                                            </th>

                                            <th>{{ $product->descriptioin }}</th>
                                            <th>
                                                <div class="btn-group" role="group">
                                                    <a href="{{route('product.view',$product->id)}}" class="btn btn-success btn-sm">view</a>
                                                    <a href="{{Route('product.edit',$product->id)}}" class="btn btn-info btn-sm">Edit</a>
                                                    <a href="{{Route('product.delete',$product->id)}}" class="btn btn-warning btn-sm">Delete</a>
                                                </div>
                                            </th>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
@push('js_link')
<!-- Datatables -->
<script src=" {{ asset('admin/vendors/datatables.net/js/jquery.dataTables.min.js ') }}"></script>
<script src="{{ asset('admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('admin/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
<script src="{{ asset('admin/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('admin/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('admin/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
<script src="{{ asset('admin/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
<script src="{{ asset('admin/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('admin/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
<script src="{{ asset('admin/vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>
<script src="{{ asset('admin/vendors/jszip/dist/jszip.min.js') }}"></script>
<script src="{{ asset('admin/vendors/pdfmake/build/pdfmake.min.js') }}"></script>
<script src="{{ asset('admin/vendors/pdfmake/build/vfs_fonts.js') }}"></script>
@endpush
