<?php $this->load->view('templates/header'); 
$this->load->view('templates/navigation'); ?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">

                        <div>
                           <h2>
                              Home
                          </h2>
                          Selamat datang, <?php echo $this->session->userdata('username'); ?>
                          <br>
                          <br>
                          <br>
                          <br>
                          <br>
                          <br>

                          <!doctype html>
<html>
<head align="center">
<meta charset="utf-8">
<title>Jam Digital</title>
<script type="text/javascript">
    window.setTimeout("waktu()",1000);
    function waktu() {
        var tanggal = new Date();
        setTimeout("waktu()",1000);
        document.getElementById("jam").innerHTML = tanggal.getHours();
        document.getElementById("menit").innerHTML = tanggal.getMinutes();
        document.getElementById("detik").innerHTML = tanggal.getSeconds();
    }
</script>
</head>

<style>
    #jam-digital{overflow:hidden; width:350px}
    #hours{float:left; width:100px; height:50px; background-color:#6B9AB8; margin-right:25px}
    #minute{float:left; width:100px; height:50px; background-color:#A5B1CB}
    #second{float:right; width:100px; height:50px; background-color:#FF618A; margin-left:25px}
    #jam-digital p{color:#FFF; font-size:36px; text-align:center; margin-top:4px}
</style>

<body onLoad="waktu()">
    <div id="jam-digital" align="center">
        <div id="hours"><p id="jam"></p></div>
        <div id="minute"><p id="menit"></p></div>
        <div id="second"><p id="detik"></p></div>
    </div>
    </body>
</table>
</body>
</html>
<br>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>


<?php $this->load->view('templates/footer'); ?>