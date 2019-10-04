@extends('layouts.master')
@section('title', 'Register')
@section('content')
<!--Intro-->
<section class="intro" >

        <div class="intro_item">

            <!-- Over -->
            <div class="over" data-opacity="0.4" data-color="#000"></div>
            <div class="into_back image_bck"  data-image="images/back3.jpg"></div>


            <div class="inside_intro_block">
                <div class="ins_int_item white_txt bordered_wht_border text-center">
                    <div class="simple_block simple_block_sml">
                        <h4>Register Here</h4>
                        <form>
                            <input type="text" class="form-control form-opacity" placeholder="Username">
                            <input type="text" class="form-control form-opacity" placeholder="E-mail Address">
                            <input type="password" class="form-control form-opacity" placeholder="Password">
                            <input type="password" class="form-control form-opacity" placeholder="Confirm Password">
                            <input type="submit" class="btn btn-white btn-block no-margin" value="Register">
                            <small>By signing up, you agree to our <a href="#">Terms Of Use</a></small>
                        </form>
                    </div>
                </div>
            </div>

        </div>

</section>
<!-- Intro End -->
@endsection
