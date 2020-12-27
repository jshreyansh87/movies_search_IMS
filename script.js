var info_btn = $("#info-btn");
var cd_btn = $("#casts_director-btn");
var synopsis_btn = $("#synopsis-btn");
var songs_btn = $("#songs-btn");
var info_cntr = $(".info-container");
var synopsis_cntr = $(".synopsis-container");
var cd_cntr = $(".casts_director-container");
var songs_cntr = $(".Songs-container");

synopsis_cntr.hide();
cd_cntr.hide();
songs_cntr.hide();

info_btn.click(function(){
  info_cntr.show();
  synopsis_cntr.hide();
  cd_cntr.hide();
  songs_cntr.hide();
})

cd_btn.click(function(){
  cd_btn.removeClass('btn-primary');
  cd_btn.addClass('btn-danger');
  info_cntr.hide();
  synopsis_cntr.hide();
  cd_cntr.show();
  songs_cntr.hide();
})

synopsis_btn.click(function(){
  synopsis_btn.removeClass('btn-primary');
  synopsis_btn.addClass('btn-danger');
  info_cntr.hide();
  synopsis_cntr.show();
  cd_cntr.hide();
  songs_cntr.hide();
})

songs_btn.click(function(){
  songs_btn.removeClass('btn-primary');
  songs_btn.addClass('btn-danger');
  info_cntr.hide();
  synopsis_cntr.hide();
  cd_cntr.hide();
  songs_cntr.show();
})
