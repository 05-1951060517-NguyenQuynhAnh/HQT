<?php
    // addEmployee.php TRUYỀN DỮ LIỆU SANG
    // process-add-Employee: NHẬN DỮ LIỆU TỪ admin.php gửi sang
    if(isset($_POST['txtMaK'])){
        $MaK = $_POST['txtMaK'];
    }
    $Hoten = $_POST['txtHoten'];
    $Diachi = $_POST['txtDiachi'];
    $Sđt = $_POST['txtSđt'];
    $conn = mysqli_connect('localhost','root','','qlcuahang');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    $sql = "UPDATE tbkhachhang SET Hoten='$Hoten', Diachi='$Diachi', Sđt='$Sđt' WHERE MaK='$MaK'";
   
    $result = mysqli_query($conn,$sql);

    if(!$result){
     header("location: error.php"); 
    }else{
        header("location: khachhang.php"); 
    }

    mysqli_close($conn);
?>