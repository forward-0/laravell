@include('includes.header')
<div class="d-flex justify-content-center align-items-center mt-5">
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-ride="carousel" data-interval="3000" style="width: 800px; height: 400px; overflow: hidden;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/s.jfif" class="d-block w-100" alt="First slide">
                <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.5); border-radius: 10px;">
                    <h5 style="font-size: 2rem;color: #28a745;">خوش آمدید به فروشگاه ما</h5>
                    <p style="font-size: 1.2rem; color: #28a745;">تجربه‌ای بی‌نظیر از خرید آنلاین را با ما داشته باشید!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/s1.jfif" class="d-block w-100" alt="Second slide">
                <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.5); border-radius: 10px;">
                    <h5 style="font-size: 2rem;color: #28a745;">محصولات جدید ما</h5>
                    <p style="font-size: 1.2rem;color: #28a745;">همیشه جدیدترین و بهترین محصولات را بررسی کنید.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/s2.jfif" class="d-block w-100" alt="Third slide">
                <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.5); border-radius: 10px;">
                    <h5 style="font-size: 2rem;color: #28a745;">تخفیف‌های ویژه</h5>
                    <p style="font-size: 1.2rem;color: #28a745;">از تخفیف‌های ویژه ما بهره‌مند شوید!</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleDark" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">قبلی</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleDark" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">بعدی</span>
        </button>
    </div>
</div>

<section id="categories" class="mt-5">
    <div class="container">
        <h2 class="text-center">دسته‌بندی محصولات</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card text-center mt-2" style="position: relative; transition: transform 0.2s;">
                    <div class="card-bg" style="background-image: url('assets/img/category1.jpg');"></div>
                    <div class="card-body" style="position: relative; z-index: 2;">
                        <h5 class="card-title">دسته ۱</h5>
                        <a href="#" class="btn btn-primary">نمایش محصولات</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center mt-2" style="position: relative; transition: transform 0.2s;">
                    <div class="card-bg" style="background-image: url('assets/img/category2.jpg');"></div>
                    <div class="card-body" style="position: relative; z-index: 2;">
                        <h5 class="card-title">دسته ۲</h5>
                        <a href="#" class="btn btn-primary">نمایش محصولات</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center mt-2" style="position: relative; transition: transform 0.2s;">
                    <div class="card-bg" style="background-image: url('assets/img/category3.jpg');"></div>
                    <div class="card-body" style="position: relative; z-index: 2;">
                        <h5 class="card-title">دسته ۳</h5>
                        <a href="#" class="btn btn-primary">نمایش محصولات</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<main>
    <section id="products">
        <div class="container mt-5">
            <h2 class="text-center">محصولات</h2>
            <div class="row align-items-center">
                <div class="card col-md-3 mt-3 mx-2" style="width: 18rem;">
                    <img src="assets/img/product1.jpg" class="card-img-top" alt="#" style="width: 100%; height: 300px; object-fit: cover;">
                    <div class="card-body">
                        <h3 class="card-title">محصول ۱</h3>
                        <h5 class="card-title">قیمت: 100000 تومان</h5>
                        <h6 class="card-title">موجودی: 20</h6>
                        <p class="card-text">توضیحات کوتاه درباره محصول ۱.</p>
                        <a href="#" class="btn btn-primary">جزئیات</a>
                    </div>
                </div>

                <div class="card col-md-3 mt-3 mx-2" style="width: 18rem;">
                    <img src="assets/img/product2.jpg" class="card-img-top" alt="#" style="width: 100%; height: 300px; object-fit: cover;">
                    <div class="card-body">
                        <h3 class="card-title">محصول ۲</h3>
                        <h5 class="card-title">قیمت: 150000 تومان</h5>
                        <h6 class="card-title">موجودی: 15</h6>
                        <p class="card-text">توضیحات کوتاه درباره محصول ۲.</p>
                        <a href="#" class="btn btn-primary">جزئیات</a>
                    </div>
                </div>

                <div class="card col-md-3 mt-3 mx-2" style="width: 18rem;">
                    <img src="assets/img/product3.jpg" class="card-img-top" alt="#" style="width: 100%; height: 300px; object-fit: cover;">
                    <div class="card-body">
                        <h3 class="card-title">محصول ۳</h3>
                        <h5 class="card-title">قیمت: 200000 تومان</h5>
                        <h6 class="card-title">موجودی: 10</h6>
                        <p class="card-text">توضیحات کوتاه درباره محصول ۳.</p>
                        <a href="#" class="btn btn-primary">جزئیات</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@include('includes.footer')