<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/reset.css"/>
    <link rel="stylesheet" href="/css/mystyle.css"/> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <title>AT</title>
</head>
<body>
    <div style="position: fixed; top: 0; bottom: 0; right: 0; left: 0; display: flex; justify-content: center; align-items: center;" id="loader">
        <div class="custom-loader"></div>
    </div>
    <div id="body" style="display: none;">
        <div class="bg-color" style="background-color: #f8f7f1;">
            <header class="container">
                <div class="row d-flex justify-content-between align-items-center flex-wrap">
                    <div class="col-3 d-flex justify-content-start text-sm-start "><img src="/assets/photo-output.PNG" alt="logo" style="width: 70px;"></div>
                    <nav class="col-6 d-none d-lg-flex align-items-center justify-content-lg-center justify-content-sm-end ">
                        <a href="/index.html">HOME</a>
                        <a href="/services.html" class="btn-servs btn btn-outline-info border-bottom-0 border-top-0 btn-rounded" >SERVICES</a>
                        <a href="/contact">CONTACT</a>
                        <a href="#!">ABOUT</a>
                    </nav>
                        <button class="col-1 btn d-lg-none" style="background-color: #e76c75;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="bi bi-three-dots"></i></button>
                        <div class="offcanvas offcanvas-end d-lg-none" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                          <div class="offcanvas-header">
                            <h4 class="offcanvas-title" id="offcanvasRightLabel">menu</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                          </div>
                          <div class="offcanvas-body">
                            <a class="text-decoration-none d-block" href=/index.html>home</a>
                            <a class="text-decoration-none d-block" href=/services.html>services</a>
                            <a class="text-decoration-none d-block" href=/contact>contact</a>
                            <a class="text-decoration-none d-block" href=/about.html>about</a>
                          </div>
                        </div>
                    <div class="col justify-content-lg-end align-items-center flex-wrap d-none d-lg-flex" style="font-size: 10px; text-align: center;">
                    09115388720<a href="tel:+989115388729" class="ms-3 icon-header text-center"><i class="bi bi-telephone-outbound text-center"></i></a>
                    </div>
                </div>
            </header>
            <section class="container my-3">
                <div class="row d-flex justify-content-between">
                    <div class="col-12 col-lg-6 d-flex justify-content-center justify-content-lg-start ">
                        <h1 class="fw-bolder">HEY THERE,<br>i'm amir</h1>
                    </div>
                    <div class="col-12 col-lg-6 d-flex justify-content-center justify-content-lg-end">
                        <p class="align-self-center">i design beautifully simple<br>thing,and i love what i do</p>
                    </div>
                </div>
                <div class="row d-flex align-items-center">
                    <div class="col-12 justify-content-center col-lg-4 justify-content-lg-start d-flex ">
                        <p class="y-exp align-self-center">2</p>
                        <p class="align-self-center">YEARS<br>EXPERIENCE</p>
                    </div>
                    <div class="col-12 justify-content-center col-lg-4 justify-content-lg-center d-flex order-2 order-lg-0" style="text-align: center;">
                        <img src="/assets/amir.PNG" alt="" style="width: 75%; display: inline-block;">
                    </div>
                    <div class="col-12 justify-content-center col-lg-4 justify-content-lg-end d-flex order-1 order-lg-0">
                        <p>PROFESSIONAL<br>UI/UX DESIGNER</p>
                    </div>
                </div>
            </section>
        </div>
            <section class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-12 col-lg-4 order-1 order-lg-0">
                        <div class="row ">
                            <div class="col-12 box shadow p-3 mb-2 bg-white rounded d-flex align-items-center animate__animated animate__fadeInLeft animate__delay-1s">
                                <i class="bi bi-pc-display-horizontal bg-success bg-opacity-75 text-white rounded-5 py-1 px-2"></i>
                                <p class="ms-3 fw-bolder " style="font-size: 12px;">website design</p>
                            </div>
                            <div class="col-12 box shadow p-3 mb-2 bg-white rounded d-flex align-items-center animate__animated animate__fadeInLeft animate__delay-2s">
                                <i class="bi bi-phone bg-warning text-white rounded-5 py-1 px-2"></i>
                                <P class="ms-3 fw-bolder" style="font-size: 12px;">mobile app design</P>
                            </div>
                            <div class="col-12 box shadow p-3 mb-2 bg-white rounded d-flex align-items-center animate__animated animate__fadeInLeft animate__delay-3s">
                                <i class="bi bi-code-slash bg-danger bg-opacity-75 text-white rounded-5 py-1 px-2"></i>
                                <p class="ms-3 fw-bolder " style="font-size:12px">full stack developer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12  col-lg-7  animate__animated animate__fadeInLeft text-lg-end text-center ">
                        <h2 class="question" style="font-size: 50px;">what do i help?</h2>
                        <p>i will help you with finging a solution and solve<br>your problems,we use process design to create digital<br>
                          products.besids that also help their business.</p>
                    </div>
                </div>
            </section>
            <div class="bg-color ">
                <section class=" container">
                    <div class="row pt-5">
                        <div class="col-12 col-lg-8 text-center text-lg-start">
                            <p class="fw-bolder " style="font-size: 35px;">let's make something <br>amazing toghtether</p>
                        </div>
                        <div class="col-12 col-lg-4 text-center text-lg-end">
                            <p class="fw-bolder " style="font-size: 20px;">information</p>
                            <p style="font-size: 10px;">taleqani-1 gonbad,golestan,ir</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mt-3 text-center text-lg-start">
                                <h3>start by <a href="/services.html" style="color:#e76c75 ;">saying hi</a></h3>
                        <div class="col">
                            <a href=""></a>
                            <a href=""></a>
                            <a href=""></a>
                            <a href=""></a>
                        </div>
                    </div>
                </section>
            </div>
            <div class="footer container">
                <div class="row border-top">
                    <div class="col pt-3">
                        <h5 style="font-family:caros italic; font-size: 14px;" class="d-inline">AT dev</h5>
                        <span class="border-start ms-3"></span>
                        <span class="ms-3" style="font-size: 12px;">all rights reserved</span>
                    </div>
                </div>
            </div>
    </div>
    <script>
        setTimeout(() => {
            document.getElementById('loader').style.display='none'
        }, 1000);
        setTimeout(() => {
            document.getElementById('body').style.display='block'
        }, 1000);
    </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>