@extends('layouts.master')

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
    <article class="container-fluid bg-light">
        <div class="container">
            <div class="worksingle-related-header row">
                <h1 class="h2 py-5">Bài viết
                    <a href="{{ route('post-manage-trash') }}" class="float-end "><button class="btn btn-danger" style="margin-right: 25px">Thùng rác</button></a>
                </h1>
                <div class="col-md-12 text-left justify-content-center">
                    <div class="row gx-5">
                        
            
                        @foreach ($post as $item)
                            <div class="col-sm-6 col-lg-4 mb-5">
                                <a
                                    href="{{ url('admin/detail-manage-post/' . $item->id) }} "class="related-content card text-decoration-none overflow-hidden h-100">
                                    <img class="related-img card-img-top" src="{{ asset('uploads/post/' . $item->image) }}"
                                        alt="Card image cap" style="object-fit:cover;">
                                    <div class="related-body card-body p-4">
                                        <h6 >{{ $item->typepost == '1' ? 'Nhặt đồ' : 'Mất đồ'}}</h6>
                                        <h5 class="card-title h6 m-0 semi-bold-600 text-dark">{{ $item->title }}</h5>
                                        <div class="d-flex justify-content-between">
                                            <span class="text-primary light-300">Chi tiết</span>

                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </article>
@endsection
