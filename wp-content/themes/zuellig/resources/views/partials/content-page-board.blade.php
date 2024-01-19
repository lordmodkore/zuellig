<section class="default_section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="fw-bold">{!! get_field('page_alternative_title') !!}</h1>
            </div>
        </div>
        <div class="row mt-5">
            @if(have_rows('management'))
                @while(have_rows('management'))
                    @php the_row() @endphp
                    <div class="col-md-3 col-sm-6 mb-3">
                        <div class="image-container">
                            <img src="{!! get_sub_field('image') !!}" class="img-fluid" />
                        </div>
                        <div class="board-info mt-4 text-center">
                            <h3 class="fw-bold">{!! get_sub_field('name') !!}</h3>
                            <p class="block_paragraph_small-title mb-2">{!! get_sub_field('position') !!}</p>
                            <p class="featured_description">{!! get_sub_field('short_description') !!}</p>
                        </div>
                    </div>
                @endwhile
            @endif
        </div>
        <div class="row">
            <div class="col-12">
                <h1 class="fw-bold">{!! $title !!}</h1>
            </div>
        </div>
        <div class="row mt-5">
            @if(have_rows('board_of_trustees'))
                @while(have_rows('board_of_trustees'))
                    @php the_row() @endphp
                    <div class="col-md-3 col-sm-6 mb-3">
                        <div class="image-container">
                            <img src="{!! get_sub_field('image') !!}" class="img-fluid" />
                        </div>
                        <div class="board-info mt-4 text-center">
                            <h3 class="fw-bold">{!! get_sub_field('name') !!}</h3>
                            <p class="block_paragraph_small-title mb-2">{!! get_sub_field('position') !!}</p>
                            <p class="featured_description">{!! get_sub_field('short_description') !!}</p>
                        </div>
                    </div>
                @endwhile
            @endif
        </div>
    </div>
</section>

