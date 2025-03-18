@extends('Home.layouts.master')
@section('content')
       <!--Home section starts-->
       <section class="home" id="home">
        <div class="content">
            <h3>Fresh Flowers</h3>
            <span>Natural & beautiful flowers</span>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit eveniet aliquid accusamus culpa adipisci excepturi, Itaque, molestiae voluptatem!</p>
            <a href="#products" class="btn"> Shop Now</a>
        </div>
    </section>


    <!--Home section ends-->


  <!--About section starts-->
<section class="about" id="about">
    <h1 class="heading"><span>about</span> us</h1>
    <div class="row">
        <div class="video-container">
            <video src="{{asset('HomeAssets/images/about-vid.mp4')}}" loop autoplay muted></video>
            <h3>best flowers sellers</h3>
        </div>
        <div class="content">
            <h3>why choose us?</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda nam cumque quasi autem blanditiis eaque laboriosam, neque alias sequi! Minus voluptatem expedita incidunt amet vel repellendus rem nisi minima animi?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quo illum perferendis sapiente iusto distinctio! Esse maxime laborum vero, eligendi, sint impedit nulla fugit fugiat qui harum sapiente natus cum.</p>
            <a href="#" class="btn">Learn More</a>

        </div>
    </div>
</section>

  <!--About section ends-->

<!--icons section starts-->

<section class="icons-container">
    <div class="icons">
        <img src="{{asset("HomeAssets/images/icon-1.png")}}" alt="">
        <div class="info">
            <h3>Free delivery</h3>
            <span>on all orders</span>
        </div>
    </div>

    <div class="icons">
        <img src="{{asset("HomeAssets/images/icon-1.png")}}" alt="">
        <div class="info">
            <h3>10 days returns</h3>
            <span>Moneyback guarantee</span>
        </div>
    </div>

    <div class="icons">
        <img src="{{asset('HomeAssets/images/icon-3.png')}}" alt="">
        <div class="info">
            <h3>offer & gits</h3>
            <span>on all orders</span>
        </div>
    </div>

    <div class="icons">
        <img src="{{asset('HomeAssets/images/icon-4.png')}}" alt="">
        <div class="info">
            <h3>secure paymens</h3>
            <span>protected by paypal</span>
        </div>
    </div>
</section>

<!--icons section ends-->

<!--Products section stars-->

<section class="products" id="products">
    <h1 class="heading">latest <span>products</span></h1>
    <div class="box-container">
        <div class="box">
            <span class="discount">-10%</span>
            <div class="image">
                <img src="{{asset('HomeAssets/images/img-1.jpg')}}" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Flower pot</h3>
                <div class="price">$17.99 <span>$15.99</span></div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-15%</span>
            <div class="image">
                <img src="{{asset('HomeAssets/images/img-2.jpg')}}" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Flower pot</h3>
                <div class="price">$13.99 <span>$15.99</span></div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-5%</span>
            <div class="image">
                <img src="{{asset('HomeAssets/images/img-3.jpg')}}" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Flower pot</h3>
                <div class="price">$14.99 <span>$15.99</span></div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-20%</span>
            <div class="image">
                <img src="{{asset('HomeAssets/images/img-4.jpg')}}" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Flower pot</h3>
                <div class="price">$12.99 <span>$15.99</span></div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-17%</span>
            <div class="image">
                <img src="{{asset('HomeAssets/images/img-5.jpg')}}" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Flower pot</h3>
                <div class="price">$14.99 <span>$15.99</span></div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-3%</span>
            <div class="image">
                <img src="{{asset('HomeAssets/images/img-6.jpg')}}" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Flower pot</h3>
                <div class="price">$18.99 <span>$15.99</span></div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-18%</span>
            <div class="image">
                <img src="{{asset('HomeAssets/images/img-7.jpg')}}" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Flower pot</h3>
                <div class="price">$15.99 <span>$15.99</span></div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-10%</span>
            <div class="image">
                <img src="{{asset('HomeAssets/images/img-8.jpg')}}" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Flower pot</h3>
                <div class="price">$17.99 <span>$15.99</span></div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-5%</span>
            <div class="image">
                <img src="{{asset('HomeAssets/images/img-9.jpg')}}" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Flower pot</h3>
                <div class="price">$11.99 <span>$15.99</span></div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-11%</span>
            <div class="image">
                <img src="{{asset('HomeAssets/images/img-10.png')}}" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Flower pot</h3>
                <div class="price">$11.99 <span>$15.99</span></div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-9%</span>
            <div class="image">
                <img src="{{asset('HomeAssets/images/img-1.png')}}" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Flower pot</h3>
                <div class="price">$13.99 <span>$15.99</span></div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-5%</span>
            <div class="image">
                <img src="./images/img-12.png" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Flower pot</h3>
                <div class="price">$18.99 <span>$15.99</span></div>
            </div>
        </div>
    </div>
</section>
<!--Products section ends-->


<!--review section starts-->
<section class="review" id="review">
    <h1 class="heading">customer's <span>review</span></h1>
    <div class="box-container">
        <div class="box">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt tenetur voluptas quibusdam voluptate aperiam eligendi, at velit enim? Odit quibusdam possimus necessitatibus atque at quia ut omnis, sunt corrupti! Id!</p>
            <div class="user">
                <img src="./images/pic-1.png" alt="">
                <div class="user-info">
                    <h3>charles Deco</h3>
                    <span>Happy Customers</span>
                </div>
            </div>
            <span class="fas fa-quote-right"></span>
        </div>

        <div class="box">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt tenetur voluptas quibusdam voluptate aperiam eligendi, at velit enim? Odit quibusdam possimus necessitatibus atque at quia ut omnis, sunt corrupti! Id!</p>
            <div class="user">
                <img src="./images/pic-2.png" alt="">
                <div class="user-info">
                    <h3>sharon michel</h3>
                    <span>Happy Customers</span>
                </div>
            </div>
            <span class="fas fa-quote-right"></span>
        </div>

        <div class="box">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt tenetur voluptas quibusdam voluptate aperiam eligendi, at velit enim? Odit quibusdam possimus necessitatibus atque at quia ut omnis, sunt corrupti! Id!</p>
            <div class="user">
                <img src="./images/pic-3.png" alt="">
                <div class="user-info">
                    <h3>Abdullahi Ali</h3>
                    <span>Happy Customers</span>
                </div>
            </div>
            <span class="fas fa-quote-right"></span>
        </div>

        <div class="box">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt tenetur voluptas quibusdam voluptate aperiam eligendi, at velit enim? Odit quibusdam possimus necessitatibus atque at quia ut omnis, sunt corrupti! Id!</p>
            <div class="user">
                <img src="./images/pic-4.jpg" alt="">
                <div class="user-info">
                    <h3>Sofia wick</h3>
                    <span>Happy Customers</span>
                </div>
            </div>
            <span class="fas fa-quote-right"></span>
        </div>
    </div>
</section>

<!--review section ends-->


<!--contact section starts-->
<section class="contact" id="contact">
    <h1 class="heading"><span>contact</span> us</h1>
    <div class="row">
        <form action="">
            <input type="text" class="box" placeholder="Name">
            <input type="email" class="box" placeholder="Email">
            <input type="number" class="box" placeholder="Number">
            <textarea name="" class="box" placeholder="Message" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="send massage" class="btn">
        </form>
        <div class="image">
            <img src="./images/contact-img.svg" alt="">
        </div>
    </div>
</section>
<!--contact section ends-->
@endsection
