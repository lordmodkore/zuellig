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
            <div class="col-5"></div>
            <div class="col-lg-7 col-md-8 col-sm-12 mb-3">
                <div>
                    {!! the_content() !!}
                </div>
            </div>
        </div>
        @if(have_rows('initiatives'))
            <div class="row">
                <div class="col-5"></div>
                <div class="col-lg-7 col-md-8 col-sm-12">
                    <div>
                        <p class="institute_small-title fw-bold">Key Initiatives:</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-5"></div>
                <div class="col-lg-7 col-md-8 col-sm-12 mb-3 border_inner-color py-3">
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-lg-9">
                            <div>
                                @while(have_rows('initiatives'))
                                    @php the_row() @endphp
                                    <h5 class="fw-bold">{!! get_sub_field('intitiative_header_title') !!}</h5>
                                    <p>{!! get_sub_field('intitiative_content_text') !!}</p>
                                @endwhile
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @if(get_field('call_to_action_text'))
            <div class="row">
                <div class="col-5"></div>
                <div class="col-lg-7 col-md-8 col-sm-12 mb-3">
                    <p>{!! get_field('call_to_action_text')  !!}</p>

                </div>
            </div>
        @endif
    </div>
</section>
<!--Begin Goals  -->
@if(get_field('featured_content_area'))
<section class="default_section-padding section_goals-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="fw-bold heading_content-text">{!! get_field('featured_content_area') !!}</h1>
                @if(get_field('featured_content_button_url'))
                    <div class="px-3 mt-5 pt-2 text-center">
                        <a href="{!! get_field('featured_content_button_url') !!}" class="button_default button_btnAboutUs  text-decoration-none" target="_blank">{!! get_field('featured_content_button_text') !!}</a>
                    </div>
                @endif

            </div>
        </div>
    </div>
</section>
@endif
<!--End Goals  -->

