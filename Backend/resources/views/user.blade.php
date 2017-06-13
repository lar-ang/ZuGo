@extends('base')

@section('User-Selected-Class') active open @endsection
@section('User-Selected-Span') <span class="selected"></span> @endsection

@section('title') Users @endsection

@section('content')
<!-- BEGIN EXAMPLE TABLE PORTLET-->
<!-- Temp
<div class="table-toolbar">
    <div class="row">
        <div class="col-md-6">
            <div class="btn-group">
                <button id="sample_editable_1_new" class="btn sbold green" onclick="showEditModal()">
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
            <th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label=" Point : activate to sort column ascending"
                style="width: 124px;">
                Verified </th>
<!--  Temp          <th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label=" Action : activate to sort column ascending"
                style="width: 127px;">
                Action </th>-->
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $one)
        <tr class="gradeX {{($loop->index % 2)?'odd':'even'}} {{$one['id']}}" role="row">
            <td class="sorting_1">{{$one['displayName']}}</td>
            <td>{{$one['email']}}</td>
            <td>{{$one['Location']}}</td>
            <td style="text-align:center">
                <input type="checkbox" class="checkboxes" value="{{$one['verifiedAccount']}}" @if ($one['verifiedAccount'])checked @endif onchange="verifyUser('{{$one['id']}}')" disabled>
                <span style="display:none">{{$one['verifiedAccount']}}</span>
            </td>
<!--   Temp         <td>
                <a class="btn menu-icon vd_yellow" data-placement="top" data-toggle="tooltip" data-original-title="edit" onclick="editUser('{{$one['id']}}')">
                <i class="fa fa-pencil"></i> </a>
                <a class="btn menu-icon vd_red " data-placement="top" data-toggle="tooltip" data-original-title="delete" onclick="removeUser('{{$one['id']}}')"><i class="fa fa-times"></i> </a>
            </td>-->
        </tr>
        @endforeach
    </tbody>
</table>

<!-- END EXAMPLE TABLE PORTLET-->
@endsection