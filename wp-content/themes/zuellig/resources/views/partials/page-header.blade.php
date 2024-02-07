@php
    $postId = get_queried_object_id();
@endphp
@if(get_field('page_header_banner'))
    <div class="position-relative">
        <img src="{!! get_field('page_header_banner') !!}" alt="banner" class="img-fluid w-100">
    </div>
@endif
