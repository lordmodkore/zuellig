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
                                    <p class="block_paragraph_small-title mb-2">{!! get_sub_field('paragraph_small_title') !!}</p>
                                    <div class="div_heading-title fw-bold">
                                        <h1 class="fw-bold">{!! get_sub_field('title_heading') !!}</h1>
                                    </div>
                                    <p class="block_paragraph-description">{!! get_sub_field('section_content') !!}</p>
                                    @if(get_sub_field('section_button_title'))
                                        <div class="pt-3 mb-5">
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
                    <div id="accordian-container" class="accordian-container alignfull mb-5">
                        <div class="accordian accordian--horizontal">
                            @while(have_rows('accordion_contents'))
                                @php
                                    the_row();
                                     $formattedNumber = sprintf('%02d', $accordionCount);
									 $headingColor = match ($accordionCount) {
                                        2 => 'text-green',
                                        3 => 'text-red',
                                        default => 'text-blue',
                                    };

                                @endphp
                                <div id="accordian-insert-block-{!! $accordionCount !!}" class="accordian-insert alignfull item" style="background-image: url({!! get_sub_field('accordion_bg_image') !!});">
                                    <div class="body standard-grid">
                                        <p class="block_paragraph_small-title mb-2 text-uppercase">{!! get_sub_field('accordion_block_small_title') !!}</p>
                                        <h1 class="fw-bold">{!! get_sub_field('accordion_content_title') !!}</h1>
                                        <p class="is-style-large-body">  {!! get_sub_field('accordion_content') !!}</p>
                                        @if(get_sub_field('accordion_button_url'))
                                            <div class="wp-block-buttons is-layout-flex wp-block-buttons-is-layout-flex">
                                                <a href="{!! get_sub_field('accordion_button_url') !!}" class="button_default button_programs">
                                                    {!! get_sub_field('accordion_button_title') !!}
                                                </a>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="header aos-init aos-animate" data-aos="fade-left">
                                        <p>{!! $formattedNumber !!}</p>
                                        <h2 class="heading fw-bold {!!  $headingColor !!}">{!! get_sub_field('accordion_title') !!}</h2>
                                        <svg class="svg-inline--fa fa-plus fa-w-12 toggle" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M376 232H216V72c0-4.42-3.58-8-8-8h-32c-4.42 0-8 3.58-8 8v160H8c-4.42 0-8 3.58-8 8v32c0 4.42 3.58 8 8 8h160v160c0 4.42 3.58 8 8 8h32c4.42 0 8-3.58 8-8V280h160c4.42 0 8-3.58 8-8v-32c0-4.42-3.58-8-8-8z"></path></svg><!-- <span class="fal fa-plus toggle"></span> Font Awesome fontawesome.com -->
                                    </div>
                                </div>
                                @php
                                    $accordionCount++;
                                @endphp
                            @endwhile
                        </div>
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
                                        <p class="featured_date mb-2">{!! get_the_date('F d, Y',$featuredPost[0]) !!}</p>
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

            <!-- Project Locations -->
            @if(get_row_layout() == 'projects')
                <div id="overlay" style="display:none">
                    <div class="overlay-content">
                        <div class="close-button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53" fill="none">
                                <line x1="38.3165" y1="12.0992" x2="12.0992" y2="38.3165" stroke="black" stroke-width="3"/>
                                <line x1="38.3165" y1="12.0992" x2="12.0992" y2="38.3165" stroke="black" stroke-width="3"/>
                                <line x1="40.3339" y1="38.3175" x2="14.1166" y2="12.1002" stroke="black" stroke-width="3"/>
                                <line x1="40.3339" y1="38.3175" x2="14.1166" y2="12.1002" stroke="black" stroke-width="3"/>
                            </svg>
                        </div>
                        <div class="content-header">

                        </div>
                        <div class="wrapper-content">
                            <div class="bluepin">Local Health Sysytem</div>
                            <h4>Headline goes here one line</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam aspernatur odio dolorem quaerat</p>
                        </div>

                    </div>
                </div>
                <section class="default_section-padding section-bg">
                    <div class="container">
                        <div class="row py-3 mb-3">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="text-center description_extra-padding">
                                    <div class="div_heading-title">
                                        <h1 class="fw-bold">{!! get_sub_field('section_header') !!}</h1>
                                    </div>
                                    <p class="block_paragraph-description">{!! get_sub_field('section_sub_header') !!}</p>
                                </div>
                            </div>
                        </div>
                        @php
                            $args = [
                                'post_type' => 'project_location',
                                'posts_per_page' => -1,
                                'post_status'   =>  'publish'
                            ];
                            $locations_query = new WP_Query($args);
                        @endphp
                        @if( $locations_query->have_posts())
                            <div class="acf-map">
                                @while($locations_query->have_posts())
                                    @php
                                        $locations_query->the_post();
										$postID = get_the_ID();
										$locations = get_field('location',$postID);
										$cat = get_the_terms(get_the_ID(), 'project-categories');
										$contentBody = get_field('content_body',get_the_ID());
										$header_title = get_field('header_title',get_the_ID());

                                    @endphp
                                    <div class="marker" data-header-title="{!! $header_title !!}" data-content="{!! $contentBody !!}" data-category="{!! $cat[0]->name !!}" data-location="{!! the_title() !!}" data-lat="{!! $locations['lat'] !!}" data-lng="{!! $locations['lng'] !!}"></div>
                                @endwhile
                                @php  wp_reset_postdata(); @endphp
                            </div>
                        @endif
                    </div>
                </section>
            @endif
            <!-- End Project Locations -->

            <!-- Partners -->
            @if(get_row_layout() == 'project_partners')
                <section class="default_section-padding">
                    <div class="container">
                        <div class="row py-3">
                            <div class="col-12">
                                <div class="text-center description_extra-padding">
                                    <h1 class="fw-bold">{!! get_sub_field('section_header_title') !!}</h1>
                                    <p class="block_paragraph-description">{!! get_sub_field('section_sub_header_title') !!}</p>
                                </div>
                            </div>
                        </div>

                        <div class="row border-black border-top border-bottom">
                            <div class="col text-center py-3">
                                <h4 class="mb-0 fw-bold project_title-text">{!! get_sub_field('program_partners_title_text') !!}</h4>
                            </div>
                        </div>
                        @if(have_rows('program_partners'))
                            <div class="row text-center align-items-center justify-content-center">
                                @while(have_rows('program_partners'))
                                    @php the_row() @endphp
                                    <div class="col-lg-3 col-md-3 col-sm-6 py-2 my-4">
                                        @if(get_sub_field('partner_website_url'))
                                            <a href="{!! get_sub_field('partner_website_url') !!}" target="_blank">
                                                <div class="partner-logo-container" style="background-image:url({!! get_sub_field('program_partner_logo') !!});">
                                                    {{--                                            <img src="{!! get_sub_field('program_partner_logo') !!}" alt=""--}}
                                                    {{--                                                 class="img-fluid partner-logo">--}}
                                                </div>
                                            </a>
                                        @else
                                            <div class="partner-logo-container" style="background-image:url({!! get_sub_field('program_partner_logo') !!});">
                                                {{--                                            <img src="{!! get_sub_field('program_partner_logo') !!}" alt=""--}}
                                                {{--                                                 class="img-fluid partner-logo">--}}
                                            </div>
                                        @endif

                                        <div>
                                            <p class="block_paragraph_small-title mb-2 mt-4">{!! get_sub_field('partner_name') !!}</p>
                                        </div>
                                    </div>
                                @endwhile
                            </div>
                        @endif

                        <div class="row border-black border-top border-bottom">
                            <div class="col text-center py-3">
                                <h4 class="mb-0 fw-bold project_title-text">{!! get_sub_field('reproductive_health_partners_title_text') !!}</h4>
                            </div>
                        </div>
                        @if(have_rows('reproductive_health_partners'))
                                <div class="row text-center align-items-center justify-content-center">
                                @while(have_rows('reproductive_health_partners'))
                                    @php the_row() @endphp
                                    <div class="col-lg-3 col-md-3 col-sm-6 py-2 my-4">
                                        @if(get_sub_field('reproductive_website_url'))
                                            <a href="{!! get_sub_field('reproductive_website_url') !!}" target="_blank">
                                                <div class="partner-logo-container" style="background-image:url({!! get_sub_field('reproductive_health_partners_logo') !!});">
                                                    {{--                                            <img src="{!! get_sub_field('reproductive_health_partners_logo') !!}" alt=""--}}
                                                    {{--                                                 class="img-fluid partner-logo">--}}
                                                </div>
                                            </a>
                                        @else
                                            <div class="partner-logo-container" style="background-image:url({!! get_sub_field('reproductive_health_partners_logo') !!});">
                                                {{--                                            <img src="{!! get_sub_field('reproductive_health_partners_logo') !!}" alt=""--}}
                                                {{--                                                 class="img-fluid partner-logo">--}}
                                            </div>
                                        @endif
                                        <div>
                                            <p class="block_paragraph_small-title mb-1 mt-4">{!! get_sub_field('reproductive_partner_name') !!}</p>
                                        </div>
                                    </div>
                                @endwhile
                            </div>
                         @endif

                        <div class="row border-black border-top border-bottom">
                            <div class="col text-center py-3">
                                <h4 class="mb-0 fw-bold project_title-text">{!! get_sub_field('network_partners_header_text') !!}</h4>
                            </div>
                        </div>
                        @if(have_rows('resource_partners'))
                            <div class="row text-center align-items-center justify-content-center">
                                @while(have_rows('resource_partners'))
                                    @php the_row() @endphp
                                    <div class="col-lg-3 col-md-3 col-sm-6 py-2 my-4">
                                        @if(get_sub_field('network_partner_url'))
                                            <a href="{!! get_sub_field('network_partner_url') !!}" target="_blank">
                                                <div class="partner-logo-container" style="background-image:url({!! get_sub_field('resource_partners_logo') !!});">
                                                </div>
                                            </a>
                                        @else
                                            <div class="partner-logo-container" style="background-image:url({!! get_sub_field('resource_partners_logo') !!});">
                                            </div>
                                        @endif
                                        <div>
                                            <p class="block_paragraph_small-title mb-2 mt-4">{!! get_sub_field('network_partner_name') !!}</p>
                                        </div>
                                    </div>
                                @endwhile
                            </div>
                        @endif
                    </div>
                </section>
            @endif
            <!-- End Partners -->
        @endwhile
    @endif
@endsection
@php
    $mapMarkerIconUrl = asset('images/map-marker.png');
@endphp
<script>

    jQuery(document).ready(function($) {
        $('.close-button').on('click',function(){
            $("#overlay").hide();
        });
        $('.item').on('click', function () {
            return $(this).addClass('active').siblings().removeClass('active');
        });
        $('.item').first(this).addClass('active'); //find the active card
        $('.acf-map').each(function() {
            var map = new_map($(this));
        });

        function new_map($el) {
            var markers = [];
            var labelCounter = {};
            var locationContents = {}; // Store contents for each location

            $el.find('.marker').each(function() {
                var $marker = $(this);
                var lat = $marker.data('lat');
                var lng = $marker.data('lng');
                var project_content = $marker.data('content');
                var category = $marker.data('category');
                var location = $marker.data('location');
                var header = $marker.data('header-title')
                var myLatlng = new google.maps.LatLng(lat, lng);

                markers.push({
                    position: myLatlng,
                    header:header,
                    content: project_content,
                    category: category,
                    location: location
                });

                // Update the labelCounter for each location
                var locationKey = lat + '_' + lng;
                labelCounter[locationKey] = (labelCounter[locationKey] || 0) + 1;

                // Store content for each location
                if (!locationContents[location]) {
                    locationContents[location] = [];
                }
                locationContents[location].push({
                    content: project_content,
                    category: category,
                    header:header
                });
            });

            var bounds = new google.maps.LatLngBounds();

            var mapOptions = {
                minZoom: 5,
                maxZoom: 16,
                center: bounds.getCenter(),
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                mapTypeControl: false,
                fullscreenControl: false,
                styles: [
                    {
                        featureType: 'administrative',
                        elementType: 'labels',
                        stylers: [{ visibility: 'off' }]
                    },
                    {
                        featureType: 'administrative.country',
                        elementType: 'geometry.stroke',
                        stylers: [{ color: '#ff0000' }] // Change the color to your desired color
                    },
                    {
                        featureType: 'water',
                        elementType: 'geometry',
                        stylers: [
                            { color: '#f5f5f5' }  // Change this color to set the water color
                        ]
                    },
                    {
                        featureType: 'landscape',
                        elementType: 'geometry',
                        stylers: [
                            { color: '#abdfff' }  // Set the desired color for the land
                        ]
                    },
                    {
                        featureType: 'administrative.province',
                        elementType: 'geometry.stroke',
                        stylers: [
                            { visibility: 'off' }  // Hide province borders
                        ]
                    },
                    {
                        featureType: 'road',
                        elementType: 'geometry',
                        stylers: [
                            { visibility: 'off' }  // Hide roads
                        ]
                    },

                    // Add more styles as needed
                ],
            };

            var map = new google.maps.Map($el[0], mapOptions);

            // Fit the map to the bounds
            map.fitBounds(bounds);

            markers.forEach(function(marker) {
                bounds.extend(marker.position);

                var mapMarker = new google.maps.Marker({
                    position: marker.position,
                    map: map,
                    label: {
                        text: labelCounter[marker.position.lat() + '_' + marker.position.lng()].toString(),
                        color: '#006AA0',
                        fontFamily: 'Gill Sans, sans-serif',
                        fontSize: '12px',
                        fontStyle: 'normal',
                        fontWeight: '600',
                        lineHeight: 'normal',
                        letterSpacing: '0.8px',
                        textTransform: 'uppercase',
                        textAlign: 'center'
                    },
                    icon: {
                        url: '<?php echo $mapMarkerIconUrl;?>',
                        scaledSize: new google.maps.Size(22, 32),
                        labelOrigin: new google.maps.Point(11, 10),
                    },
                });

                google.maps.event.addListener(mapMarker, 'click', function() {
                    var location = marker.location;
                    var contents = locationContents[location];
                    $(".overlay-content .wrapper-content").html('');
                    $("#overlay .content-header").html('<h3>'+location+'</h3>');
                    console.log(contents)
                    // Append each content item inside a div container
                    contents.forEach(function(content) {
                        var rowContainer = $('<div class="row-container mt-5 mb-5"></div>'); // Create a div container for each row
                        var buttonClass = 'category-pin';
                        if (content.category === 'Nutrition') {
                            buttonClass += ' green';
                        } else if (content.category === 'Adolescent Sexual and Reproductive Health') {
                            buttonClass += ' red';
                        } else if(content.category === 'Local Health Systems'){
                            buttonClass += ' blue';
                        } else {
                            buttonClass += ' blue';
                        }
                        // Append each content item to the row container
                        rowContainer.append('<div class="'+ buttonClass +'">' + content.category + '</div>');
                        rowContainer.append('<h4>' + content.header + '</h4>');
                        rowContainer.append('<p>' + content.content + '</p>');

                        // Append the row container to the wrapper
                        $(".overlay-content .wrapper-content").append(rowContainer);
                    });

                    $('#overlay').show();
                });
            });

            // Adjust zoom level dynamically
            google.maps.event.addListener(map, 'zoom_changed', function() {
                if (map.getZoom() < mapOptions.minZoom) map.setZoom(mapOptions.minZoom);
                if (map.getZoom() > mapOptions.maxZoom) map.setZoom(mapOptions.maxZoom);
            });

            return map;
        }
    });

</script>

