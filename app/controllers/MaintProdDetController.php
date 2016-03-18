<?php

class MaintProdDetController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$prod = DB::table('tblitem')
				->leftJoin('tblitemprice', 'tblitem.strItemCode', '=', 'tblitemprice.strItemPriceCode')
				->leftJoin('tblcategory', 'tblitem.strItemCateCode', '=', 'tblcategory.strCateCode')
				->where('intStatus', '=', 1)
				->get();
		$cate = DB::table('tblcategory')
				->where('intCateStat', '=', 1)
				->get();
		return View::make('maintenance/proddet')
		->with('prod', $prod)
		->with('cate', $cate);
	}
	public function addProd() {
		$code = (new CodeController())->getProdCode();
		DB::table('tblitem')
			->insert(array(
				array(
					'strItemCode'=>$code,
					'strItemName'=>Input::get('prodname'),
					'strItemCateCode'=>Input::get('catecode'),
					'intStatus'=>1,
					)
				));
		DB::table('tblitemprice')
			->insert(array(
				array(
					'strItemPriceCode'=>$code,
					'dblItemPriceValue'=>Input::get('prodprice'),
					'datAsOf'=>date("Y-m-d"),
					)
				));
		return Redirect::to('maintenance/product-details');
	}
	public function editProd() {
		DB::table('tblitem')
			->where('strItemCode', '=', Input::get('prodid'))
			->update(array(
					'strItemName'=>Input::get('prodname'),
					'strItemCateCode'=>Input::get('catecode'),
				));
		DB::table('tblitemprice')
			->where('strItemPriceCode', '=', Input::get('prodid'))
			->update(array(
					'dblItemPriceValue'=>Input::get('prodprice'),
					'datAsOf'=>date("Y-m-d"),
				));
		return Redirect::to('maintenance/product-details');	
	}
	public function deleteProd() {
		DB::table('tblitem')
			->where('strItemCode', '=', Input::get('prodid'))
			->update(array(
					'intStatus'=>0,
				));
		return Redirect::to('maintenance/product-details');	
	}
}
