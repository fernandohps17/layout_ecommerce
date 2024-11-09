<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/main.css">
    <title>ECommerce Pagina de Detalles</title>
</head>

<body>
    <main>
        <!-- Section BarTop -->
        <div class="container bg_bar_top">
            <div class="content">
                <div class="bar_top">
                    <p>New season coming! Discount 10% for all product! Check out now! <span>20:48</span></p>
                </div>
            </div>
        </div>

        <!-- Section Nav Navegation -->
        <div class="container">
            <div class="content">
                <nav class="nav">
                    <div class="nav_logo">
                        <p>Jolt</p>

                        <!-- <div class="nav_link">
                            <div class="toggle">
                                <svg xmlns="http://www.w3.org/2000/svg" id="openMenu" height="48" width="48">
                                    <path d="M6 36v-3h36v3Zm0-10.5v-3h36v3ZM6 15v-3h36v3Z" />
                                </svg>
                            </div>

                            <div class="nav_link_list" id="menuMobile">
                                <p class="closeMenu" id="closeMenu">X</p>
                                <div class="color_black">
                                    <a href="#">Categories</a>
                                </div>
                                <a href="#">Collections</a>
                                <a href="#">Store</a>
                                <a href="#">Blog</a>
                                <a href="#">Fing Store</a>
                            </div>
                        </div> -->

                        <div class="menu">
                            <div class="toggle">
                                <svg xmlns="http://www.w3.org/2000/svg" id="openMenu" height="48" width="48">
                                    <path d="M6 36v-3h36v3Zm0-10.5v-3h36v3ZM6 15v-3h36v3Z" />
                                </svg>
                            </div>

                            <div class="menu_enlaces" id="menuMobile">
                                <nav class="menu_enlaces_a">
                                    <p class="closeMenu" id="closeMenu">X</p>
                                    <div class="color_black">
                                        <a href="#">Categories</a>
                                    </div>
                                    <a href="#">Collections</a>
                                    <a href="#">Store</a>
                                    <a href="#">Blog</a>
                                    <a href="#">Find Store</a>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <div class="nav_link_actions">
                        <div class="nav_link_actions_content">
                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' data-img="/public/icon/search.svg">
                                <img class="image" data-img="/public/icon/search.svg" alt="Jolt icono" title="Jolt icono" width="100" height="100">
                            </picture>
                            <p>Search</p>
                        </div>

                        <div class="nav_link_actions_content">
                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' data-img="/public/icon/shopping_cart.svg">
                                <img class="image" data-img="/public/icon/shopping_cart.svg" alt="Jolt icono" title="Jolt icono" width="100" height="100">
                            </picture>
                            <p>Cart (0)</p>
                        </div>

                        <div class="nav_link_actions_content">
                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' data-img="/public/icon/login.svg">
                                <img class="image" data-img="/public/icon/login.svg" alt="Jolt icono" title="Jolt icono" width="100" height="100">
                            </picture>
                            <p>Login</p>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <!-- Layout Details -->
        <div class="container">
            <div class="content">
                <div class="details">
                    <div class="details_gallery">
                        <div class="details_gallery_content">
                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' srcset="/public/img/imagen2.webp">
                                <img class="image" src="/public/img/imagen2.jpg" alt="Jolt gallery" title="Jold gallery" width="100" height="100">
                            </picture>
                        </div>

                        <div class="details_gallery_content">
                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' srcset="/public/img/imagen3.webp">
                                <img class="image" src="/public/img/imagen3.jpg" alt="Jolt gallery" title="Jold gallery" width="100" height="100">
                            </picture>
                        </div>

                        <div class="details_gallery_content">
                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' srcset="/public/img/imagen4.webp">
                                <img class="image" src="/public/img/imagen4.jpg" alt="Jolt gallery" title="Jold gallery" width="100" height="100">
                            </picture>
                        </div>

                        <div class="details_gallery_content">
                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' srcset="/public/img/imagen5.webp">
                                <img class="image" src="/public/img/imagen5.jpg" alt="Jolt gallery" title="Jold gallery" width="100" height="100">
                            </picture>
                        </div>
                    </div>

                    <div class="details_layout">
                        <div class="details_layout_content">
                            <picture class="picture-defer">
                                <source id="sourceMobile" media="(max-width: 600px)" class="image source" type='image/webp' data-img="/public/img/imagen1.webp">
                                <source id="sourceDes" class="image source" type='image/webp' data-img="/public/img/imagen1.webp">
                                <img id="imageDes" class="image" data-img="/public/img/imagen1.jpg" alt="Jolt" title="Jolt" width="100" height="100">
                            </picture>
                        </div>
                    </div>

                    <div class="details_content">
                        <div class="details_content_top">
                            <p class="details_content_text">Jolt / ultrasound</p>
                            <p class="details_content_title">Boa Fleece Jacket</p>
                        </div>
                        <div class="details_content_price">
                            <span>$129.00</span>
                            <p>$122.00</p>
                            <div class="details_content_off">
                                <p>5% Disc</p>
                            </div>
                        </div>

                        <div class="details_content_star">
                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' srcset="/public/icon/star.svg">
                                <img class="image" src="/public/icon/star.svg" alt="Jolt icon" title="Jold icon" width="100" height="100">
                            </picture>
                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' srcset="/public/icon/star.svg">
                                <img class="image" src="/public/icon/star.svg" alt="Jolt icon" title="Jold icon" width="100" height="100">
                            </picture>
                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' srcset="/public/icon/star.svg">
                                <img class="image" src="/public/icon/star.svg" alt="Jolt icon" title="Jold icon" width="100" height="100">
                            </picture>
                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' srcset="/public/icon/star.svg">
                                <img class="image" src="/public/icon/star.svg" alt="Jolt icon" title="Jold icon" width="100" height="100">
                            </picture>
                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' srcset="/public/icon/star_gray.svg">
                                <img class="image" src="/public/icon/star_gray.svg" alt="Jolt icon" title="Jold icon" width="100" height="100">
                            </picture>
                            <p>(4,9) 1,2k Reviews</p>
                        </div>

                        <div class="details_content_description">
                            <p><span>Descriptions</span></p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur voluptas dicta sint voluptatibus suscipit numquam <b>doloribus consequuntur</b> ad velit excepturi quaerat atque, earum amet aliquam! Earum, culpa dolorum eveniet reprehenderit autem molestiae <b>beatae</b> fugiat accusamus nisi nulla, officia, quae rem quibusdam. Incidunt natus sunt voluptatibus inventore lui?</p>

                            <p><span>Items Quantity</span></p>

                            <div class="details_content_quantity">
                                <span id="restarBtn">-</span>
                                <p id="resultado">0</p>
                                <span id="sumarBtn">+</span>
                            </div>
                        </div>

                        <div class="details_content_btn">
                            <button class="details_content_btn_add">Add to Cart</button>
                            <button class="details_content_btn_check">Checkout Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Section productos -->
        <div class="container">
            <div class="content">
                <div class="section_products">
                    <section class="section_products_title">
                        <header>
                            <h2>This item can be cool with this</h2>
                        </header>
                    </section>

                    <div class="section_product_item">
                        <div class="section_product_item_content">
                            <div class="section_product_item_content_image">
                                <picture class="picture-defer">
                                    <source class="image source" type='image/webp' srcset="/public/img/imagen7.webp">
                                    <img class="image" src="/public/img/imagen7.jpg" alt="Jolt ultrasound" title="Jold ultrasound" width="100" height="100">
                                </picture>
                            </div>

                            <div class="section_product_item_content_text">
                                <div class="section_product_item_content_text_title">
                                    <p>Clean Jolt</p>
                                    <span>$349.00</span>
                                </div>

                                <div class="section_product_item_content_text_icon">
                                    <picture class="picture-defer">
                                        <source class="image source" type='image/webp' srcset="/public/icon/shopping_cart.svg">
                                        <img class="image" src="/public/icon/shopping_cart.svg" alt="Jolt icon" title="Jold icon" width="100" height="100">
                                    </picture>
                                </div>
                            </div>
                        </div>

                        <div class="section_product_item_content">
                            <div class="section_product_item_content_image">
                                <picture class="picture-defer">
                                    <source class="image source" type='image/webp' srcset="/public/img/imagen11.webp">
                                    <img class="image" src="/public/img/imagen11.png" alt="Jolt ultrasound" title="Jold ultrasound" width="100" height="100">
                                </picture>
                            </div>

                            <div class="section_product_item_content_text">
                                <div class="section_product_item_content_text_title">
                                    <p>Clean Jolt</p>
                                    <span>$178.00</span>
                                </div>

                                <div class="section_product_item_content_text_icon">
                                    <picture class="picture-defer">
                                        <source class="image source" type='image/webp' srcset="/public/icon/shopping_cart.svg">
                                        <img class="image" src="/public/icon/shopping_cart.svg" alt="Jolt icon" title="Jold icon" width="100" height="100">
                                    </picture>
                                </div>
                            </div>
                        </div>

                        <div class="section_product_item_content">
                            <div class="section_product_item_content_image">
                                <picture class="picture-defer">
                                    <source class="image source" type='image/webp' srcset="/public/img/imagen12.webp">
                                    <img class="image" src="/public/img/imagen12.png" alt="Jolt ultrasound" title="Jold ultrasound" width="100" height="100">
                                </picture>
                            </div>

                            <div class="section_product_item_content_text">
                                <div class="section_product_item_content_text_title">
                                    <p>Clean Jolt</p>
                                    <span>$422.00</span>
                                </div>

                                <div class="section_product_item_content_text_icon">
                                    <picture class="picture-defer">
                                        <source class="image source" type='image/webp' srcset="/public/icon/shopping_cart.svg">
                                        <img class="image" src="/public/icon/shopping_cart.svg" alt="Jolt icon" title="Jold icon" width="100" height="100">
                                    </picture>
                                </div>
                            </div>
                        </div>

                        <div class="section_product_item_content">
                            <div class="section_product_item_content_image">
                                <picture class="picture-defer">
                                    <source class="image source" type='image/webp' srcset="/public/img/imagen13.webp">
                                    <img class="image" src="/public/img/imagen13.png" alt="Jolt ultrasound" title="Jold ultrasound" width="100" height="100">
                                </picture>
                            </div>

                            <div class="section_product_item_content_text">
                                <div class="section_product_item_content_text_title">
                                    <p>Clean Jolt</p>
                                    <span>$231.00</span>
                                </div>

                                <div class="section_product_item_content_text_icon">
                                    <picture class="picture-defer">
                                        <source class="image source" type='image/webp' srcset="/public/icon/shopping_cart.svg">
                                        <img class="image" src="/public/icon/shopping_cart.svg" alt="Jolt icon" title="Jold icon" width="100" height="100">
                                    </picture>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <!-- Footer -->
         <div class="container bg_footer">
            <div class="content">
                <div class="footer">
                    <div class="footer_top">
                        <div class="footer_top_text">
                            <div class="footer_top_text_logo">
                                <p>Jolt</p>
                                <span>Experience the great outdoors in style with jolts, shop now and gear up for adventura in Jolt</span>
                            </div>
                        </div>

                        <div class="footer_top_text_nav">
                            <div class="footer_top_text_nav_link">
                                <p>Categories</p>
                                <div class="footer_top_text_nav_link_ul">
                                    <a href="#">Jacket</a>
                                    <a href="#">Shirt</a>
                                    <a href="#">Knit</a>
                                    <a href="#">T-Shirt</a>
                                    <a href="#">Bottoms</a>
                                    <a href="#">Accesories</a>
                                </div>
                            </div>

                            <div class="footer_top_text_nav_link">
                                <p>Customer care</p>
                                <div class="footer_top_text_nav_link_ul">
                                    <a href="#">FAQS</a>
                                    <a href="#">Shipping</a>
                                    <a href="#">Order Status</a>
                                    <a href="#">Return & Exchange</a>
                                </div>
                            </div>

                            <div class="footer_top_text_nav_link">
                                <p>Company</p>
                                <div class="footer_top_text_nav_link_ul">
                                    <a href="#">Privacy</a>
                                    <a href="#">Guides</a>
                                    <a href="#">Terms of Conditions</a>
                                </div>
                            </div>
                        </div>




                        <div class="footer_top_text_social">

                        </div>
                    </div>





                    <div class="footer_bottom"></div>
                </div>
            </div>
         </div>






    </main>
</body>

<script src="/public/js/carga_diferida.js"></script>
<script src="/public/js/menu.js"></script>
<script src="/public/js/slider.js"></script>
<script src="/public/js/count.js"></script>

</html>