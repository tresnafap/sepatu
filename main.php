<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/img/logoo-01.png">
    <title>Final FootWear</title>
</head>
<body>
    <!-- navigasi -->
    <nav>
        <div class="nav__top">
            <div class="nav__item">
                <img src="assets/img/logoo-01.png" alt="">          
            </div>

            <div class="nav__item">
                <div class="seach">
                    <input type="text" placeholder="Search..." class="search__input">
                    <img src="assets/img/search.png" width="20px" height="20px" alt="">
                </div>
            </div>
        </div>

        <div class="nav__button">
            <h3 class="menu__item">VANS</h3>
            <h3 class="menu__item">ONITSUKA</h3>
            <h3 class="menu__item">ADIDAS</h3>
            <h3 class="menu__item">CONVERSE</h3>
            <h3 class="menu__item">NEW BALANCE</h3>
        </div>
    </nav>

    <!--Home-->
    <div class="slider">
        <div class="slider__wepper">
            <div class="slider__item">
                <img src="assets/img/vans.png" alt="" class="slider-img">
                <div class="slider-bg"></div>
                <h1 class="slider__title">VANS <br> NEW <br> SEASON</h1>
                <h2 class="slider__price">IDR 1.500,00</h2>
                <a href="#product">
                    <button class="slider__button">BUY NOW!</button>
                </a>
            </div>

            <div class="slider__item">
                <img src="assets/img/onitww.png" alt="" class="slider-img">
                <div class="slider-bg"></div>
                <h1 class="slider__title">ONITSUKA <br> NEW <br> SEASON</h1>
                <h2 class="slider__price">IDR 1.000,00</h2>
                <a href="#product"> 
                    <button class="slider__button">BUY NOW!</button>
                </a>
            </div>

            <div class="slider__item">
                <img src="assets/img/adidas (1).png" alt="" class="slider-img">
                <div class="slider-bg"></div>
                <h1 class="slider__title">ADIDAS <br> NEW <br> SEASON</h1>
                <h2 class="slider__price">IDR 2.500,00</h2>
                <a href="#product"> 
                    <button class="slider__button">BUY NOW!</button>
                </a>
            </div>
            <div class="slider__item">
                <img src="assets/img/verse.png" alt="" class="slider-img">
                <div class="slider-bg"></div>
                <h1 class="slider__title">CONVERSE <br> NEW <br> SEASON</h1>
                <h2 class="slider__price">IDR 2.500,00</h2>
                <a href="#product">
                    <button class="slider__button">BUY NOW!</button>   
                </a>
            </div>

            <div class="slider__item">
                <img src="assets/img/nb.png" alt="" class="slider-img">
                <div class="slider-bg"></div>
                <h1 class="slider__title">NEW<br> BALANCE <br> SEASON</h1>
                <h2 class="slider__price">IDR 2.500,00</h2>
                <a href="#product"> 
                    <button class="slider__button">BUY NOW!</button>
                </a>
            </div>
        </div>
    </div>

    <!--fiture-->
    <div class="fitures">
        <div class="fiture">
            <img class="fiture__icon " src="assets/img/shipping.png" alt="" class="fiture-img">
            <span class="fiture__title">FREE SHIPING</span>
            <span class="fiture__subtitle">on all order over Rp...</span>
        </div>

        <div class="fiture">
            <img class="fiture__icon" src="assets/img/return.png" alt="" class="fiture-img">
            <span class="fiture__title">NEXT DAY SHIPPING</span>
            <span class="fiture__subtitle">3 day express delivery available</span>
        </div>

        <div class="fiture">
            <img class="fiture__icon" src="assets/img/gift.png" alt="" class="fiture-img">
            <span class="fiture__title">14-DAY RETURN FREE</span>
            <span class="fiture__subtitle">you can return your order any time</span>
        </div>

        <div class="fiture">
            <img class="fiture__icon" src="assets/img/contact.png" alt="" class="fiture-img">
            <span class="fiture__title">24/7 SUPPORT</span>
            <span class="fiture__subtitle">call 0852-1234-5678 and we will help you</span>
        </div>
    </div>

    <!--produc-->
    <div class="product" id="product">
        <img src="assets/img/vans.png" alt="" class="product-img">
        <div class="product__detail">
            <h1 class="product__title">OLD SKOOL</h1>
            <h2 class="product__price">IDR 1.500,00</h2>
            <p class="product__subtitle">Debut sejak pada tahun 1977, siluet low-top ini telah memantapkan dirinya sebagai ikon di dunia skate, musik, dan mode.</p>        

            <div class="colors">
                <div class="color"></div>
                <div class="color"></div>
            </div>

            <div class="sizes">
            <div class="size" data-size="42">42</div>
            <div class="size" data-size="43">43</div>
            <div class="size" data-size="44">44</div>
            </div>

            <button class="product__button">BUY NOW!</button> 
        </div>
        

    </div>
    <!--Casir-->
   <!-- Payment -->
<!-- Payment -->
<div class="payment">
    <h1 class="pay__title">Formulir Pembelian</h1>
    <form action="koneksi.php" method="POST">
        <label for="name">Nama</label><br>
        <input type="text" id="name" name="name" placeholder="Nama Lengkap" class="pay__input" required><br>
        <label for="phone">No Handphone</label><br>
        <input type="text" id="phone" name="phone" placeholder="+62" class="pay__input" required><br>
        <label for="address">Alamat Lengkap</label><br>
        <input type="text" id="address" name="address" class="pay__input" required><br>
        <label for="merk">Merk Sepatu</label><br>
        <input type="text" id="merk" name="merk" placeholder="Pilihan Merk" class="pay__input" required readonly><br>
        <label for="size">Ukuran Sepatu</label><br>
        <input type="text" id="size" name="size" placeholder="Pilihan size" class="pay__input" required><br>

        <h1 class="pay__title">Card Information</h1>

        <div class="card__icons">
            <img src="assets/img/bca.png" width="40" alt="BCA Icon" class="card-icon">
            <img src="assets/img/mandiri.png" width="40" alt="Mandiri Icon" class="card-icon">
        </div>

        <input type="password" name="password" placeholder="password" class="pay__input" required>
        <div class="card__info">
            <input type="text" name="mm" placeholder="mm" class="pay__input sm" required>
            <input type="text" name="yyyy" placeholder="yyyy" class="pay__input sm" required>
            <input type="text" name="cvv" placeholder="cvv" class="pay__input sm" required>
        </div>
        <button type="submit" class="pay__btn">Checkout!</button>
    </form>
    <span class="close">X</span>
</div>



    <!--fotter-->
    <footer>
    
            <div class="footer__menu">
                <h1 class="menu__title">Tentang Kami</h1>
                <ul class="menu__list">
                    <li class="list__items">Suport</li>
                    <li class="list__items">Contact</li>
                    <li class="list__items">Carees</li>
                    <li class="list__items">Afiliates</li>
                    <li class="list__items">Stores</li>
                </ul>
            </div>
    
            <div class="footer__menu">
                <h1 class="menu__title">Produk</h1>
                <ul class="menu__list">
                    <li class="list__items">Company</li>
                    <li class="list__items">Contact</li>
                    <li class="list__items">Carees</li>
                    <li class="list__items">Afiliates</li>
                    <li class="list__items">Stores</li>
                </ul>
            </div>
        </div>

        <div class="footer__right">
            <div class="menu__right">
                <h1 class="menu__title">Subscribe to our newsletter</h1>
                <div class="footer__email">
                    <input type="text" placeholder="Email" class="footer__input">
                    <button class="footer__button">Join</button>
                </div>
            </div>

            <div class="menu__right">
                <h1 class="menu__title"></h1>
                <div class="footer__icon">
                    <img src="assets/img/facebook.png" alt="" class="ficon">
                    <img src="assets/img/instagram.png" alt="" class="ficon">
                    <img src="assets/img/whatsapp.png" alt="" class="ficon">
                    <img src="assets/img/twitter.png" alt="" class="ficon">
                </div>
            </div>
        </div>
    </footer>

    <script src="assets/js/main.js"></script>
</body>
</html>