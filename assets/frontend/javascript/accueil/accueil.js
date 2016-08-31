
$(".NOTIFICATIONS").dropdown({
  inDuration:300,
  outDuration:225,
  constrain_width:!1,
  hover:!0,
  gutter:0,
  belowOrigin:1
})

$('.profile-btn').dropdown({
      inDuration:300,
      outDuration:225,
      constrain_width:true,
      hover:false,
      gutter:0,
      belowOrigin:!0
    }
  );
  
  $("#profile-dropdown").css("width", "168px");
  
  $('.fixed-action-btn').openFAB();