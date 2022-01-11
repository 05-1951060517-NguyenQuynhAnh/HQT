<?php
    // addEmployee.php TRUYỀN DỮ LIỆU SANG
    // process-add-Employee: NHẬN DỮ LIỆU TỪ admin.php gửi sang
    $MaSP = $_POST['txtMaSP'];
    $TenSP = $_POST['txtTenSP'];
    $Soluongcon = $_POST['txtSoluongcon'];
    $Gianhap = $_POST['txtGianhap'];
     
    $conn = mysqli_connect('localhost','root','','qlcuahang');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    
    $sql = "INSERT INTO tbsanpham (MaSP,TenSP,Soluongcon,Gianhap) VALUES('$MaSP','$TenSP','$Soluongcon','$Gianhap')";

    $number = mysqli_query($conn,$sql);

    if($number > 0){
     header("location: sanpham.php"); //Chuyển hướng về Trang quản trị
    }else{
        header("location: error.php"); //Chuyển hướng, hiển thị thông báo lỗi
    }

    mysqli_close($conn);
?>