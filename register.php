<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="form">
    <form action="" method="POST" class="register">
      <input type="text" name="username" id="username" placeholder="帳號">
    </form>
  </div>
  <script src="https://unpkg.com/axios@1.1.2/dist/axios.min.js"></script>
  <script>
    const $username = document.querySelector('#username');
    $username.onkeyup = function() {
      let dataUrl = "php/check_username.php"
      let keyin_value = this.value;
      axios({
        headers: {
          'Content-Type': 'application/json'
        },
        method: 'POST',
        url: dataUrl,
        data: JSON.stringify({
          usernameValue: keyin_value
        })
      }).then(function(res) {
        console.log(res.data)
      }).catch(function(err) {
        console.log('err的結果', err)
      });
    }
  </script>
</body>

</html>