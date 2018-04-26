<?php
    
namespace Controllers;

/**
 * Class IndexController
 * @package Controllers
 * @author Hugo Minari Diniz <hugominari@icloud.com>
 */
class IndexController
{
    public function showContent()
    {
        $content = '';
        
	    for($num = 1; $num <= 100; ++$num)
	    {
		    $result = isMultiple($num);
		    $content .= "<p><b> {$result} </b></p>";
	    }
	    
	    return $content;
    }
}