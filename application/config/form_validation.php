<?php
/*******************************************************************
File Name	:form_validation.php
Purpose		:To preserve all validation rules for various forms & it must be autoloaded to use its rule anywhere in any form
File Type	:config(validation)
Created by	:Kumar Gaurav
Created Date:13-Dec-2012
********************************************************************/
$config = array(
		'selectedValidation' => array(             
                                            array(
                                                    'field'   => 'selCountry',
                                                    'label'   => 'Country',
                                                    'rules'   => 'selected[selCountry]'
                                            ),
                       
                                             
				  ), 
						  
		 );
               
	

 
		
		
?>