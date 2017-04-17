@extends('layouts.layout')

@section('content')

    <main id="main-container">
        <!-- Hero Content -->
        <div class="bg-primary-dark">
            <section class="content content-full content-boxed">
                <!-- Section Content -->
                <div class="push-100-t push-50 text-center">
                    <h1 class="h2 text-white push-10 visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">Contact Us.</h1>
                    <h2 class="h5 text-white-op visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">Have an awesome idea for a project? Get in touch today.</h2>
                </div>
                <!-- END Section Content -->
            </section>
        </div>
        <!-- END Hero Content -->

        <!-- Contact Form -->
        <div class="bg-white">
            <section class="content content-boxed">
                <!-- Section Content -->
                <div class="row items-push push-50-t push-30">
                    <div class="col-md-6 col-md-offset-3">
                        
  @include('layouts.partials.errors')
                        <form class="form-horizontal" action="{{ route('post.contact')}}" method="post"> {{csrf_field()}}
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <div class="form-material form-material-primary">
                                        <input class="form-control" type="text" id="frontend-contact-firstname" name="name" placeholder="Enter your firstname..">
                                        <label for="frontend-contact-firstname">Full Name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <div class="form-material form-material-primary">
                                        <input class="form-control" type="email" id="frontend-contact-email" name="email" placeholder="Enter your email..">
                                        <label for="frontend-contact-email">Email</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <div class="form-material form-material-primary">
                                        <select class="form-control" id="frontend-contact-subject" name="subject" size="1">
                                            <option value="Support">Support</option>
                                            <option value="Billing">Billing</option>
                                            <option value="Management">Management</option>
                                        </select>
                                        <label for="frontend-contact-subject">Where?</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <div class="form-material form-material-primary">
                                        <textarea class="form-control" id="frontend-contact-msg" name="message" rows="7" placeholder="Enter your message.."></textarea>
                                        <label for="frontend-contact-msg">Message</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                                    <button class="btn btn-block btn-primary" type="submit"><i class="fa fa-send pull-left"></i> Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Section Content -->
            </section>
        </div>
        <!-- END Contact Form -->

        <!-- Google Maps, initialized in js/pages/frontend_contact.js, for more examples you can check out https://hpneo.github.io/gmaps/ -->
        <div class="bg-white" id="js-map-contact"></div>
    </main>

@endsection