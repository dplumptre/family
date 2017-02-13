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
                <h2 class="h3 font-w600 push-30-t push">Introduction</h2>

                <div id="faq1" class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq1" href="#faq1_q1">Welcome
                                    to our service!</a>
                            </h3>
                        </div>
                        <div id="faq1_q1" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad
                                    feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante
                                    convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan
                                    adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames
                                    aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo
                                    turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis
                                    congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi
                                    viverra luctus id leo dictum lorem, inceptos nibh orci.</p>

                                <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad
                                    feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante
                                    convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan
                                    adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames
                                    aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo
                                    turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis
                                    congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi
                                    viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq1" href="#faq1_q2">Who
                                    are we?</a>
                            </h3>
                        </div>
                        <div id="faq1_q2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad
                                    feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante
                                    convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan
                                    adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames
                                    aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo
                                    turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis
                                    congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi
                                    viverra luctus id leo dictum lorem, inceptos nibh orci.</p>

                                <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad
                                    feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante
                                    convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan
                                    adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames
                                    aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo
                                    turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis
                                    congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi
                                    viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq1" href="#faq1_q3">What
                                    are our values?</a>
                            </h3>
                        </div>
                        <div id="faq1_q3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad
                                    feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante
                                    convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan
                                    adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames
                                    aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo
                                    turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis
                                    congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi
                                    viverra luctus id leo dictum lorem, inceptos nibh orci.</p>

                                <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad
                                    feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante
                                    convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan
                                    adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames
                                    aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo
                                    turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis
                                    congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi
                                    viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Introduction -->

                <!-- Functionality -->
                <h2 class="h3 font-w600 push-50-t push">Functionality</h2>

                <div id="faq2" class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq2" href="#faq2_q1">What
                                    are the key features?</a>
                            </h3>
                        </div>
                        <div id="faq2_q1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad
                                    feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante
                                    convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan
                                    adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames
                                    aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo
                                    turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis
                                    congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi
                                    viverra luctus id leo dictum lorem, inceptos nibh orci.</p>

                                <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad
                                    feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante
                                    convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan
                                    adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames
                                    aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo
                                    turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis
                                    congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi
                                    viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq2" href="#faq2_q2">Does
                                    your App support mobile devices?</a>
                            </h3>
                        </div>
                        <div id="faq2_q2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad
                                    feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante
                                    convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan
                                    adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames
                                    aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo
                                    turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis
                                    congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi
                                    viverra luctus id leo dictum lorem, inceptos nibh orci.</p>

                                <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad
                                    feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante
                                    convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan
                                    adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames
                                    aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo
                                    turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis
                                    congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi
                                    viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq2" href="#faq2_q3">Why
                                    should I choose your service?</a>
                            </h3>
                        </div>
                        <div id="faq2_q3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad
                                    feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante
                                    convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan
                                    adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames
                                    aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo
                                    turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis
                                    congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi
                                    viverra luctus id leo dictum lorem, inceptos nibh orci.</p>

                                <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad
                                    feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante
                                    convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan
                                    adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames
                                    aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo
                                    turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis
                                    congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi
                                    viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq2" href="#faq2_q4">Is
                                    my data secure?</a>
                            </h3>
                        </div>
                        <div id="faq2_q4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad
                                    feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante
                                    convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan
                                    adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames
                                    aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo
                                    turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis
                                    congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi
                                    viverra luctus id leo dictum lorem, inceptos nibh orci.</p>

                                <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad
                                    feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante
                                    convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan
                                    adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames
                                    aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo
                                    turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis
                                    congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi
                                    viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Functionality -->

                <!-- Payments -->
                <h2 class="h3 font-w600 push-50-t push">Payments</h2>

                <div id="faq3" class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq3" href="#faq3_q1">Is
                                    there any free plan?</a>
                            </h3>
                        </div>
                        <div id="faq3_q1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad
                                    feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante
                                    convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan
                                    adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames
                                    aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo
                                    turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis
                                    congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi
                                    viverra luctus id leo dictum lorem, inceptos nibh orci.</p>

                                <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad
                                    feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante
                                    convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan
                                    adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames
                                    aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo
                                    turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis
                                    congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi
                                    viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq3" href="#faq3_q2">What
                                    are the available payment options?</a>
                            </h3>
                        </div>
                        <div id="faq3_q2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad
                                    feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante
                                    convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan
                                    adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames
                                    aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo
                                    turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis
                                    congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi
                                    viverra luctus id leo dictum lorem, inceptos nibh orci.</p>

                                <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad
                                    feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante
                                    convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan
                                    adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames
                                    aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo
                                    turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis
                                    congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi
                                    viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq3" href="#faq3_q3">Can
                                    multiple people use my account?</a>
                            </h3>
                        </div>
                        <div id="faq3_q3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad
                                    feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante
                                    convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan
                                    adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames
                                    aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo
                                    turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis
                                    congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi
                                    viverra luctus id leo dictum lorem, inceptos nibh orci.</p>

                                <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad
                                    feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante
                                    convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan
                                    adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames
                                    aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo
                                    turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis
                                    congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi
                                    viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Payments -->

                <!-- Contact Form -->
                <h2 class="h3 font-w600 push-50-t push">Do you have any further questions?</h2>

                <div id="faq4" class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq4"
                                   href="#faq4_q1"><i class="fa fa-envelope-o"></i> Contact Us</a>
                            </h3>
                        </div>
                        <div id="faq4_q1" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <form class="form-horizontal push-10-t" action="base_pages_faq.html" method="post"
                                      onsubmit="return false;">
                                    <div class="form-group">
                                        <div class="col-xs-6 col-sm-4">
                                            <div class="form-material form-material-primary">
                                                <input class="form-control" type="text" id="faq-contact-firstname"
                                                       name="faq-contact-firstname"
                                                       placeholder="Enter your firstname..">
                                                <label for="faq-contact-firstname">Firstname</label>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-4">
                                            <div class="form-material form-material-primary">
                                                <input class="form-control" type="text" id="faq-contact-lastname"
                                                       name="faq-contact-lastname" placeholder="Enter your lastname..">
                                                <label for="faq-contact-lastname">Lastname</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-8">
                                            <div class="form-material form-material-primary input-group">
                                                <input class="form-control" type="email" id="faq-contact-email"
                                                       name="faq-contact-email" placeholder="Enter your email..">
                                                <label for="faq-contact-email">Email</label>
                                                <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <div class="form-material form-material-primary">
                                                <select class="form-control" id="faq-contact-subject"
                                                        name="faq-contact-subject" size="1">
                                                    <option value="1">Support</option>
                                                    <option value="2">Billing</option>
                                                    <option value="3">Management</option>
                                                    <option value="4">Feature Request</option>
                                                </select>
                                                <label for="faq-contact-subject">Where?</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <div class="form-material form-material-primary">
                                                <textarea class="form-control" id="faq-contact-msg"
                                                          name="faq-contact-msg" rows="7"
                                                          placeholder="Enter your message.."></textarea>
                                                <label for="faq-contact-msg">Message</label>
                                            </div>
                                            <div class="help-block text-right">Feel free to use common tags: &lt;blockquote&gt;,
                                                &lt;strong&gt;, &lt;em&gt;</div>
                                        </div>
                                    </div>
                                    <div class="form-group remove-margin-b">
                                        <div class="col-xs-12">
                                            <button class="btn btn-sm btn-primary" type="submit"><i
                                                        class="fa fa-send push-5-r"></i> Send Message
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Contact Form -->
            </div>
        </div>

    </main>

@endsection