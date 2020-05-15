@section('title', 'Danh sách category')

@extends('admin.layout')

@section('content')
    <div id="list-category-product-page">
        <div class="main-body-header">
            <p class="tile">Danh sách category</p>
            <form class="main-body-search">
                <input type="text" class="form-control" placeholder="Tìm kiếm"/>
            </form>
        </div>
        <table class="table admin-table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tên</th>
                <th scope="col">Ảnh đại diện</th>
                <th scope="col">Danh mục cha</th>
                <th scope="col">Ngày tạo</th>
                <th scope="col" class="tb-action">Hành động</th>
            </tr>
            </thead>
            <tbody>
            @foreach($list_category as $cate)
                <tr>
                    <th scope="row">1</th>
                    <td>{{ $cate->name }}</td>
                    <td>
                        <img class="category-avatar" src="https://coreui.io/demo/3.1.0/legacy/assets/img/avatars/6.jpg" alt="avatar"/>
                    </td>
                    <td>Otto</td>
                    <td>{{ $cate->created_at }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-secondary btn-sm btn-danger">Xóa</button>
                            <button type="button" class="btn btn-secondary btn-sm btn-info">Chỉnh sửa</button>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{ $list_category->links() }}
    </div>
@endsection
