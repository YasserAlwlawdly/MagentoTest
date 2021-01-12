define([
    'jquery',
    'domReady!'
], function ($) {
    'use strict';

    // Mobile view header links enabling
    $('.header.content > .header.links').clone().appendTo('#store\\.links');

    // Expanding search field onFocus
    $('.header #search').on('focus', function () {
        $(this).parents('.block-search').addClass('expanded');
    });

    $('.header #search').on('blur', function () {
        $(this).parents('.block-search').removeClass('expanded');
    });

    // Hide empty sidebar blocks
    $('.sidebar .block-title.no-display').parents('.block').hide();
});
