<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Json Api</title>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js "></script>
  </head>
  <script type="text/javascript">
  $.ajax({
    method: "GET",
    url: "https://www.okcoin.com/api/v1/future_ticker.do?symbol=btc_usd&contract_type=quarter",
    success: function (res) {
      console.log(res);
      document.getElementById('demo').innerHTML = res
      // test
    }
  })
  </script>
  <div id="demo"></div>
  <body>
    <?php
        echo "api Json";
    ?>
  </body>
</html>
