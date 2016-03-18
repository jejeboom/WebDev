<?php

class CodeController extends \BaseController {

	private function getLastCode($table, $pkTable){
	$lastCode = DB::table($table)
						->select($pkTable)
					    ->orderBy($pkTable, 'desc')
				       	->take(1)
				       	->get();
			return $lastCode;
	}
	public function showCode($forCode) {
			$pattern = "/(\d+)/";
			$array = preg_split($pattern, $forCode, -1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
			$number = (int)$array[1];
			$number++;
			$number = str_pad($number, 3, "0", STR_PAD_LEFT);
			$code = $array[0];
			$code .= $number;
			return $code;
	}
	
	public function getCateCode(){
		$strCode = $this->getLastCode('tblcategory', 'strCateCode');
		if($strCode == null || $strCode == "") {
			$forCode = "CAT000";
		}
		else {
			$forCode = $strCode["0"]->strCateCode;
		}

		return $this->showCode($forCode);
	}


	public function getCustCode(){
		$strCode = $this->getLastCode('tblcustomer', 'strCustCode');
		if($strCode == null || $strCode == "") {
			$forCode = "CUS000";
		}
		else {
			$forCode = $strCode["0"]->strCustCode;
		}

		return $this->showCode($forCode);
	}


	public function getEmpCode(){
		$strCode = $this->getLastCode('tblemployee', 'strEmpCode');
		if($strCode == null || $strCode == "") {
			$forCode = "EMP000";
		}
		else {
			$forCode = $strCode["0"]->strEmpCode;
		}

		return $this->showCode($forCode);
	}




	public function getProdCode(){
		$strCode = $this->getLastCode('tblitem', 'strItemCode');
		if($strCode == null || $strCode == "") {
			$forCode = "ITM000";
		}
		else {
			$forCode = $strCode["0"]->strItemCode;
		}

		return $this->showCode($forCode);
	}

	public function getSOHCode() {
		$strCode = $this->getLastCode('tblsoheader', 'strSOHCode');
		if($strCode == null || $strCode == "") {
			$forCode = "SOH000";
		}
		else {
			$forCode = $strCode["0"]->strSOHCode;
		}

		return $this->showCode($forCode);
	}
}