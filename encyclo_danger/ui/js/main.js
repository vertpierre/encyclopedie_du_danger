$('.unwrap').click(function(){
  var $this = $(this);
  var meta = $this.next('.description');
  meta.toggleClass('opened');
})

$(document).ready(function() {
  var colors = ["#FF0000", "#2cb507", "#0000FF", "#af02d6", "#a55826"];
  var rand = Math.floor(Math.random() * colors.length);
  $('.change-color').css("color", colors[rand]);
  $('.change-bg').css("background-color", colors[rand]);
  $('.change-border').css("border-color", colors[rand]);
});
