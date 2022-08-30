<?php

namespace App\Http\Controllers;

use App\Model\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class TourController extends Controller
{
    private $mProduct;

    public function __construct()
    {
        $this->mProduct = new ProductModel();
    }

    /**
     * Change language
     */
    public function changLanguage($language)
    {
        \Session::put("website_language", $language);
        \App::setLocale(\Session::get("website_language"));
        return redirect()->back();
    }

    /**
     * View list info product
     * @param obj $request param send form user
     * @return view
     */
    public function index(Request $request)
    {
        if (!empty(\Session::get("website_language"))) {
            \App::setLocale(\Session::get("website_language"));
        }
        return view('front_end.index');
    }

    /**
     * get info land
     * @param obj $request param send form user
     * @return json
     */
    public function getData(Request $request)
    {
        if ($request->get("name_hotspot")) {
            $item = $this->mProduct->select(["name_hotspot", "name", "description", "description_en"])->where("name_hotspot", $request->get("name_hotspot"))->first();
            if (!empty($item)) {
                $item->view = $item->view + 1;
                $item->save();
                if (\Session::get("website_language") == "en") {
                    $item->description = $item->description_en;
                    $item->name        = $item->name_en;
                }
                return response()->json(['error' => 0, 'item' => $item]);
            }
        }
        return response()->json(['error' => 1]);
    }

    /**
     * get list product
     */
    public function getList()
    {
        $arrLoDatTrong     = $this->mProduct->select(["name_hotspot"])->where("status", 0)->get();
        $arrLoDatGiuCho    = $this->mProduct->select(["name_hotspot"])->where("status", 1)->get();
        $arrLoDatDaChoThue = $this->mProduct->select(["name_hotspot"])->where("status", 2)->get();

        $loDatTrong     = array();
        $loDatGiuCho    = array();
        $loDatDaChoThue = array();

        foreach ($arrLoDatTrong as $item) {
            $loDatTrong[] =  $item->name_hotspot;
        }

        foreach ($arrLoDatGiuCho as $item) {
            $loDatGiuCho[] =  $item->name_hotspot;
        }

        foreach ($arrLoDatDaChoThue as $item) {
            $loDatDaChoThue[] =  $item->name_hotspot;
        }
        return response()->json([
            'loDatTrong'     => $loDatTrong,
            'loDatDaChoThue' => $loDatDaChoThue,
            'loDatGiuCho'    => $loDatGiuCho,
        ]);
    }
}
