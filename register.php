<?php
require_once('./php/db.php');
require_once('./php/function.php');
?>
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
      <input type="text" name="password" id="password" placeholder="密碼">
      <input type="text" name="confirm_password" id="confirm_password" placeholder="確認密碼">
      <input type="text" name="nick_name" id="nick_name" placeholder="暱稱">
      <button type="submit">送出</button>
    </form>
    <button type="button" id="btn">axios</button>

  </div>
  <!-- <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script> -->
  <script src="https://unpkg.com/axios@1.1.2/dist/axios.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/qs/6.11.0/qs.min.js"></script>
  <script>
    const $form = document.querySelector('.register');
    const $password = document.querySelector('#password');
    const $confirm_password = document.querySelector('#confirm_password');
    $form.addEventListener('submit', function(e) {
      if ($confirm_password.value != $password.value) {
        alert('兩者密碼不同');
        e.preventDefault();
        // return false;
      }
    })
    const $username = document.querySelector('#username');
    // $(function() {
    //   $("#username").on("keyup", function() {
    //     $.ajax({
    //       type: "POST", //表單傳送的方式 同 form 的 method 屬性
    //       url: "php/check_username.php", //目標給哪個檔案 同 form 的 action 屬性
    //       data: { //為要傳過去的資料，使用物件方式呈現，因為變數key值為英文的關係，所以用物件方式送。ex: {name : "輸入的名字", password : "輸入的密碼"}
    //         n: $(this).val() //代表要傳一個 n 變數值為，username 文字方塊裡的值
    //       },
    //       dataType: 'html' //設定該網頁回應的會是 html 格式
    //     }).done(function(data) {
    //       console.log(data)

    //     })
    //   })
    // })
    $username.onkeyup = function() {
      let dataUrl = "php/check_username.php"
      let keyin_value = this.value;
      let params = new URLSearchParams();
      params.append('usernameValue', keyin_value);
      // axios.post(dataUrl, params)
      //   .then(function(res) {
      //     console.log(res)
      //   }).catch(function(err) {
      //     console.log('err的結果', err)
      //   });

      axios({
        method: 'POST',
        url: dataUrl,
        data: params
      }).then(function(res) {
        console.log(res)
      }).catch(function(err) {
        console.log('err的結果', err)
      });

    }

    // const $btn = document.querySelector('#btn');
    // $btn.onclick = () => {
    //   console.log('aa')
    //   axios({
    //     method: 'get',
    //     url: 'http://localhost:80'
    //   }).then(function(res) {
    //     console.log(res)
    //   });

    // }
  </script>
  <!-- <script>
    function delayadd(a, b, delaytime) {
      return new Promise(function(resolve, reject) {
        if (1 + 1 != 2) {
          setTimeout(function() {
            resolve(a + b);
          }, delaytime)
        } else {
          reject('errror')
        }
      })
    }

    console.log('1')
    let aas = async function delaymain() {
      try {
        let a = await delayadd(3, 4, 500);
        let b = await delayadd(6, 4, 500);
        console.log(a * b)

      } catch (err) {
        console.log(err)

      }
    }()
    console.log('3')
  </script> -->
</body>

</html>