<?php
echo "Hello World! <br>";

// some numeric stuff
$age = 21; 
$retirement_age = 65; 
echo "You have ". ($retirement_age - $age)." years left until you can retire. <br>";
    
echo "This is a 
multi-line
statement <br>";


$text = <<<_END
This will apparently    preserve
white

space
_END;

echo nl2br($text);

?>