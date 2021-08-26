var isBreakPoint = function (bp) {
    var bps = [320, 480, 600, 768, 1024],
    w = jQuery(window).width(),
    min, max
    for (var i = 0, l = bps.length; i < l; i++) {
      if (bps[i] === bp) {
        min = bps[i-1] || 0
        max = bps[i]
        break
    }
}
return w > min && w <= max
}
jQuery(document).ready(function ($) {
    jQuery('.tabs_spl .tab-links_spl a').on('click', function (e) {
        e.preventDefault();
        var currentAttrValue = jQuery(this).attr('href');
        jQuery('.tabs_spl ' + currentAttrValue).show().siblings().hide();
        jQuery(this).parent('li').addClass('active').siblings().removeClass('active');
    })
    /* style 8 tab switch handler */
    jQuery('.df-spl-style8_cat_tab-container ul li a').on('click', function (e) {
        e.preventDefault();
        var currentAttrValue = jQuery(this).attr('href');
        jQuery('.style-8-container ' + currentAttrValue).show(300).siblings('.tab').hide(300);
        jQuery(this).parent('li').addClass('active').siblings().removeClass('active');
    })
    jQuery('.spl-mysearch').keyup(function(event) {
        var priceListId = $(event.currentTarget).data('target');
        var $priceList = $('#'+priceListId);
        var style = $priceList.data('style');
        var $priceItems = $priceList.find('.internal-box');
        if (!$priceItems.length) {
            $priceItems = $priceList.find('.name-price-desc');
        }
        // var $rows = $('#table tr');
        var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
        var filtered = $priceItems.show().filter(function() {
            var text = $(this).find('.name.a-tag').text().replace(/\s+/g, ' ').toLowerCase();
            return !~text.indexOf(val);
        }).hide();
        switch (style) {
            case 'style_3':
            $('.grid-sizer', $priceList).show().filter((i,e) => !Boolean($(e).find('.internal-box:visible').length)).hide()
            break;
            case ('without_tab'):
            $('.head-title.tab-links_spl.spl_cat_title_style_2').show().next('.cat_descreption.row').show();
            $('.style-2-row', $priceList).show().filter((i,e) => !Boolean($(e).find('.name-price-desc:visible').length))
            .each((i,e) => $(e).prevAll('.head-title.tab-links_spl.spl_cat_title_style_2:eq(0)').hide().next('.cat_descreption.row').hide());
            break;
            case ('without_tab_single_column'):
            $('.head-title.tab-links_spl.spl_cat_title_style_2').show().next('.cat_descreption.row').show();
            $('.style-2-row', $priceList).show().filter((i,e) => !Boolean($(e).find('.name-price-desc:visible').length))
            .each((i,e) => $(e).prevAll('.head-title.tab-links_spl.spl_cat_title_style_2:eq(0)').hide().next('.cat_descreption.row').hide());
            break;
            case ('style_4'):
                // show them up before applying hide operation
                $('.head-title.tab-links_spl.head_title_style_3.spl_cat_heading_style_4', $priceList).show().next('.cat_descreption.row').show()
                // filtering out the grids with items in it
                $('.for-style-4').filter((i,e) => !Boolean($(e).find('.internal-box:visible').length))
                .each((i,e) => $(e).find('.head-title.tab-links_spl.head_title_style_3.spl_cat_heading_style_4').hide().next('.cat_descreption.row').hide());
                default:
                break;
            }
        });
    jQuery('.df-spl-style7_cat_tab-container.tabs_spl ul a').on('click', function (e) {
        e.preventDefault();
        var currentAttrValue = jQuery(this).attr('href');
        jQuery('.tabs_spl ' + currentAttrValue).show().siblings().hide();
        if (isBreakPoint(600 && 480)) {    
            jQuery('html, body').animate({
                scrollTop: (jQuery('.tabs_spl ' + currentAttrValue).offset().top) - 100
            }, 500);
        }
        jQuery(this).parent('li').addClass('active').siblings().removeClass('active');
    })
})