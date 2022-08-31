<?php
$id = $_POST['test'];
echo "아이디는".$id."입니다<br/>";
$pw = $_POST['pass'];
echo "비밀번호는".$pw."입니다<br/>";
$name = $_POST['name'];
echo "이름은".$name."입니다<br/>";
$num = $_POST['num'];
echo "전호번호는".$num."입니다<br/>";
$email = $_POST['email'];
echo "이메일은".$email."입니다<br/>";
$content = $_POST['content'];
echo "자기소개".$content."입니다<br/>";
for($i=0;$i<count($_POST['hobby']); $i++){
    $a=$_POST['hobby'][$i];
    echo "선택하신 취미는".$a."<br/>";
}
$gender = $_POST['gender'];
echo "성별은".$gender."입니다";
?>