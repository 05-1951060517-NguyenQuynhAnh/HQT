<?php
    // addEmployee.php TRUYỀN DỮ LIỆU SANG
    // process-add-Employee: NHẬN DỮ LIỆU TỪ admin.php gửi sang
    if(isset($_POST['txtMaNV'])){
        $MaNV = $_POST['txtMaNV'];
    }
    $Hoten = $_POST['txtHoten'];
    $Ngaysinh = $_POST['txtNgaysinh'];

    $Gioitinh = $_POST['txtGioitinh'];
    
    $conn = mysqli_connect('localhost','root','','qlcuahang');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    $sql = "UPDATE tbnhanvien SET TenNV='$Hoten', Ngaysinh='$Ngaysinh', Gioitinh='$Gioitinh' WHERE MaNV='$MaNV'";
   
    $result = mysqli_query($conn,$sql);

    if(!$result){
     header("location: error.php"); 
    }else{
        header("location: nhanvien.php"); 
    }

    mysqli_close($conn);
?>