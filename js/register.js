(function () {
  $(function () {

  });

  $(document).ready(function () {

  });

  function saveInfoUser() {
    var userName = $('#userName').val();
    var email = $('#Email').val();
    var password = $('#userPassword').val();
    var plainPassword = $('#userPlainPassword').val();

    $.ajax({
      type: "POST",
      dataType: 'json',
      url: "getData/register_get_data.php",
      data: {
        a: 'SAVE_USER',
        data:{userName: userName, email: email, password: password, plainPassword:plainPassword}},
      success: function (data) {

      }
    });
  }

  var register = window['register'] || {};
  window['register'] = register;
  register['saveInfoUser'] = saveInfoUser;
})();
