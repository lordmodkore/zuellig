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
        <div class="row mt-2 mb-2">
            <div class="col-lg-4"></div>

            @if(have_rows('faq_items'))
                <div class="col-lg-8 col-md-8 col-sm-12 mb-3">
                    @while(have_rows('faq_items'))
                        @php the_row() @endphp
                            <h5 class="text-blue fw-bold">{!! get_sub_field('question') !!}</h5>
                            {!! get_sub_field('answer') !!}
                    @endwhile
                </div>
            @endif
        </div>
    </div>
</section>

