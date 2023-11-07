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

  <script>
    function validateForm()
    {
        var nrp = document.getElementById("nrp");

        //check invalid only
        if (nrp.value=="") {
            nrp.focus();
            alert("NRP Harus diisi");
            nrp.placeholder = "contoh : 5026221110"
            return false;
        }

        //check harus 10 digit
        if (nrp.value.length != 10) {
            alert("NRP harus 10 digit, Anda memasukkan " + nrp.value.length + " digit");
            return false;
        }

         //check yg ada abjad
         if (isNaN(nrp.value) == true) {
            nrp.focus();
            msg.innerHTML = "NRP Harus angka";
            return false;
        }
    }
    
  </script>
</head>

<body>
    <div class="container">
        <div class="jumbotron">Form Validasi adalah mencegah pengiriman data ke
            server jika ada yg invalid/tidak sesuai constraint database</div>
            <!-- <script>
                   function validate()
                {
                    console.log("baris 21");
                    return false;
                    console.log("baris 23");
                    return true;
                    console.log("baris 25");
                    return false;

                }
            </script> -->
            <form action="https://google.com" method="get" onsubmit="return validateForm();">
                <div class="form-group">
                    <label for="nrp">NRP: </label>
                    <input type="text" class="form-control" id="nrp"> <div id="msg" class="text-danger"></div>
                </div>
                <input type="submit" value="DAFTAR" class="btn btn-primary">
                <input type="reset" value="ULANGI" class="btn btn-warning">
            </form>
    </div>

</body>
</html>