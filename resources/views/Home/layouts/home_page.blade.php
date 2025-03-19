@extends('Home.layouts.master')
@section('content')
       <!--Home section starts-->
       <section class="home" id="home">
        <div class="content">
            <h3>Fresh Herbs</h3>

            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit eveniet aliquid accusamus culpa adipisci excepturi, Itaque, molestiae voluptatem!</p>
            <a href="#products" class="btn"> خرید</a>
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


<!--icons section ends-->

<!--Products section stars-->

<section class="products" id="products">
    <h1 class="heading"> <span>محصولات</span></h1>
    <div class="box-container">
        <div class="box">
           
            <div class="image">
                <img src="{{asset('HomeAssets/images/img-1.jpg')}}" alt="">
                <div class="icons">

                    <a href="#" class="cart-btn">add to cart</a>

                </div>
            </div>
            <div class="content">
                <h3>Flower pot</h3>
                <div class="price">$17.99 <span>$15.99</span></div>
            </div>
        </div>


</section>
<!--Products section ends-->


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
