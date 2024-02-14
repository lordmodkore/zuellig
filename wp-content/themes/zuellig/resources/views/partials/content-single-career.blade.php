@php
$job_description = get_field('job_description');
$requirements = get_field('requirements');
$qualifications = get_field('qualifications');
$benefits = get_field('benefits');
$location = get_field('location_assignment');
@endphp
<section class="default_section-padding mt-5">
    <div class="container">
        <div class="row">
            <div class=" mb-3 div_heading-title text-left mb-3">
                <h1 class="fw-bold">{!! $title !!}</h1>
                <ul class="job-details">
                    @if(get_field('job_published_date'))
                        <li><p class="block_paragraph_small-title mb-0">Job Published Date: {!! get_field('job_published_date') !!}</p></li>
                    @endif
                    @if(get_field('job_type'))
                        <li><p class="block_paragraph_small-title mb-0">Job Type: {!! get_field('job_type') !!}</p></li>
                    @endif
                    @if(get_field('career_level'))
                        <li><p class="block_paragraph_small-title mb-0">Career Type: {!! get_field('career_level') !!}</p></li>
                    @endif
                    @if(get_field('number_of_vacancies'))
                        <li><p class="block_paragraph_small-title mb-0">Number of Vacancies: {!! get_field('number_of_vacancies') !!}</p></li>
                    @endif
                </ul>

            </div>
        </div>
        <div class="row mb-3">
            {!! $job_description !!}
        </div>

        <div class="row mb-3">
            @if($location)
                <h5 class="fw-bold">Location Assignment</h5>
                {!! $location !!}
            @endif
        </div>
        @if($requirements)
            <div class="row mb-3">
                <div class="col-md-6">
                    <h3 class="fw-bold">Essential Job Functions</h3>
                    {!! $requirements !!}
                </div>
            </div>
        @endif
        <div class="row">
            @if($qualifications)
                <div class="col-md-6">
                    <h3 class="fw-bold">Qualifications</h3>
                    {!! $qualifications !!}
                </div>
            @endif
            @if($benefits)
                <div class="col-md-6">
                    <h3 class="fw-bold">Benefits</h3>
                    {!! $benefits !!}
                </div>
            @endif
        </div>
        <div class="row">
            <div class="apply_controls mt-4 text-center">
                <button class="openApplicationFormButton button_default button_btnHealthCare text-decoration-none">Apply</button>
            </div>
        </div>
    </div>
</section>
<div id="overlay"></div>
<div id="popup-container" class="applicationFormPopUp col-lg-6 col-10">
    <div id="closeFormButton" class="close">X</div>
    <!-- Content inside the pop-up container -->
    <!-- Gravity Form shortcode -->
    {!! do_shortcode('[gravityform id="6" title="false" description="false" ajax="true"]') !!}
</div>
