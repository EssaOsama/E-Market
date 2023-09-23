@extends('layouts.master')

@section('title')
    {{ __('shop') }}
@endsection

@section('css')
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors-rtl.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/nouislider.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/ui/prism.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/select/select2.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/plugins/extensions/noui-slider.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/pages/app-ecommerce-shop.css') }}">
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
                            <h2 class="content-header-title float-left mb-0">{{ __('shop') }}</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">{{ __('Home') }}</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">{{ __('eCommerce') }}</a>
                                    </li>
                                    <li class="breadcrumb-item active">{{ __('shop') }}
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-detached content-right">
                <div class="content-body">
                    <!-- Ecommerce Content Section Starts -->
                    <section id="ecommerce-header">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="ecommerce-header-items">
                                    <div class="result-toggler">
                                        <button class="navbar-toggler shop-sidebar-toggler" type="button"
                                            data-toggle="collapse">
                                            <span class="navbar-toggler-icon d-block d-lg-none"><i
                                                    class="feather icon-menu"></i></span>
                                        </button>
                                        <div class="search-results">
                                            {{ \App\Models\Product::count() . ' results found' }}
                                        </div>
                                    </div>
                                    <div class="view-options">
                                        <select class="price-options form-control" id="ecommerce-price-options">
                                            <option selected>Featured</option>
                                            <option value="1">Lowest</option>
                                            <option value="2">Highest</option>
                                        </select>
                                        <div class="view-btn-option">
                                            <button class="btn btn-white view-btn grid-view-btn active">
                                                <i class="feather icon-grid"></i>
                                            </button>
                                            <button class="btn btn-white list-view-btn view-btn">
                                                <i class="feather icon-list"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Ecommerce Content Section Starts -->
                    <!-- background Overlay when sidebar is shown  starts-->
                    <div class="shop-content-overlay"></div>
                    <!-- background Overlay when sidebar is shown  ends-->

                    <!-- Ecommerce Search Bar Starts -->
                    <section id="ecommerce-searchbar">
                        <div class="row mt-1">
                            <div class="col-sm-12">
                                <fieldset class="form-group position-relative">
                                    <input type="text" class="form-control search-product" id="iconLeft5"
                                        placeholder="Search here">
                                    <div class="form-control-position">
                                        <i class="feather icon-search"></i>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </section>
                    <!-- Ecommerce Search Bar Ends -->

                    <!-- Ecommerce Products Starts المنتجات -->
                    <section id="ecommerce-products" class="grid-view">
                        @forelse ($products as $product)
                            <div class="card ecommerce-card" data-category="{{ $product->category->name }}">
                                <div class="card-content">
                                    <div class="item-img text-center">
                                        <a href="app-ecommerce-details.html">
                                            <img class="img-fluid" src="{{ asset('storage/' . $product->image) }}"
                                                alt="img-placeholder"></a>
                                    </div>
                                    <div class="card-body">
                                        <div class="item-wrapper">
                                            <div class="item-rating">
                                                <div class="badge badge-primary badge-md">
                                                    <span>{{ __(4) }}</span> <i class="feather icon-star"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <h6 class="item-price">
                                                    ${{ $product->price }}
                                                </h6>
                                            </div>
                                        </div>

                                        <div class="item-name">
                                            <a href="app-ecommerce-details.html">{{ $product->name }}</a>
                                            <p class="item-description">
                                                {{ __('category: ') }}{{ $product->category->name }}</p>
                                        </div>
                                        <div>
                                            <p class="item-description">
                                                {{ $product->description }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="item-options text-center">
                                        {{-- <div class="item-wrapper">
                                        <div class="item-rating">
                                            <div class="badge badge-primary badge-md">
                                                <span>4</span> <i class="feather icon-star"></i>
                                            </div>
                                        </div>
                                        <div class="item-cost">
                                            <h6 class="item-price">
                                                $39.99
                                            </h6>
                                        </div>
                                    </div> --}}
                                        <div class="wishlist">
                                            <form action="{{ route('wishlist.add', $product) }}" method="post">
                                                @csrf
                                                <button type="submit" style="border: none"><i class="fa fa-heart-o"></i>
                                                    <span>{{ __('Wishlist') }}</span></button>
                                            </form>

                                        </div>
                                        <div class="cart">
                                            <i class="feather icon-shopping-cart"></i> <span
                                                class="add-to-cart">{{ __('Add to
                                                                                                                                                cart') }}</span>
                                            <a href="app-ecommerce-checkout.html"
                                                class="view-in-cart d-none">{{ __('View In Cart') }}</a>
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
                    <!-- Ecommerce Products Ends -->

                    <!-- Ecommerce Pagination Starts -->
                    <section id="ecommerce-pagination">
                        <div class="row">
                            <div class="col-sm-12">
                                <nav aria-label="Page navigation example">
                                    {!! $products->withQueryString()->links('pagination::bootstrap-5') !!}
                                </nav>
                            </div>
                        </div>
                    </section>
                    <!-- Ecommerce Pagination Ends المنتجات-->

                </div>
            </div>
            <div class="sidebar-detached sidebar-left">
                <div class="sidebar">
                    <!-- Ecommerce Sidebar Starts التصفية-->
                    <div class="sidebar-shop" id="ecommerce-sidebar-toggler">

                        <div class="row">
                            <div class="col-sm-12">
                                <h6 class="filter-heading d-none d-lg-block">Filters</h6>
                            </div>
                        </div>
                        <span class="sidebar-close-icon d-block d-md-none">
                            <i class="feather icon-x"></i>
                        </span>
                        <div class="card">
                            <div class="card-body">
                                <div class="multi-range-price">
                                    <div class="multi-range-title pb-75">
                                        <h6 class="filter-title mb-0">Multi Range</h6>
                                    </div>
                                    <ul class="list-unstyled price-range" id="price-range">
                                        <li>
                                            <span class="vs-radio-con vs-radio-primary py-25">
                                                <input type="radio" name="price-range" value="all"
                                                    data-min-price="0" data-max-price="999999" checked>
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="ml-50">All</span>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="vs-radio-con vs-radio-primary py-25">
                                                <input type="radio" name="price-range" value="under-10"
                                                    data-min-price="0" data-max-price="10">
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="ml-50"> &lt;=$10</span>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="vs-radio-con vs-radio-primary py-25">
                                                <input type="radio" name="price-range" value="10-to-100"
                                                    data-min-price="10" data-max-price="100">
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="ml-50">$10 - $100</span>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="vs-radio-con vs-radio-primary py-25">
                                                <input type="radio" name="price-range" value="100-to-500"
                                                    data-min-price="100" data-max-price="500">
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="ml-50">$100 - $500</span>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="vs-radio-con vs-radio-primary py-25">
                                                <input type="radio" name="price-range" value="over-500"
                                                    data-min-price="500" data-max-price="999999">
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="ml-50">&gt;= $500</span>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /Price Filter -->
                                <hr>

                                <!-- Categories Starts التصنيفات-->
                                <div id="product-categories">
                                    <div class="product-category-title">
                                        <h6 class="filter-title mb-1">{{ __('Categories') }}</h6>
                                    </div>
                                    <span class="vs-radio-con vs-radio-primary py-25">
                                        <input type="radio" name="category-filter" value="all" data-category="all"
                                            checked>
                                        <span class="vs-radio">
                                            <span class="vs-radio--border"></span>
                                            <span class="vs-radio--circle"></span>
                                        </span>
                                        <span class="ml-50">{{ __('All Categories') }}</span>
                                    </span>

                                    <ul class="list-unstyled categories-list">
                                        @forelse ($categories as $category)
                                            <li>
                                                <span class="vs-radio-con vs-radio-primary py-25">
                                                    <input type="radio" name="category-filter"
                                                        value="{{ $category->name }}"
                                                        data-category="{{ $category->name }}">
                                                    <span class="vs-radio">
                                                        <span class="vs-radio--border"></span>
                                                        <span class="vs-radio--circle"></span>
                                                    </span>
                                                    <span class="ml-50">{{ $category->name }}</span>
                                                </span>
                                            </li>
                                        @empty
                                            <!-- Handle empty categories -->
                                        @endforelse
                                    </ul>

                                </div>
                                <!-- Categories Ends التصنيفات-->

                                {{-- <hr>
                                <!-- Brands -->
                                <div class="brands">
                                    <div class="brand-title mt-1 pb-1">
                                        <h6 class="filter-title mb-0">Brands</h6>
                                    </div>
                                    <div class="brand-list" id="brands">
                                        <ul class="list-unstyled">
                                            <li class="d-flex justify-content-between align-items-center py-25">
                                                <span class="vs-checkbox-con vs-checkbox-primary">
                                                    <input type="checkbox" value="false">
                                                    <span class="vs-checkbox">
                                                        <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                    </span>
                                                    <span class="">Insignia™</span>
                                                </span>
                                                <span>746</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center py-25">
                                                <span class="vs-checkbox-con vs-checkbox-primary">
                                                    <input type="checkbox" value="false">
                                                    <span class="vs-checkbox">
                                                        <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                    </span>
                                                    <span class="">
                                                        Samsung
                                                    </span>
                                                </span>
                                                <span>633</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center py-25">
                                                <span class="vs-checkbox-con vs-checkbox-primary">
                                                    <input type="checkbox" value="false">
                                                    <span class="vs-checkbox">
                                                        <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                    </span>
                                                    <span class="">
                                                        Metra
                                                    </span>
                                                </span>
                                                <span>591</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center py-25">
                                                <span class="vs-checkbox-con vs-checkbox-primary">
                                                    <input type="checkbox" value="false">
                                                    <span class="vs-checkbox">
                                                        <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                    </span>
                                                    <span class="">HP</span>
                                                </span>
                                                <span>530</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center py-25">
                                                <span class="vs-checkbox-con vs-checkbox-primary">
                                                    <input type="checkbox" value="false">
                                                    <span class="vs-checkbox">
                                                        <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                    </span>
                                                    <span class="">Apple</span>
                                                </span>
                                                <span>442</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center py-25">
                                                <span class="vs-checkbox-con vs-checkbox-primary">
                                                    <input type="checkbox" value="false">
                                                    <span class="vs-checkbox">
                                                        <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                    </span>
                                                    <span class="">GE</span>
                                                </span>
                                                <span>394</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center py-25">
                                                <span class="vs-checkbox-con vs-checkbox-primary">
                                                    <input type="checkbox" value="false">
                                                    <span class="vs-checkbox">
                                                        <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                    </span>
                                                    <span class="">Sony</span>
                                                </span>
                                                <span>350</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center py-25">
                                                <span class="vs-checkbox-con vs-checkbox-primary">
                                                    <input type="checkbox" value="false">
                                                    <span class="vs-checkbox">
                                                        <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                    </span>
                                                    <span class="">Incipio</span>
                                                </span>
                                                <span>320</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center py-25">
                                                <span class="vs-checkbox-con vs-checkbox-primary">
                                                    <input type="checkbox" value="false">
                                                    <span class="vs-checkbox">
                                                        <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                    </span>
                                                    <span class="">KitchenAid</span>
                                                </span>
                                                <span>318</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center py-25">
                                                <span class="vs-checkbox-con vs-checkbox-primary">
                                                    <input type="checkbox" value="false">
                                                    <span class="vs-checkbox">
                                                        <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                    </span>
                                                    <span class="">Whirlpool</span>
                                                </span>
                                                <span>298</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /Brand -->
                                <hr>
                                <!-- Rating section starts -->
                                <div id="ratings">
                                    <div class="ratings-title mt-1 pb-75">
                                        <h6 class="filter-title mb-0">Ratings</h6>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <ul class="unstyled-list list-inline ratings-list mb-0">
                                            <li class="ratings-list-item"><i class="feather icon-star text-warning"></i>
                                            </li>
                                            <li class="ratings-list-item"><i class="feather icon-star text-warning"></i>
                                            </li>
                                            <li class="ratings-list-item"><i class="feather icon-star text-warning"></i>
                                            </li>
                                            <li class="ratings-list-item"><i class="feather icon-star text-warning"></i>
                                            </li>
                                            <li class="ratings-list-item"><i class="feather icon-star text-light"></i>
                                            </li>
                                            <li>& up</li>
                                        </ul>
                                        <div class="stars-received">(160)</div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <ul class="unstyled-list list-inline ratings-list mb-0">
                                            <li class="ratings-list-item"><i class="feather icon-star text-warning"></i>
                                            </li>
                                            <li class="ratings-list-item"><i class="feather icon-star text-warning"></i>
                                            </li>
                                            <li class="ratings-list-item"><i class="feather icon-star text-warning"></i>
                                            </li>
                                            <li class="ratings-list-item"><i class="feather icon-star text-light"></i>
                                            </li>
                                            <li class="ratings-list-item"><i class="feather icon-star text-light"></i>
                                            </li>
                                            <li>& up</li>
                                        </ul>
                                        <div class="stars-received">(176)</div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <ul class="unstyled-list list-inline ratings-list mb-0">
                                            <li class="ratings-list-item"><i class="feather icon-star text-warning"></i>
                                            </li>
                                            <li class="ratings-list-item"><i class="feather icon-star text-warning"></i>
                                            </li>
                                            <li class="ratings-list-item"><i class="feather icon-star text-light"></i>
                                            </li>
                                            <li class="ratings-list-item"><i class="feather icon-star text-light"></i>
                                            </li>
                                            <li class="ratings-list-item"><i class="feather icon-star text-light"></i>
                                            </li>
                                            <li>& up</li>
                                        </ul>
                                        <div class="stars-received">(291)</div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <ul class="unstyled-list list-inline ratings-list mb-0 ">
                                            <li class="ratings-list-item"><i class="feather icon-star text-warning"></i>
                                            </li>
                                            <li class="ratings-list-item"><i class="feather icon-star text-light"></i>
                                            </li>
                                            <li class="ratings-list-item"><i class="feather icon-star text-light"></i>
                                            </li>
                                            <li class="ratings-list-item"><i class="feather icon-star text-light"></i>
                                            </li>
                                            <li class="ratings-list-item"><i class="feather icon-star text-light"></i>
                                            </li>
                                            <li>& up</li>
                                        </ul>
                                        <div class="stars-received">(190)</div>
                                    </div>
                                </div>
                                <!-- Rating section Ends -->
                                <hr> --}}
                                <!-- Clear Filters Starts -->
                                {{-- <div id="clear-filters">
                                    <button type="reset" class="btn btn-block btn-primary">CLEAR ALL FILTERS</button>
                                </div> --}}
                                <!-- Clear Filters Ends -->

                            </div>
                        </div>
                    </div>
                    <!-- Ecommerce Sidebar Ends التصفية-->

                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection



@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('input[name="category-filter"]').change(function() {
                var selectedCategory = $(this).data('category');

                if (selectedCategory === 'all') {
                    $('.ecommerce-card').show();
                } else {
                    $('.ecommerce-card').hide();
                    $('.ecommerce-card[data-category="' + selectedCategory + '"]').show();
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('input[name="price-range"]').change(function() {
                var minPrice = parseFloat($(this).data('min-price'));
                var maxPrice = parseFloat($(this).data('max-price'));
                $('.ecommerce-card').hide();

                $('.ecommerce-card').each(function() {
                    var productPrice = parseFloat($(this).find('.item-price').text().replace('$',
                        ''));
                    if (productPrice >= minPrice && productPrice <= maxPrice) {
                        $(this).show();
                    }
                });
            });
        });
    </script>


    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/ui/prism.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/extensions/wNumb.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/extensions/nouislider.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets/js/scripts/pages/app-ecommerce-shop.js') }}"></script>
    <!-- END: Page JS-->
@endsection
