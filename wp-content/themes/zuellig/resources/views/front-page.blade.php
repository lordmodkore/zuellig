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

            
        @endwhile
    @endif
@endsection


