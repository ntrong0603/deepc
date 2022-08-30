<?php

namespace App\Http\Controllers;

use App\Model\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ProductController extends Controller
{
    private $mProduct;

    public function __construct()
    {
        $this->mProduct = new ProductModel();
    }

    /**
     * View list info product
     * @param obj $request param send form user
     * @return view
     */
    public function index(Request $request)
    {
        $listProduct = $this->mProduct->gets([], $request->all(), [["column" => "id", "value" => "ASC"]]);
        //add param in pagination
        $listProduct->appends($request->all());
        return view('back_end.product.product_list', ['listProduct' => $listProduct, 'paramQuery' => $request->all()]);
    }

    /**
     * View form edit/add info product
     * @param obj $request param send form user
     * @return view
     */
    public function viewForm(Request $request)
    {
        if ($request->get('id')) {
            $item = $this->mProduct->find($request->get('id'));
            if (empty($item)) {
                return redirect()->route('product')->with('loi', 'Không tìm sản phẩm');;
            }
            return view('back_end.product.product_form', ['item' => $item]);
        } else {
            return view('back_end.product.product_form');
        }
    }

    /**
     * Created/Update info product
     * @param obj $request param send form user
     */
    public function save(Request $request)
    {
        if (!empty($request->id)) {
            $item = $this->mProduct->find($request->get('id'));
        } else {
            $item = $this->mProduct;
        }
        // $item->name_hotspot = $request->name_hotspot;
        $item->name                = $request->name;
        $item->name_en             = $request->name_en ?? $request->name;
        $item->description         = $request->description;
        $item->description_en      = $request->description_en;
        $item->color_chart         = $request->color_chart;
        $item->type                = $request->type;
        $item->status              = $request->status;
        $item->save();
        if (isset($request->id)) {
            return redirect(route('product.edit', ['id' => $request->id]))->with('thongbao', 'Sửa thông tin thành công');
        } else {
            return redirect(route('product.edit', ['id' => $item->id]))->with('thongbao', 'Thêm thông tin thành công');
        }
    }
}
