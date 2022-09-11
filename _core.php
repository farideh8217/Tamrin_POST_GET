<?php
session_start();

$database = [
  'host'=>'localhost',
  'dbname'=>'project',
  'user'=>'root',
  'pass'=>''
];
try {
  $db = new PDO("mysql:host={$database['host']};dbname={$database['dbname']}", $database['user'], $database['pass']);
} catch (PDOException $e) {
  exit("An error happend, Error: " . $e->getMessage());
}
//////////////////////////////
function getIdByUserPass(string $username, string $password): ?int
{
    global $db;

    $sql = "SELECT `id` FROM `users` WHERE `username` = :username AND `password` = :password";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":password", $password);
    $stmt->execute();

    $user_id = $stmt->fetchColumn();
    if ($user_id === false) return null;
    return $user_id;
}
////////////////////////////////////
function getprojects() {
    global $db;

    $sql = "SELECT * FROM projects";
    $stmt = $db->prepare($sql);
    $stmt->execute();

    $projects = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $projects;
}
///////////////////////////////////
function getproducts($project_id) {
    global $db;

    $sql = "SELECT * FROM product WHERE project_id = :project_id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(":project_id",$project_id);
    $stmt->execute();

    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $products;
}