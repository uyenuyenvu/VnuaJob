@extends('frontend.layouts.master')
@section('title')
    Trang chủ
@endsection
@section('contents')
<div class="slider_area">
    <div class="single_slider  d-flex align-items-center slider_bg_1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-6">
                    <div class="slider_text">
                        <h5 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">4536+ Cơ hội việc làm</h5>
                        <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">Tìm kiếm công việc mơ ước</h3>
                        <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">Chúng tôi cung cấp các công việc phù hợp với khả năng và thời gian của bạn</p>
                        <div class="sldier_btn wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                            <a href="#" class="boxed-btn3">Tải lên hồ sơ của bạn</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ilstration_img wow fadeInRight d-none d-lg-block text-right" data-wow-duration="1s" data-wow-delay=".2s">
        <img src="{{asset('frontend')}}/img/banner/illustration.png" alt="">
    </div>
</div>
<!-- slider_area_end -->

<!-- catagory_area -->
<div class="catagory_area">
    <div class="container">
        <div class="row cat_search">
            <div class="col-lg-4 col-md-4">
                <div class="single_input">
                    <input type="text" placeholder="Từ khóa">
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="single_input">
                    <select class="wide">
                        <option data-display="Danh mục">Danh mục</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                      </select>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="job_btn">
                    <a href="#" class="boxed-btn3">Tìm kiếm công việc</a>
                </div>
            </div>
        </div>
{{--        <div class="row">--}}
{{--            <div class="col-lg-12">--}}
{{--                <div class="popular_search d-flex align-items-center">--}}
{{--                    <span>Từ khóa phổ biến:</span>--}}
{{--                    <ul>--}}
{{--                        <li><a href="#">Design & Creative</a></li>--}}
{{--                        <li><a href="#">Marketing</a></li>--}}
{{--                        <li><a href="#">Administration</a></li>--}}
{{--                        <li><a href="#">Teaching & Education</a></li>--}}
{{--                        <li><a href="#">Engineering</a></li>--}}
{{--                        <li><a href="#">Software & Web</a></li>--}}
{{--                        <li><a href="#">Telemarketing</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</div>
<!--/ catagory_area -->

<!-- popular_catagory_area_start  -->
{{--<div class="popular_catagory_area">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-12">--}}
{{--                <div class="section_title mb-40">--}}
{{--                    <h3>Danh mục phổ biến</h3>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-4 col-xl-3 col-md-6">--}}
{{--                <div class="single_catagory">--}}
{{--                    <a href="jobs.html"><h4>Design & Creative</h4></a>--}}
{{--                    <p> <span>50</span> Vị trí có sẵn</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-xl-3 col-md-6">--}}
{{--                <div class="single_catagory">--}}
{{--                    <a href="jobs.html"><h4>Marketing</h4></a>--}}
{{--                    <p> <span>50</span> Vị trí có sẵn</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-xl-3 col-md-6">--}}
{{--                <div class="single_catagory">--}}
{{--                    <a href="jobs.html"><h4>Telemarketing</h4></a>--}}
{{--                    <p> <span>50</span> Vị trí có sẵn</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-xl-3 col-md-6">--}}
{{--                <div class="single_catagory">--}}
{{--                    <a href="jobs.html"><h4>Software & Web</h4></a>--}}
{{--                    <p> <span>50</span> Vị trí có sẵn</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-xl-3 col-md-6">--}}
{{--                <div class="single_catagory">--}}
{{--                    <a href="jobs.html"><h4>Administration</h4></a>--}}
{{--                    <p> <span>50</span> Vị trí có sẵn</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-xl-3 col-md-6">--}}
{{--                <div class="single_catagory">--}}
{{--                    <a href="jobs.html"><h4>Teaching & Education</h4></a>--}}
{{--                    <p> <span>50</span> Vị trí có sẵn</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-xl-3 col-md-6">--}}
{{--                <div class="single_catagory">--}}
{{--                    <a href="jobs.html"><h4>Engineering</h4></a>--}}
{{--                    <p> <span>50</span> Vị trí có sẵn</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-xl-3 col-md-6">--}}
{{--                <div class="single_catagory">--}}
{{--                    <a href="jobs.html"><h4>Garments / Textile</h4></a>--}}
{{--                    <p> <span>50</span> Vị trí có sẵn</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- popular_catagory_area_end  -->

<!-- job_listing_area_start  -->
<div class="job_listing_area" id="list_job">
    <div class="container">
        <div class="row align-items-center" style="padding-top: 20px">
            <div class="col-lg-6">
                <div class="section_title">
                    <h3>Danh sách công việc</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="brouse_job text-right">
                    <a href="jobs.html" class="boxed-btn4">Xem thêm công việc</a>
                </div>
            </div>
        </div>
        <div class="job_lists">
            <div class="row">
                @foreach($posts as $post)
                <div class="col-lg-12 col-md-12">
                    <div class="single_jobs white-bg d-flex justify-content-between">
                        <div class="jobs_left d-flex align-items-center">
                            <div class="thumb" style="width: 140px;
    height: 80px;">
                                <img src="/storage/{{$post['image']}}" alt="" style="width: 100%">
                            </div>
                            <div class="jobs_conetent">
                                <a href="job_details.html"><h4>{{$post['info']->title}}</h4></a>
                                <div class="links_locat d-flex align-items-center">
                                    <div class="location">
                                        <p> <i class="fa fa-map-marker"></i>{{$post['info']->location}} </p>
                                    </div>
                                    <div class="location">
                                        <p> <i class="fa fa-clock-o"></i>
                                        @if($post['info']->job_nature === 1)
                                                Part-time
                                            @elseif($post['info']->job_nature === 2)
                                            Full-time
                                            @else
                                            Linh động thời gian
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="jobs_right">
                            <div class="apply_now">
{{--                                <a class="heart_mark" href="#"> <i class="ti-heart"></i> </a>--}}
                                <a href="job_details.html" class="boxed-btn3">Ứng tuyển</a>
                            </div>
                            <div class="date">
                                <p>Hạn nhận hồ sơ: {{date_format(new DateTime($post['info']->deadline),'d-m-Y')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- job_listing_area_end  -->



<div class="top_companies_area" id="company">
    <div class="container">
        <div class="row align-items-center mb-40">
            <div class="col-lg-6 col-md-6">
                <div class="section_title">
                    <h3>Công ty hàng đầu</h3>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="brouse_job text-right">
                    <a href="jobs.html" class="boxed-btn4">Xem thêm công việc</a>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($companies as $company)
            <div class="col-lg-4 col-xl-3 col-md-6">
                <div class="single_company">
                    <div class="thumb" style="    width: 100%;
    height: 100px;
">
                        <img src="/storage/{{$company->logo}}" alt="" style="width: 100%">
                    </div>
                    <a href="{{$company->website}}" target="_blank"><h3>{{$company->name}}</h3></a>
                    <p> <span>50</span> Vị trí có sẵn</p>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>

<!-- job_searcing_wrap  -->
<div class="job_searcing_wrap overlay">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 offset-lg-1 col-md-6">
                <div class="searching_text">
                    <h3>Bạn là sinh viên ?</h3>
                    <a href="#footer" class="boxed-btn3">Liên hệ để đăng ký</a>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 col-md-6">
                <div class="searching_text">
                    <h3>Bạn là người tuyển dụng?</h3>
                    <a href="{{route('employers.register')}}" class="boxed-btn3">Đăng ký tuyển dụng</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- job_searcing_wrap end  -->

<!-- testimonial_area  -->
{{--<div class="testimonial_area  ">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-12">--}}
{{--                <div class="section_title text-center mb-40">--}}
{{--                    <h3>Testimonial</h3>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-xl-12">--}}
{{--                <div class="testmonial_active owl-carousel">--}}
{{--                    <div class="single_carousel">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-11">--}}
{{--                                <div class="single_testmonial d-flex align-items-center">--}}
{{--                                    <div class="thumb">--}}
{{--                                        <img src="{{asset('frontend')}}/img/testmonial/author.png" alt="">--}}
{{--                                        <div class="quote_icon">--}}
{{--                                            <i class="Flaticon flaticon-quote"></i>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="info">--}}
{{--                                        <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering through animal welfare when people might depend on livestock as their only source of income or food.</p>--}}
{{--                                        <span>- Micky Mouse</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="single_carousel">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-11">--}}
{{--                                <div class="single_testmonial d-flex align-items-center">--}}
{{--                                    <div class="thumb">--}}
{{--                                        <img src="{{asset('frontend')}}/img/testmonial/author.png" alt="">--}}
{{--                                        <div class="quote_icon">--}}
{{--                                            <i class=" Flaticon flaticon-quote"></i>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="info">--}}
{{--                                        <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering through animal welfare when people might depend on livestock as their only source of income or food.</p>--}}
{{--                                        <span>- Micky Mouse</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="single_carousel">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-11">--}}
{{--                                <div class="single_testmonial d-flex align-items-center">--}}
{{--                                    <div class="thumb">--}}
{{--                                        <img src="{{asset('frontend')}}/img/testmonial/author.png" alt="">--}}
{{--                                        <div class="quote_icon">--}}
{{--                                            <i class="Flaticon flaticon-quote"></i>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="info">--}}
{{--                                        <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering through animal welfare when people might depend on livestock as their only source of income or food.</p>--}}
{{--                                        <span>- Micky Mouse</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- /testimonial_area  -->
@endsection
