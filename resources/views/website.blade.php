<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>فروشگاه اینترنتی هورداد</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('website/img/favicon.png') }}">
    {{--    <meta name="description" content="فروشگاه اینترنتی هورداد | فروش آنلاین تجهیزات برق - ارسال به سراسر ایران - قیمت کنتاکتور - بانک خازنی - قیمت اینورتر">--}}
    <meta name="description" content="هر آنچه که نیاز دارید با بهترین قیمت از فروشگاه هورداد بخرید! جدیدترین انواع کنتاکتور - بانک خازنی - اینورترر - ارسال به سراسر ایران">
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.rtl.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/styleWebsite.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/swiper.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<style>
    body {

    }

    a {
        color: #616161;
    }

    .f-14 {
        font-size: 14px;
        line-height: 1rem;
    }

    ul {
        margin: 0;
    }

    .mb-2rem {
        margin-bottom: 2rem;
    }

    #banner-1 img {
        border-radius: 5px;
    }

    #navbar nav div ul li a {
        color: #616161;
        font-size: 13px;
    }

    #category-1 div.container {
        padding: 2.5rem 0;
    }

    #category-1 div.container a {
        margin: 0.5rem 0;
    }

    #category-1 div.container a img {
        margin: 0.5rem 0;
    }

    #navbar-categories {
        z-index: 1000;
        min-width: 1200px;
        border-radius: 0 0 5px 5px;
        display: none;
        background-color: #f7f7f7;
        position: absolute;
        top: 100%;
        overflow: hidden;
        min-height: 410px;
        box-shadow: 0 10px 10px 0 rgba(0, 0, 0, .15);
        border-radius: 0 0 5px 5px;
    }

    #best-selling .container .swiper .swiper-wrapper > div {
        border: 1px solid;
        border-radius: 5px;
        margin-left: 8px;
    }

    #best-selling .container .swiper .swiper-wrapper .swiper-slide img {
        /*max-height: 207px;*/
        /*max-width: 207px;*/
    }

    #best-selling .container .swiper .swiper-wrapper .swiper-slide {
        padding: 0.5rem 0.75rem;
    }

    #best-selling .container .swiper .swiper-wrapper .swiper-slide div:nth-child(2) p:nth-child(2) {
        color: red
    }


    .sub-menu-1 {
        background-color: white;
        padding: 0.5rem;
        position: absolute;
        right: 20%;
        width: 80%;
        height: 100%;
        top: 0;
        display: inline-flex;
        flex-direction: column;
        flex-wrap: wrap;
    }

    .sub-menu-1 > li > a {
        font-size: 14px;
        font-weight: bold;
        color: black;
        margin-right: 5px;
    }

    .sub-menu-1 > li > a::before {
        width: 2px;
        height: 18px;
        content: " ";
        margin-left: 8px;
        border-radius: 50px;
        background-color: #ef394e;
        display: inline-flex;
        vertical-align: middle;
    }

    .sub-menu-1 > li > ul > li > ul {
        width: 25%;
    }


    .a > li > a {
        padding: 14px 8px;
        display: flex;
    }

    .a > li:hover {
        background-color: white;
        border-radius: 0 5px 5px 0;
    }

    .sub-menu ul li {
        font-size: 12px;
        padding: 0.25rem;
    }

    #navbar nav > div > ul > li:hover {
        border-bottom: 2px solid rgb(246, 65, 45);
        /*transition: all 0.3s ease-in-out;*/
    }

    #navbar nav div ul > li:hover > div {

        display: flex !important;

        /*transition: all 0.3s ease-in-out;*/

    }

    #best-selling div.swiper-slide {
        max-width: 250px;
    }

    /*Small devices (landscape phones, less than 768px)*/
    @media (max-width: 768px) {
        #best-selling div.swiper-slide {
            max-width: 155px;
        }

        #banner-1 div.container > .row > .col-md-8 > .col-md-4 {
            display: none !important;
        }

        #banner-1 div.container > .row > div.col-md-4 {
            margin-top: 1rem;
        }

        #category-3 > div.row div.col-md-6:nth-child(2) {
            margin-top: 1rem;
        }

        #banner-2 div.col-md-6:nth-child(1) {
            margin-bottom: 1rem;
        }

    }
</style>
<body>

<section id="navbar" class="container-fluid">
    <div class="row justify-content-between align-items-center" style="padding: 1rem 0;max-width: 1500px;margin: auto;">
        <div class="d-flex col-md-8 align-items-center">
            <div class="col-md-2">
                <a href="#/"><img src="{{ asset('website/img/logo-hoordad-nav.png') }}" style="max-width: 100px"></a>
            </div>
            <div class="col-md-10 justify-content-end" style="border: 1px solid #e0e0e0; border-radius:5px">
                <form action="" class="">
                    <input class="w-100" value="" type="text" placeholder="جستجوی محصولات" style="border-radius: 5px; padding: 10px;font-size: 13px; color: #c0c0c0">
                    {{--                                                <button class="btn btn-primary" type="submit">send</button>--}}
                </form>
            </div>
        </div>
        <div class="row col-md-4" style="">
            <div class="col-md-5 d-flex">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-6087" x="0px" y="0px" viewBox="0 0 391.961 391.961" style="width: 40px;enable-background:new 0 0 391.961 391.961;" xml:space="preserve">
                        <path d="M142.293,89.456c2.175,4.47,0.411,9.856-4.058,12.031C92.006,123.985,63.48,169.879,63.48,221.259v36.332 c0,4.971-4.415,9.371-9.385,9.371H35.333c-15.308,0-27.853-12.824-27.853-28.131v-41.042c0-12.095,7.786-22.717,19.324-26.432 c4.731-1.521,9.836,1.077,11.36,5.809s-1.1,9.802-5.832,11.325c-4.008,1.291-6.853,5.114-6.853,9.298v41.042 c0,5.382,4.471,10.131,9.853,10.131H45.48v-27.702c0-28.889,7.988-56.973,23.464-81.214c15.06-23.589,36.104-42.519,61.221-54.743 C134.635,83.127,140.118,84.987,142.293,89.456z M244.406,109.016c4.421-4.508,8.597-8.767,8.597-18.895 c0-14.057-11.438-25.494-25.496-25.494c-14.058,0-25.494,11.437-25.494,25.494c0,4.971,4.029,9,9,9s9-4.029,9-9 c0-4.132,3.362-7.494,7.496-7.494c4.132,0,7.494,3.362,7.494,7.494c0,2.775,0,2.775-3.448,6.292 c-0.525,0.535-1.083,1.104-1.676,1.721l-25.263,26.375c-0.072,0.075-0.135,0.151-0.135,0.228v0.001c0,0.005-0.088,0.011-0.093,0.017 c-0.003,0.003-0.045,0.006-0.048,0.01c-0.003,0.002-0.024,0.005-0.026,0.008c-0.698,0.782-1.245,1.656-1.623,2.578 c-0.431,1.052-0.673,2.203-0.673,3.41c0,1.265,0.258,2.468,0.729,3.56c0.461,1.072,0.986,2.071,1.881,2.93 c0.002,0.002-0.147,0.004-0.147,0.006v0.001c0,0.006,0.165-0.296,0.17-0.296h0.077c0.007,0,0.051,0.169,0.057,0.175 c0.001,0.001,0.021,0.08,0.021,0.081c0.884,0.836,1.901,1.498,2.971,1.909c0.885,0.34,1.842,0.564,2.835,0.607 c0.009,0.002,0.018,0.111,0.026,0.111c0.124,0.005,0.25,0.118,0.374,0.118c0.01,0,0.019,0,0.028,0h32.328c4.971,0,9-4.029,9-9 s-4.029-9-9-9h-11.228l10.72-11.257C243.407,110.135,243.922,109.51,244.406,109.016z M384.48,197.787v41.042 c0,15.307-12.045,28.131-27.353,28.131h-16.622c-5.46,17-14.121,33.477-25.787,48.188c-19.169,24.173-45.546,41.749-74.88,50.601 c-1.319,14.807-13.792,26.21-28.933,26.21h-29.349c-16.017,0-29.048-12.982-29.048-28.999c0-16.02,13.031-29.001,29.048-29.001 h29.349c10.542,0,19.791,5.838,24.882,14.264c55.473-17.164,93.578-68.199,93.578-126.965c0-13.29-1.936-26.315-5.763-38.857 c-17.421,13.779-39.416,22.015-63.301,22.015c-56.363,0-102.218-45.849-102.218-102.211S203.939,0,260.303,0 S362.52,45.878,362.52,102.24c0,25.336-9.264,48.593-24.584,66.472c6.259,16.832,9.43,34.617,9.43,52.732 c0,9.278-0.819,18.517-2.434,27.517h12.195c5.382,0,9.353-4.749,9.353-10.131v-41.042c0-4.185-2.646-8.008-6.654-9.298 c-4.731-1.523-7.179-6.593-5.657-11.325c1.524-4.731,6.491-7.333,11.223-5.809C376.932,175.07,384.48,185.692,384.48,197.787z M221.954,363.107c0-0.734-0.072-1.258-0.209-1.952c-0.024-0.106-0.047-0.309-0.067-0.415c-1.123-4.912-5.526-8.779-10.771-8.779 h-29.349c-6.092,0-11.048,4.906-11.048,10.998c0,6.095,4.956,11.002,11.048,11.002h29.349 C216.998,373.961,221.954,369.198,221.954,363.107z M344.52,102.194c0-46.438-37.78-84.217-84.218-84.217 s-84.218,37.78-84.218,84.217s37.78,84.217,84.218,84.217S344.52,148.632,344.52,102.194z M309.536,64.961h0.027h-0.041 c-4.971,0-9.04,3.696-9.04,8.667v16.707c0,4.052-3.426,7.32-7.501,7.32c-4.131,0-7.499-3.362-7.499-7.494V73.627 c0-4.971-4.029-9-9-9s-9,4.029-9,9V90.16c0,14.057,11.443,25.494,25.501,25.494c2.606,0,5.499-0.393,7.499-1.123v16.23 c0,4.971,4.029,9,9,9s9-4.029,9-9v-40.28c0-0.107,0-0.214,0-0.321V73.627C318.48,68.657,314.506,64.961,309.536,64.961z"></path>
                    </svg>
                </div>
                <div>
                    <P class="d-inline-block m-0" style="color: rgba(127, 127, 127, 1); font-size: 12px; margin-right: 3px !important;">نیاز به راهنمایی دارید؟</P>
                    <P class="m-0" style="font-weight: 800">09306909447</P>
                </div>
            </div>
            <div class="col-md-7 d-flex flex-wrap align-items-center justify-content-between">
                <div style="border: 1px solid #e0e0e2; padding: 0.5rem; border-radius: 5px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                    </svg>
                    <a href="#/" style="font-size: 12px; color: rgba(127, 127, 127, 1)">
                        ورود به حساب کاربری
                    </a>
                </div>
                <div style="border-left:2px #e0e0e2 solid;">&nbsp;</div>
                <div class="" style="">
                    <a href="#" style="color: rgba(127, 127, 127, 1)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <nav class="navbar justify-content-between align-items-center p-0" style="max-width: 1500px;margin: auto;">
        <div class="">
            <ul class="d-flex">
                <li class="nav-item" style="border-left: 1px solid #e0e0e2;">
                    <a class="nav-link" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16" style="margin-left: 10px;" width="20" height="20">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"></path>
                        </svg>
                        دسته بندی تجهیزات
                    </a>
                    <div id="navbar-categories" class="">
                        <ul class="a" style="padding: 0.5rem 0.5rem 0.5rem 0; width: 20%">
                            <li class="">
                                <a href="" class="">انواع خازن و تجهیزات بانک خازنی</a>
                                <ul class="sub-menu-1" style="">
                                    <li>
                                        <a href="" style="font-size: 14px;">
                                            خازن سه فاز فشار ضعیف
                                            <i style='font-size:12px' class='fas'>&#xf104;</i>
                                        </a>
                                        <ul class="sub-menu" style="">
                                            <li><a href="">خازن سه فاز فراکو آلمان FRAKO</a></li>
                                            <li><a href="">خازن سه فاز لیفاسا اسپانیا LIFASA</a></li>
                                            <li><a href="">خازن سه فاز صبا زیمنس SABA-SIEMENS</a></li>
                                            <li><a href="">خازن سه فاز روغنی هیدرا (HYDRA ( AEG</a></li>
                                            <li><a href="">خازن سه فاز PKC</a></li>
                                            <li><a href="">خازن سه فاز اشنایدر SCHNEIDER</a></li>
                                            <li><a href="">خازن سه فاز فراکوه FARAKOH</a></li>
                                            <li><a href="">خازن سه فاز اسپانیایی RTR</a></li>
                                            <li><a href="">خازن سه فاز فشار ضعیف ایسکرا ISKRA</a></li>
                                            <li><a href="">خازن سه فاز اپکاس آلمان EPCOS</a></li>
                                            <li><a href="">خازن سه فاز پارس شریم PARS.GH</a></li>
                                            <li><a href="">سایر برندهای خازن سه فاز</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">رگولاتور بانک خازنی</a>
                                        <ul class="sub-menu">
                                            <li><a href="">رگولاتور بلوک آلمان BELUK</a></li>
                                            <li><a href="">رگولاتور فراکو آلمان FRAKO</a></li>
                                            <li><a href="">رگولاتور زایلوگ ایران ZILUG</a></li>
                                            <li><a href="">رگولاتور لیفاسا اسپانیا LIFASA</a></li>
                                            <li><a href="">رگولاتور RTR اسپانیا</a></li>
                                            <li><a href="">رگولاتور خازنی PKC</a></li>
                                            <li><a href="">رگولاتور ایسکرا ISKRA</a></li>
                                            <li><a href="">رگولاتور سیرکاتور اسپانیا CIRCUTOR</a></li>
                                            <li><a href="">رگولاتور لواتو ایتالیا LOVATO</a></li>
                                            <li><a href="">رگولاتور خازنی اشنایدر SCHNEIDER</a></li>
                                            <li><a href="">رگولاتور پارس مت PARS-MAT</a></li>
                                            <li><a href="">سایر برند های رگولاتور بانک خازنی</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">کنتاکتور خازنی</a>
                                        <ul class="sub-menu">
                                            <li><a href="">کنتاکتور خازنی PKC</a></li>
                                            <li><a href="">کنتاکتور خازنی R K (RADE CONCAR)</a></li>
                                            <li><a href="">کنتاکتور خازنی اشنایدر SCHNEIDER</a></li>
                                            <li><a href="">کنتاکتور خازنی ABN</a></li>
                                            <li><a href="">سایر برندهای کنتاکتور خازنی</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">فیلتر هارمونیک خازنی</a>
                                        <ul class="sub-menu">
                                            <li><a href="">فیلتر هارمونیک فراکوه FARAKOH</a></li>
                                            <li><a href="">فیلتر هارمونیك لیفاسا LIFASA</a></li>
                                            <li><a href="">فیلتر هارمونیك PKC</a></li>
                                            <li><a href="">فیلتر هارمونیک پارس PARS GH. SHREEM</a></li>
                                            <li><a href="">فیلتر هارمونیک فراپیام BERK</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="">کنتاکتور هارمونیکی</a></li>
                                    <li><a>بانک خازنی اتوماتیک آماده نصب</a>
                                        <ul class="sub-menu">
                                            <li><a href="">سه فاز، آماده نصب، برحسب کیلووار</a></li>
                                            <li><a href="">تکفاز/ سه فاز، آماده نصب، برحسب آمپر</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="">بدنه، مونتاژ و خدمات تابلو بانک خازنی</a>
                                    </li>
                                    <li><a href="">تجهیزات بانک خازنی فشار متوسط</a>
                                        <ul class="sub-menu">
                                            <li><a href="">خازن فشار متوسط MV</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="">کنتاکتور خازنی تایریستوری ( سریع )</a>
                                    </li>
                                    <li>
                                        <a href="">رگولاتور تایریستوری ( سریع )</a>
                                    </li>
                                    <li><a href="">خازن تکفاز فشار ضعیف</a>
                                        <ul class="sub-menu">
                                            <li><a href="">خازن تکفاز فشار ضعیف ایتالیا DUCATI</a></li>
                                            <li><a href="">خازن تکفاز فشار ضعیف PKC</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">خازن برای سایر کاربردها</a>
                                        <ul class="sub-menu">
                                            <li><a href="">خازن UPS</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class=""><a href="">انواع کنتاکتور، بیمتال و رله</a>
                            <li><a href="">انواع کلید اتوماتیک / دستی و فیوز</a></li>
                            <li><a href="">انواع درایو (اینورتر) و سافت استارتر</a></li>
                            <li><a href="">انواع سیم و کابل</a></li>
                            <li><a href="">سایر تجهیزات برق صنعتی</a></li>
                            <li><a href="">انواع تابلو برق صنعتی</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item" style="border-left: 1px solid #e0e0e2;">
                    <a class="nav-link" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16" style="margin-left: 10px;" width="20" height="20">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"></path>
                        </svg>
                        برند ها</a>
                </li>
                <li class="nav-item"><a class="nav-link" href=""><span class=""></span><span class="">خانه</span></a></li>
                <li class="nav-item"><a class="nav-link" href=""><span class=""></span><span class="">مجله تخصصی ( آموزش جامع )</span></a></li>
                <li class="nav-item"><a class="nav-link" href=""><span class=""></span><span class="">استخدام در تسلاکالا</span></a></li>
                <li class="nav-item"><a class="nav-link" href=""><span class=""></span><span class="">همکاری فروشندگان با تسلاکالا</span></a></li>
                <li class="nav-item"><a class="nav-link" href=""><span class=""></span><span class="">تماس با ما (۰۲۱۹۱۰۲۶۱۲۶)</span></a></li>
            </ul>
        </div>

        <div class="">
            <ul class="">
                <li class="nav-item"><a class="nav-link" href="">پیشنهادهای شگفت انگیز</a></li>
            </ul>
        </div>
    </nav>


</section>
{{--<section id="banner-1" class="container-fluid mb-2rem" style="background-color: #EFEFEF; padding: 2.5rem 0;">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="d-flex flex-wrap col-md-8 text-center">--}}
{{--                <div class="col-md-8">--}}
{{--                    <img style="" src="http://i-wordpress.ir/woodland/noorkala/wp-content/uploads/2022/07/all_02.jpg" alt="">--}}
{{--                </div>--}}
{{--                <div class="col-md-4 d-flex justify-content-center">--}}
{{--                    <img src="https://i-wordpress.ir/woodland/noorkala/wp-content/uploads/2022/07/all_01.jpg" alt="">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-4">--}}
{{--                <div class="col-12"><img src="https://i-wordpress.ir/woodland/noorkala/wp-content/uploads/2022/07/all_05.jpg" alt=""></div>--}}
{{--                <div class="col-12 mt-4"><img src="https://i-wordpress.ir/woodland/noorkala/wp-content/uploads/2022/07/all_06.jpg" alt=""></div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<section id="newest-products" class="container mb-2rem">
    <div class="container">
        <p>جدید ترین محصولات</p>
        <hr/>
        <div class="row justify-content-center">
            <div class="col-md-2 mx-1" style="border: 1px solid; border-radius: 5px">
                <div class="row">
                    <img style="max-height: 230px; max-width: 230px;" src="{{ asset('website/img/products/newest-products/doshakh-400x400.jpg') }}" alt="product->title">
                </div>
                <p>دوشاخ نری سیار پارت الکتریک مدل 9128</p>
                <p style="color: red">قیمت : 300,000 تومان</p>
            </div>
            <div class="col-md-2 mx-1" style="border: 1px solid; border-radius: 5px">
                <div class="row">
                    <img style="max-height: 230px; max-width: 230px;" src="{{ asset('website/img/products/newest-products/doshakh-400x400.jpg') }}" alt="product->title">
                </div>
                <p>دوشاخ نری سیار پارت الکتریک مدل 9128</p>
                <p style="color: red">قیمت : 300,000 تومان</p>
            </div>
            <div class="col-md-2 mx-1" style="border: 1px solid; border-radius: 5px">
                <div class="row">
                    <img style="max-height: 230px; max-width: 230px;" src="{{ asset('website/img/products/newest-products/doshakh-400x400.jpg') }}" alt="product->title">
                </div>
                <p>دوشاخ نری سیار پارت الکتریک مدل 9128</p>
                <p style="color: red">قیمت : 300,000 تومان</p>
            </div>
            <div class="col-md-2 mx-1" style="border: 1px solid; border-radius: 5px">
                <div class="row">
                    <img style="max-height: 230px; max-width: 230px;" src="{{ asset('website/img/products/newest-products/doshakh-400x400.jpg') }}" alt="product->title">
                </div>
                <p>دوشاخ نری سیار پارت الکتریک مدل 9128</p>
                <p style="color: red">قیمت : 300,000 تومان</p>
            </div>
            <div class="col-md-2 mx-1" style="border: 1px solid; border-radius: 5px">
                <div class="row">
                    <img style="max-height: 230px; max-width: 230px;" src="{{ asset('website/img/products/newest-products/doshakh-400x400.jpg') }}" alt="product->title">
                </div>
                <p>دوشاخ نری سیار پارت الکتریک مدل 9128</p>
                <p style="color: red">قیمت : 300,000 تومان</p>
            </div>
        </div>
    </div>
</section>
<section id="category-1" class="container-fluid d-flex justify-content-center mb-2rem" style="background-color: #EFEFEF">
    <div class="container d-flex flex-wrap text-center justify-content-center">
        <a class="col-12 col-md-2" href="#">
            <img src="{{ asset('website/img/category/1/light-switch.png') }}" alt="product->title">
            <p class="m-0">کلید پریز</p>
        </a>
        <a class="col-12 col-md-2" href="#">
            <img src="{{ asset('website/img/category/1/light-bulb.png') }}" alt="product->title">
            <p class="m-0">لامپ</p>
        </a>
        <a class="col-12 col-md-2" href="#">
            <img src="{{ asset('website/img/category/1/cable.png') }}" alt="product->title">
            <p class="m-0">سیم</p>
        </a>
        <a class="col-12 col-md-2" href="#">
            <img src="{{ asset('website/img/category/1/outlet.png') }}" alt="product->title">
            <p class="m-0">دوشاخه و محافظ</p>
        </a>
        <a class="col-12 col-md-2" href="#">
            <img src="{{ asset('website/img/category/1/light-switch.png') }}" alt="product->title">
            <p class="m-0">فیوز</p>
        </a>
    </div>
</section>
<section id="best-selling" class="container-fluid mb-2rem">
    <div class="container">
        <p>پر فروش ترین محصولات</p>
        <hr/>
        <div class="row swiper bestSellers-swiper" style="padding: 2.5rem 0;">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="">
                        <img src="{{ asset('website/img/products/best-selling/lamp-400-400.jpg') }}">
                    </div>
                    <div>
                        <p>لامپ 200 وات</p>
                        <p style="color: red">قیمت : 230,000 تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="">
                        <img src="{{ asset('website/img/products/best-selling/lamp-400-400.jpg') }}">
                    </div>
                    <div>
                        <p>لامپ 200 وات</p>
                        <p style="color: red">قیمت : 230,000 تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="">
                        <img src="{{ asset('website/img/products/best-selling/lamp-400-400.jpg') }}">
                    </div>
                    <div>
                        <p>لامپ 200 وات</p>
                        <p style="color: red">قیمت : 230,000 تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="">
                        <img src="{{ asset('website/img/products/best-selling/lamp-400-400.jpg') }}">
                    </div>
                    <div>
                        <p>لامپ 200 وات</p>
                        <p style="color: red">قیمت : 230,000 تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="">
                        <img src="{{ asset('website/img/products/best-selling/lamp-400-400.jpg') }}">
                    </div>
                    <div>
                        <p>لامپ 200 وات</p>
                        <p style="color: red">قیمت : 230,000 تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="">
                        <img src="{{ asset('website/img/products/best-selling/lamp-400-400.jpg') }}">
                    </div>
                    <div>
                        <p>لامپ 200 وات</p>
                        <p style="color: red">قیمت : 230,000 تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="">
                        <img src="{{ asset('website/img/products/best-selling/lamp-400-400.jpg') }}">
                    </div>
                    <div>
                        <p>لامپ 200 وات</p>
                        <p style="color: red">قیمت : 230,000 تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="">
                        <img src="{{ asset('website/img/products/best-selling/lamp-400-400.jpg') }}">
                    </div>
                    <div>
                        <p>لامپ 200 وات</p>
                        <p style="color: red">قیمت : 230,000 تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="">
                        <img src="{{ asset('website/img/products/best-selling/lamp-400-400.jpg') }}">
                    </div>
                    <div>
                        <p>لامپ 200 وات</p>
                        <p style="color: red">قیمت : 230,000 تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="">
                        <img src="{{ asset('website/img/products/best-selling/lamp-400-400.jpg') }}">
                    </div>
                    <div>
                        <p>لامپ 200 وات</p>
                        <p style="color: red">قیمت : 230,000 تومان</p>
                    </div>
                </div>
            </div>

            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

    </div>
</section>
<section id="banner-2" class="container mb-2rem">
    <div class="row justify-content-center">
        <div class="col-md-6 d-flex flex-wrap"><img style="max-width: 100%; object-fit: contain; border-radius: 5px" src="https://i-wordpress.ir/woodland/noorkala/wp-content/uploads/2022/07/all_01-1.jpg" alt=""></div>
        <div class="col-md-6 d-flex flex-wrap"><img style="max-width: 100%; object-fit: contain; border-radius: 5px" src="https://i-wordpress.ir/woodland/noorkala/wp-content/uploads/2022/07/all.jpg" alt=""></div>
    </div>
</section>
{{--<section id="blog" class="container mb-2rem"></section>--}}
<section id="brands" class="container-fluid d-flex justify-content-center mb-2rem">
    <div class="container text-center">
        <p class="mb-3">برند هایی که کار میکنیم</p>
        <hr/>
        <div class="col-md-10 row swiper brands-swiper" style="padding: 2.5rem 0;">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <a class="swiper-slide" href="#">
                    <img style="max-height: 80px; max-width: 80px" src="https://i-wordpress.ir/woodland/noorkala/wp-content/uploads/2022/07/part.jpg" alt="product->title">
                </a>
                <a class="swiper-slide" href="#">
                    <img style="max-height: 80px; max-width: 80px" src="https://i-wordpress.ir/woodland/noorkala/wp-content/uploads/2022/07/part.jpg" alt="product->title">
                </a>
                <a class="swiper-slide" href="#">
                    <img style="max-height: 80px; max-width: 80px" src="https://i-wordpress.ir/woodland/noorkala/wp-content/uploads/2022/07/part.jpg" alt="product->title">
                </a>
                <a class="swiper-slide" href="#">
                    <img style="max-height: 80px; max-width: 80px" src="https://i-wordpress.ir/woodland/noorkala/wp-content/uploads/2022/07/part.jpg" alt="product->title">
                </a>
                <a class="swiper-slide" href="#">
                    <img style="max-height: 80px; max-width: 80px" src="https://i-wordpress.ir/woodland/noorkala/wp-content/uploads/2022/07/part.jpg" alt="product->title">
                </a>
                <a class="swiper-slide" href="#">
                    <img style="max-height: 80px; max-width: 80px" src="https://i-wordpress.ir/woodland/noorkala/wp-content/uploads/2022/07/part.jpg" alt="product->title">
                </a>
                <a class="swiper-slide" href="#">
                    <img style="max-height: 80px; max-width: 80px" src="https://i-wordpress.ir/woodland/noorkala/wp-content/uploads/2022/07/part.jpg" alt="product->title">
                </a>
                <a class="swiper-slide" href="#">
                    <img style="max-height: 80px; max-width: 80px" src="https://i-wordpress.ir/woodland/noorkala/wp-content/uploads/2022/07/part.jpg" alt="product->title">
                </a>

            </div>
            <!-- If we need pagination -->
            {{--            <div class="swiper-pagination"></div>--}}

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>
<section id="footer" class="container-fluid d-flex justify-content-center" style="background-color: #EFEFEF">
    <footer class="container" style="padding: 2.5rem 0;">
        <div class="certificate col-md-12 text-center" style="padding-bottom: 2.5rem;">
            <a class="d-inline-block" href="#">
                <div style="padding: 1rem; border-radius: 10px; border: 1px solid #e0e0e6; background-color: #fff">
                    <img src="{{ asset('website/img/certificate/rezi.png') }}" alt="" style="height: 70px; width: 70px;">
                </div>
            </a>
            <a class="d-inline-block" href="#">
                <div style="padding: 1rem; border-radius: 10px; border: 1px solid #e0e0e6; background-color: #fff">
                    <img src="{{ asset('website/img/certificate/logo.png') }}" alt="" style="height: 70px; width: 70px;">
                </div>
            </a>
            <a class="d-inline-block" href="#">
                <div style="padding: 1rem; border-radius: 10px; border: 1px solid #e0e0e6; background-color: #fff">
                    <img src="{{ asset('website/img/certificate/kasbokar.png') }}" alt="" style="height: 70px; width: 70px;">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="text-center mb-3">
                    <img src="{{ asset('website/img/logo-hoordad-company.png') }}" alt="لو گو فروشگاه اینترنتی هورداد" style="max-width: 100px; max-height: 100px;">
                </div>
                <div>
                    <p class="m-0">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آیندد داشت که تمام و دشواری.
                    </p>
                </div>
            </div>
            <div class="col-md-6 row">
                <div class="col d-flex justify-content-center">
                    <div>
                        <p href="#" class="d-block mb-3">اطلاعات بیشتر</p>
                        <ul class="" style="list-style-type: disc; color: #777;">
                            <li><a href="#">سوالات متداول</a></li>
                            <li><a href="#">ارتباط با ما</a></li>
                            <li><a href="#">فروشگاه ما</a></li>
                            <li><a href="#">هزینه ارسال</a></li>
                            <li><a href="#">کاتالوگ ها</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div>
                        <p href="#" class="d-block mb-3">دسته بندی محصولات</p>
                        <ul style="list-style-type: disc; color: #777;">
                            <li><a href="#">سوالات متداول</a></li>
                            <li><a href="#">ارتباط با ما</a></li>
                            <li><a href="#">فیوز</a></li>
                            <li><a href="#">خازن</a></li>
                            <li><a href="#">سیم</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="social-media col-md-3 row">
                <div class="col-12 mb-3">
                    <p>
                        راه های ارتباطی
                    </p>
                    <a href="#">قزوین، چهارراه نظام وفا</a>
                    <a href="#">hoordadco.info@gmial.com</a>
                </div>
                <div class="col-12 mb-3">
                    <p class="col-12">صفحات مجازی ما</p>

                    <a href="">
                        <img src="{{ asset('website/img/social-media-logo/instagram.png') }}" style="max-width: 25px; max-height: 25px;" alt="instagram">
                    </a>
                    <a href="">
                        <img src="{{ asset('website/img/social-media-logo/telegram.svg') }}" alt="telegram">
                    </a>
                    <a href="">
                        <img src="{{ asset('website/img/social-media-logo/whatsup.png') }}" style="max-width: 25px; max-height: 25px;" alt="whatsup">
                    </a>
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 252 252" width="36px" height="36px">
                            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                <path d="M0,252v-252h252v252z" fill="none"/>
                                <g id="Layer_1" fill="#ffffff">
                                    <g>
                                        <path d="M114.87525,32.214l-22.65375,-5.1135c-18.48,-4.17375 -36.83925,7.4235 -41.013,25.9035l-5.16075,22.84275c14.868,-23.60925 39.8265,-40.20975 68.8275,-43.63275z"/>
                                        <path d="M32.214,137.12475l-5.1135,22.65375c-4.17375,18.48 7.4235,36.83925 25.9035,41.013l22.84275,5.16075c-23.60925,-14.87325 -40.20975,-39.8265 -43.63275,-68.8275z"/>
                                        <path d="M198.996,51.2085l-22.84275,-5.16075c23.60925,14.868 40.20975,39.8265 43.63275,68.82225l5.1135,-22.65375c4.17375,-18.4695 -7.4235,-36.834 -25.9035,-41.00775z"/>
                                        <path d="M137.12475,219.786l22.65375,5.1135c18.48,4.17375 36.83925,-7.4235 41.013,-25.9035l5.16075,-22.84275c-14.868,23.60925 -39.8265,40.20975 -68.8275,43.63275z"/>
                                    </g>
                                    <path d="M126,42c-46.39425,0 -84,37.60575 -84,84c0,46.39425 37.60575,84 84,84c46.39425,0 84,-37.60575 84,-84c0,-46.39425 -37.60575,-84 -84,-84zM105,68.25c11.59725,0 21,9.40275 21,21c0,11.59725 -9.40275,21 -21,21c-11.59725,0 -21,-9.40275 -21,-21c0,-11.59725 9.40275,-21 21,-21zM89.25,168c-11.59725,0 -21,-9.40275 -21,-21c0,-11.59725 9.40275,-21 21,-21c11.59725,0 21,9.40275 21,21c0,11.59725 -9.40275,21 -21,21zM115.5,126c0,-5.80125 4.69875,-10.5 10.5,-10.5c5.80125,0 10.5,4.69875 10.5,10.5c0,5.80125 -4.69875,10.5 -10.5,10.5c-5.80125,0 -10.5,-4.69875 -10.5,-10.5zM147,183.75c-11.59725,0 -21,-9.40275 -21,-21c0,-11.59725 9.40275,-21 21,-21c11.59725,0 21,9.40275 21,21c0,11.59725 -9.40275,21 -21,21zM162.75,126c-11.59725,0 -21,-9.40275 -21,-21c0,-11.59725 9.40275,-21 21,-21c11.59725,0 21,9.40275 21,21c0,11.59725 -9.40275,21 -21,21z"/>
                                </g>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</section>
<section id="copy-right" class="container-fluid text-center py-2">
    <p class="m-0">
        <a href="#" class="f-14">تمامی حقوق برای فروشگاه اینترنتی هورداد محفوظ است. 1402</a>
        <br/>
        <a class="f-14" href="https://github.com/alisalehi0930" target="_blank">Designed by Ali Salehi</a>
    </p>
</section>

<script src="{{ asset('website/js/swiper.js') }}"></script>
<script src="{{ asset('bootstrap/bootstrap.bundle.min.js') }}"></script>


<script>

    new Swiper('.bestSellers-swiper', {

        // Optional parameters
        direction: 'horizontal',
        loop: true,

        autoplay: {
            delay: 10000,
            disableOnInteraction: false,
        },

        breakpoints: {
            // when window width is >= 480px
            480: {
                slidesPerView: 2,
            },
            // when window width is >= 640px
            640: {
                slidesPerView: 5,
            }
        },

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

    new Swiper('.brands-swiper', {

        // Optional parameters
        direction: 'horizontal',

        loop: true,
        centeredSlides: true,

        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        breakpoints: {
            // when window width is >= 480px
            480: {
                slidesPerView: 3,
                // spaceBetween: 60
            },
            // when window width is >= 640px
            640: {
                slidesPerView: 5,
                spaceBetween: 30,
            }
        },        // If we need pagination
        // pagination: {
        //     el: '.swiper-pagination',
        //     clickable: true,
        // },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

</script>

</body>
</html>


{{--<div id="categories" class="">--}}
{{--    <ul class="">--}}
{{--        <li><a>انواع خازن و تجهیزات بانک خازنی</a>--}}
{{--            <ul class="sub-menu sub-menu-height">--}}
{{--                <li><a href="">خازن سه فاز فشار ضعیف</a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li><a href="">خازن سه فاز فراکو آلمان FRAKO</a></li>--}}
{{--                        <li><a href="">خازن سه فاز لیفاسا اسپانیا LIFASA</a></li>--}}
{{--                        <li><a href="">خازن سه فاز صبا زیمنس SABA-SIEMENS</a></li>--}}
{{--                        <li><a href="">خازن سه فاز روغنی هیدرا (HYDRA ( AEG</a></li>--}}
{{--                        <li><a href="">خازن سه فاز PKC</a></li>--}}
{{--                        <li><a href="">خازن سه فاز اشنایدر SCHNEIDER</a></li>--}}
{{--                        <li><a href="">خازن سه فاز فراکوه FARAKOH</a></li>--}}
{{--                        <li><a href="">خازن سه فاز اسپانیایی RTR</a></li>--}}
{{--                        <li><a href="">خازن سه فاز فشار ضعیف ایسکرا ISKRA</a></li>--}}
{{--                        <li><a href="">خازن سه فاز اپکاس آلمان EPCOS</a></li>--}}
{{--                        <li><a href="">خازن سه فاز پارس شریم PARS.GH</a></li>--}}
{{--                        <li><a href="">سایر برندهای خازن سه فاز</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li><a href="">رگولاتور بانک خازنی</a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li><a href="">رگولاتور بلوک آلمان BELUK</a></li>--}}
{{--                        <li><a href="">رگولاتور فراکو آلمان FRAKO</a></li>--}}
{{--                        <li><a href="">رگولاتور زایلوگ ایران ZILUG</a></li>--}}
{{--                        <li><a href="">رگولاتور لیفاسا اسپانیا LIFASA</a></li>--}}
{{--                        <li><a href="">رگولاتور RTR اسپانیا</a></li>--}}
{{--                        <li><a href="">رگولاتور خازنی PKC</a></li>--}}
{{--                        <li><a href="">رگولاتور ایسکرا ISKRA</a></li>--}}
{{--                        <li><a href="">رگولاتور سیرکاتور اسپانیا CIRCUTOR</a></li>--}}
{{--                        <li><a href="">رگولاتور لواتو ایتالیا LOVATO</a></li>--}}
{{--                        <li><a href="">رگولاتور خازنی اشنایدر SCHNEIDER</a></li>--}}
{{--                        <li><a href="">رگولاتور پارس مت PARS-MAT</a></li>--}}
{{--                        <li><a href="">سایر برند های رگولاتور بانک خازنی</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li><a href="">کنتاکتور خازنی</a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li><a href="">کنتاکتور خازنی PKC</a></li>--}}
{{--                        <li><a href="">کنتاکتور خازنی R K (RADE CONCAR)</a></li>--}}
{{--                        <li><a href="">کنتاکتور خازنی اشنایدر SCHNEIDER</a></li>--}}
{{--                        <li><a href="">کنتاکتور خازنی ABN</a></li>--}}
{{--                        <li><a href="">سایر برندهای کنتاکتور خازنی</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li><a href="">فیلتر هارمونیک خازنی</a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li><a href="">فیلتر هارمونیک فراکوه FARAKOH</a></li>--}}
{{--                        <li><a href="">فیلتر هارمونیك لیفاسا LIFASA</a></li>--}}
{{--                        <li><a href="">فیلتر هارمونیك PKC</a></li>--}}
{{--                        <li><a href="">فیلتر هارمونیک پارس PARS GH. SHREEM</a></li>--}}
{{--                        <li><a href="">فیلتر هارمونیک فراپیام BERK</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="">کنتاکتور هارمونیکی</a></li>--}}
{{--                <li><a>بانک خازنی اتوماتیک آماده نصب</a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li><a href="">سه فاز، آماده نصب، برحسب کیلووار</a></li>--}}
{{--                        <li><a href="">تکفاز/ سه فاز، آماده نصب، برحسب آمپر</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li><a href="">بدنه، مونتاژ و خدمات تابلو بانک خازنی</a></li>--}}
{{--                <li><a href="">تجهیزات بانک خازنی فشار متوسط</a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li><a href="">خازن فشار متوسط MV</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li><a href="">کنتاکتور خازنی تایریستوری ( سریع )</a></li>--}}
{{--                <li><a href="">رگولاتور تایریستوری ( سریع )</a></li>--}}
{{--                <li><a href="">خازن تکفاز فشار ضعیف</a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li><a href="">خازن تکفاز فشار ضعیف ایتالیا DUCATI</a></li>--}}
{{--                        <li><a href="">خازن تکفاز فشار ضعیف PKC</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li><a href="">خازن برای سایر کاربردها</a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li><a href="">خازن UPS</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li class=""><a>انواع کنتاکتور، بیمتال و رله</a>--}}
{{--            <ul class="sub-menu sub-menu-height">--}}
{{--                <li><a href="">کنتاکتور</a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li><a href="">کنتاکتور اشنایدر SCHNEIDER</a></li>--}}
{{--                        <li><a href="">کنتاکتور هیمل Himel</a></li>--}}
{{--                        <li><a href="">کنتاکتور هیوندای HYUNDAI</a></li>--}}
{{--                        <li><a href="">کنتاکتور ال اس LS</a></li>--}}
{{--                        <li><a href="">کنتاکتور چینت CHINT</a></li>--}}
{{--                        <li><a href="">کنتاکتور لواتو ایتالیا LOVATO</a></li>--}}
{{--                        <li><a href="">کنتاکتور RK</a></li>--}}
{{--                        <li><a href="">کنتاکتور پارس فانال P&amp;F</a></li>--}}
{{--                        <li><a href="">کنتاکتور ETI</a></li>--}}
{{--                        <li><a href="">کنتاکتور زیمنس SIEMENS</a></li>--}}
{{--                        <li><a href="">سایر برندهای کنتاکتور</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li><a href="">کنتاکت کمکی کنتاکتورها</a></li>--}}
{{--                <li><a href="">کنتاکتور خازنی</a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li><a href="">کنتاکتور خازنی LIFASA</a></li>--}}
{{--                        <li><a href="">کنتاکتور خازنی PKC</a></li>--}}
{{--                        <li><a href="">کنتاکتور خازنی R K (RADE CONCAR)</a></li>--}}
{{--                        <li><a href="">کنتاکتور خازنی اشنایدر SCHNEIDER</a></li>--}}
{{--                        <li><a href="">کنتاکتور خازنی HYUNDAI</a></li>--}}
{{--                        <li><a href="">کنتاکتور خازنی LS</a></li>--}}
{{--                        <li><a href="">سایر برندهای کنتاکتور خازنی</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="">کنتاکتور هارمونیکی</a></li>--}}
{{--                <li><a href="">رله مینیاتوری ( شیشه ای )</a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li><a href="">رله شیشه ای فیندر finder</a></li>--}}
{{--                        <li><a href="">رله شیشه ای پارس فانال P &amp; F</a></li>--}}
{{--                        <li><a href="">رله شیشه ای آلمانی weidmuller</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li><a href="">بیمتال ( رله حرارتی کنتاکتور)</a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li><a href="">بیمتال اشنایدر SCHNEIDER</a></li>--}}
{{--                        <li><a href="">بیمتال HIMEL</a></li>--}}
{{--                        <li><a href="">بیمتال هیوندای HYUNDAI</a></li>--}}
{{--                        <li><a href="">بیمتال LS</a></li>--}}
{{--                        <li><a href="">بیمتال CHINT</a></li>--}}
{{--                        <li><a href="">بیمتال پارس فانال P&amp;F</a></li>--}}
{{--                        <li><a href="">بیمتال زیمنس SIEMENS</a></li>--}}
{{--                        <li><a href="">بیمتال LOVATO</a></li>--}}
{{--                        <li><a href="">سایر برندهای بیمتال</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li><a href="">کنتاکتور تکفاز ( ماژولار – بی صدا )</a></li>--}}
{{--                <li><a href="">کنتاکتور تایریستوری</a></li>--}}
{{--                <li><a href="">رله SSR و EMR</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li><a>انواع کلید اتوماتیک / دستی و فیوز</a>--}}
{{--            <ul class="sub-menu sub-menu-height">--}}
{{--                <li><a href="">کلید اتوماتیک (کمپکت MCCB )</a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li><a href="">کلید اتوماتیک (MCCB) هیوندای HYUNDAI</a></li>--}}
{{--                        <li><a href="">کلید اتوماتیک (MCCB) هیمل Himel</a></li>--}}
{{--                        <li><a href="">کلید اتوماتیک (MCCB) اشنایدر SCHNEIDER</a></li>--}}
{{--                        <li><a href="">کلید اتوماتیک (MCCB) ال اس LS</a></li>--}}
{{--                        <li><a href="">کلید اتوماتیک (MCCB) چینت CHINT</a></li>--}}
{{--                        <li><a href="">کلید اتوماتیک (MCCB) برند ABB</a></li>--}}
{{--                        <li><a href="">کلید اتوماتیک (MCCB) پارس فانال P&amp;F</a></li>--}}
{{--                        <li><a href="">کلید اتوماتیک (MCCB) یونلک UNELEC</a></li>--}}
{{--                        <li><a href="">کلید اتوماتیک (MCCB) زیمنس SIEMENS</a></li>--}}
{{--                        <li><a href="">سایر برندهای کلید اتوماتیک (MCCB)</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li><a href="">تجهیزات جانبی کلید اتوماتیک (MCCB)</a></li>--}}
{{--                <li><a href="">کلید هوایی (ACB)</a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li><a href="">کلید هوایی (ACB) هیوندای HYUNDAI</a></li>--}}
{{--                        <li><a href="">کلید هوایی (ACB) ال اس LS</a></li>--}}
{{--                        <li><a href="">کلید هوایی CHINT</a></li>--}}
{{--                        <li><a href="">سایر برندهای کلید هوایی</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li><a href="">کلید حرارتی ( محافظ موتور ) MPCB</a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li><a href="">کلید حرارتی اشنایدر SCHNEIDER</a></li>--}}
{{--                        <li><a href="">کلید حرارتی هیوندای HYUNDAI</a></li>--}}
{{--                        <li><a href="">کلید حرارتی LS</a></li>--}}
{{--                        <li><a href="">کلید حرارتی Himel</a></li>--}}
{{--                        <li><a href="">سایر برندهای کلید حرارتی</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li><a href="">تجهیزات جانبی کلیدحرارتی</a></li>--}}
{{--                <li><a href="">کلید مینیاتوری (MCB)</a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li><a href="">کلید مینیاتوری اشنایدر SCHNEIDER</a></li>--}}
{{--                        <li><a href="">کلید مینیاتوری LS</a></li>--}}
{{--                        <li><a href="">کلید مینیاتوری هیوندای HYUNDAI</a></li>--}}
{{--                        <li><a href="">کلید مینیاتوری پارس فانال P &amp; F</a></li>--}}
{{--                        <li><a href="">سایر برندهای کلید مینیاتوری</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li><a href="">کلیدهای فشار متوسط</a></li>--}}
{{--                <li><a href="">کلید فیوز گردان و چنج آور قدرت</a></li>--}}
{{--                <li><a href="">کلید گردان سلکتوری</a></li>--}}
{{--                <li><a href="">کلید محافظ جان (RCCB و RCBO )</a></li>--}}
{{--                <li><a href="">کلید فیوز</a></li>--}}
{{--                <li><a href="">فیوز و پایه فیوز</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li><a href="">انواع درایو (اینورتر) و سافت استارتر</a>--}}
{{--            <ul class="sub-menu sub-menu-height">--}}
{{--                <li><a href="">درایو ( اینورتر)</a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li><a href="">درایو ( اینورتر ) کنترل دور موتور LS</a></li>--}}
{{--                        <li><a href="">درایو (اینورتر) کنترل دور موتور اینوت INVT</a></li>--}}
{{--                        <li><a href="">درایو (اینورتر) کنترل دور موتور پنتاکسPentax</a></li>--}}
{{--                        <li><a href="">درایو (اینورتر) کنترل دور موتور SIEMENS</a></li>--}}
{{--                        <li><a href="">درایو ( اینورتر ) کنترل دور موتور دلتا DELTA</a></li>--}}
{{--                        <li><a href="">درایو (اینورتر) کنترل دور موتور سانیو SANYU</a></li>--}}
{{--                        <li><a href="">درایو (اینورتر) کنترل دور موتور مگا درایو MEGA</a></li>--}}
{{--                        <li><a href="">درایو (اینورتر) کنترل دور موتور YASKAWA</a></li>--}}
{{--                        <li><a href="">درایو (اینورتر) کنترل دور موتور ABB</a></li>--}}
{{--                        <li><a href="">درایو (اینورتر) کنترل دور پرتوصنعت parto sanat</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li><a href="">سافت استارتر ( راه انداز نرم )</a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li><a href="">سافت استارتر هیمل HIMEL</a></li>--}}
{{--                        <li><a href="">سافت استارتر زیمنس SIEMENS</a></li>--}}
{{--                        <li><a href="">سافت استارتر SANYU سانیو</a></li>--}}
{{--                        <li><a href="">سافت استارتر سانترنو Santerno</a></li>--}}
{{--                        <li><a href="">سافت استارتر ABB</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li><a href="">انواع سیم و کابل</a>--}}
{{--            <ul class="sub-menu sub-menu-height">--}}
{{--                <li><a href="">سیم و کابل افشان</a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li><a href="">سیم و کابل افشان افشار نژاد خراسان</a></li>--}}
{{--                        <li><a href="">سیم و کابل افشان مغان</a></li>--}}
{{--                        <li><a href="">سیم و کابل افشان البرز الکتریک نور(لینکو)</a></li>--}}
{{--                        <li><a href="">سیم و کابل افشان نور زنجان</a></li>--}}
{{--                        <li><a href="">سیم و کابل افشان البرز پژواک</a></li>--}}
{{--                        <li><a href="">سیم و کابل افشان کسری (برند متوسط)</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li><a href="">سیم افشان ارت</a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li><a href="">سیم افشان ارت البرز الکتریک نور(لینکو)</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li><a href="">کابل افشان شیلددار</a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li><a href="">کابل افشان شیلددار افشار نژاد خراسان</a></li>--}}
{{--                        <li><a href="">کابل افشان شیلددار البرز الکتریک نور(لینکو)</a></li>--}}
{{--                        <li><a href="">کابل افشان شیلددار نور زنجان</a></li>--}}
{{--                        <li><a href="">کابل افشان شیلددار کسری (برند متوسط)</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li><a href="">سیم و کابل مفتولی</a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li><a href="">کابل مفتولی (زمینی) افشار نژاد خراسان</a></li>--}}
{{--                        <li><a href="">کابل زمینی مغان</a></li>--}}
{{--                        <li><a href="">سیم و کابل مفتولی البرز الکتریک نور(لینکو)</a></li>--}}
{{--                        <li><a href="">سیم و کابل مفتولی (زمینی) نور زنجان</a></li>--}}
{{--                        <li><a href="">سیم و کابل مفتولی البرز پژواک</a></li>--}}
{{--                        <li><a href="">کابل مفتولی (زمینی) کسری (برند متوسط)</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li><a href="">کابل مخابراتی</a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li><a href="">کابل مخابراتی افشار نژاد خراسان</a></li>--}}
{{--                        <li><a href="">کابل مخابراتی البرز الکتریک نور(لینکو)</a></li>--}}
{{--                        <li><a href="">کابل مخابراتی نور زنجان</a></li>--}}
{{--                        <li><a href="">کابل مخابراتی کسری (برند متوسط)</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li><a href="">سایر انواع کابل</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li><a href="">سایر تجهیزات برق صنعتی</a>--}}
{{--            <ul class="sub-menu sub-menu-height">--}}
{{--                <li><a href="">کنترل فاز</a></li>--}}
{{--                <li><a href="">سرج ارستر</a></li>--}}
{{--                <li><a href="">تایمر و ساعت فرمان</a></li>--}}
{{--                <li><a href="">منبع تغذیه</a></li>--}}
{{--                <li><a href="">فن تابلویی</a></li>--}}
{{--                <li><a href="">ترموستات تابلویی</a></li>--}}
{{--                <li><a href="">چراغ سیگنال</a></li>--}}
{{--                <li><a href="">ترمینال ریلی</a></li>--}}
{{--                <li><a href="">ترمینال جریانی</a></li>--}}
{{--                <li><a href="">ترمینال فیوز خور</a></li>--}}
{{--                <li><a href="">رطوبت سنج تابلویی</a></li>--}}
{{--                <li><a href="">هیتر تابلویی</a></li>--}}
{{--                <li><a href="">ترنسدیوسر</a></li>--}}
{{--                <li><a href="">کنترل بار</a></li>--}}
{{--                <li><a href="">محافظ مرکزی برق</a></li>--}}
{{--                <li><a href="">میکروسوئیچ</a></li>--}}
{{--                <li><a href="">فلوتر</a></li>--}}
{{--                <li><a href="">ترانس جریان</a></li>--}}
{{--                <li><a href="">نمایشگرها (دیجیتال و عقربه ای)</a></li>--}}
{{--                <li><a href="">کلید فشاری فرمان ( شستی)</a></li>--}}
{{--                <li><a href="">کلید گردان سلکتوری</a></li>--}}
{{--                <li><a href="">ریل تابلویی</a></li>--}}
{{--                <li><a href="">داکت تابلویی</a></li>--}}
{{--                <li><a href="">گلند تابلویی</a></li>--}}
{{--                <li><a href="">روشنایی تابلویی</a></li>--}}
{{--                <li><a href="">فتوسل و ساعت نجومی</a></li>--}}
{{--                <li><a href="">رله ارت فالت و ترانس کوربالانس</a></li>--}}
{{--                <li><a href="">سوکت تابلویی</a></li>--}}
{{--                <li><a href="">رله های حفاظتی فشار متوسط</a></li>--}}
{{--                <li><a href="">پنجره آلارم</a></li>--}}
{{--                <li><a href="">مقره اتکایی تابلویی</a></li>--}}
{{--                <li><a href="">پریز تابلویی</a></li>--}}
{{--                <li><a href="">رله ضربه‌ای</a></li>--}}
{{--                <li><a href="">شمش مسی</a></li>--}}
{{--                <li><a href="">شینه ارت و نول</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li><a href="">انواع تابلو برق صنعتی</a>--}}
{{--            <ul class="sub-menu sub-menu-height">--}}
{{--                <li><a href="">بدنه تابلو برق ( بدون لوازم و مونتاژ )</a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li><a href="">بدنه تابلو فلزی ایستاده</a></li>--}}
{{--                        <li><a href="">بدنه تابلو فلزی دیواری</a></li>--}}
{{--                        <li><a href="">بدنه تابلو پلاستیکی ABS</a></li>--}}
{{--                        <li><a href="">بدنه تابلو کامپوزیتی</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li><a href="">خدمات مونتاژ و سیم کشی تابلو برق</a></li>--}}
{{--                <li><a href="">تابلو فشارمتوسط (با لوازم و مونتاژ کامل)</a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li><a href="">تابلو فشار متوسط سنتی</a></li>--}}
{{--                        <li><a href="">تابلو فشار متوسط کشویی</a></li>--}}
{{--                        <li><a href="">تابلو فشار متوسط کمپکت</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li><a href="">تابلو فشارضعیف (با لوازم و مونتاژ کامل)</a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li><a href="">تابلو کنتوری ( تابلو برق خانگی)</a></li>--}}
{{--                        <li><a href="">تابلو دیماندی</a></li>--}}
{{--                        <li><a href="">تابلو شالتر</a></li>--}}
{{--                        <li><a href="">تابلو ترمینال</a></li>--}}
{{--                        <li><a href="">تابلو قدرت و توزیع</a></li>--}}
{{--                        <li><a href="">تابلو مرکز کنترل موتور (MCC)</a></li>--}}
{{--                        <li><a href="">تابلو چنج اور ( دیزل ژنراتور)</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--    </ul>--}}
{{--</div>--}}


{{-------------------------------}}


{{--<div id="navbar-brands" class="">--}}
{{--    <ul>--}}
{{--        <li><a href="">همه برندها ( اینجا کلیک کنید )</a></li>--}}
{{--        <li><a>برندهای پرکاربرد کلید و کنتاکتور</a>--}}
{{--            <ul class="sub-menu sub-menu-height">--}}
{{--                <li><a href="">SCHNEIDER</a></li>--}}
{{--                <li><a href="">HYUNDAI</a></li>--}}
{{--                <li><a href="">LS</a></li>--}}
{{--                <li><a href="">HIMEL</a></li>--}}
{{--                <li><a href="">LOVATO</a></li>--}}
{{--                <li><a href="">CHINT</a></li>--}}
{{--                <li><a href="">EFEN</a></li>--}}
{{--                <li><a href="">FINDER</a></li>--}}
{{--                <li><a href="">PARS FANAL</a></li>--}}
{{--                <li><a href="">UNELEC</a></li>--}}
{{--                <li><a href="">SIEMENS</a></li>--}}
{{--                <li><a href="">ABB</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li><a>برندهای پرکاربرد خازن</a>--}}
{{--            <ul class="sub-menu sub-menu-height">--}}
{{--                <li><a href="">FRAKO</a></li>--}}
{{--                <li><a href="">EPCOS</a></li>--}}
{{--                <li><a href="">LIFASA</a></li>--}}
{{--                <li><a href="">PKC</a></li>--}}
{{--                <li><a href="">SABA-SIEMENS</a></li>--}}
{{--                <li><a href="">CIRCUTOR</a></li>--}}
{{--                <li><a href="">DUCATI</a></li>--}}
{{--                <li><a href="">ISKRA</a></li>--}}
{{--                <li><a href="">RTR</a></li>--}}
{{--                <li><a href="">FARAKOH</a></li>--}}
{{--                <li><a href="">SHREEM</a></li>--}}
{{--                <li><a href="">HYDRA</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li><a>برندهای پرکاربرد رگولاتور خازنی</a>--}}
{{--            <ul class="sub-menu sub-menu-height">--}}
{{--                <li><a href="">PKC</a></li>--}}
{{--                <li><a href="">FRAKO</a></li>--}}
{{--                <li><a href="">BELUK</a></li>--}}
{{--                <li><a href="">LIFASA</a></li>--}}
{{--                <li><a href="">ISKRA</a></li>--}}
{{--                <li><a href="">LOVATO</a></li>--}}
{{--                <li><a href="">ZILUG</a></li>--}}
{{--                <li><a href="">CIRCUTOR</a></li>--}}
{{--                <li><a href="">RTR</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li><a>برندهای پرکاربرد اینورتر و سافت استارتر</a>--}}
{{--            <ul class="sub-menu sub-menu-height">--}}
{{--                <li><a href="">INVT</a></li>--}}
{{--                <li><a href="">LS</a></li>--}}
{{--                <li><a href="">PENTAX</a></li>--}}
{{--                <li><a href="">PARTO SANAT</a></li>--}}
{{--                <li><a href="">SANTERNO</a></li>--}}
{{--                <li><a href="">MEGA DRIVE</a></li>--}}
{{--                <li><a href="">YASKAWA</a></li>--}}
{{--                <li><a href="">SIEMENS</a></li>--}}
{{--                <li><a href="">DELTA</a></li>--}}
{{--                <li><a href="">ABB</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li><a>برندهای پرکاربرد سیم و کابل</a>--}}
{{--            <ul class="sub-menu sub-menu-height">--}}
{{--                <li><a href="">افشار نژاد خراسان</a></li>--}}
{{--                <li><a href="">البرز الکتریک نور (لینکو)</a></li>--}}
{{--                <li><a href="">نور زنجان</a></li>--}}
{{--                <li><a href="">مغان (MOGHAN)</a></li>--}}
{{--                <li><a href="">البرز پژواک</a></li>--}}
{{--                <li><a href="">کسری (KASRA) (برند متوسط)</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--    </ul>--}}
{{--</div>--}}










