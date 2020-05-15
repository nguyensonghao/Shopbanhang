<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
            'list_cate' => Category_Product::select(['name', 'id'])->get()
        );

        return view('admin.product_category.edit')->with($data);
    }

    public function add_action (Request $request) {
        $request->validate([
            'category-name' => 'required|max:255'
        ]);

        $category_product = new Category_Product;
        $category_product->name = $request->input('category-name');
        $category_product->description = $request->input('category-description');
        $category_product->parent_cate = $request->input('category-parent');
        $category_product->avatar = $request->input('category-avatar');
        $category_product->user_id = $request->input('category-userId');
        if ($category_product->save()) {
            return redirect()->back()->with('message_toast', 'Thêm category thành công!')
                ->with('success_toast', true);
        } else {
            return redirect()->back()->with('message_toast', 'Có lỗi trong quá trình thêm dữ liệu!')
                ->with('success_toast', false);
        }
    }

    public function edit_action () {

    }

    public function delete_action () {

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
