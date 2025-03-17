 
 <?php 
 
 class Student {
    private $course;
    private $student;
    public $status = "Double Active";

    public $student_id = "01008042455";

 public function __construct($course, $student, $status = "offline") {
    $this->course = $course;    
    $this->student = $student;
    $this->status = $status;

 }

 //Getter and Setter
 public function getCourse(){
    return $this->course;
 }
 public function setCourse($course){
    $this->course = $course;
 }

 public function Course() {
        return "On ". $this->course ." there is one student who is really great and their name is ". $this->student. " status( " . $this->status. " )";
    }
 
}



 



