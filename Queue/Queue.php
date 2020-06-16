<?php 
class Patient {
   public $name;
   public $code;
   public function __construct($name,$code)
   {
   $this->name=$name;
   $this->code=$code;     
   }
   
}
class Queue {
   public $arraylist;
   public $priority;//[1,4,5,6]
   public function __construct($arraylist='',$priority)
   { if(is_array($arraylist)){
      $this->arraylist=$arraylist;
   }
      else $this->arraylist= [];
      $this->priority = $priority;
   }
   public function enqueue ($patient){
      array_push($this->arraylist,$patient);
   }
   public function dequeue(){
      foreach($this->priority as $temp){
      for($i =0; $i < count($this->arraylist);$i++){
            if($this->arraylist[$i]->code == $temp) 
            {  $patient = $this->arraylist[$i];
               array_splice($this->arraylist,$i,1);
               return $patient;
            }
         }
      }
   }
   function display(){
      $text='';
      foreach($this->arraylist as $element){
         $text.="<br>Name: $element->name | Code: $element->code";
      }
      echo $text;
   }
}

$arrPriority=[1,4,5,6];
$arrDone=[];
$queue = new Queue('',$arrPriority);
$queue->enqueue(new Patient('Smith',5));
$queue->enqueue(new Patient('Jones',4));
$queue->enqueue(new Patient('Fehrenbach',6));
$queue->enqueue(new Patient('Brown',1));
$queue->enqueue(new Patient('Ingram',1));
function display($arr){
   $text='';
   foreach($arr as $element){
      $text.="<br>Name: $element->name | Code: $element->code";
   }
   echo $text;
}
echo '<br>danh sach benh nhan';
$queue->display();
echo'<br>Khám bệnh cho người đầu tiên trong hàng đợi';
//-----------1--------
$arrDone[]=$queue->dequeue();
echo '<br>người bệnh đã được khám';
display($arrDone);
echo '<br>danh sách bệnh nhân còn lại';
$queue->display();
//-----2------
$arrDone[]=$queue->dequeue();
echo '<br>người bệnh đã được khám';
display($arrDone);
echo '<br>danh sách bệnh nhân còn lại';
$queue->display();
//------3--------
$arrDone[]=$queue->dequeue();
echo '<br>người bệnh đã được khám';
display($arrDone);
echo '<br>danh sách bệnh nhân còn lại';
$queue->display();
//-------4-----------
$arrDone[]=$queue->dequeue();
echo '<br>người bệnh đã được khám';
display($arrDone);
echo '<br>danh sách bệnh nhân còn lại';
$queue->display();

?>