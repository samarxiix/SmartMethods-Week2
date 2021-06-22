<?PHP


//1 set up 
$host = "localhost";
$user = "root";
$pwd = "";
$db = "smartmethods";


//2 connect
$con = mysqli_connect($host, $user, $pwd, $db);

$eng1 = $_POST["eng1"];
$eng2= $_POST["eng2"];
$eng3 = $_POST["eng3"];
$eng4= $_POST["eng4"];
$eng5 = $_POST["eng5"];
$eng6= $_POST["eng6"];


$query="INSERT INTO  enginepower (Engine1,Engine2,Engine3,Engine4,Engine5,Engine6)
        VALUES ($eng1,$eng2,$eng3,$eng4,$eng5,$eng6)";
        mysqli_query($con ,$query);

if(isset($_POST["turnon"])){

        $power= $_POST["turnon"];
        $query2= "INSERT INTO  powerstat (powerOn)
        VALUES ($power)";
        mysqli_query($con ,$query);
}
//3 run 
