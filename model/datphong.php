<?php
    function insert_datphong($id_phong, $id_user,$sokhach,$ngayden,$ngaytra,$tongtien){
        $sql = "INSERT INTO datphong(id_order,id_phong,id_user,sokhach,ngayden,ngaytra,tongtien,tinhtrang) values('','$id_phong','$id_user','$sokhach','$ngayden','$ngaytra','$tongtien', '')";
        pdo_execute($sql);
    }
    function delete_datphong($id){
        $sql="delete from datphong where id_order=".$id;
        pdo_execute($sql);
    }
    function loadall_datphong(){
        $sql="SELECT * FROM datphong order by id_order desc";
        $listdp=pdo_query($sql);
        return $listdp; 
    }
    function loadall_datphong_timkiem(){
        $sql= "select phong.id_phong,phong.name_phong,phong.img,phong.sokhach,phong.price,phong.id_loaiphong from phong
             ,datphong where datphong.id_phong !=phong.id_phong";
        $listsearch=pdo_query($sql);
        return $listsearch;
    }
    function loadone_datphong($id){
        $sql="select * from datphong where id_order=".$id;
        $dp=pdo_query_one($sql);
        return $dp;
    }
    function update_datphong($id,$maphong,$makhachhang,$sokhach,$ngayden,$ngaytra,$tongtien,$giaodich,$tinhtrang){
        $sql="UPDATE datphong
            SET id_phong = $maphong,id_user = '$makhachhang',sokhach = '$sokhach',ngayden = '$ngayden',ngaytra = '$ngaytra',tongtien = '$tongtien',giaodich = '$giaodich',tinhtrang = '$tinhtrang'
            WHERE id_order=$id";
        pdo_execute($sql);
    }
    function loadall_phongdadat(){
        $sql = "select * from datphong inner join phong on phong.id_phong = datphong.id_phong";
        $listpdadat = pdo_query($sql);
        return $listpdadat; 
    }
    function loadall_phongtrong($calendar){
        $dates = array($calendar);
        foreach($dates as $item){
            $sql = "select * from datphong where ngayden = '$item' OR ngaytra = '$item'";
            $listp = pdo_query($sql);
        }
        return $listp;
    }
    function update_tinhtrang(){
        $sql="SELECT * FROM datphong";
        $listdp=pdo_query($sql);
        $date = getdate();
        $ngaykt = $date['year']."-". $date['mon']."-".$date['mday'];
            
        foreach($listdp as $item){
            $idorder = $item['id_order'];
            
            if($ngaykt === $item['ngayden'] || $ngaykt === $item['ngaytra'] || $ngaykt < $item['ngayden'] || $ngaykt < $item['ngaytra']){
                    // nếu true thì cập nhật lại tình trạng ở bảng phòng
                $updateroom = "update datphong set tinhtrang = 1 where id_order = $idorder";
                pdo_execute($updateroom);
            }else {
                    // nếu true thì cập nhật lại tình trạng ở bảng phòng
                $updateroom = "update datphong set tinhtrang = 0 where id_order = $idorder";
                pdo_execute($updateroom);
            }
        }
    }
    function update_giaodich(){
        $sql = "update datphong set giaodich = 1 where id = ";
        pdo_execute($sql);
    }
?>
