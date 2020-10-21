  $(document).ready(function(){
  var trigger = $('#news-cata-list ul li'),
  container = $('#contents');
  trigger.on('click', function(){
  var $this = $(this),
  target = $this.data('target');
  container.load('News/'+target+'.php');
  trigger.removeClass('active');
  $this.addClass('active');
  return false;
  });
});