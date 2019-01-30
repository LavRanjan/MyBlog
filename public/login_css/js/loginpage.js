$(document).ready(function() {
  $.ajaxSetup({
        headers:
        { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    });
  $(document).keypress(function(e) {
      if(e.which == 13) {
         doLogin();
      }
  });
  
  
  $(document).on("click", "#login_submit", function(e) {
    doLogin();
    
  });
  
  $(document).on("click", ".app__logout", function(e) {
    if (animating) return;
    $(".ripple").remove();
    animating = true;
    var that = this;
    $(that).addClass("clicked");
    setTimeout(function() {
      $app.removeClass("active");
      $login.show();
      $login.css("top");
      $login.removeClass("inactive");
    }, logoutPhase1 - 120);
    setTimeout(function() {
      $app.hide();
      animating = false;
      $(that).removeClass("clicked");
    }, logoutPhase1);
  });

  function doLogin(){
    var val_pwd = $('#password').val();
    $('#invalid_error').hide();
    if(val_pwd == ''){
      $('.login__row').addClass('animated shake');
      $('#pwd_error').show();
      return false;
    }
    else
    {
      $('.login__row').removeClass('animated shake');
      $('#pwd_error').hide();
    }
      $.ajax({
            type: 'POST',
            url: '/admin/do-login',
            data:{"password" : val_pwd},
            success:function(data){
                // alert(data);
                if(data.status === 'success') {
                  
                    window.location.href = "/admin/dashboard";
                }
                else {
                   $('#invalid_error').show();
                }
            },
        });
  }

});

