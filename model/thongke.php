<?php
    function insert_giohang($iddonhang,$user,$address,$tel,$ghichu,$ngaydathang,$vanchuyen){
        $sql="insert into giohang(iddonhang,user,address,tel,ghichu,ngaydathang,vanchuyen) values('$iddonhang','$user','$address','$tel','$ghichu','$ngaydathang','$vanchuyen')";
        pdo_execute($sql);
    }
    function loadall_donhang(){
        $sql="SELECT * FROM giohang order by iddonhang desc";
        $listdh=pdo_query($sql);
        return $listdh;
    }
    function delete_donhang($iddonhang){
        $sql="delete from giohang where iddonhang=".$iddonhang;
        pdo_execute($sql);
    }
    function loadall_thongke_loaiphong(){
        $sql= "select loaiphong.id_loaiphong as malp,loaiphong.name_loaiphong as tenlp, count(phong.id_phong) as countp, min(phong.price) as minprice, max(phong.price) as maxprice, avg(phong.price) as avgprice";
        $sql.=" from phong left join loaiphong on loaiphong.id_loaiphong=phong.id_loaiphong";
        $sql.=" group by loaiphong.id_loaiphong order by loaiphong.id_loaiphong desc";
        $listthongke=pdo_query($sql);
        return $listthongke;
    }
    function loadall_thongke_phong(){
        $sql= "select phong.id_phong as map,phong.name_phong as tenp, phong.price as price, phong.sokhach as sokhach,phong.id_loaiphong as id_loaiphong";
        $sql.=" from phong left join loaiphong on loaiphong.id_loaiphong=phong.id_loaiphong";
        $sql.=" group by phong.id_phong order by phong.id_phong desc";
        $listthongkep=pdo_query($sql);
        return $listthongkep;
    }
    function loadall_thongke_datphong(){
        $sql= "select datphong.id_phong as map,datphong.id_user as tenkh, datphong.sokhach as sokhach, datphong.tongtien as tongtien";
        $sql.=" from phong left join datphong on datphong.id_phong=phong.id_phong";
        $sql.=" group by datphong.id_phong order by datphong.id_phong desc";
        $listthongkedp=pdo_query($sql);
        return $listthongkedp;
    }
?>