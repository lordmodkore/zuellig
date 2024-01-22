@php
    $author_name = get_the_author();
	$post_id = get_the_ID();

    // Get the category information for the current post
    $category = get_the_category($post_id);
@endphp
<section class="default_section-padding mt-5">
    <div class="container">
        <div class="row">
            <div class=" mb-3 div_heading-title text-left mb-3">
                <h1 class="fw-bold">{!! $title !!}</h1>
               <p class="block_paragraph_small-title mb-0">{!! esc_html($category[0]->name). ' | by ' . esc_html($author_name) !!}</p>
            </div>
        </div>
        {!! get_the_post_thumbnail(get_the_ID() , 'thumbnail', array( 'class' => 'card-img-top img-fluid h-100 mb-5' ) ); !!}
        <div class="row">
            {!! the_content() !!}
        </div>
    </div>
</section>
