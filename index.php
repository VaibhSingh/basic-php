<html>
    <head>
        <title>
            Insert Function
        </title>
    </head>
    <body>
        <form name="form" action="insert.php" onsubmit="return validate();" method="POST">
        Name:<input type="text" name="name"><br>
        Email:<input type="email" name="email"><br>
        <input type="submit" value="insert">
        </form>
        <script>
            function validate(){
                var a=document.forms["form"]["name"].value;
                var b=document.forms["form"]["email"].value;
                if(a==""){
                    alert("Name must be filled");
                    return false;
                }
                if(b==""){
                    alert("Email must be filled");
                    return false;
                }
                else{
                    return true;
                }
            }
            </script>
    </body>
</html>