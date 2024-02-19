@php
    $author_name = get_the_author();
	$post_id = get_the_ID();

    // Get the category information for the current post
    $category = get_the_category($post_id);
	$display_author = get_field('display_author');
@endphp
<section class="default_section-padding mt-5">
    <div class="container">
        <div class="row">
            <div class=" mb-3 div_heading-title text-left mb-3">
                <h1 class="fw-bold">{!! $title !!}</h1>
            </div>
        </div>
        <div class="row">
            <div class="featured-image-container">
                {!! get_the_post_thumbnail(get_the_ID() ,'full', array( 'class' => 'card-img-top img-fluid mb-5' ) ); !!}
            </div>
        </div>
        <div class="row">
            {!! the_content() !!}
        </div>
    </div>
</section>
