<!DOCTYPE html>
<html lang="en">
<head>
  <title>Javascript</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">
  <link href="{{ asset('tugas/css/tugas2v.css')}}" rel="stylesheet">
  <script>
    function changeText() {
        var span = document.getElementById("output");
        var textbox = document.getElementById("textbox");

        textbox.style.color = "red";
        textbox.style.fontSize = "13pt";
        textbox.style.fontFamily = "Comic Sans M5";
        span.className = "text-success"; //langsung ganti 1 class

        span.innerHTML = textbox.value ;
        hadiah();
        }
  </script>
</head>

<body>
    <div class="container-fluid" style="background-color: pink;">
        <script>
            href
            function hadiah()
            {
                alert("Congratulations! You get $1000 USD!");
            }
        </script>
        <center><button class="btn btn-primary" onclick="hadiah();">Click Here!</button>
        </center>
        <br>
        <button onclick="changeText();" class="btn btn-success">Fill me to get your prize!</button>
        <span id="output">fill your Debit card number</span>
        <input id="textbox" type="text" />
    </div>
</body>
