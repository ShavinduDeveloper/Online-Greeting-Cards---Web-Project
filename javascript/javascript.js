///* 
// * To change this license header, choose License Headers in Project Properties.
// * To change this template file, choose Tools | Templates
// * and open the template in the editor.
// */
//
///*====================================================
// SERVICES
// ====================================================*/
//
//$(function () {
//
//    // animate on scroll
//    new WOW().init();
//});
//
///*====================================================
// WORK
// ====================================================*/
//
//$(function () {
//
//    $("#work").magnificPopup({
//        delegate: 'a', // child items selector, by clicking on it popup will open
//        type: 'image',
//        gallery: {
//            enabled: true
//        }
//
//    });
//});
//
///*====================================================
// team
// ====================================================*/
//
////$(function () {
////    $('#team-members').owlCarousel({
////        items: 1,
////        autoplay: true,
//////        autoplayTimeout: 8500,
////        autoplayHoverPause: true,
////        smartSpeed: 1000,
////        loop: true,
////        nav: false
////    });
////});

/*====================================================
 Testimonials
 ====================================================*/

$(function () {

    $('#teammembers').owlCarousel({
        items: 1,
        autoplay: true,
        autoplayTimeout: 2500,
        autoplayHoverPause: true,
        smartSpeed: 500,
        loop: true,
    });
});
$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
})

///*====================================================
// Status
// ====================================================*/
//
//jQuery(document).ready(function ($) {
//    $('.counter').counterUp({
//        delay: 10,
//        time: 2000
//    });
//});
//
///*====================================================
// Clients
// ====================================================*/
//
//$(function () {
//    $('#clients-list').owlCarousel({
//        items: 6,
//        autoplay: true,
////        autoplayTimeout: 8500,
//        autoplayHoverPause: true,
//        smartSpeed: 1000,
//        loop: true,
//        nav: false
//    });
//});
//
///*====================================================
// Navigation Bar
// ====================================================*/
//
//$(function () {
//    $(window).scroll(function () {
//
//        if ($(this).scrollTop() > -1) {
////            Hide Navbar
//            $("nav").addClass("sts1");
//
//        } else {
////            Show Navbar
//            $("nav").removeClass("sts1");
//
//
//        }
//    });
//});
function remove() {
    dis();
}
//function dis() {
//    var senderName = document.getElementById("sn").value;
//    var ReceiverName = document.getElementById("rn").value;
//    var img = document.getElementById("img").checked.value;
//    var song = document.getElementById("song").value;
//    window.alert(senderName+"\n"+ReceiverName+"\n"+img+"\n"+song);
//    document.getElementById("snd").innerHTML = senderName;
//    document.getElementById("rnd").innerHTML = ReceiverName;
//}

// function dis() {
//            var ele = document.getElementsByName('img');
//              
//            for(i = 0; i < ele.length; i++) {
//                if(ele[i].checked)
//                window.alert(ele);
//            }
//        }

function dis() {
    var senderName = document.getElementById("sn").value;
    var ReceiverName = document.getElementById("rn").value;
    var imgv = document.querySelector('input[name="img"]:checked').value;
    var songv = document.querySelector('input[name="song"]:checked').value;
//    window.alert(senderName + "\n" + ReceiverName + "\n" + imgv + "\n" + songv);
    document.getElementById("snd").innerHTML = senderName;
    document.getElementById("rnd").innerHTML = ReceiverName;
    document.getElementById("dimg").innerHTML = "<img src='"+imgv+"' class='img-responsive' style='border-radius: 20px; padding: 20px 0;'/>";
    document.getElementById("dsong").innerHTML = "<img src='"+songv+"' class='img-responsive'/>";
}

$('.card-image').click(function () {
    $(this).children('.text-center').children('input').prop('checked', true);
});