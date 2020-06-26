<?php
$obj_mysqli = new mysqli("localhost", "root", "", "schoolerdb");

if ($obj_mysqli->connect_errno) {
    die("Erro de conexão: " . $obj_mysqli->connect_errno);
}