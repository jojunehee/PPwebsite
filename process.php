<!DOCTYPE html>
<html>
<head>
    <title>폼 데이터 처리 결과</title>
</head>
<body>
    <h2>폼 데이터 처리 결과</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $gender = $_POST["gender"];
        $interests = isset($_POST["interests"]) ? $_POST["interests"] : [];
        $country = $_POST["country"];
        $birthdate = $_POST["birthdate"];
        $comments = $_POST["comments"];

        echo "<p><strong>사용자 이름:</strong> $username</p>";
        echo "<p><strong>성별:</strong> $gender</p>";
        if (!empty($interests)) {
            echo "<p><strong>관심 있는 주제:</strong> " . implode(", ", $interests) . "</p>";
        }
        echo "<p><strong>국가 선택:</strong> $country</p>";
        echo "<p><strong>생년월일:</strong> $birthdate</p>";
        echo "<p><strong>의견:</strong><br>$comments</p>";
    } else {
        echo "<p>잘못된 요청입니다.</p>";
    }
    ?>
</body>
</html>
