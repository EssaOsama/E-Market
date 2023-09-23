<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ route('home') }}">
                    <div class="brand-logo"></div>
                    <h2 class="brand-text mb-0">{{ __('Dashboard') }}</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                        class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i
                        class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary"
                        data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a href="{{ route('home') }}"><i class="feather icon-home"></i><span
                        class="menu-title" data-i18n="Dashboard">{{ __('Dashboard') }}</span></a>
                @can('admin')
                    <ul class="menu-content">
                        <li><a href="{{ route('ecommerce') }}"><i class="feather icon-circle"></i><span class="menu-item"
                                    data-i18n="eCommerce">{{ __('eCommerce') }}</span></a>
                        </li>
                        <li><a href="{{ route('category.index') }}"><i class="feather icon-circle"></i><span
                                    class="menu-item" data-i18n="eCommerce">{{ __('Category') }}</span></a>
                        </li>
                        <li><a href="{{ route('product.index') }}"><i class="feather icon-circle"></i><span
                                    class="menu-item" data-i18n="eCommerce">{{ __('Product') }}</span></a>
                        </li>
                    </ul>
                @endcan

            </li>
            <li class=" navigation-header"><span>Apps</span>
            </li>

            <li class=" nav-item"><a href="#"><i class="feather icon-shopping-cart"></i><span class="menu-title"
                        data-i18n="Ecommerce">Ecommerce</span></a>
                <ul class="menu-content">
                    <li><a href="{{ route('shop') }}"><i class="feather icon-circle"></i><span class="menu-item"
                                data-i18n="Shop">Shop</span></a>
                    </li>
                    <li><a href="{{ route('details') }}"><i class="feather icon-circle"></i><span class="menu-item"
                                data-i18n="Details">Details</span></a>
                    </li>
                    <li><a href="{{ route('wishlist') }}"><i class="feather icon-circle"></i><span class="menu-item"
                                data-i18n="Wish List">Wish List</span></a>
                    </li>
                    <li><a href="{{ route('checkout') }}"><i class="feather icon-circle"></i><span class="menu-item"
                                data-i18n="Checkout">Checkout</span></a>
                    </li>
                </ul>
            </li>
            @can('admin')
                <li class="nav-item"><a href="#"><i class="feather icon-unlock"></i><span class="menu-title"
                            data-i18n="Authentication">Authentication</span></a>
                    <ul class="menu-content">
                        <li><a href="{{ route('permission_ui.permissions.index') }}"><i
                                    class="feather icon-circle"></i><span class="menu-item"
                                    data-i18n="Login">permissions</span></a>
                        </li>
                        <li><a href="{{ route('permission_ui.roles.index') }}"><i class="feather icon-circle"></i><span
                                    class="menu-item" data-i18n="Register">rols</span></a>
                        </li>
                        <li><a href="{{ route('permission_ui.users.index') }}"><i class="feather icon-circle"></i><span
                                    class="menu-item" data-i18n="Forgot Password">users</span></a>
                        </li>
                    </ul>
                </li>
            @endcan

        </ul>
    </div>
</div>
<!-- END: Main Menu-->
