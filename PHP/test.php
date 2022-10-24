<?php 


function KTNN($nam) {
  if ($nam % 400 === 0) {
    return true;
  } else if($nam%4 === 0  && $nam%100 !==0) {
    return true;
  } else return false;
}

class NgayThangNam {
  private $d;
  private $m;
  private $y;
  public function __construct($d, $m, $y) {
    $this->d = $d;
    $this->m = $m;
    $this->y = $y;
  }
  public function songay(){
    switch($this->m) {
      case 2:
        if(KTNN($this->y)) return 28;
        else return 29;
      case 4:
      case 6:
      case 9:
      case 11:
        return 30;
      default: return 31;
    }
  }
  public function songaytudaunam() {
    $s = $this->d;
    for($i = 1;$i < $this->m; $i++) {
      switch($i) {
        case 2:
          if(KTNN($this->y)) $s+= 28;
          else $s += 29;
          break;
        case 4:
        case 6:
        case 9:
        case 11:
          $s += 30;
          break;
        default: $s += 31;
      }
    }
    return $s;
  }
}


include "NgayThangNam.php";
$d1 = new NgayThangNam(1,5,2022);
echo $d1->songay();
echo "<br>";
echo $d1->songaytudaunam();

?>