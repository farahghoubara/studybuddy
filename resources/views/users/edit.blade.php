@extends('layouts.app')

@section('title', 'My Profile')

@section('content')
    <div class="main_container">
        @if (Session::has('success'))
            <div data-mdb-alert-init="" class="alert alert-success" role="alert" data-mdb-color="success"
                data-mdb-alert-initialized="true"><i class="fas fa-check-circle me-3"></i>{{ Session::get('success') }}</div>
        @endif
        <section class="our-dashbord dashbord pt-4" style="min-height: 70vh;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="account_user_deails pl40 pl0-md">
                                    <h2 class="title mb30">Profile Details</h2>
                                    <div class="ui_kit_tab style2">
                                        <!-- nav tab Nav List Start -->
                                        <ul class="nav nav-tabs mb15" id="myTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="t20-tab" data-bs-toggle="tab"
                                                    data-bs-target="#t20" type="button" role="tab" aria-controls="t20"
                                                    aria-selected="true">
                                                    Profile Information
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="baby-tab" data-bs-toggle="tab"
                                                    data-bs-target="#baby" type="button" role="tab"
                                                    aria-controls="baby" aria-selected="false">
                                                    Password
                                                </button>
                                            </li>
                                        </ul>
                                        <!-- nav tab Nav List End -->
                                        <!-- nav tab contents Start -->
                                        <div class="tab-content pt20 row" id="myTabContent">
                                            <div class="tab-pane fade show active col-lg-12" id="t20" role="tabpanel"
                                                aria-labelledby="t20-tab">
                                                <div class="account_details_page form_grid">
                                                    <form class="contact_form" name="contact_form"
                                                        action="{{ route('profile.update') }}" method="POST" novalidate>
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group mb-4">
                                                                    <label class="form-label">Name</label>
                                                                    <input class="form-control" type="text"
                                                                        name="name" value="{{ $user->name }}"
                                                                        placeholder="Your Name" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group mb-4">
                                                                    <label class="form-label">Username</label>
                                                                    <input class="form-control" type="text"
                                                                        name="username" value="{{ $user->username }}"
                                                                        placeholder="Your Username" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group mb-4">
                                                                    <label class="form-label">Email</label>
                                                                    <input class="form-control email" type="email"
                                                                        name="email" value="{{ $user->email }}"
                                                                        placeholder="Your Email" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group mb-4">
                                                                    <label class="form-label">Phone Number</label>
                                                                    <input class="form-control" type="text"
                                                                        name="phone" value="{{ $user->phone }}"
                                                                        placeholder="Phone Number" />
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group d-flex mb0">
                                                                    <button type="submit"
                                                                        class="btn btn-lg btn-info me-3">Update</button>
                                                                    <button type="button"
                                                                        class="btn btn-lg btn-danger text-white">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                            <div class="tab-pane fade col-xl-6" id="baby" role="tabpanel"
                                                aria-labelledby="baby-tab">
                                                <div class="account_details_page form_grid">
                                                    <form class="contact_form" name="contact_form"
                                                        action="{{ route('profile.updatePassword') }}" method="POST"
                                                        novalidate>
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group mb-4">
                                                                    <label class="form-label">Current password</label>
                                                                    <input name="current_password" class="form-control"
                                                                        type="password" placeholder="Your Password" />
                                                                    @error('current_password')
                                                                        <span class="text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group mb-4">
                                                                    <label class="form-label">New password</label>
                                                                    <input name="new_password" class="form-control"
                                                                        type="password" placeholder="Your New Password" />
                                                                    @error('new_password')
                                                                        <span class="text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group mb-4">
                                                                    <label class="form-label">Confirm New Password</label>
                                                                    <input name="new_password_confirmation"
                                                                        class="form-control" type="password"
                                                                        placeholder="Confirm New Password" />
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group d-flex mb0">
                                                                    <button type="submit"
                                                                        class="btn btn-lg btn-info me-3">Update</button>
                                                                    <button type="button"
                                                                        class="btn btn-lg btn-danger text-white">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- nav tab contents End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


@endsection

@push('scripts')
    <script>
        // JavaScript to make the password tab active if there are validation errors in any password input
        document.addEventListener("DOMContentLoaded", function() {
            const passwordErrors = document.querySelectorAll(
                'input[name="current_password"] ~ .text-danger, input[name="new_password"] ~ .text-danger, input[name="new_password_confirmation"] ~ .text-danger'
                );
            if (passwordErrors.length > 0) {
                $('#baby-tab').addClass('active');
                $('#baby').addClass('active');
                $('#baby').addClass('show');
                $('#t20-tab').removeClass('active');
                $('#t20').removeClass('active');
                $('#t20').removeClass('show');
            }
        });
    </script>
@endpush
