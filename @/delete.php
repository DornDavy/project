<?php
include '../include/config.php';
//include '../include/resource.php';
include '../include/libraries.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $table = 'customer';
    $field = 'id';
    destroy($table, $field, $id);
    header('location:index.php');
}