@extends('layouts.master')

@section('title')
    {{ __('category') }}
@endsection

@section('css')
    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/core/colors/palette-gradient.css') }}">
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
                            <h2 class="content-header-title float-left mb-0">{{ __('category') }}</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">{{ __('home') }}</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">{{ __('Dashboard') }}</a>
                                    </li>
                                    <li class="breadcrumb-item active">{{ __('category') }}
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">


                <!-- Hoverable rows start -->
                <div class="row" id="table-hover-row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header pb-3">
                                <h4 class="card-title">{{ __('category') }}</h4>

                                <div class="form-group">
                                    @can('store categories')
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary p-1" style="border-radius: 50%;"
                                            data-toggle="modal" data-target="#inlineForm">
                                            <i class="feather icon-plus"></i>

                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel33" style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-primary">
                                                        <h4 class="modal-title" id="myModalLabel33">{{ __('Create Category') }}
                                                        </h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <form class="form" action="{{ route('category.store') }}" method="post"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="modal-body">

                                                            <div class="form-group ">
                                                                <label>{{ __('name') }}</label>
                                                                <div class="input-group">
                                                                    <input
                                                                        class="@error('name') is-invalid @enderror form-control"
                                                                        type="text" name="name" id="name"
                                                                        value="{{ old('name') }}" />
                                                                </div>
                                                                @error('name')
                                                                    <span class="text-sm text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group ">
                                                                <label>{{ __('description') }}</label>

                                                                <div class="input-group">
                                                                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="description"></textarea>
                                                                </div>
                                                                @error('description')
                                                                    <span class="text-sm text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group ">
                                                                <label>{{ __('image') }}</label>
                                                                <div class="input-group">
                                                                    <input
                                                                        class="@error('image') is-invalid @enderror form-control"
                                                                        type="file" name="image" id="image"
                                                                        value="{{ old('image') }}" />
                                                                </div>
                                                                @error('image')
                                                                    <span class="text-sm text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button"
                                                                class="btn btn-light-primary font-weight-bold"
                                                                data-dismiss="modal">{{ __('Cancel') }}</button>
                                                            <button type="submit"
                                                                class="btn btn-primary font-weight-bold">{{ __('Save') }}</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    @endcan

                                </div>

                            </div>
                            <div class="card-content">
                                <div class="table-responsive">
                                    @can('index categories')
                                        <table class="table table-hover mb-0">
                                            <thead>
                                                <tr>
                                                    <th>{{ __('id') }}</th>
                                                    <th>{{ __('name') }}</th>
                                                    <th>{{ __('description') }}</th>
                                                    <th>{{ __('image') }}</th>
                                                    <th>{{ __('action') }}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse($categories as $category)
                                                    <tr>
                                                        <td>{{ $category->id }}</td>
                                                        <td>{{ $category->name }}</td>
                                                        <td>{{ $category->description }}</td>
                                                        <td>
                                                            <a href=" {{ asset('storage/' . $category->image) }}"
                                                                target="_blank">
                                                                <svg width="50" height="50" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path opacity="0.3"
                                                                        d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22Z"
                                                                        fill="currentColor"></path>
                                                                    <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z"
                                                                        fill="currentColor">
                                                                    </path>
                                                                </svg>
                                                            </a>
                                                        </td>

                                                        <td style="width: 12%">
                                                            @can('update categories')
                                                                <!-- Button trigger modal -->
                                                                <button type="button" class="btn btn-icon btn-primary btn-md"
                                                                    style="border-radius: 50%;" data-toggle="modal"
                                                                    data-target="#inlineFormUpdate{{ $category->id }}">
                                                                    <i class="feather icon-edit"></i>
                                                                </button>

                                                                <!-- Modal -->
                                                                <div class="modal fade text-left"
                                                                    id="inlineFormUpdate{{ $category->id }}" tabindex="-1"
                                                                    role="dialog" aria-labelledby="myModalLabel33"
                                                                    style="display: none;" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                                        role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title" id="myModalLabel33">
                                                                                    {{ __('Update Category') . ' => ' . $category->name }}
                                                                                </h4>
                                                                                <button type="button" class="close"
                                                                                    data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">×</span>
                                                                                </button>
                                                                            </div>
                                                                            <form
                                                                                action="{{ route('category.update', $category->id) }}"
                                                                                method="post" class="form" novalidate
                                                                                enctype="multipart/form-data">
                                                                                @csrf
                                                                                @method('PUT')
                                                                                <div class="card-body">
                                                                                    <div class="modal-body">

                                                                                        <div class="form-group ">
                                                                                            <label>{{ __('name') }}</label>
                                                                                            <div class="input-group">
                                                                                                <input
                                                                                                    class="@error('name') is-invalid @enderror form-control"
                                                                                                    type="text" name="name"
                                                                                                    id="name"
                                                                                                    value="{{ old('name', $category->name) }}" />
                                                                                            </div>
                                                                                            @error('name')
                                                                                                <span
                                                                                                    class="text-sm text-danger">{{ $message }}</span>
                                                                                            @enderror
                                                                                        </div>

                                                                                        <div class="form-group ">
                                                                                            <label>{{ __('description') }}</label>
                                                                                            <div class="input-group">
                                                                                                <input
                                                                                                    class="@error('description') is-invalid @enderror form-control"
                                                                                                    type="text"
                                                                                                    name="description"
                                                                                                    id="description"
                                                                                                    value="{{ old('description', $category->description) }}" />
                                                                                            </div>
                                                                                            @error('description')
                                                                                                <span
                                                                                                    class="text-sm text-danger">{{ $message }}</span>
                                                                                            @enderror
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                for="image">{{ __('image') }}</label>
                                                                                            <input
                                                                                                class="@error('image') is-invalid @enderror form-control"
                                                                                                type="file" name="image"
                                                                                                id="image"
                                                                                                value="{{ old('image', $category->image) }}"
                                                                                                placeholder="{{ __('image') }}" />
                                                                                            @error('image')
                                                                                                <span
                                                                                                    class="text-sm text-danger">{{ $message }}</span>
                                                                                            @enderror
                                                                                        </div>
                                                                                        <a href=" {{ asset('storage/' . $category->image) }}"
                                                                                            target="_blank">
                                                                                            <svg width="50" height="50"
                                                                                                viewBox="0 0 24 24" fill="none"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path opacity="0.3"
                                                                                                    d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22Z"
                                                                                                    fill="currentColor"></path>
                                                                                                <path
                                                                                                    d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z"
                                                                                                    fill="currentColor"></path>
                                                                                            </svg>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button"
                                                                                        class="btn btn-light-primary font-weight-bold"
                                                                                        data-dismiss="modal">{{ __('Cancel') }}</button>
                                                                                    <button type="submit"
                                                                                        class="btn btn-primary font-weight-bold">{{ __('Save') }}</button>
                                                                                </div>
                                                                            </form>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endcan
                                                            @can('delete categories')
                                                                <form action="{{ route('category.destroy', $category) }}"
                                                                    method="POST" style="display: inline-block;">
                                                                    @csrf
                                                                    @method('DELETE')

                                                                    <button class="btn btn-icon btn-danger btn-md"
                                                                        style="border-radius: 50%;" type="submit"
                                                                        onclick="return confirm('{{ __('Are You Sure ???') }}')">
                                                                        <div class="fonticon-wrap">
                                                                            <i class="feather icon-trash-2"></i>
                                                                        </div>
                                                                    </button>
                                                                </form>
                                                            @endcan

                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td class="p-4" colspan="4">
                                                            {{ __('no_records') }}</td>
                                                    </tr>
                                                @endforelse
                                            </tbody>

                                        </table>
                                    @endcan
                                    {!! $categories->withQueryString()->links('pagination::bootstrap-5') !!}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hoverable rows end -->


            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection

@section('scripts')
    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets/js/scripts/modal/components-modal.js') }}"></script>
    <!-- END: Page JS-->
@endsection
