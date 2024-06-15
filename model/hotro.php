<?php
    function insert_hotro($name_user,$tel,$ghichu){
        $sql = "INSERT INTO hotro(name_user,tel,ghichu) values ('$name_user','$tel','$ghichu')";
        pdo_execute($sql);
    }
    function loadall_hotro($id){
        $sql="select * from hotro where 1";
        if($id>0) $sql.=" AND id_hotro='".$id."'";
        $sql.=" order by id_hotro desc";
        $listhotro=pdo_query($sql);
        return $listhotro;   
    }
    function delete_hotro($id){
        $sql="delete from hotro where id_hotro=".$id;
        pdo_execute($sql);
    }

?>