<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>clasique</title>


    <!-- fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,500;0,900;1,900&display=swap" rel="stylesheet">
<script src="https://unpkg.com/feather-icons"></script>
<!-- Pastikan Anda memuat jQuery dan Slick Slider -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>


<style>
    .slider .menu-card {
        transition: transform 0.4s, opacity 0.4s;
        opacity: 0.5;
        transform: scale(0.8);
    }

    .slider .menu-card.slick-center {
        transition: transform 0.4s, opacity 0.4s;
        opacity: 1;
        transform: scale(1);
    }
</style>


<link rel="stylesheet" href="users/assets/css/style.css">


</head>

<body>
   <!-- navbar start -->
   <nav class="navbar">
    <a href="#" class="navbar-logo">classique<span>coffee</span></a>

    <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#about">About Us</a>
        <a href="#menu">Menu</a>
        <a href="#products">Produk</a>
        <a href="#contact">Contact</a>


    </div>

    <div class="navbar-extra">
        <a href="#" id="search-button"><i data-feather="search"></i></a>
        <a href="#" id="shopping-cart-button"><i data-feather="shopping-cart"></i></a>
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
    </div>
<!-- search -->
 <div class="search-form">
    <input type="search" id="search-box" placeholder="Search here ...">
    <label for="search-box"><i data-feather="search"></i></label>
</div>
<!-- search end -->
<!-- cart section start -->
<div class="shopping-cart">
    <div class="cart-item">
        <img src="users/assets/img/products/p.jpg" alt="">
        <div class="item-detail">
            <h3>Product 1</h3>
            <div class="item-price">IDR 30K</div>
        </div>
        <i data-feather="trash-2" class="remove-item"></i>
    </div>
    <div class="cart-item">
        <img src="users/assets/img/menu/expressoreal.jpg" alt="">
        <div class="item-detail">
            <h3>Espresso</h3>
            <div class="item-price">IDR 18K</div>
        </div>
        <i data-feather="trash-2" class="remove-item"></i>
    </div>
    <div class="cart-item">
        <img src="users/assets/img/products/p.jpg" alt="">
        <div class="item-detail">
            <h3>Product 1</h3>
            <div class="item-price">IDR 30K</div>
        </div>
        <i data-feather="trash-2" class="remove-item"></i>
    </div>
</div>
<!-- cart section end  -->
   </nav>
   <!-- navbar end -->

   <!-- hero section start -->
   <section class="hero" id="home">
<main class="content">
    <h1>Vincent Rompies Mau Ngopi di <span> Classique</span></h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, error.</p>
    <a href="#" class="cta">Buy Now</a>
</main>

   </section>
   <!-- end hero section -->

   <!-- About section -->
   <section id="about" class="about">
    <h2>About <span>Us</span></h2>


    <div class="row">
        <div class="about-img">
            <img src="users/assets/img/tentang-kami.jpg" alt="Tentang Kami">
        </div> 
            <div class="content">
                <h3>Kenapa harus clasique?</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat ducimus voluptatum porro harum voluptatem obcaecati distinctio reiciendis consectetur, exercitationem error!</p>
               <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit itaque molestiae explicabo nostrum, velit in deleniti consectetur impedit ullam earum!</p>
            </div>
        
    </div>
   </section>
   <!-- About end -->

   <!-- menu section -->
   <section id="menu" class="menu">
    <h2>Menu <span>Kami</span></h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus cumque nostrum obcaecati necessitatibus adipisci! Soluta consequuntur ducimus tenetur iusto molestias.</p>
    <div class="row slider">
        <div class="menu-card zoom-effect">
            <img src="users/assets/img/menu/expressoreal.jpg" alt="expresso" class="menu-card-img">
            <h3 class="menu-card-title">--espresso--</h3>
            <p class="menu-card-price">IDR 15K</p>
        </div>
        <div class="menu-card zoom-effect">
            <img src="users/assets/img/menu/lattereal.jpg" alt="latte" class="menu-card-img">
            <h3 class="menu-card-title">--Latte--</h3>
            <p class="menu-card-price">IDR 18K</p>
        </div>
        <div class="menu-card zoom-effect">
            <img src="users/assets/img/menu/iced-cappuccino.jpg" alt="cappucino" class="menu-card-img">
            <h3 class="menu-card-title">--Latte--</h3>
            <p class="menu-card-price">IDR 18K</p>
        </div>
        <div class="menu-card zoom-effect">
            <img src="users/assets/img/menu/Iced-Americano.jpg" alt="iced-americano" class="menu-card-img">
            <h3 class="menu-card-title">--Latte--</h3>
            <p class="menu-card-price">IDR 18K</p>
        </div>
        <div class="menu-card zoom-effect">
            <img src="users/assets/img/menu/lattereal.jpg" alt="latte" class="menu-card-img">
            <h3 class="menu-card-title">--Latte--</h3>
            <p class="menu-card-price">IDR 18K</p>
        </div>
    </div>
   </section>

{{-- <section id="menu" class="menu">
    <h2>Menu <span>Kami</span></h2>
    <div class="slider">
        <div class="slide">
            <img src="users/assets/img/menu/expressoreal.jpg" alt="Slide 1" class="slider-img">
        </div>
        <div class="slide">
            <img src="users/assets/img/menu/lattereal.jpg" alt="Slide 2" class="slider-img">
        </div>
        <div class="slide">
            <img src="users/assets/img/menu/Iced-Americano.jpg" alt="Slide 3" class="slider-img">
        </div>
        <div class="slide">
            <img src="users/assets/img/menu/cappuccino.jpg" alt="Slide 4" class="slider-img">
        </div>
    </div>
</section> --}}

   <!-- menu section end-->
   <!-- Produk section start -->
   <section class="products" id="products">
    <h2>Produk unggulan <span>kami</span> </h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem sequi, nihil magnam maiores nam itaque. Vitae quia rerum repudiandae distinctio aliquam et quod itaque eligendi atque. Doloremque quam enim maxime.</p>
    <div class="row">
        <div class="product-card">
            <div class="product-icons">
                <a href="#"><i data-feather="shopping-cart"></i></a>
                <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
            </div>
            <div class="product-image">
                <img src="users/assets/img/products/p.jpg" alt="product 1">
            </div>
            <div class="product-content">
                <h3>Coffee Beans</h3>
                <div class="product-stars">
                    <i data-feather="star" class="star-full" ></i>
                    <i data-feather="star" class="star-full"></i>
                    <i data-feather="star" class="star-full"></i>
                    <i data-feather="star" class="star-full"></i>
                    <i data-feather="star" class="star-full"></i>
                </div>
                <div class="product-price">IDR 30K <span>IDR 55k</span></div>

            </div>
        </div>
        <div class="product-card">
            <div class="product-icons">
                <a href="#"><i data-feather="shopping-cart"></i></a>
                <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
            </div>
            <div class="product-image">
                <img src="users/assets/img/products/p.jpg" alt="product 1">
            </div>
            <div class="product-content">
                <h3>Coffee Beans</h3>
                <div class="product-stars">
                    <i data-feather="star" class="star-full"></i>
                    <i data-feather="star" class="star-full"></i>
                    <i data-feather="star" class="star-full"></i>
                    <i data-feather="star" class="star-full"></i>
                    <i data-feather="star" class="star-full"></i>
                </div>
                <div class="product-price">IDR 30K <span>55k</span></div>

            </div>
        </div>
        <div class="product-card">
            <div class="product-icons">
                <a href="#"><i data-feather="shopping-cart"></i></a>
                <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
            </div>
            <div class="product-image">
                <img src="users/assets/img/products/p.jpg" alt="product 1">
            </div>
            <div class="product-content">
                <h3>Coffee Beans</h3>
                <div class="product-stars">
                    <i data-feather="star" class="star-full"></i>
                    <i data-feather="star" class="star-full"></i>
                    <i data-feather="star" class="star-full"></i>
                    <i data-feather="star" class="star-full"></i>
                    <i data-feather="star" class="star-full"></i>
                </div>
                <div class="product-price">IDR 30K <span>55k</span></div>

            </div>
        </div>
    </div>
   </section>
   <!-- Produk section end  -->

   <!-- contact section start -->
   <section id="contact" class="contact">
    <h2>Kontak <span>Kami</span></h2>
   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, id?</p>
   <div class="row">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7922.109687968093!2d107.59656219357912!3d-6.884034099999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7ca15c224bd%3A0xcae5bdfb57e3f7f3!2sCoffee%20Toffee%20Bandung%20Siliwangi!5e0!3m2!1sid!2sid!4v1695249862255!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
    <form action="">
        <div class="input-grup">
            <i data-feather="user"></i>
            <input type="text" placeholder="nama">
        </div>
        <div class="input-grup">
            <i data-feather="mail"></i>
            <input type="text" placeholder="email">
        </div>
        <div class="input-grup">
            <i data-feather="phone"></i>
            <input type="text" placeholder="nomor handphone">
        </div>
        <button type="submit" class="btn">kirim pesan</button>
    </form>
    </div>
    </section>
   <!-- contact section end -->

   <!-- footer section start -->
   <footer>
    <div class="socials">
        <a href="#" ><i data-feather="instagram"></i></a>
        <a href="#"> <i data-feather="twitter"></i></a>
        <a href="#"><i data-feather="facebook"></i></a>
    </div>
    <div class="links">
        <a href="#home">Home</a>
        <a href="#about">About Us</a>
        <a href="#menu">Menu</a>
        <a href="#contact">Contact</a>
    </div>

    <div class="credit">
        <p>Created by <a href="">Ahmad Rafi</a>| &copy; 2023.</p>
    </div>
   </footer>
    <!-- footer section end-->

    <!-- modal box item start -->
    <div class="modal" id="item-detail-modal">
        <div class="modal-container">
            <a href="#"><i data-feather="x" class="close-icon"></i></a>
            <div class="modal-content">
                <img src="users/assets/img/products/p.jpg" alt="">
                <div class="product-content">
                    <h3>Product1</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit a sint repellendus tempora quia amet odio commodi error impedit, quisquam fugiat qui distinctio sequi ipsam.</p>
                    <div class="modal-stars">
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star" class="star-full"></i>
                    </div>
                    <div class="modal-price">IDR 30K <span>55k</span></div>
                    <a href="#"><i data-feather="shopping-cart"></i><span>Add to cart</span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- modal box item end -->
    <!--feather icons  -->
    <script>
        feather.replace();
      </script>

      <script src="users/assets/js/script.js"></script>
      
</body>

</html>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
    $(document).ready(function () {
        $('.slider').slick({
            slidesToShow: 3,
            centerMode: true,
            centerPadding: '0',
            infinite: true,
            focusOnSelect: true,
            autoplay: true,
            autoplaySpeed: 2000,
        });
    });
</script>
