// Live Comment Preview jQuery function

$(function() {
  $('#c_content').one('focus',function() {
});
  var $c_content = ''; 
  $('#c_content').keyup(function() {
      $c_content = $(this).val();
      $c_content = $c_content.replace(/\n/g, "<br />").replace(/\n\n+/g, '<br /><br />').replace(/(<\/?)script/g,"$1noscript");
      $('p.live-preview').html($c_content);
  });
});