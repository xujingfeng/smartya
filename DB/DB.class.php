<?php 
class DB
{
	public static $null=null;
	public $link;
	public function __construct()
	{
		$links=mysqli_connect('localhost','root','root','xjf');
        mysqli_query($links,'set names utf8');
        $this->link=$links;
	}
	public static function getDB()
	{
		if(self::$null==null)
		{
			self::$null=new self();
			return self::$null;
		}
		else
		{
			return self::$null;
		}
	}
	public function query($sql='')
	{
		return mysqli_query($this->link,$sql);
	}
	public function login($sql='')
	{
		$resa=mysqli_query($this->link,$sql);
		$arr=mysqli_fetch_assoc($resa);
		return $arr;
	}
    public function select($sql='')
    {

        $resa=mysqli_query($this->link,$sql);
        $array=[];
        while ( $arr=mysqli_fetch_assoc($resa)) {
            $array[]=$arr;
        }
       return  $this->tree($array);
        //return $array;

    }
    public function tree($array,$id=0,$pid=0)
   {   
       static $newArr=array();
          foreach ($array as $key => $value) {
                  if($value['pid']==$id){
                       $value['num']=$pid;
                       $newArr[]=$value;               
                      $this->tree($array,$value['id'],$pid+1); 
                      
                  }
             
          }
          return $newArr;
   }
    public function getinsertid()
    {
    	return mysqli_insert_id($this->link);
    }
    public function sel($sql='')
   {
           
           $resa=mysqli_query($this->link,$sql);
           $array=[];
           while($arr=mysqli_fetch_assoc($resa)) {
                     $array[]=$arr;
           }
           return $array;
           //return $this;

   }
}

