@extends('layouts.master')

@section('title')
    {{ __('wishlist') }}
@endsection

@section('css')
    <!DOCTYPE html>
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors-rtl.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/pages/app-ecommerce-shop.css">
    <!-- END: Page CSS-->
@endsection


@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">WishList</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">eCommerce</a>
                                    </li>
                                    <li class="breadcrumb-item active">Wish List
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Wishlist Starts -->
                <section id="wishlist" class="grid-view wishlist-items">
                    @forelse ($wishlistItems as $item)
                        <div class="card ecommerce-card">
                            <div class="card-content">
                                <div class="item-img text-center">
                                    <a href="app-ecommerce-details.html">
                                        <img src="{{ asset('storage/' . $item->product->image) }}" class="img-fluid"
                                            alt="img-placeholder">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <div class="item-wrapper">
                                        <div class="item-rating">
                                            <div class="badge badge-primary badge-md">
                                                {{ __(4) }} <i class="feather icon-star ml-25"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="item-price">
                                                {{ $item->product->price }}
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="item-name">
                                        <a href="app-ecommerce-details.html">
                                            {{ $item->product->name }}
                                        </a>
                                    </div>
                                    <div>
                                        <p class="item-description">
                                            {{ $item->product->description }}

                                        </p>
                                    </div>
                                </div>
                                <div class="item-options text-center">
                                        <form action="{{ route('wishlist.destroy', $item) }}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button style="border: none; height:100%;" type="submit"
                                                onclick="return confirm('{{ __('Are You Sure ???') }}')">
                                                <i class="feather icon-x align-middle"></i>
                                                {{ __('Remove from Wishlist') }}
                                            </button>
                                        </form>
                                    <div class="cart move-cart">
                                        <i class="feather icon-shopping-cart"></i> <span class="add-to-cart">Move to
                                            cart</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <section id="ecommerce-searchbar">
                            <div class="row mt-1">
                                <div class="col-sm-12">
                                    <fieldset class="form-group position-relative">
                                        {{ __('no_records') }}
                                    </fieldset>
                                </div>
                            </div>
                        </section>
                    @endforelse
                </section>
                <!-- Wishlist Ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection

@section('scripts')
    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/pages/app-ecommerce-shop.js"></script>
    <!-- END: Page JS-->
@endsection
