<?php
   $conn = mysqli_connect("localhost", "root", "", "opentutorials");

   $sql = "SELECT * FROM topic";
   $result = mysqli_query($conn, $sql);

   echo '<h1>mysqli_fetch_array를 이용한 테이블 topic의 length만큼의 값을 뿌려주는 법</h1>';
   while($row = mysqli_fetch_array($result)) {
       echo '<h2>'.$row['title'].'</h2>';
       echo $row['description'];
   }
?>