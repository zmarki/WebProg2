<?php
if (isset($_POST['blog_cim']))
{
	$blog_cim=$_POST['blog_cim'];
	$blog_text=$_POST['blog_text'];
}


?>

<title><?php echo $blog_cim; ?></title>
<div>
	<?php
	echo $blog_text;
?>
</div>
