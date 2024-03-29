<?php
    /**
     * Template Name: TemplateDetailTour
     * Display Only Detail Tour template
     * 
     * @package WordPress
     * @subpackage eminent
     * @since eminent 1.0
     * 
     */
    get_header();?>
    <div class="slide__img--box">
        <ion-icon class="slide__img--close" name="close-outline" onclick="closeSlides()"></ion-icon>
        <div class="container__slides">
    
          <!-- Full-width images with number text -->
          <div class="mySlides">
            <div class="numbertext">1 / 6</div>
            <img src="<?php echo get_template_directory_uri(); ?>../assets/images/slide1.jpg" style="width:100%">
          </div>
      
          <div class="mySlides">
            <div class="numbertext">2 / 6</div>
            <img src="<?php echo get_template_directory_uri(); ?>../assets/images/slide2.jpg" style="width:100%">
          </div>
      
          <div class="mySlides">
            <div class="numbertext">3 / 6</div>
            <img src="<?php echo get_template_directory_uri(); ?>../assets/images/slide3.jpg" style="width:100%">
          </div>
      
          <div class="mySlides">
            <div class="numbertext">4 / 6</div>
            <img src="<?php echo get_template_directory_uri(); ?>../assets/images/slide4.jpg" style="width:100%">
          </div>
      
          <div class="mySlides">
            <div class="numbertext">5 / 6</div>
            <img src="<?php echo get_template_directory_uri(); ?>../assets/images/slide5.jpg" style="width:100%">
          </div>
      
          <div class="mySlides">
            <div class="numbertext">6 / 6</div>
            <img src="../assets/images/slide6.jpg" style="width:100%">
          </div>
      
          <!-- Next and previous buttons -->
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
      
          <!-- Image text -->
          <div class="caption-container">
            <p id="caption"></p>
          </div>
      
          <!-- Thumbnail images -->
          <div class="container__slide--number">
            <div class="column">
              <img class="demo cursor" src="<?php echo get_template_directory_uri(); ?>../assets/images/slide1.jpg" style="width:100%" onclick="currentSlide(1)"
                alt="Đà Lạt Review Tất Tần Tật">
            </div>
            <div class="column">
              <img class="demo cursor" src="<?php echo get_template_directory_uri(); ?>../assets/images/slide2.jpg" style="width:100%" onclick="currentSlide(2)"
                alt="Đà Lạt Review Tất Tần Tật">
            </div>
            <div class="column">
              <img class="demo cursor" src="<?php echo get_template_directory_uri(); ?>../assets/images/slide3.jpg" style="width:100%" onclick="currentSlide(3)"
                alt="Đà Lạt Review Tất Tần Tật">
            </div>
            <div class="column">
              <img class="demo cursor" src="<?php echo get_template_directory_uri(); ?>../assets/images/slide4.jpg" style="width:100%" onclick="currentSlide(4)"
                alt="Đà Lạt Review Tất Tần Tật">
            </div>
            <div class="column">
              <img class="demo cursor" src="<?php echo get_template_directory_uri(); ?>../assets/images/slide5.jpg" style="width:100%" onclick="currentSlide(5)"
                alt="Đà Lạt Review Tất Tần Tật">
            </div>
            <div class="column">
              <img class="demo cursor" src="<?php echo get_template_directory_uri(); ?>../assets/images/slide6.jpg" style="width:100%" onclick="currentSlide(6)"
                alt="Đà Lạt Review Tất Tần Tật">
            </div>
            <div class="column">
              <img class="demo cursor" src="<?php echo get_template_directory_uri(); ?>../assets/images/slide6.jpg" style="width:100%" onclick="currentSlide(6)"
                alt="Đà Lạt Review Tất Tần Tật">
            </div>
            <div class="column">
              <img class="demo cursor" src="<?php echo get_template_directory_uri(); ?>../assets/images/slide6.jpg" style="width:100%" onclick="currentSlide(6)"
                alt="Đà Lạt Review Tất Tần Tật">
            </div>
          </div>
        </div>
      </div>

    <section class="detail__tour">
        <div class="detail__tour--content__right--mobile shadow">
            <p><span>đ</span> <span class="detail__tour--content__right--price">245.000</span></p>
            <button class="detail__tour--content__right--btn firstBtn">
                CHỌN DỊCH VỤ
            </button>
        </div>
        <div class="detail__tour--container">
            <div class="detail__tour--header">
                <div class="detail__tour--header__link">
                    <a href="">Trang chủ</a> > <a href="">Vé tham quan</a> > <a href="">Vé tham quan Săn Mây Cầu Gỗ – BÌNH MINH</a>
                </div>
                <div class="detail__tour--header__title">
                    VÉ THAM QUAN SĂN MÂY CẦU GỖ – BÌNH MINH
                </div>
                <div class="detail__tour--header__info">
                    <ion-icon name="location-outline"></ion-icon><span>Đèo Prenn, Phường 3, Thành phố Đà Lạt, Tỉnh Lâm Đồng</span>
                </div>
            </div>
            <div class="detail__tour--img">
                <div class="detail__tour--img__left">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-6.png" alt="">
                </div>
                <div class="detail__tour--img__right">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-2.png" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-3.png" alt="">
                </div>
            </div>
            <div class="detail__tour--content">
                <div class="detail__tour--content__left">
                    <div class="detail__tour--content__left--header">
                        Các gói dịch vụ
                    </div>
                    <div class="detail__tour--content__left--option">
                        <div class="detail__tour--content__left--option__title--1">
                            <p>Vui lòng chọn ngày & gói dịch vụ</p><a href="#">Xóa tất cả</a>
                        </div>
                        <p class="detail__tour--content__left--option__title--2">
                            Xin chọn ngày tham quan
                        </p>
                        <input class="detail__tour--content__left--option__date" type="date">

                        <p class="detail__tour--content__left--option__title--2">
                            Loại gói dịch vụ
                        </p>
                        <div class="detail__tour--content__left--option__item--info shadow "><ion-icon class="detail__tour--content__left--option__item--info__close" name="close"></ion-icon>
                            <div class="detail__tour--content__left--option__item--info__title">Chọn dịch vụ</div>
                            <div class="detail__tour--content__left--option__item--info__list">
                                <div class="detail__tour--content__left--option__item--info__item">
                                    <div class="detail__tour--content__left--option__item--info__header">Vé Xe Trượt Thác Datanla New Alpine</div>
                                    <div class="detail__tour--content__left--option__item--info__quality">
                                        <div class="detail__tour--content__left--option__item--info__quality--item">
                                            <span>Người lớn</span>     
                                            <div class="number-input">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                              </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="detail__tour--content__left--option__item--info__item">
                                    <div class="detail__tour--content__left--option__item--info__header"> Combo Vé Đà Lạt High Rope Course + Vé Xe Trượt Thác Datanla</div>
                                    <div class="detail__tour--content__left--option__item--info__quality">
                                        <div class="detail__tour--content__left--option__item--info__quality--item">
                                            <span>Người lớn</span>     
                                            <div class="number-input">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                              </div>
                                        </div>
                                        <div class="detail__tour--content__left--option__item--info__quality--item">
                                            <span>Trẻ em</span>     
                                            <div class="number-input">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                              </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          
                            <div class="detail__tour--content__left--option__item--info__price">
                                <div class="detail__tour--content__left--option__item--info__price--left">
                                    <p><span>đ</span> <span>700000</span></p>
                                
                                </div>
                                <div class="detail__tour--content__left--option__item--info__price--right">
                                    <a href="http://localhost/wordpress/cart/">Thêm vào giỏ hàng</a>
                                    <a href="http://localhost/wordpress/checkout">Đặt ngay</a>
                                </div>
                            </div>
                        </div>
                        <div class="detail__tour--content__left--option__list">
                            <div class="detail__tour--content__left--option__item">
                                Vé Xe Trượt Thác Datanla New Alpine
                            </div>
                            <div class="detail__tour--content__left--option__item">
                                Combo Vé Đà Lạt High Rope Course + Vé Xe Trượt Thác Datanla

                            </div>
                        </div>
                    </div>
                    <div class="detail__tour--content__left--header">
                        Tiết kiệm hơn khi du lịch Đà Lạt
                    </div>
                    <div class="detail__tour--content__left--sale">
                        <div class="detail__tour--content__left--sale__left">
                            <span class="detail__tour--content__left--sale__header">
                                Ưu đãi lên đến 12%
                            </span>
                            <div class="detail__tour--content__left--sale__title">
                                <p>Pass Đà Lạt</p>
                                <span>Bao gồm Đi Xe Trượt Thác Datanla New Alpine Tại Đà Lạt và 11 điểm tham quan</span>
                            </div>
                            <div class="detail__tour--content__left--sale__price">
                                <p>₫ 640,000</p><span>₫ 730,000</span>
                            </div>
                        </div>
                        <div class="detail__tour--content__left--sale__right">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-4.png" alt="">
                            <a href="">Xem chi tiết <ion-icon name="chevron-forward-outline"></ion-icon></a>
                        </div>
                    </div>
                    <div class="detail__tour--content__left--sale__info shadow">
                       
                        <div class="detail__tour--content__left--sale__info--header">
                            <ion-icon class="detail__tour--content__left--sale__info--close" name="close"></ion-icon><span>Bao gồm 11 hoạt động</span>
                        </div>
                        <div class="detail__tour--content__left--sale__info--list">
                            <ul>
                                <li class="detail__tour--content__left--sale__info--item">
                                        <h6>Vé Saigon Skydeck Tại Bitexco Financial Tower</h6>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tourProduct.webp" alt="">
                                        <div class="detail__tour--content__left--sale__info--item__text">
                                            <p>Giá vé</p>
                                            <p>
                                                <span><span>Người lớn: đ</span> 500.000</span>
                                                <span><span>Trẻ em: đ</span> 200.000</span>
                                            </p>
                                        </div>
                                        <div class="detail__tour--content__left--sale__info--item__text">
                                            <p>Điều kiện</p>
                                            <p>
                                                <span>Trẻ em có độ tuổi từ 0-3 có thể vào miễn phí</span>
                                            </p>
                                        </div>
                                        <div class="detail__tour--content__left--sale__info--item__text">
                                            <p>Bao gồm</p>
                                            <p>
                                                <span>1 vé Saigon Skydeck</span>
                                                <span>Bảo tàng áo dài ở tầng 49</span>
                                            </p>
                                        </div>
                                        <div class="detail__tour--content__left--sale__info--item__text">
                                            <p>Địa chỉ</p>
                                            <p>
                                                <span>Toà nhà Bitexco Financial, Số 36, Hồ Tung Mậu, Quận 1, Thành phố Hồ Chí Minh</span>
                                            </p>
                                        </div>
                                        <div class="detail__tour--content__left--sale__info--item__btn">
                                            <a href="" >Xem thêm</a>
                                        </div>
                                </li>
                                <li class="detail__tour--content__left--sale__info--item">
                                    <h6>Vé Saigon Skydeck Tại Bitexco Financial Tower</h6>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tourProduct.webp" alt="">
                                    <div class="detail__tour--content__left--sale__info--item__text">
                                        <p>Giá vé</p>
                                        <p>
                                            <span><span>Người lớn: đ</span> 500.000</span>
                                            <span><span>Trẻ em: đ</span> 200.000</span>
                                        </p>
                                    </div>
                                    <div class="detail__tour--content__left--sale__info--item__text">
                                        <p>Điều kiện</p>
                                        <p>
                                            <span>Trẻ em có độ tuổi từ 0-3 có thể vào miễn phí</span>
                                        </p>
                                    </div>
                                    <div class="detail__tour--content__left--sale__info--item__text">
                                        <p>Bao gồm</p>
                                        <p>
                                            <span>1 vé Saigon Skydeck</span>
                                            <span>Bảo tàng áo dài ở tầng 49</span>
                                        </p>
                                    </div>
                                    <div class="detail__tour--content__left--sale__info--item__text">
                                        <p>Địa chỉ</p>
                                        <p>
                                            <span>Toà nhà Bitexco Financial, Số 36, Hồ Tung Mậu, Quận 1, Thành phố Hồ Chí Minh</span>
                                        </p>
                                    </div>
                                    <div class="detail__tour--content__left--sale__info--item__btn">
                                        <a href="" >Xem thêm</a>
                                    </div>
                                </li>
                                <li class="detail__tour--content__left--sale__info--item">
                                <h6>Vé Saigon Skydeck Tại Bitexco Financial Tower</h6>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tourProduct.webp" alt="">
                                <div class="detail__tour--content__left--sale__info--item__text">
                                    <p>Giá vé</p>
                                    <p>
                                        <span><span>Người lớn: đ</span> 500.000</span>
                                        <span><span>Trẻ em: đ</span> 200.000</span>
                                    </p>
                                </div>
                                <div class="detail__tour--content__left--sale__info--item__text">
                                    <p>Điều kiện</p>
                                    <p>
                                        <span>Trẻ em có độ tuổi từ 0-3 có thể vào miễn phí</span>
                                    </p>
                                </div>
                                <div class="detail__tour--content__left--sale__info--item__text">
                                    <p>Bao gồm</p>
                                    <p>
                                        <span>1 vé Saigon Skydeck</span>
                                        <span>Bảo tàng áo dài ở tầng 49</span>
                                    </p>
                                </div>
                                <div class="detail__tour--content__left--sale__info--item__text">
                                    <p>Địa chỉ</p>
                                    <p>
                                        <span>Toà nhà Bitexco Financial, Số 36, Hồ Tung Mậu, Quận 1, Thành phố Hồ Chí Minh</span>
                                    </p>
                                </div>
                                <div class="detail__tour--content__left--sale__info--item__btn">
                                    <a href="" >Xem thêm</a>
                                </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="detail__tour--content__left--header">
                        Đánh giá gần đây <a href="">Đọc tất cả đánh giá</a>
                    </div>
                    <div class="detail__tour--content__left--rate__first">
                        <div class="detail__tour--content__left--rate__first--title">
                            <p>7/10</p>
                            <div class="detail__tour--content__left--rate__first--title__liststar">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                            </div>
                            <span>2 <span>Bình chọn</span></span>
                        </div>
                        <div class="detail__tour--content__left--rate__first--list">
                            <div class="detail__tour--content__left--rate__first--item">
                                <div class="detail__tour--content__left--rate__first--item__info">
                                    <p>Người dùng Đà Lạt review</p><span>4 ngày</span>
                                </div>
                                <div class="detail__tour--content__left--rate__first--item__des">
                                    Hoàn toàn xứng đáng! bạn chắc chắn nên thử món này khi ghé thăm Đà Lạt! hàng chờ rất dài nhưng rất thuận tiện khi bạn mua vé ở klook vì bạn không cần phải xếp hàng chờ khác để mua vé.
                                </div>
                                <div class="detail__tour--content__left--rate__first--item__imgs">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-1.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-2.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-3.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-4.png" alt="">
                                </div>
                            </div>
                            <div class="detail__tour--content__left--rate__first--item">
                                <div class="detail__tour--content__left--rate__first--item__info">
                                    <p>Người dùng Đà Lạt review</p><span>4 ngày</span>
                                </div>
                                <div class="detail__tour--content__left--rate__first--item__des">
                                    Hoàn toàn xứng đáng! bạn chắc chắn nên thử món này khi ghé thăm Đà Lạt! hàng chờ rất dài nhưng rất thuận tiện khi bạn mua vé ở klook vì bạn không cần phải xếp hàng chờ khác để mua vé.
                                </div>
                                <div class="detail__tour--content__left--rate__first--item__imgs">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-1.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-2.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-3.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-4.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="detail__tour--content__left--header">
                        Về dịch vụ này
                    </div>
                    <div class="detail__tour--content__left--service">
                        <div class="detail__tour--content__left--service--text">
                            Đà Lạt mùa nào cũng đẹp! Đến với Đà Lạt vào bất cứ thời điểm nào trong năm, bạn cũng sẽ yêu mến mảnh đất này. Và nếu như vẫn đang phân vân không biết đi đâu, ngắm gì trong mùa hè Đà Lạt!? Vậy hãy để chúng dẫn bạn đi trải nghiệm Tour săn mây Đà Lạt 2023 – Săn mây Cầu Gỗ Bình Minh dưới đây nhé!
Nhằm tiết kiệm thời gian, giảm thiểu chi phí du lịch và được thoải mái trải nghiệm các dịch vụ bạn có thể tải app book tour săn mây qua Ứng dụng Đà Lạt Review Tất Tần Tật trên Moblie
Khi tải ứng dụng Đà Lạt Review Tất Tần Tật bạn sẽ nhận được voucher mua hàng 20k (Áp dụng cho hóa đơn trên 100.000đ) và rất nhiều ưu đãi hấp dẫn khác đang chờ đón bạn.
Đà Lạt không chỉ gây ấn tượng bởi những rừng thông trầm mặc lung linh, hình ảnh thành phố lên đèn lộn lẫy mà còn bởi những thung lũng cuồn cuộn biển mây trắng. Nếu là một tín đồ ưa xê dịch và thích ngắm biển mây bồng bềnh, du khách không nên bỏ lỡ Săn mây Cầu Gỗ – Bình Minh, nơi được ví như “thiên đường săn mây” tại Đà Lạt.
                        </div>
                        <div class="detail__tour--content__left--service--img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detail-blog-9.jpg" alt="">
                        </div>
                        <div class="detail__tour--content__left--service--text">
                            Săn mây Cầu Gỗ – Bình Minh là địa điểm check in đình đám tại Đà Lạt với những đồi chè xanh mát, những cột điện gió cao vót, đẹp yên bình. Khi đến đây chắc chắn bạn sẽ không khỏi thoảng thốt trước cảnh sắc tựa chốn bồng lai tiên cảnh này.
                        </div>
                        <div class="detail__tour--content__left--service--img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detail-blog-8.jpg" alt="">
                        </div>
                        <div class="detail__tour--content__left--service--text">
                            Bầu trời sáng mai nơi đây đẹp tựa một bức tranh thuỷ mặc với sắc trắng tinh khôi từ mây trời, xanh ngát của những đồi chè, điểm xuyết thêm màu vàng ươm của những bông hoa dại và xa xa là những hàng thông tít tắp đến khuất tầm nhìn.
                        </div>
                        <div class="detail__tour--content__left--service--img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detail-blog-7.jpg" alt="">
                        </div>
                        <div class="detail__tour--content__left--service--text">
                            Bầu trời sáng mai nơi đây đẹp tựa một bức tranh thuỷ mặc với sắc trắng tinh khôi từ mây trời, xanh ngát của những đồi chè, điểm xuyết thêm màu vàng ươm của những bông hoa dại và xa xa là những hàng thông tít tắp đến khuất tầm nhìn.
                        </div>
                    </div>
                    <div class="detail__tour--content__left--header">
                        Những điều cần lưu ý
                    </div>
                    <div class="detail__tour--content__left--note">
                        <p>Alpine Coaster will stop operating when raining</p>
                    </div>
                    <div class="detail__tour--content__left--header">
                        Đánh giá
                    </div>
                    <div class="detail__tour--content__left--rate__second">
                        <div class="detail__tour--content__left--rate__first--title">
                            <p>7/10</p>
                            <div class="detail__tour--content__left--rate__first--title__liststar">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                            </div>
                            <span>2 <span>Bình chọn</span></span>
                        </div>
                        <div class="detail__tour--content__left--rate__second--album">
                            <div class="detail__tour--content__left--rate__second--album__text">
                                <p><span>Album hình</span><span>4 ảnh</span></p>
                                <p><a href="">Xem thêm</a></p>
                            </div>
                            <div class="detail__tour--content__left--rate__second--album__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-1.png" alt="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-2.png" alt="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-3.png" alt="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-4.png" alt="">
                            </div>
                        </div>
                        <div class="detail__tour--content__left--rate__second--list">
                            <div class="detail__tour--content__left--rate__second--item">
                                <div class="detail__tour--content__left--rate__second--item__user">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user_avatar.png" alt="">
                                    <p><span>Người dùng</span><span>4 ngày trước</span></p>
                                </div>
                                <div class="detail__tour--content__left--rate__second--item__star">
                                    <div class="detail__tour--content__left--rate__first--title__liststar">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>
                                    <span>Rất hài lòng</span>
                                </div>
                                <div class="detail__tour--content__left--rate__second--item__content">
                                    Hoàn toàn xứng đáng! bạn chắc chắn nên thử món này khi ghé thăm Đà Lạt! hàng chờ rất dài nhưng rất thuận tiện khi bạn mua vé ở klook vì bạn không cần phải xếp hàng chờ khác để mua vé.
                                </div>
                                <div class="detail__tour--content__left--rate__second--item__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-1.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-2.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-3.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-4.png" alt="">
                                </div>
                                <div class="detail__tour--content__left--rate__second--item__like">
                                    <ion-icon name="thumbs-up-outline"></ion-icon><span>Hữu ích</span>
                                </div>
                            </div>
                            <div class="detail__tour--content__left--rate__second--item">
                                <div class="detail__tour--content__left--rate__second--item__user">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user_avatar.png" alt="">
                                    <p><span>Người dùng</span><span>4 ngày trước</span></p>
                                </div>
                                <div class="detail__tour--content__left--rate__second--item__star">
                                    <div class="detail__tour--content__left--rate__first--title__liststar">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>
                                    <span>Rất hài lòng</span>
                                </div>
                                <div class="detail__tour--content__left--rate__second--item__content">
                                    Hoàn toàn xứng đáng! bạn chắc chắn nên thử món này khi ghé thăm Đà Lạt! hàng chờ rất dài nhưng rất thuận tiện khi bạn mua vé ở klook vì bạn không cần phải xếp hàng chờ khác để mua vé.
                                </div>
                                <div class="detail__tour--content__left--rate__second--item__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-1.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-2.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-3.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-4.png" alt="">
                                </div>
                                <div class="detail__tour--content__left--rate__second--item__like">
                                    <ion-icon name="thumbs-up-outline"></ion-icon><span>Hữu ích</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="detail__tour--content__left--header">
                        Liên hệ với chúng tôi
                    </div>
                    <div class="detail__tour--content__left--contact">
                        <p>Bạn thắc mắc về dịch vụ này? Chat với tôi!</p>
                        <a href="" class="detail__tour--content__left--contact__btn secondBtn"><ion-icon name="chatbubbles"></ion-icon> <span>Chat với chúng tôi</span></a>
                    </div>
                    <div class="detail__tour--content__left--header">
                        Bài viết liên quan
                    </div>
              
                </div>
                <div class="detail__tour--content__right">
                    <p><span>đ</span> <span class="detail__tour--content__right--price">245.000</span></p>
                    <button class="detail__tour--content__right--btn__pc firstBtn">CHỌN DỊCH VỤ
                    </button>
                </div>
            </div>
            <div class="detail__tour--content__left--related">
                <div class="fourProductList__wrapper">
                    <div class="fourProductList__wrapper--item">
                        <a href="detail_hotel.html">
                            <div class="fourProductList__wrapper--img">
                                <img src="https://res.klook.com/klook-hotel/image/upload/fl_lossy.progressive,c_fill,f_auto,w_750,q_85/travelapi/34000000/33360000/33351000/33350943/8c4f0773_z.jpg">
                            </div>
                            <div class="fourProductList__wrapper--main">
                                <div class="fourProductList__wrapper--info">
                                    <div class="fourProductList__wrapper--info__title">
                                        <span>Dalat Wonder Resort</span>
                                        <span class="fourProductList__wrapper--stars">
                                            <ion-icon name="star" class="icon__star"></ion-icon>
                                            <ion-icon name="star" class="icon__star"></ion-icon>
                                            <ion-icon name="star" class="icon__star"></ion-icon>
                                            <ion-icon name="star" class="icon__star"></ion-icon>
                                        </span>
                                    </div>
                                    <div class="fourProductList__wrapper--info__review">
                                        <div class="fourProductList__wrapper--info__score">
                                            <span>4.4</span>
                                            <span class="slash">/</span>
                                            <span>5</span>
                                        </div>
                                        <div class="fourProductList__wrapper--info__desc">Rất tốt</div>
                                        <div class="fourProductList__wrapper--info__count">47 Bình luận</div>
                                    </div>
                                    <div class="fourProductList__wrapper--info__ellipsis">
                                        <ion-icon name="location-outline"></ion-icon>
                                        <span class="fourProductList__wrapper--info__location"> 2.1km từ Trung tâm thành phố,Đà Lạt</span>
                                    </div>
                                    <div class="fourProductList__wrapper--info__tag">
                                        <div class="fourProductList__wrapper--info__card--tag">
                                            <span>Phòng Gym</span>
                                        </div>
                                        <div class="fourProductList__wrapper--info__card--tag">
                                            <span>Lễ tân 24/24</span>
                                        </div>
                                        <div class="fourProductList__wrapper--info__card--tag">
                                            <span>Trung tâm thành phố</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="fourProductList__wrapper--price">
                                    <div class="fourProductList__wrapper--price__info">
                                        <span>đ</span>
                                        <span>1,444,527</span>
                                    </div>
                                    <div class="fourProductList__wrapper--price__desc">Giá một đêm bao gồm thuế</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="fourProductList__wrapper--item">
                        <a href="detail_hotel.html">
                            <div class="fourProductList__wrapper--img">
                                <img src="https://res.klook.com/klook-hotel/image/upload/fl_lossy.progressive,c_fill,f_auto,w_750,q_85/travelapi/34000000/33360000/33351000/33350943/8c4f0773_z.jpg">
                            </div>
                            <div class="fourProductList__wrapper--main">
                                <div class="fourProductList__wrapper--info">
                                    <div class="fourProductList__wrapper--info__title">
                                        <span>Dalat Wonder Resort</span>
                                        <span class="fourProductList__wrapper--stars">
                                            <ion-icon name="star" class="icon__star"></ion-icon>
                                            <ion-icon name="star" class="icon__star"></ion-icon>
                                            <ion-icon name="star" class="icon__star"></ion-icon>
                                            <ion-icon name="star" class="icon__star"></ion-icon>
                                        </span>
                                    </div>
                                    <div class="fourProductList__wrapper--info__review">
                                        <div class="fourProductList__wrapper--info__score">
                                            <span>4.4</span>
                                            <span class="slash">/</span>
                                            <span>5</span>
                                        </div>
                                        <div class="fourProductList__wrapper--info__desc">Rất tốt</div>
                                        <div class="fourProductList__wrapper--info__count">47 Bình luận</div>
                                    </div>
                                    <div class="fourProductList__wrapper--info__ellipsis">
                                        <ion-icon name="location-outline"></ion-icon>
                                        <span class="fourProductList__wrapper--info__location"> 2.1km từ Trung tâm thành phố,Đà Lạt</span>
                                    </div>
                                    <div class="fourProductList__wrapper--info__tag">
                                        <div class="fourProductList__wrapper--info__card--tag">
                                            <span>Phòng Gym</span>
                                        </div>
                                        <div class="fourProductList__wrapper--info__card--tag">
                                            <span>Lễ tân 24/24</span>
                                        </div>
                                        <div class="fourProductList__wrapper--info__card--tag">
                                            <span>Trung tâm thành phố</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="fourProductList__wrapper--price">
                                    <div class="fourProductList__wrapper--price__info">
                                        <span>đ</span>
                                        <span>1,444,527</span>
                                    </div>
                                    <div class="fourProductList__wrapper--price__desc">Giá một đêm bao gồm thuế</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="fourProductList__wrapper--item">
                        <a href="detail_hotel.html">
                            <div class="fourProductList__wrapper--img">
                                <img src="https://res.klook.com/klook-hotel/image/upload/fl_lossy.progressive,c_fill,f_auto,w_750,q_85/travelapi/34000000/33360000/33351000/33350943/8c4f0773_z.jpg">
                            </div>
                            <div class="fourProductList__wrapper--main">
                                <div class="fourProductList__wrapper--info">
                                    <div class="fourProductList__wrapper--info__title">
                                        <span>Dalat Wonder Resort</span>
                                        <span class="fourProductList__wrapper--stars">
                                            <ion-icon name="star" class="icon__star"></ion-icon>
                                            <ion-icon name="star" class="icon__star"></ion-icon>
                                            <ion-icon name="star" class="icon__star"></ion-icon>
                                            <ion-icon name="star" class="icon__star"></ion-icon>
                                        </span>
                                    </div>
                                    <div class="fourProductList__wrapper--info__review">
                                        <div class="fourProductList__wrapper--info__score">
                                            <span>4.4</span>
                                            <span class="slash">/</span>
                                            <span>5</span>
                                        </div>
                                        <div class="fourProductList__wrapper--info__desc">Rất tốt</div>
                                        <div class="fourProductList__wrapper--info__count">47 Bình luận</div>
                                    </div>
                                    <div class="fourProductList__wrapper--info__ellipsis">
                                        <ion-icon name="location-outline"></ion-icon>
                                        <span class="fourProductList__wrapper--info__location"> 2.1km từ Trung tâm thành phố,Đà Lạt</span>
                                    </div>
                                    <div class="fourProductList__wrapper--info__tag">
                                        <div class="fourProductList__wrapper--info__card--tag">
                                            <span>Phòng Gym</span>
                                        </div>
                                        <div class="fourProductList__wrapper--info__card--tag">
                                            <span>Lễ tân 24/24</span>
                                        </div>
                                        <div class="fourProductList__wrapper--info__card--tag">
                                            <span>Trung tâm thành phố</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="fourProductList__wrapper--price">
                                    <div class="fourProductList__wrapper--price__info">
                                        <span>đ</span>
                                        <span>1,444,527</span>
                                    </div>
                                    <div class="fourProductList__wrapper--price__desc">Giá một đêm bao gồm thuế</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="fourProductList__wrapper--item">
                        <a href="detail_hotel.html">
                            <div class="fourProductList__wrapper--img">
                                <img src="https://res.klook.com/klook-hotel/image/upload/fl_lossy.progressive,c_fill,f_auto,w_750,q_85/travelapi/34000000/33360000/33351000/33350943/8c4f0773_z.jpg">
                            </div>
                            <div class="fourProductList__wrapper--main">
                                <div class="fourProductList__wrapper--info">
                                    <div class="fourProductList__wrapper--info__title">
                                        <span>Dalat Wonder Resort</span>
                                        <span class="fourProductList__wrapper--stars">
                                            <ion-icon name="star" class="icon__star"></ion-icon>
                                            <ion-icon name="star" class="icon__star"></ion-icon>
                                            <ion-icon name="star" class="icon__star"></ion-icon>
                                            <ion-icon name="star" class="icon__star"></ion-icon>
                                        </span>
                                    </div>
                                    <div class="fourProductList__wrapper--info__review">
                                        <div class="fourProductList__wrapper--info__score">
                                            <span>4.4</span>
                                            <span class="slash">/</span>
                                            <span>5</span>
                                        </div>
                                        <div class="fourProductList__wrapper--info__desc">Rất tốt</div>
                                        <div class="fourProductList__wrapper--info__count">47 Bình luận</div>
                                    </div>
                                    <div class="fourProductList__wrapper--info__ellipsis">
                                        <ion-icon name="location-outline"></ion-icon>
                                        <span class="fourProductList__wrapper--info__location"> 2.1km từ Trung tâm thành phố,Đà Lạt</span>
                                    </div>
                                    <div class="fourProductList__wrapper--info__tag">
                                        <div class="fourProductList__wrapper--info__card--tag">
                                            <span>Phòng Gym</span>
                                        </div>
                                        <div class="fourProductList__wrapper--info__card--tag">
                                            <span>Lễ tân 24/24</span>
                                        </div>
                                        <div class="fourProductList__wrapper--info__card--tag">
                                            <span>Trung tâm thành phố</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="fourProductList__wrapper--price">
                                    <div class="fourProductList__wrapper--price__info">
                                        <span>đ</span>
                                        <span>1,444,527</span>
                                    </div>
                                    <div class="fourProductList__wrapper--price__desc">Giá một đêm bao gồm thuế</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>   
            </div>
        </div>
    </section>
 <?php get_footer();?>