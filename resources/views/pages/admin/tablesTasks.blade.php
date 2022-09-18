@extends('layouts.'.$template)

@section('content')

<?php
// dd($_GET);
?>

<!-- BEGIN Page Content -->
<!-- the #js-page-content id is needed for some plugins to initialize -->
<main id="js-page-content" role="main" class="page-content">
    <ol class="breadcrumb page-breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">SmartAdmin</a></li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active">User tasks</li>
        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol>
    <div class="subheader">
        <h1 class="subheader-title">
            <i class='fal fa-th-list text-primary'></i>
            @foreach($users as $user)
                @if($user->id == $_GET['id'])
                    <a href="{{ route('tablesUsers') }}">{{ $user->name }} tasks</a>
                @endif
            @endforeach
        </h1>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card mb-g">
                <div class="card-body">
                    <div class="frame-wrap p-0 border-0 m-0">
                        <table class="table m-0 table-bordered" id="table-example">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Beginning Time</th>
                                    <th>Ending Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tasks as $task)
                                <tr>
                                @if($task->user_id == $_GET['id'])
                                    <td>{{ $task->id }}</td>
                                    <td>{{ $task->name }}</td>
                                    <td>{{ $task->begining_time }}</td>
                                    <td>{{ $task->ending_time }}</td>
                                @endif
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- this overlay is activated only when mobile menu is triggered -->
<div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div> <!-- END Page Content -->

@endsection