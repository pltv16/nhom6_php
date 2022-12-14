@extends('layouts.master')

@section('title', 'Tài khoản')

@section('content')

    <div>
        <a href="{{ route('profile') }}">
            <button type="submit" class="btn rounded-pill text-light px-4 light-300"
                style="margin: 10px; background-color: #4232c2;border-color: #ffff">Tài khoản</button>
        </a>
        <a href="{{ route('post-manage') }}">
            <button type="submit" class="btn rounded-pill px-4 light-300"
                style="margin: 10px; background-color: #ffff;border-color:#4232c2 "
                style="color: #0000;font-family: 'Open Sans', sans-serif !important;
    font-weight: 300;">Quản lý bài
                viết</button>
        </a>
        <a href="{{ route('show-form-profile') }}">
            <button type="submit" class="btn rounded-pill text-light px-4 light-300 "
                style="margin: 10px; background-color:  #4232c2;border-color: #ffff">Cập nhật tài khoản</button>
        </a>
        <a href="{{ route('show-form-password') }}">
            <button type="submit" class="btn rounded-pill px-4 light-300"
                style="margin: 10px; background-color: #ffff;border-color:#4232c2 "
                style="color: #0000;font-family: 'Open Sans', sans-serif !important;font-weight: 300;">Đổi mật khẩu</button>
        </a>
    </div>
    <div class="py-3"></div>
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                        <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Tài khoản</a>
                    </li>
                </ul>
                <div class="card mb-4">
                    <h5 class="card-header">Thông tin tài khoản</h5>
                    <!-- Account -->
                    <div class="card-body">
                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                            <img src="{{ asset('uploads/avatar/'.Auth::user()->image) }}" alt="user-avatar" class="d-block rounded"
                                height="100" width="100" id="uploadedAvatar" />
                            <div class="card-body">
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="firstName" class="form-label">Tên</label>
                                        <input class="form-control" type="text" id="firstName" name="name"
                                            value="{{ auth()->user()->name }}" autofocus disabled />
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label for="email" class="form-label">E-mail</label>
                                        <input class="form-control" type="text" id="email" name="email"
                                            value="{{ auth()->user()->email }}" placeholder="john.doe@example.com"
                                            disabled />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="address" class="form-label">Địa chỉ</label>
                                        <input type="text" class="form-control" id="address" name="address"
                                            placeholder="Address" value="{{ auth()->user()->address }}" disabled />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="phoneNumber">Điện thoại</label>
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text">VN (+84)</span>
                                            <input type="text" id="phoneNumber" name="phone" class="form-control"
                                                placeholder="202 555 0111" value="{{ auth()->user()->phone }}" disabled />
                                        </div>
                                    </div>

                                </div>

                                @if (session('success'))
                                    {{ session('success') }}
                                @endif

                            </div>
                        </div>
                    </div>
                    <hr class="my-0" />


                    <!-- /Account -->
                </div>

            </div>
        </div>
    @endsection
