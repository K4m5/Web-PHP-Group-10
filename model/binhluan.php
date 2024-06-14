<?php
    function insert_binhluan($noidung,$iduser,$ngaybinhluan,$idroom){
        $sql="insert into binhluan(noidung,id_user,ngaybinhluan,id_phong) values('$noidung',$iduser,'$ngaybinhluan',$idroom)";
        pdo_execute($sql);
    }
    function loadall_binhluan(){
        $query="SELECT * FROM binhluan order by id_comment desc";
        $listbl=pdo_query($query);
        return $listbl;
    }
    function load_binhluan($id){
        $sql = "select taikhoan.username,binhluan.id_comment,binhluan.id_phong, binhluan.noidung, binhluan.ngaybinhluan
                from binhluan inner join taikhoan on taikhoan.id_user = binhluan.id_user
                where binhluan.id_phong = $id order by binhluan.id_comment desc";
        $listbl=pdo_query($sql);
        return $listbl;
    }
    function delete_binhluan($id){
        $sql="delete from binhluan where id_comment=".$id;
        pdo_execute($sql);
    }
    function loadone_binhluan($id){
        $sql="select * from binhluan where id_comment=".$id;
        $bl=pdo_query_one($sql);
        return $bl;
    }
    function update_binhluan($id,$noidung){
        $sql="update binhluan set noidung = '$noidung' where id_comment= $id";
        pdo_execute($sql);
    }
?>
