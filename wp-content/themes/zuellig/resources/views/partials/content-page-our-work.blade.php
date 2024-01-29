
<section class="default_section-padding">
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
            {!! the_content() !!}
        </div>
    </div>
</section>
<section class="default_section-padding">
    <div class="container col-lg-10">
        @if(have_rows('programs'))
            <div class="row mb-3 pb-3">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="description_extra-padding p-0">
                        <div class="div_heading-title">
                            <h1 class="fw-bold">Programs</h1>
                        </div>
                    </div>
                </div>
            </div>
            @while(have_rows('programs'))
                @php the_row(); @endphp
                <div class="row py-3 mb-5 align-items-center">
                    <div class="post-featured-img col-lg-7 col-md-12 col-sm-12">
                       <img src="{!! get_sub_field('program_featured_image') !!}" class="img-fluid"/>
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12">
                        <div class="block_programs block_featured block_featured-bg text-white" style="background:{!! get_sub_field('bg_color') !!};border:none;">
                            <p class="block_paragraph_small-title mb-2 text-white">{!! get_sub_field('program_category_name') !!}</p>
                            <h1 class="featured_title fw-bold">{!! get_sub_field('program_heading_title') !!}</h1>
                            <p class="featured_description">
                                {!! get_sub_field('program_content_text') !!}
                            </p>
                            @if(get_sub_field('program_button_url'))
                                <a href=" {!! get_sub_field('program_button_url') !!}" class="text-decoration-none text-white link_default-value">
                                    <div class="d-flex">
                                        <p class="program_button_text">{!! get_sub_field('program_button_text') !!}<span>&nbsp
                                        <i class="fa fa-chevron-right"></i></span></p>
                                    </div>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            @endwhile
        @endif
    </div>
</section>
@php
	$annual_reports = get_field('annual_report');

@endphp

@if($annual_reports)
    <section class="default_section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div>
                        <h1 class="fw-bold">Annual Report</h1>
                    </div>
                </div>
            </div>
            <div class="row py-3">
                @foreach($annual_reports as $post)
                    <div class="col-lg-6 col-md-6 col-sm-12 d-flex align-items-stretch mb-5">
                        <div class="card border-0">
                            @if(has_post_thumbnail($post))
                                {!! get_the_post_thumbnail($post, 'medium', array( 'class' => 'card-img-top img-fluid h-100' ) ); !!}
                            @else
                                <img src="https://placehold.co/600x400" class="card-img-top img-fluid" alt="image-placeholder">
                            @endif
                            <div class="card-body">
                                @foreach(get_the_category($post) as $category)
                                    <p class="card_small-text fw-bold mb-2">{{ $category->name }}</p>
                                @endforeach
                                <h5 class="card-title fw-bold">{!! get_the_title($post) !!}</h5>
                                    @php
                                        $post_content = get_post_field('post_content', $post);
                                        $post_content = preg_replace('/\[pdf-embedder[^\]]*\]/', '', $post_content);
                                    @endphp
                                <p class="card-text">{!! wp_trim_words($post_content, 38); !!} </p>
                                <a href="{!! get_the_permalink($post) !!}" class="text-primary text-decoration-none link_default-value link_color">
                                    <p>READ MORE<span>&nbsp
                                        <i class="fa fa-chevron-right"></i></span></p>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif
