<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./CSS/style.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        $mysql = new mysqli("localhost", "root", "", "furniro");

        if(!$mysql){
          die("Database connection error!");
        }
      
        $mysql->query("SET NAMES 'utf8'");
    ?>
    <div class="wrapper">
        <div class="header">
            <div class="container">
                <div class="header__body">
                    <div class="header__logo _anim-item left">Furniro</div>
                    <div class="header__nav _anim-item top">
                        <li class="nav__item"><a href="#">Home</a></li>
                        <li class="nav__item"><a href="#">Shop</a></li>
                        <li class="nav__item"><a href="#">About</a></li>
                        <li class="nav__item"><a href="#">Contact</a></li>
                    </div>
                    <div class="header__acc _anim-item right">
                        <div class="acc__item item_scale"><img src="./img/acc.svg" alt=""></div>
                        <div class="acc__item item_scale"><img src="./img/search.svg" alt=""></div>
                        <div class="acc__item item_scale"><img src="./img/akar-icons_heart.svg" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main">
            <div class="main__ad">
                <div class="container">
                    <div class="ad__body">
                        <div class="ad__discover _anim-item scale">
                            <div class="discover__subtitle">
                                New Arrival
                            </div>
                            <div class="discover__title">
                                Discover Our New Collection
                            </div>
                            <div class="discover__text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis.
                            </div>
                            <div class="discover__button item_scale">
                                <a href="#">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main__category">
                <div class="container">
                    <div class="category__body">
                        <div class="category__title">
                            Browse The Range
                        </div>
                        <div class="category__subtitle">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </div>
                        <div class="category__items">
                            <?php
                                $result = $mysql->query("SELECT * FROM category");
                                while($row = $result->fetch_assoc()){
                                    ?>
                                        <div class="items__item item_scale">
                                            <div class="item__image"><img src="./img/category/<?php echo $row["name_image"] ?>" alt=""></div>
                                            <div class="item__desc"><?php echo $row["name_category"]; ?></div> 
                                        </div>
                                    <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main__products">
                <div class="container">
                    <div class="products__body">
                        <div class="products__title _anim-item top">Our Products</div>
                        <div class="products__items">
                            <div class="items__item">

                                <div class="item__promotion item_discount">-30%</div>

                                <div class="active__actions card_active">
                                    <div class="actions__share">
                                        <a href="#" class="item_scale"><img src="./img/gridicons_share.svg" alt="">Share</a>
                                    </div>
                                    <div class="action__compare">
                                        <a href="#" class="item_scale"><img src="./img/compare-svgrepo-com 1.svg" alt="">Compare</a>
                                    </div>
                                    <div class="action__like">
                                        <a href="#" class="item_scale"><img src="./img/Heart_share.svg" alt="">Like</a>
                                    </div>
                                </div>


                                <div class="item__body">
                                    <div class="item__image"><img src="./img/p1.png" alt=""></div>
                                    <div class="item__info">
                                        <div class="info__title">Product name</div>
                                        <div class="info__subtitle">Product subtitle</div>
                                        <div class="info__price">
                                            <div class="price__current">Rp. 2.500.000</div>
                                            <div class="price__old">Rp. 3.500.000</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="items__item">

                                <div class="active__actions card_active">
                                    <div class="actions__share">
                                        <a href="#" class="item_scale"><img src="./img/gridicons_share.svg" alt="">Share</a>
                                    </div>
                                    <div class="action__compare">
                                        <a href="#" class="item_scale"><img src="./img/compare-svgrepo-com 1.svg" alt="">Compare</a>
                                    </div>
                                    <div class="action__like">
                                        <a href="#" class="item_scale"><img src="./img/Heart_share.svg" alt="">Like</a>
                                    </div>
                                </div>

                                <div class="item__body">
                                    <div class="item__image"><img src="./img/p1.png" alt=""></div>
                                    <div class="item__info">
                                        <div class="info__title">Product name</div>
                                        <div class="info__subtitle">Product subtitle</div>
                                        <div class="info__price">
                                            <div class="price__current">Rp. 2.500.000</div>
                                            <div class="price__old">Rp. 3.500.000</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="items__item">

                                <div class="item__promotion item_new">New</div>

                                <div class="active__actions card_active">
                                    <div class="actions__share">
                                        <a href="#" class="item_scale"><img src="./img/gridicons_share.svg" alt="">Share</a>
                                    </div>
                                    <div class="action__compare">
                                        <a href="#" class="item_scale"><img src="./img/compare-svgrepo-com 1.svg" alt="">Compare</a>
                                    </div>
                                    <div class="action__like">
                                        <a href="#" class="item_scale"><img src="./img/Heart_share.svg" alt="">Like</a>
                                    </div>
                                </div>

                                <div class="item__body">
                                    <div class="item__image"><img src="./img/p1.png" alt=""></div>
                                    <div class="item__info">
                                        <div class="info__title">Product name</div>
                                        <div class="info__subtitle">Product subtitle</div>
                                        <div class="info__price">
                                            <div class="price__current">Rp. 2.500.000</div>
                                            <div class="price__old">Rp. 3.500.000</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="products__button item_scale">
                            <a href="#">Show more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="container">
                <div class="footer__body">
                    <div class="footer__address">
                        <div class="address__title">Funiro.</div>
                        <div class="address__subtitle">400 University Drive Suite 200 Coral Gables,
                            FL 33134 USA</div>
                    </div>
                    <div class="footer__lists">
                        <div class="lists__list">
                            <li class="list__item"><a href="#">Links</a></li>
                            <li class="list__item item_scale"><a href="#">Home</a></li>
                            <li class="list__item item_scale"><a href="#">Shope</a></li>
                            <li class="list__item item_scale"><a href="#">About</a></li>
                            <li class="list__item item_scale"><a href="#">Contact</a></li>
                        </div>
                        <div class="lists__list">
                            <li class="list__item"><a href="#">Help</a></li>
                            <li class="list__item item_scale"><a href="#">Payment Options</a></li>
                            <li class="list__item item_scale"><a href="#">Returns</a></li>
                            <li class="list__item item_scale"><a href="#">Privacy Policies</a></li>
                        </div>
                    </div>
                </div>
                <div class="footer__coop">
                    <a href="#">2023 furino. All rights reverved</a>
                </div>
            </div>
        </div>
        <div class="link__top"><img src="./img/arrow-link.svg" alt=""></div>
    </div>
    <script src="./js/script.js"></script>
    <script src="./js/animation.js"></script>
</body>
</html>