@extends('front.master')


@section ('page-title')
    Blog Item
@endsection



@section ('page-content')

    <!-- Banner Header -->
    <section class="section section-banner">
        <div class="container">
           <div class="row">
               <div class="col-xl-6 col-md-12 col-sm-12 col-12">
                 <h2 class="title-h2">How to Get More Sales</h2>
                 <nav aria-label="breadcrumb">
                   <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                     <li class="breadcrumb-item"><a href="blog.html">Blog</a></li>
                     <li class="breadcrumb-item active" aria-current="page">How to get more sales</li>
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

    <!--Post -->

    <section class="section section-description">
        <div class="container">
            <div class="row row-post">
              <div class="col-xl-9 col-md-12 col-sm-12 col-12">
                <div class="thumb-post">
                    <img class="thumb-post__img" src="https://via.placeholder.com/848x390" alt="App Development">
                </div>
                <div class="post-info">
                    <div class="post-info-item">
                        <a class="post-info__link" href=""><i class="zmdi zmdi-account-o"></i>by Paul Kemplys</a>
                        <span class="post-info__text"><i class="zmdi zmdi-calendar"></i>Oct 12, 2019</span>
                        <a class="post-info__link" href=""><i class="zmdi zmdi-comment-outline"></i>2 comments</a>
                    </div>
                    <div class="post-info-item">
                        <a class="post-info__link" href=""><i class="zmdi zmdi-share"></i>Share</a>
                    </div>
                </div>
                <div class="box-post">
                    <h1 class="title-post">Do You Really Want to Encrease Your Sales?</h1>
                    <p class="post-description">Mobile app development is the act or process by which a mobile app is developed for mobile devices, enterprise digital assistants or mobile phones.</p>
                    <p>These applications can be pre-installed on phones during manufacturing platforms, or delivered as web applications using server-side or client-side processing (e.g., JavaScript) to provide an "application-like" experience within a Web browser. Application software developers also must consider a long array of screen sizes, hardware specifications.</p>
                    <p>Mobile app development is the act or process by which a mobile app is developed for mobile devices, such as personal <a href="">digital assistants</a>, enterprise digital assistants or mobile phones. These applications can be pre-installed on phones during manufacturing platforms, or delivered as web applications using server-side or client-side processing (e.g., JavaScript) to provide an "application-like" experience within a Web browser. Application software developers also must consider a long array of screen sizes, hardware specifications. Mobile app development is the act or process by which a mobile app is developed for mobile devices, such as personal digital assistants, enterprise digital assistants or mobile phones. These applications can be pre-installed on phones during manufacturing platforms, or delivered as web applications using server-side or client-side processing (e.g., JavaScript) to provide an "application-like".</p>
                    <ul class="box-tag">
                        <li class="box-tag-item"><strong>Tags:</strong></li>
                        <li class="box-tag-item"><a class="box-tag__link" href=""> #technology</a></li>
                        <li class="box-tag-item"><a class="box-tag__link" href="">#product</a></li>
                        <li class="box-tag-item"><a class="box-tag__link" href="">#business</a></li>
                        <li class="box-tag-item"><a class="box-tag__link" href="">#money</a></li>
                    </ul>
                </div>
                <div class="box-preview">
                    <div class="previous">
                        <i class="zmdi zmdi-arrow-left"></i>
                        <a href="" class="box-preview-link">
                            <span>Previous post</span>
                            Site Development for IT Company
                        </a>
                    </div>
                    <div class="next">
                        <a href="" class="box-preview-link">
                            <span>Previous post</span>
                            SEO Optimization for Bundus
                        </a>
                        <i class="zmdi zmdi-arrow-right"></i>
                    </div>
                </div>
                <div class="box-author">
                    <div class="box-author-item box-author--img">
                        <div class="box-author__thumb">
                            <img class="box-author__img" src="https://via.placeholder.com/190x190" alt="Paul Kemplys">
                        </div>
                    </div>
                    <div class="box-author-item">
                        <p class="box-author__name">Paul Kemplys</p>
                        <p class="box-author__description">Paul has been engaged in product promotion and sales growth for many years. His experience is 8 years in this area, he has already managed to reach notable heights.</p>
                        <a href="#" class="btn-text btn-text-img">View all posts</a>
                    </div>
                </div>
                <div class="box-comment">
                    <h2 class="title-post">Comments (2)</h2>
                    <div class="comment">
                        <div class="comment-ava">
                            <div class="comment__thumb">
                                <img class="comment__img" src="https://via.placeholder.com/190x190" alt="Paul Kemplys">
                            </div>
                        </div>
                        <div class="comment-info">
                            <div class="comment-header">
                                <p class="comment__name">Mike Slaw</p>
                                <p class="comment__date">Oct 12, 2019</p>
                                <p class="comment__time">5:21 PM</p>
                            </div>
                            <div class="comment-body">
                                <p class="comment__text">
                                    Very helpful article. Now I understand how everything works. I learned new tools for myself, and now I really see that the number of sales is increasing.
                                </p>
                            </div>
                            <div class="comment-footer">
                                <a class="btn-text" href="#">Reply</a>
                            </div>

                        </div>
                    </div>
                    <div class="comment">
                        <div class="comment-ava">
                            <div class="comment__thumb">
                                <img class="comment__img" src="https://via.placeholder.com/190x190" alt="Paul Kemplys">
                            </div>
                        </div>
                        <div class="comment-info">
                            <div class="comment-header">
                                <p class="comment__name">Mike Slaw</p>
                                <p class="comment__date">Oct 12, 2019</p>
                                <p class="comment__time">5:21 PM</p>
                            </div>
                            <div class="comment-body">
                                <p class="comment__text">
                                    Very helpful article. Now I understand how everything works. I learned new tools for myself, and now I really see that the number of sales is increasing.
                                </p>
                            </div>
                            <div class="comment-footer">
                                <a class="btn-text" href="#">Reply</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="box-contact">
                    <h2 class="title-post">Leave a Comment</h2>
                    <form action="#">
                        <div class="form">
                            <div class="form-item">
                                <input class="form__input" type="text" placeholder="First name">
                            </div>
                            <div class="form-item">
                                <input class="form__input" type="email" placeholder="Email address">
                            </div>
                            <div class="form-item w-100">
                                <textarea class="form__textarea" rows="3" placeholder="Enter your massage"></textarea>
                            </div>
                            <div class="form-item">
                                <button type="submit" class="btn btn-primary">Post comment</button>
                            </div>
                        </div>
                    </form>
                </div>
              </div>
              <div class="col-xl-3 col-md-12 col-sm-12 col-12 sidebar">
                <div class="sidebar-item">
                    <div class="sidebar-letter">
                        <input type="search" class="form-control mb-2" id="inlineFormInput" placeholder="Search">
                        <button type="submit" class="btn btn-primary mb-2"><i class="zmdi zmdi-search"></i></button>
                    </div>
                </div>
                <div class="sidebar-item sidebar--bg">
                    <h3 class="title-h3">Services</h3>
                    <ul class="list-category">
                        <li class="list-category__item">
                            <a class="list-category__link" href="">Brand Identity</a>
                        </li>
                        <li class="list-category__item">
                            <a class="list-category__link" href="">Marketing Strategy</a>
                        </li>
                        <li class="list-category__item">
                            <a class="list-category__link" href="">App Development</a>
                        </li>
                        <li class="list-category__item">
                            <a class="list-category__link" href="">eCommerce</a>
                        </li>
                        <li class="list-category__item">
                            <a class="list-category__link" href="">Landing Pages</a>
                        </li>
                        <li class="list-category__item">
                            <a class="list-category__link" href="">SEO & SMM</a>
                        </li>
                    </ul>
                </div>
                <div class="sidebar-item">
                    <h3 class="title-h3">Newsletter</h3>
                    <div class="sidebar-letter">
                        <input type="email" class="form-control mb-2" id="inlineFormInput2" placeholder="Enter your email">
                        <button type="submit" class="btn btn-primary mb-2"><i class="zmdi zmdi-mail-send"></i></button>
                    </div>
                </div>
                <div class="sidebar-item">
                    <h3 class="title-h3">Recent Posts</h3>
                    <a class="post-link" href="#">
                        <div class="post-link__img"></div>
                        <span class="post-link__text line-clamp">Have you ever thought about care</span>
                    </a>
                    <a class="post-link" href="#">
                        <div class="post-link__img"></div>
                        <span class="post-link__text line-clamp">How to create an amazing design for your site without</span>
                    </a>
                    <a class="post-link" href="#">
                        <div class="post-link__img"></div>
                        <span class="post-link__text line-clamp">Have you ever thought about care</span>
                    </a>
                </div>
                <div class="sidebar-item sidebar--bg">
                    <h3 class="title-h3">Tags</h3>
                    <ul class="sidebar-tag">
                        <li class="sidebar-tag-item"><a class="sidebar-tag__link" href="">#money</a></li>
                        <li class="sidebar-tag-item"><a class="sidebar-tag__link" href="">#technology</a></li>
                        <li class="sidebar-tag-item"><a class="sidebar-tag__link" href="">#product</a></li>
                        <li class="sidebar-tag-item"><a class="sidebar-tag__link" href="">#business</a></li>
                        <li class="sidebar-tag-item"><a class="sidebar-tag__link" href="">#promotion</a></li>
                        <li class="sidebar-tag-item"><a class="sidebar-tag__link" href="">#digital</a></li>
                        <li class="sidebar-tag-item"><a class="sidebar-tag__link" href="">#design</a></li>
                        <li class="sidebar-tag-item"><a class="sidebar-tag__link" href="">#marketing</a></li>
                    </ul>
                </div>
            </div>
            </div>
        </div>
    </section>

    <!-- Video Work -->

    <section class="section section-work">
        <div class="video-work">
            <button type="button" class="video-play" data-toggle="modal" data-target="#videoModal">
                <img class="video-play__img" src="https://via.placeholder.com/945x637" alt="Video">
            </button>
        </div>
        <div class="container">
            <div class="row">
              <div class="col-md-12 offset-md-12 col-lg-5 offset-lg-7">
                <p class="before-title">see us working</p>
				<h2 class="title-h2">Watch Our Working Process</h2>
				<p class="after-title">Setting up a good workflow is not so easy. But we can do everything.</p>
				<p class="description">Every morning in our company begins with hot coffee and a stand-up. Discussion is an important thing in the development process. Thus new ideas and ingenious solutions are born. Then we get to work with renewed vigor and inspiration. We are never bored.</p>
              </div>
            </div>
        </div>
    </section>

    <!-- Clients -->

    <section class="section section-services">
        <div class="container">

            <p class="before-title text-center">view more cases</p>
            <h2 class="title-h2 text-center">Related Works</h2>
            <p class="text-center after-title">We have many more similar and successful cases. Take a look and you can truly appreciate the level of our skills.</p>

            <div class="box-case box-case--static">
                <div class="row row-cols-3 row-case">
                    <div class="col col-case">
                        <div class="case-item case-1">
                            <div class="team-info">
                                <p class="team-name">Clean design concept</p>
                            </div>
                        </div>
                    </div>
                    <div class="col col-case">
                        <div class="case-item case-2">
                            <div class="team-info">
                                <p class="team-name">Clean design concept</p>
                            </div>
                        </div>
                    </div>
                    <div class="col col-case">
                        <div class="case-item case-3">
                            <div class="team-info">
                                <p class="team-name">Clean design concept</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
