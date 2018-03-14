@extends('layout')

@section('content')
<div class="container-fluid">
     <div class="row">
         <div class="col-sm-12 mh-50">
             <div class="swiper-container">
                 <div class="swiper-wrapper">
                     <div id="step1" class="step stepOdd swiper-slide">
                         <div class="col-sm-12 col-md-4 stepCol stepColCircle">
                             <!-- <span class="arrowRond"></span> -->
                             <div class="stepCircle">
                                 <div class="stepCircleText">
                                     @lang('content.step1.circle')
                                 </div>
                             </div>
                         </div>
                         <div class="col-md-3 stepCol stepColArrow stepArrowHorizontal">
                             <span class="stepArrow"></span>
                             <img src="{{url('/image/icon/iconArrow.svg')}}" class="stepArrowImg"/>
                         </div>
                         <div class="col-sm-12 col-md-5 stepCol stepColContent">
                             <div class="stepContent img-thumbnail">
                                 <h2 class="stepContentTitle">
                                     @lang('content.step1.title')
                                 </h2>
                                 <p class="stepContentText">
                                     @lang('content.step1.text')
                                 </p>
                             </div>
                             <div class="stepArrowVertical stepArrowVerticalBottom">
                                 <span class="stepArrow"></span>
                             </div>
                         </div>
                         <div class="swiper-pagination"></div>
                     </div>
                     <div id="step2" class="step stepEven swiper-slide">
                         <div class="col-sm-12 col-md-4 stepCol stepColCircle">
                             <div class="stepCircle">
                                 <div class="stepArrowVertical stepArrowVerticalTop">
                                     <span class="stepArrow"></span>
                                     <img src="{{url('/image/icon/iconArrow.svg')}}" class="stepArrowImg"/>
                                 </div>
                                 <div class="stepCircleText">
                                     @lang('content.step2.circle')
                                 </div>
                             </div>
                         </div>
                         <div class="col-md-3 stepCol stepColArrow stepArrowHorizontal">
                             <img src="{{url('/image/icon/iconArrow.svg')}}" class="stepArrowImg"/>
                             <span class="stepArrow"></span>
                         </div>
                         <div class="col-sm-12 col-md-5 stepCol stepColContent">
                             <div class="stepContent img-thumbnail">
                                 <h2 class="stepContentTitle">
                                     @lang('content.step2.title')
                                 </h2>
                                 <p class="stepContentText">
                                     @lang('content.step1.text')
                                 </p>
                             </div>
                             <div class="stepArrowVertical stepArrowVerticalBottom">
                                 <span class="stepArrow"></span>
                             </div>
                         </div>
                         <div class="swiper-pagination"></div>
                     </div>
                     <div id="step3" class="step stepOdd swiper-slide">
                         <div class="col-sm-12 col-md-4 stepCol stepColCircle">
                             <div class="stepCircle">
                                 <div class="stepArrowVertical stepArrowVerticalTop">
                                     <span class="stepArrow"></span>
                                     <img src="{{url('/image/icon/iconArrow.svg')}}" class="stepArrowImg"/>
                                 </div>
                                 <div class="stepCircleText">
                                     @lang('content.step3.circle')
                                 </div>
                             </div>
                         </div>
                         <div class="col-md-3 stepCol stepColArrow stepArrowHorizontal">
                             <span class="stepArrow"></span>
                             <img src="{{url('/image/icon/iconArrow.svg')}}" class="stepArrowImg"/>
                         </div>
                         <div class="col-sm-12 col-md-5 stepCol stepColContent">
                             <div class="stepContent img-thumbnail">
                                 <h2 class="stepContentTitle">
                                     @lang('content.step3.title')
                                 </h2>
                                 <p class="stepContentText">
                                     @lang('content.step3.text')
                                 </p>
                             </div>
                             <div class="stepArrowVertical">
                                 <span class="stepArrow"></span>
                             </div>
                         </div>
                         <div class="swiper-pagination"></div>
                     </div>
                     <div id="step4" class="step stepEven swiper-slide">
                         <div class="col-sm-12 col-md-4 stepCol stepColCircle">
                             <div class="stepCircle">
                                 <div class="stepArrowVertical stepArrowVerticalTop">
                                     <span class="stepArrow"></span>
                                     <img src="{{url('/image/icon/iconArrow.svg')}}" class="stepArrowImg"/>
                                 </div>
                                 <div class="stepCircleText">
                                     @lang('content.step4.circle')
                                 </div>
                             </div>
                         </div>
                         <div class="col-md-3 stepCol stepColArrow stepArrowHorizontal">
                             <img src="{{url('/image/icon/iconArrow.svg')}}" class="stepArrowImg"/>
                             <span class="stepArrow"></span>
                         </div>
                         <div class="col-sm-12 col-md-5 stepCol stepColContent">
                             <div class="stepContent img-thumbnail">
                                 <h2 class="stepContentTitle">
                                     @lang('content.step4.title')
                                 </h2>
                                 <p class="stepContentText">
                                     @lang('content.step4.text')
                                 </p>
                             </div>
                             <div class="stepArrowVertical stepArrowVerticalBottom">
                                 <span class="stepArrow"></span>
                             </div>
                         </div>
                         <div class="swiper-pagination"></div>
                     </div>
                     <div id="step5" class="step stepOdd swiper-slide">
                         <div id="stepNewsletter" class="col-sm-12">
                             <div id="newsletter">
                                 <p class="stepNewsletterText">@lang('content.form.text')</p>
                             </div>
                             <div class="form-horizontal stepNewsletterForm">
                                 {!! Form::open(['url' => '/index/' , 'method' => 'POST']) !!}
                                    <div class="form-group has-success has-feedback">
                                        <div class="input-group form-group">
                                            <span class="input-group-addon">@</span>
                                            {!! Form::email('email', '', ['placeholder' => __('content.form.email'),'class' => 'form-control stepNewsletterFormEmail']) !!}
                                        </div>
                                    </div>
                                {{ csrf_field() }}
                                {!! Form::submit(__('content.form.button'), ['id' => 'email' , 'class' => 'btn btn-lg active stepNewsletterFormButton'])!!}
                                {!! Form::close() !!}
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div id="step6" class="stepEven swiper-slide">
                        <div class="row">
                            <div class="container-fluid" id="stepSocialNetworks">
                                <div id="reseaux1">
                                    <div id="reseau1" class="reseau">
                                    </div>
                                    <div id="reseau2" class="reseau">
                                    </div>
                                    <div id="reseau3" class="reseau">
                                    </div>
                                    <div id="reseau4" class="reseau">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

