@php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$featured_articles = get_field('featured_articles');
    $args = array(
        'post_type'      => 'career',    // Your custom post type
        'post_status'    => 'publish',   // Fetch only published posts
        'posts_per_page' => 8,           // Number of posts per page
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
            <div class="row">
                <div class="col-12">
                    <h1 class="fw-bold">{!! $title !!}</h1>
                </div>
            </div>
        @if($featured_articles)

            <div class="row mt-5 mb-5">
                @if(get_field('career_stories_title'))
                    <div class="career-item mb-3 col-lg-5 col-md-12 col-sm-12">
                        <div class="block_leaders block_featured-bg text-white">
                            <h1 class="featured_title fw-bold">{!! get_field('career_stories_title') !!}</h1>
                            <p class="featured_description">
                                {!! wp_trim_words(get_field('career_stories_content'), 25) !!}
                            </p>
                            <a href="{!! get_field('career_openings_page_url')!!}" class="text-decoration-none text-white link_default-value">
                                <div class="d-flex">
                                    <p>READ MORE<span>&nbsp
                                                    <i class="fa fa-chevron-right"></i></span></p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endif
                @foreach($featured_articles as $post_id)
                    @php
                        $content_post = get_post($post_id);
                        $content = $content_post->post_content;
                        $content = apply_filters('the_content', $content);
                        $content = str_replace(']]>', ']]&gt;', $content);
                    @endphp
                    <div class="career-item mb-3 col-lg-5 col-md-12 col-sm-12">
                        <div class="block_leaders block_featured-bg text-white">
                            <h1 class="featured_title fw-bold">{!! get_the_title($post_id) !!}</h1>
                            <p class="featured_description">
                                @if (has_excerpt( $post_id))
                                    {!! get_the_excerpt($post_id) !!}
                                @else
                                    {!!  wp_trim_words($content, 25) !!}
                                @endif
                            </p>
                            <a href="{!! get_the_permalink($post_id) !!}" class="text-decoration-none text-white link_default-value">
                                <div class="d-flex">
                                    <p>READ MORE<span>&nbsp<i class="fa fa-chevron-right"></i></span></p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
                @php wp_reset_postdata(); @endphp
            </div>
        @endif
        @if($query->have_posts())
                <div class="row">
                    <div class="col-12">
                        <h1 class="fw-bold">Job Openings</h1>
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
                                @if (has_excerpt(get_the_ID()))
                                    {!! get_the_excerpt(get_the_ID()) !!}
                                @else
                                    {!! wp_trim_words($careers_content, 25) !!}
                                @endif
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

