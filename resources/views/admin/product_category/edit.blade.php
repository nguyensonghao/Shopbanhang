@section('title', 'Thêm category')

@extends('admin.layout')

@section('content')
    <p class="tile">Chỉnh sửa category</p>
    <form class="admin-form" id="form-add-product-category">
        <div class="form-group">
            <label for="category-name">Tên</label>
            <input
                type="text" class="form-control"
                id="category-name" aria-describedby="category-name-help"
                name="category-name" placeholder="Nhập tên category"
            >
            <small id="category-name-help"
                   class="form-text text-muted"
            >Tên riêng sẽ hiển thị trên trang mạng của bạn.
            </small>
        </div>
        <div class="form-group">
            <label for="category-parent">Category cha</label>
            <select
                class="form-control" id="category-parent"
                name="parent" aria-describedby="category-parent-help"
            >
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
            <small id="category-parent-help"
                   class="form-text text-muted"
            >Chỉ định một chuyên mục Cha để tạo thứ bậc. Ví dụ, bạn tạo chuyên mục Album nhạc thì có thể làm cha của chuyên mục Album nhạc Việt Nam và Album nhạc quốc tế.
            </small>
        </div>
        <div class="form-group">
            <label>Ảnh đại diện</label>
            <label for="category-avatar" class="label-input-file">Chọn ảnh</label>
            <input
                type="file" class="hide" id="category-avatar"
                name="category-avatar" accept="image/x-png,image/gif,image/jpeg"
            >
        </div>
        <div class="form-group">
            <label for="category-description">Mô tả</label>
            <textarea
                class="form-control" id="category-description"
                name="description" placeholder="Nhập mô tả" rows="5"
            ></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Chỉnh sửa</button>
    </form>
@endsection
