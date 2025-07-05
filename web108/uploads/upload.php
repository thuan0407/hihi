<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btnFile'])) {
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["file"]["name"]);
    $uploadOK = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Kiểm tra file đã tồn tại
    if (file_exists($targetFile)) {
        echo "❌ Xin lỗi, file đã tồn tại.<br>";
        $uploadOK = 0;
    }

    // Kiểm tra kích thước file
    if ($_FILES["file"]["size"] > 500000) {
        echo "❌ Xin lỗi, file quá lớn.<br>";
        $uploadOK = 0;
    }

    // Kiểm tra định dạng file
    if (!in_array($imageFileType, ["jpg", "jpeg", "png", "gif"])) {
        echo "❌ Chỉ cho phép upload các file JPG, JPEG, PNG & GIF.<br>";
        $uploadOK = 0;
    }

    // Tiến hành upload
    if ($uploadOK == 0) {
        echo "❌ File của bạn không được upload.";
    } else {
        // Tạo thư mục nếu chưa có
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
            echo "✅ File <b>" . htmlspecialchars(basename($_FILES["file"]["name"])) . "</b> đã upload thành công.";
        } else {
            echo "❌ Xảy ra lỗi khi upload file.";
        }
    }
} else {
    echo "⛔ Truy cập không hợp lệ!";
}
?>

