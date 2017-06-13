@extends('base')

@section('User-Selected-Class') active open @endsection
@section('User-Selected-Span') <span class="selected"></span> @endsection

@section('title') Users @endsection

@section('content')
<!-- BEGIN EXAMPLE TABLE PORTLET-->
<!--
<div class="table-toolbar">
    <div class="row">
        <div class="col-md-6">
            <div class="btn-group">
                <button id="sample_editable_1_new" class="btn sbold green" onclick="showUserModal()">
                        Add New
                    <i class="fa fa-plus"></i>
                </button>
            </div>
        </div>
    </div>
</div>
-->
<table class="table table-striped table-bordered table-hover table-checkable order-column dataTable no-footer" id="sample_1" role="grid" aria-describedby="sample_1_info">
    <thead>
        <tr role="row">
            <th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label=" Name : activate to sort column descending"
                style="width: 162px;"> Name </th>
            <th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label=" Type : activate to sort column ascending"
                style="width: 244px;">
                Email </th>
            <th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label=" URL : activate to sort column ascending"
                style="width: 131px;">
                Location </th>
            <th class="sorting text-center" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label=" Point : activate to sort column ascending"
                style="width: 40px;">
                Point </th>
            <th class="sorting text-center" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label=" Verified : activate to sort column ascending"
                style="width: 60px;">
                Verified </th>
            <th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label=" Action : activate to sort column ascending"
                style="width: 50px;">
                Action </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $one)
        <tr class="gradeX {{($loop->index % 2)?'odd':'even'}} {{$one['id']}}" role="row">
            <td class="sorting_1">{{$one['displayName']}}</td>
            <td>{{$one['email']}}</td>
            <td>{{$one['Location']}}</td>
            <td class="text-center">{{$one['point']}}</td>
            <td class="text-center">@if ($one['verifiedAccount'])
                <span class="label label-success"> Verified </span>
                @endif</td>
            <td>
                <a class="btn menu-icon vd_yellow" data-placement="top" data-toggle="tooltip" data-original-title="edit" onclick="editUser('{{$one['id']}}')">
                <i class="fa fa-pencil"></i> </a>
                <a class="btn menu-icon vd_red " data-placement="top" data-toggle="tooltip" data-original-title="delete" onclick="removeUser('{{$one['id']}}')"><i class="fa fa-times"></i> </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- END EXAMPLE TABLE PORTLET-->
@endsection

@section('dialog')
<div id="userModal" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-mm">
        <form id="form_modal" class="form-horizontal form-label-left" novalidate method="POST" enctype="multipart/form-data" action="/saveUser">
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">
                            Name
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <input id="name" name="name" class="form-control col-md-7 col-xs-12" type="text" disabled>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">
                            Email
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <input id="email" name="email" class="form-control col-md-7 col-xs-12" type="text" disabled>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="location">
                            Location
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <input id="location" name="location" class="form-control col-md-7 col-xs-12" type="text" disabled>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="point">
                            Point
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <input id="point" name="point" class="form-control col-md-7 col-xs-12" type="number" min="0">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="verification">
                            Verification
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <input type="checkbox" class="form-control checkbox" id="verification" name="verification">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" id="btn_ok" onclick="saveUser()">OK</button>
                    </div>
                </div>
        </form>
    </div>
</div>
@endsection
