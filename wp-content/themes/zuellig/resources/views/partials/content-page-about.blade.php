
<section class="default_section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="div_heading-title text-center mb-3">
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
                                        <div class="div_heading-title text-center">
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
                                        <p>{!! get_sub_field('history_content_area') !!}</p>
                                    </div>
                                </div>
                            </div>
                        @endwhile
                    @endif
                </div>
            </section>
        @endif
        <!-- End Our History-->

    @endwhile
@endif

