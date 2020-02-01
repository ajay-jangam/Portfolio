

  $('.nav-link').click(function(){
    var getElement = $(this).attr('href');
    if ($(getElement).length) {
        var getOffset = $(getElement).offset().top;
        var targetDistance = 50;
        $('html,body').animate({
            scrollTop: getOffset - targetDistance
        },500);
    }
    return false;
});


// srcoll to top

$(document).ready(function(){

    $(window).scroll(function(){
      if($(this).scrollTop() > 40){
        $('#topBtn').fadeIn();
      } else{
        $('#topBtn').fadeOut();
      }
    });
  
    $("#topBtn").click(function(){
      $('html ,body').animate({scrollTop : 0},800);
    });
  });
  
  // scroll to top
  
  // form_ajax_script
  
  
  // $(document).ready(function(){
    console.log($.ajax());

      function formSubmit(){
        $.ajax({
          type: 'POST',
          url: 'form.php',
          data: $('#forms').serialize(),
          success:function(response){
            $('#success').html(response);
          }
        });
        var form = document.getElementById('forms').reset();
        return false;
      }
  
    // });
  
  
    // form_ajax_script
  