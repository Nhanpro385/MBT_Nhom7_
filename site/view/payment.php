<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">

    <title>Document</title>
</head>

<body>
    <section>
        <div class="container">
            <h1 class="heading_payment">thông tin vé của bạn</h1>
            <div class="payment">
                <div class="ticket_info">
                    <div class="box_ticket">
                        <div class="ticket_movie_info">
                            <img src="https://d1j8r0kxyu9tj8.cloudfront.net/files/1594785807J145RGZocrbiYIz.jpg" alt="" class="ticket_img_movie">
                            <h2 class="ticket_name_movie"> spider man</h2>
                        </div>
                    
                        <div class="ticket_info_detail">
                            <span class="ticket_day">Ngày: <strong>20/10/2021</strong></span>
                            <span class="ticket_time">Giờ: <strong>20:00</strong></span>
                            <span class="ticket_room">Rạp: <strong>1</strong></span>
                            <span class="ticket_seat">Ghế: <strong>A1</strong></span>
                            <span class="ticket_seat">Định dạng: <strong>2D Phụ đề</strong></span>

                            <span class="ticket_price">Giá: <strong >100.000đ</strong></span>
                        </div>
                    </div>
                    <hr>
                    <div class="add-on_foods">
                        <h4>Combo Bắp - nước</h4>
                        <div class="list_addon_food">
                            <div class="add-on_items">
                                <img src="./public/img/combo1.webp" alt="">
                                <span class="name_addon">
                                    <strong>Combo 1</strong>
                                </span>
                                <span class="price_addon">
                                    <strong>100.000đ</strong>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="toal_price">
                        <span class="total_price_label">Tổng tiền:</span>
                        <span class="total_price_value"><strong>200.000đ</strong></span>
                    </div>
                </div>
                <div class="payticket">
                    <h2 class="heading_payment">Phương thức thanh toán</h2>
                    <div class="payticket_method">
                        <div class="payticket_method_item">
                            <div class="payticket_method_item_label">
                                <label>Thanh toán qua MOMO</label>
                                <i class="fa-solid fa-plus"></i>
                            </div>
                        </div>
                        <div class="payticket_method_item">
                            <div class="payticket_method_item_label">
                                <label>Thanh toán qua Visa</label>
                                <i class="fa-solid fa-plus"></i>
                            </div>
                            <div class="form_pay_visa">
                                <h3>Thanh toán qua Credit Card</h3>
                                <label for="fname">Accepted Cards</label>
                                <div class="icon-container">
                                    <i class="fa fa-cc-visa" style="color:navy;"></i>
                                    <i class="fa fa-cc-amex" style="color:blue;"></i>
                                    <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                    <i class="fa fa-cc-discover" style="color:orange;"></i>
                                </div>
                                <label for="cname">Tên trên thẻ</label> <br>
                                <input type="text" id="cname" name="cardname" placeholder="John More Doe"><br>
                                <label for="ccnum">Số thẻ</label><br>
                                <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444"><br>
                                <label for="expmonth">Tháng hết hạn</label><br>
                                <input type="text" id="expmonth" name="expmonth" placeholder="September"><br>

                                <label for="expyear">Năm hết hạn</label><br>
                                <input type="text" id="expyear" name="expyear" placeholder="2018"><br>
                                <label for="cvv"> Mã CVV</label><br>
                                <input type="text" id="cvv" name="cvv" placeholder="352"><br>
                                <input type="submit" value="Thanh toán" class="btn_pay_visa btn_hover">


                            </div>
                        </div>
                        <div class="payticket_method_item">
                            <div class="payticket_method_item_label">
                                <label>Thanh toán qua ngân hàng</label>
                                <i class="fa-solid fa-plus"></i>
                            </div>
                        </div>
                        <div class="payticket_method_item">
                            <div class="payticket_method_item_label">
                                <label>Thanh toán qua coupon</label>
                                <i class="fa-solid fa-plus"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script>
    $(".payticket_method_item_label").click(function() {
        $(this).parent().find(".form_pay_visa").slideToggle();
    })
</script>
</html>