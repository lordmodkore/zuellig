@php
    $postId = get_queried_object_id();
@endphp
<div class="position-relative">
    <div class="featured-image-container">
        {!! get_the_post_thumbnail(get_the_ID() ,'full', array( 'class' => 'card-img-top h-100 img-fluid mb-5' ) ); !!}
    </div>
</div>
