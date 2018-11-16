
<?php
    $n = date('N');
    switch($n)
    {
    	case '1': echo '<img src="./week/monday.jpg">';
    	    break;
    	case '2': echo '<img src="./week/tuesday.jpg">';
    	    break;
    	case '3': echo '<img src="./week/wendesday.jpg">'; 
    	    break;      
    	case '4': echo '<img src="./week/thursday.jpg">';
    		break;
    	case '5': echo '<img src="./week/friday.jpg">';
    	    break;
    	case '6': echo '<img src="./week/saturday.jpg">';
    		break;
    	case '7': echo '<img src="./week/sunday.jpg">';
    		break;
    	default:
    	          echo '________';

    } 
?>
