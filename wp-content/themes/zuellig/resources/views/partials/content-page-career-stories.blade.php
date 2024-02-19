@php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
        'post_type'      => 'career_stories',    // Your custom post type
        'post_status'    => 'publish',   // Fetch only published posts
        'posts_per_page' => 8,           // Number of posts per page
        'paged'          => $paged,
    );
	$query = new WP_Query($args);

@endphp

<section class="default_section-padding">
    <div class="container">
        <div class="row career-stories-container mb-5">
            <div class="col-12">
                @if(get_field('career_stories_intro_text'))
                <h3 class="fw-bold mb-2">{!! get_field('career_stories_intro_text') !!}</h3>
                @endif
                <div class="block_paragraph-description">{!! the_content() !!}</div>
                <h1 class="fw-bold mt-5">{!! $title !!}</h1>
            </div>
        </div>
        @if($query->have_posts())
            <div class="row mt-5">
                @while($query->have_posts())
                    @php $query->the_post() @endphp
                    <div class="col-md-6 career-stories-item">
                        <a href="{!! get_permalink() !!}">
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-4">
                                        {!! get_the_post_thumbnail(get_the_ID() , 'full', array( 'class' => 'card-img-top img-fluid' ) ); !!}
                                    </div>
                                    <div class="col-md-8 px-3 mt-5">
                                        <div class="card-block px-3">
                                            <h1 class="fw-bold">{!! the_title() !!}</h1>
                                            <p class="block_paragraph_small-title mb-2">{!! get_field('position') !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endwhile
                {!! bootstrap_pagination($query) !!}
                @php wp_reset_postdata(); @endphp
            </div>
        @endif
    </div>
</section>

