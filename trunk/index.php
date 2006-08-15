<html>
<head></head>
<body>

<?php

    require_once('config/config.ismail.php');

    $constants = array_reverse(get_defined_constants());
    
    echo '<table>';
    while (list($key, $value) = each($constants)) {        
        echo '<tr><td>' . $key . '</td><td>' . $value . '</td></tr>';
    }    
    echo '</table>';
?>

</body>
</html>