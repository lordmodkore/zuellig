<!--Begin Laetest News Content  -->
@php
    $newsletterFormId = get_field('newsletter_form', 'option');
@endphp
<section class="default_section-padding section_news-bg">
    <div class="container">
        <div class="row py-5">
            <div class="col-xl-12 col-md-12 col-sm-12">
                <div class="text-center">
                    <h3 class="text-white fw-bold">Get the latest news, stories and announcements</h3>
                    <div class="news_input-text justify-content-xl-end justify-content-md-end">
                        {!! do_shortcode("[gravityform id={$newsletterFormId} title=false description=false ajax=true]") !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Laetest News Content  -->
<footer class="section-bg default_section-padding">
    <div class="container">
        <div class="row border-bottom py-3">
            <div class="col-xl-4 col-md-12 col-sm-6">
                <div class="pb-2 mb-3">
                    <img src="@asset('images/Group 93.png')" alt="footer_logo" class="img-fluid">
                </div>
                <div class="pe-5 me-5 footer_text-address">
                    <p class="pe-3">{!! get_field('contact_address','option') !!}</p>
                    <p>
                        <a href="mailto:{!! get_field('contact_email','option') !!}">{!! get_field('contact_email','option') !!}</a>
                    </p>
                    <p>
                        <a href="tel:{!! get_field('contact_phone','option') !!}">{!! get_field('contact_phone','option') !!}</a>
                    </p>
                </div>
                <div class="d-flex icons_list py-2">
                    @if( get_field('facebook','option'))
                        <div>
                            <a href="{!! get_field('facebook','option') !!}">
                                <img src="@asset('images/Property 1=Group 36.png')" alt="fb">
                            </a>
                        </div>
                    @endif
                    @if( get_field('instagram','option'))
                        <div>
                            <a href="{!! get_field('instagram','option') !!}">
                                <img src="@asset('images/Property 1=Group 35.png')" alt="ig">
                            </a>
                        </div>
                    @endif
                    @if( get_field('x','option'))
                        <div>
                            <a href="#">
                                <img src="@asset('images/Property 1=Group 34.png')" alt="twitter">
                            </a>
                        </div>
                    @endif
                    @if( get_field('youtube','option'))
                        <div>
                            <a href="#">
                                <img src="@asset('images/Property 1=Group 33.png')" alt="yt">
                            </a>
                        </div>
                    @endif
                    @if( get_field('linkedin','option'))
                        <div>
                            <a href="#">
                                <img src="@asset('images/Property 1=Group 37.png')" alt="linkedin">
                            </a>
                        </div>
                    @endif
                </div>

            </div>
            <div class="col-xl-8 col-md-12 col-sm-6">
                <div class="row">
                    <?php dynamic_sidebar('footer-widgets'); ?>
                </div>
            </div>
        </div>
        <div class="footer_copyright mt-3">
            <div class="flex-grow-1">
                <p class="footer_copyright-text">©2024 Zuellig Family Foundation. All Rights Reserved.</p>
            </div>
            <div class="justify-content-between">
                <a href="#" class="text-decoration-none footer_text_link-color px-2">Privacy Policy</a>
                <a href="#" class="text-decoration-none footer_text_link-color px-2">Cookie Policy</a>
                <a href="#" class="text-decoration-none footer_text_link-color px-2">Terms of Use</a>
            </div>
        </div>
    </div>
</footer>

