<html>
<head>
<link rel="stylesheet" href="table.css">
</head>
<body>
    <?php
    $con=new mysqli('localhost','root','','practice');
    $stmt="select * from user";
    $res=$con->query($stmt);
    if($res->num_rows > 0){
        $post='<table border=><tr><th>ID</th><th>Name</th><th>Email</th></tr>';
        while($row=$res->fetch_assoc()){
            $post.='<tr><td>'.$row['id'].'</td><td>'.$row['name'].'</td><td>'.$row['email'].'</td></tr>';
        }
        $post.='</table>';
        echo $post;
    }
    ?>
</body>
</html>