@extends('layouts.main')

@section('main')

<section id="faq-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="common-banner-text wow zoomIn text-center" data-wow-duration="2s">
                    <div class="common-heading">
                        <h1>FAQs</h1>
                    </div>
                    <div class="commom-sub-heading">
                        <h6>
                            <a href="index.html">Home</a>
                            <span>/</span>
                            <a href="#!">FAQs</a>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="faq-main">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="faq-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="faq-section">
                        <h3>Payment</h3>
                        <div class="faq-list" >
                            <div class="faq-detail">
                                <div class="faq-title" role="tab" id="heading1">
                                    <a href="#collapse1" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="true" aria-controls="collapse1">
                                        <h6>Are there any extra fees that i will have to pay on top of the listed price? <i class="more-less fas fa-chevron-circle-down"></i></h6>
                                    </a>
                                </div>
                                <div class="collapse" id="collapse1" role="tabpanel" aria-labelledby="heading1">
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores aspernatur modi nam voluptas consectetur quis voluptatibus iure perspiciatis ipsam, corporis nobis vel exercitationem eum necessitatibus repellendus in itaque sed laboriosam.</p>
                                </div>
                            </div>
                            <div class="faq-detail">
                                <div class="faq-title" role="tab" id="heading2">
                                    <a href="#collapse2" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="true" aria-controls="collapse2"><h6>Should I print a receipt to show the tour guide? <i class="more-less fas fa-chevron-circle-down"></i></h6></a>
                                </div>
                                <div class="collapse" id="collapse2" role="tabpanel" aria-labelledby="heading2">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae obcaecati corrupti quidem rem suscipit pariatur quasi, nulla esse deleniti consequatur hic ipsum tempore nihil delectus architecto quo iste est modi!</p>
                                </div>
                            </div>
                            <div class="faq-detail">
                                <div class="faq-title" role="tab" id="heading3">
                                    <a href="#collapse3" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="true" aria-controls="collapse3">
                                        <h6>How much does it cost to do a private tour? <i class="more-less fas fa-chevron-circle-down"></i></h6>
                                    </a>
                                </div>
                                <div class="collapse" id="collapse3" role="tabpanel" aria-labelledby="heading3">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta ratione commodi exercitationem quas, dolor rem amet optio numquam repellendus voluptates, quam placeat est, autem magni sint! Doloribus cum minima laudantium.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq-section">
                        <h3>Preparation</h3>
                        <div class="faq-list" >
                            <div class="faq-detail">
                                <div class="faq-title" role="tab" id="heading4">
                                    <a href="#collapse4" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="true" aria-controls="collapse4">
                                        <h6>What should I wear? <i class="more-less fas fa-chevron-circle-down"></i></h6>
                                    </a>
                                </div>
                                <div class="collapse" id="collapse4" role="tabpanel" aria-labelledby="heading4">
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores aspernatur modi nam voluptas consectetur quis voluptatibus iure perspiciatis ipsam, corporis nobis vel exercitationem eum necessitatibus repellendus in itaque sed laboriosam.</p>
                                </div>
                            </div>
                            <div class="faq-detail">
                                <div class="faq-title" role="tab" id="heading5">
                                    <a href="#collapse5" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="true" aria-controls="collapse5">
                                        <h6>What do I need to bring? <i class="more-less fas fa-chevron-circle-down"></i></h6>
                                    </a>
                                </div>
                                <div class="collapse" id="collapse5" role="tabpanel" aria-labelledby="heading5">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae obcaecati corrupti quidem rem suscipit pariatur quasi, nulla esse deleniti consequatur hic ipsum tempore nihil delectus architecto quo iste est modi!</p>
                                </div>
                            </div>
                            <div class="faq-detail">
                                <div class="faq-title" role="tab" id="heading6">
                                    <a href="#collapse6" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="true" aria-controls="collapse6">
                                        <h6>How do I list multiple rooms? <i class="more-less fas fa-chevron-circle-down"></i></h6>
                                    </a>
                                </div>
                                <div class="collapse" id="collapse6" role="tabpanel" aria-labelledby="heading6">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta ratione commodi exercitationem quas, dolor rem amet optio numquam repellendus voluptates, quam placeat est, autem magni sint! Doloribus cum minima laudantium.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq-section">
                        <h3>Reservation</h3>
                        <div class="faq-list" >
                            <div class="faq-detail">
                                <div class="faq-title" role="tab" id="heading7">
                                    <a href="#collapse7" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="true" aria-controls="collapse7">
                                        <h6>What is your refund policy? <i class="more-less fas fa-chevron-circle-down"></i></h6>
                                    </a>
                                </div>
                                <div class="collapse" id="collapse7" role="tabpanel" aria-labelledby="heading7">
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores aspernatur modi nam voluptas consectetur quis voluptatibus iure perspiciatis ipsam, corporis nobis vel exercitationem eum necessitatibus repellendus in itaque sed laboriosam.</p>
                                </div>
                            </div>
                            <div class="faq-detail">
                                <div class="faq-title" role="tab" id="heading8">
                                    <a href="#collapse8" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="true" aria-controls="collapse8">
                                        <h6>Do I offer 30 days money back guarantee? <i class="more-less fas fa-chevron-circle-down"></i></h6>
                                    </a>
                                </div>
                                <div class="collapse" id="collapse8" role="tabpanel" aria-labelledby="heading8">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae obcaecati corrupti quidem rem suscipit pariatur quasi, nulla esse deleniti consequatur hic ipsum tempore nihil delectus architecto quo iste est modi!</p>
                                </div>
                            </div>
                            <div class="faq-detail">
                                <div class="faq-title" role="tab" id="heading9">
                                    <a href="#collapse9" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="true" aria-controls="collapse9">
                                        <h6>Do I have to make reservation? <i class="more-less fas fa-chevron-circle-down"></i></h6>
                                    </a>
                                </div>
                                <div class="collapse" id="collapse9" role="tabpanel" aria-labelledby="heading9">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta ratione commodi exercitationem quas, dolor rem amet optio numquam repellendus voluptates, quam placeat est, autem magni sint! Doloribus cum minima laudantium.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="faq-catalog">
                    <h5>All</h5>
                    <h6><a href="">Payment</a></h6>
                    <h6><a href="">Reservation</a></h6>
                    <h6><a href="">Schedule</a></h6>
                    <h6><a href="">Money Bank Policy</a></h6>
                    <h6><a href="">Tour Plan</a></h6>
                    <h6><a href="">Booking Policy</a></h6>
                    <h6 class="lc"><a href="">Others</a></h6>
                </div>
            </div>
        </div>
    </div>
</section>

@stop