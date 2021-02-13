@extends('front.master')


@section ('page-title')
portfolio
@endsection



@section ('page-content')

    <!-- Banner Header -->
    <section class="section section-banner">
        <div class="container">
           <div class="row">
               <div class="col-xl-6 col-md-12 col-sm-12 col-12">
                 <h2 class="title-h2">Portfolio</h2>
                 <nav aria-label="breadcrumb">
                   <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="#">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
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

     <!-- Portfolio Tabs -->
     <section class="section section-portfolio">
         <div class="container">
            <ul class="nav nav-tabs nav-tabs-portfolio" id="Portfolio" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="true">All</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="design-tab" data-toggle="tab" href="#design" role="tab" aria-controls="design" aria-selected="false">UI/UX Design</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="web-tab" data-toggle="tab" href="#web" role="tab" aria-controls="web" aria-selected="false">Web Development</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="seo-tab" data-toggle="tab" href="#seo" role="tab" aria-controls="seo" aria-selected="false">SEO Optimization</a>
                  </li>
              </ul>
              <div class="tab-content tab-portfolio" id="myTabContent">
                <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                    <div class="box-portfolio">
                        <div class="box-portfolio-item">
                            <a href="portfolio-details.html">
                                <div class="portfolio-thumb portfolio-thumb-1">
                                    <div class="portfolio-thumb__info">
                                        <p class="portfolio-thumb__name">Clean design concept</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box-portfolio-item">
                            <a href="portfolio-details.html">
                                <div class="portfolio-thumb portfolio-thumb-2">
                                    <div class="portfolio-thumb__info">
                                        <p class="portfolio-thumb__name">Clean design concept</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box-portfolio-item">
                            <a href="portfolio-details.html">
                                <div class="portfolio-thumb portfolio-thumb-3">
                                    <div class="portfolio-thumb__info">
                                        <p class="portfolio-thumb__name">Clean design concept</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box-portfolio-item">
                            <a href="portfolio-details.html">
                                <div class="portfolio-thumb portfolio-thumb-4">
                                    <div class="portfolio-thumb__info">
                                        <p class="portfolio-thumb__name">Clean design concept</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box-portfolio-item">
                            <a href="portfolio-details.html">
                                <div class="portfolio-thumb portfolio-thumb-5">
                                    <div class="portfolio-thumb__info">
                                        <p class="portfolio-thumb__name">Clean design concept</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box-portfolio-item">
                            <a href="portfolio-details.html">
                                <div class="portfolio-thumb portfolio-thumb-6">
                                    <div class="portfolio-thumb__info">
                                        <p class="portfolio-thumb__name">Clean design concept</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="text-center">
                            <a href="" class="btn btn-primary">Load more</a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="design" role="tabpanel" aria-labelledby="design-tab">
                    <div class="box-portfolio">
                        <div class="box-portfolio-item">
                            <a href="portfolio-details.html">
                                <div class="portfolio-thumb portfolio-thumb-1">
                                    <div class="portfolio-thumb__info">
                                        <p class="portfolio-thumb__name">Clean design concept</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box-portfolio-item">
                            <a href="#">
                                <div class="portfolio-thumb portfolio-thumb-2">
                                    <div class="portfolio-thumb__info">
                                        <p class="portfolio-thumb__name">Clean design concept</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box-portfolio-item">
                            <a href="portfolio-details.html">
                                <div class="portfolio-thumb portfolio-thumb-3">
                                    <div class="portfolio-thumb__info">
                                        <p class="portfolio-thumb__name">Clean design concept</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box-portfolio-item">
                            <a href="portfolio-details.html">
                                <div class="portfolio-thumb portfolio-thumb-4">
                                    <div class="portfolio-thumb__info">
                                        <p class="portfolio-thumb__name">Clean design concept</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box-portfolio-item">
                            <a href="portfolio-details.html">
                                <div class="portfolio-thumb portfolio-thumb-5">
                                    <div class="portfolio-thumb__info">
                                        <p class="portfolio-thumb__name">Clean design concept</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box-portfolio-item">
                            <a href="portfolio-details.html">
                                <div class="portfolio-thumb portfolio-thumb-6">
                                    <div class="portfolio-thumb__info">
                                        <p class="portfolio-thumb__name">Clean design concept</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="text-center">
                            <a href="" class="btn btn-primary">Load more</a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="web" role="tabpanel" aria-labelledby="web-tab">
                    <div class="box-portfolio">
                        <div class="box-portfolio-item">
                            <a href="portfolio-details.html">
                                <div class="portfolio-thumb portfolio-thumb-1">
                                    <div class="portfolio-thumb__info">
                                        <p class="portfolio-thumb__name">Clean design concept</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box-portfolio-item">
                            <a href="portfolio-details.html">
                                <div class="portfolio-thumb portfolio-thumb-2">
                                    <div class="portfolio-thumb__info">
                                        <p class="portfolio-thumb__name">Clean design concept</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box-portfolio-item">
                            <a href="portfolio-details.html">
                                <div class="portfolio-thumb portfolio-thumb-3">
                                    <div class="portfolio-thumb__info">
                                        <p class="portfolio-thumb__name">Clean design concept</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box-portfolio-item">
                            <a href="portfolio-details.html">
                                <div class="portfolio-thumb portfolio-thumb-4">
                                    <div class="portfolio-thumb__info">
                                        <p class="portfolio-thumb__name">Clean design concept</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box-portfolio-item">
                            <a href="portfolio-details.html">
                                <div class="portfolio-thumb portfolio-thumb-5">
                                    <div class="portfolio-thumb__info">
                                        <p class="portfolio-thumb__name">Clean design concept</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box-portfolio-item">
                            <a href="portfolio-details.html">
                                <div class="portfolio-thumb portfolio-thumb-6">
                                    <div class="portfolio-thumb__info">
                                        <p class="portfolio-thumb__name">Clean design concept</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="text-center">
                            <a href="" class="btn btn-primary">Load more</a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="seo" role="tabpanel" aria-labelledby="seo-tab">
                    <div class="box-portfolio">
                        <div class="box-portfolio-item">
                            <a href="portfolio-details.html">
                                <div class="portfolio-thumb portfolio-thumb-1">
                                    <div class="portfolio-thumb__info">
                                        <p class="portfolio-thumb__name">Clean design concept</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box-portfolio-item">
                            <a href="portfolio-details.html">
                                <div class="portfolio-thumb portfolio-thumb-2">
                                    <div class="portfolio-thumb__info">
                                        <p class="portfolio-thumb__name">Clean design concept</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box-portfolio-item">
                            <a href="portfolio-details.html">
                                <div class="portfolio-thumb portfolio-thumb-3">
                                    <div class="portfolio-thumb__info">
                                        <p class="portfolio-thumb__name">Clean design concept</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box-portfolio-item">
                            <a href="portfolio-details.html">
                                <div class="portfolio-thumb portfolio-thumb-4">
                                    <div class="portfolio-thumb__info">
                                        <p class="portfolio-thumb__name">Clean design concept</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box-portfolio-item">
                            <a href="portfolio-details.html">
                                <div class="portfolio-thumb portfolio-thumb-5">
                                    <div class="portfolio-thumb__info">
                                        <p class="portfolio-thumb__name">Clean design concept</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box-portfolio-item">
                            <a href="portfolio-details.html">
                                <div class="portfolio-thumb portfolio-thumb-6">
                                    <div class="portfolio-thumb__info">
                                        <p class="portfolio-thumb__name">Clean design concept</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="text-center">
                            <a href="" class="btn btn-primary">Load more</a>
                        </div>
                    </div>
                </div>
              </div>
         </div>
         <div class="section-banner__box">
            <div class="section-banner__thumb">
                <img class="section-banner__img" src="https://via.placeholder.com/960x290" alt="Image Banner">
            </div>
        </div>
     </section>


    <h1>portfolio</h1>
    @foreach ($portfolio_list as $portfolio)

    <ul>
        <li>{{$portfolio->id}}</li>
        <li>{{$portfolio->image}}</li>
        <li>{{$portfolio->name}}</li>
        <li>{{$portfolio->description}}</li>
        <li>{{$portfolio->production_date}}</li>
        <li>{{$portfolio->category_id}}</li>
    </ul>
    @endforeach
@endsection
