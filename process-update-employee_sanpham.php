<?php
    // addEmployee.php TRUYỀN DỮ LIỆU SANG
    // process-add-Employee: NHẬN DỮ LIỆU TỪ admin.php gửi sang
    if(isset($_POST['txtMaSP'])){
        $MaSP = $_POST['txtMaSP'];
    }
    $TenSP = $_POST['txtTenSP'];
    $Soluongcon = $_POST['txtSoluongcon'];
    $Gianhap = $_POST['txtGianhap'];
    $conn = mysqli_connect('localhost','root','','qlcuahang');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    $sql = "UPDATE tbsanpham SET TenSP='$TenSP', Soluongcon='$Soluongcon', Gianhap='$Gianhap' WHERE MaSP='$MaSP'";
   
    $result = mysqli_query($conn,$sql);

    if(!$result){
     header("location: error.php"); 
    }else{
        header("location: sanpham.php"); 
    }

    mysqli_close($conn);
?>