<html>
<body>
<table>
<?php 
    $cmd="/var/www/html/createvm.sh";
    foreach ($_POST as $key => $value) {
       $cmd = $cmd . " " . $value; 
    }
    echo $cmd; 
    exec($cmd, $fullList, $status);
if ($status !== 0)
{
    exit('command didn\'t finished as expected: '.$status);
}
print_r($fullList);
?>
</table>
</body>
</html> 
