<?php
include ('Employee.php');
$employees = array(
		"Employee1" => new Employee(
				/*First Name*/	"John",
				 /*Last Name*/	"Alabastser",
				 /*Job Title*/	"Job Title",
				  /*Benefits*/	"Package A",
				  /*Pay Rate*/	"$0 per year",
			   /*Hours this Week*/  0,
			   /*Hours last Week*/  0,
		  	     /*Average Hours*/  0,
			  /*Vacation Accrued*/	"0 hours",
				    /*Form A*/	true,
				    /*Form B*/	false,
				    /*Form C*/	false,
				    /*Form D*/	false,
		       /*Form Total Progress*/  100),

		"Employee2" => new Employee(
				/*First Name*/	"Bill",
				 /*Last Name*/	"Brickman",
				 /*Job Title*/	"Job Title",
				  /*Benefits*/	"Package A",
				  /*Pay Rate*/	"$0 per year",
			   /*Hours this Week*/  0,
			   /*Hours last Week*/  0,
		  	     /*Average Hours*/  0,
			  /*Vacation Accrued*/	"0 hours",
				    /*Form A*/	false,
				    /*Form B*/	false,
				    /*Form C*/	false,
				    /*Form D*/	false,
		       /*Form Total Progress*/  20),
	);
?>
