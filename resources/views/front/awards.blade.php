@extends('front.master')


@section ('page-title')
Awards
@endsection



@section ('page-content')
    <!-- Banner Header -->
    <section class="section section-banner">
        <div class="container">
           <div class="row">
               <div class="col-xl-6 col-md-12 col-sm-12 col-12">
                 <h2 class="title-h2">Awards</h2>
                 <nav aria-label="breadcrumb">
                   <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="/">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Award</li>
                   </ol>
                 </nav>
               </div>
             </div>
        </div>
        <div class="section-banner__box">
           <div class="section-banner__thumb">
               <img class="section-banner__img" src="https://via.placeholder.com/960x290" alt="Image Banner">
           </div>
       </div>
    </section>




     <section class="section section-blog section-blog--full">
        <div class="container">

            <div class="row-blog">
    @foreach ($award_list as $award)
                <div class="col-post">
                    <div class="thumb-blog thumb-blog-1">
                        <div class="post-date">{{$award->date}}</div>
                    </div>
                    <h3 class="title-h3 line-clamp">
                        <a href="/award/{{$award->id}}">{{$award->title}}</a>
                    </h3>
                    <p class="description line-clamp">{{$award->description}}</p>
                    <a class="btn-text btn-text-img" href="/award/{{$award->id}}">Read more</a>
                </div>
    @endforeach
            </div>
        </section>
@endsection
