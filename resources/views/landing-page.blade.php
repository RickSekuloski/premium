
@extends('layouts.app')

@section('hero')
 @include('inc.hero')
@endsection

@section('content')
<div class="row">
    <div class="card-wrapper col-md-6">
        <!--card start -->
        <div class="card">
            <div class="carousel-item active">
                <img src="img/ramiro-mendes-CjS3QsRuxnE-unsplash.jpg" alt="Front Img" class="card__img">
            </div>
            <h1 class="card__title">This is the post title</h1>
            <button type="button" class="card__btn slide-toggle" id="2">
                <i class="fa fa-chevron-right"></i>
            </button>
        </div><!--card end -->

        <div class="content 2" style="display: none;">
            <div class="content__box">
                <p class="heading__secondary content__box--title">
                    The title of the post
                </p>
                <div class="d-flex justify-content-between mb-2">
                 <p class="content__box--author">Written By: Rick Sekuloski</p>   
                 <p class="content__box--date">24/09/2021</p>
                </div>
                <p class="content__box--body">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non maiores optio vitae voluptate repudiandae doloremque unde cupiditate et nulla nihil. Animi aliquid nulla repellendus hic enim ex cum eum accusantium?
                </p>
                <a href="#" class="read-more">Read More <span>&#8594</span></a>
            </div>
        </div><!--content end -->

    </div><!--card wrapper end -->



    <div class="card-wrapper col-md-6">
     <!--card start -->
     <div class="card">
         <div class="carousel-item active">
             <img src="img/ramiro-mendes-CjS3QsRuxnE-unsplash.jpg" alt="Front Img" class="card__img">
         </div>
         <h1 class="card__title">This is the post title</h1>
         <button type="button" class="card__btn slide-toggle" id="1">
             <i class="fa fa-chevron-right"></i>
         </button>
     </div><!--card end -->

     <div class="content 1" style="display: none;">
         <div class="content__box">
             <p class="heading__secondary content__box--title">
                 The title of the post
             </p>
             <div class="d-flex justify-content-between mb-2">
              <p class="content__box--author">Written By: Rick Sekuloski</p>   
              <p class="content__box--date">24/09/2021</p>
             </div>
             <p class="content__box--body">
                 Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non maiores optio vitae voluptate repudiandae doloremque unde cupiditate et nulla nihil. Animi aliquid nulla repellendus hic enim ex cum eum accusantium?
             </p>
             <a href="#" class="read-more">Read More <span>&#8594</span></a>
         </div>
     </div><!--content end -->

 </div><!--card wrapper end -->

 </div><!--row  end -->
@endsection

       
 
 
@section('scripts')
<script
src="https://code.jquery.com/jquery-3.4.1.js"
integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
crossorigin="anonymous">
 </script>
 <!-- Js Scripts -->
 <script src="{{ asset('js/postToggle.js') }}" ></script>
@stop

