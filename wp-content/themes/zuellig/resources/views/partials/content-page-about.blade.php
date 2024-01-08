
<section class="default_section-padding">
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-lg-8 col-md-8 col-sm-12 mb-3">
                <div class="div_heading-title text-left mb-3">
                    <h1 class="fw-bold">{!! $title !!}</h1>
                </div>
            </div>
        </div>
        <div class="row">
            {!! the_content() !!}
        </div>
        @if(have_rows('about_us_content'))
            @while(have_rows('about_us_content'))
                @php the_row(); @endphp
                    <!-- Vision and Mission-->
                @if( get_row_layout() == 'vision_and_mission' )
                    <div class="container">
                        <div class="row py-3">
                            <div class="col-4"></div>
                            <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                                <div>
                                    <div class="div_heading-title">
                                        <h1 class="fw-bold">Vision</h1>
                                    </div>
                                    <p>{!! get_sub_field('vision_content_text') !!}</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                                <div>
                                    <div class="div_heading-title">
                                        <h1 class="fw-bold">Mission</h1>
                                    </div>
                                    <p>{!! get_sub_field('mission_content_text') !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                @endif
                <!-- End Vision and Mission -->
            @endwhile
        @endif
    </div>
</section>
@if(have_rows('about_us_content'))
    @while(have_rows('about_us_content'))
        @php the_row(); @endphp
        <!-- Our Goals-->
        @if( get_row_layout() == 'our_goals' )
            <section class="default_section-padding section_goals-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="div_heading-title text-center mb-3">
                                <h1 class="fw-bold">Our Goals</h1>
                            </div>
                        </div>
                    </div>
                    @if(have_rows('our_goals'))
                        <div class="row">
                            @while(have_rows('our_goals'))
                                @php the_row(); @endphp
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div>
                                        <div class="div_heading-title text-left">
                                            <h1 class="fw-bold">{!! get_sub_field('content_header_title') !!}</h1>
                                        </div>
                                        <p>{!! get_sub_field('content_text') !!}</p>
                                    </div>
                                </div>
                            @endwhile
                        </div>
                    @endif
                </div>
            </section>
        @endif
        <!-- End Our Goals -->
        <!-- Our History-->
        @if(get_row_layout() == 'our_history')
            <section class="default_section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="div_heading-title text-center mb-3">
                                <h1 class="fw-bold">Our History</h1>
                            </div>
                        </div>
                    </div>
                    @if(have_rows('our_history'))
                        @while(have_rows('our_history'))
                            @php the_row(); @endphp
                            <div class="row ">
                                <div class="col-4"></div>
                                <div class="col-lg-8 col-md-8 col-sm-12">
                                    <div class="border_inner-color border-top border-bottom div_padding">
                                        <p>{!! get_sub_field('year') !!}</p>
                                        <div>
                                            <h1 class="fw-bold">{!! get_sub_field('history_header_title') !!}</h1>
                                        </div>
                                        {!! get_sub_field('history_content_area') !!}
                                    </div>
                                </div>
                            </div>
                        @endwhile
                    @endif
                </div>
            </section>
        @endif
        <!-- End Our History-->
        <!-- Featured Stories -->
        @if(get_row_layout() == 'featured_stories')
                <section class="default_section-padding">
                    <div class="container">
                        @if(get_sub_field('featured_stories_section_header'))
                            <div class="row mb-3 pb-3">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="text-center description_extra-padding">
                                        <div class="div_heading-title">
                                            <h1 class="fw-bold">{!! get_sub_field('featured_stories_section_header') !!}</h1>
                                        </div>
                                        <p class="block_paragraph-description">{!! get_sub_field('featured_stories_section_subtitle') !!}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if(have_rows('featured_content'))
                            @php
                                $featuredPostCounter = 1;
                            @endphp

                            @while(have_rows('featured_content'))
                                @php
                                    the_row();
                                @endphp

                                @if($featuredPostCounter == 1)
                                    <div class="row py-3 mb-5 align-items-center">
                                        <div class="post-featured-img col-lg-7 col-md-12 col-sm-12">
                                            <img src="{!! get_sub_field('featured_content_image') !!}" class="img-fluid w-100" />
                                        </div>
                                        <div class="col-lg-5 col-md-12 col-sm-12">
                                            <div class="block_featured block_featured-bg text-white">
                                                <p class="card_small-text fw-bold text-white">{!! get_sub_field('featured_content_sub_title') !!}</p>
                                                <h1 class="featured_title fw-bold">{!! get_sub_field('featured_title') !!}</h1>
                                                <p class="featured_description">
                                                    {!! get_sub_field('featured_content_text') !!}
                                                </p>
                                                @if(get_sub_field('featured_content_button_url'))
                                                    <a href="{!! get_sub_field('featured_content_button_url') !!}" class="d-none text-decoration-none text-white link_default-value">
                                                        <div class="d-fle">
                                                            <p>{!! get_sub_field('featured_button_text') !!}<span>&nbsp<i class="fa fa-chevron-right"></i></span></p>
                                                        </div>
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    @if($featuredPostCounter % 2 == 0)
                                </div>
                                <div class="row py-3">
                          @endif
                        <div class="col-lg-6 col-md-6 col-sm-12 d-flex align-items-stretch">
                            <div class="card border-0">
                                <img src="{!! get_sub_field('featured_content_image') !!}" class="card-img-top img-fluid h-100" />
                                <div class="card-body">
                                    <p class="card_small-text fw-bold">{!! get_sub_field('featured_content_sub_title') !!}</p>
                                    <h5 class="card-title fw-bold">{!! get_sub_field('featured_title') !!}</h5>
                                    <p class="card-text">   {!! get_sub_field('featured_content_text') !!}</p>
                                    @if(get_sub_field('featured_content_button_url'))
                                        <a href="{!! get_sub_field('featured_content_button_url') !!}" class="d-none text-decoration-none text-white link_default-value">
                                            <div class="d-fle">
                                                <p>{!! get_sub_field('featured_button_text') !!}<span>&nbsp<i class="fa fa-chevron-right"></i></span></p>
                                            </div>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                          @endif
                            @php  $featuredPostCounter++; @endphp
                        @endwhile
                        </div> <!-- Close the last row -->
                       @endif
                    </div><!--container-->
                </section>
        @endif
        <!-- End Featured Stories -->
    @endwhile
@endif

