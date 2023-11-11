<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>

<body>
    <section class="ticket_detail">
        <div class="container">

            <div class="ticket_deatil_box">
                <div class="ticket_deatil_boxl">
                    <img src="https://d1j8r0kxyu9tj8.cloudfront.net/files/1594785807J145RGZocrbiYIz.jpg" alt="" class="ticket_detail_img">
                </div>
                <div class="ticket_deatil_boxr">
                    <div class="ticket_info">
                        <span class="ticket_detail-title">Người Nhện Đa Vũ Trụ: Spider-Man</span>
                        <span class="ticket_detail-description">Mô tả: Một câu chuyện phiêu lưu đầy hứng khởi với Người Nhện từ nhiều vũ trụ khác nhau.</span>
                        <span class="ticket_detail-director">Đạo diễn: Peter Ramsey, Rodney Rothman, Bob Persichetti</span>
                        <span class="ticket_detail-actor">Diễn viên: Shameik Moore, Jake Johnson, Hailee Steinfeld</span>
                        <span class="ticket_detail-genre">Thể loại: Hành động, Phiêu lưu, Hoạt hình</span>
                        <span class="ticket_detail-language">Ngôn ngữ: Tiếng Anh (phụ đề Tiếng Việt)</span>
                        <span class="ticket_detail-date">Ngày chiếu: 20/11/2023</span>
                        <span class="ticket_detail-time">Thời gian: 19:30</span>
                    </div>
                    <div class="ticket_deatil_boxr-btn">
                        <a href="" class="btn_ticket_detail">mua vé <i class="fa-solid fa-ticket"></i></a>
                        <a href="" class="btn_ticket_detail">trailer</a>
                    </div>
                </div>
            </div>
        </div>
        <h1>vui lòng chọn ngày xem và suất chiếu</h1>
        <hr>
        <div class="slider_date">
            <div class="container">

                <div class="ticket_date">
                    <div class="ticket_date_items">
                        <span class="date_day">thứ 2</span>
                        <span class="date_date_number">11/11</span>
                    </div>
                    <div class="ticket_date_items ticket_date_items-active ">
                        <span class="date_day">thứ 2</span>
                        <span class="date_date_number">11/11</span>
                    </div>
                    <div class="ticket_date_items">
                        <span class="date_day">thứ 2</span>
                        <span class="date_date_number">11/11</span>
                    </div>
                    <div class="ticket_date_items">
                        <span class="date_day">thứ 2</span>
                        <span class="date_date_number">11/11</span>
                    </div>
                    <div class="ticket_date_items">
                        <span class="date_day">thứ 2</span>
                        <span class="date_date_number">11/11</span>
                    </div>
                    <div class="ticket_date_items">
                        <span class="date_day">thứ 2</span>
                        <span class="date_date_number">11/11</span>
                    </div>
                    <div class="ticket_date_items">
                        <span class="date_day">thứ 2</span>
                        <span class="date_date_number">11/11</span>
                    </div>
                    <div class="ticket_date_items">
                        <span class="date_day">thứ 2</span>
                        <span class="date_date_number">11/11</span>
                    </div>
                    <div class="ticket_date_items">
                        <span class="date_day">thứ 2</span>
                        <span class="date_date_number">11/11</span>
                    </div>
                    <div class="ticket_date_items">
                        <span class="date_day">thứ 2</span>
                        <span class="date_date_number">11/11</span>
                    </div>
                    <div class="ticket_date_items">
                        <span class="date_day">thứ 2</span>
                        <span class="date_date_number">11/11</span>
                    </div>
                    <div class="ticket_date_items">
                        <span class="date_day">thứ 2</span>
                        <span class="date_date_number">11/11</span>
                    </div>
                    <div class="ticket_date_items">
                        <span class="date_day">thứ 2</span>
                        <span class="date_date_number">11/11</span>
                    </div>
                    <div class="ticket_date_items">
                        <span class="date_day">thứ 2</span>
                        <span class="date_date_number">11/11</span>
                    </div>
                    <div class="ticket_date_items">
                        <span class="date_day">thứ 2</span>
                        <span class="date_date_number">11/11</span>
                    </div>
                    <div class="ticket_date_items">
                        <span class="date_day">thứ 2</span>
                        <span class="date_date_number">11/11</span>
                    </div>
                    <div class="ticket_date_items">
                        <span class="date_day">thứ 2</span>
                        <span class="date_date_number">11/11</span>
                    </div>
                </div>
            </div>

        </div>
    </section>
</body>
<div id="modal_trailer">
    <div class="modal_heading">
        <h1>trailer</h1>
        <i class="fa-solid fa-times"></i>
    </div>
    <div class="modal_body">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/wyLH7VFmDFw?si=x2DQhU7hKzEZaqIE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('.ticket_date').slick({
            slidesToShow: 10,
            slidesToScroll: 5,
            arrows: true,
        });
    });
    $(".ticket_date_items").click(function() {
        $(".ticket_date_items").removeClass("ticket_date_items-active");
        $(this).addClass("ticket_date_items-active");

    });
</script>

</html>