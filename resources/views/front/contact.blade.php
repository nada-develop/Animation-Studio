@extends('front.master')


@section ('page-title')
Contact
@endsection



@section ('page-content')

     <!-- Banner Header -->
     <section class="section section-banner">
        <div class="container">
           <div class="row">
               <div class="col-xl-6 col-md-12 col-sm-12 col-12">
                 <h2 class="title-h2">Contact us</h2>
                 <nav aria-label="breadcrumb">
                   <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="#">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Contact us</li>
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

   <!-- Contact Info -->
   <section class="section section-contact">
       <div class="container">

           <p class="before-title text-center">Be in touch</p>
           <h2 class="title-h2 text-center">Contact Info</h2>
           <p class="text-center after-title">We tried to provide you with the most necessary information, so that it would be easier for you to contact us in any way convenient for you.</p>

           <div class="row-contact">
           <div class="col-contact">
               <img src="img/icons/call.svg" alt="">
               <h3 class="title-h3">Call us</h3>
               <ul class="col-contact__list">
                   <li class="col-contact__list-item"><span>Phone:</span> {{ $details->phone }}</li>
                   <li class="col-contact__list-item"><span>Mob Num:</span> {{ $details->mobile1 }}</li>
                   <li class="col-contact__list-item"><span>Mob Num 2:</span> {{ $details->mobile2 }}</li>
               </ul>
           </div>
           <div class="col-contact">
               <img src="img/icons/speech-bubble.svg" alt="">
               <h3 class="title-h3">Chat us</h3>
               <ul class="col-contact__list">
                   <li class="col-contact__list-item"><span>Facebook:</span> <a href="{{ $details->facebook_link }}">Visit Page</a></li>
                   <li class="col-contact__list-item"><span>Instagram:</span> <a href="{{ $details->instagram_link }}">Visit Account</a></li>
               </ul>
           </div>
           <div class="col-contact">
               <img src="img/icons/location.svg" alt="">
               <h3 class="title-h3">Visit us</h3>
               <ul class="col-contact__list">
                   <li class="col-contact__list-item"><span>Address:</span> {{ $details->address }}</li>
               </ul>
           </div>
           <div class="col-contact">
               <img src="img/icons/clock.svg" alt="">
               <h3 class="title-h3">Working hours</h3>
               <ul class="col-contact__list">
                   <li class="col-contact__list-item"><span>Mon - Fri:</span> 9 am till 6 pm</li>
                   <li class="col-contact__list-item"><span>Sat, Sun:</span> closed</li>
               </ul>
           </div>
           </div>
       </div>
   </section>

   <section class="section section-map">
       <iframe class="iframe-map" src="https://maps.google.com/maps?&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street%2C%20Dublin%2C%20Ireland+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed"></iframe>
   </section>

   <!-- Form -->
   <section class="section section-form">
       <div class="container">

           <p class="before-title text-center">let’s talk</p>
           <h2 class="title-h2 text-center">Send Us a Massage</h2>
           <p class="text-center after-title">We are always happy to talk with you. Be sure to write to us if you have any questions or need help and support.</p>

           <form method="post" action="#" id="contact-form">
               <div class="form">
                   <div class="response"></div>
                   <div class="form-item">
                       <input class="form__input name" type="text" placeholder="First name">
                   </div>
                   <div class="form-item">
                       <input class="form__input" type="text" placeholder="Last name">
                   </div>
                   <div class="form-item">
                       <input class="form__input email" type="email" placeholder="Email address">
                   </div>
                   <div class="form-item">
                       <input class="form__input" type="text" placeholder="Phone number">
                   </div>
                   <div class="form-item w-100">
                       <textarea class="form__textarea" rows="3" placeholder="Enter your massage"></textarea>
                   </div>
                   <div class="form-item text-center">
                       <button type="button" class="btn btn-primary" id="submit">Send</button>
                   </div>
               </div>
           </form>
       </div>
   </section>

@endsection
