
<footer>
    <input hidden id="check_footer" type="checkbox">
    <div class="container footer_content_infomation-search pc-0 t-0 m-0">
        <div class="footer_content-title">Tra cứu thông tin</div>
        <div class="footer_content-search">
                <?php if ($_SESSION['user']): ?>
                <a href="?mod=user&act=information" class=" footer_content-icons m-3">
                    <div>
                        <span class="material-symbols-outlined footer_content_icon">account_circle</span>
                    </div>
                    <p class="footer_content_text"><?= $_SESSION['user']['name'] ?></p>
                </a>
                <a href="?mod=user&act=account-order_follow" class=" footer_content-icons m-3">
                    <div>
                        <span class="material-symbols-outlined footer_content_icon">add_shopping_cart</span>
                    </div>
                    <p class="footer_content_text">Theo dõi đơn hàng</p>
                </a>
                <a href="?mod=user&act=account-voucher" class=" footer_content-icons m-3">
                    <div>
                        <span class="material-symbols-outlined footer_content_icon">quick_reference_all</span>
                    </div>
                    <p class="footer_content_text">Xem Ví Voucher</p>
                </a>
                <?php else: ?>
                <a href="?mod=user&act=login" class="footer_content-icons m-2">
                    <div>
                        <span class="material-symbols-outlined footer_content_icon">account_circle</span>
                    </div>
                    <p class="footer_content_text">Đăng nhập</p>
                </a>
                <a href="?mod=user&act=register" class="footer_content-icons m-2">
                    <div>
                        <span class="material-symbols-outlined footer_content_icon">account_circle</span>
                    </div>
                    <p class="footer_content_text">Đăng ký</p>
                </a>
                <?php endif; ?>

           
        </div>
    </div>
    <div class="container footer_content_infomation-search pc-0 t-0 m-0">
        <div class="footer_content-title">Thông tin liên hệ</div>
        <div class="footer_content-search">
            <div class="footer_content-icons m-4 flex-columns">
                <div><span class="material-symbols-outlined ">call</span></div>
                <div class="footer_content_text">Gọi mua hàng</div>
                <div class="footer_content_text">1900.7777</div>
                <div class="footer_content_text">(7h30 - 22h00)</div>
            </div>
            <div class="footer_content-icons m-4 flex-columns">
                <div><span class="material-symbols-outlined ">call</span></div>
                <div class="footer_content_text" >Gọi mua hàng</div>
                <div class="footer_content_text" >1900.8888</div>
                <div class="footer_content_text" >(7h30 - 22h00)</div>
            </div>
            <div class="footer_content-icons m-4 flex-columns">
                <div><span class="material-symbols-outlined ">call</span></div>
                <div class="footer_content_text" >Gọi mua hàng</div>
                <div class="footer_content_text" >1900.9999</div>
                <div class="footer_content_text" >(7h30 - 22h00)</div>
            </div>
            <a href="?mod=page&act=contact" class="footer_content-icons m-4 flex-columns">
                <div><span class="material-symbols-outlined ">location_on</span></div>
                <div class="footer_content_text">Địa chỉ cửa hàng</div>
                <div class="footer_content_text"></div>
                <div class="footer_content_text"></div>
                <div class="footer_content_text"></div>
            </a>
        </div>
    </div>
    <div class="container footer-box m-0">
        <div class="footer-left m-0">
            <a href="?mod=page&act=home" class="footer-logo m-0">
                <img src="view/images/logo.png" alt="LOGO">
            </a>
            <div class="footer-content m-0">
                KING nhận đặt hàng trực tuyến và giao hàng tận nơi.
                KHÔNG hỗ trợ đặt mua và nhận hàng trực tiếp tại văn phòng cũng như tất cả Hệ Thống KING trên toàn quốc.
            </div>
            <div class="footer-notification">
                <img src="https://cdn0.fahasa.com/media/wysiwyg/Logo-NCC/logo-bo-cong-thuong-da-thong-bao1.png" alt="">
            </div>
            <div class="foter-social_network">
                <div class="foter_social_network-icon">
                    <img src="https://cdn0.fahasa.com/skin/frontend/ma_vanese/fahasa/images/footer/Facebook-on.png" alt="">
                </div>
                <div class="foter_social_network-icon">
                    <img src="https://cdn0.fahasa.com/skin/frontend/ma_vanese/fahasa/images//footer/Insta-on.png" alt="">
                </div>
                <div class="foter_social_network-icon">
                    <img src="https://cdn0.fahasa.com/skin/frontend/ma_vanese/fahasa/images//footer/Youtube-on.png" alt="">
                </div>
                <div class="foter_social_network-icon">
                    <img src="https://cdn0.fahasa.com/skin/frontend/ma_vanese/fahasa/images//footer/twitter-on.png" alt="">
                </div>
            </div>
            <div class="foter-download">
                <div class="footer_download-item">
                    <img src="https://cdn0.fahasa.com/media/wysiwyg/Logo-NCC/android1.png" alt="">
                </div>
                <div class="footer_download-item">
                    <img src="https://cdn0.fahasa.com/media/wysiwyg/Logo-NCC/appstore1.png" alt="">
                </div>
            </div>
        </div>
        <div class="footer-right">
            <div class="footer-information_box row">
                <div class="footer-information_item col-3 col flex-column t-2 m-2">
                    <div class="footer-title text-center">DỊCH VỤ</div>
                    <ul class="footer_information-list">
                        <li><a href="">Điều khoản sửa dụng</a></li>
                        <li><a href="">Chính sách bảo mật thông tin cá nhân</a></li>
                        <li><a href="">Chính sách bảo mật thanh toán dụng</a></li>
                        <li><a href="?mod=page&act=about">Giới thiệu King</a></li>
                        <li><a href="">Hệ thống trung tâm - nhà sách</a></li>
                    </ul>
                </div>
                <div class="footer-information_item col-3 col flex-column t-2 m-2">
                    <div class="footer-title text-center">HỔ TRỢ</div>
                    <ul class="footer_information-list">
                        <li><a href="">Chính sách đổi - trả - hoàn tiền</a></li>
                        <li><a href="">Chính sách bảo hành - bồi hoàn</a></li>
                        <li><a href="">Chính sách vận chuyển</a></li>
                        <li><a href="">Chính sách khách sỉ</a></li>
                        <li><a href="">Phương thức thanh toán và xuất HĐ</a></li>
                    </ul>
                </div>
                <div class="footer-information_item col-3 col flex-column t-0 m-2">
                    <div class="footer-title text-center">TÀI KHOẢN CỦA TÔI</div>
                    <ul class="footer_information-list">
                        <li><a href="?mod=user&act=login">Đăng nhập/Tạo mới tài khoản</a></li>
                        <li><a href="?mod=user&act=account-address">Thay đổi địa chỉ khách hàng</a></li>
                        <li><a href="?mod=user&act=information">Chi tiết tài khoản</a></li>
                        <li><a href="?mod=user&act=account-order_follow">Lịch sử mua hàng</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-information_container m-0">
                <div class="footer-title text-center m-0">LIÊN HỆ</div>
                <div class="footer-information_box row m-0">
                    <div class="footer-information_item col-3 col ">
                        <div class="footer_information_item-icon">
                            <span class="material-symbols-outlined">location_on</span>
                        </div>
                        <div class="footer_information_item-content">Công viên phần mềm Quang Trung QTSC Building 1, Q.12, Thành phố Hồ Chí Minh </div>
                    </div>
                    <div class="footer-information_item col-3 col ">
                        <div class="footer_information_item-icon">
                            <span class="material-symbols-outlined">mail</span>
                        </div>
                        <div class="footer_information_item-content">duan1.kingstore@gmail.com</div>
                    </div>
                    <div class="footer-information_item col-3 col ">
                        <div class="footer_information_item-icon">
                            <span class="material-symbols-outlined">Call</span>
                        </div>
                        <div class="footer_information_item-content">0999999999</div>
                    </div>
                </div>
            </div>
            <div class="footer-method_container">
                <div class="footer-title">THANH TOÁN</div>
                <div class="footer-method_box row">
                    <div class="footer-method_item col-8 col m-1">
                        <img src="https://down-vn.img.susercontent.com/file/2c46b83d84111ddc32cfd3b5995d9281" alt="">
                    </div>
                    <div class="footer-method_item col-8 col"></div>
                    <div class="footer-method_item col-8 col"></div>
                </div>
            </div>
            <div class="footer-method_container">
                <div class="footer-title">VẬN CHUYỂN</div>
                <div class="footer-method_box row">
                    <div class="footer-method_item col-8 col m-5">
                        <img src="https://cdn.ntlogistics.vn/images/NTX/new_images/don-vi-giao-hang-nhanh-uy-tin-giao-hang-tiet-kiem.jpg" alt="">
                    </div>
                    <div class="footer-method_item col-8 col m-5">
                        <img src="https://cdn.ntlogistics.vn/images/NTX/new_images/don-vi-giao-hang-nhanh-uy-tin-ghn-giao-hang-nhanh.jpg" alt="">
                    </div>
                    <div class="footer-method_item col-8 col m-5">
                        <img src="https://cdn.ntlogistics.vn/images/NTX/new_images/don-vi-giao-hang-nhanh-uy-tin-dhl-express.jpg" alt="">
                    </div>
                    <div class="footer-method_item col-8 col m-5">
                        <img src="https://cdn.ntlogistics.vn/images/NTX/new_images/don-vi-giao-hang-nhanh-uy-tin-vnpost.jpg" alt="">
                    </div>
                    <div class="footer-method_item col-8 col m-5">
                        <img src="https://cdn.ntlogistics.vn/images/NTX/new_images/don-vi-giao-hang-nhanh-uy-tin-kerry-express.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pc-0 t-0 footer_nav">
        <a href="?mod=page&act=home" class="nav_icon">
            <span class="material-symbols-outlined">home</span>
            <p>Trang chủ</p>
        </a>
        <a href="?mod=page&act=product" class="nav_icon">
            <span class="material-symbols-outlined">package_2</span>
            <p>Sản phẩm</p>
        </a>
        <a href="?mod=page&act=contact" class="nav_icon">
            <span class="material-symbols-outlined">store</span>
            <p>Cửa hàng</p>
        </a>
        <?php if ($_SESSION['user']): ?>
                <a href="?mod=user&act=information" class="nav_icon">
                    <div>
                        <span class="material-symbols-outlined">account_circle</span>
                    </div>
                    <p><?= $_SESSION['user']['name'] ?></p>
                </a>
                <?php else: ?>
                <a href="?mod=user&act=login" class="nav_icon">
                    <div>
                        <span class="material-symbols-outlined">account_circle</span>
                    </div>
                    <!-- <p class="m-0">Tài khoản</p> -->
                    <p>Đăng nhập</p>
                </a>
                <?php endif; ?>
        <label for="check_footer" class="nav_icon">
            <span class="material-symbols-outlined">pending</span>
            <p>Xem thêm</p>
        </label>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="view/user/js/jquery.lwtCountdown-1.0.js"></script>
<script src="view/user/js/plugins.js"></script>
<script src="view/user/js/script.js"></script>

