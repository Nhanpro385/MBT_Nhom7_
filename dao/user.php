<?php
function user_insert($name, $email, $phone, $address, $password, $role)
{
    $sql = "INSERT INTO customers(name,email,phone,address,password,role) VALUES(?,?,?,?,?,?)";
    pdo_execute($sql, $name, $email, $phone, $address, $password, $role);
}
function user_update($id, $name, $email, $phone, $address, $password, $role)
{
    $sql = "UPDATE customers SET name=?,email=?,phone=?,address=?,password=?,role=? WHERE id=?";
    pdo_execute($sql, $name, $email, $phone, $address, $password, $role, $id);
}
function user_delete($id)
{
    $sql = "DELETE FROM customers WHERE id=?";
    if (is_array($id)) {
        foreach ($id as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $id);
    }
}
function user_select_all()
{
    $sql = "SELECT * FROM customers ORDER BY customer_id  DESC";
    return pdo_query($sql);
}
function user_select_by_id($id)
{
    $sql = "SELECT * FROM customers WHERE customer_id =?";
    return pdo_query_one($sql, $id);
}
function user_select_by_email($email)
{
    $sql = "SELECT * FROM customers WHERE email =?";
    return pdo_query_one($sql, $email);
}
function user_exist($id)
{
    $sql = "SELECT count(*) FROM customers WHERE customer_id=?";
    return pdo_query_value($sql, $id) > 0;
}
function email_exists($email)
{
    $sql = "SELECT count(*) FROM customers WHERE email=?";
    return pdo_query_value($sql, $email) > 0; //
}
function isValidPhoneNumber($phoneNumber)
{
    // Biểu thức chính quy kiểm tra định dạng số điện thoại
    $phoneRegex = '/^[0-9]{10,}$/';

    // Sử dụng preg_match để kiểm tra
    return preg_match($phoneRegex, $phoneNumber);
}
