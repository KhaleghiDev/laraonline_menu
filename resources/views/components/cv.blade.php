<style>
    .box-title {
  
    position: unset;
    background:unset;
    margin-top: unset;
    border-radius:5px;
}
    </style>
<div class="cv">
    <div class="container">
        <div class="header-page">
            <h1><span>{{ __('messages.Resume_founder') }}</span></h1>
        </div>
        <img class="profile" src="{{ asset('frontend_file/assets/img/profile.jpg') }}" alt="hossine-yaghobi">
        <h2 class="header-about"> {{ __('messages.more_about_Engineer_Hossein_Yaghoubi') }}</h2>
        <div class="box-about">
            <div class="box-title mb-3">
                <i class="fa-solid fa-address-card"></i>
                <h3 class="text-white"> {{ __('messages.about_Hossein_Yaghoubi') }}</h3>
            </div>

            <div class="row m-2">
                <div class="col-12 box-white">
                    <div class="box-title mb-3">
                        <i class="fa-solid fa-comments"></i>
                        <h3 class="color-text-all">{{ __('messages.about_Hossein_Yaghoubi') }}</h3>
                    </div>
                    <ul class="list-number">
                        <li>{{ __('messages.line_iraq') }} :<a href="tel:0964780248881"> 00964780248881</a>
                        </li>
                        <li>{{ __('messages.line_iran') }} :<a href="tel:09020098798">09020098798 </a></li>
                        <li class="d-none">واتساپ {{ __('messages.about_Hossein_Yaghoubi') }}:<strong class="h4"><a target="_self" href="https://wa.me/989020098798" title="WhatsApp">
                                    <i class="text-success fa-brands fa-whatsapp"></i>
                                </a></strong>
                        </li>
                    </ul>
                    <div class="box-title mb-3">
                        <i class="fa-solid fa-building-columns"></i>
                        <h3 class="color-text-all">{{ __('messages.Educational_qualifications') }} </h3>
                    </div>
                    <ul class="list-building">
                        <li> <span>{{ __('messages.Bachelor_Science_Genetic_Engineering') }}</span></li>
                        <li> <span>{{ __('messages.Master_Degree_Genetic_Engineering_Breeding') }} </span></li>
                        <li> <span>{{ __('messages.Master_Business_Administration_International_Business_Major') }}</span></li>
                    </ul>


                    <div class="box-title mb-3">
                        <i class="fa-solid fa-certificate"></i>
                        <h3 class="color-text-all">{{ __('messages.Skills') }} </h3>
                    </div>
                    <span>{{ __('messages.English') }} </span>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>{{ __('messages.Neuro_Linguistic_Programming_skills') }} </span>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 78%" aria-valuenow="78"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>{{ __('messages.Arabic') }} </span>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="80"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>{{ __('messages.ICDL') }}  </span>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="80"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>{{ __('messages.Management_public_speaking_skills') }} </span>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 95%" aria-valuenow="95"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

            </div>
            <div class="row m-2">
                <div class="col-12 box-white">
                    <div class="box-title mb-3">
                        <i class="fa-solid fa-address-card"></i>
                        <h3 class="color-text-all">{{ __('messages.about_us') }}</h3>
                    </div>
                    <p class="color-text-all">
                    {{ __('messages.about_discription') }}
            
                    </p>

                </div>
            </div>
        </div>
        <div class="box-about">
            <div class="box-title mb-3">
                <i class="fa-solid fa-gallery-thumbnails"></i>
                <h3> {{ __('messages.Image_Gallery') }}</h3>
            </div>
            <p class="box-white">
                <swiper-container class="mySwiper" pagination="true" effect="coverflow" grab-cursor="true"
                    centered-slides="true" slides-per-view="auto" coverflow-effect-rotate="50"
                    coverflow-effect-stretch="0" coverflow-effect-depth="100" coverflow-effect-modifier="1"
                    coverflow-effect-slide-shadows="true">
                    <swiper-container class="mySwiper" pagination="true" effect="coverflow" grab-cursor="true"
                    centered-slides="true" slides-per-view="auto" coverflow-effect-rotate="50"
                    coverflow-effect-stretch="0" coverflow-effect-depth="100" coverflow-effect-modifier="1"
                    coverflow-effect-slide-shadows="true">
                    <swiper-slide>
                        <img src="{{ asset("frontend_file/assets/img/1.jpg") }}" />
                    </swiper-slide>
                    <swiper-slide>
                        <img src="{{ asset("frontend_file/assets/img/2.jpg") }}" />
                    </swiper-slide>
                    <swiper-slide>
                        <img src="{{ asset("frontend_file/assets/img/3.jpg") }}" />
                    </swiper-slide>
                    <swiper-slide>
                        <img src="{{ asset("frontend_file/assets/img/4.jpg") }}" />
                    </swiper-slide>
                    <swiper-slide>
                        <img src="{{ asset("frontend_file/assets/img/5.jpg") }}" />
                    </swiper-slide>
                    <swiper-slide>
                        <img src="{{ asset("frontend_file/assets/img/6.jpg") }}" />
                    </swiper-slide>
                    <swiper-slide>
                        <img src="{{ asset("frontend_file/assets/img/7.jpg") }}" />
                    </swiper-slide>
                </swiper-container>
            </p>
        </div>
        <div class="box-about cv-certificate">
            <div class="box-title mb-3">
                <i class="fa fa-drivers-license"></i>
                <h3> {{ __('messages.Letters_Appreciation') }}</h3>
            </div>
            <p class="box-white">
                <swiper-container class="mySwiper2" pagination="true" effect="coverflow" grab-cursor="true"
                    centered-slides="true" slides-per-view="auto" coverflow-effect-rotate="50"
                    coverflow-effect-stretch="0" coverflow-effect-depth="100" coverflow-effect-modifier="1"
                    coverflow-effect-slide-shadows="true">
                    <swiper-slide>
                        <img src="{{ asset("frontend_file/assets/img/Certificate/1.jpg") }}"/>
                    </swiper-slide>
                    <swiper-slide>
                        <img src="{{ asset("frontend_file/assets/img/Certificate/2.jpg") }}" />
                    </swiper-slide>
                    <swiper-slide>
                        <img src="{{ asset("frontend_file/assets/img/Certificate/3.jpg") }}" />
                    </swiper-slide>
                </swiper-container>


            </p>
        </div>
    </div>
</div>
</div>