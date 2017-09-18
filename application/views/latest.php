<link href="/CodeIgniter/css/home.css" rel="stylesheet" type="text/css" />
<div id = "latest">
<h2><?php echo $pageHeading2; ?></h2>

<img src="http://www.sconews.co.uk/wp-content/uploads/2012/01/10-OPEN-BOOK.jpg" height="250" width="150" id="latest"><br>

<?php
$count = 1;
foreach ($query_latest->result() as $row) 
{
      echo  "<p>" . $count . " . " 
      			. '<a href="' . "/CodeIgniter/index.php/news/fulltext/" 
      			. $row->ISBN
      			. '" />'
      			. $row->book_title 
      			. "</p></a>"
                                    ."<br>";
$count++;
}?>

</div>