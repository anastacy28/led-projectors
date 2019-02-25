
       
'use strict'
var btns = document.querySelectorAll('.btn');
Array.prototype.forEach.call(btns, function(el){
el.onclick = function(){
    this.nextElementSibling.classList.toggle('show');
}
});


        var delay_popup = 7000;
        setTimeout("document.getElementById('bg_popup').style.display='block'", delay_popup);
        var delay_popup = 22000;
        setTimeout("document.getElementById('bg_popup').style.display='none'", delay_popup);
  

    var delay_popup = 30000;
    setTimeout("document.getElementById('bg_popup_second').style.display='block'", delay_popup);
    var delay_popup = 45000;
    setTimeout("document.getElementById('bg_popup_second').style.display='none'", delay_popup);


    var delay_popup = 52000;
    setTimeout("document.getElementById('bg_popup_third').style.display='block'", delay_popup);
    var delay_popup = 60000;
    setTimeout("document.getElementById('bg_popup_third').style.display='none'", delay_popup);

    var delay_popup = 68000;
    setTimeout("document.getElementById('bg_popup_forth').style.display='block'", delay_popup);
    var delay_popup = 80000;
    setTimeout("document.getElementById('bg_popup_forth').style.display='none'", delay_popup);

    var delay_popup = 87000;
    setTimeout("document.getElementById('bg_popup_fifth').style.display='block'", delay_popup);
    var delay_popup = 98000;
    setTimeout("document.getElementById('bg_popup_fifth').style.display='none'", delay_popup);

     var delay_popup = 105000;
    setTimeout("document.getElementById('bg_popup_sixth').style.display='block'", delay_popup);
    var delay_popup = 120000;
    setTimeout("document.getElementById('bg_popup_sixth').style.display='none'", delay_popup);

     var delay_popup = 127000;
    setTimeout("document.getElementById('bg_popup_seventh').style.display='block'", delay_popup);
    var delay_popup = 140000;
    setTimeout("document.getElementById('bg_popup_seventh').style.display='none'", delay_popup);

     var delay_popup = 147000;
    setTimeout("document.getElementById('bg_popup_eighth').style.display='block'", delay_popup);
    var delay_popup = 160000;
    setTimeout("document.getElementById('bg_popup_eighth').style.display='none'", delay_popup);


var a = document.getElementsByClassName("popup__toggle");
var modal = document.getElementById("myModal");
var span = document.getElementsByClassName("close-modal")[0];

a.onclick = function () {
    modal.style.display = "block";
}
span.onclick = function() {
    modal.style.display = "none";
}
// window.onclick = function(event) {
//     if (event.target ==modal) {
//         modal.style.display = "none";
//     }
// }

  $(function(){
     $('a[data-target^="anchor"]').bind('click.smoothscroll', function(){
         var target = $(this).attr('href'),
              bl_top = $(target).offset().top - 50;
         $('body, html').animate({scrollTop: bl_top}, 1000);
         return false;    
     })
  });