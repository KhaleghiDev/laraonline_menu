<div class="about">
    <div class="container">
        <h2 class="header-about">{{__('messages.big_Company')}}</h2>
        <div class="row">
            <div class="box-about">
                <div class="box-title mb-3">
                    <i class="fa-solid fa-users"></i>
                    <h3 class="text-white">{{__('messages.Established')}}</h3>
                </div>
                <p class="box-white">
                {{__('messages.text_Established')}}
                </p>
            </div>
            <div class="box-about">
                <div class="box-title mb-3  d-none">
                    <i class="fa-solid fa-certificate"></i>
                    <h3 class="text-white">{{__('messages.Certificates')}}</h3>
                </div>
                <p class="box-white">
                    <swiper-container class="mySwiper" pagination="true" effect="coverflow" grab-cursor="true"
                        centered-slides="true" slides-per-view="auto" coverflow-effect-rotate="50"
                        coverflow-effect-stretch="0" coverflow-effect-depth="100" coverflow-effect-modifier="1"
                        coverflow-effect-slide-shadows="true">
                        <swiper-slide>
                            <img src="{{ asset("frontend_file/assets/img/Certificate/1.jpg") }}" />
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
            <div class="box-about">
                <div class="box-title mb-3 d-none">
                    <i class="fa fa-drivers-license"></i>
                    <h3 class="text-white"> مجوز های شرکت </h3>
                </div>
                <p class="box-white">
                    <swiper-container class="mySwiper2" pagination="true" effect="coverflow" grab-cursor="true"
                        centered-slides="true" slides-per-view="auto" coverflow-effect-rotate="50"
                        coverflow-effect-stretch="0" coverflow-effect-depth="100" coverflow-effect-modifier="1"
                        coverflow-effect-slide-shadows="true">
                        <swiper-slide>
                            <img src="{{ asset("frontend_file/assets/img/role/1.jpg") }}" />
                        </swiper-slide>
                        <swiper-slide>
                            <img src="{{ asset("frontend_file/assets/img/role/2.jpg") }}" />
                        </swiper-slide>
                        <swiper-slide>
                            <img src="{{ asset("frontend_file/assets/img/role/3.jpg") }}" />
                        </swiper-slide>
                    </swiper-container>
                </p>
            </div>
        </div>
    </div>
</div>
