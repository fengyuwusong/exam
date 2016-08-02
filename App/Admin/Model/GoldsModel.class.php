<?php 
namespace Admin\Model;
use Think\Model;

class GoldsModel extends Model{
    public function getInfo($page){
        $sql=M('Golds');
        $res=$sql->page($page,16)->select();
        return $res; 
    }
}
?>