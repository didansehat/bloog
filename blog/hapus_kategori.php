<?php
include "koneksi.php";

$id = $_POST['id'];

$stmt = $conn->prepare("DELETE FROM kategori_artikel WHERE id=?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo json_encode(["status" => "sukses"]);
} else {
    echo json_encode(["status" => "gagal"]);
}
?>