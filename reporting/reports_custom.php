<?php

global $reports, $dim;

/*
../../../reporting/includes/reports_classes.inc:define('RC_CUSTOMER', 0);
../../../reporting/includes/reports_classes.inc:define('RC_SUPPLIER', 1);
../../../reporting/includes/reports_classes.inc:define('RC_INVENTORY', 2);
../../../reporting/includes/reports_classes.inc:define('RC_MANUFACTURE', 3);
../../../reporting/includes/reports_classes.inc:define('RC_DIMENSIONS', 4);
../../../reporting/includes/reports_classes.inc:define('RC_BANKING', 5);
../../../reporting/includes/reports_classes.inc:define('RC_GL', 6);
*/
			//Looks like it searches for file rep_bad_allocations...
$reports->addReport(RC_GL,"_bad_gltransbal",_('Bad GL Transaction Balances'),
	array(	_('Date') => 'DATE',
	//		_('Inventory Category') => 'CATEGORIES',
	//		_('Location') => 'LOCATIONS',
			_('Comments') => 'TEXTBOX',
			_('Destination') => 'DESTINATION'));				
?>
