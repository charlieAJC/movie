<?php
// require_once ("mysql_connect.php");
// require_once ("Member.php");
// require_once ("Post.php");

// $member = new Member($conn);
// // $member->result();
// $member->login($_GET["ac"], $_GET["pw"]);
// echo $result."<br>".$_SESSION["account"]."<br>";
// $result = $member->logout();
// echo  $result."<br>";
// var_dump(isset($_SESSION["account"]));
// $post = new Post($conn);

// // 顯示大廳留言
// $result = $post->index();
// print_r($result);

// 新增留言
// echo $post->add($_GET["title"]);
// $member->logout();

// 修改留言介面
// print_r($post->showModify("25"));

// 修改留言
// echo $post->modify($_GET["id"], $_GET["title"]);
// session_start();
// echo $_SESSION["account"];

// 刪除留言
// echo $post->remove($_GET["id"]);

// // 時間格式
// echo $_POST["date"]."<br>";
// $date = date_create($_POST["date"]);
// echo date_format($date, 'Y/m/d')."<br>";

// // switch裡面的if是否正常運作
// $arr["1"] = 1;
// $arr["2"] = 2;

// switch ($arr["1"]) {
//     case 1:
//         if ($arr["2"] == 2){
//             echo "1>1 2>2";
//         } else {
//             echo "1>1 2?2";
//         }        
//     break;

//     case 2:
//         echo "1>2";
//     break;
// }
?>
<?php
// // 檔案上傳系統
// <!DOCTYPE html>
// <html lang="en">
// <head>
//     <meta charset="UTF-8">
//     <title>File Upload Form</title>
// </head>
// <body>
//     <form action="upload-manager.php" method="post" enctype="multipart/form-data">
//         <h2>Upload File</h2>
//         <label for="fileSelect">Filename:</label>
//         <input type="file" name="photo" id="fileSelect">
//         <input type="submit" name="submit" value="Upload">
//         <p><strong>Note:</strong> Only .jpg, .jpeg, .gif, .png formats allowed to a max size of 5 MB.</p>
//     </form>
// </body>
// </html>
?>

<?php
// // Check if the form was submitted
// if($_SERVER["REQUEST_METHOD"] == "POST"){
//     // Check if file was uploaded without errors
//     if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
//         $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
//         $filename = $_FILES["photo"]["name"];
//         $filetype = $_FILES["photo"]["type"];
//         $filesize = $_FILES["photo"]["size"];
    
//         // Verify file extension
//         $ext = pathinfo($filename, PATHINFO_EXTENSION);
//         if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
//         // Verify file size - 5MB maximum
//         $maxsize = 5 * 1024 * 1024;
//         if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
//         // Verify MYME type of the file
//         if(in_array($filetype, $allowed)){
//             // Check whether file exists before uploading it
//             if(file_exists("upload/" . $_FILES["photo"]["name"])){
//                 echo $_FILES["photo"]["name"] . " is already exists.";
//             } else{
//                 move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/" . $_FILES["photo"]["name"]);
//                 echo "Your file was uploaded successfully.";
//             } 
//         } else{
//             echo "Error: There was a problem uploading your file. Please try again."; 
//         }
//     } else{
//         echo "Error: " . $_FILES["photo"]["error"];
//     }
// }
?>

<?php
    // // 前端收到boolean的true
    // $result = true;
    // echo json_encode($result);

    // 刪資料前先確認是否存在
    // require_once("mysql_connect.php");
    // // $query = "DELETE FROM `post` WHERE (id = ?) AND EXISTS(SELECT member_id FROM post WHERE id = ?) ";
    // $query = "SELECT member_id FROM post WHERE id = ?";
    // $stmt = $conn->prepare($query);
    // $stmt->bind_param("i", $id);
    // $stmt->execute();
    // $stmt->bind_result($member_id);
    // $stmt->fetch();
    //
    // if ($member_id == "") {
    //     echo "empty";
    // } else {
    //     echo "come on :(";
    // }

    // $query = "DELETE FROM `post` WHERE id = ?";
    // $stmt = $conn->prepare($query);
    //
    //  設置參數並執行
    // // $stmt->bind_param("ii", $id, $id);
    // $stmt->bind_param("i", $id);
    // $id = "86";
    // var_dump($stmt->execute());

//select的預備語句，且查詢結果不指定變數接，而是取得一組陣列的寫法
// require_once("mysql_connect.php");
// $sql = "SELECT * FROM `post` WHERE `id` = ?";
// $stmt = $conn->prepare($sql);
//
// $stmt->bind_param("i", $id);
// $id = "22";
//
// $stmt->execute();
// $row = $stmt->get_result()->fetch_assoc();
// echo json_encode($row);

// $sql = "SELECT `member`.`account` FROM `post`,`member` WHERE `post`.`member_id` = `member`.`id` AND `post`.`id` = ?";
// $stmt = $conn->prepare($sql);
// $stmt->bind_param("i", $id);
// $id = "22";
// $stmt->execute();
// $stmt->bind_result($account);
// $stmt->fetch();
// echo $account;

// require_once("Post.php");
// $conn = "123";
// $post = new Post($conn);
// $post->verify();
// $post->test();

// 這是在return尛?
// $one = true;
// $two = true;
// $three = true;
// $result = $one && $two && $three;
// var_dump($result);

// if (isset($_COOKIE["token"])) {
//     echo $_COOKIE["token"];
// } else {
//     echo "token not exist";
// }


// class test
// {
//     function what1($post){
//         $first = $post["firstname"];
//         echo "func call: $first";
//     }
//     function what2($post){
//         $second = $post["secondname"];
//         echo "func my: $second";
//     }
//     function what3($post){
//         echo "func name: ";
//     }
// }
//
// $test = new test();
// if (isset($_POST["action"])) {
//     // foreach($_POST as $key => $value){
//     //     if ($key != "action"){
//     //         echo $key.'=>'.$value.'<br/>';
//     //     }
//     // }
//     test::{$_POST["action"]}($_POST);
//     // $_POST["action"]($_POST["firstname"], $_POST["secondname"]);
// }

// date_default_timezone_set('Asia/Taipei');
// echo date('H:i:s',strtotime("+1 hours"));

// require 'mysql_connect.php';
// require 'Token.php';
// require 'Post.php';
// $post = new Post($conn);
// $movieDetail = $post->moviedetail("67");
// $movieEvent = $movieDetail["time"];
// echo json_encode($movieEvent);
// echo "<br>";
// foreach ($movieEvent as $time) {
//     $arr[] = $time["date"];
// }
// $arr = array_unique($arr);
// echo json_encode($arr);

// date_default_timezone_set('Asia/Taipei');
//
// $now_date = date("Y-m-d");
// $now_time = date('H:i:s', strtotime("+1 hours"));
// $this_date = '2019-12-05';
// $this_time = '14:00:00';
// if (strtotime($now_date) > strtotime($this_date)) {
//     echo "日期過了";
// } elseif (strtotime($now_date) == strtotime($this_date)) {
//     echo "日期相同 ";
//     if (strtotime($now_time) > strtotime($this_time)) {
//         echo "時間過了";
//     } else {
//         echo "時間未到";
//     }
// } else {
//     echo "日期未到";
// }
// echo date('H:i', strtotime($this_time));

// require_once ("mysql_connect.php");
// require_once ("Book.php");
//
// $book = new Book($conn);
//
// $arr = array();
// $arr[] = ["id"=>1, "row"=>1, "seat"=>1];
// $arr[] = ["id"=>89, "row"=>2, "seat"=>3];
//
// $result = $book->checkout($arr);

// 刪購票cookie
require_once ("mysql_connect.php");
require_once ("Token.php");
$token = new Token($conn);
$result = $token->cleanBookCookie();
if ($result === "ok") {
    echo "ok";
}

?>