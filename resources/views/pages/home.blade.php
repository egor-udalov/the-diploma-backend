@extends('layouts.default')


@section('head')
    <title>
        Diploma project
    </title>
    <meta name="description" content="Analytics Dashboard">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <!-- Call App Mode on ios devices -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no">
    <!-- base css -->
@endsection('head')



@section('content')
    <ol class="breadcrumb page-breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Time Traker</a></li>
        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol>
    <div class="subheader">
        <h1 class="subheader-title">
            <i class='subheader-icon fal fa-chart-area'></i> Analytics <span class='fw-300'>Dashboard</span>
        </h1>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div id="panel-1" class="panel panel-locked" data-panel-lock="false" data-panel-close="false" data-panel-fullscreen="false" data-panel-collapsed="false" data-panel-color="false" data-panel-locked="false" data-panel-refresh="false" data-panel-reset="false">
                <div class="panel-hdr">
                    <h2>
                        Live Feeds
                    </h2>
                    <div class="panel-toolbar pr-3 align-self-end">
                        <ul id="demo_panel-tabs" class="nav nav-tabs border-bottom-0 nav-tabs-clean" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tab_default-1" role="tab">Live Stats</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab_default-2" role="tab">Revenue</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content border-faded border-left-0 border-right-0 border-top-0">
                        <div class="row no-gutters">
                            <div class="col-lg-7 col-xl-8">
                                <div class="position-relative">
                                    <div class="custom-control custom-switch position-absolute pos-top pos-left ml-5 mt-3 z-index-cloud">
                                        <input type="checkbox" class="custom-control-input" id="start_interval">
                                        <label class="custom-control-label" for="start_interval">Live Update</label>
                                    </div>
                                    <div id="updating-chart" style="height:242px"></div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-xl-4 pl-lg-3">
                                <div class="d-flex mt-2">
                                    My Tasks
                                    <span class="d-inline-block ml-auto">130 / 500</span>
                                </div>
                                <div class="progress progress-sm mb-3">
                                    <div class="progress-bar bg-fusion-400" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex">
                                    Transfered
                                    <span class="d-inline-block ml-auto">440 TB</span>
                                </div>
                                <div class="progress progress-sm mb-3">
                                    <div class="progress-bar bg-success-500" role="progressbar" style="width: 34%;" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex">
                                    Bugs Squashed
                                    <span class="d-inline-block ml-auto">77%</span>
                                </div>
                                <div class="progress progress-sm mb-3">
                                    <div class="progress-bar bg-info-400" role="progressbar" style="width: 77%;" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex">
                                    User Testing
                                    <span class="d-inline-block ml-auto">7 days</span>
                                </div>
                                <div class="progress progress-sm mb-g">
                                    <div class="progress-bar bg-primary-300" role="progressbar" style="width: 84%;" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-6 pr-1">
                                        <a href="#" class="btn btn-default btn-block">Generate PDF</a>
                                    </div>
                                    <div class="col-6 pl-1">
                                        <a href="#" class="btn btn-default btn-block">Report a Bug</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-content p-0">
                        <div class="row row-grid no-gutters">
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="px-3 py-2 d-flex align-items-center">
                                    <div class="js-easy-pie-chart color-primary-300 position-relative d-inline-flex align-items-center justify-content-center" data-percent="75" data-piesize="50" data-linewidth="5" data-linecap="butt" data-scalelength="0">
                                        <div class="d-flex flex-column align-items-center justify-content-center position-absolute pos-left pos-right pos-top pos-bottom fw-300 fs-lg">
                                            <span class="js-percent d-block text-dark"></span>
                                        </div>
                                    </div>
                                    <span class="d-inline-block ml-2 text-muted">
                                        SERVER LOAD
                                        <i class="fal fa-caret-up color-danger-500 ml-1"></i>
                                    </span>
                                    <div class="ml-auto d-inline-flex align-items-center">
                                        <div class="sparklines d-inline-flex" sparktype="line" sparkheight="30" sparkwidth="70" sparklinecolor="#886ab5" sparkfillcolor="false" sparklinewidth="1" values="5,6,5,3,8,6,9,7,4,2"></div>
                                        <div class="d-inline-flex flex-column small ml-2">
                                            <span class="d-inline-block badge badge-success opacity-50 text-center p-1 width-6">97%</span>
                                            <span class="d-inline-block badge bg-fusion-300 opacity-50 text-center p-1 width-6 mt-1">44%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="px-3 py-2 d-flex align-items-center">
                                    <div class="js-easy-pie-chart color-success-500 position-relative d-inline-flex align-items-center justify-content-center" data-percent="79" data-piesize="50" data-linewidth="5" data-linecap="butt">
                                        <div class="d-flex flex-column align-items-center justify-content-center position-absolute pos-left pos-right pos-top pos-bottom fw-300 fs-lg">
                                            <span class="js-percent d-block text-dark"></span>
                                        </div>
                                    </div>
                                    <span class="d-inline-block ml-2 text-muted">
                                        DISK SPACE
                                        <i class="fal fa-caret-down color-success-500 ml-1"></i>
                                    </span>
                                    <div class="ml-auto d-inline-flex align-items-center">
                                        <div class="sparklines d-inline-flex" sparktype="line" sparkheight="30" sparkwidth="70" sparklinecolor="#1dc9b7" sparkfillcolor="false" sparklinewidth="1" values="5,9,7,3,5,2,5,3,9,6"></div>
                                        <div class="d-inline-flex flex-column small ml-2">
                                            <span class="d-inline-block badge badge-info opacity-50 text-center p-1 width-6">76%</span>
                                            <span class="d-inline-block badge bg-warning-300 opacity-50 text-center p-1 width-6 mt-1">3%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="px-3 py-2 d-flex align-items-center">
                                    <div class="js-easy-pie-chart color-info-500 position-relative d-inline-flex align-items-center justify-content-center" data-percent="23" data-piesize="50" data-linewidth="5" data-linecap="butt">
                                        <div class="d-flex flex-column align-items-center justify-content-center position-absolute pos-left pos-right pos-top pos-bottom fw-300 fs-lg">
                                            <span class="js-percent d-block text-dark"></span>
                                        </div>
                                    </div>
                                    <span class="d-inline-block ml-2 text-muted">
                                        DATA TTF
                                        <i class="fal fa-caret-up color-success-500 ml-1"></i>
                                    </span>
                                    <div class="ml-auto d-inline-flex align-items-center">
                                        <div class="sparklines d-inline-flex" sparktype="line" sparkheight="30" sparkwidth="70" sparklinecolor="#51adf6" sparkfillcolor="false" sparklinewidth="1" values="3,5,2,5,3,9,6,5,9,7"></div>
                                        <div class="d-inline-flex flex-column small ml-2">
                                            <span class="d-inline-block badge bg-fusion-500 opacity-50 text-center p-1 width-6">10GB</span>
                                            <span class="d-inline-block badge bg-fusion-300 opacity-50 text-center p-1 width-6 mt-1">10%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="px-3 py-2 d-flex align-items-center">
                                    <div class="js-easy-pie-chart color-fusion-500 position-relative d-inline-flex align-items-center justify-content-center" data-percent="36" data-piesize="50" data-linewidth="5" data-linecap="butt">
                                        <div class="d-flex flex-column align-items-center justify-content-center position-absolute pos-left pos-right pos-top pos-bottom fw-300 fs-lg">
                                            <span class="js-percent d-block text-dark"></span>
                                        </div>
                                    </div>
                                    <span class="d-inline-block ml-2 text-muted">
                                        TEMP.
                                        <i class="fal fa-caret-down color-success-500 ml-1"></i>
                                    </span>
                                    <div class="ml-auto d-inline-flex align-items-center">
                                        <div class="sparklines d-inline-flex" sparktype="line" sparkheight="30" sparkwidth="70" sparklinecolor="#fd3995" sparkfillcolor="false" sparklinewidth="1" values="5,3,9,6,5,9,7,3,5,2"></div>
                                        <div class="d-inline-flex flex-column small ml-2">
                                            <span class="d-inline-block badge badge-danger opacity-50 text-center p-1 width-6">124</span>
                                            <span class="d-inline-block badge bg-info-300 opacity-50 text-center p-1 width-6 mt-1">40F</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div id="panel-3" class="panel">
                <div class="panel-hdr">
                    <h2 class="js-get-date"></h2>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div id="calendar"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div id="panel-5" class="panel">
                <div class="panel-hdr">
                    <h2>Subscriptions Hourly</h2>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <h5>Subscription Views / hour</h5>
                        <div id="flotBar1" style="width: 100%; height: 160px;"></div>
                    </div>
                </div>
            </div>
            <div id="panel-6" class="panel">
                <div class="panel-hdr">
                    <h2>Secession Scale </h2>
                </div>
                <div class="panel-container show">
                    <div class="panel-content p-0 mb-g">
                        <div class="alert alert-success alert-dismissible fade show border-faded border-left-0 border-right-0 border-top-0 rounded-0 m-0" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="fal fa-times"></i></span>
                            </button>
                            <strong>Last update was on <span class="js-get-date"></span></strong> - Your logs are all up to date.
                        </div>
                    </div>
                    <div class="panel-content">
                        <div class="row  mb-g">
                            <div class="col-md-6 d-flex align-items-center">
                                <div id="flotPie" class="w-100" style="height:250px"></div>
                            </div>
                            <div class="col-md-6 col-lg-5 mr-lg-auto">
                                <div class="d-flex mt-2 mb-1 fs-xs text-primary">
                                    Current Usage
                                </div>
                                <div class="progress progress-xs mb-3">
                                    <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex mt-2 mb-1 fs-xs text-info">
                                    Net Usage
                                </div>
                                <div class="progress progress-xs mb-3">
                                    <div class="progress-bar bg-info-500" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex mt-2 mb-1 fs-xs text-warning">
                                    Users blocked
                                </div>
                                <div class="progress progress-xs mb-3">
                                    <div class="progress-bar bg-warning-500" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex mt-2 mb-1 fs-xs text-danger">
                                    Custom cases
                                </div>
                                <div class="progress progress-xs mb-3">
                                    <div class="progress-bar bg-danger-500" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex mt-2 mb-1 fs-xs text-success">
                                    Test logs
                                </div>
                                <div class="progress progress-xs mb-3">
                                    <div class="progress-bar bg-success-500" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex mt-2 mb-1 fs-xs text-dark">
                                    Uptime records
                                </div>
                                <div class="progress progress-xs mb-3">
                                    <div class="progress-bar bg-fusion-500" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection