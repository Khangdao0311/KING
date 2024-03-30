
<?php include_once('header.php') ?>
<title>Sản Phẩm</title>
<link rel="stylesheet" href="view/user/css/product-detail.css">
<section class=" link_page">
    <div class="container">
        <div class="link_page-text">Trang chủ / Sản phẩm / Sản phẩm chi tiết</div>
    </div>
</section>
<section>
    <div class="container productdetail-container">
        <div class="productdetail-image">
            <div class="productdetail_image-list">
                
                <div onclick="show_image(this)" class="productdetail_image_list-item">
                    <img src="" alt="1">
                </div>
                <div onclick="show_image(this)" class="productdetail_image_list-item">
                    <img src="" alt="2">
                </div>
                <div onclick="show_image(this)" class="productdetail_image_list-item">
                    <img src="" alt="3">
                </div>
                <div onclick="show_image(this)" class="productdetail_image_list-item">
                    <img src="" alt="4">
                </div>
               
            </div>
            <div class="productdetail_image-main">
               <img src="" alt="Tên sản phẩm">
            </div>
        </div>
        <form action="?mod=cart&act=addtoCart" method="post" class="productdetail-content">
            <div class="productdetail-name">Tên sản phẩm</div>
            <div class="productdetail-publisher_author">
                <div class="productdetail-publisher">Nhà xuất bản: <b>Tên nhà xuất bản</b></div>
                <div class="productdetail-author">Tác giả: <b>Tên tác giả</b></div>
            </div>
            <div class="productdetail-price_container">
                <div class="productdetail-price_sale">Giá: <b>100.000 đ</b></div>
                <div class="productdetail-price_box">
                    <div class="productdetail-price">Giá gốc: <del>200.000 đ</del></div>
                    <div class="productdetail-persent">30 %</div>
                </div>
            </div>
            <div class="productdetail-quantity">
                <div class="productdetail_quantity-text">Số lượng: </div>
                <div class="productdetail_quantity-button">
                    <div onclick="minus()" class="productdetail_quantity_button-minus">
                        <img src="https://cdn0.fahasa.com/skin/frontend/ma_vanese/fahasa/images/ico_minus2x.png" alt="">
                    </div>
                    <input name="quantity_cart" value="1" class="productdetail_quantity_button-number" type="text">
                    <div onclick="plus()" class="productdetail_quantity_button-plus">
                        <img src="https://cdn0.fahasa.com/skin/frontend/ma_vanese/fahasa/images/ico_plus2x.png" alt="">
                    </div>
                </div>
            </div>
            <div class="productdetail-button">
                <input name="btn_buy_now" class="productdetail_button-buy_now" type="submit" value="Mua ngay">
                <a href="?mod=cart&act=addCart&id=" class="productdetail_button-add_cart">
                    <div class="productdetail_button_add_cart-icon">
                        <img src="https://cdn0.fahasa.com/skin/frontend/ma_vanese/fahasa/images/icon-cart.svg" alt="">
                    </div>
                    <div class="productdetail_button_add_cart-text">Thêm vào giỏ hàng</div>
                </a>
            </div> 
        </form>
    </div>
</section>
<section>
    <div class="container">
        <div class="productdetail-category">
            <p>CHI TIẾT SẢN PHẨM</p>
        </div>
        <div class="product-info-descibe">
            <!-- <div class="productdetail-descibe">
                <p>Mã hàng</p>
                <span>combo-2612202300</span>
            </div> -->
            <div class="productdetail-descibe">
                <p>Tên Nhà Cung Cấp</p>
                <span>KING</span>
            </div>
            <div class="productdetail-descibe">
                <p>Tác giả</p>
                <span>Tên tác giả</span>
            </div>
            <!-- <div class="productdetail-descibe">
                <p>Người Dịch</p>
                <span>Bùi Thanh Thúy, Linh Tử</span>
            </div> -->
            <div class="productdetail-descibe">
                <p>Nhà xuất bản </p>
                <span>Tên nhà xuất bản</span>
            </div>
            <div class="productdetail-descibe">
                <p>Trọng lượng (gr)</p>
                <span>890</span>
            </div>
            <div class="productdetail-descibe">
                <p>Kích Thước Bao Bì</p>
                <span>24 x 15.7 x 4.3 cm</span>
            </div>
            <div class="productdetail-descibe">
                <p>Hình thức</p>
                <span>Bìa Mềm</p>
            </div>
            <div class="productdetail-descibe">
                <p>Sản phẩm bán chạy nhất</p>
                <span>Top 100 sản phẩm 'Tên danh mục' bán chạy của tháng</span>
            </div>
            <div class="productdetail-moredescibe">
                <p>Giá sản phẩm trên KING đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản
                    phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như Phụ phí đóng gói,
                    phí vận chuyển, phụ phí hàng cồng kềnh,...</p>
                <p>Chính sách khuyến mãi trên KING không áp dụng cho Hệ thống Nhà sách KING trên toàn quốc
                </p>
            </div>
            <div class="productdetail-innerbook">
                <h3>Tên sản phẩm</h3>
                <p class="productdetail_innerbook-describe">Tất cả những trải nghiệm trong chuyến phiêu du theo đuổi vận mệnh của mình đã giúp Santiago thấu hiểu được ý nghĩa sâu xa nhất của hạnh phúc, hòa hợp với vũ trụ và con người. 
Tiểu thuyết Nhà giả kim của Paulo Coelho như một câu chuyện cổ tích giản dị, nhân ái, giàu chất thơ, thấm đẫm những minh triết huyền bí của phương Đông. Trong lần xuất bản đầu tiên tại Brazil vào năm 1988, sách chỉ bán được 900 bản. Nhưng, với số phận đặc biệt của cuốn sách dành cho toàn nhân loại, vượt ra ngoài biên giới quốc gia, Nhà giả kim đã làm rung động hàng triệu tâm hồn, trở thành một trong những cuốn sách bán chạy nhất mọi thời đại, và có thể làm thay đổi cuộc đời người đọc.

“Nhưng nhà luyện kim đan không quan tâm mấy đến những điều ấy. Ông đã từng thấy nhiều người đến rồi đi, trong khi ốc đảo và sa mạc vẫn là ốc đảo và sa mạc. Ông đã thấy vua chúa và kẻ ăn xin đi qua biển cát này, cái biển cát thường xuyên thay hình đổi dạng vì gió thổi nhưng vẫn mãi mãi là biển cát mà ông đã biết từ thuở nhỏ. Tuy vậy, tự đáy lòng mình, ông không thể không cảm thấy vui trước hạnh phúc của mỗi người lữ khách, sau bao ngày chỉ có cát vàng với trời xanh nay được thấy chà là xanh tươi hiện ra trước mắt. ‘Có thể Thượng đế tạo ra sa mạc chỉ để cho con người biết quý trọng cây chà là,’ ông nghĩ.”

- Trích Nhà giả kim

Nhận định

“Sau Garcia Márquez, đây là nhà văn Mỹ Latinh được đọc nhiều nhất thế giới.” - The Economist, London, Anh

 

“Santiago có khả năng cảm nhận bằng trái tim như Hoàng tử bé của Saint-Exupéry.” - Frankfurter Allgemeine Zeitung, Đức

Mã hàng	8935235226272
Tên Nhà Cung Cấp	Nhã Nam
Tác giả	Paulo Coelho
Người Dịch	Lê Chu Cầu
NXB	NXB Hội Nhà Văn
Năm XB	2020
Trọng lượng (gr)	220
Kích Thước Bao Bì	20.5 x 13 cm
Số trang	227
Hình thức	Bìa Mềm
Sản phẩm hiển thị trong	
Đồ Chơi Cho Bé - Giá Cực Tốt
Nhã Nam
Top sách được phiên dịch nhiều nhất
RƯỚC DEAL LINH ĐÌNH VUI ĐÓN TRUNG THU
Sản phẩm bán chạy nhất	Top 100 sản phẩm Tiểu thuyết bán chạy của tháng
Giá sản phẩm trên Fahasa.com đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như Phụ phí đóng gói, phí vận chuyển, phụ phí hàng cồng kềnh,...
Chính sách khuyến mãi trên Fahasa.com không áp dụng cho Hệ thống Nhà sách Fahasa trên toàn quốc
Tất cả những trải nghiệm trong chuyến phiêu du theo đuổi vận mệnh của mình đã giúp Santiago thấu hiểu được ý nghĩa sâu xa nhất của hạnh phúc, hòa hợp với vũ trụ và con người. 

Tiểu thuyết Nhà giả kim của Paulo Coelho như một câu chuyện cổ tích giản dị, nhân ái, giàu chất thơ, thấm đẫm những minh triết huyền bí của phương Đông. Trong lần xuất bản đầu tiên tại Brazil vào năm 1988, sách chỉ bán được 900 bản. Nhưng, với số phận đặc biệt của cuốn sách dành cho toàn nhân loại, vượt ra ngoài biên giới quốc gia, Nhà giả kim đã làm rung động hàng triệu tâm hồn, trở thành một trong những cuốn sách bán chạy nhất mọi thời đại, và có thể làm thay đổi cuộc đời người đọc.

“Nhưng nhà luyện kim đan không quan tâm mấy đến những điều ấy. Ông đã từng thấy nhiều người đến rồi đi, trong khi ốc đảo và sa mạc vẫn là ốc đảo và sa mạc. Ông đã thấy vua chúa và kẻ ăn xin đi qua biển cát này, cái biển cát thường xuyên thay hình đổi dạng vì gió thổi nhưng vẫn mãi mãi là biển cát mà ông đã biết từ thuở nhỏ. Tuy vậy, tự đáy lòng mình, ông không thể không cảm thấy vui trước hạnh phúc của mỗi người lữ khách, sau bao ngày chỉ có cát vàng với trời xanh nay được thấy chà là xanh tươi hiện ra trước mắt. ‘Có thể Thượng đế tạo ra sa mạc chỉ để cho con người biết quý trọng cây chà là,’ ông nghĩ.”</p>
            </div>
            <button onclick="check_describe(this)" class="productdetail-button_buy">Xem thêm</button>
        </div>
</section>
<section>
    <div class="container product_like-container">
        <div class="new-titel">
            <div class="new_titel-text">Sản phẩm tương tự</div>
        </div>
        <div class="row">
                
            <div class="col-4 col">
                <div class="product-box">
                    <a href="'?mod=page&act=product-detail&id=" class="product-img"><img src="" alt="Tên sản phẩm"></a>
                    <a href="'?mod=page&act=product-detail&id=" class="product-mane">Tên sản phẩm</a>
                    <div class="product-price_sale">Giá: 100.000 đ</div>
                    <div class="product-price">Giá gốc: <del>200.000 đ</del> </div>
                    <div class="product-view">100 lượt xem</div>
                    <div class="product-icon_box">
                        <div class="product-icon">
                            <img src="https://cdn-icons-png.flaticon.com/512/4903/4903482.png" alt="">
                        </div>
                        <div class="product-icon">
                            <img src="https://cdn-icons-png.flaticon.com/512/1077/1077035.png " alt="">
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>











<script src="view/user/js/product-detail.js"></script>
<?php include_once('footer.php') ?>