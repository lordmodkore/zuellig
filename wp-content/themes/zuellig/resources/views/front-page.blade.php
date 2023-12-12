@extends('layouts.app')
@section('content')
    @if(have_rows('company_highlights'))
        <section class="count_div-block">
            <div class="container">
                <div class="row">
                    @while(have_rows('company_highlights'))
                        @php the_row() @endphp
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div>
                                <h1 class="title_div-block">{!! get_sub_field('highlight_count') !!}</h1>
                                <p class="text_div-block">{!! get_sub_field('highlight_title') !!}</p>
                            </div>
                        </div>
                    @endwhile
                </div>
            </div>
        </section>
    @endif

@endsection
