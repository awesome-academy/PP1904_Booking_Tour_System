@extends('layouts.master')
@section('title', '404')
@section('content')
<!--Intro-->
<section class="intro" >

        <div class="intro_item">

            <!-- Over -->
            <div class="over" data-opacity="0.1" data-color="#000"></div>
            <div class="into_back image_bck"  data-image="images/lost.jpg"></div>


            <div class="inside_intro_block inside_no_header">
                <div class="ins_int_item white_txt bordered_wht_border text-center">
                    <div class="simple_block simple_block_sml">
                        <h3>404</h3>
                        <h4>
                            The page you were looking for could not be found.
                        </h4>
                        <a href="#" class="btn btn-white"><i class="ti-angle-left"></i> Back to Home Page</a>

                    </div>
                </div>
            </div>

        </div>

</section>
<!-- Intro End -->
@endsection
