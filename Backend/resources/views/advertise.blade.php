@extends('base')

@section('Advertise-Selected-Class') active open @endsection
@section('Advertise-Selected-Span') <span class="selected"></span> @endsection

@section('title') Advertisements @endsection

@section('content')
<!-- BEGIN EXAMPLE TABLE PORTLET-->

<div class="table-toolbar">
    <div class="row">
        <div class="col-md-6">
            <div class="btn-group">
                <button id="sample_editable_1_new" class="btn sbold green" onclick="showAdvertiseModal()">
                        Add New
                    <i class="fa fa-plus"></i>
                </button>
            </div>
        </div>
    </div>
</div>

<table class="table table-striped table-bordered table-hover table-checkable order-column dataTable no-footer" id="sample_1" role="grid" aria-describedby="sample_1_info">
    <thead>
        <tr role="row">
            <th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label=" Name : activate to sort column descending"
                style="width: 162px;"> Name </th>
            <th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label=" Type : activate to sort column ascending"
                style="width: 244px;">
                Type </th>
            <th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label=" URL : activate to sort column ascending"
                style="width: 131px;">
                URL </th>
            <th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label=" Point : activate to sort column ascending"
                style="width: 124px;">
                Image </th>
            <th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label=" Point : activate to sort column ascending"
                style="width: 124px;">
                Point </th>
            <th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label=" Action : activate to sort column ascending"
                style="width: 127px;">
                Action </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $one)
        <tr class="gradeX {{($loop->index % 2)?'odd':'even'}} {{$one['id']}}" role="row">
            <td class="sorting_1">{{$one['name']}}</td>
            <td>{{($one['adType']==1)?'Full Screen':'320*200'}}</td>
            <td>{{$one['adURL']}}</td>
            <td class="center">
                <a href="{{$one['adImage']}}"><img src="{{$one['adImage']}}" alt="" style="height:30px;">
            </td>
            <td>{{$one['adTime']}}</td>
            <td>
                <a class="btn menu-icon vd_yellow" data-placement="top" data-toggle="tooltip" data-original-title="edit" onclick="editAdvertise('{{$one['id']}}')">
                <i class="fa fa-pencil"></i> </a>
                <a class="btn menu-icon vd_red " data-placement="top" data-toggle="tooltip" data-original-title="delete" onclick="removeAdvertise('{{$one['id']}}')"><i class="fa fa-times"></i> </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- END EXAMPLE TABLE PORTLET-->
@endsection

@section('dialog')
<div id="advertiseModal" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-mm" style="min-width: 1000px!important;">
        <form id="form_modal" class="form-horizontal form-label-left" novalidate method="POST" enctype="multipart/form-data" action="/saveAdvertise">
            {{ csrf_field() }}
            <input type="hidden" id="id" name="id" value="">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                    <h4 class="modal-title" id="title_modal">Title</h4>
                </div>
                <div class="modal-body">
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
                    </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <input id="name" name="name" class="form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Type <span class="required">*</span>
                    </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <!-- <input id="adType" name="adType" class="form-control col-md-7 col-xs-12" required="required" type="number"> -->
                            <select class="form-control col-md-7 col-xs-12" id="adType" name="adType" onchange="onSelectType();">
                        <option value=1>Full Screen</option>
                        <option value=2>320*200</option>
                    </select>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">URL <span class="required">*</span>
                    </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <input id="adURL" name="adURL" class="form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="adTime">Point <span class="required">*</span>
                    </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <!-- <input id="adTime" name="adTime" class="form-control col-md-7 col-xs-12" required="required" type="number"> -->
                            <input type="number" min="0" class="form-control col-md-7 col-xs-12" id="adTime" name="adTime">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Image <span class="required">*</span>
                    </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <!-- <input id="car_detail" class="form-control col-md-7 col-xs-12" name="car_detail" required="required" type="text"> -->
                            <!-- <img id="previewImg" src="" alt="" style="width: 100%; display: block;"> -->
                            <input type="file" id="file" name="file" accept="image/*">
                        </div>
                    </div>
                    <div class="item form-group">
                        <div class="container cropper">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="img-container">
                                        <img id="image" src="" alt="Picture">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="docs-preview clearfix">
                                        <div class="img-preview preview-lg" style="margin:50% auto;float: none;"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" id="btn_ok" onclick="saveAdvertise()">OK</button>
                    </div>
                </div>
        </form>
        </div>
    </div>
@endsection
