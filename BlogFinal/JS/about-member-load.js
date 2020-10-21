$(document).ready(function(){
  var trigger = $('h6'),
  container = $('#team-members-profile');
  trigger.on('click', function(){
  var $this = $(this),
  target = $this.data('target');
  container.load('about/'+target+'.php');
  trigger.removeClass('active');
  $this.addClass('active');
  return false;
  });
});