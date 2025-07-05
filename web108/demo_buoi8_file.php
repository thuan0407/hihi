<?php

//là đường dẫn tuyệt đối đến thư mục chứa file PHP đang được thực thi 
$path1= __DIR__;
echo"<br> $path1";
//là đường dẫn đến tệp tin hiện tại.
$path2=__FILE__;
echo"<br> $path2";

//trả về thư mục cha của một đường dẫn đã cho
echo "<br>".dirname($path1);
//trả về một mảng chứa thông tin về đường dẫn như dirname, basename, extension và filename
echo "<pre>";
print_r(pathinfo($path2));

?>