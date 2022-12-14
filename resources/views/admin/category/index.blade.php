@extends('layouts.master')

@section('title', 'Danh mục')

@section('content')
    <div class="container-fluid px-4">

        <div class="card mt-4">
            <div class="card-header">
                <h4>Danh mục
                    <a href="{{ route('add-category') }}"><button class="btn btn-primary btn-sm float-end">Thêm danh mục</button></a>
                </h4>
            </div>
            <div > 
                <a href="{{ route('category-trash') }}" class="float-end "><button class="btn btn-danger" style="margin-right: 25px">Thùng rác</button></a>
            </div>

            <div class="card-body">

                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <table id="myDataTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Tên danh mục</td>
                            <td>Người thực hiện</td>
                            <td>Chỉnh sửa</td>
                            <td>Xoá</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($category as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->user->name }}</td>
                                <td>
                                    <a href="{{ url('admin/edit-category/' . $item->id) }}" class="btn btn-primary">Chỉnh
                                        sửa</a>

                                </td>
                                <td>
                                    <a href="{{ url('admin/delete-category/' . $item->id) }}" class="btn btn-danger">Xoá</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>

@endsection