<html>
<body>
<form method="post" action="testglobals.php?a=5&c=9&d=8&cd=8,9">
<input type="textfield" name="text" value="here"/>
<input type="submit" value="Go"/>
</form>
<?php
echo '<pre>';
print_r($_GET);
print_r($_POST);
echo '</pre>';
?>
</body>
</html>