<?php 
    function user_insert($name,$email,$phone,$address,$password,$role){
        $sql = "INSERT INTO customers(name,email,phone,address,password,role) VALUES(?,?,?,?,?,?)";
        pdo_execute($sql,$name,$email,$phone,$address,$password,$role);
    }
    function user_update($id,$name,$email,$phone,$address,$password,$role){
        $sql = "UPDATE customers SET name=?,email=?,phone=?,address=?,password=?,role=? WHERE id=?";
        pdo_execute($sql,$name,$email,$phone,$address,$password,$role,$id);
    }
    function user_update_no_pass($id,$name,$email,$phone,$address,$role){
        $sql = "UPDATE customers SET name=?,email=?,phone=?,address=?,role=? WHERE customer_id=?";
        pdo_execute($sql,$name,$email,$phone,$address,$role,$id);
    }
    function user_delete($id){
        $sql = "DELETE FROM customers WHERE id=?";
        if(is_array($id)){
            foreach ($id as $ma) {
                pdo_execute($sql, $ma);
            }
        }
        else{
            pdo_execute($sql, $id);
        }
    }
    function user_select_all(){
        $sql = "SELECT * FROM customers where status=0 ORDER BY customer_id  DESC ";
        return pdo_query($sql);
    }
    function user_select_by_id($id){
        $sql = "SELECT * FROM customers WHERE customer_id =?";
        return pdo_query_one($sql, $id);
        
    }
    function user_select_by_email($email){
        $sql = "SELECT * FROM customers WHERE email =?";
        return pdo_query_one($sql, $email);

    }
    function user_exist($id){
        $sql = "SELECT count(*) FROM customers WHERE customer_id=?";
        return pdo_query_value($sql, $id) > 0;
    }
    
function delete_user($food_id){
    $sql="UPDATE customers set status=1 WHERE customer_id=?";
    pdo_execute($sql,$food_id);
}
?>