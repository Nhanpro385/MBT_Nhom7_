<?php
function insert_food($item_name, $item_price, $img) {
    $sql = "INSERT INTO foods (item_name, item_price, img) VALUES (?, ?, ?)";
    pdo_execute($sql,$item_name, $item_price, $img);
}
function update_food( $item_name, $item_price, $img,$item_id,) {
    $sql = "UPDATE foods SET item_name = ?, item_price = ?, img = ? WHERE item_id = ?";
    pdo_execute($sql,$item_name, $item_price, $img, $item_id);
}
function update_food_n0_img( $item_name, $item_price,$item_id, ) {
    $sql = "UPDATE foods SET item_name = ?, item_price = ? WHERE item_id = ?";
    pdo_execute($sql,$item_name, $item_price,  $item_id);
}


function update_status_food($item_id, $new_status) {
    $sql = "UPDATE foods SET status = ? WHERE item_id = ?";
    pdo_execute($sql, $new_status, $item_id);
}

function delete_food($food_id){
    $sql="UPDATE foods set status=1 WHERE item_id=?";
    pdo_execute($sql,$food_id);
}

function select_all_food() {
    $sql = "SELECT * FROM foods where status=0";
    return pdo_query($sql);
}

function select_by_id_food($item_id) {
    $sql = "SELECT * FROM items WHERE item_id = ?";
    return pdo_query($sql, $item_id);
}

function dashboard_food($year,$month){
$sql="SELECT
DATE_FORMAT(bh.booking_time, '%Y-%m') AS 'Tháng-Năm',
bf.snack_or_drink_id,
COUNT(bf.booking_snack_id) AS 'Số Lượt Đặt'
FROM
booking_history bh
JOIN
bookings b ON bh.booking_id = b.booking_id
JOIN
booking_foods bf ON b.booking_id = bf.booking_id
WHERE
YEAR(bh.booking_time) = ?
AND MONTH(bh.booking_time) = ?
GROUP BY
DATE_FORMAT(bh.booking_time, '%Y-%m'),
bf.snack_or_drink_id
ORDER BY
'Tháng-Năm', bf.snack_or_drink_id;
select food";
pdo_execute($sql, $year,$month);
}






?>