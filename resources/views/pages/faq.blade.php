@extends('layouts.layout')


@section('content')

    <main id="main-container">

        <div class="bg-primary-dark">
            <section class="content content-full content-boxed overflow-hidden">
                <!-- Section Content -->
                <div class="push-100-t push-50 text-center">
                    <h1 class="h2 text-white push-10 animated fadeInDown" data-toggle="appear"
                        data-class="animated fadeInDown">FAQs.</h1>

                    <h2 class="h5 text-white-op animated fadeInDown" data-toggle="appear"
                        data-class="animated fadeInDown">Frequently Asked Questions</h2>
                </div>
                <!-- END Section Content -->
            </section>
        </div>

        <div class="bg-white">
            {{--<div class="block-content block-content-narrow">--}}
            <div class="content content-boxed">
                <!-- Introduction -->
                

                <div id="faq1" class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq1" href="#faq1_q1"> WHAT IS BUFWEALTH</a>
                            </h3>
                        </div>
                        <div id="faq1_q1" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <p>BUFWEALTH was created to promote the greatest good, with a particular emphasis on helping man. Its connect people through donation to provide financial assistance to each other and everybody is helped</p>

                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq1" href="#faq1_q2"> WHO IS ELIGIBLE TO JOIN BUFWEALTH </a>
                            </h3>
                        </div>
                        <div id="faq1_q2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>There is no age and gender barrier in joining BUFWEALTH. Equal benefits and donations are assigned to all and sundry and there are no set up fee :.</p>

                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq1" href="#faq1_q3">HOW LONG DOES IT TAKE TO EARN YOUR PROCEEDS</a>
                            </h3>
                        </div>
                        <div id="faq1_q3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>This depends upon the flow at which members joins the platform. You can join and get paid same day. It is typically on or before 12 days.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Introduction -->


                <div id="faq2" class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq2" href="#faq2_q1">HOW CAN I PARTICIPATE</a>
                            </h3>
                        </div>
                        <div id="faq2_q1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>It is suggested that, you just pick a package after registeration,a sponsor will be automatically paired with you

It is more convenient to attract new members through the Internet (Facebook, Twitter etc.). A person coming to the system through your referral link will be automatically redirected to bufwealth.com register page. After registering the system assigned a sponsor

In the event that you were not invited by anyone, then you can join by going to http://www.bufwealth.com and click on the Join Now. You will be system will automatically assign you to a sponsor.</p>

                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq2" href="#faq2_q2">
                                    HOW DO I RECEIVE MY PAYMENT</a>
                            </h3>
                        </div>
                        <div id="faq2_q2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Once you have donated and have been fully activated by your sponsor, then you are liable to receive your payment from 2 donors either through bank payment, transfer or by cash.</p>


                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq2" href="#faq2_q3">IF THE PERSON ASSIGNED TO PAY ME DIDN'T PAY, WHAT NEXT </a>
                            </h3>
                        </div>
                        <div id="faq2_q3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>As long as you have been matched before the system will remove the referral and assign another immediately after the referral exceed his commitment time which is usually 24 Hours.
.</p>

                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq2" href="#faq2_q4">I SENT DONATION, BUT MY REFERRER HAS NOT CONFIRMED </a>
                            </h3>
                        </div>
                        <div id="faq2_q4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>The system is timed, which the recipient of the donation will be conscious to approve the donation. If the timer reaches “0” and the donation has not been confirmed, you will need to contact support with proof of donation, i.e., a scanned copy of the teller or the Transaction details made through the payment processor. The admin will handle the rest from there..</p>

                            </div>
                        </div>
                    </div>
                </div>


                <div id="faq3" class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq3" href="#faq3_q1">HOW MANY TIMES AM I ALLOWED TO MAKE A DONATION.</a>
                            </h3>
                        </div>
                        <div id="faq3_q1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>The number is unlimited. You can pick as many times you wish and get assistance too. Each time you join and get complete assistance, the system will automatically EXIT you fom the package but retains your account..</p>

                            </div>
                        </div>
                    </div>


                </div>
                <!-- END Payments -->

  
                <!-- END Contact Form -->
            </div>
        </div>

    </main>

@endsection