<?php 

abstract class Person{
    private string $firstName;
    private string $lastName;
    private int $age;

    public function __construct(string $fName, string $lName, int $age )
    {
        $this->setFirstName( $fName );
        $this->setLastName( $lName );
        $this->setAge( $age );
    }

    protected function setFirstName( string $value ){
        $this->firstName = $value;
    }

    protected function setLastName( string $value ){
        $this->lastName = $value;
    }

    protected function setAge( int $value ){
        $this->age = $value;
    }

    protected function getFirstName(){
        return $this->firstName;
    }

    protected function getLastName(){
        return $this->lastName;
    }

    protected function getAge(){
        return $this->age;
    }
}

class Student extends Person{
    private int $studentNumber;
    private string $class;
    private int $year;

    public function __construct( string $fName, string $lName, int $age, int $sNumber, string $sClass, int $sYear )
    {
        parent::__construct( $fName, $lName, $age );

        $this->setStudentNumber( $sNumber );
        $this->setClass( $sClass );
        $this->setYear( $sYear );
    }

    public function setStudentNumber( int $value ){
        $this->studentNumber = $value;
    }

    public function setClass( string $value ){
        $this->class = $value;
    }

    public function setYear( int $value ){
        $this->year = $value;
    }

    public function getStudentNumber(){
        return $this->studentNumber;
    }

    public function getClass(){
        return $this->class;
    }

    public function getYear(){
        return $this->year;
    }

    public function getAllData(){
        echo $this->getFirstName()." ".$this->getLastName()." ".$this->getAge()." ".$this->getStudentNumber()." ".$this->getClass()." ".$this->getYear();
    }
}

$student          = new Student( 'Marko', 'Marić', 21, 444433, 'IT', 2  );

echo $student->getAllData();

// $studentName1     = $student->getFirstName();                                   
// $studentLastName1 = $student->getLastName();
// $studentAge1      = $student->getAge();
// $studentNum1      = $student->getStudentNumber();
// $studentClass1    = $student->getClass();
// $studentYear1     = $student->getYear();

// $student            = new Student( 444433, 'IT', 2  );
// $student->firstName = 'Ivan';
// $student->lastName  = 'Horvat';
// $student->age       = 26;

// $studentName     = $student->firstName;
// $studentLastName = $student->lastName;
// $studentAge      = $student->age;
// $studentNum      = $student->getStudentNumber();
// $studentClass    = $student->getClass();
// $studentYear     = $student->getYear();

?>
<!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' type='text/css' media='screen' href='../assets/style.css'>
        <title>Objektno orijentirano</title>
    </head>
    <body>
     
            <h2>Objektno orijentirano programiranje</h2>

            <h1>Ispit studenti</h1>
            <table>
                <thead>
                    <tr>
                        <th>Ime</th>
                        <th>Prezime</th>
                        <th>Godine</th>
                        <th>Studentski br</th>
                        <th>Smjer</th>
                        <th>Godina</th>
                    </tr>
                </thead>
                <tbody>
                    <?php /* ?>
                    <tr>
                        <td><?php echo $studentName; ?></td>
                        <td><?php echo $studentLastName; ?></td>
                        <td><?php echo $studentAge; ?></td>
                        <td><?php echo $studentNum; ?></td>
                        <td><?php echo $studentClass; ?></td>
                        <td><?php echo $studentYear; ?></td>
                    </tr>
                     <?php */ ?>
                   
                </tbody>
            </table>

    
    </body>
   
 
</html>


