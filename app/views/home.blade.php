@extends('layout.main')

@section('content')
    
@include('layout.mainbanner')

<section>
    <div class="container">
        <div class="row v-align-children">
            <div class="col-md-5 col-sm-6 text-center mb-xs-24">
                <a href="#">
                    <h2 class="uppercase  mb16">WICKY GAO'S INSTAGRAM</h2>
                </a>
                <h6 class="uppercase">Follow Me</h6>
                <p class="lead mb0">
                    Love Life.
                </p>
                <p class="lead mb0">
                    Love Food.
                </p>
                <p class="lead mb0">
                    Love Coding.
                </p>
            </div>
            <div class="col-md-7 col-sm-6 text-center">
                <div class="instafeed grid-gallery" data-user-name="wickygao">
                    <ul></ul>
                </div>
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>

@stop