<?php
class ArrayList
{
  public $arrayList;
  /**
   * Constructor
   * Xây dựng một danh sách mới. Tham số $ arr là tùy chọn. Nếu đặt một ArrayList
   * với các phần tử trong mảng được tạo. Nếu không một danh sách trống được xây dựng.
   * @param arr - mảng một chiều (tùy chọn)
   **/
  public function ArrayList($arr = "")
  {
    if (is_array($arr) == true)
      $this->arrayList = $arr;
    else
      $this->arrayList = array();
  }

  /**
   * Thêm một phần tử vào cuối danh sách này.
   * @param $obj
   **/
  public function add($obj)
  {
    array_push($this->arrayList, $obj);
  }


  /**
   * Trả về phần tử tại vị trí đã chỉ định trong danh sách này
   * @param $index
   **/
  public function get($index)
  {
    if ($this->isInteger($index) && $index < $this->size()) {
      return $this->arrayList[$index];
    } else {
      die("ERROR in ArrayList.get");
    }
  }

  /**
   * Trả về true nếu tham số chứa một giá trị số nguyên
   * @return boolean
   **/
  public function isInteger($toCheck)
  {
    // regex
    return preg_match("/^[0-9]+$/", $toCheck);
  }

  /**
   * Trả về số phần tử trong danh sách này.
   * @return integer
   **/
  public function size()
  {
    return count($this->arrayList);
  }
}
