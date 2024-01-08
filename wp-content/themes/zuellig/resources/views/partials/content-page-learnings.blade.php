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
        @if(have_rows('learnings_tab'))
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-8 col-md-8 col-sm-12 mb-3">
                    <div>
                        @php
                            $tabCounter = 0;
                            $tabPaneCounter = 0;
                        @endphp
                        <ul class="nav nav-tabs border-bottom-0" id="myTab" role="tablist">
                            @while(have_rows('learnings_tab'))
                                @php the_row(); @endphp
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link {!! $tabCounter == 0 ? 'active' : '' !!} nav_learning_link border-top-0 border-end-0 border-start-0" id="{!! sanitize_title(get_sub_field('tab_title')) !!}-tab" data-bs-toggle="tab" data-bs-target="#{!! sanitize_title(get_sub_field('tab_title')) !!}-tab-pane" type="button" role="tab" aria-controls="overview-tab-pane" aria-selected="true">{!! get_sub_field('tab_title') !!}</button>
                                </li>
                                @php $tabCounter++ @endphp
                            @endwhile
                        </ul>
                        <div class="tab-content border-black border-top mt-3" id="myTabContent">
                            @while(have_rows('learnings_tab'))
                                @php
                                    the_row();
                                @endphp
                                    <div class="tab-pane fade {!! $tabPaneCounter == 0 ? 'show active' : '' !!} py-2" id="{!! sanitize_title(get_sub_field('tab_title')) !!}-tab-pane" role="tabpanel" aria-labelledby="{!! sanitize_title(get_sub_field('tab_title')) !!}-tab" tabindex="{!! $tabCounter !!}">
                                    {!! get_sub_field('tab_content') !!}

                                </div>
                                @php $tabPaneCounter++ @endphp
                            @endwhile
                        </div>
                    </div>
                </div>

            </div>
        @endif
        @if(get_field('blockqoute_text'))
            <div class="row border_inner-color border-top border-bottom">
                <div class="col text-center py-3">
                    <p class="mb-0 fw-bold who_paragraph-size fst-italic">{!! get_field('blockqoute_text') !!}</p>
                </div>
            </div>
        @endif


    </div>
</section>
@php
    $latest_articles = get_field('latest_articles');
@endphp
@if($latest_articles)
    <section class="default_section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div>
                        <h1 class="fw-bold">Latest</h1>
                    </div>
                </div>
            </div>
            <div class="row py-3">

                @foreach ($latest_articles as $article)
                    <div class="col-lg-6 col-md-6 col-sm-12 d-flex align-items-stretch">
                        <div class="card border-0">
                        @if(has_post_thumbnail($article->ID))
                            {!! get_the_post_thumbnail($article->ID , 'medium', array( 'class' => 'card-img-top img-fluid h-100' ) ); !!}
                        @else
                            <img src="https://placehold.co/600x400" class="card-img-top img-fluid" alt="image-placeholder">
                        @endif
                        <div class="card-body">

                            @foreach(get_the_category($article) as $category)
                                   <p class="card_small-text fw-bold">{{ $category->name }}</p>
                            @endforeach
                            <h5 class="card-title fw-bold">{!! get_the_title($article->ID) !!}</h5>
                            <p class="card-text">{!! wp_trim_words( get_post_field('post_content', $article->ID), 38 ); !!}</p>
                            <a href="{!! get_the_permalink($article->ID) !!}" class="text-primary text-decoration-none link_default-value link_color">
                                <p>READ MORE<span>&nbsp
                                                <i class="fa fa-chevron-right"></i></span></p>
                            </a>
                        </div>
                    </div>
                    </div>
                @endforeach
                @php  wp_reset_postdata(); @endphp
            </div>
        </div>
    </section>
@endif





