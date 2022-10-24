<?php
class Table
{
  private $mau_sac;
  protected $so_chan;
  public function __construct($mau_sac, $so_chan)
  {
    $this->mau_sac = $mau_sac;
    $this->so_chan = $so_chan;
  }
  public function intro()
  {
    echo "Ban co mau $this->mau_sac va co $this->so_chan chan";
  }
  public function get_mau_sac()
  {
    return $this->mau_sac;
  }

  public function get_so_chan()
  {
    return $this->so_chan;
  }

  public function set_mau_sac($mau_sac)
  {
    $this->mau_sac = $mau_sac;
  }

  public function set_so_chan($so_chan)
  {
    $this->so_chan = $so_chan;
  }
}