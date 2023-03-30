
@extends('index2')
@section('title','Siguenos en nuestas redes sociales | MaProDerm')
@section('content')
<div class="post d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl">
        <!--begin::About card-->
        <div class="card">
            <div class="d-flex flex-center mb-5 mb-lg-15">
                    <!--begin::Tabs-->
                    <ul class="nav border-transparent flex-center fs-5 fw-bold">
                        <li class="nav-item">
                            <a class="nav-link text-gray-500 text-active-primary px-3 px-lg-6 active" href="javascript:;" data-bs-toggle="tab" data-bs-target="#kt_landing_projects_latest">Click en los íconos</a>
                        </li>
                    </ul>
                    <!--end::Tabs-->
                </div>
            <!--begin::Body-->
            <div class="card-body p-lg-17">
                <!--begin::Team-->
                <div class="mb-18">
                    <!--begin::Wrapper-->
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-4 gy-10">
                        {{-- INSTAGRAM --}}
                        <div class="col text-center mb-9">
                            <a href="https://www.instagram.com/maproderm/" target="_blank">
                                <div class="octagon mx-auto mb-2 d-flex w-150px h-150px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('/metronic/assets/media/social/instagram.jpg')"></div>
                                <div class="mb-0">
                                    {{-- <a href="https://www.instagram.com/maproderm/" target="_blank" class="text-dark fw-bolder text-hover-primary fs-3">0</a> --}}
                                    <div class="text-dark fw-bolder text-hover-primary fs-3" data-kt-countup="true" data-kt-countup-suffix="+" data-kt-countup-value="18200" >0</div>
                                    <div class="text-muted fs-6 fw-bold">Seguidores</div>
                                </div>
                            </a>
                        </div>



                        {{-- TIKTOK --}}
                        <div class="col text-center mb-9">
                            <a href="https://www.tiktok.com/@maproderm" target="_blank">
                                <div href="www.hola.com" class="octagon mx-auto mb-2 d-flex w-150px h-150px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('/metronic/assets/media/social/tiktok.jpg')"></div>
                                <div class="mb-0">
                                    {{-- <a href="hola.com" class="text-dark fw-bolder text-hover-primary fs-3">Instagram</a> --}}
                                    <div class="text-dark fw-bolder text-hover-primary fs-3" data-kt-countup="true" data-kt-countup-suffix="+" data-kt-countup-value="1700" >0</div>
                                    <div class="text-muted fs-6 fw-bold">Seguidores</div>
                                </div>
                            </a>
                        </div>

                        {{-- YOUTUBE --}}
                        <div class="col text-center mb-9">
                            <a href="https://www.youtube.com/@maproderm" target="_blank">
                                <div href="www.hola.com" class="octagon mx-auto mb-2 d-flex w-150px h-150px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('/metronic/assets/media/social/youtube.jpg')"></div>
                                <div class="mb-0">
                                    {{-- <a href="hola.com" class="text-dark fw-bolder text-hover-primary fs-3">Instagram</a> --}}
                                    <div class="text-dark fw-bolder text-hover-primary fs-3" data-kt-countup="true" data-kt-countup-suffix="+" data-kt-countup-value="150" >0</div>
                                    <div class="text-muted fs-6 fw-bold">Seguidores</div>
                                </div>
                            </a>
                        </div>

                        {{-- FACEBOOK --}}
                        <div class="col text-center mb-9">
                            <a href="https://www.facebook.com/maproderm" target="_blank">
                                <div href="www.hola.com" class="octagon mx-auto mb-2 d-flex w-150px h-150px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('/metronic/assets/media/social/facebook.jpg')"></div>
                                <div class="mb-0">
                                    {{-- <a href="hola.com" class="text-dark fw-bolder text-hover-primary fs-3">Facebook</a> --}}
                                    <div class="text-dark fw-bolder text-hover-primary fs-3" data-kt-countup="true" data-kt-countup-suffix="+" data-kt-countup-value="24000" >0</div>
                                    <div class="text-muted fs-6 fw-bold">Seguidores</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Team-->
                <!--begin::Join-->
                <div class="text-center mb-20">
                    <!--begin::Top-->
                    <div class="mb-13">
                        <!--begin::Title-->
                        <h3 class="fs-2hx text-dark mb-5">Búscanos como <br>@maproderm <br> en todas las redes sociales</h3>
                        <!--end::Title-->
                    </div>
                    <!--end::Top-->
                </div>
                <!--end::Join-->
                <!--begin::Card-->
                {{-- <div class="card mb-4 bg-light text-center">
                    <!--begin::Body-->
                    <div class="card-body py-12">
                        <!--begin::Icon-->
                        <a href="#" class="mx-4">
                            <img src="/metronic/assets/media/svg/brand-logos/facebook-4.svg" class="h-30px my-2" alt="">
                        </a>
                        <!--end::Icon-->
                        <!--begin::Icon-->
                        <a href="#" class="mx-4">
                            <img src="/metronic/assets/media/svg/brand-logos/instagram-2-1.svg" class="h-30px my-2" alt="">
                        </a>
                        <!--end::Icon-->
                        <!--begin::Icon-->
                        <a href="#" class="mx-4">
                            <img src="/metronic/assets/media/svg/brand-logos/twitter.svg" class="h-30px my-2" alt="">
                        </a>
                        <!--end::Icon-->
                        <!--begin::Icon-->
                        <a href="#" class="mx-4">
                            <img src="/metronic/assets/media/svg/brand-logos/dribbble-icon-1.svg" class="h-30px my-2" alt="">
                        </a>
                        <!--end::Icon-->
                    </div>
                    <!--end::Body-->
                </div> --}}
                <!--end::Card-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::About card-->
    </div>
    <!--end::Container-->
</div>
@endsection
