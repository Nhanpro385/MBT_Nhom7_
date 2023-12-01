<?php

function insert_cinema($name, $address, $contact_info, $number_of_halls) {
    $sql = "INSERT INTO cinemas (name, address, contact_info, number_of_halls) VALUES (?, ?, ?, ?)";
    pdo_execute($sql, $name, $address, $contact_info, $number_of_halls);
}

function update_cinema($cinema_id, $name, $address, $contact_info, $number_of_halls) {
    $sql = "UPDATE cinemas SET name = ?, address = ?, contact_info = ?, number_of_halls = ? WHERE cinema_id = ?";
    pdo_execute($sql, $name, $address, $contact_info, $number_of_halls, $cinema_id);
}

function delete_cinema($cinema_id) {
    $sql = "DELETE FROM cinemas WHERE cinema_id = ?";
    pdo_execute($sql, $cinema_id);
}

function select_all_cinemas() {
    $sql = "SELECT * FROM cinemas";
    return pdo_query($sql);
}

function select_cinema_by_id($cinema_id) {
    $sql = "SELECT * FROM cinemas WHERE cinema_id = ?";
    return pdo_query_one($sql, $cinema_id);
}
?>
