<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $pageTitle; ?></title>
</head>

<body>
<h2><?php echo $pageHeading; ?></h2>
<?php
foreach ($query_categories->result() as $row) 
			{
      			echo  "<p>"
      			. '<a href="' . "/CodeIgniter/index.php/news/listing/" 
      			. $row->subject_id
      			. '" />'
      			. $row->book_title 
      			. "</p>";
      }
?>
</body>
