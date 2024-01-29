<!--Begin Laetest News Content  -->
@php
    $newsletterFormId = get_field('newsletter_form', 'option');
@endphp
<section class="default_section-padding section_news-bg">
    <div class="container">
        <div class="row py-3">
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
<!--End Latest News Content  -->
<footer class="section-bg default_section-padding">
    <div class="container">
        <div class="row py-3 d-none d-md-block">
            <div class="col-12 col-md-12 col-sm-12 mt-4" >
                <div class="row">
                    <?php dynamic_sidebar('footer-widgets'); ?>
                </div>
            </div>
        </div>
        <div class="row mt-4 border-bottom">
            <div class="col-md-8">
                <div class="pb-2 mb-3">
                    <img src="@asset('images/Group 93.png')" alt="footer_logo" class="img-fluid">
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex mb-3 justify-content-lg-end justify-content-sm-center icons_list py-2">
                    @if( get_field('facebook','option'))
                        <div class="social-icon">
                            <a href="{!! get_field('facebook','option') !!}" target="_blank">
                                <img src="@asset('images/Property 1=Group 36.png')" alt="fb">
                            </a>
                        </div>
                    @endif
                    @if( get_field('instagram','option'))
                        <div class="social-icon">
                            <a href="{!! get_field('instagram','option') !!}" target="_blank">
                                <img src="@asset('images/Property 1=Group 35.png')" alt="ig">
                            </a>
                        </div>
                    @endif
                    @if( get_field('x','option'))
                        <div class="social-icon">
                            <a href="{!! get_field('x','option') !!}" target="_blank">
                                <img src="@asset('images/Property 1=Group 34.png')" alt="twitter">
                            </a>
                        </div>
                    @endif
                    @if( get_field('youtube','option'))
                        <div class="social-icon">
                            <a href="{!! get_field('youtube','option') !!}" target="_blank">
                                <img src="@asset('images/Property 1=Group 33.png')" alt="yt">
                            </a>
                        </div>
                    @endif
                    @if( get_field('linkedin','option'))
                        <div class="social-icon">
                            <a href="{!! get_field('linkedin','option') !!}" target="_blank">
                                <img src="@asset('images/Property 1=Group 37.png')" alt="linkedin">
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="footer_copyright mt-3">
            <div class="flex-grow-1">
                <p class="footer_copyright-text">&copy;{!! date('Y') !!} Zuellig Family Foundation. All Rights Reserved.</p>
            </div>
            <div class="justify-content-between">
                <a href="#" class="text-decoration-none footer_text_link-color px-2">Privacy Policy</a>
                <a href="#" class="text-decoration-none footer_text_link-color px-2">Cookie Policy</a>
                <a href="#" class="text-decoration-none footer_text_link-color px-2">Terms of Use</a>
            </div>
        </div>
    </div>
</footer>

<!-- Overlay -->
<div id="overlay"></div>

<!-- Pop-up container -->
<div id="popup-container" class="col-lg-6 col-10">
    <!-- Content inside the pop-up container -->
        <!-- Gravity Form shortcode -->
       {!! do_shortcode('[gravityform id="5" title="false" description="false" ajax="true"]') !!}
</div>
