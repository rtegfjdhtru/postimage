$(function(){

//ハンバーガーメニュー
var  $menu__terget = $('.js-menu-trigger');

$($menu__terget).on('click',function () {
    $(this).toggleClass('active');
    $('.p-side__menu').toggleClass('active');
    $('.js-cover').toggle();
});

// $($menu__terget).on('click',function () {
//      $('.js-cover').hide();
// });

});