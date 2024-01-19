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
                                <p class="block_paragraph-description text-white">{!! get_sub_field('featured_content') !!}</p>
                            </div>
                            <div class="px-3 pt-2 mb-4">
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
    header .navbar .navbar-nav .nav-link{
        color: #006AAB;
        text-align: center;
        font-size: 16px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
    }
    #menu-primary-navigation .nav-item .sub-menu li a span{
        color: #B4B4B4;
        text-align: center;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }
    #menu-primary-navigation .nav-item .sub-menu li {
        padding: 0;
        border-top: 1px solid white;
    }

    #menu-primary-navigation .nav-item .sub-menu li.current-menu-item a span {
        color: #006AAB;
    }

    @media(min-width: 768px) {
        header .navbar .navbar-nav .nav-link{
            color: #fff;
        }
    }
    @media(max-width: 1199px){
        header .navbar .nav-item {
            padding: 0 10px;
        }
    }

    @media(max-width: 991px){
        .button_btnHealthCare{
            padding:20px
        }
        #navbarNavDropdown {
            background-color: #f0f0f0 !important;
        }
        header .navbar .navbar-nav{
            text-align:left;
        }
        header .navbar #menu-primary-navigation .sub-menu{
            position: relative;
        }
        header .navbar #menu-primary-navigation .menu-item:hover {
            background-color: transparent;
        }
        #menu-primary-navigation .nav-item .sub-menu li {
            list-style: none;
        }
        header .navbar .navbar-nav .nav-link{
            display:inline-block;
        }
        #menu-primary-navigation .menu-item-has-children::after {
            content: '';
            position:absolute;
            left: 120px;
            top: 11px;
            border: solid #006AAB;
            border-width: 0 3px 3px 0;
            display: inline-block;
            padding: 4px;
            transform: rotate(-45deg);
            -webkit-transform: rotate(-45deg);
        }
        .accordion{
            display: block;
            height: auto;
            overflow: visible;
        }
        .tab{
            width:100%;
            padding: 120px 40px;
        }
        .tab img{

        }
        .caption {
            opacity: 1;
            position: relative;
            top: 0;
            white-space: nowrap;
            z-index: 2;
            width: 100%;
        }
        .program_content{
            display: block;
        }
        .div_heading-title,.caption p{
            white-space: normal;
        }
        .program_menu{
            top:0;
        }
        .program_menu-title{
            display:none;
        }


    }

</style>
