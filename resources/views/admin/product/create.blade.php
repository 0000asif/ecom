@extends('admin.layout.master')
@section('title', 'Create Product-')
@section('content')

    <div class="">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Create Product</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <a class="btn btn-primary btn-sm " href="{{route('product.index')}}" >{{__('Back')}}</a>
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form enctype="multipart/form-data" action="{{route('product.store')}}" method="POST" novalidate>
                            @csrf
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Name<span
                                        class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" data-validate-length-range="6" data-validate-words="2"
                                        name="name" value="{{old('name')}}" required="required" />
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">photo</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" class='optional' name="image"
                                     type="file"/>
                                </div>
                            </div>



                             <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Description</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" value="{{old('description')}}" class='optional' name="description"
                                     type="text" row="10"/>
                                </div>
                            </div>
                            <div class="ln_solid">
                                <div class="form-group">
                                    <div class="col-md-6 offset-md-3">
                                        <button type='submit' class="btn btn-primary">Submit</button>
                                        <button type='reset' class="btn btn-success">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
