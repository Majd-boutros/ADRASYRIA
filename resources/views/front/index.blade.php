@extends('layouts.front_layout.master')
@section('title')
    ADRA SYRIA
@endsection
@section('content')
    @include('layouts.front_layout.carousel')
    <div class="container">

            <div class="row first_title"><h3>OUR PROJECTS</h3></div>

            <div class="row our_project">
                <div class="col-md">
                    <div class="card" style="width: 18rem;">
                        <div class="image_card">
                            <img src="{{url('/images/front/3.jpg')}}" height="200" class="card-img-top" alt="ADRA IMAGES">
                        </div>
                        <div class="card-body">
                        <h5 class="card-title">Safe food in syria</h5>
                        <p class="card-text">Safe food in all countries in syria ..</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card" style="width: 18rem;">
                        <div class="image_card">
                            <img src="{{url('/images/front/2.jpg')}}" height="200" class="card-img-top" alt="ADRA IMAGES">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Safe food in syria</h5>
                            <p class="card-text">Safe food in all countries in syria ..</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card" style="width: 18rem;">
                        <div class="image_card">
                            <img src="{{url('/images/front/3.jpg')}}" height="200" class="card-img-top" alt="ADRA IMAGES">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Safe food in syria</h5>
                            <p class="card-text">Safe food in all countries in syria ..</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

        <!-- Start Our Team -->
        <section id="team" class="pb-5">
            <div class="container">
                <h5 class="section-title h1">OUR TEAM</h5>
                <div class="row">
                    <!-- Team member -->
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="image-flip" >
                            <div class="mainflip flip-0">
                                <div class="frontside">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_01.png" alt="card image"></p>
                                            <h4 class="card-title">Sunlimetech</h4>
                                            <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                            <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside">
                                    <div class="card">
                                        <div class="card-body text-center mt-4">
                                            <h4 class="card-title">Sunlimetech</h4>
                                            <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                        <i class="icon-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                        <i class="icon-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                        <i class="icon-skype"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                        <i class="icon-google"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ./Team member -->
                    <!-- Team member -->
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_02.png" alt="card image"></p>
                                            <h4 class="card-title">Sunlimetech</h4>
                                            <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                            <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside">
                                    <div class="card">
                                        <div class="card-body text-center mt-4">
                                            <h4 class="card-title">Sunlimetech</h4>
                                            <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                        <i class="icon-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                        <i class="icon-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                        <i class="icon-skype"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                        <i class="icon-google"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ./Team member -->
                    <!-- Team member -->
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_03.png" alt="card image"></p>
                                            <h4 class="card-title">Sunlimetech</h4>
                                            <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                            <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside">
                                    <div class="card">
                                        <div class="card-body text-center mt-4">
                                            <h4 class="card-title">Sunlimetech</h4>
                                            <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                        <i class="icon-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                        <i class="icon-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                        <i class="icon-skype"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                        <i class="icon-google"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ./Team member -->
                    <!-- Team member -->
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_04.jpg" alt="card image"></p>
                                            <h4 class="card-title">Sunlimetech</h4>
                                            <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                            <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside">
                                    <div class="card">
                                        <div class="card-body text-center mt-4">
                                            <h4 class="card-title">Sunlimetech</h4>
                                            <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                        <i class="icon-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                        <i class="icon-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                        <i class="icon-skype"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                        <i class="icon-google"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ./Team member -->
                    <!-- Team member -->
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_05.png" alt="card image"></p>
                                            <h4 class="card-title">Sunlimetech</h4>
                                            <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                            <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside">
                                    <div class="card">
                                        <div class="card-body text-center mt-4">
                                            <h4 class="card-title">Sunlimetech</h4>
                                            <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                        <i class="icon-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                        <i class="icon-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                        <i class="icon-skype"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                        <i class="icon-google"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ./Team member -->
                    <!-- Team member -->
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_06.jpg" alt="card image"></p>
                                            <h4 class="card-title">Sunlimetech</h4>
                                            <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                            <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside">
                                    <div class="card">
                                        <div class="card-body text-center mt-4">
                                            <h4 class="card-title">Sunlimetech</h4>
                                            <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                        <i class="icon-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                        <i class="icon-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                        <i class="icon-skype"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                        <i class="icon-google"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ./Team member -->
                </div>
            </div>
        </section>
        <!-- End Our Team -->
                {{-- IMAPCT SECTION --}}
                <section class="impact">
                    <div class="row first_title"><h3>IMPACT</h3></div>
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                        <div class="card">
                               <img src="{{url('/images/front/impact_icons/1.png')}}" class="card-img-top" alt=""> 
                            <h5 class="card-title">HEALTH</h5>
                        </div>
                        </div>
                        <div class="col">
                        <div class="card">
                                <img src="{{url('/images/front/impact_icons/2.png')}}" class="card-img-top" alt=""> 
                            <h5 class="card-title">Education</h5>
                        </div>
                        </div>
                        <div class="col">
                        <div class="card">
                                <img src="{{url('/images/front/impact_icons/3.png')}}" class="card-img-top"  alt=""> 
                            <h5 class="card-title">FOOD SECURITY</h5>
                        </div>
                        </div>
                    </div>
                </section>
        
                {{-- MODALS OF IMPACT SECTION --}}
                <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="staticBackdropLabel">Health ptojects</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          {{-- modals card--}}
                          <div class="row">
                            <div class="col">
                              <div class="card h-100">
                                <img src="{{url('/images/front/modals_card/healthy1.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">BSNUM 2</h5>
                                  <p class="card-text">
                                    The project ultimate outcome is Improved nutrition for 20,000 household members (11,250 females), particularly Women of Reproductive Age (WRA) and boys and girls under-2 in the target villages of Baray-Santuk Operational District of Kompong Thom Province.
                                  <p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Kompong Thom Province, February 2020 – January 2023</small>
                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="card h-100">
                                <img src="{{url('/images/front/modals_card/healthy2.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">EMBRACE</h5>
                                  <p class="card-text">
                                    EMBRACE focuses on improving and saving the lives of women, newborns, and children under five. The program achieves these objectives through instruction on health and nutrition, the building of health clinics and training programs for community health volunteers, traditional birth attendants, nurses and midwives. 
                                  </p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Kompong Thom Province, March 2016 – March 2020</small>
                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="card h-100">
                                <img src="{{url('/images/front/modals_card/healthy3.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">CHOICES</h5>
                                  <p class="card-text">
                                    CHOICES helps parents and child caregivers to make improved informed decisions about feeding practices, improving household hygiene/drinking water and sanitation, as well as empowering food insecure families to have more sustained household livelihoods.
                                  </p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Pursat Province, July 2014 – June 2019</small>
                                </div>
                              </div>
                            </div>
        
                          </div>
                          {{--end modals card--}}
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                
                  <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="staticBackdropLabel">Health ptojects</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          {{-- modals card--}}
                          <div class="row">
                            <div class="col">
                              <div class="card h-100">
                                <img src="{{url('/images/front/modals_card/healthy1.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">BSNUM 2</h5>
                                  <p class="card-text">
                                    The project ultimate outcome is Improved nutrition for 20,000 household members (11,250 females), particularly Women of Reproductive Age (WRA) and boys and girls under-2 in the target villages of Baray-Santuk Operational District of Kompong Thom Province.
                                  <p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Kompong Thom Province, February 2020 – January 2023</small>
                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="card h-100">
                                <img src="{{url('/images/front/modals_card/healthy2.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">EMBRACE</h5>
                                  <p class="card-text">
                                    EMBRACE focuses on improving and saving the lives of women, newborns, and children under five. The program achieves these objectives through instruction on health and nutrition, the building of health clinics and training programs for community health volunteers, traditional birth attendants, nurses and midwives. 
                                  </p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Kompong Thom Province, March 2016 – March 2020</small>
                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="card h-100">
                                <img src="{{url('/images/front/modals_card/healthy3.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">CHOICES</h5>
                                  <p class="card-text">
                                    CHOICES helps parents and child caregivers to make improved informed decisions about feeding practices, improving household hygiene/drinking water and sanitation, as well as empowering food insecure families to have more sustained household livelihoods.
                                  </p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Pursat Province, July 2014 – June 2019</small>
                                </div>
                              </div>
                            </div>
        
                          </div>
                          {{--end modals card--}}
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
        
                  <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="staticBackdropLabel">Health ptojects</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          {{-- modals card--}}
                          <div class="row">
                            <div class="col">
                              <div class="card h-100">
                                <img src="{{url('/images/front/modals_card/healthy1.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">BSNUM 2</h5>
                                  <p class="card-text">
                                    The project ultimate outcome is Improved nutrition for 20,000 household members (11,250 females), particularly Women of Reproductive Age (WRA) and boys and girls under-2 in the target villages of Baray-Santuk Operational District of Kompong Thom Province.
                                  <p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Kompong Thom Province, February 2020 – January 2023</small>
                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="card h-100">
                                <img src="{{url('/images/front/modals_card/healthy2.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">EMBRACE</h5>
                                  <p class="card-text">
                                    EMBRACE focuses on improving and saving the lives of women, newborns, and children under five. The program achieves these objectives through instruction on health and nutrition, the building of health clinics and training programs for community health volunteers, traditional birth attendants, nurses and midwives. 
                                  </p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Kompong Thom Province, March 2016 – March 2020</small>
                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="card h-100">
                                <img src="{{url('/images/front/modals_card/healthy3.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">CHOICES</h5>
                                  <p class="card-text">
                                    CHOICES helps parents and child caregivers to make improved informed decisions about feeding practices, improving household hygiene/drinking water and sanitation, as well as empowering food insecure families to have more sustained household livelihoods.
                                  </p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Pursat Province, July 2014 – June 2019</small>
                                </div>
                              </div>
                            </div>
        
                          </div>
                          {{--end modals card--}}
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  {{-- END MODALS --}}
        
            </div>
            <script>
                var myModal = document.getElementById('myModal')
                var myInput = document.getElementById('myInput')
        
                myModal.addEventListener('shown.bs.modal', function () {
                myInput.focus()
        })
            </script>
            {{-- end impact section --}}
    </div>
@endsection

