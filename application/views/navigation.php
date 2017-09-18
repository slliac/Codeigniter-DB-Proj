<link href="/CodeIgniter/css/cssmenu.css" rel="stylesheet" type="text/css" />
<br><br><br><br><br><br><br><br><br>
<div id='cssmenu'>
<ul><li>
<a href="/CodeIgniter/index.php/news/">Home</a></li> 
<?php


foreach ($query_categories->result() as $row) 
{
      echo '<li><a href="' . "/CodeIgniter/index.php/news/listing/" 
      			. $row->subject_id
      			. '">'
      			. $row->subject_area 
      			.'</a></li>'
           
      			;
}?>
</ul>
</div id='cssmenu'>
<br /><br />

<form action="/CodeIgniter/index.php/news/search" method="post" align = "right">
<select name = "sel">
  <option value="book_title">Book title</option>
  <option value="author">Author</option>
  <option value="chapter_title">Chapter title</option>
  <option value="publisher">Publisher</option>
  <option value="sales_volume">Sales volume</option>
  <option value="subject_area">Subject area</option>
  <option value="release_date">Year of Publication</option>

</select>
  <input type="text" name="keyword" id="keyword" />
  <input type="submit" name="Search" id="Search" value="Submit" />
<br><br><br>
</form>

<hr />

