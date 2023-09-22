@extends('layouts.master')

@section('title')
{{__('ecommerce')}}
@endsection

@section('css')
<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/vendors-rtl.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/file-uploaders/dropzone.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{asset('app-assets/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css')}}">
<!-- END: Vendor CSS-->
<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/core/colors/palette-gradient.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/plugins/file-uploaders/dropzone.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/pages/data-list-view.css')}}">
<!-- END: Page CSS-->
<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/charts/apexcharts.css')}}">
<!-- END: Vendor CSS-->
<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/pages/dashboard-ecommerce.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/pages/card-analytics.css')}}">
<!-- END: Page CSS-->
@endsection


@section('content')
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- Dashboard Ecommerce Starts -->
            <section id="dashboard-ecommerce">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-header d-flex flex-column align-items-start pb-0">
                                <div class="avatar bg-rgba-primary p-50 m-0">
                                    <div class="avatar-content">
                                        <i class="feather icon-users text-primary font-medium-5"></i>
                                    </div>
                                </div>
                                <h2 class="text-bold-700 mt-1">92.6k</h2>
                                <p class="mb-0">Subscribers Gained</p>
                            </div>
                            <div class="card-content">
                                <div id="line-area-chart-1"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-header d-flex flex-column align-items-start pb-0">
                                <div class="avatar bg-rgba-success p-50 m-0">
                                    <div class="avatar-content">
                                        <i class="feather icon-credit-card text-success font-medium-5"></i>
                                    </div>
                                </div>
                                <h2 class="text-bold-700 mt-1">97.5k</h2>
                                <p class="mb-0">Revenue Generated</p>
                            </div>
                            <div class="card-content">
                                <div id="line-area-chart-2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-header d-flex flex-column align-items-start pb-0">
                                <div class="avatar bg-rgba-danger p-50 m-0">
                                    <div class="avatar-content">
                                        <i class="feather icon-shopping-cart text-danger font-medium-5"></i>
                                    </div>
                                </div>
                                <h2 class="text-bold-700 mt-1">36%</h2>
                                <p class="mb-0">Quarterly Sales</p>
                            </div>
                            <div class="card-content">
                                <div id="line-area-chart-3"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-header d-flex flex-column align-items-start pb-0">
                                <div class="avatar bg-rgba-warning p-50 m-0">
                                    <div class="avatar-content">
                                        <i class="feather icon-package text-warning font-medium-5"></i>
                                    </div>
                                </div>
                                <h2 class="text-bold-700 mt-1">97.5K</h2>
                                <p class="mb-0">Orders Received</p>
                            </div>
                            <div class="card-content">
                                <div id="line-area-chart-4"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-sm-6 col-12">
                        <div class="content-body">
                            <!-- Data list view starts -->
                            <section id="data-thumb-view" class="data-thumb-view-header">
                                <div class="action-btns d-none">
                                    <div class="btn-dropdown mr-1 mb-1">
                                        <div class="btn-group dropdown actions-dropodown">
                                            <button type="button"
                                                class="btn btn-white px-1 py-1 dropdown-toggle waves-effect waves-light"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Actions
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"><i
                                                        class="feather icon-trash"></i>Delete</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="feather icon-archive"></i>Archive</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="feather icon-file"></i>Print</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="feather icon-save"></i>Another Action</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- dataTable starts -->
                                <div class="table-responsive">
                                    <table class="table data-thumb-view">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Image</th>
                                                <th>NAME</th>
                                                <th>CATEGORY</th>
                                                <th>POPULARITY</th>
                                                <th>ORDER STATUS</th>
                                                <th>PRICE</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td class="product-img"><img
                                                        src="../../../app-assets/images/elements/apple-watch.png"
                                                        alt="Img placeholder">
                                                </td>
                                                <td class="product-name">Apple Watch series 4 GPS</td>
                                                <td class="product-category">Computers</td>
                                                <td>
                                                    <div class="progress progress-bar-success">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="40"
                                                            aria-valuemin="40" aria-valuemax="100" style="width:97%">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="chip chip-warning">
                                                        <div class="chip-body">
                                                            <div class="chip-text">on hold</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="product-price">$69.99</td>
                                                <td class="product-action">
                                                    <span class="action-edit"><i class="feather icon-edit"></i></span>
                                                    <span class="action-delete"><i
                                                            class="feather icon-trash"></i></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td class="product-img"><img
                                                        src="../../../app-assets/images/elements/magic-mouse.png"
                                                        alt="Img placeholder">
                                                </td>
                                                <td class="product-name">Beats HeadPhones</td>
                                                <td class="product-category">Computers</td>
                                                <td>
                                                    <div class="progress progress-bar-primary">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="40"
                                                            aria-valuemin="40" aria-valuemax="100" style="width:83%">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="chip chip-success">
                                                        <div class="chip-body">
                                                            <div class="chip-text">Delivered</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="product-price">$69.99</td>
                                                <td class="product-action">
                                                    <span class="action-edit"><i class="feather icon-edit"></i></span>
                                                    <span class="action-delete"><i
                                                            class="feather icon-trash"></i></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td class="product-img"><img
                                                        src="../../../app-assets/images/elements/iphone-x.png"
                                                        alt="Img placeholder">
                                                </td>
                                                <td class="product-name">Altec Lansing - Bluetooth Speaker</td>
                                                <td class="product-category">Audio</td>
                                                <td>
                                                    <div class="progress progress-bar-warning">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="40"
                                                            aria-valuemin="40" aria-valuemax="100" style="width:57%">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="chip chip-danger">
                                                        <div class="chip-body">
                                                            <div class="chip-text">canceled</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="product-price">$199.99</td>
                                                <td class="product-action">
                                                    <span class="action-edit"><i class="feather icon-edit"></i></span>
                                                    <span class="action-delete"><i
                                                            class="feather icon-trash"></i></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td class="product-img"><img
                                                        src="../../../app-assets/images/elements/ipad-pro.png"
                                                        alt="Img placeholder">
                                                </td>
                                                <td class="product-name">Aluratek - Bluetooth Audio Receiver</td>
                                                <td class="product-category">Computers</td>
                                                <td>
                                                    <div class="progress progress-bar-warning">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="40"
                                                            aria-valuemin="40" aria-valuemax="100" style="width:65%">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="chip chip-warning">
                                                        <div class="chip-body">
                                                            <div class="chip-text">on hold</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="product-price">$29.99</td>
                                                <td class="product-action">
                                                    <span class="action-edit"><i class="feather icon-edit"></i></span>
                                                    <span class="action-delete"><i
                                                            class="feather icon-trash"></i></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td class="product-img"><img
                                                        src="../../../app-assets/images/elements/jbl-speaker.png"
                                                        alt="Img placeholder">
                                                </td>
                                                <td class="product-name">Aluratek - Bluetooth Audio Transmitter</td>
                                                <td class="product-category">Audio</td>
                                                <td>
                                                    <div class="progress progress-bar-warning">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="40"
                                                            aria-valuemin="40" aria-valuemax="100" style="width:87%">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="chip chip-danger">
                                                        <div class="chip-body">
                                                            <div class="chip-text">canceled</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="product-price">$199.99</td>
                                                <td class="product-action">
                                                    <span class="action-edit"><i class="feather icon-edit"></i></span>
                                                    <span class="action-delete"><i
                                                            class="feather icon-trash"></i></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td class="product-img"><img
                                                        src="../../../app-assets/images/elements/beats-headphones.png"
                                                        alt="Img placeholder">
                                                </td>
                                                <td class="product-name">Basis - Peak Fitness and Sleep Tracker</td>
                                                <td class="product-category">Fitness</td>
                                                <td>
                                                    <div class="progress progress-bar-primary">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="40"
                                                            aria-valuemin="40" aria-valuemax="100" style="width:47%">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="chip chip-warning">
                                                        <div class="chip-body">
                                                            <div class="chip-text">on hold</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="product-price">$199.99</td>
                                                <td class="product-action">
                                                    <span class="action-edit"><i class="feather icon-edit"></i></span>
                                                    <span class="action-delete"><i
                                                            class="feather icon-trash"></i></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td class="product-img"><img
                                                        src="../../../app-assets/images/elements/homepod.png"
                                                        alt="Img placeholder">
                                                </td>
                                                <td class="product-name">Antec - Nano Diamond Thermal Compound</td>
                                                <td class="product-category">Fitness</td>
                                                <td>
                                                    <div class="progress progress-bar-warning">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="40"
                                                            aria-valuemin="40" aria-valuemax="100" style="width:55%">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="chip chip-primary">
                                                        <div class="chip-body">
                                                            <div class="chip-text">pending</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="product-price">$29.99</td>
                                                <td class="product-action">
                                                    <span class="action-edit"><i class="feather icon-edit"></i></span>
                                                    <span class="action-delete"><i
                                                            class="feather icon-trash"></i></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td class="product-img"><img
                                                        src="../../../app-assets/images/elements/macbook-pro.png"
                                                        alt="Img placeholder">
                                                </td>
                                                <td class="product-name">Antec - SmartBean Bluetooth Adapter</td>
                                                <td class="product-category">Computer</td>
                                                <td>
                                                    <div class="progress progress-bar-warning">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="40"
                                                            aria-valuemin="40" aria-valuemax="100" style="width:63%">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="chip chip-danger">
                                                        <div class="chip-body">
                                                            <div class="chip-text">canceled</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="product-price">$39.99</td>
                                                <td class="product-action">
                                                    <span class="action-edit"><i class="feather icon-edit"></i></span>
                                                    <span class="action-delete"><i
                                                            class="feather icon-trash"></i></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td class="product-img"><img
                                                        src="../../../app-assets/images/elements/beats-headphones.png"
                                                        alt="Img placeholder">
                                                </td>
                                                <td class="product-name">Beats by Dr. Dre - 3' USB-to-Micro USB
                                                    Cable</td>
                                                <td class="product-category">Computer</td>
                                                <td>
                                                    <div class="progress progress-bar-warning">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="40"
                                                            aria-valuemin="40" aria-valuemax="100" style="width:87%">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="chip chip-success">
                                                        <div class="chip-body">
                                                            <div class="chip-text">delivered</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="product-price">$199.99</td>
                                                <td class="product-action">
                                                    <span class="action-edit"><i class="feather icon-edit"></i></span>
                                                    <span class="action-delete"><i
                                                            class="feather icon-trash"></i></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td class="product-img"><img
                                                        src="../../../app-assets/images/elements/jbl-speaker.png"
                                                        alt="Img placeholder">
                                                </td>
                                                <td class="product-name">Beats by Dr. Dre - Bike Mount for Pill
                                                    Speakers</td>
                                                <td class="product-category">Audio</td>
                                                <td>
                                                    <div class="progress progress-bar-warning">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="40"
                                                            aria-valuemin="40" aria-valuemax="100" style="width:40%">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="chip chip-warning">
                                                        <div class="chip-body">
                                                            <div class="chip-text">delivered</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="product-price">$49.99</td>
                                                <td class="product-action">
                                                    <span class="action-edit"><i class="feather icon-edit"></i></span>
                                                    <span class="action-delete"><i
                                                            class="feather icon-trash"></i></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td class="product-img"><img
                                                        src="../../../app-assets/images/elements/apple-watch.png"
                                                        alt="Img placeholder">
                                                </td>
                                                <td class="product-name">Bose® - SoundLink® Color Bluetooth Speaker
                                                </td>
                                                <td class="product-category">Fitness</td>
                                                <td>
                                                    <div class="progress progress-bar-primary">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="40"
                                                            aria-valuemin="40" aria-valuemax="100" style="width:90%">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="chip chip-primary">
                                                        <div class="chip-body">
                                                            <div class="chip-text">pending</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="product-price">$129.99</td>
                                                <td class="product-action">
                                                    <span class="action-edit"><i class="feather icon-edit"></i></span>
                                                    <span class="action-delete"><i
                                                            class="feather icon-trash"></i></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td class="product-img"><img
                                                        src="../../../app-assets/images/elements/macbook-pro.png"
                                                        alt="Img placeholder">
                                                </td>
                                                <td class="product-name">BRAVEN - Portable Bluetooth Speaker</td>
                                                <td class="product-category">Fitness</td>
                                                <td>
                                                    <div class="progress progress-bar-primary">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="40"
                                                            aria-valuemin="40" aria-valuemax="100" style="width:87%">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="chip chip-warning">
                                                        <div class="chip-body">
                                                            <div class="chip-text">on hold</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="product-price">$199.99</td>
                                                <td class="product-action">
                                                    <span class="action-edit"><i class="feather icon-edit"></i></span>
                                                    <span class="action-delete"><i
                                                            class="feather icon-trash"></i></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td class="product-img"><img
                                                        src="../../../app-assets/images/elements/homepod.png"
                                                        alt="Img placeholder">
                                                </td>
                                                <td class="product-name">Craig - Portable Wireless Speaker</td>
                                                <td class="product-category">Computers</td>
                                                <td>
                                                    <div class="progress progress-bar-danger">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="40"
                                                            aria-valuemin="40" aria-valuemax="100" style="width:20%">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="chip chip-danger">
                                                        <div class="chip-body">
                                                            <div class="chip-text">canceled</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="product-price">$199.99</td>
                                                <td class="product-action">
                                                    <span class="action-edit"><i class="feather icon-edit"></i></span>
                                                    <span class="action-delete"><i
                                                            class="feather icon-trash"></i></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td class="product-img"><img
                                                        src="../../../app-assets/images/elements/apple-watch.png"
                                                        alt="Img placeholder">
                                                </td>
                                                <td class="product-name">Definitive Technology - Wireless Speaker
                                                </td>
                                                <td class="product-category">Fitness</td>
                                                <td>
                                                    <div class="progress progress-bar-primary">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="40"
                                                            aria-valuemin="40" aria-valuemax="100" style="width:75%">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="chip chip-primary">
                                                        <div class="chip-body">
                                                            <div class="chip-text">pending</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="product-price">$399.99</td>
                                                <td class="product-action">
                                                    <span class="action-edit"><i class="feather icon-edit"></i></span>
                                                    <span class="action-delete"><i
                                                            class="feather icon-trash"></i></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td class="product-img"><img
                                                        src="../../../app-assets/images/elements/beats-headphones.png"
                                                        alt="Img placeholder">
                                                </td>
                                                <td class="product-name">Fitbit - Charge HR Activity Tracker + Heart
                                                    Rate (Large)</td>
                                                <td class="product-category">Audio</td>
                                                <td>
                                                    <div class="progress progress-bar-warning">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="40"
                                                            aria-valuemin="40" aria-valuemax="100" style="width:60%">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="chip chip-primary">
                                                        <div class="chip-body">
                                                            <div class="chip-text">pending</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="product-price">$149.99</td>
                                                <td class="product-action">
                                                    <span class="action-edit"><i class="feather icon-edit"></i></span>
                                                    <span class="action-delete"><i
                                                            class="feather icon-trash"></i></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td class="product-img"><img
                                                        src="../../../app-assets/images/elements/magic-mouse.png"
                                                        alt="Img placeholder">
                                                </td>
                                                <td class="product-name">Fitbit - Flex 1" USB Charging Cable</td>
                                                <td class="product-category">Fitness</td>
                                                <td>
                                                    <div class="progress progress-bar-primary">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="40"
                                                            aria-valuemin="40" aria-valuemax="100" style="width:87%">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="chip chip-warning">
                                                        <div class="chip-body">
                                                            <div class="chip-text">on hold</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="product-price">$14.99</td>
                                                <td class="product-action">
                                                    <span class="action-edit"><i class="feather icon-edit"></i></span>
                                                    <span class="action-delete"><i
                                                            class="feather icon-trash"></i></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td class="product-img"><img
                                                        src="../../../app-assets/images/elements/iphone-x.png"
                                                        alt="Img placeholder">
                                                </td>
                                                <td class="product-name">Fitbit - Activity Tracker</td>
                                                <td class="product-category">Fitness</td>
                                                <td>
                                                    <div class="progress progress-bar-danger">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="40"
                                                            aria-valuemin="40" aria-valuemax="100" style="width:35%">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="chip chip-danger">
                                                        <div class="chip-body">
                                                            <div class="chip-text">canceled</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="product-price">$99.99</td>
                                                <td class="product-action">
                                                    <span class="action-edit"><i class="feather icon-edit"></i></span>
                                                    <span class="action-delete"><i
                                                            class="feather icon-trash"></i></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td class="product-img"><img
                                                        src="../../../app-assets/images/elements/ipad-pro.png"
                                                        alt="Img placeholder">
                                                </td>
                                                <td class="product-name">Fitbit - Charge Wireless Activity Tracker
                                                    (Large)</td>
                                                <td class="product-category">Computers</td>
                                                <td>
                                                    <div class="progress progress-bar-primary">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="40"
                                                            aria-valuemin="40" aria-valuemax="100" style="width:87%">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="chip chip-primary">
                                                        <div class="chip-body">
                                                            <div class="chip-text">pending</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="product-price">$129.99</td>
                                                <td class="product-action">
                                                    <span class="action-edit"><i class="feather icon-edit"></i></span>
                                                    <span class="action-delete"><i
                                                            class="feather icon-trash"></i></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td class="product-img"><img
                                                        src="../../../app-assets/images/elements/apple-watch.png"
                                                        alt="Img placeholder">
                                                </td>
                                                <td class="product-name">Craig - Tower Speaker</td>
                                                <td class="product-category">Audio</td>
                                                <td>
                                                    <div class="progress progress-bar-warning">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="40"
                                                            aria-valuemin="40" aria-valuemax="100" style="width:68%">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="chip chip-warning">
                                                        <div class="chip-body">
                                                            <div class="chip-text">on hold</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="product-price">$69.99</td>
                                                <td class="product-action">
                                                    <span class="action-edit"><i class="feather icon-edit"></i></span>
                                                    <span class="action-delete"><i
                                                            class="feather icon-trash"></i></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td class="product-img"><img
                                                        src="../../../app-assets/images/elements/jbl-speaker.png"
                                                        alt="Img placeholder">
                                                </td>
                                                <td class="product-name">BRAVEN - Outdoor Speaker</td>
                                                <td class="product-category">Computers</td>
                                                <td>
                                                    <div class="progress progress-bar-primary">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="40"
                                                            aria-valuemin="40" aria-valuemax="100" style="width:97%">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="chip chip-success">
                                                        <div class="chip-body">
                                                            <div class="chip-text">delivered</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="product-price">$199.99</td>
                                                <td class="product-action">
                                                    <span class="action-edit"><i class="feather icon-edit"></i></span>
                                                    <span class="action-delete"><i
                                                            class="feather icon-trash"></i></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td class="product-img"><img
                                                        src="../../../app-assets/images/elements/homepod.png"
                                                        alt="Img placeholder">
                                                </td>
                                                <td class="product-name">Bose® - Bluetooth Speaker Travel Bag</td>
                                                <td class="product-category">Computers</td>
                                                <td>
                                                    <div class="progress progress-bar-primary">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="40"
                                                            aria-valuemin="40" aria-valuemax="100" style="width:89%">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="chip chip-warning">
                                                        <div class="chip-body">
                                                            <div class="chip-text">on hold</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="product-price">$44.99</td>
                                                <td class="product-action">
                                                    <span class="action-edit"><i class="feather icon-edit"></i></span>
                                                    <span class="action-delete"><i
                                                            class="feather icon-trash"></i></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td class="product-img"><img
                                                        src="../../../app-assets/images/elements/beats-headphones.png"
                                                        alt="Img placeholder">
                                                </td>
                                                <td class="product-name">Altec Lansing - Mini H2O Bluetooth Speaker
                                                </td>
                                                <td class="product-category">Fitness</td>
                                                <td>
                                                    <div class="progress progress-bar-success">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="40"
                                                            aria-valuemin="40" aria-valuemax="100" style="width:87%">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="chip chip-success">
                                                        <div class="chip-body">
                                                            <div class="chip-text">delivered</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="product-price">$199.99</td>
                                                <td class="product-action">
                                                    <span class="action-edit"><i class="feather icon-edit"></i></span>
                                                    <span class="action-delete"><i
                                                            class="feather icon-trash"></i></span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- dataTable ends -->

                                <!-- add new sidebar starts -->
                                <div class="add-new-data-sidebar">
                                    <div class="overlay-bg"></div>
                                    <div class="add-new-data">
                                        <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
                                            <div>
                                                <h4 class="text-uppercase">Thumb View Data</h4>
                                            </div>
                                            <div class="hide-data-sidebar">
                                                <i class="feather icon-x"></i>
                                            </div>
                                        </div>
                                        <div class="data-items pb-3">
                                            <div class="data-fields px-2 mt-3">
                                                <div class="row">
                                                    <div class="col-sm-12 data-field-col">
                                                        <label for="data-name">Name</label>
                                                        <input type="text" class="form-control" id="data-name">
                                                    </div>
                                                    <div class="col-sm-12 data-field-col">
                                                        <label for="data-category"> Category </label>
                                                        <select class="form-control" id="data-category">
                                                            <option>Audio</option>
                                                            <option>Computers</option>
                                                            <option>Fitness</option>
                                                            <option>Appliance</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-12 data-field-col">
                                                        <label for="data-status">Order Status</label>
                                                        <select class="form-control" id="data-status">
                                                            <option>Pending</option>
                                                            <option>Canceled</option>
                                                            <option>Delivered</option>
                                                            <option>On Hold</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-12 data-field-col">
                                                        <label for="data-price">Price</label>
                                                        <input type="text" class="form-control" id="data-price">
                                                    </div>
                                                    <div class="col-sm-12 data-field-col data-list-upload">
                                                        <form action="#" class="dropzone dropzone-area"
                                                            id="dataListUpload">
                                                            <div class="dz-message">Upload Image</div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
                                            <div class="add-data-btn">
                                                <button class="btn btn-primary">Add Data</button>
                                            </div>
                                            <div class="cancel-data-btn">
                                                <button class="btn btn-outline-danger">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- add new sidebar ends -->
                            </section>
                            <!-- Data list view end -->

                        </div>
                    </div>

                </div>

            </section>
            <!-- Dashboard Ecommerce ends -->

        </div>
    </div>
</div>
<!-- END: Content-->
@endsection



@section('scripts')
<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('app-assets/vendors/js/extensions/dropzone.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/dataTables.select.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js')}}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Page JS-->
<script src="{{asset('app-assets/js/scripts/ui/data-list-view.js')}}"></script>
<!-- END: Page JS-->
<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Page JS-->
<script src="{{asset('app-assets/js/scripts/pages/dashboard-ecommerce.js')}}"></script>
<!-- END: Page JS-->
@endsection