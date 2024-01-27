<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="logo-link" href="/">
                <img src="{!! get_field('logo','option') !!}" alt="logo" class="logo img-fluid">
                <img src="{!! get_field('sticky_logo','option') !!}" alt="logo" class="img-fluid sticky-logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <?php
                $counter = 0;
                $sliderCounter = 0;
                if (has_nav_menu('primary_navigation')) :
                    wp_nav_menu([
                        'theme_location' => 'primary_navigation',
                        'menu_class' => 'navbar-nav' ,
                        'menu_item_class'  => 'nav-link',
                        'walker'   =>   new App\Walkers\SageCustomWalkers(),
                    ]);
                endif;
                ?>
            </div>
        </div>
    </nav>
    @if(have_rows('featured_slider'))
        <div id="featured-slider" class="carousel slide">
            <div class="carousel-indicators">
                @while(have_rows('featured_slider'))
                    @php the_row();  @endphp
                    <button type="button" data-bs-target="#featured-slider" data-bs-slide-to="{!! $counter !!}" {!! $counter == 0 ? 'aria-current="true"' : '' !!} class="{!! $counter == 0 ? 'active' : '' !!}"  aria-label="Slide {!! $counter !!}"></button>
                    @php
                        $counter++;
                    @endphp
                @endwhile
            </div>
            <div class="carousel-inner">
                @while(have_rows('featured_slider'))
                    @php the_row();  @endphp
                    <div class="carousel-item {!! $sliderCounter == 0 ? 'active' : '' !!}">
                        <img src="{!! get_sub_field('featured_image') !!}" class="d-block w-100" alt="1">
                        <div class="carousel-description d-block">
                            <div class="px-3 carousel-content-container">
                                <p class="block_paragraph_small-title mb-0 text-white">{!! get_sub_field('featured_header_sub_title') !!}</p>
                                <div class="div_heading-title text-white fw-bold">
                                    <h1 class="mb-0 fw-bold">{!! get_sub_field('featured_header_title') !!}</h1>
                                </div>
                                <p class="block_paragraph-description text-white mt-3">{!! get_sub_field('featured_content') !!}</p>
                            </div>
                            <div class="px-3 pt-2 mb-5 mt-5">
                                <a href="{!! get_sub_field('button_url') !!}" class="button_default button_btnAboutUs text-decoration-none">{!! get_sub_field('button_title') !!}</a>
                            </div>
                        </div>
                    </div>
                    @php $sliderCounter++ @endphp
                @endwhile
            </div>
        </div>
    @endif
</header>
<style>
    .navbar.sticky #menu-primary-navigation .nav-item a span{
        color: #006AAB;
        font-size: 16px;

    }
    nav.navbar.sticky #menu-primary-navigation .current-menu-item a span{
        color: #006AAB ;
    }



    #menu-primary-navigation .nav-item.current_page_parent{
        color: #006AAB;
    }

    #menu-primary-navigation .nav-item .sub-menu li a span{

        text-align: center;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }
    #menu-primary-navigation .nav-item .sub-menu li {
        padding: 0;
        border-top: 1px solid white;
        list-style:none;
    }

    #menu-primary-navigation .nav-item .sub-menu li.current-menu-item a span {
        color: #006AAB;
    }
    @media(min-width: 320px) and (max-width:767px) {
        #navbarNavDropdown{
            padding: 20px;
        }
    }
    @media(min-width: 768px) {
        header .navbar .navbar-nav .nav-link{
            color: #fff;
        }
    }
    @media (max-width: 991px){
        #navbarNavDropdown {
            position: fixed;
            background: #f0f0f0!important;
            width: 100%;
            left: 0;
            top: 80px;
        }
        button.navbar-toggler.collapsed::before {
            content: '';
        }

    }
</style>
