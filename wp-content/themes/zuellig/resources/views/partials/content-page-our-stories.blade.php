@php
    $featured_articles = get_field('featured_stories');
	$stories_articles = get_field('stories_articles');
	$news_articles  =   get_field('news_articles');
	$events_articles = get_field('events_articles');
    $args = [
        'post_type'      => 'post', // Adjust if you're using a custom post type
        'posts_per_page' => 2,      // Number of posts to display
        'order'          => 'DESC',  // Order by descending publish date
        'orderby'        => 'date',  // Order by the publish date
    ];
	$latest_posts = new WP_Query($args);
@endphp
<section class="default_section-padding pb-0">
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
                    <ul class="nav nav-tabs border-black border-bottom pb-3" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active nav_learning_link border-top-0 border-end-0 border-start-0" id="featured-tab" data-bs-toggle="tab" data-bs-target="#featured-tab-pane" type="button" role="tab" aria-controls="featured-tab-pane" aria-selected="true">Featured</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link nav_learning_link border-top-0 border-end-0 border-start-0" id="stories-tab" data-bs-toggle="tab" data-bs-target="#stories-tab-pane" type="button" role="tab" aria-controls="stories-tab-pane" aria-selected="false">Stories</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link nav_learning_link border-top-0 border-end-0 border-start-0" id="news-tab" data-bs-toggle="tab" data-bs-target="#news-tab-pane" type="button" role="tab" aria-controls="news-tab-pane" aria-selected="false">News</button>
                        </li>
{{--                        <li class="nav-item" role="presentation">--}}
{{--                            <button class="nav-link nav_learning_link border-top-0 border-end-0 border-start-0" id="events-tab" data-bs-toggle="tab" data-bs-target="#events-tab-pane" type="button" role="tab" aria-controls="events-tab-pane" aria-selected="false">Events</button>--}}
{{--                        </li>--}}
                    </ul>
                </div>
            </div>
        </div>
        <div class="row py-3 mb-5 align-items-center">
            <div class="tab-content mt-3" id="myTabContent">
                <!--begin:: Tab pane Featured -->
                <div class="tab-pane fade show active py-2" id="featured-tab-pane" role="tabpanel" aria-labelledby="featured-tab" tabindex="0">
                    @if($featured_articles)
                        @foreach ($featured_articles as $featured)
                        <div class="row py-3 mb-5 align-items-center">
                            <div class="col-lg-7 col-md-12 col-sm-12">
                                @if(has_post_thumbnail($featured->ID))
                                    {!! get_the_post_thumbnail($featured->ID , 'medium', array( 'class' => 'card-img-top img-fluid h-100' ) ); !!}
                                @else
                                    <img src="https://placehold.co/600x400" class="card-img-top img-fluid" alt="image-placeholder">
                                @endif
                            </div>
                            <div class="col-lg-5 col-md-12 col-sm-12">
                                <div class="block_leaders block_featured-bg text-white">
                                    <p class="featured_date text-uppercase">{!! get_the_date('F d, Y',$featured->ID) !!}</p>
                                    <h1 class="featured_title fw-bold">{!! get_the_title($featured->ID) !!}</h1>
                                    <p class="featured_description">
                                        @php
                                            $featured_content =  get_post_field('post_content', $featured->ID);
                                        @endphp
                                        {!! wp_trim_words($featured_content, 20 ); !!}
                                    </p>
                                    <a href="{!! get_the_permalink($featured->ID) !!}" class="text-decoration-none text-white link_default-value">
                                        <div class="d-flex">
                                            <p>READ MORE<span>&nbsp
                                                <i class="fa fa-chevron-right"></i></span></p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @else
                        @include('partials.content-page-in-progress')
                    @endif
                </div>
                <!--end:: Tab pane -->
                <!--begin:: Tab pane -->
                <div class="tab-pane fade py-2" id="stories-tab-pane" role="tabpanel" aria-labelledby="stories-tab" tabindex="0">
                    @if($stories_articles)
                        @foreach ($stories_articles as $stories)
                            <div class="row py-3 mb-5 align-items-center">
                                <div class="col-lg-7 col-md-12 col-sm-12">
                                    @if(has_post_thumbnail($stories->ID))
                                        {!! get_the_post_thumbnail($stories->ID , 'medium', array( 'class' => 'card-img-top img-fluid h-100' ) ); !!}
                                    @else
                                        <img src="https://placehold.co/600x400" class="card-img-top img-fluid" alt="image-placeholder">
                                    @endif
                                </div>
                                <div class="col-lg-5 col-md-12 col-sm-12">
                                    <div class="block_leaders block_featured-bg text-white">
                                        <p class="featured_date text-uppercase">{!! get_the_date('F d, Y',$stories->ID) !!}</p>
                                        <h1 class="featured_title fw-bold">{!! get_the_title($stories->ID) !!}</h1>
                                        <p class="featured_description">
                                            @php
                                                $stories_content =  get_post_field('post_content', $stories->ID);
                                            @endphp
                                            {!! wp_trim_words($stories_content, 20 ); !!}
                                        </p>
                                        <a href="{!! get_the_permalink($stories->ID) !!}" class="text-decoration-none text-white link_default-value">
                                            <div class="d-flex">
                                                <p>READ MORE<span>&nbsp
                                                <i class="fa fa-chevron-right"></i></span></p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        @include('partials.content-page-in-progress')
                    @endif
                </div>
                <!--end:: Tab pane -->
                <!--begin:: Tab pane -->
                <div class="tab-pane fade py-2" id="news-tab-pane" role="tabpanel" aria-labelledby="news-tab" tabindex="0">
                    @if($news_articles)
                        @foreach ($news_articles as $news)
                            <div class="row py-3 mb-5 align-items-center">
                                <div class="col-lg-7 col-md-12 col-sm-12">
                                    @if(has_post_thumbnail($news->ID))
                                        {!! get_the_post_thumbnail($news->ID , 'medium', array( 'class' => 'card-img-top img-fluid h-100' ) ); !!}
                                    @else
                                        <img src="https://placehold.co/600x400" class="card-img-top img-fluid" alt="image-placeholder">
                                    @endif
                                </div>
                                <div class="col-lg-5 col-md-12 col-sm-12">
                                    <div class="block_leaders block_featured-bg text-white">
                                        <p class="featured_date text-uppercase">{!! get_the_date('F d, Y',$news->ID) !!}</p>
                                        <h1 class="featured_title fw-bold">{!! get_the_title($news->ID) !!}</h1>
                                        <p class="featured_description">
                                            @php
                                                $news_content =  get_post_field('post_content', $news->ID);
                                            @endphp
                                            {!! wp_trim_words($news_content, 20 ); !!}
                                        </p>
                                        <a href="{!! get_the_permalink($news->ID) !!}" class="text-decoration-none text-white link_default-value">
                                            <div class="d-flex">
                                                <p>READ MORE<span>&nbsp
                                                <i class="fa fa-chevron-right"></i></span></p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        @include('partials.content-page-in-progress')
                    @endif

                </div>
                <!--end:: Tab pane -->
                <!--begin:: Tab pane -->
                <div class="tab-pane fade py-2" id="events-tab-pane" role="tabpanel" aria-labelledby="events-tab" tabindex="0">
                    @if($events_articles)
                        @foreach ($events_articles as $events)
                            <div class="row py-3 mb-5 align-items-center">
                                <div class="col-lg-7 col-md-12 col-sm-12">
                                    @if(has_post_thumbnail($events->ID))
                                        {!! get_the_post_thumbnail($events->ID , 'medium', array( 'class' => 'card-img-top img-fluid h-100' ) ); !!}
                                    @else
                                        <img src="https://placehold.co/600x400" class="card-img-top img-fluid" alt="image-placeholder">
                                    @endif
                                </div>
                                <div class="col-lg-5 col-md-12 col-sm-12">
                                    <div class="block_leaders block_featured-bg text-white">
                                        <p class="featured_date text-uppercase">{!! get_the_date('F d, Y',$events->ID) !!}</p>
                                        <h1 class="featured_title fw-bold">{!! get_the_title($events->ID) !!}</h1>
                                        <p class="featured_description">
                                            @php
                                                $events_content =  get_post_field('post_content', $events->ID);
                                            @endphp
                                            {!! wp_trim_words($events_content, 20 ); !!}
                                        </p>
                                        <a href="{!! get_the_permalink($events->ID) !!}" class="text-decoration-none text-white link_default-value">
                                            <div class="d-flex">
                                                <p>READ MORE<span>&nbsp
                                                <i class="fa fa-chevron-right"></i></span></p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        @include('partials.content-page-in-progress')
                    @endif

                </div>
                <!--end:: Tab pane -->
            </div>
        </div>
    </div>
</section>
@if($latest_posts->have_posts())
    <section class="default_section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div>
                        <h1 class="fw-bold">Latest Articles</h1>
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
                                <p class="card_small-text fw-bold mb-2">{{ $category->name }}</p>
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
