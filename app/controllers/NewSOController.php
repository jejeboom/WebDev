<?php

class NewSOController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$code = (new CodeController())->getSOHCode();
		$cust = DB::table('tblcustomer')
		->where('intStatus', '=', 1)
		->get();
		$item = DB::table('tblitem')
		->where('intStatus', '=', 1)
		->get();
		return View::make('transaction/newso')
		->with('cust', $cust)
		->with('code', $code)
		->with('item', $item);
	}
	public function getCustDetails() {
		$res = DB::table('tblcustomer')
		->where('strCustCode', '=', Input::get('code'))
		->get();

		return Response::json($res);
	}

	public function addSOH()
	{
		DB::table('tblsoheader')
		->where('strSOHCode', '=', Input::get('sohcode'))
		->update(
				array(
					'datSOHDateIssued'=>Input::get('date'),
					'datSOHDeliveryDate'=>Input::get('ddate'),
					'strSOHPOHCode'=>Input::get('pocode'),
					'intSOHStatus'=>1,
					'intSOHPayMethod'=>Input::get('pmethod'),
					'intSOHPayTerms'=>Input::get('pterms'),
					'strSOHCustCode'=>Input::get('cust_name'),
					'strSOHCreatedCode'=>'EMP001',
					'strSOHModifiedCode'=>'EMP001',
					)
			);

		
		

		
		return Redirect::to('/new-sales-order');
	}
	public function addSOD() {
		$code = (new CodeController())->getSOHCode();
		$lastCode = DB::table('tblsoheader')
						->select('strSOHCode')
					    ->orderBy('strSOHCode', 'desc')
				       	->take(1)
				       	->get();

		if(Input::get('soh') != $code){
			DB::table('tblsodetail')
			->insert(array(
				array(
					'strSODSOHCode'=>Input::get('soh'),
					'strSODItemCode'=>Input::get('itemcode'),
					'intSODQty'=>Input::get('itemqty'),
					'intStatus'=>1,
					)
			));
		}
		else{
				DB::table('tblsoheader')
		->insert(array(
				array(
					'strSOHCode'=>$code,
					'datSOHDateIssued'=>date('Y-m-d'),
					'datSOHDeliveryDate'=>date('Y-m-d'),
					'strSOHPOHCode'=>"POcode",
					'intSOHStatus'=>1,
					'intSOHPayMethod'=>'1',
					'intSOHPayTerms'=>'1',
					'strSOHCustCode'=>'CUS001',
					'strSOHCreatedCode'=>'EMP001',
					'strSOHModifiedCode'=>'EMP001',
					)
			));
			DB::table('tblsodetail')
			->insert(array(
				array(
					'strSODSOHCode'=>$code,
					'strSODItemCode'=>Input::get('itemcode'),
					'intSODQty'=>Input::get('itemqty'),
					'intStatus'=>1,
					)
			));
		}

	}
}
