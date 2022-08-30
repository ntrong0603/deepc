<script>

    var nameHotspot = {
        'tong_the_du_an':'{{ trans('all.tong_the_du_an') }}',
        'overview1' : '{{ trans('all.overview1') }}',
        'overview2' : '{{ trans('all.overview2') }}',
        'overview3' : '{{ trans('all.overview3') }}',
        'san_pham' : '{{ trans('all.san_pham') }}',
        'dat_cong_nghiep_cho_thue': '{{ trans('all.dat_cong_nghiep_cho_thue') }}',
        'nha_xuong_xay_san' : '{{ trans('all.nha_xuong_xay_san') }}',
        'dat_cong_nghiep_hoa_chat_hoa_dau' : '{{ trans('all.dat_cong_nghiep_hoa_chat_hoa_dau') }}',
        'tien_ich_noi_khu' : '{{ trans('all.tien_ich_noi_khu') }}',
        'cang_hang_long' : '{{ trans('all.cang_hang_long') }}',
        'khu_hoa_dau' : '{{ trans('all.khu_hoa_dau') }}',
        'tram_bien_ap' : '{{ trans('all.tram_bien_ap') }}',
        'tram_cat_dien' : '{{ trans('all.tram_cat_dien') }}',
        'nha_may_xu_ky_nuoc_thai' : '{{ trans('all.nha_may_xu_ky_nuoc_thai') }}',
        'cong_chao' : '{{ trans('all.cong_chao') }}',
        'duong_noi_bo' : '{{ trans('all.duong_noi_bo') }}',
        'duong_lam_tu_rac_thai_nhua' : '{{ trans('all.duong_lam_tu_rac_thai_nhua') }}',
        'nha_may_bridgestone': '{{ trans('all.nha_may_bridgestone') }}',
        'cang_dinh_vu': '{{ trans('all.cang_dinh_vu') }}',
        'cao_toc_ha_noi_hai_phong': '{{ trans('all.cao_toc_ha_noi_hai_phong') }}',
        'cang_nuoc_sau_lach_huyen_deep_c_hai_phong_III': '{{ trans('all.cang_nuoc_sau_lach_huyen_deep_c_hai_phong_III') }}',
    }

    var imageHotspot = {
        'cau-tan-vu-lach-huyen': 'images\\cau_tan_vu_lach_huyen{{(Session::get('website_language') == 'en') ? '_en' : ''}}.png',
        'cang-lach-huyen': 'images\\cang_lach_huyen{{(Session::get('website_language') == 'en') ? '_en' : ''}}.png',
        'cau-cau-bach-dang': 'images\\cau_bach_dang{{(Session::get('website_language') == 'en') ? '_en' : ''}}.png',
        'cang-hai-phong': 'images\\cang_hai_phong{{(Session::get('website_language') == 'en') ? '_en' : ''}}.png',
        'dinh-vu-plaza': 'images\\dinh_vu_plaza{{(Session::get('website_language') == 'en') ? '_en' : ''}}.png',
        'cang-hang-khong': 'images\\cang_hang_khong_quoc_te_cat_bi{{(Session::get('website_language') == 'en') ? '_en' : ''}}.png',
        'deep-c-iii': 'images\\deep_c_hp_iii{{(Session::get('website_language') == 'en') ? '_en' : ''}}.png',
        'cao-toc-hn-hp': 'images\\cao_toc_ha_noi_hai_phong{{(Session::get('website_language') == 'en') ? '_en' : ''}}.png',
        'cao-toc-hp-hl-vd': 'images\\cao_toc_hai_phong_ha_long_van_don{{(Session::get('website_language') == 'en') ? '_en' : ''}}.png',
        'service-complex': 'images\\service_complex{{(Session::get('website_language') == 'en') ? '_en' : ''}}.png',
    }

    var infor = {
        'gd1': `{!! trans('all.infor_gd1') !!}`,
        'gd2': `{!! trans('all.infor_gd2') !!}`,
    }
</script>
