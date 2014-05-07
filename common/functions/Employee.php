<?php

class Employee{

	public $firstName="First";
	public $lastName="Last";
	public $jobTitle="Job Title";
	public $benefitsPackage="Package A";
	public $payRate="$0 per year";

	public $hoursThisWeek=0;
	public $hoursLastWeek=0;
	public $averageHours=0;
	public $vacationAccrued="0 Hours";
	
	public $formA=false;
	public $formB=false;
	public $formC=false;
	public $formD=false;

	public $formProgress=0;
	
	public function __construct($fn, $ln, $jt, $bp, $pr, $htw, $hlw, $avg, $va, $fa, $fb, $fc, $fd, $fp)
    	{
		$this->firstName=$fn;
		$this->lastName=$ln;
		$this->jobTitle=$jt;
		$this->benefitsPackage=$bp;
		$this->payRate=$pr;

		$this->hoursThisWeek=$htw;
		$this->hoursLastWeek=$hlw;
		$this->averageHours=$avg;
		$this->vacationAccrued=$va;
		
		$this->formA=$fa;
		$this->formB=$fb;
		$this->formC=$fc;
		$this->formD=$fd;

		$this->formProgress=$fp;
	}
}

?>
