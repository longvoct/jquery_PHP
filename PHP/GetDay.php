<body>
  <form method="GET">
    <input type="date" name="date">
    <input type="submit" value="GetDate" name="getdate">
  </form>

  <?php
  if (isset($_GET['getdate']) && ($_GET['getdate']) == 'GetDate') {
    $date = $_GET['date'];
    echo $date . "<br>";
    $m = getdate(strtotime($date));
    echo "Ngày " . $m['mday'] . " Tháng " . $m['mon'] . " Năm " . $m['year'];
  }
  ?>
</body>