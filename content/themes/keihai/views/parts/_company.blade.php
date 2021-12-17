<div class="page-content page-default page-company">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6 column-company">

                    <div class="custom-heading">
                        <h2>{{ $data->company_name ?? '' }}</h2>
                    </div>

                    {!! $data->company_description ?? '' !!}
                </div>
                <div class="col-md-6 animated triggerAnimation about-image" data-animate="zoomIn">
                    <img src="{{ $data->company_image ?? '' }}" alt="" />
                </div>
            </div>
        </div>
    </div>

    <div class="page-content background-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="custom-heading">
                        <h2>Our Vision</h2>
                    </div><!-- .custom-heading end -->

                    <h3>
                        Be the one of the best company to support
                        Material Handling equipment by providing the
                        best Value to our partner in Material Handling
                        solutions.
                    </h3>
                </div><!-- .col-md-6 end -->

                <div class="col-md-6">
                    <div class="custom-heading">
                        <h2>Our Mission</h2>
                    </div><!-- .custom-heading end -->

                    <ul class="fa-ul">
                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            Provide the best service and part supplies
                            for our products (After sales services is
                            the highest priority)
                        </li>

                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            Be the good partner in the material
                            handling solutions with the strongest
                            commitment (Service maintenance)
                        </li>

                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            Support in creating more benefit
                            to our business partner with
                            professional service,
                            comprehensive and sustainability.
                        </li>
                    </ul><!-- .fa-ul end -->
                </div><!-- .col-md-6 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div>

</div>