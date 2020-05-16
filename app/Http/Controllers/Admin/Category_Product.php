<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Category_Product;


class Category_Product_Controller extends Controller
{
    private $pagination_item = 20;

    public function list_view (Request $request) {
        $data = array(
            'list_category' => Category_Product::paginate($this->pagination_item)
        );

        return view('admin.product_category.list')->with($data);
    }

    public function add_view () {
        $data = array(
            'list_category' => Category_Product::all()
        );

        return view('admin.product_category.add')->with($data);
    }

    public function edit_view ($id) {
        $data = array(
            'cate' => Category_Product::find($id),
            'list_cate' => Category_Product::select(['name', 'id'])->where('id', '<>', $id)->get()
        );

        return view('admin.product_category.edit')->with($data);
    }

    public function add_action (Request $request) {
        $request->validate([
            'category-name' => 'required|max:255'
        ]);

        $category_product = new Category_Product;
        $category_product->name = $request->input('category-name');
        $category_product->slug = Str::slug($request->input('category-name'), '-');
        $category_product->description = $request->input('category-description');
        $category_product->parent_cate = $request->input('category-parent');
        $category_product->user_id = $request->input('category-userId');
        if ($request->has('category-avatar')) {
            $avatar = $request->file('category-avatar');
            $avatar_name = time() . '.' . $avatar->getClientOriginalExtension();
            $upload_avatar = $request->file('category-avatar')->move('upload/cate_avatars', $avatar_name);
            if (!$upload_avatar) {
                return redirect()->back()->with('message_toast', 'Có lỗi trong quá trình upload avatar!')
                    ->with('success_toast', false);
            }
            $category_product->avatar = $avatar_name;
        }

        if ($category_product->save()) {
            return redirect()->back()->with('message_toast', 'Thêm category thành công!')
                ->with('success_toast', true);
        }

        return redirect()->back()->with('message_toast', 'Có lỗi trong quá trình thêm dữ liệu!')
            ->with('success_toast', false);
    }

    public function edit_action () {

    }

    public function delete_action ($id) {
        if ($id) {
            if (Category_Product::find($id)->delete()) {
                return redirect()->back()->with('message_toast', 'Xóa bản ghi thành công!')
                    ->with('success_toast', true);
            }

            return redirect()->back()->with('message_toast', 'Có lỗi trong quá trình xóa dữ liệu!')
                ->with('success_toast', false);
        }

        return redirect()->back()->with('message_toast', 'Id không tồn tại!')
            ->with('success_toast', false);
    }

    public function search (Request $request) {
        $query = $request->query('query');
        $fields = ['name', 'id'];
        if ($query) {
            return Category_Product::where('name', 'like', "%" . $query . "%")
                ->select($fields)->take(10)->get();
        }

        return Category_Product::select($fields)->take(10)->get();
    }
}
