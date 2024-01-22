@php
    $postId = get_queried_object_id();
	 $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
@endphp
<div class="position-relative">
    <div class="featured-image-container">
        {!! get_the_post_thumbnail(get_the_ID() ,'feature-image-thumb', array( 'class' => 'card-img-top h-100 img-fluid mb-5' ) ); !!}
    </div>
</div>
