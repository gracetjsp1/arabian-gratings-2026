@extends('layouts.app')

@section('title', 'Contact Us | Arabian Gratings')
@section('meta_description', 'Contact Arabian Gratings for FRP, Steel and Stainless Steel industrial solutions')
@section('meta_keywords', 'contact arabian gratings, industrial gratings contact, fabrication inquiries')

@section('content')

<!-- ========================
   Page Title
=========================== -->
<section class="page-title page-title-layout7 bg-overlay bg-overlay-2 bg-parallax text-center">
    <div class="bg-img">
        <img src="{{ asset('assets/images/sliders/contacts.jpg') }}" alt="background">
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <h1 class="pagetitle__heading mb-0">Contact Us</h1>
            </div>
        </div>
    </div>
</section>

<!-- ==========================
    Contact Layout
=========================== -->
<section class="contact-layout1 pt-0 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-panel">

                    <!-- Contact Info -->
                    <div class="contact__panel-info">
                        <div class="contact__panel-info-top">

                            <div class="contact-info-box">
                                <h4 class="contact__info-box-title">Our Location</h4>
                                <h6 class="contact__info-box-title">Head Office – Jeddah</h6>
                                <ul class="contact__info-list list-unstyled">
                                    <li>
                                        <b>Masar Arabia First Trading Company</b><br>
                                        Othman Bin Afan Street, PO Box No. 16301<br>
                                        Jeddah 22234, Saudi Arabia
                                    </li>
                                    <li>
                                        <i class="icon-phone pr-2"></i>
                                        <a href="tel:+966126576896">+966 12 657 6896</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="contact-info-box">
                                <h6 class="contact__info-box-title">Branch – Dammam</h6>
                                <ul class="contact__info-list list-unstyled">
                                    <li>
                                        Petromin Business Center 4648<br>
                                        King Saud Bin Abdulaziz Rd,<br>
                                        An Nawras, Dammam 32214
                                    </li>
                                </ul>
                            </div>

                        </div>

                        <div class="contact__panel-info-bottom">
                            <h4 class="contact__panel-info-title">Emails</h4>
                            <ul class="list-unstyled">
                                <li class="text-white">
                                    Grating Inquiries:
                                    <a href="mailto:sales@arabiangratings.com">sales@arabiangratings.com</a>
                                </li>
                                <li class="text-white">
                                    Fabrication Inquiries:
                                    <a href="mailto:fabrication@arabiangratings.com">fabrication@arabiangratings.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <form method="POST" action="{{ route('contact.submit') }}" class="contact__panel-form">
                        @csrf

                        <div class="row">
                            <div class="col-12">
                                <h4 class="contact__panel-title">Get In Touch</h4>
                                <p class="contact__panel-desc mb-40">
                                    Complete control over products allows us to ensure our customers
                                    receive the best quality prices and service.
                                </p>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control"
                                           placeholder="Name" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control"
                                           placeholder="Email" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control"
                                           placeholder="Phone" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control"
                                           placeholder="Subject" required>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control"
                                              placeholder="Additional Details!" required></textarea>
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn__primary btn__block btn__lg">
                                    <span class="mx-2">Submit Request</span>
                                    <i class="icon-arrow-right mx-2"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection
