<?php

class MaintProdCatController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$cate = DB::table('tblcategory')
				->where('intCateStat', '=', 1)
				->get();
		return View::make('maintenance/prodcat')
		->with('cate', $cate);
	}

	public function addCategory() {
		$code = (new CodeController())->getCateCode();
		DB::table('tblcategory')
			->insert(array(
				array(
					'strCateCode'=>$code,
					'strCateName'=>Input::get('catename'),
					'strCateDesc'=>Input::get('catedesc'),
					'intCateStat'=>1,
					)
				));
		return Redirect::to('maintenance/product-category');
	}
	public function editCategory() {
		DB::table('tblcategory')
			->where('strCateCode', '=', Input::get('cateid'))
			->update(array(
					'strCateName'=>Input::get('catename'),
					'strCateDesc'=>Input::get('catedesc'),
				));
		return Redirect::to('maintenance/product-category');	
	}
	public function deleteCategory() {
		DB::table('tblcategory')
			->where('strCateCode', '=', Input::get('cateid'))
			->update(array(
					'intCateStat'=>0,
				));
		return Redirect::to('maintenance/product-category');	
	}
}
