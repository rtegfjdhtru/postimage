// import Vue from 'vue';
//
// new Vue({
//     el:'#app1',
//     data:{
// preview:''
//     },
//     methods: {
//         changePrev: function (e) {
//             var file = e.target.files[0];
//             if (file && file.type.match(/^image\/(png|jpeg)$/)) {
//                 this.preview = URL.createObjectURL(file);
//             }
//         }
//     }
// });
//
//
//
// let  $dropArea = $('.p-purof__area');
//
// $dropArea.on('dragover',function (e) {
//     e.stopPropagation();
//     e.preventDefault();
//     $(this).css('border','3px dashed #fd7e14');
// });
//
// $dropArea.on('dragleave',function (e) {
//     $(this).css('border','none');
// });
//
//
//
//
//  $('.js-click--anime').on('click',function () {
//     let $this = $(this);
//
//      $this.toggleClass('color--star');
//     $this.toggleClass('color--star--is-active');
//      $this.toggleClass('fas');
//
//
//  });







$(function(){


var $dropArea = $('.p-purof__area');

$dropArea.on('dragover',function (e) {
    e.stopPropagation();
    e.preventDefault();
    $(this).css('border','3px dashed #fd7e14');
});

$dropArea.on('dragleave',function (e) {
    $(this).css('border','none');
});




$('.js-click--anime').on('click',function () {
    var $this = $(this);

    $this.toggleClass('color--star');
    $this.toggleClass('color--star--is-active');
    $this.toggleClass('fas');
});

});