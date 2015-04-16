jQuery(document).ready(function() {
  
  jQuery("#dishes").carouFredSel({
    circular: true,
    infinite: false,
    auto 	: false,
    prev	: {
      key		: "left"
    },
    next	: {
      key		: "right"
    },
    pagination	: "#slider_nav"
  });




});









  //gallery hover effect
  jQuery('.gallery .media img').hover(function(){
    jQuery('.gallery .media img').addClass('inactive');
    jQuery(this).removeClass('inactive').addClass('active');
  }, function(){
    jQuery('.gallery .media img').removeClass('inactive');
  });


//menu show more items btn
function change_bottom(old_btn_id, new_btn_id, btn_content){
  jQuery(old_btn_id).removeAttr('id');
  jQuery('.load-more a').attr({
    id : new_btn_id
  });
  jQuery('#' + new_btn_id).html(btn_content);
}
jQuery(document).on('click', 'a#more_items', function(event) {
  event.preventDefault();
  jQuery('.menu .hidden_items').slideDown({duration:800, complete : function(){
    change_bottom('#more_items', 'hide_items', 'hide items<hr/><span class="down_arrow"></span>');
  }});
});


jQuery(document).on('click', 'a#hide_items', function(event) {
  event.preventDefault();
  jQuery('.menu .hidden_items').slideUp({duration:800,  complete : function(){
    change_bottom('#hide_items', 'more_items', 'show more<hr/><span class="up_arrow"></span>');
  }});
});

