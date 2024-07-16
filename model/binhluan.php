<?php 
    function loadall_binhluan($id){
        $sql = "SELECT binhluan.id_bl, binhluan.noidung, taikhoan.ten_tk, binhluan.ngaybinhluan, sanpham.ten_sp 
        FROM `binhluan` 
        LEFT JOIN taikhoan ON binhluan.id_tk = taikhoan.id_tk
        LEFT JOIN sanpham ON binhluan.id_sp = sanpham.id_sp
        WHERE sanpham.id_sp
        GROUP BY binhluan.id_bl
        ORDER BY binhluan.id_bl DESC LIMIT 0, 25";  
        $listbinhluan =  pdo_query($sql);
        return $listbinhluan;
    }
    function loadall_binhluan2(){
        $sql="SELECT * FROM binhluan ";
        $listbinhluan=pdo_query($sql);
        return $listbinhluan;
    }
    function sobl($idbl) {
        $sql = "SELECT COUNT(binhluan.id_bl) as soBinhLuan
                FROM binhluan
                WHERE binhluan.id_sp = $idbl";
        $result =pdo_query($sql);
        return $result;
    }
    
    function insert_binhluan($idsp, $noidung){
        $ngaybinhluan = date('Y-m-d');
        $id_tk = $_SESSION['user']['id_tk'];
        $sql = " INSERT INTO `binhluan`(`noidung`, `id_tk`, `id_sp`, `ngaybinhluan`) 
            VALUES ('$noidung','$id_tk','$idsp','$ngaybinhluan')";
        pdo_execute($sql);
    }
    function delete_binhluan($id){
        $sql="DELETE FROM binhluan WHERE id_bl=".$id;
        pdo_execute($sql);
    }
    function load_binhluan(){
        $sql = " SELECT binhluan.id_bl, binhluan.noidung, taikhoan.user, binhluan.ngaybinhluan, sanpham.ten_sp FROM `binhluan` 
            LEFT JOIN taikhoan ON binhluan.id_tk = taikhoan.id_tk
            LEFT JOIN sanpham ON binhluan.id_sp = sanpham.id_sp
            WHERE  1";     
            $sql .= " GROUP BY binhluan.id_bl
                    ORDER BY binhluan.id_bl DESC";
            
        $listbinhluan =  pdo_query($sql);
        return $listbinhluan;
    }
?>