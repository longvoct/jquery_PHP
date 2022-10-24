<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Document</title>
</head>

<body>
  <?php
  class HinhTron
  {
    private $ban_kinh;
    public function __construct($bk)
    {
      $this->ban_kinh = $bk;
    }
    public function Chu_vi()
    {
      $CV =  $this->ban_kinh * 2 * pi();
      return $CV;
    }

    public function Dien_tich()
    {
      $DT = pi() * pow($this->ban_kinh, 2);
      return $DT;
    }
  }

  class HinhTru extends HinhTron
  {
    private $chieu_cao;
    public function __construct($bk, $chieu_cao)
    {
      $this->ban_kinh = $bk;
      $this->chieu_cao = $chieu_cao;
    }
    public function TheTich()
    {
      $V = $this->chieu_cao * pi() * pow($this->ban_kinh, 2);
      return $V;
    }

    public function Show_the_tich()
    {
      echo 'The tich hinh tru la: ' . $this->TheTich();
    }
  }
  $hinh_tru = new HinhTru(2, 6);
  $hinh_tru->Show_the_tich();
  ?>
</body>

</html>