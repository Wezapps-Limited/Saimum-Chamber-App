@extends('Client.master')
@section('title') Rancon Electronics Ltd @endsection
@section('meta_title') {{@$seo->meta_title}} @endsection
@section('meta_des') Rancon Electronics Ltd @endsection

@section('slider')

<section class="home-area">
    <div class="container">
       <div class="home-slider home-slider-init">
          <div id="home-slide-1" class="home-slider_single">
             <img src="{{asset('Client/assets/images/dynamic/home-slider/home-slider.jpg')}}" alt="Home Slide 1" />
          </div>
          <div id="home-slide-1" class="home-slider_single">
             <img src="{{asset('Client/assets/images/dynamic/home-slider/home-slider1.png')}}" alt="Home Slide 1" />
          </div>
          <div id="home-slide-2" class="home-slider_single">
             <img src="{{asset('Client/assets/images/dynamic/home-slider/home-slider2.png')}}" alt="Home Slide 2" />
          </div>
          <div id="home-slide-3" class="home-slider_single">
             <img src="{{asset('Client/assets/images/dynamic/home-slider/home-slider3.png')}}" alt="Home Slide 3" />
          </div>
       </div>
    </div>
 </section>

@endsection



@section('product')

<section class="products pt-80 pb-50">
    <div class="container">
       <div class="row">
          <div class="col">
             <div class="section-title">
                <h2>Explore products</h2>
             </div>
             <div class="tab-wrap">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                   <li class="nav-item" role="presentation">
                      <button
                         class="nav-link active"
                         id="forYou-tab"
                         data-bs-toggle="tab"
                         data-bs-target="#forYou"
                         type="button"
                         role="tab"
                      >
                         For You
                      </button>
                   </li>
                   <li class="nav-item" role="presentation">
                      <button
                         class="nav-link"
                         id="tv-tab"
                         data-bs-toggle="tab"
                         data-bs-target="#tvTab"
                         type="button"
                         role="tab"
                      >
                         Television
                      </button>
                   </li>
                   <li class="nav-item" role="presentation">
                      <button
                         class="nav-link"
                         id="ref-tab"
                         data-bs-toggle="tab"
                         data-bs-target="#refTab"
                         type="button"
                         role="tab"
                      >
                         Refrigerator
                      </button>
                   </li>
                   <li class="nav-item" role="presentation">
                      <button
                         class="nav-link"
                         id="ac-tab"
                         data-bs-toggle="tab"
                         data-bs-target="#acTab"
                         type="button"
                         role="tab"
                      >
                      Air Conditioner
                      </button>
                   </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                   <div class="tab-pane fade show active" id="forYou" role="tabpanel">
                      <div class="row">
                         <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="product-single">
                               <div class="product-single_image">
                                  <a href="#">
                                     <img
                                        src="{{asset('Client/assets/images/dynamic/tv7.png')}}"
                                        class="img-fluid blur-up lazyload"
                                        alt=""
                                     />
                                  </a>
                               </div>
                               <div class="product-single_details">
                                  <h3>
                                     <a href="#">Toshiba 55-inch Google QLED TV | 55M550LP</a>
                                  </h3>
                                  <h4>MRP: 114,900</h4>
                                  <div class="product-single_details_button">
                                     <a
                                        href="toshiba-55-qled-4K-smart-android-tv-55m550lp.html"
                                        class="button button-black"
                                        >View details</a
                                     >
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="product-single">
                               <div class="product-single_image">
                                  <a href="#">
                                     <img
                                        src="{{asset('Client/assets/images/dynamic/tv7.png')}}"
                                        class="img-fluid blur-up lazyload"
                                        alt=""
                                     />
                                  </a>
                               </div>
                               <div class="product-single_details">
                                  <h3>
                                     <a href="#">Toshiba 55-inch Google QLED TV | 55M550LP</a>
                                  </h3>
                                  <h4>MRP: 114,900</h4>
                                  <div class="product-single_details_button">
                                     <a
                                        href="toshiba-55-qled-4K-smart-android-tv-55m550lp.html"
                                        class="button button-black"
                                        >View details</a
                                     >
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="product-single">
                               <div class="product-single_image">
                                  <a href="#">
                                     <img
                                        src="{{asset('Client/assets/images/dynamic/tv8.png')}}"
                                        class="img-fluid blur-up lazyload"
                                        alt=""
                                     />
                                  </a>
                               </div>
                               <div class="product-single_details">
                                  <h3>
                                     <a href="#">Toshiba 65-inch Google QLED TV | 65M550LP</a>
                                  </h3>
                                  <h4>MRP: 159,900</h4>
                                  <div class="product-single_details_button">
                                     <a
                                        href="toshiba-65-qled-4K-smart-android-tv-65m550lp.html"
                                        class="button button-black"
                                        >View details</a
                                     >
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="product-single">
                               <div class="product-single_image">
                                  <a href="toshin-e-series-238-liter.html">
                                     <img
                                        src="{{asset('Client/assets/images/dynamic/refrigerator/e-series/238-Liter/Toshin 238 Liter I Retro Rose I TM238GDRTR.png')}}"
                                        class="img-fluid blur-up lazyload"
                                        alt=""
                                     />
                                  </a>
                               </div>
                               <div class="product-single_details">
                                  <h3>
                                     <a href="toshin-e-series-238-liter.html"
                                        >Toshin E Series 238 Liter | TM238GDDR</a
                                     >
                                  </h3>
                                  <h4>MRP: 39,990</h4>
                                  <div class="product-single_details_button">
                                     <a href="toshin-e-series-238-liter.html" class="button button-black"
                                        >View details</a
                                     >
                                  </div>
                               </div>
                            </div>
                         </div>
                        
                      </div>
                   </div>
                   <div class="tab-pane fade" id="tvTab" role="tabpanel">
                      <div class="row">
                         <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="product-single">
                               <div class="product-single_image">
                                  <a href="#">
                                     <img
                                        src="{{asset('Client/assets/images/dynamic/tv1.png')}}"
                                        class="img-fluid blur-up lazyload"
                                        alt=""
                                     />
                                  </a>
                               </div>
                               <div class="product-single_details">
                                  <h3>
                                     <a href="#">Toshiba 32-inch Smart Android HD TV | 32V35KP</a>
                                  </h3>
                                  <h4>MRP: 29,990</h4>
                                  <div class="product-single_details_button">
                                     <a href="toshiba-32-smart-android-tv-32v35kp.html" class="button button-black"
                                        >View details</a
                                     >
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="product-single">
                               <div class="product-single_image">
                                  <a href="#">
                                     <img
                                        src="{{asset('Client/assets/images/dynamic/tv2.png')}}"
                                        class="img-fluid blur-up lazyload"
                                        alt=""
                                     />
                                  </a>
                               </div>
                               <div class="product-single_details">
                                  <h3>
                                     <a href="#">Toshiba 32-inch Smart Android HD TV | 32V35MP</a>
                                  </h3>
                                  <h4>MRP: 29,990</h4>
                                  <div class="product-single_details_button">
                                     <a href="toshiba-32-smart-android-tv-32v35mp.html" class="button button-black"
                                        >View details</a
                                     >
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="product-single">
                               <div class="product-single_image">
                                  <a href="#">
                                     <img
                                        src="{{asset('Client/assets/images/dynamic/tv3.png')}}"
                                        class="img-fluid blur-up lazyload"
                                        alt=""
                                     />
                                  </a>
                               </div>
                               <div class="product-single_details">
                                  <h3>
                                     <a href="#">Toshiba 43-inch Smart Android HD TV | 43C350Kp</a>
                                  </h3>
                                  <h4>MRP: 52,900</h4>
                                  <div class="product-single_details_button">
                                     <a
                                        href="toshiba-43-4K-smart-android-tv-43c350kp.html"
                                        class="button button-black"
                                        >View details</a
                                     >
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="product-single">
                               <div class="product-single_image">
                                  <a href="#">
                                     <img
                                        src="{{asset('Client/assets/images/dynamic/tv4.png')}}"
                                        class="img-fluid blur-up lazyload"
                                        alt=""
                                     />
                                  </a>
                               </div>
                               <div class="product-single_details">
                                  <h3>
                                     <a href="#">Toshiba 43-inch Smart Android UHD TV | 43C35LP</a>
                                  </h3>
                                  <h4>MRP: 57,900</h4>
                                  <div class="product-single_details_button">
                                     <a
                                        href="toshiba-43-4K-smart-android-tv-43c350lp.html"
                                        class="button button-black"
                                        >View details</a
                                     >
                                  </div>
                               </div>
                            </div>
                         </div>
                        


                      </div>
                   </div>
                   <div class="tab-pane fade" id="refTab" role="tabpanel">
                      <div class="row">
                         <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="product-single">
                               <div class="product-single_image">
                                  <a href="toshin-e-series-180-liter.html">
                                     <img
                                        src="{{asset('Client/assets/images/dynamic/refrigerator/e-series/228-Liter/Toshin 228 Liter I Redish Ray I     BM228GDRDR.png')}}"
                                        class="img-fluid blur-up lazyload"
                                        alt=""
                                     />
                                  </a>
                               </div>
                               <div class="product-single_details">
                                  <h3>
                                     <a href="toshin-e-series-180-liter.html"
                                        >Toshin E Series 180 Liter | BTE-180GDSFF</a
                                     >
                                  </h3>
                                  <h4>MRP: 34,490</h4>
                                  <div class="product-single_details_button">
                                     <a href="toshin-e-series-180-liter.html" class="button button-black"
                                        >View details</a
                                     >
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="product-single">
                               <div class="product-single_image">
                                  <a href="toshin-e-series-197-liter.html">
                                     <img
                                        src="{{asset('Client/assets/images/dynamic/refrigerator/e-series/228-Liter/Toshin 228 Liter I Redish Ray I     BM228GDRDR.png')}}"
                                        class="img-fluid blur-up lazyload"
                                        alt=""
                                     />
                                  </a>
                               </div>
                               <div class="product-single_details">
                                  <h3>
                                     <a href="toshin-e-series-197-liter.html"
                                        >Toshin E Series 197 Liter | TM197GDWL</a
                                     >
                                  </h3>
                                  <h4>MRP: 35,990</h4>
                                  <div class="product-single_details_button">
                                     <a href="toshin-e-series-197-liter.html" class="button button-black"
                                        >View details</a
                                     >
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="product-single">
                               <div class="product-single_image">
                                  <a href="toshin-e-series-217-liter.html">
                                     <img
                                        src="{{asset('Client/assets/images/dynamic/refrigerator/e-series/228-Liter/Toshin 228 Liter I Redish Ray I     BM228GDRDR.png')}}"
                                        class="img-fluid blur-up lazyload"
                                        alt=""
                                     />
                                  </a>
                               </div>
                               <div class="product-single_details">
                                  <h3>
                                     <a href="toshin-e-series-217-liter.html"
                                        >Toshin E Series 217 Liter | TM217GDWL</a
                                     >
                                  </h3>
                                  <h4>MRP: 37,490</h4>
                                  <div class="product-single_details_button">
                                     <a href="toshin-e-series-217-liter.html" class="button button-black"
                                        >View details</a
                                     >
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="product-single">
                               <div class="product-single_image">
                                  <a href="toshin-e-series-228-liter.html">
                                     <img
                                        src="{{asset('Client/assets/images/dynamic/refrigerator/e-series/228-Liter/Toshin 228 Liter I Redish Ray I     BM228GDRDR.png')}}"
                                        class="img-fluid blur-up lazyload"
                                        alt=""
                                     />
                                  </a>
                               </div>
                               <div class="product-single_details">
                                  <h3>
                                     <a href="toshin-e-series-228-liter.html"
                                        >Toshin E Series 228 Liter | BM228GDRDR</a
                                     >
                                  </h3>
                                  <h4>MRP: 38,990</h4>
                                  <div class="product-single_details_button">
                                     <a href="toshin-e-series-228-liter.html" class="button button-black"
                                        >View details</a
                                     >
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="product-single">
                               <div class="product-single_image">
                                  <a href="toshin-e-series-238-liter.html">
                                     <img
                                        src="{{asset('Client/assets/images/dynamic/refrigerator/e-series/238-Liter/Toshin 238 Liter I Retro Rose I TM238GDRTR.png')}}"
                                        class="img-fluid blur-up lazyload"
                                        alt=""
                                     />
                                  </a>
                               </div>
                               <div class="product-single_details">
                                  <h3>
                                     <a href="toshin-e-series-238-liter.html"
                                        >Toshin E Series 238 Liter | TM238GDDR</a
                                     >
                                  </h3>
                                  <h4>MRP: 39,990</h4>
                                  <div class="product-single_details_button">
                                     <a href="toshin-e-series-238-liter.html" class="button button-black"
                                        >View details</a
                                     >
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="product-single">
                               <div class="product-single_image">
                                  <a href="toshin-w-series-186-liter.html">
                                     <img
                                        src="{{asset('Client/assets/images/dynamic/refrigerator/w-series/186-Liter/Toshin 186 Liter I 3 Sisters I TTW-186GD3S.png')}}"
                                        class="img-fluid blur-up lazyload"
                                        alt=""
                                     />
                                  </a>
                               </div>
                               <div class="product-single_details">
                                  <h3>
                                     <a href="toshin-w-series-186-liter.html"
                                        >Toshin W Series 186 Liter | TM186GD3S</a
                                     >
                                  </h3>
                                  <h4>MRP: 33,490</h4>
                                  <div class="product-single_details_button">
                                     <a href="toshin-w-series-186-liter.html" class="button button-black"
                                        >View details</a
                                     >
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="product-single">
                               <div class="product-single_image">
                                  <a href="toshin-w-series-212-liter.html">
                                     <img
                                        src="{{asset('Client/assets/images/dynamic/refrigerator/w-series/212-Liter/Toshin 212 Liter I Abstract Blue Flower I TTW- 212GDABF.png')}}"
                                        class="img-fluid blur-up lazyload"
                                        alt=""
                                     />
                                  </a>
                               </div>
                               <div class="product-single_details">
                                  <h3>
                                     <a href="toshin-w-series-212-liter.html"
                                        >Toshin W Series 212 Liter | TTW-212GDABF</a
                                     >
                                  </h3>
                                  <h4>MRP: 36,990</h4>
                                  <div class="product-single_details_button">
                                     <a href="toshin-w-series-212-liter.html" class="button button-black"
                                        >View details</a
                                     >
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="product-single">
                               <div class="product-single_image">
                                  <a href="toshin-w-series-225-liter.html">
                                     <img
                                        src="{{asset('Client/assets/images/dynamic/refrigerator/w-series/225-Liter/Toshin 225 Liter I 3 Sisters I TTW-225GDS3S.png')}}"
                                        class="img-fluid blur-up lazyload"
                                        alt=""
                                     />
                                  </a>
                               </div>
                               <div class="product-single_details">
                                  <h3>
                                     <a href="toshin-w-series-225-liter.html"
                                        >Toshin W Series 225 Liter | TTW-225GDS3S</a
                                     >
                                  </h3>
                                  <h4>MRP: 37,990</h4>
                                  <div class="product-single_details_button">
                                     <a href="toshin-w-series-225-liter.html" class="button button-black"
                                        >View details</a
                                     >
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="product-single">
                               <div class="product-single_image">
                                  <a href="toshin-w-series-249-liter.html">
                                     <img
                                        src="{{asset('Client/assets/images/dynamic/refrigerator/w-series/249-Liter/Toshin 249 Liter I 3 Sisters I TTW-249GD3S.png')}}"
                                        class="img-fluid blur-up lazyload"
                                        alt=""
                                     />
                                  </a>
                               </div>
                               <div class="product-single_details">
                                  <h3>
                                     <a href="toshin-w-series-249-liter.html"
                                        >Toshin W Series 249 Liter | TTW-249GD3S</a
                                     >
                                  </h3>
                                  <h4>MRP: 40,490</h4>
                                  <div class="product-single_details_button">
                                     <a href="toshin-w-series-249-liter.html" class="button button-black"
                                        >View details</a
                                     >
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="tab-pane fade" id="acTab" role="tabpanel">
                      <div class="row">
                         <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="product-single">
                               <div class="product-single_image">
                                  <a href="toshin-2-ton-residential-ac-tsn-24kbts4a2.html">
                                     <img
                                        src="{{asset('Client/assets/images/dynamic/ac/Toshin 2 Ton Residential AC TSN-24KBTS4A2.jpg')}}"
                                        class="img-fluid blur-up lazyload"
                                        alt=""
                                     />
                                  </a>
                               </div>
                               <div class="product-single_details">
                                  <h3>
                                     <a href="toshin-2-ton-residential-ac-tsn-24kbts4a2.html"
                                        >Toshin 2 Ton Residential AC TSN-24KBTS4A2</a
                                     >
                                  </h3>
                                  <h4>MRP: 94,900</h4>
                                  <div class="product-single_details_button">
                                     <a href="toshin-2-ton-residential-ac-tsn-24kbts4a2.html" class="button button-black"
                                        >View details</a
                                     >
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="product-single">
                               <div class="product-single_image">
                                  <a href="toshin-1.5-ton-residential-ac-tsn-18kbts4a2.html">
                                     <img
                                        src="{{asset('Client/assets/images/dynamic/ac/Toshin 1.5 Ton Residential AC TSN-18KBTS4A2.jpg')}}"
                                        class="img-fluid blur-up lazyload"
                                        alt=""
                                     />
                                  </a>
                               </div>
                               <div class="product-single_details">
                                  <h3>
                                     <a href="toshin-1.5-ton-residential-ac-tsn-18kbts4a2.html"
                                        >Toshin 1.5 Ton Residential AC TSN-18KBTS4A2</a
                                     >
                                  </h3>
                                  <h4>MRP: 72,900</h4>
                                  <div class="product-single_details_button">
                                     <a href="toshin-1.5-ton-residential-ac-tsn-18kbts4a2.html" class="button button-black"
                                        >View details</a
                                     >
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="product-single">
                               <div class="product-single_image">
                                  <a href="toshin-2-ton-residential-inverter-ac-tsn-24kbtinv.html">
                                     <img
                                        src="{{asset('Client/assets/images/dynamic/ac/Toshin 2.0 Ton Residential AC 24KBTINV.jpg')}}"
                                        class="img-fluid blur-up lazyload"
                                        alt=""
                                     />
                                  </a>
                               </div>
                               <div class="product-single_details">
                                  <h3>
                                     <a href="toshin-2-ton-residential-inverter-ac-tsn-24kbtinv.html"
                                        >Toshin 2.0 Ton Residential Inverter AC 24KBTINV.jpg</a
                                     >
                                  </h3>
                                  <h4>MRP: 105,900</h4>
                                  <div class="product-single_details_button">
                                     <a href="toshin-2-ton-residential-inverter-ac-tsn-24kbtinv.html" class="button button-black"
                                        >View details</a
                                     >
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="product-single">
                               <div class="product-single_image">
                                  <a href="toshin-1.5-ton-residential-inverter-ac-tsn-18kbtinv.html">
                                     <img
                                        src="{{asset('Client/assets/images/dynamic/ac/Toshin 1.5 Ton Residential AC 18KBTINV.jpg')}}"
                                        class="img-fluid blur-up lazyload"
                                        alt=""
                                     />
                                  </a>
                               </div>
                               <div class="product-single_details">
                                  <h3>
                                     <a href="toshin-1.5-ton-residential-inverter-ac-tsn-18kbtinv.html"
                                        >Toshin 1.5 Ton Residential Inverter AC 18KBTINV</a
                                     >
                                  </h3>
                                  <h4>MRP: 85,900</h4>
                                  <div class="product-single_details_button">
                                     <a href="toshin-1.5-ton-residential-inverter-ac-tsn-18kbtinv.html" class="button button-black"
                                        >View details</a
                                     >
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>

@endsection

@section('who_we_are')
<section class="who-area pt-0 pb-60">
    <div class="container">
       <div class="row">
          <div class="col-lg-6">
             <div class="who-image">
                <img src="{{asset('Client/assets/images/dynamic/who-image1.png')}}" alt="Who area image" />
             </div>
          </div>
          <div class="col-lg-6">
             <div class="who-text">
                <div class="section-title">
                   <h2>Who we are?</h2>
                </div>
                <h3>Innovative technology. Premium performance. Expert craftsmanshipho we are?</h3>
                <p>
                   We are committed to building long-lasting relationships with our customers, based on trust,
                   respect, and mutual benefit. We listen to our customers' feedback and strive to continuously
                   improve our products and services to better meet their needs. Your satisfaction is our top
                   priority, and we will go above and beyond to ensure that you have a positive experience with
                   Rancon Electronics Ltd.
                </p>
                <a href="about.html" class="button">More about us</a>
             </div>
          </div>
       </div>
    </div>
 </section>
@endsection

@section('why_us')

<section class="why-area pt-0 pb-40">
    <div class="container">
       <div class="row">
          <div class="col-lg-6">
             <div class="who-text">
                <div class="section-title">
                   <h2>Why us?</h2>
                </div>
                <p>
                   At Rancon Electronics Ltd., we are passionate about innovation and committed to delivering
                   cutting-edge electronics solutions to our customers worldwide. With years of experience in the
                   industry, we have established ourselves as a trusted provider of high-quality electronic devices
                   and accessories.
                </p>
                <h3>1. Premium products</h3>
                <p>Innovative technology. Premium performance. Expert craftsmanship.</p>
                <h3>2. What Sets Us Apart:</h3>
                <p>
                   What sets us apart is our dedication to excellence in every aspect of our business. From product
                   design and development to manufacturing and customer service, we uphold the highest standards of
                   quality and integrity. Our team of skilled professionals works tirelessly to ensure that each
                   product meets our stringent criteria for performance and reliability.
                </p>
             </div>
          </div>
          <div class="col-lg-6">
             <div class="who-image">
                <img src="{{asset('Client/assets/images/dynamic/who-image2.png')}}" alt="Why area image" />
             </div>
          </div>
       </div>
    </div>
 </section>

@endsection


@section('counter')

<section class="counter-area pt-0 pb-80">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="section-title">
                <h2>Rancon in numbers</h2>
             </div>
          </div>
          <div class="col-md-12">
             <div class="counter-grid">
                <div class="counter-single">
                   <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55" fill="none">
                      <rect width="55" height="55" fill="none" />
                      <path
                         d="M30.5582 28.7605C28.2533 28.7605 26.0002 28.0784 24.0837 26.8005C22.1673 25.5225 20.6736 23.7061 19.7915 21.581C18.9095 19.4558 18.6787 17.1174 19.1284 14.8613C19.578 12.6053 20.688 10.5329 22.3178 8.90643C23.9476 7.27991 26.0241 6.17223 28.2847 5.72348C30.5453 5.27472 32.8885 5.50504 35.0179 6.3853C37.1474 7.26557 38.9674 8.75625 40.248 10.6688C41.5285 12.5814 42.212 14.83 42.212 17.1303C42.2082 20.2136 40.9792 23.1696 38.7945 25.3499C36.6098 27.5302 33.6478 28.7567 30.5582 28.7605ZM30.5582 6.78987C28.509 6.78987 26.5057 7.39632 24.8018 8.53254C23.0979 9.66875 21.7699 11.2837 20.9856 13.1732C20.2014 15.0626 19.9962 17.1417 20.396 19.1476C20.7958 21.1534 21.7826 22.9959 23.2317 24.442C24.6807 25.8881 26.5269 26.873 28.5368 27.272C30.5467 27.6709 32.63 27.4662 34.5233 26.6835C36.4166 25.9009 38.0348 24.5755 39.1733 22.8751C40.3118 21.1746 40.9195 19.1754 40.9195 17.1303C40.9161 14.389 39.8233 11.761 37.8809 9.82277C35.9385 7.88454 33.305 6.79433 30.5582 6.7913V6.78987Z"
                         fill="#363636"
                      />
                      <path
                         d="M30.5582 17.7752C29.979 17.7755 29.4127 17.6043 28.931 17.2834C28.4493 16.9625 28.0737 16.5062 27.8519 15.9722C27.63 15.4383 27.5718 14.8507 27.6847 14.2837C27.7975 13.7167 28.0762 13.1959 28.4857 12.7871C28.8952 12.3783 29.4169 12.0998 29.985 11.9869C30.553 11.874 31.1418 11.9318 31.677 12.153C32.2121 12.3741 32.6695 12.7487 32.9913 13.2293C33.3131 13.7098 33.4849 14.2749 33.4849 14.8529C33.4849 15.024 33.4168 15.188 33.2956 15.309C33.1744 15.4299 33.0101 15.4978 32.8387 15.4978C32.6673 15.4978 32.5029 15.4299 32.3817 15.309C32.2605 15.188 32.1924 15.024 32.1924 14.8529C32.1924 14.53 32.0965 14.2143 31.9167 13.9459C31.7369 13.6774 31.4813 13.4682 31.1824 13.3446C30.8834 13.2211 30.5544 13.1889 30.2371 13.252C29.9198 13.3151 29.6283 13.4707 29.3996 13.6992C29.1709 13.9276 29.0152 14.2186 28.9523 14.5353C28.8893 14.8521 28.9219 15.1803 29.046 15.4786C29.17 15.7769 29.3799 16.0317 29.649 16.2109C29.9182 16.3901 30.2346 16.4856 30.5582 16.4853C30.7296 16.4853 30.8939 16.5533 31.0151 16.6742C31.1363 16.7952 31.2044 16.9592 31.2044 17.1302C31.2044 17.3013 31.1363 17.4653 31.0151 17.5863C30.8939 17.7072 30.7296 17.7752 30.5582 17.7752Z"
                         fill="#363636"
                      />
                      <path
                         d="M30.5583 22.3286C29.7815 22.3278 29.0367 22.0193 28.4876 21.4708C27.9386 20.9223 27.6302 20.1787 27.6302 19.4035C27.6302 19.3188 27.6469 19.2349 27.6793 19.1567C27.7118 19.0784 27.7594 19.0073 27.8194 18.9474C27.8794 18.8875 27.9507 18.84 28.0291 18.8076C28.1075 18.7752 28.1915 18.7585 28.2764 18.7585C28.3613 18.7585 28.4453 18.7752 28.5237 18.8076C28.6021 18.84 28.6733 18.8875 28.7333 18.9474C28.7934 19.0073 28.841 19.0784 28.8734 19.1567C28.9059 19.2349 28.9226 19.3188 28.9226 19.4035C28.9226 19.7263 29.0186 20.0419 29.1983 20.3104C29.378 20.5788 29.6335 20.788 29.9324 20.9116C30.2313 21.0351 30.5601 21.0675 30.8774 21.0045C31.1947 20.9415 31.4862 20.786 31.7149 20.5577C31.9437 20.3294 32.0995 20.0386 32.1626 19.7219C32.2257 19.4053 32.1933 19.077 32.0695 18.7788C31.9457 18.4805 31.7361 18.2255 31.4671 18.0462C31.1981 17.8668 30.8818 17.7711 30.5583 17.7711C30.3869 17.7711 30.2226 17.7031 30.1014 17.5822C29.9802 17.4612 29.9121 17.2972 29.9121 17.1261C29.9121 16.9551 29.9802 16.791 30.1014 16.6701C30.2226 16.5491 30.3869 16.4812 30.5583 16.4812C31.3235 16.4981 32.0516 16.8133 32.5868 17.3594C33.122 17.9055 33.4216 18.6389 33.4216 19.4027C33.4216 20.1666 33.122 20.9 32.5868 21.4461C32.0516 21.9921 31.3235 22.3074 30.5583 22.3243V22.3286Z"
                         fill="#363636"
                      />
                      <path
                         d="M30.5583 13.2221C30.4734 13.2221 30.3894 13.2054 30.311 13.173C30.2326 13.1406 30.1614 13.0931 30.1014 13.0332C30.0413 12.9733 29.9937 12.9022 29.9613 12.8239C29.9288 12.7457 29.9121 12.6618 29.9121 12.5771V10.7685C29.9121 10.5974 29.9802 10.4334 30.1014 10.3124C30.2225 10.1915 30.3869 10.1235 30.5583 10.1235C30.7297 10.1235 30.8941 10.1915 31.0153 10.3124C31.1365 10.4334 31.2045 10.5974 31.2045 10.7685V12.5771C31.2042 12.7481 31.136 12.9119 31.0148 13.0328C30.8937 13.1536 30.7296 13.2217 30.5583 13.2221Z"
                         fill="#363636"
                      />
                      <path
                         d="M30.5583 24.1328C30.4734 24.133 30.3893 24.1164 30.3108 24.0841C30.2323 24.0518 30.161 24.0043 30.1009 23.9443C30.0409 23.8844 29.9933 23.8132 29.9609 23.7349C29.9285 23.6566 29.9119 23.5726 29.9121 23.4879V21.6835C29.9121 21.5125 29.9802 21.3484 30.1014 21.2275C30.2226 21.1065 30.3869 21.0386 30.5583 21.0386C30.7297 21.0386 30.8941 21.1065 31.0153 21.2275C31.1365 21.3484 31.2046 21.5125 31.2046 21.6835V23.4922C31.2034 23.6625 31.1348 23.8254 31.0138 23.9454C30.8927 24.0655 30.729 24.1328 30.5583 24.1328Z"
                         fill="#363636"
                      />
                      <path
                         d="M35.2328 39.8632C34.8741 39.8631 34.5183 39.8 34.1816 39.6768L27.9476 37.8137C27.7834 37.7645 27.6456 37.6522 27.5644 37.5015C27.4832 37.3509 27.4653 37.1742 27.5146 37.0104C27.5639 36.8466 27.6764 36.709 27.8274 36.628C27.9783 36.547 28.1553 36.5291 28.3195 36.5783L34.5722 38.4543L34.611 38.4672C34.8297 38.5487 35.0624 38.5863 35.2958 38.578C35.5291 38.5696 35.7585 38.5154 35.9708 38.4185C36.1832 38.3216 36.3743 38.1839 36.5332 38.0132C36.6922 37.8426 36.8159 37.6423 36.8972 37.4239C36.957 37.2635 37.0782 37.1334 37.2341 37.0621C37.3901 36.9909 37.568 36.9844 37.7287 37.0441C37.8894 37.1038 38.0198 37.2247 38.0912 37.3803C38.1626 37.536 38.1691 37.7135 38.1093 37.8739C37.8906 38.4586 37.4986 38.9629 36.9854 39.3195C36.4723 39.6762 35.8624 39.8683 35.2371 39.8703L35.2328 39.8632Z"
                         fill="#363636"
                      />
                      <path
                         d="M35.2327 39.8632C34.8665 39.8628 34.5032 39.7973 34.16 39.6698C34.0804 39.6402 34.0074 39.5953 33.9452 39.5376C33.883 39.4799 33.8328 39.4106 33.7975 39.3335C33.7622 39.2565 33.7424 39.1732 33.7393 39.0885C33.7362 39.0038 33.7498 38.9194 33.7794 38.8399C33.809 38.7605 33.854 38.6877 33.9118 38.6256C33.9697 38.5636 34.0391 38.5135 34.1164 38.4782C34.1936 38.4429 34.277 38.4232 34.3618 38.4201C34.4467 38.417 34.5313 38.4306 34.6109 38.4602C34.8306 38.546 35.0653 38.5873 35.3012 38.5817C35.537 38.5761 35.7695 38.5237 35.9848 38.4275C36.2002 38.3314 36.3943 38.1934 36.5557 38.0217C36.7171 37.8499 36.8426 37.6478 36.925 37.4271C37.0073 37.2065 37.0448 36.9716 37.0353 36.7364C37.0258 36.5011 36.9694 36.27 36.8695 36.0567C36.7697 35.8434 36.6282 35.652 36.4535 35.4938C36.2787 35.3356 36.0741 35.2137 35.8517 35.1352L25.858 31.4232C25.1386 31.1579 24.3723 31.0429 23.6065 31.0853C22.8407 31.1277 22.0918 31.3266 21.4062 31.6697L14.5489 35.1208C14.4728 35.1679 14.3877 35.1987 14.299 35.2112C14.2104 35.2237 14.1201 35.2177 14.0339 35.1935C13.9477 35.1693 13.8674 35.1276 13.7982 35.0708C13.7291 35.0141 13.6725 34.9436 13.632 34.8639C13.5916 34.7842 13.5682 34.6969 13.5633 34.6077C13.5584 34.5185 13.5722 34.4292 13.6037 34.3455C13.6352 34.2619 13.6838 34.1857 13.7464 34.1218C13.809 34.0579 13.8842 34.0077 13.9673 33.9743L20.8246 30.5232C21.6698 30.0993 22.5934 29.8536 23.538 29.8013C24.4825 29.7491 25.4277 29.8914 26.3147 30.2194L36.3084 33.9299C36.9826 34.181 37.5471 34.6604 37.9034 35.2845C38.2597 35.9085 38.385 36.6376 38.2577 37.3445C38.1303 38.0514 37.7582 38.6912 37.2065 39.1523C36.6547 39.6135 35.9582 39.8666 35.2385 39.8675L35.2327 39.8632Z"
                         fill="#363636"
                      />
                      <path
                         d="M33.3888 46.7857C32.9601 46.7856 32.5342 46.7184 32.1264 46.5865L21.1376 43.0337L19.163 43.8635C19.0845 43.8982 18.9999 43.917 18.9141 43.9187C18.8282 43.9205 18.7429 43.9051 18.6631 43.8736C18.5833 43.842 18.5106 43.795 18.4492 43.7351C18.3878 43.6752 18.339 43.6037 18.3056 43.5248C18.2723 43.4458 18.255 43.3611 18.2548 43.2754C18.2546 43.1898 18.2715 43.1049 18.3045 43.0258C18.3375 42.9468 18.386 42.875 18.4471 42.8149C18.5082 42.7547 18.5807 42.7073 18.6603 42.6754L20.8575 41.7524C21.0001 41.6919 21.1599 41.6853 21.307 41.7338L32.5271 45.3597C32.9148 45.4854 33.3254 45.5249 33.7301 45.4754C34.1347 45.4259 34.5236 45.2886 34.8694 45.0731L48.1028 36.8509C48.9573 36.3207 49.2517 35.2171 48.7591 34.393C48.6377 34.1908 48.4771 34.0147 48.2868 33.8749C48.0965 33.7352 47.8803 33.6347 47.6507 33.5792C47.421 33.5237 47.1826 33.5144 46.9494 33.5517C46.7161 33.5891 46.4926 33.6724 46.2919 33.7968L36.9632 39.3246C36.8159 39.4083 36.6416 39.431 36.4778 39.3877C36.314 39.3444 36.1738 39.2387 36.0874 39.0932C36.0009 38.9478 35.9752 38.7743 36.0157 38.6101C36.0562 38.4458 36.1598 38.3041 36.304 38.2153L45.6184 32.6933C45.9649 32.4803 46.3504 32.3383 46.7524 32.2754C47.1545 32.2126 47.565 32.2301 47.9602 32.3271C48.3554 32.4241 48.7273 32.5985 49.0543 32.8402C49.3813 33.082 49.6568 33.3862 49.8649 33.7352C50.7179 35.1584 50.2325 37.0487 48.7835 37.9488L35.5501 46.1709C34.9013 46.5734 34.1526 46.7864 33.3888 46.7857Z"
                         fill="#363636"
                      />
                      <path
                         d="M12.2884 49.4999C12.2322 49.4999 12.1762 49.4927 12.1218 49.4784C12.0399 49.4567 11.9631 49.4191 11.8958 49.3677C11.8285 49.3163 11.7721 49.2521 11.7297 49.1789L4.80066 37.2505C4.71514 37.1024 4.6919 36.9265 4.73604 36.7613C4.78018 36.5961 4.8881 36.4551 5.03618 36.3691L12.1677 32.2444C12.3159 32.1586 12.4922 32.1349 12.6578 32.1788C12.8234 32.2226 12.9648 32.3302 13.0509 32.478L19.9786 44.4093C20.0646 44.5571 20.0883 44.733 20.0444 44.8983C20.0005 45.0636 19.8926 45.2047 19.7445 45.2907L12.6129 49.4154C12.514 49.4714 12.4021 49.5005 12.2884 49.4999ZM6.24679 37.1617L12.5268 47.975L18.5396 44.4981L12.2597 33.6833L6.24679 37.1617Z"
                         fill="#363636"
                      />
                   </svg>
                   <h2><span data-count-start="0" data-count-end="32" class="countIt">32</span></h2>
                   <h4>Business units</h4>
                </div>
                <div class="counter-single">
                   <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55" fill="none">
                      <rect width="55" height="55" fill="none" />
                      <path
                         d="M27.5 5.5C21.6724 5.5 16.926 10.2149 16.926 16.2442C16.926 20.3327 18.6809 24.5441 21.0486 29.0508C21.0177 29.0424 20.9861 29.0372 20.9542 29.0349H15.9189C15.8875 29.0319 15.8559 29.0319 15.8245 29.0349C15.7399 29.051 15.6608 29.0888 15.5947 29.1448C15.5285 29.2008 15.4777 29.2731 15.4468 29.3547L7.89392 48.7965C7.86285 48.8746 7.85122 48.9593 7.86008 49.043C7.86893 49.1268 7.898 49.207 7.9447 49.2766C7.9914 49.3462 8.05429 49.403 8.12778 49.442C8.20127 49.4809 8.28309 49.5009 8.36598 49.5H27.5H46.6341C46.717 49.5009 46.7988 49.4809 46.8723 49.442C46.9458 49.403 47.0087 49.3462 47.0554 49.2766C47.1021 49.207 47.1312 49.1268 47.14 49.043C47.1489 48.9593 47.1372 48.8746 47.1062 48.7965L39.5532 29.3547C39.5153 29.2594 39.45 29.1779 39.3657 29.1208C39.2815 29.0638 39.1824 29.0339 39.0812 29.0349H34.0459C34.014 29.0372 33.9824 29.0424 33.9515 29.0508C36.3192 24.5441 38.0741 20.3327 38.0741 16.2442C38.0741 10.2149 33.3277 5.5 27.5 5.5ZM27.5 6.52325C32.7961 6.52325 37.0671 10.7576 37.0671 16.2442C37.0671 22.7095 32.0962 30.0407 27.5 38.7237C22.9039 30.0407 17.933 22.7095 17.933 16.2442C17.933 10.7576 22.204 6.52325 27.5 6.52325ZM27.5 10.1046C25.0032 10.1046 22.9683 12.1723 22.9683 14.7093C22.9683 17.2463 25.0032 19.3139 27.5 19.3139C29.9969 19.3139 32.0318 17.2463 32.0318 14.7093C32.0318 12.1723 29.9969 10.1046 27.5 10.1046ZM27.5 11.1279C29.4526 11.1279 31.0247 12.7253 31.0247 14.7093C31.0247 16.6933 29.4526 18.2907 27.5 18.2907C25.5474 18.2907 23.9753 16.6933 23.9753 14.7093C23.9753 12.7253 25.5474 11.1279 27.5 11.1279ZM21.4262 29.7383C23.1612 32.9819 25.1651 36.3767 27.0595 40.0188C27.103 40.0987 27.1668 40.1654 27.2443 40.2118C27.3218 40.2582 27.4101 40.2827 27.5 40.2827C27.59 40.2827 27.6783 40.2582 27.7558 40.2118C27.8332 40.1654 27.8971 40.0987 27.9406 40.0188C29.8326 36.3813 31.8404 32.9942 33.5738 29.7542C33.6142 29.8466 33.6806 29.9247 33.7646 29.9788C33.8486 30.0329 33.9465 30.0604 34.0459 30.0581H38.735L42.1181 38.7557H37.5706C37.5392 38.7527 37.5076 38.7527 37.4762 38.7557C37.4101 38.762 37.3458 38.7815 37.2871 38.813C37.2284 38.8446 37.1763 38.8875 37.134 38.9395C37.0916 38.9915 37.0597 39.0514 37.0401 39.1159C37.0206 39.1804 37.0137 39.2481 37.0199 39.3153C37.0261 39.3825 37.0452 39.4478 37.0763 39.5075C37.1073 39.5671 37.1496 39.62 37.2007 39.663C37.2519 39.7061 37.3109 39.7385 37.3743 39.7583C37.4378 39.7782 37.5045 39.7853 37.5706 39.779H42.5115L45.8946 48.4766H28.0036V44.3836C28.0064 44.3093 27.9933 44.2353 27.9652 44.1668C27.9371 44.0982 27.8946 44.0366 27.8407 43.9864C27.7868 43.9362 27.7227 43.8985 27.653 43.876C27.5833 43.8534 27.5097 43.8466 27.4371 43.856C27.312 43.8719 27.1973 43.935 27.1157 44.0327C27.0341 44.1304 26.9916 44.2556 26.9965 44.3836V48.4766H9.10554L12.4886 39.779H17.4295C17.4962 39.7799 17.5625 39.7674 17.6244 39.7421C17.6863 39.7168 17.7426 39.6793 17.7902 39.6317C17.8377 39.5841 17.8754 39.5274 17.9012 39.4648C17.9269 39.4023 17.9402 39.3351 17.9402 39.2673C17.9402 39.1995 17.9269 39.1324 17.9012 39.0699C17.8754 39.0073 17.8377 38.9506 17.7902 38.903C17.7426 38.8554 17.6863 38.8178 17.6244 38.7926C17.5625 38.7673 17.4962 38.7547 17.4295 38.7557H12.882L16.2651 30.0581H20.9542C21.0554 30.0591 21.1545 30.0292 21.2387 29.9722C21.3229 29.9151 21.3883 29.8336 21.4262 29.7383Z"
                         fill="#363636"
                      />
                   </svg>
                   <h2><span data-count-start="0" data-count-end="40" class="countIt">40</span>+</h2>
                   <h4>Districts</h4>
                </div>
                <div class="counter-single">
                   <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55" fill="none">
                      <rect width="55" height="55" fill="none" />
                      <path
                         d="M37.9635 44.7411H45.5714V18.7497V17.9431V14.0444H34.7972C33.6098 11.266 30.9272 9.42871 27.8929 9.42871C24.8585 9.42871 22.2199 11.2212 20.9885 14.0444H10.2143V17.9431V18.7497V44.7859H17.6463H37.9635V44.7411ZM37.1719 43.9344H18.4379V23.0069H37.1279V43.9344H37.1719ZM11.0059 14.851H21.5602L21.6482 14.5822C22.6596 11.9382 25.1223 10.2353 27.8929 10.2353C30.6634 10.2353 33.1261 11.9382 34.1375 14.5822L34.2255 14.851H44.7799V17.9431H34.5333H21.2524H11.0059V14.851ZM11.0059 18.7497H20.5488H35.2369H44.7799V43.9344H37.9635V22.1555H17.6463V43.8896H11.0059V18.7497Z"
                         fill="#363636"
                      />
                      <path
                         d="M26.6615 35.7335C26.8814 35.7335 27.0573 35.5543 27.0573 35.3302V33.8962C27.0573 33.6722 26.8814 33.4929 26.6615 33.4929C26.4416 33.4929 26.2657 33.6722 26.2657 33.8962V35.3302C26.2657 35.5543 26.4416 35.7335 26.6615 35.7335Z"
                         fill="#363636"
                      />
                      <path
                         d="M29.1242 35.7335C29.3441 35.7335 29.52 35.5543 29.52 35.3302V33.8962C29.52 33.6722 29.3441 33.4929 29.1242 33.4929C28.9044 33.4929 28.7285 33.6722 28.7285 33.8962V35.3302C28.6845 35.5543 28.9044 35.7335 29.1242 35.7335Z"
                         fill="#363636"
                      />
                   </svg>
                   <h2><span data-count-start="0" data-count-end="37" class="countIt">37</span></h2>
                   <h4>Showrooms</h4>
                </div>
                <div class="counter-single">
                   <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55" fill="none">
                      <rect width="55" height="55" fill="none" />
                      <path
                         d="M27.0444 26.7044C30.9439 26.7044 34.0887 23.3743 34.0887 19.245C34.0887 15.1157 30.9439 11.7856 27.0444 11.7856C23.1448 11.7856 20 15.1157 20 19.245C20 23.3743 23.1448 26.7044 27.0444 26.7044ZM27.0444 12.7181C30.4407 12.7181 33.2081 15.6485 33.2081 19.245C33.2081 22.8415 30.4407 25.772 27.0444 25.772C23.648 25.772 20.8806 22.8415 20.8806 19.245C20.8806 15.6485 23.648 12.7181 27.0444 12.7181ZM42.5167 31.3C45.4728 31.3 47.8629 28.7691 47.8629 25.6388C47.8629 22.5085 45.4728 19.9777 42.5167 19.9777C39.5606 19.9777 37.1706 22.5085 37.1706 25.6388C37.1706 28.7691 39.5606 31.3 42.5167 31.3ZM42.5167 20.9767C44.9697 20.9767 46.9823 23.1079 46.9823 25.7054C46.9823 28.3029 44.9697 30.4341 42.5167 30.4341C40.0638 30.4341 38.0511 28.3029 38.0511 25.7054C38.0511 23.0413 40.0638 20.9767 42.5167 20.9767ZM11.6349 31.3C14.591 31.3 16.981 28.7691 16.981 25.6388C16.981 22.5085 14.591 19.9777 11.6349 19.9777C8.67876 19.9777 6.28872 22.5085 6.28872 25.6388C6.28872 28.7691 8.67876 31.3 11.6349 31.3ZM11.6349 20.9767C14.0878 20.9767 16.1005 23.1079 16.1005 25.7054C16.1005 28.3029 14.0878 30.4341 11.6349 30.4341C9.18193 30.4341 7.16926 28.3029 7.16926 25.7054C7.16926 23.0413 9.18193 20.9767 11.6349 20.9767ZM52.2027 42.9553H49.4982V38.9592C49.4982 34.8965 46.3534 31.5664 42.5167 31.5664C39.7493 31.5664 37.4222 33.2314 36.29 35.6957C35.5353 31.0336 31.6986 27.5037 27.1072 27.5037C22.5159 27.5037 18.6792 31.0336 17.9245 35.6957C16.7923 33.2314 14.4023 31.5664 11.6978 31.5664C7.86112 31.5664 4.71633 34.8965 4.71633 38.9592V42.9553H2.0118C1.76022 42.9553 1.57153 43.1551 1.57153 43.4215C1.57153 43.6879 1.76022 43.8877 2.0118 43.8877H4.71633H5.1566H17.7987H18.6792H35.5982H36.4787H49.1208H49.4982H52.2027C52.4543 43.8877 52.643 43.6879 52.643 43.4215C52.643 43.2217 52.4543 42.9553 52.2027 42.9553ZM17.7358 42.9553H5.53397V38.9592C5.53397 35.4293 8.30139 32.4988 11.6349 32.4988C15.0312 32.4988 17.7358 35.4293 17.7358 38.9592V42.9553ZM35.5353 42.9553H18.6163V38.9592V37.3607C18.6163 32.4322 22.3901 28.4361 27.0444 28.4361C31.6986 28.4361 35.4724 32.4322 35.4724 37.3607V38.9592V42.9553H35.5353ZM36.4158 39.0258C36.4158 35.4959 39.1832 32.5654 42.5167 32.5654C45.9131 32.5654 48.6176 35.4959 48.6176 39.0258V43.0219H36.4158V39.0258Z"
                         fill="#363636"
                      />
                   </svg>
                   <h2><span data-count-start="0" data-count-end="500" class="countIt">500</span>+</h2>
                   <h4>Peoples</h4>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>

@endsection


@section('values')

<section class="value-area pt-0 pb-80">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="section-title">
                <h2>Values & Principles</h2>
             </div>
          </div>
          <div class="col-md-12">
             <div class="value-grid">
                <div class="value-single active">
                   <img src="{{asset('Client/assets/images/dynamic/value/1.png')}}" alt="value" />
                   <h4>Passion to Excel</h4>
                   <p>Passion over experience</p>
                </div>
                <div class="value-single">
                   <img src="{{asset('Client/assets/images/dynamic/value/2.png')}}" alt="value" />
                   <h4>Leadership</h4>
                   <p>Taking change of a situation with an extrepreneurial sprit</p>
                </div>
                <div class="value-single">
                   <img src="{{asset('Client/assets/images/dynamic/value/3.png')}}" alt="value" />
                   <h4>Think out-of-the-Box</h4>
                   <p>Being creative in everything you do</p>
                </div>
                <div class="value-single">
                   <img src="{{asset('Client/assets/images/dynamic/value/4.png')}}" alt="value" />
                   <h4>Keep Learning</h4>
                   <p>Being open to learn and change</p>
                </div>
                <div class="value-single">
                   <img src="{{asset('Client/assets/images/dynamic/value/5.png')}}" alt="value" />
                   <h4>Have Mutual Respect</h4>
                   <p>Supporting an environment where everyone is treated as equals</p>
                </div>
                <div class="value-single">
                   <img src="{{asset('Client/assets/images/dynamic/value/6.png')}}" alt="value" />
                   <h4>Have Fun, Be Healthy</h4>
                   <p>Work smart, play hard You don't need a suit to be serious</p>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>

@endsection

@section('join_us')

<section class="home-contact bg-black-light pt-80 pb-80">
    <div class="container">
       <div class="row">
          <div class="col-lg-6">
             <div class="section-title">
                <h2>Join us as a dealer</h2>
             </div>
             <form action="{{route('JoinUsPost')}}" class="contact-form row" method="post">
                @csrf
                <div class="col-md-12">
                   <div class="form-group">
                      <label for="firstName" class="form-label">First name <span>*</span></label>
                      <input
                         type="text"
                         class="form-control"
                         name="first_name"
                         id="firstName"
                         required="required"
                         placeholder="First name"
                      />
                   </div>
                </div>
                <div class="col-md-12">
                   <div class="form-group">
                      <label for="lastName" class="form-label">Last name <span>*</span></label>
                      <input
                         type="text"
                         class="form-control"
                         name="last_name"
                         id="lastName"
                         required="required"
                         placeholder="Last name"
                      />
                   </div>
                </div>
                <div class="col-md-12">
                   <div class="form-group">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email" />
                   </div>
                </div>
                <div class="col-md-12">
                   <div class="form-group">
                      <label for="phone" class="form-label">Phone number <span>*</span></label>
                      <input
                         type="tel"
                         class="form-control"
                         id="phone"
                         name="phone"
                         pattern="[0-9]{11}"
                         title="Please enter a valid phone number in the format: XXXXXXXXXXX"
                         required="required"
                         placeholder="Phone number"
                      />
                   </div>
                </div>

                @php
                    $first_number = rand(1,9);
                    $second_number = rand(1,9);
                @endphp

                <input type="hidden" id="first_number" name="first_number" value="{{@$first_number}}">
                <input type="hidden" id="second_number" name="second_number" value="{{@$second_number}}">
                <input type="hidden" name="correct_ans" value="{{@$first_number+$second_number}}">

                 <div class="col-md-2">
                    <div class="form-group">
                    <input type="text" readonly class="form-control" value="{{@$first_number}}">
                   </div>
                 </div>

                 <div class="col-md-1">
                   
                      <span style="font-size:35px;color:white;padding-top:5px">+</span>
                   
                 </div>


                 <div class="col-md-2">
                    <div class="form-group">
                    <input type="text" readonly class="form-control" value="{{@$second_number}}">
                </div>
                 </div>

                 <div class="col-md-1">
                   
                    <span style="font-size:35px;color:white;padding-top:5px;font-weight:bold">=</span>
                 
               </div>

               <div class="col-md-3">
                <div class="form-group">
                <input type="number" id="right_ans" name="right_ans" class="form-control">
                </div>
             </div>

                <div class="col-md-12">
                   <button type="button" id="submitButton" class="button" onclick="checkSum()">Complete</button>
                </div>
             </form>
          </div>
          <div class="col-lg-6">
             <div class="home-contact_image">
                <img src="{{asset('Client/assets/images/dynamic/home-contact.jpg')}}" alt="Contact Section Image" />
             </div>
          </div>
       </div>
    </div>
 </section>


@section('footer')
<script>
    $(document).ready(function() {
        $("#right_ans").on('keyup', function() {
            var firstNumber = parseFloat($("#first_number").val());
            var secondNumber = parseFloat($("#second_number").val());
            var rightAns = parseFloat($(this).val());

            // Calculate the sum
            var sum = firstNumber + secondNumber;

            // Check if the sum matches the entered value
            if (sum === rightAns) {
                
                $("#submitButton").attr('type', 'submit'); // Change button type to submit
            } else {
                
                $("#submitButton").attr('type', 'button'); // Change button type to button
            }
        });
    });
</script>
@endsection


@endsection

@section('testimonial')

<section id="review" class="testimonial-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h5>Testimonials</h5>
                        <h2>What Our Clients Say</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div id="testimonial-slide" class="owl-carousel owl-theme owl-loaded owl-drag">
                        <!-- testimonials item -->
                        <div class="single-testimonial">
                            <div class="testi-content-inner">
                                <div class="rating-box">
                                    <ul>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="testimonial-content">
                                    <p>I believe, any engineering team should be able to understand the requirements, deliver on time, deliver according to the requirements. With Wezapps we have found the team that can provide all three. It’s a great team with excellent communication skills that made a difference in our business..</p>
                                </div>
                                <div class="testimonial-bio">
                                    <div class="avatar">
                                        <img src="{{asset('Client/assets/img/client/testimonial/dummy.jfif')}}" alt="testimonial" loading="lazy">
                                    </div>
                                    <div class="bio-info">
                                        <h3 class="name">Stevie Wills</h3><span>Manager, Tong Garden, Australia</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- testimonials item -->
                        <div class="single-testimonial">
                            <div class="testi-content-inner">
                                <div class="rating-box">
                                    <ul>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="testimonial-content">
                                    <p>Having started working with Wezapps after a personal recommendation nearly two years ago, we haven't looked back. Our project required a large amount of users' data, which the team handled well. Also, the post development support that Wezapps have provided has been first class.</p>
                                </div>
                                <div class="testimonial-bio">
                                    <div class="avatar">
                                        <img src="{{asset('Client/assets/img/client/testimonial/dummy.jfif')}}" alt="testimonial" loading="lazy">
                                    </div>
                                    <div class="bio-info">
                                        <h3 class="name">Daniel Style</h3><span>CEO, CaNe Requirement, UK</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- testimonials item -->
                        <div class="single-testimonial">
                            <div class="testi-content-inner">
                                <div class="rating-box">
                                    <ul>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="testimonial-content">
                                    <p>I hired Rashik and his Wezapps team to work on my Wordpress website. They did a great job, on time and at a reasonable price. They suggested to me good ideas to improve the design, and it was a pleasure working with them. They were very flexible and responsive. I recommend them to anyone who wants to re-build their website. </p>
                                </div>
                                <div class="testimonial-bio">
                                    <div class="avatar">
                                        <img src="{{asset('Client/assets/img/client/testimonial/t3.png')}}" alt="testimonial" loading="lazy">
                                    </div>
                                    <div class="bio-info">
                                        <h3 class="name">Shahin Muttalib</h3><span>Founder, Connectr, Canada</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- testimonials item -->
                        <div class="single-testimonial">
                            <div class="testi-content-inner">
                                <div class="rating-box">
                                    <ul>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="testimonial-content">
                                    <p>Great work!!! The team was solid, efficient and knowledgeable. They did an amazing job on my very challenging app. I will be using them again. Thank you for doing such a great job! </p>
                                </div>
                                <div class="testimonial-bio">
                                    <div class="avatar">
                                        <img src="{{asset('Client/assets/img/client/testimonial/t2.jpg')}}" alt="testimonial" loading="lazy">
                                    </div>
                                    <div class="bio-info">
                                        <h3 class="name">Jerry Lin</h3><span>Product Manager, Bridger Cap, USA</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('news')

<section id="news" class="blog-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="section-title">
                        <h5>Latest News at Wezapps</h5>
                        <h2>Our News</h2>
                    </div>
                </div>
            </div>
            <div class="row">
               @foreach(@$News as $key=>$n)
                <div class="col-lg-4 col-md-6 blog-item wow fadeInUp" data-wow-delay="0.2s">
                    <div class="single-blog">
                        <div class="post-img">
                            <a href="{{route('NewsDetails',@$n->slug)}}">
                                <img src="{{(@$n->image)?url('upload/NewsManage/'.@$n->image):''}}" alt="" />
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-tag">
                            </div>
                            <div class="blog-body-title">
                                <h5><a href="{{route('NewsDetails',@$n->slug)}}">{{@$n->title}}</a></h5>
                            </div>
                            <div class="blog-body-text">
                                <p>{!!Str::limit($n->description,70)!!}</p>
                            </div>
                            <div class="blog-bottom-text-link"> <span>Posted {{ date('Y-d-m',strtotime(@$n->news_date))}}</span>
                                <a href="{{route('NewsDetails',@$n->slug)}}">Read Story</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


                <div class="col-md-12">
                    <div class="blog-more-btn text-center mt-15"> 
                       <a class="button" href="{{route('News')}}" target="_blank" aria-label="News">View More News</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('hire')

<section class="hire-area section-padding career">
        <div class="container">
            <div class="hire-content">

                <h2>We don’t offer Jobs <br> We offer Careers</h2>
                <a class="button home-btn-2 js-scroll" href="{{route('Career')}}">Career</a>
            </div>
        </div>
    </section>

@endsection

@section('blog')

<section id="blog" class="blog-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="section-title">

                        <h2>Our Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
              @foreach(@$Blog as $key=>$n)
                <div class="col-lg-4 col-md-6 blog-item wow fadeInUp" data-wow-delay="0.2s">
                    <div class="single-blog">
                        <div class="post-img">
                            <a href="{{route('BlogDetails',@$n->slug)}}">
                                <img src="{{(@$n->image)?url('upload/BlogManage/'.@$n->image):''}}" alt="" />
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-tag">
                            </div>
                            <div class="blog-body-title">
                                <h5><a href="{{route('BlogDetails',@$n->slug)}}">{{@$n->title}}</a></h5>
                            </div>
                            <div class="blog-body-text">
                                <p>{!!Str::limit($n->description,70)!!}</p>
                            </div>
                            <div class="blog-bottom-text-link"> <span>Posted {{ date('Y-d-m',strtotime(@$n->blog_date))}}</span>
                                <a href="{{route('BlogDetails',@$n->slug)}}">Read Story</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                <div class="col-md-12">
                    <div class="blog-more-btn text-center mt-15">
                        <a class="button" href="{{route('Blog')}}" target="_blank" aria-label="Blog">View More Blog</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('consul')

<section class="hire-area section-padding projects">
        <div class="container">
            <div class="hire-content">
                <h5>Have a project idea in your mind? </h5>
                <h2>Let’s discuss your project!</h2>
                <a class="button home-btn-2 js-scroll" href="#contact">Free Consultation</a>
            </div>
        </div>
    </section>

@endsection

@section('faq')

<section class="faq-area pt-100">
        <div class="container">
            <div class="row  d-flex align-items-center">
                <div class="col-md-12">
                    <div class="section-title">
                        <h5 class="small-title">Help of the following FAQs</h5>
                        <h2>Frequently Asked Questions</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 faq-item wow fadeInDown" data-wow-delay="0.2s">
                    <div class="accordion">
                        <div class="accordion-item active">
                            <div class="title active">
                                <h6><span>01.</span> How do I create a product with you?</h6>
                            </div>
                            <div class="accordion-info active">
                                <p>
                                    If you have any idea, please contact us through our email or phone. We will meet and talk about it. Just be sure to prepare as much information about your idea as possible, it will make the meeting smoother and further cooperation.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="title">
                                <h6><span>02.</span> What do I need to know before contacting you?</h6>
                            </div>
                            <div class="accordion-info">
                                <p>
                                    Well, the most important thing you need to know is what you want to accomplish. Why do I need this software/app/website? What for? What should it do? When ordering any software/application/website, it is crucial to have a clear vision in mind. You don't want to spend many months with us developing it without knowing for sure what you need. We are also happy to help you on your way, building projects from scratch is nothing new to us.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="title">
                                <h6><span>03.</span> How long does software/web/app development take?</h6>
                            </div>
                            <div class="accordion-info">
                                <p>
                                    We cannot possibly answer this question precisely because there are projects finished in 2 to 3 weeks, but there are also tasks that take several years to complete.
                                </p>
                                <p>
                                    To give you an accurate answer, we need to evaluate the complexity of the project and the scope of the work. With this information we can give you the estimated time frame.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="title">
                                <h6><span>04.</span> Do you provide product support services after the development is complete?</h6>
                            </div>
                            <div class="accordion-info">
                                <p>
                                    Yes, we are always happy to provide technical support and assistance for the product we have developed. We can also further develop your software /web / app product if you need to implement new features or integrate third-party services
                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="title">
                                <h6><span>05.</span> What methodologies do you use in your work?</h6>
                            </div>
                            <div class="accordion-info">
                                <p>
                                    The main methodology we use in our work is Agile, although the choice may depend on a particular project. An iterative approach to project work allows us to regularly improve product quality and constant customer feedback
                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="title">
                                <h6><span>05.</span> How do you guarantee product quality?</h6>
                            </div>
                            <div class="accordion-info">
                                <p>
                                    We evaluate the result every two weeks, test our work (we do both development and acceptance tests), present it to you, apply your feedback so you know you get what you pay for.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 faq-item wow fadeInUp" data-wow-delay="0.4s">
                    <div class="faq-img">
                        <img src="{{asset('Client/assets/img/faq.webp')}}" class="img-fluid" alt="faq">
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


@section('founder')

<section class="founder-area bg-black section-padding">
        <div class="container">
            <div class="row custom-row-reverse">
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <div class="founder-image-wrapper">
                        <img src="{{asset('Client/assets/img/founder.webp')}}" alt="" class="img-fluid">
                    </div>

                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 offset-1">
                    <div class="about-content" id="about-front">
                        <div class="about-content-text">
                            <h5>Message From Founder</h5>
                            <h2>A warm Hello to all,</h2>
                            <p>If you have reached this section then there is a high chance that you really want to know deep about us and our philosophy. I want to thank you for reading this section. By now you know that we at Wezapps Limited are a team of high quality professionals working in the field of Software Development and IT since 2015. Our strength is our team and our constant pursuit to be at our best always.</p>

                            <p>Once your brand is associated with us, we feel and think about it as our own. We treat your brand with the same passion and creativity as you do. At every step we think of making sure that we promote you and uplift your brand.We ensure that every detail of your project with us is completed to the highest standard, from the look and feel of your website to its visibility in search engines and on all other necessary platforms or devices.</p>
                            <p>We understand that every business has unique needs, and our team is ready to work with you to create a custom solution tailored to your specific needs. We look forward to hearing from you and helping you achieve success.</p>

                            <h3>Rashik Ishrak Nahian</h3>
                            <span>Chairman , Wezapps Limited</span>
                            <div class="single-team-box">
                                <div class="team-social-icon">
                                    <a href="mailto:rashik.nahian@wezapps.com" class="social-color-1"><i class="fa fa-envelope"></i></a>
                                    <a href="https://twitter.com/r_i_nahian" target="_blank" class="social-color-2"><i class="fa fa-twitter"></i></a>
                                    <a href="https://www.linkedin.com/in/rashiknahian/" target="_blank" class="social-color-3"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('contact')

<section id="contact" class="contact-area pb-100 pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="section-title">
                        <h5>Get In Touch</h5>
                        <h2>Contact us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 col-md-12 wow fadeInUp" data-wow-delay="0.2s">
                    <span style="text-align: left;
                        margin-bottom:5px;
                        display: none;
                        padding: 15px;
                        border-radius:3px;
                        border: 1px solid green;
                        background-color: #99cd99;
                        color: white;" id="success_message_show">
                    </span>
                    <br />
                    <form class="contact-form form" id="contact-form" action="{{route('ContactUsPost')}}" method="post">
                       @csrf 
                       <div class="contact-form_border"></div>  
                        <div class="controls">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group has-error has-danger">
                                        <input id="form_name" type="text" name="name" placeholder="Full Name" required="required" />
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group has-error has-danger">
                                        <input id="form_email" type="email" name="email" placeholder="Email Address" required="required" />
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group has-error has-danger">
                                        <input id="form_phone" type="tel" name="phone" placeholder="Phone Number" required="required" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea id="form_message" name="message" placeholder="Message" rows="4" required="required"></textarea>
                                    </div>
                                </div>
                                
                                
                                <div class="col-md-12">
                                    <button 
                                        type="button" 
                                        id="submitBtn_click"  
                                        class="button g-recaptcha" 
                                        data-sitekey="6LdE63YpAAAAAEe64osX5XLpsGSe5H5sXd6p2Rq2" 
                                        data-callback='submit' 
                                        data-action='submit'
                                        >
                                        Send Message
                                    </button>
                                    
                                    <!--  <button -->
                                    <!--    type="button" -->
                                    <!--    id="submitBtn_click"  -->
                                    <!--    class="button g-recaptcha"-->
                                    <!--    >-->
                                    <!--    Send Message-->
                                    <!--</button>-->
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                
                @section('footer')
                
      
<script>
 
  function submit(token) {

 
  }


 
  
   $('#submitBtn_click').on('click', function(e) {
        e.preventDefault();

        var form = $('#contact-form');
        var isValid = true;

        // Validate specific fields
        var drNameInput = form.find('input[name="name"]');
        if (drNameInput.val().trim() === '') {
            isValid = false;
            // Display error message or perform any desired action
			drNameInput.addClass('error-input');
            
        }else{
			drNameInput.removeClass('error-input');
		}


        var drNameInput = form.find('input[name="email"]');
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (drNameInput.val().trim() === '' || !emailRegex.test(drNameInput.val().trim())) {
            isValid = false;
            // Display error message or perform any desired action
            drNameInput.addClass('error-input');
        } else {
            drNameInput.removeClass('error-input');
        }


	

        var drNameInput = form.find('input[name="phone"]');
        var numberRegex = /^[0-9]+$/;
        if (drNameInput.val().trim() === '' || !numberRegex.test(drNameInput.val().trim())) {
            isValid = false;
            // Display error message or perform any desired action
            drNameInput.addClass('error-input');
        } else {
            drNameInput.removeClass('error-input');
        }


        var messageInput = form.find('textarea[name="message"]');
        if (messageInput.val().trim() === '') {
            isValid = false;
            // Display error message or perform any desired action
            messageInput.addClass('error-input');
        } else {
            messageInput.removeClass('error-input');
        }



        // Add more specific field validations here

        if (isValid) {
            var url = form.attr('action');
            var formData = form.serialize();

            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                success: function(response) {
                    
                    console.log(response);
                    
                    // Handle the success response here
                    $('#success_message_show').css({
						"display":"block"
					});
					
				$('#success_message_show').html('<i class="fa fa-check-circle"></i>' + ' '+response.success_app);
$('#success_message_show').show();
					 form.trigger('reset');

					 setTimeout(function() {
    $('#success_message_show').fadeOut('slow', function() {
        $(this).empty().hide();
    });
}, 3000);
                    
  
		
                    
                },
                error: function(xhr) {
                    // Handle the error response here
                    console.log(xhr.responseText);
                }
            });
        }
    });
   
   
 

   
</script>
                @endsection
                
                <div class="col-lg-5 col-md-12 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="contact-info">
                        <ul>
                            <li>

                                <h2>Address</h2>
                                <p class="address">Flat - 4B, House - 17, Road - 1, <br> Block - A, Niketan, Gulshan 1, <br>Dhaka - 1213, Bangladesh</p>
                                <h2>Phone</h2>
                                <a class="contact-info-link" href="tel:+8801701000654" id="mobile">+880 17 01 000 654</a>
                                <h2>Email</h2>
                                <a class="contact-info-link" href="mailto:contact@wezapps.com.bd">contact@wezapps.com.bd</a>

                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- Map Section Start -->
        <div class="map-area">
        <div class="map-content">
            <div class="map-canvas" id="contact-map"></div>
        </div>
    </div>
    <!-- Map Section End -->
    <style>
	.error-input{
		border:1px solid red !important;
	}
</style>
@endsection
