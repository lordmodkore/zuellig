@php
    $args = [
        'post_type'      => 'post', // Adjust if you're using a custom post type
        'posts_per_page' => 2,      // Number of posts to display
        'order'          => 'DESC',  // Order by descending publish date
        'orderby'        => 'date',  // Order by the publish date
    ];
	$latest_posts = new WP_Query($args);
@endphp
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
@if($latest_posts->have_posts())
    <section class="default_section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div>
                        <h1 class="fw-bold">Latest News</h1>
                    </div>
                </div>
            </div>
            <div class="row py-3">
                @while($latest_posts->have_posts())
                    @php $latest_posts->the_post() @endphp
                    <div class="col-lg-6 col-md-6 col-sm-12 d-flex align-items-stretch">
                        <div class="card border-0">
                            @if(has_post_thumbnail(get_the_ID()))
                                {!! get_the_post_thumbnail(get_the_ID() , 'medium', array( 'class' => 'card-img-top img-fluid h-100' ) ); !!}
                            @else
                                <img src="https://placehold.co/600x400" class="card-img-top img-fluid" alt="image-placeholder">
                            @endif
                            <div class="card-body">
                                @foreach(get_the_category(get_the_ID()) as $category)
                                    <p class="card_small-text fw-bold">{{ $category->name }}</p>
                                @endforeach
                                <h5 class="card-title fw-bold">{!! get_the_title() !!}</h5>
                                <p class="card-text">{!! wp_trim_words( get_post_field('post_content', get_the_ID()), 38 ); !!} </p>
                                <a href="{!! get_the_permalink(get_the_ID()) !!}" class="text-primary text-decoration-none link_default-value link_color">
                                    <p>READ MORE<span>&nbsp
                                        <i class="fa fa-chevron-right"></i></span></p>
                                </a>
                            </div>
                        </div>
                    </div>
                @endwhile
                @php wp_reset_postdata(); @endphp
            </div>
        </div>
    </section>
@endif
