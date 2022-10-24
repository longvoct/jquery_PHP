<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style>
  .mt-lg {
    margin-top: 8px;
  }

  .w-100 {
    width: 100px;
  }

  .w-200 {
    width: 200px;
  }

  .flex {
    display: flex;
  }

  .flex-col {
    display: flex;
    flex-direction: column;
  }

  .gap-x-5 {
    column-gap: 5px;
  }

  .gap-y-5 {
    row-gap: 5px;
  }
  </style>
</head>

<body>
  <form class="wrapper flex" method="post" action="#">
    <div class="flex flex-col gap-y-5 w-200">
      Tử số thứ 1 <input type="text" name="tu1">
      Mẫu số thứ 1 <input type="text" name="mau1">
      Tử số thứ 2 <input type="text" name="tu2">
      Mẫu số thứ 2 <input type="text" name="mau2">
      <input type="Submit" name='Submit' value=" = ">
    </div>

    <div>
      <input type="radio" name="pheptinh" value="1" checked> Cộng <br>
      <input type="radio" name="pheptinh" value="2"> Trừ<br>
      <input type="radio" name="pheptinh" value="3">Nhân<br>
      <input type="radio" name="pheptinh" value="4"> Chia <br>
    </div>
  </form>
  <?php
  if (isset($_POST['Submit']) && ($_POST['Submit'] == " = ")) {
    $pheptinh = $_POST["pheptinh"];
    $tu1 = (int)$_POST["tu1"];
    $mau1 = (int)$_POST["mau1"];
    $tu2 = (int)$_POST["tu2"];
    $mau2 = (int)$_POST["mau2"];
    include "OOP.php";
    $ps1 = new PhanSo($tu1, $mau1);
    $ps2 = new PhanSo($tu2, $mau2);

    if ($pheptinh == "1") {
      $kq = $ps1->sum($ps2);
      $kq->Show();
      $kq->Reduce();
    }
  }
  ?>
</body>
<script>

</script>

</html>