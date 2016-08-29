<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Form Feedback</title>
</head>
<body>
<? php
// This is to collect box array value as global_variables is set off in PHP5 by default
$box=$_POST['box'];
while (list ($key,$val) = @each ($box)) {
echo "$val,";
}

echo ""
?>


<form method=post action='my_validation_form.php'>;
<input type=checkbox name=box[] value='John'>
&nbsp;John
<input type=checkbox name=box[] value='Mike'>
&nbsp;Mike</td>
<input type=checkbox name=box[] value='Rone'>
&nbsp;Rone

<input type=checkbox name=box[] value='Mathew'>
&nbsp;Mathew
<input type=checkbox name=box[] value='Reid'>
&nbsp;Reid
<input type=checkbox name=box[] value='Simon'>
&nbsp;Simon


<input type=submit 
value=Select></form>

</body>
</html>
