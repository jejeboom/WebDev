<?php

class ReportsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('report');
	}
	public function getReport() {
		$res = DB::table('tblsoheader')
		->join('tblsodetail', 'tblsoheader.strSOHCode', '=', 'tblsodetail.strSODSOHCode')
		->select('tblsoheader.strSOHCode', 'tblsoheader.datSOHDateIssued', 'tblsoheader.datSOHDeliveryDate', 'tblsodetail.strSODItemCode', 'tblsodetail.intSODQty') 
		->where('tblsoheader.datSOHDateIssued', '>=', Input::get('fromDate'))
		->where('tblsoheader.datSOHDeliveryDate', '<=', Input::get('toDate'))
		->get();

		return Response::json($res);
	}	
}
