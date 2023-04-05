<?php 
// $file= 'readme.txt';

// if( file_exists($file)){
//     // echo readfile($file) . '<br>';
//     // copy($file,'quotes.txt');
//     // echo realpath($file) . '<br>';
//     // echo filesize($file). '<br>';
//     mkdir('cheto');
     

// }else{
//     echo 'file does not exist';
// }
$file = 'quotes.txt';
$handle=fopen($file, 'a+');
//  echo fread($handle,filesize($file));
// echo fread($handle, 112);
echo fgets($handle);
echo fgets($handle);

fwrite($handle, "\neveryting popular is wrong");
fclose($handle);


?>