<!DOCTYPE html>
<html>

<head>
    <title>{{getSetting("title")}}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta name="description" content="{{getSetting("keywork")}}">
    <meta name="keywords" content="{{getSetting("description")}}" />
    <link rel="shortcut icon" type="{{ asset('upload/images/'. getSetting("logo"))}}" />
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('front-end/css/style.css')}}">
</head>

<body>
    <script src="{{ asset('front-end/tour.js')}}"></script>
    <div id="pano" style="width:100%;height:100%;">
        <noscript>
            <table style="width:100%;height:100%;">
                <tr style="vertical-align:middle;">
                    <td>
                        <div style="text-align:center;">ERROR:<br /><br />Javascript not activated<br /><br /></div>
                    </td>
                </tr>
            </table>
        </noscript>
        <script>
            embedpano({ swf: "{{ asset('front-end/tour.swf')}}", xml: "{{ asset('front-end/tour.xml')}}", target: "pano", html5: "auto", mobilescale: 1.0, passQueryParameters: true });
        </script>
    </div>
    <div id="btn-nav" class="show">
        <img src="{{ asset('front-end/images/angle-right-solid.svg')}}" alt="angle-right-solid.svg">
    </div>
    <nav class="show">
        <div class="logo-nav">
            <img src="{{ asset('upload/images/'. getSetting("logo"))}}" alt="Logo {{getSetting("title")}}">
        </div>
        <ul>
            <li class="dropdown">
                <a>{{ trans('all.tong_the_du_an') }}</a>
                <ul>
                    <li class="active" data-scene="scene_tongquan1-200m_GD1">
                        {{ trans('all.overview1') }}
                    </li>
                    <li data-scene="scene_tongquan2-200m_gd2-1">
                        {{ trans('all.overview2') }}
                    </li>
                    <li data-scene="scene_tongquan3-300m_gd2-2">
                        {{ trans('all.overview3') }}
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a>{{ trans('all.san_pham') }}</a>
                <ul>
                    <li data-scene="scene_tongquan2-200m_gd2-1">{{ trans('all.dat_cong_nghiep_cho_thue') }}</li>
                    <li data-hospot="hotspot_nha-xuong-1-30m">{{ trans('all.nha_xuong_xay_san') }}</li>
                    <li data-hospot="hotspot_khu-hoa-dau-100m">{{ trans('all.dat_cong_nghiep_hoa_chat_hoa_dau') }}</li>
                </ul>
            </li>
            <li class="dropdown">
                <a>{{ trans('all.tien_ich_noi_khu') }}</a>
                <ul>
                    <li data-hospot="hotspot_cang-hang-long-50m">{{ trans('all.cang_hang_long') }}</li>
                    <li data-hospot="hotspot_khu-hoa-dau-100m">{{ trans('all.khu_hoa_dau') }}</li>
                    <li data-hospot="hotspot_tram-dien-50m">{{ trans('all.tram_bien_ap') }}</li>
                    <li data-hospot="hotspot_tram-cat-dien">{{ trans('all.tram_cat_dien') }}</li>
                    <li data-hospot="hotspot_nha-may-nuoc-thai-30m">{{ trans('all.nha_may_xu_ky_nuoc_thai') }}</li>
                    <li data-hospot="hotspot_cong-deep-c-15m">{{ trans('all.cong_chao') }}</li>
                    <li data-hospot="hotspot_duong-noi-bo">{{ trans('all.duong_noi_bo') }}</li>
                    <li data-scene="scene_duong-lam-rac-thai-nhua-20m_">{{ trans('all.duong_lam_tu_rac_thai_nhua') }}
                    </li>
                    <li data-hospot="hotspot_nha-may-bridestones-2-50m_">{{ trans('all.nha_may_bridgestone') }}</li>
                </ul>
            </li>
        </ul>
    </nav>

    <a class="chat" data-tooltip="{{ trans('all.contact') }}">
        <div class="btn-chat">
            <img src="{{ asset('front-end/images/envelope-regular.svg')}}" alt="btn contact">
        </div>
    </a>

    <div class="popup popup-contact">
        <div class="popup-info">
            <div class="popup-title">
                <div class="logo-nav">
                    <img src="{{ asset('upload/images/'. getSetting("logo"))}}" alt="Logo Nam Đình Vũ">
                </div>
                <h1>{{ trans('all.contact') }}</h1>
                {{-- <a class="popup-btn-close">
                </a> --}}
            </div>
            <div class="popup-form-contact">
                <form method="POST">
                    <dl class="form-group">

                        <dd>
                            <input type="text" name="name" id="name" placeholder="{{ trans('all.name') }}"
                                autocomplete="off">
                        </dd>
                    </dl>
                    <dl class="form-group">

                        <dd>
                            <input type="text" name="profection" id="profection" placeholder="{{ trans('all.career') }}"
                                autocomplete="off">
                        </dd>
                    </dl>
                    <dl class="form-group">

                        <dd>
                            <input type="text" name="email" id="email" placeholder="{{ trans('all.email') }}"
                                autocomplete="off">
                        </dd>
                    </dl>
                    <dl class="form-group">

                        <dd>
                            <input type="text" name="phone" id="phone" placeholder="{{ trans('all.phone') }}"
                                autocomplete="off">
                        </dd>
                    </dl>
                    <dl class="form-group">

                        <dd>
                            <textarea name="note" id="note" cols="30" rows="10"
                                placeholder="{{ trans('all.note') }}"></textarea>
                        </dd>
                    </dl>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-submit">{{ trans('all.submit') }}</button>
                        <button type="reset" class="btn btn-clear">{{ trans('all.reset') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="loading">
        <div class="loader">

        </div>
    </div>
    <div class="language">
        <ul>
            <li>
                <a href="{{route('changeLanguage', ["vi"])}}" class="vi
                    @if(empty(Session::get('website_language')) || Session::get('website_language') == 'vi') is-active
                    @endif "></a>
            </li>
            <li>
                <a href=" {{route('changeLanguage', ["en"])}}" class="en
                @if(Session::get('website_language') == 'en') is-active @endif "></a>
            </li>
        </ul>
    </div>
    <div id="btn-info" style="display: none">
        <img src="{{ asset('front-end/images/i_info.png')}}" alt="icon info">
    </div>
    <div class="popup popup-desc">
        <div class="popup-info">
            <a class="popup-btn-close">
            </a>
            <div class="popup-title">
                <a class="popup-btn-close">
                </a>
            </div>
            <div class="popup-content popup-desc-content">
            </div>
        </div>
    </div>
</body>
@include('front_end.js')
<script>
    var urlGetInfo = " {{route('getData')}}";
    var urlGetList="{{route('getList')}}" ;
    var urlContact="{{route('contact.send')}}" ;
    var infoCustomer = "infoCustomer_{{(empty(Session::get('website_language')) || Session::get('website_language') == 'vi') ? 'vi' : 'en'}}";
</script>
<script src="{{ asset('front-end/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{ asset('front-end/js/sweetalert2.all.min.js')}}"></script>
<script src="{{ asset('front-end/js/main.js')}}"></script>
<script></script>

</html>
