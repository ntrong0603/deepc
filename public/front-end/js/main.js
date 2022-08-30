var krpano = document.getElementById("krpanoSWFObject");
var menu = $("nav");
var time = 5000;
var loading = $(".loading");
function alretCustom(icon, title)
{
    Swal.fire({
        position: 'center-center',
        icon: icon,
        title: title,
        showConfirmButton: false,
        timer: 1500
    })
}
function loadSceneMenu(scene)
{
    krpano.call("loadscene(" + scene + ",null,MERGE,OPENBLEND(1.0, -0.5, 0.3, 0.8, linear))");
}

function setTextHoverHotspot()
{
    //Name scene
    krpano.call("set(scene['scene_tongquan1-200m_GD1'].title, '" + nameHotspot['overview1'] + "')");
    krpano.call("set(scene['scene_tongquan2-200m_GD2-1'].title, '" + nameHotspot['overview2'] + "')");
    krpano.call("set(scene['scene_tongquan3-300m_GD2-2'].title, '" + nameHotspot['overview3'] + "')");
    krpano.call("set(scene['scene_cang-dinh-vu'].title, '" + nameHotspot['cang_dinh_vu'] + "')");
    krpano.call("set(scene['scene_cang-hang-long-50m'].title, '" + nameHotspot['cang_hang_long'] + " (50m)')");
    krpano.call("set(scene['scene_cang-hang-long'].title, '" + nameHotspot['cang_hang_long'] + "')");
    krpano.call("set(scene['scene_cang-hang-long-100m'].title, '" + nameHotspot['cang_hang_long'] + " (100m)')");
    krpano.call("set(scene['scene_cong-deep-c-15m'].title, '" + nameHotspot['cong_chao'] + " (15m)')");
    krpano.call("set(scene['scene_cong-deep-c'].title, '" + nameHotspot['cong_chao'] + "')");
    krpano.call("set(scene['scene_duong-lam-rac-thai-nhua-20m_'].title, '" + nameHotspot['duong_lam_tu_rac_thai_nhua'] + " (20m)')");
    krpano.call("set(scene['scene_duong-lam-rac-thai-nhua'].title, '" + nameHotspot['duong_lam_tu_rac_thai_nhua'] + "')");
    krpano.call("set(scene['scene_duong-noi-bo'].title, '" + nameHotspot['duong_noi_bo'] + "')");
    krpano.call("set(scene['scene_khu-hoa-dau-100m'].title, '" + nameHotspot['khu_hoa_dau'] + " (100m)')");
    krpano.call("set(scene['scene_khu-hoa-dau-50m'].title, '" + nameHotspot['khu_hoa_dau'] + " (50m)')");
    krpano.call("set(scene['scene_nha-may-bridestones-2-50m_'].title, '" + nameHotspot['nha_may_bridgestone'] + " (2 - 50m)')");
    krpano.call("set(scene['scene_nha-may-bridestones-4-150m_'].title, '" + nameHotspot['nha_may_bridgestone'] + " (4 - 150m)')");
    krpano.call("set(scene['scene_nha-may-nuoc-thai-30m'].title, '" + nameHotspot['nha_may_xu_ky_nuoc_thai'] + " (30m)')");
    krpano.call("set(scene['scene_nha-may-nuoc-thai-20m'].title, '" + nameHotspot['nha_may_xu_ky_nuoc_thai'] + " (20m)')");
    krpano.call("set(scene['scene_nha-xuong-1-30m'].title, '" + nameHotspot['nha_xuong_xay_san'] + " (30m)')");
    krpano.call("set(scene['scene_nha-xuong'].title, '" + nameHotspot['nha_xuong_xay_san'] + "')");
    krpano.call("set(scene['scene_nha-xuong-2'].title, '" + nameHotspot['nha_xuong_xay_san'] + " (2)')");
    krpano.call("set(scene['scene_tram-cat-dien'].title, '" + nameHotspot['tram_bien_ap'] + "')");
    krpano.call("set(scene['scene_tram-dien-50m'].title, '" + nameHotspot['tram_cat_dien'] + "')");

    //Hotspot
    krpano.call("set(hotspot['hotspot_tongquan1-200m_GD1'].onhover, showtext('" + nameHotspot['overview1'] + "',hotspottextstyle))");
    krpano.call("set(hotspot['hotspot_tongquan2-200m_gd2-1'].onhover, showtext('" + nameHotspot['overview2'] + "',hotspottextstyle))");
    krpano.call("set(hotspot['hotspot_tongquan3-300m_gd2-2'].onhover, showtext('" + nameHotspot['overview3'] + "',hotspottextstyle))");
    krpano.call("set(hotspot['hotspot_cang-dinh-vu'].onhover, showtext('" + nameHotspot['cang_dinh_vu'] + "',hotspottextstyle))");
    krpano.call("set(hotspot['hotspot_cang-hang-long-50m'].onhover, showtext('" + nameHotspot['cang_hang_long'] + " (50m)',hotspottextstyle))");
    krpano.call("set(hotspot['hotspot_cang-hang-long'].onhover, showtext('" + nameHotspot['cang_hang_long'] + "',hotspottextstyle))");
    krpano.call("set(hotspot['hotspot_cang-hang-long-100m'].onhover, showtext('" + nameHotspot['cang_hang_long'] + " (100m)',hotspottextstyle))");
    krpano.call("set(hotspot['hotspot_cong-deep-c-15m'].onhover, showtext('" + nameHotspot['cong_chao'] + " (15m)',hotspottextstyle))");
    krpano.call("set(hotspot['hotspot_cong-deep-c'].onhover, showtext('" + nameHotspot['cong_chao'] + "',hotspottextstyle))");
    krpano.call("set(hotspot['hotspot_khu-hoa-dau-100m'].onhover, showtext('" + nameHotspot['khu_hoa_dau'] + " (100m)',hotspottextstyle))");
    krpano.call("set(hotspot['hotspot_khu-hoa-dau-50m'].onhover, showtext('" + nameHotspot['khu_hoa_dau'] + " (50m)',hotspottextstyle))");
    krpano.call("set(hotspot['hotspot_duong-noi-bo'].onhover, showtext('" + nameHotspot['duong_noi_bo'] + "',hotspottextstyle))");
    krpano.call("set(hotspot['hotspot_nha-may-bridestones-2-50m_'].onhover, showtext('" + nameHotspot['nha_may_bridgestone'] + " (2 - 50m)',hotspottextstyle))");
    // krpano.call("set(hotspot['hotspot_nha-may-bridestones-4-150m'].onhover, showtext('" + nameHotspot['nha_may_bridgestone'] + " (4 - 150m)',hotspottextstyle))");
    krpano.call("set(hotspot['hotspot_nha-may-bridestones-4-100m'].onhover, showtext('" + nameHotspot['nha_may_bridgestone'] + " (4 - 150m)',hotspottextstyle))");
    krpano.call("set(hotspot['hotspot_nha-may-nuoc-thai-30m'].onhover, showtext('" + nameHotspot['nha_may_xu_ky_nuoc_thai'] + " (30m)',hotspottextstyle))");
    krpano.call("set(hotspot['hotspot_nha-may-nuoc-thai-20m'].onhover, showtext('" + nameHotspot['nha_may_xu_ky_nuoc_thai'] + " (20m)',hotspottextstyle))");
    krpano.call("set(hotspot['hotspot_nha-xuong-1-30m'].onhover, showtext('" + nameHotspot['nha_xuong_xay_san'] + " (30m)',hotspottextstyle))");
    krpano.call("set(hotspot['hotspot_nha-xuong'].onhover, showtext('" + nameHotspot['nha_xuong_xay_san'] + "',hotspottextstyle))");
    krpano.call("set(hotspot['hotspot_nha-xuong-2'].onhover, showtext('" + nameHotspot['nha_xuong_xay_san'] + " (2)',hotspottextstyle))");
    krpano.call("set(hotspot['hotspot_tram-dien-50m'].onhover, showtext('" + nameHotspot['tram_bien_ap'] + "',hotspottextstyle))");
    krpano.call("set(hotspot['hotspot_tram-cat-dien'].onhover, showtext('" + nameHotspot['tram_cat_dien'] + "',hotspottextstyle))");
    krpano.call("set(hotspot['hotspot_duong-lam-rac-thai-nhua-20m'].onhover, showtext('" + nameHotspot['duong_lam_tu_rac_thai_nhua'] + " (20m)',hotspottextstyle))");
    krpano.call("set(hotspot['hotspot_duong-lam-rac-thai-nhua'].onhover, showtext('" + nameHotspot['duong_lam_tu_rac_thai_nhua'] + "',hotspottextstyle))");
    krpano.call("set(hotspot['hotspot_left'].onhover, showtext('" + nameHotspot['cao_toc_ha_noi_hai_phong'] + "',hotspottextstyle))");
    krpano.call("set(hotspot['hotspot_right'].onhover, showtext('" + nameHotspot['cang_nuoc_sau_lach_huyen_deep_c_hai_phong_III'] + "',hotspottextstyle))");

    //Hotspot image
    krpano.call("set(hotspot['hotspot-ctvlh'].onhover, showimage('" + imageHotspot['cau-tan-vu-lach-huyen'] + "',hotspottextstyle));");
    krpano.call("set(hotspot['hotspot-clh'].onhover, showimage('" + imageHotspot['cang-lach-huyen'] + "',hotspottextstyle));");
    krpano.call("set(hotspot['hotspot-cbd'].onhover, showimage('" + imageHotspot['cau-cau-bach-dang'] + "',hotspottextstyle));");
    krpano.call("set(hotspot['hotspot-chp'].onhover, showimage('" + imageHotspot['cang-hai-phong'] + "',hotspottextstyle));");
    krpano.call("set(hotspot['hotspot-dvplaza'].onhover, showimage('" + imageHotspot['dinh-vu-plaza'] + "',hotspottextstyle));");
    krpano.call("set(hotspot['hotspot-chkcatbi'].onhover, showimage('" + imageHotspot['cang-hang-khong'] + "',hotspottextstyle));");
    krpano.call("set(hotspot['hotspot-deep-c-hp-iii'].onhover, showimage('" + imageHotspot['deep-c-iii'] + "',hotspottextstyle));");
    krpano.call("set(hotspot['hotspot-cthn-hp'].onhover, showimage('" + imageHotspot['cao-toc-hn-hp'] + "',hotspottextstyle));");
    krpano.call("set(hotspot['hotspot-hp-hl-vd'].onhover, showimage('" + imageHotspot['cao-toc-hp-hl-vd'] + "',hotspottextstyle));");
    krpano.call("set(hotspot['hotspot-service_complex'].onhover, showimage('" + imageHotspot['service-complex'] + "',hotspottextstyle));");


}

function showLand()
{
    var loDatTrong = [];
    var loDatGiuCho = [];
    var loDatDaChoThue = [];
    loading.css("display", "flex");
    $.ajax({
        url: urlGetList,
        type: 'GET',
        data: {},
        success: function (result)
        {
            loDatTrong = [...result.loDatTrong];
            loDatGiuCho = [...result.loDatGiuCho];
            loDatDaChoThue = [...result.loDatDaChoThue];
            loDatTrong.forEach(function (el, i)
            {
                krpano.call("set(hotspot['" + el + "'].fillalpha,.5);");
            });
            setTimeout(function ()
            {
                loDatTrong.forEach(function (el, i)
                {
                    krpano.call("set(hotspot['" + el + "'].fillalpha, 0);");
                });
            }, time);

            loDatDaChoThue.forEach(function (el, i)
            {
                krpano.call("set(hotspot['" + el + "'].fillcolor, 0xdd2528); set(hotspot['" + el + "'].bordercolor, 0xdd2528);");
            });
            loading.css("display", "none");
        }
    });
    debugger;
}
function looktoLocation(hotspot)
{
    krpano.call("loadscene(get(scene[0].name),null,MERGE,OPENBLEND(1.0, -0.5, 0.3, 0.8, linear));looktohotspot(" + hotspot + ");");
}
$("#btn-nav").on("click", function (e)
{
    if (menu.hasClass("show"))
    {
        menu.removeClass("show");
        $(this).removeClass("show");
    } else
    {
        menu.addClass("show");
        $(this).addClass("show");
    }
});

$(".dropdown li").click(function (e)
{
    e.stopPropagation();
    if ($(this).data('scene'))
    {
        $(".active").each(function ()
        {
            $(this).removeClass("active");
        });
        $(this).addClass('active');
        loadSceneMenu($(this).data('scene'));
    }

    if ($(this).data('hospot'))
    {
        var nameHotspot = $(this).data('hospot');
        $(".active").each(function ()
        {
            $(this).removeClass("active");
        });
        $(this).addClass('active');
        looktoLocation(nameHotspot);
        setTimeout(function ()
        {
            krpano.call("hotspot[" + nameHotspot + "].onclick()");
        }, 1500);
    }
    menu.removeClass("show");
    $("#btn-nav").removeClass("show");
});
$(".popup").click(function ()
{
    $(this).removeClass("active");
})
$(".popup-info").click(function (e)
{
    e.stopPropagation();
});
$(".popup-btn-close").click(function ()
{
    $(".popup").removeClass("active");
});
$(".chat").click(function ()
{
    var popup = $(".popup-contact");
    if (popup.hasClass("active"))
    {
        popup.removeClass("active");
    } else
    {
        $(".popup").removeClass("active");
        popup.addClass("active");
    }
});
$(".popup-form-contact form").submit(function (e)
{
    e.preventDefault();
    e.stopPropagation();
    $(".form-group").removeClass("errors");
    $(".errors-desc").remove();
    loading.css("display", "flex");
    var data = {
        name: $("input[name='name']").val(),
        profection: $("input[name='profection']").val(),
        email: $("input[name='email']").val(),
        phone: $("input[name='phone']").val(),
        note: $("textarea[name='note']").val(),
    }
    $.ajax({
        url: urlContact,
        type: 'POST',
        data: data,
        success: function (result)
        {
            if (result.error == 1)
            {
                alretCustom("error", result.Messager);
            } else
            {
                alretCustom("success", "Gửi thông tin thành công");
            }
            loading.css("display", "none");
        },
        statusCode: {
            422: function (e)
            {
                $(".form-group").removeClass("errors");
                $(".errors-desc").remove();
                //errors
                //<span class="errors-desc"></span>
                $.each(e.responseJSON.errors, function (i, item)
                {
                    var iName = $("input[name='" + i + "']");
                    var iName2 = $("textarea[name='" + i + "']");
                    if (typeof iName != 'undefined')
                    {
                        var parent = iName.parent().parent();
                        parent.removeClass("errors");
                        parent.addClass("errors");
                        for (var i = 0; i < item.length; i++)
                        {
                            iName.after('<span class="errors-desc">' + item[i] + '</span>');
                        }
                    }
                    if (typeof iName2 != 'undefined')
                    {
                        var parent = iName2.parent().parent();
                        parent.removeClass("errors");
                        parent.addClass("errors");
                        for (var i = 0; i < item.length; i++)
                        {
                            iName2.after('<span class="errors-desc">' + item[i] + '</span>');
                        }
                    }
                });
                loading.css("display", "none");
            }
        }
    });
});
$(".popup-form-contact form").on('reset', function (e)
{
    $(".form-group").removeClass("errors");
    $(".errors-desc").remove();
})
$(function ()
{
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});
$("#btn-info").click(function (e)
{
    var popup = $(".popup-desc");
    if (popup.hasClass("active"))
    {
        popup.removeClass("active");
    } else
    {
        $(".popup").removeClass("active");
        popup.addClass("active");
    }
});
function info(id = "")
{
    var popup = $(".popup-desc");
    var btn = $("#btn-info");
    if (id == "")
    {
        btn.hide();
        popup.removeClass("active");
    } else
    {
        btn.show();
        popup.removeClass("active");
        popupInfo(id);
    }
}

function popupInfo(name)
{
    var popup = $(".popup.popup-desc");
    var btn = $("#btn-info");
    if (!popup.hasClass("active"))
    {
        let html = $.parseHTML(infor[name]);
        $(".popup-desc .popup-content").html(html);
    } else
    {
        $(".popup-desc .popup-content").html("");
    }
}

