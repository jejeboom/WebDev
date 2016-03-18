<?php

class MaintCustController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	
	public function index()
	{
		$cust = DB::table('tblcustomer')
				->where('intStatus', '=', 1)
				->get();
		return View::make('maintenance/customer')
		->with('cust', $cust);
	}// for showing of data from tblcustomer


	public function addCustomer()
	{
		$code = (new CodeController())->getCustCode();
		DB::table('tblcustomer')
		->insert(array(
			array(
				'strCustCode'=>$code,
				'strCompanyName'=>Input::get('compName'),
				'strCustName'=>Input::get('custName'),
				'strCustContactNumber'=>Input::get('custNum'),
				'strCustEmailAdd'=>Input::get('emailadd'),
				'strCustAddress'=>Input::get('address'),
				'intStatus'=>1
				)
			));
		return Redirect::to('maintenance/customer');
	}

	public function editCustomer()
	{
		DB::table('tblcustomer')
			->where('strCustCode', '=', Input::get('custCode'))
			->update(array(
					'strCustName'=>Input::get('custName'),
					'strCustContactNumber'=>Input::get('custNum'),
					'strCustEmailAdd'=>Input::get('emailadd'),
					'strCustAddress'=>Input::get('address')
				));
		return Redirect::to('maintenance/customer');	
	}


	public function deleteCustomer() {
		DB::table('tblcustomer')
			->where('strCustCode', '=', Input::get('custCode'))
			->update(array(
					'intStatus'=>0,
				));
		return Redirect::to('maintenance/customer');	
	}


}
