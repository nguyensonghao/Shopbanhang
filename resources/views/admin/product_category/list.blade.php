

@section('title', 'Danh sách category')

@extends('admin.layout')

@section('content')
    <div id="list-category-product-page">
        <div class="main-body-header">
            <p class="tile">Danh sách category</p>
            <div class="list-action-container">
                <div class="dropdown btn-group-action">
                    <button class="btn dropdown-toggle btn-sm btn-primary" type="button" id="drop-down-menu-action" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Hành động
                    </button>
                    <div class="dropdown-menu" aria-labelledby="drop-down-menu-action">
                        <a class="dropdown-item btn-delete-list">Xóa</a>
                    </div>
                </div>
                <form class="main-body-search">
                    <input type="text" name="query-search" class="form-control" placeholder="Tìm kiếm"/>
                </form>
            </div>
        </div>
        <table class="table admin-table">
            <thead class="thead-dark">
            <tr>
                <th scope="col"><input type="checkbox"/></th>
                <th scope="col">#</th>
                <th scope="col">Tên</th>
                <th scope="col">Ảnh đại diện</th>
                <th scope="col">Danh mục cha</th>
                <th scope="col">Ngày tạo</th>
                <th scope="col" class="tb-action">Hành động</th>
            </tr>
            </thead>
            <tbody>
                @foreach($list_category as $key => $cate)
                    <tr>
                        <th><input type="checkbox"/> </th>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $cate->name }}</td>
                        <td>
                            <img class="category-avatar" src="{{ asset('uploads/cate_avatars/' . $cate->avatar) }}" alt="avatar"/>
                        </td>
                        <td>Otto</td>
                        <td>{{ $cate->created_at }}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <form
                                    onsubmit="return confirm('Bạn có muốn xóa danh mục này không?')"
                                    method="get" action="{{ url('admin/category/delete', ['id' => $cate->id]) }}">
                                    <button type="submit" class="btn btn-secondary btn-sm btn-danger">Xóa</button>
                                </form>
                                <a href="{{ url('admin/category/edit', ['id' => $cate->id]) }}" class="btn btn-secondary btn-sm btn-info">Chỉnh sửa</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $list_category->links() }}
    </div>

    @include('admin.templates.toast')
@endsection
