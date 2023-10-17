<?php
require_once('models/db.php');
function layDSBL() {
    $sql = "SELECT * FROM binh_luan ORDER BY id_bl DESC";
    $bl = getData($sql, FETCH_ALL);
    return $bl;
}
function xoaBL()
{
    $id_bl = $_GET['id_bl'];
    $sql = "DELETE FROM binh_luan WHERE id_bl=$id_bl";
    $conn = getConnect();
    $statement = $conn->prepare($sql);
    $statement->execute();
    header('Location:index2.php?url=ds_bl');
}
