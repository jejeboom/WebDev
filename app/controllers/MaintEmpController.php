<?php

class MaintEmpController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$emp = DB::table('tblemployee')
		->where('intStatus', '=',  1)
		->get();
		
		return View::make('maintenance/employee')
		->with('emp', $emp);
	}


	public function addEmployee()
	{
		$code = (new CodeController())->getEmpCode();
		DB::table('tblemployee')
		->insert(array(
			array(
				'strEmpCode'=>$code,
				'strEmpFName'=>Input::get('fname'),
				'strEmpMName'=>Input::get('mname'),
				'strEmpLName'=>Input::get('lname'),
				'intEmpGender'=>Input::get('optionsRadios1'),
				'strJobTitle'=>Input::get('job'),
				'intStatus'=>1
				)
			));
		return Redirect::to('maintenance/employee');
	}


	public function editEmployee()
	{
		DB::table('tblemployee')
			->where('strEmpCode', '=', Input::get('empcode'))
			->update(array(
					'strEmpFName'=>Input::get('fname'),
					'strEmpMName'=>Input::get('mname'),
					'strEmpLName'=>Input::get('lname'),
					'intEmpGender'=>Input::get('optionsRadios1'),
					'strJobTitle'=>Input::get('job')
				));
		return Redirect::to('maintenance/employee');	
	}



	public function deleteEmployee() {
		DB::table('tblemployee')
			->where('strEmpCode', '=', Input::get('empcode'))
			->update(array(
					'intStatus'=>0,
				));
		return Redirect::to('maintenance/employee');	
	}

}
