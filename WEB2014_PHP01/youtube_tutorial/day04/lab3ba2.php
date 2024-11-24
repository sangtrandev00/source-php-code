<?php
//i. Add a backslash in front of each double quote ("):
$str = addslashes('What does "yolo" mean?');
echo($str);

// ii.stripslashes ($str) --> xóa các ký tự \ trong chuỗi $tr
echo stripslashes("Who\'s Peter Griffin?");

// iii. strlen($string);
echo strlen("Hello World, I am Sang");

// iv. str_replace( $chuoi_tim, $chuoi_thay_the, $chuoi_nguon );
echo str_replace("world","Peter","Hello world!"); // output: Hello Peter !!!

// v. md5( $str) --> loại mã hóa 32 ký tự. Nguyên tắc hoạt động của loại mã hóa này là gì ?

$str = "Hello";
echo md5($str);

// vi. sha1($string) --> loại mã hóa 40 kí tự
$str = "Hello";
echo sha1($str);

// vii. htmlentities($str); htmlspecialchars( $string);
// htmlspecialchars
$str = "This is some <b>bold</b> text.";
echo htmlspecialchars($str);
// htmlentities
$str = '<a href="https://www.w3schools.com">Go to w3schools.com</a>';
echo htmlentities($str);

// html_entity_decode($string); htmlspecialchars_decode($string);
$str = '&lt;a href=&quot;https://www.w3schools.com&quot;&gt;w3schools.com&lt;/a&gt;';
echo html_entity_decode($str);

$str = "This is some &lt;b&gt;bold&lt;/b&gt; text.";
echo htmlspecialchars_decode($str);

// ix. substr( $string, $start, $length )-->
echo substr("Hello world",6);

// x. strstr($string, $ky_tu_cho_truoc) --> The strstr() function searches for the first occurrence of a string inside another string.
echo strstr("Hello world!","world"); // output: world!

// xi. strpos($str,$chuoi_tim); --> Trả về vị trí chuỗi có tồn tại trong mảng.
echo strpos("I love php, I love php too!","php"); // output: 7

// xii. strtolower($str); strtoupper($string );
echo strtolower("Hello WORLD.");
echo strtoupper("Hello WORLD!");

// xiv. nl2br($string); The nl2br() function inserts HTML line breaks (<br> or <br />) in front of each newline (\n) in a string.
echo nl2br("One line.\nAnother line.",false);

// xv. The json_decode() function is used to decode or convert a JSON object to a PHP object.
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

var_dump(json_decode($jsonobj));

// The json_encode() function is used to encode a value to JSON format.
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

echo json_encode($age);



?>


?>