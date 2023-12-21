@extends('layouts.app')
@section('content')
    @if(have_rows('homepage_content'))
        @while(have_rows('homepage_content'))
            @php the_row(); @endphp
            <!-- Company Highlights  Layout -->
            @if( get_row_layout() == 'company_highlights' )
                @if(have_rows('company_highlights_contents'))
                    <section class="count_div-block">
                        <div class="container">
                            <div class="row">
                                @while(have_rows('company_highlights_contents'))
                                    @php the_row() @endphp
                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                        <div>
                                            <h1 class="title_div-block">{!! get_sub_field('highlights_count') !!}</h1>
                                            <p class="text_div-block">{!! get_sub_field('highlights_title') !!}</p>
                                        </div>
                                    </div>
                                @endwhile
                            </div>
                        </div>
                    </section>
                @endif
            @endif
            <!-- End Company Highlights -->
            <!-- How We Work  Layout -->
            @if( get_row_layout() == 'how_we_work_section' )
                <section class="section_default-padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 d-flex align-items-center">
                                <div class="px-3">
                                    <p class="block_paragraph_small-title mb-0">{!! get_sub_field('paragraph_small_title') !!}</p>
                                    <div class="div_heading-title fw-bold">
                                        <h1 class="fw-bold">{!! get_sub_field('title_heading') !!}</h1>
                                    </div>
                                    <p class="block_paragraph-description">{!! get_sub_field('section_content') !!}</p>
                                    @if(get_sub_field('section_button_title'))
                                        <div class="pt-3">
                                            <a href="{!! get_sub_field('section_button_url') !!}" class="button_default button_btnHealthCare text-decoration-none">{!! get_sub_field('section_button_title') !!}</a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 pt-3">
                                <img src="{!! get_sub_field('featured_article_image') !!}" alt="how we work" class="img-fluid img_border-radius">
                            </div>
                        </div>
                    </div>
                </section>
            @endif
            <!-- End How We Work -->

            <!-- Acccordion -->
            @if(get_row_layout() == 'accordion_section')
                @php
                    $accordionCount = 1;
                @endphp
                @if(have_rows('accordion_contents'))
                    <div class="accordion hide-m">
                        @while(have_rows('accordion_contents'))
                            @php
                                the_row();
								 $formattedNumber = sprintf('%02d', $accordionCount);
                            @endphp
                            <div class="tab {!! $accordionCount == 1 ? 'show' : '' !!}">
                                <img src="{!! get_sub_field('accordion_bg_image') !!}" />
                                <div class="program_menu program_active">
                                    <div>
                                        <div class="program_menu-text">{!! $formattedNumber !!}</div>
                                        <div class="program_menu-title">{!! get_sub_field('accordion_title') !!}</div>
                                    </div>
                                </div>
                                <div class="caption">
                                    <div class="text-white program_content">
                                        <div class="program_div-item">
                                            <p class="block_paragraph_small-title mb-0 text-uppercase">{!! get_sub_field('accordion_block_small_title') !!}</p>
                                            <div class="div_heading-title">
                                                <h1 class="fw-bold">{!! get_sub_field('accordion_content_title') !!}</h1>
                                            </div>
                                            <p class="program_description">
                                                {!! get_sub_field('accordion_content') !!}
                                            </p>
                                            <a href="{!! get_sub_field('accordion_button_url') !!}" class="button_default button_programs">{!! get_sub_field('accordion_button_title') !!}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @php
                                $accordionCount++;
                            @endphp
                        @endwhile
                    </div>
                @endif
            @endif
            <!-- End Accordion -->

            <!-- Featured Stories -->
            @if(get_row_layout() == 'featured_stories')
                @if(get_sub_field('featured_stories_section_header'))
                    <section class="default_section-padding">
                        <div class="container">
                            <div class="row mb-3 pb-3">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="text-center description_extra-padding">
                                        <div class="div_heading-title">
                                            <h1 class="fw-bold">{!! get_sub_field('featured_stories_section_header') !!}</h1>
                                        </div>
                                        <p class="block_paragraph-description">{!! get_sub_field('featured_stories_section_subtitle') !!}</p>
                                    </div>
                                </div>
                            </div>
                            @php
                                $featuredPost = get_sub_field('featured_stories_articles');
								$featuredPostCounter = 1;
                            @endphp
                            <!-- Featured Primary Post-->
                            <div class="row py-3 mb-5 align-items-center">
                                <div class="post-featured-img col-lg-7 col-md-12 col-sm-12">
                                        {!! get_the_post_thumbnail(  $featuredPost[0], 'full', array( 'class' => 'img-fluid w-100' ) ); !!}
                                </div>
                                <div class="col-lg-5 col-md-12 col-sm-12">
                                    <div class="block_featured block_featured-bg text-white">
                                        <p class="featured_date">{!! get_the_date('F d, Y',$featuredPost[0]) !!}</p>
                                        <h1 class="featured_title fw-bold">{!! get_the_title($featuredPost[0]) !!}</h1>
                                        <p class="featured_description">
                                            @php
                                               $content =  get_post_field('post_content', $featuredPost[0]);
                                            @endphp
                                            {!! wp_trim_words( $content, 20 ); !!}
                                        </p>
                                        <a href="{!! get_the_permalink($featuredPost[0]) !!}" class="text-decoration-none text-white link_default-value">
                                            <div class="d-flex">
                                                <p>READ MORE<span>&nbsp
                                                <i class="fa fa-chevron-right"></i></span></p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- END Featured Primary Post-->
                            <div class="row py-3">
                                <div class="col-lg-6 col-md-6 col-sm-12 d-flex align-items-stretch">
                                    <div class="card border-0">
                                        {!! get_the_post_thumbnail(  $featuredPost[1], 'full', array( 'class' => 'card-img-top img-fluid h-100' ) ); !!}
                                        <div class="card-body">
                                            <h5 class="card-title fw-bold">{!! get_the_title($featuredPost[1]) !!}</h5>
                                            <p class="card-text">{!! wp_trim_words( get_post_field('post_content', $featuredPost[1]), 38 ); !!}</p>
                                            <a href="{!! get_the_permalink($featuredPost[1]) !!}" class="text-primary text-decoration-none link_default-value link_color">
                                                <p>READ MORE<span>&nbsp
                                                <i class="fa fa-chevron-right"></i></span></p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 d-flex align-items-stretch">
                                    <div class="card border-0">
                                        {!! get_the_post_thumbnail(  $featuredPost[2], 'full', array( 'class' => 'card-img-top img-fluid h-100' ) ); !!}
                                        <div class="card-body">
                                            <h5 class="card-title fw-bold">{!! get_the_title($featuredPost[2]) !!}</h5>
                                            <p class="card-text">{!! wp_trim_words( get_post_field('post_content', $featuredPost[2]), 38 ); !!}</p>
                                            <a href="{!! get_the_permalink($featuredPost[2]) !!}" class="text-primary text-decoration-none link_default-value link_color">
                                                <p>READ MORE<span>&nbsp
                                                <i class="fa fa-chevron-right"></i></span></p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--container-->
                    </section>
                @endif
            @endif
            <!-- End Featured Stories -->
        @endwhile
    @endif
@endsection


