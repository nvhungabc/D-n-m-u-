<?php
function layDSDanhMuc()
{
    $sql = "SELECT * FROM loai_xe ";
    $list_dm = getData($sql, FETCH_ALL);
    return $list_dm;
}
function lay5DSDanhMuc()
{
    $sql = "SELECT * FROM loai_xe where 1 order by ma_loai desc limit 0,5 ";
    $list_dm = getData($sql, FETCH_ALL);
    return $list_dm;
}
?>