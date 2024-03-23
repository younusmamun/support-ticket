@extends('frontend.layouts.master')

@section('content')
          <!-- Page Header Start -->
          <div class="container-fluid page-header py-5" data-wow-delay="0.1s">
            <div class="container text-center py-5">
                <h1 class="text-white">POS Portfilio Details</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('portfolio') }}">Portfolio</a></li>
                        <li class="breadcrumb-item active" aria-current="page">POS</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->

   <!-- Page Header End -->
   <div class="container top-bottom mb-5 wow fadeIn" data-wow-delay="0.1s">
    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-Summary-tab" data-bs-toggle="pill" data-bs-target="#pills-Summary" type="button" role="tab" aria-controls="pills-Summary" aria-selected="true">Summary</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-details-tab" data-bs-toggle="pill" data-bs-target="#pills-details" type="button" role="tab" aria-controls="pills-details" aria-selected="false">Details</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-video-tab" data-bs-toggle="pill" data-bs-target="#pills-video" type="button" role="tab" aria-controls="pills-video" aria-selected="false">Video</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-link-tab" data-bs-toggle="pill" data-bs-target="#pills-link" type="button" role="tab" aria-controls="pills-link" aria-selected="false">Link</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-aeon-tab" data-bs-toggle="pill" data-bs-target="#pills-aeon" type="button" role="tab" aria-controls="pills-aeon" aria-selected="false">Review</button>
        </li>

    </ul>
    <hr>
    <div class="tab-content slide-section" id="pills-tabContent">
        <div class="tab-pane fade slide-section show active" id="pills-Summary" role="tabpanel" aria-labelledby="pills-Summary-tab" tabindex="0">
            <p>A point of sale (POS) is a place where a customer executes the payment for goods or services and where sales taxes may become payable. A POS transaction may occur in person or online, with receipts generated either in print or electronically. Cloud-based POS systems are becoming increasingly popular among merchants.</p>
        </div>
        <div class="tab-pane fade slide-section" id="pills-details" role="tabpanel" aria-labelledby="pills-details-tab" tabindex="0">
            <p>
                Feature of POS System
                <br><br>
                Sales Processing: support for the quick and accurate input of product information via barcode scanners.
                <br><br>
                Inventory Management: Inventory levels should be constantly monitored to avoid stockouts and overstock problems.
                <br><br>
                Payment Processing: Accept a range of payment options, such as cash, debit/credit cards, mobile payments, and digital wallets.
                <br><br>
                Customer Management: Creating and managing customer profiles with purchase history.
                <br><br>
                E-commerce Integration: inventory management and seamless connection with e-commerce systems for online sales
            </p>

        </div>
        <div class="tab-pane fade slide-section" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab" tabindex="0">
           <p class="text-head">
                Video
           </p>
           <center>
            <video class="video" controls>
                <source src="mov_bbb.mp4" type="video/mp4">
                <source src="mov_bbb.ogg" type="video/ogg">
                Your browser does not support HTML video.
            </video>
            <p>
                Video courtesy of
                <a href="https://www.dreamdiver.nl/" target="_blank">Dream Diver</a>.

            </p>
            </center>

            </div>
            <div class="tab-pane fade slide-section" id="pills-link" role="tabpanel" aria-labelledby="pills-link-tab"
                tabindex="0">
                <center>
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="card">
                            <img src="{{ asset('frontend/img/pos.png') }}" class="card-img-top" alt="pos">
                            <div class="card-body">
                              <h5 class="card-title">POS</h5>
                              <p class="card-text">A point of sale (POS) is a place where a customer executes the payment for goods or services and where sales taxes may become payable.</p>
                              <a href="https://dreamdiver.nl/test2/login" target="_blank" class="custom-btn">Pos Link</a>
                            </div>
                          </div>
                    </div>
                </center>
            </div>
            <div class="tab-pane fade" id="pills-aeon" role="tabpanel" aria-labelledby="pills-aeon-tab" tabindex="0">
                <div class="container-xxl py-5">
                    <div class="container">
                        <div class="row g-5">
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="slide-form">
                                    <p class="text-head text-center">Text Review</p>
                                    <p class="about-us">Your POS System project offers a seamless and efficient solution for businesses. Its intuitive interface simplifies transactions while advanced features enhance productivity. The system's reliability ensures uninterrupted service, instilling confidence in operations. Highly recommend for businesses seeking a streamlined and dependable POS solution.</p>
                                              </p>
                                    <br>

                                </div>
                            </div>
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class=" slide-benar">
                                    <p class="text-head text-center">Video Review</p>
                                    <div class="small-container align-items-center ">
                                        <div class="custom-card">
                                            <div id="carouselExampleControls" class="carousel slide"
                                                data-bs-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active" style="text-align: center;">
                                                        <h5 class="custom-title">Dream Diver!</h5>
                                                        <p>We provide all kind of software solutions to your projects.</p>
                                                    </div>
                                                    <div class="carousel-item" style="text-align: center;">
                                                        <h5 class="custom-title">Web Development</h5>
                                                        <p>Web Design & Development, Android Applications</p>
                                                    </div>
                                                    <div class="carousel-item" style="text-align: center;">
                                                        <h5 class="custom-title">SEO</h5>
                                                        <p>Search Engine Optimization, contact us for details</p>
                                                    </div>
                                                </div>
                                                <button class="carousel-control-prev" type="button"
                                                    data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button"
                                                    data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </button>
                                            </div>
                                            <a href="contact.html">
                                                <button class="custom-btn">Contact Us</button>
                                            </a>
                                        </div>
                                        <div class="custom-blob"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
