@extends('app.backend.backend_master')
@section('content')
    <!-- Content -->
    <div class="container-fluid flex-grow-1 container-p-y">
        <h4 class="py-3 breadcrumb-wrapper mb-4">
            <span class="text-muted fw-light">User Profile /</span> Profile
        </h4>

        <!-- Header -->
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="user-profile-header-banner">
                        <img src="{{ asset('backend/assets/img/pages/profile-banner.png') }}" alt="Banner image" class="rounded-top" />
                    </div>
                    <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
                        <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
                            <img
                                src="{{ asset('backend/assets/img/avatars/1.png') }}"
                                alt="user image"
                                class="d-block h-auto ms-0 ms-sm-4 rounded-3 user-profile-img"
                            />
                        </div>
                        <div class="flex-grow-1 mt-3 mt-sm-5">
                            <div class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                                <div class="user-profile-info">
                                    <h4>John Doe</h4>
                                    <ul class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
                                        <li class="list-inline-item fw-semibold"><i class="bx bx-pen"></i> UX Designer</li>
                                        <li class="list-inline-item fw-semibold"><i class="bx bx-map"></i> Vatican City</li>
                                        <li class="list-inline-item fw-semibold">
                                            <i class="bx bx-calendar-alt"></i> Joined April 2021
                                        </li>
                                    </ul>
                                </div>
                                <a href="javascript:void(0)" class="btn btn-primary text-nowrap"><i class="bx bx-user-check"></i>Connected</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Header -->

        <!-- User Profile Content -->
        <div class="row">
            <div class="col-12">
                <!-- About User -->
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-4 col-lg-5 col-md-5">
                                <small class="text-muted text-uppercase">About</small>
                                <ul class="list-unstyled mb-4 mt-3">
                                    <li class="d-flex align-items-center mb-3">
                                        <i class="bx bx-user"></i><span class="fw-semibold mx-2">Full Name:</span>
                                        <span>John Doe</span>
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <i class="bx bx-check"></i><span class="fw-semibold mx-2">Status:</span> <span>Active</span>
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <i class="bx bx-star"></i><span class="fw-semibold mx-2">Role:</span> <span>Developer</span>
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <i class="bx bx-flag"></i><span class="fw-semibold mx-2">Country:</span> <span>USA</span>
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <i class="bx bx-detail"></i><span class="fw-semibold mx-2">Languages:</span>
                                        <span>English</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-lg-5 col-md-5">
                                <small class="text-muted text-uppercase">Contacts</small>
                                <ul class="list-unstyled mb-4 mt-3">
                                    <li class="d-flex align-items-center mb-3">
                                        <i class="bx bx-phone"></i><span class="fw-semibold mx-2">Contact:</span>
                                        <span>(123) 456-7890</span>
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <i class="bx bx-chat"></i><span class="fw-semibold mx-2">Skype:</span> <span>john.doe</span>
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <i class="bx bx-envelope"></i><span class="fw-semibold mx-2">Email:</span>
                                        <span>john.doe@example.com</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-lg-5 col-md-5">
                                <small class="text-muted text-uppercase">Teams</small>
                                <ul class="list-unstyled mt-3 mb-0">
                                    <li class="d-flex align-items-center mb-3">
                                        <i class="bx bxl-github text-primary me-2"></i>
                                        <div class="d-flex flex-wrap">
                                            <span class="fw-semibold me-2">Backend Developer</span><span>(126 Members)</span>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="bx bxl-react text-info me-2"></i>
                                        <div class="d-flex flex-wrap">
                                            <span class="fw-semibold me-2">React Developer</span><span>(98 Members)</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a href="{{ route('edit.profile') }}" class="btn btn-outline-info text-nowrap mt-2"><i class="bx bx-user-check"></i> Edit</a>
                    </div>
                </div>
                <!--/ About User -->
            </div>
        </div>
        <!--/ User Profile Content -->
    </div>
    <!-- / Content -->
@endsection
