<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>

<body>
  <?php
  class PhanSo
  {
    private $tu;
    private $mau;

    public function __construct($tu, $mau)
    {
      $this->tu = $tu;
      $this->mau = $mau;
    }

    public function Reduce()
    {
      $t = $this->tu;
      $m = $this->mau;
      while ($t !== $m) {
        if ($t > $m) {
          $t -= $m;
        } else $m -= $t;
      }
      $this->tu = $this->tu / $t;
      $this->mau = $this->mau / $t;
    }

    public function sum($p)
    {
      $tempPS = new PhanSo(1, 2);
      $tempPS->tu = $this->tu * $p->mau + $this->mau * $p->tu;
      $tempPS->mau = $this->mau * $p->mau;
      return $tempPS;
    }

    public function subtraction($p)
    {
      $tempPS = new PhanSo(1, 2);
      $tempPS->tu = $this->tu * $p->mau - $this->mau * $p->tu;
      $tempPS->mau = $this->mau * $p->mau;
    }

    public function Show()
    {
      echo $this->tu . "/" . $this->mau;
    }
  }
  ?>
</body>

</html>