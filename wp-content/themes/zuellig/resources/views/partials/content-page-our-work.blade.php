
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
    </div>
</section>
<section class="default_section-padding">
    <div class="container col-lg-10">
        @if(have_rows('programs'))
            <div class="row mb-3 pb-3">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="description_extra-padding p-0">
                        <div class="div_heading-title">
                            <h1 class="fw-bold">Programs</h1>
                        </div>
                    </div>
                </div>
            </div>
            @while(have_rows('programs'))
                @php the_row(); @endphp
                <div class="row py-3 mb-5 align-items-center">
                    <div class="post-featured-img col-lg-7 col-md-12 col-sm-12">
                       <img src="{!! get_sub_field('program_featured_image') !!}" class="img-fluid"/>
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12">
                        <div class="block_programs block_featured block_featured-bg text-white" style="background:{!! get_sub_field('bg_color') !!};border:none;">
                            <p class="block_paragraph_small-title mb-0 text-white">{!! get_sub_field('program_category_name') !!}</p>
                            <h1 class="featured_title fw-bold">{!! get_sub_field('program_heading_title') !!}</h1>
                            <p class="featured_description">
                                {!! get_sub_field('program_content_text') !!}
                            </p>
                            @if(get_sub_field('program_button_url'))
                                <a href=" {!! get_sub_field('program_button_url') !!}" class="text-decoration-none text-white link_default-value">
                                    <div class="d-flex">
                                        <p class="program_button_text">{!! get_sub_field('program_button_text') !!}<span>&nbsp
                                        <i class="fa fa-chevron-right"></i></span></p>
                                    </div>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            @endwhile
        @endif

    </div>
</section>



