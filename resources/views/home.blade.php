<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/index.css">
</head>

<body>


    <main class="main">
        <!-- Header -->
        <header class="header">
            <div class="container flex-between">
                <div class="logo">
                    <a href="#">
                        <img src="https://raw.githubusercontent.com/MohamedAridah/frontendmentor_url-shortening-api/main/images/logo.svg"
                            alt="" />
                    </a>
                </div>
                <nav class="main-navgation flex-between flex-ver-top">
                    <div class="nav-links">
                        <a href="{{ route('index') }}">صفحه اصلی</a>
                        <a href="https://asefg.ir/">وب سایت سازنده</a>
                        <a href="https://asefg.ir/">سفارش پروژه</a>
                        <a href="{{ route('api') }}">API</a>
                    </div>
                    <div class="nav-buttons">
                        <a href="#" class="log-in">ورود</a>
                        <a href="#" class="sign-up btn btn-sm">ثبت نام</a>
                    </div>
                </nav>
                <div class="burger-menu">
                    <i class="fa-regular fa-bars icon"></i>
                </div>
            </div>
        </header>
        <!-- Landing -->
        <section class="landing">
            <div class="landing-text">
                <h1>سرویس کوتاه سازی لینک</h1>
                <p>
                    سرویس کوتاه سازی لینک db.io سرویسی برای کوتاه سازی انواع لینک های ساده و عالی !
                </p>
                <a href="#url-shorten-form" class="btn btn-lg">ساخت لینک جدید</a>
            </div>
            <div class="landing-image">
                <img src="https://raw.githubusercontent.com/MohamedAridah/frontendmentor_url-shortening-api/main/images/illustration-working.svg"
                    alt="سرویس کوتاه سازی لینک" />
            </div>
        </section>
        <!-- Features -->
        <section class="features" id="features">
            <div class="container">
                <!-- Short URL Feature -->
                <div class="url-shorten-feature">



                    <form action="{{route('set')}}" method="post" class="url-shorten-form" id="url-shorten-form">
                        @csrf
                        <div>

                            <input type="text" class="url-input" name="url"
                                placeholder="لینک خود را اینجا وارد کنید." autocomplete="off" />
                            @if ($errors->has('url'))
                                <label for="url">{{ $errors->first('url') }}</label>
                            @endif
                            {{-- <input style="margin-top:20px;" type="text" class="url-input" name="short" placeholder="slug خود را اینجا وارد کنید."
                                autocomplete="off" />
                                @if ($errors->has('short'))
                                <label for="url">{{ $errors->first('short') }}</label>
                                @endif --}}
                        </div>
                        <button type="submit" class="btn btn-lg btn-plus-icon">کوتاه کردن !</button>
                    </form>
                    <div class="url-shorten-results">
                        @if (session()->has('short'))
                            {{url(session()->get('short')) }}
                        @endif
                    </div>
                </div>
                <!-- Advanced Features -->
                <div class="more-features">
                    <div class="section-header">
                        <h2>ویژگی های سرویس ما</h2>
                        <p>
                            ویژگی های سرویس ما را میتوانید مشاهده کنید.
                        </p>
                    </div>
                    <div class="more-features-content">
                        <div class="feature">
                            <div class="feature-illustration">
                                <img src="https://raw.githubusercontent.com/MohamedAridah/frontendmentor_url-shortening-api/main/images/icon-brand-recognition.svg"
                                    alt="Feature Illustration Icon" />
                            </div>
                            <div class="feature-details">
                                <h3>کوتاه سازی سریع</h3>
                                <p>
                                    لینک خود را در سریع ترین و کوتاه ترین حد ممکن را دریافت کنید !
                                </p>
                            </div>
                        </div>
                        <div class="feature">
                            <div class="feature-illustration">
                                <img src="https://raw.githubusercontent.com/MohamedAridah/frontendmentor_url-shortening-api/main/images/icon-detailed-records.svg"
                                    alt="Feature Illustration Icon" />
                            </div>
                            <div class="feature-details">
                                <h3>سرعت بالا</h3>
                                <p>
                                    با سرعت بالا لینک را بسازید و آن را منتشر کنید و از آن استفاده کنید !
                                </p>
                            </div>
                        </div>
                        <div class="feature">
                            <div class="feature-illustration">
                                <img src="https://raw.githubusercontent.com/MohamedAridah/frontendmentor_url-shortening-api/main/images/icon-fully-customizable.svg"
                                    alt="Feature Illustration Icon" />
                            </div>
                            <div class="feature-details">
                                <h3>دسترسی همیشگی</h3>
                                <p>
                                    لینک شما برای همیشه در دسترس و قابل استفاده خواهد بود !
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing -->
        <section class="pricing" id="pricing">
            <div class="container">
                <div class="section-header">
                    <h2>پروژه خاصی دارید ؟ به ما بسپارید :)</h2>
                    <a href="https://asefg.ir/" class="btn btn-lg">سفارش پروژه</a>
                </div>
            </div>
        </section>
        <!-- Footer -->
        <footer class="footer" id="resources">
            <div class="container">
                <!-- Website Logo -->
                <div class="logo">
                    <a href="#">
                        <img src="https://raw.githubusercontent.com/MohamedAridah/frontendmentor_url-shortening-api/main/images/logo.svg"
                            alt="" />
                    </a>
                </div>
                <!-- Quick Links -->
                <div class="quick-links">
                    <div class="links-group">
                        <span>Features</span>
                        <div>
                            <a href="#">Link Shortening</a>
                            <a href="#">Branded Links</a>
                            <a href="#">Analytics</a>
                        </div>
                    </div>
                    <div class="links-group">
                        <span>Resources</span>
                        <div>
                            <a href="#">Blog</a>
                            <a href="#">Developers</a>
                            <a href="#">Support</a>
                        </div>
                    </div>
                    <div class="links-group">
                        <span>Company</span>
                        <div>
                            <a href="#">About</a>
                            <a href="#">Our Team</a>
                            <a href="#">Careers</a>
                            <a href="#">Contact</a>
                        </div>
                    </div>
                </div>
                <!-- Social Media -->
                <div class="social-media">
                    <a href="#">
                        <img src="https://raw.githubusercontent.com/MohamedAridah/frontendmentor_url-shortening-api/main/images/icon-facebook.svg"
                            alt="Facebook Logo">
                    </a>
                    <a href="#">
                        <img src="https://raw.githubusercontent.com/MohamedAridah/frontendmentor_url-shortening-api/main/images/icon-twitter.svg"
                            alt="Twitter Logo">
                    </a>
                    <a href="#">
                        <img src="https://raw.githubusercontent.com/MohamedAridah/frontendmentor_url-shortening-api/main/images/icon-pinterest.svg"
                            alt="Pinterest Logo">
                    </a>
                    <a href="#">
                        <img src="https://raw.githubusercontent.com/MohamedAridah/frontendmentor_url-shortening-api/main/images/icon-instagram.svg"
                            alt="Instagram Logo">
                    </a>
                </div>
            </div>
            <!-- Made By -->
            <div class="attribution">
                Challenge by <a href="https://www.frontendmentor.io?ref=challenge" class="outer-link"
                    target="_blank">Frontend Mentor</a>.
                Coded by <span class="outer-link">Mohamed Aridah</span>.
                <ul class="social-media">
                    <li>
                        <a href="https://www.codepen.io/FedLover" title="go To My Codepen Account">
                            <i class="fa-brands fa-codepen icon"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.frontendmentor.io/profile/MohamedAridah"
                            title="go To My Frontend Mentor Account">
                            <img src="https://mohamedaridah.github.io/hosted-assets/FEM.png" class="image"
                                alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </footer>
    </main>

</body>

</html>
