@php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
        'post_type'      => 'career',    // Your custom post type
        'post_status'    => 'publish',   // Fetch only published posts
        'posts_per_page' => 4,           // Number of posts per page
        'paged'          => $paged,
    );
	$query = new WP_Query($args);
@endphp

<section class="default_section-padding">
    <div class="container">
        @if(get_field('contact_details'))
            <div class="row contact-details-container mb-5">
                <div class="col-12">
                    <h1 class="fw-bold">Contact Us</h1>
                </div>
                {!! get_field('contact_details') !!}
            </div>
        @endif
        @if($query->have_posts())
            <div class="row">
                <div class="col-12">
                    <h1 class="fw-bold">{!! $title !!}</h1>
                </div>
            </div>
            <div class="row mt-5">
                @while($query->have_posts())
                    @php $query->the_post() @endphp
                    <div class="career-item mb-3 col-lg-5 col-md-12 col-sm-12">
                        <div class="block_leaders block_featured-bg text-white">
                            <p class="featured_date text-uppercase">{!! get_the_date('F d, Y',get_the_ID()) !!}</p>
                            <h1 class="featured_title fw-bold">{!! get_the_title(get_the_ID()) !!}</h1>
                            <p class="featured_description">
                                @php
                                    $careers_content = get_field('job_description', get_the_ID());
                                @endphp

                                {!! wp_trim_words($careers_content, 25) !!}
                            </p>
                            <a href="{!! get_the_permalink($stories->ID) !!}" class="text-decoration-none text-white link_default-value">
                                <div class="d-flex">
                                    <p>READ MORE<span>&nbsp
                                                <i class="fa fa-chevron-right"></i></span></p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endwhile
                {!! bootstrap_pagination($query) !!}
                @php wp_reset_postdata(); @endphp
            </div>


        @endif
    </div>
</section>

