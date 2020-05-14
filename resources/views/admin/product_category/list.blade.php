@section('title', 'Danh sách category')

@extends('admin.layout')

@section('content')
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
                <th scope="col">Ngày tạo</th>
                <th scope="col">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-secondary btn-sm btn-danger">Xóa</button>
                        <button type="button" class="btn btn-secondary btn-sm btn-info">Chỉnh sửa</button>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-secondary btn-sm btn-danger">Xóa</button>
                        <button type="button" class="btn btn-secondary btn-sm btn-info">Chỉnh sửa</button>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-secondary btn-sm btn-danger">Xóa</button>
                        <button type="button" class="btn btn-secondary btn-sm btn-info">Chỉnh sửa</button>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    <nav aria-label="Page navigation example">
        <ul class="pagination admin-pagination">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </nav>
@endsection
