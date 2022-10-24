<?php
class Table
{
  public $mau_sac;
  public $so_chan_ban;
  function __construct($mau_sac, $so_chan_ban)
  {
    $this->mau_sac = $mau_sac;
    $this->so_chan_ban = $so_chan_ban;
  }
  function intro()
  {
    echo 'Bàn màu ' . $this->mau_sac . ' có ' . $this->so_chan_ban . ' chân bàn' . "<br>";
  }
  function ham_tu_lop_cha()
  {
    echo 'Hàm từ lớp cha' . "<br>";
  }
  protected function ham_dac_biet()
  {
    echo 'Hàm cho lớp con sử dụng' . "<br>";
  }
}
class Table_Child extends Table
{
  public $chat_lieu;
  function __construct($mau_sac, $so_chan_ban, $chat_lieu)
  {
    $this->mau_sac = $mau_sac;
    $this->so_chan_ban = $so_chan_ban;
    $this->chat_lieu = $chat_lieu;
  }
  function intro()
  {
    parent::intro();
    echo "Đây là chiếc bàn có màu {$this->mau_sac},có {$this->so_chan_ban} chân, và làm bằng {$this->chat_lieu}" . "<br>";
    parent::ham_dac_biet();
  }
}
$tb_child = new Table_Child('nâu', 4, 'gỗ');
$tb_child->ham_tu_lop_cha();
$tb_child->intro() . "<br>";