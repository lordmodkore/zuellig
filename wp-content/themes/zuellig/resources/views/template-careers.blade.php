{{--
  Template Name: Careers Page Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.content-page-careers')
  @endwhile
@endsection
