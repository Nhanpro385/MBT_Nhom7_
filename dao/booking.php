<?php 
function insert_booking_history($customer_id,$booking_time,$total_price,$status) {
    $sql="INSERT INTO booking_history(customer_id,booking_time,total_price,status) VALUES(?,?,?,?)";
    pdo_execute($sql);
}

function select_booking_history($customer_id){
    $sql=" SELECT * FROM booking_history WHERE customer_id= ?";
    return pdo_query_one($sql);
}


?>