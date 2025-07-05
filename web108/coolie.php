<?php
//khởi tạo cookie
setcookie ("user","thuần",time()+900);
if(isset($_COOKIE["user"])){
    echo "chào cookie có tên là: ".$_COOKIE["user"];

}else{
    echo "không tồn tại 1 cookie nào.";
}
//hủy
// setcookie ("user","thuần",time()-900);
?>