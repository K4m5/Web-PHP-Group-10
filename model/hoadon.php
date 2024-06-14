<?php
    function insert_hoadon($idorder,$id_phong,$id_user,$tongtien,$role){
        $sql="INSERT INTO hoadon(id_order,id_phong,id_user,tongtien,role) values('$idorder','$id_phong','$id_user','$tongtien','$role')";
        pdo_execute($sql);
    }
    function loadall_hoadon($idhd = 0){
        $sql="SELECT * FROM hoadon order by id_bill desc";
        if($idhd>0){
            $sql.=" and id_bill like '".$idhd."'";
        }
        $listhd=pdo_query($sql);
        return $listhd;
    }
    function delete_hoadon($id){
        $sql="delete from hoadon where id_bill=".$id;
        pdo_execute($sql);
    }
    function loadone_hoadon($id){
        $sql="select * from hoadon where id_bill=".$id;
        $hd=pdo_query_one($sql);
        return $hd;
    }
    function update_hoadon($id, $id_order, $id_phong,$id_user, $tongtien , $role){
        $sql="update hoadon set id_bill = '$id',id_order = '$id_order', id_phong = '$id_phong',id_user = '$id_user',tongtien = '$tongtien',role='$role'
        WHERE id_bill=".$id;
        pdo_execute($sql);
    }
