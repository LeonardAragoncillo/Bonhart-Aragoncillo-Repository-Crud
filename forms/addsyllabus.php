<html>
    <head>
        <title>Add Syllabus</title>
    </head>
    <body>
        <?php 
        include_once("../dbConnection/mysqlconfig_connection.php");

        if(isset($POST['Submit'])){
            $code = $POST['code'];
            $author = $POST['author'];
            $subject= $POST['subject'];
            if(empty($code) || empty($author)){
                if(empty($code)){
                    echo "<font color='red'>Syllabus Code Field is empty </font><br/>";
                }
                if(empty($author)){
                    echo "<font color='red'>Syllabus Author Field is empty </font><br/>"
                }
                echo "<br/><a href='javascript:self.history.back();>Go back </a>";
            }
            else{
                $result = mysqli_query($dbc,"<<UPDATE SQL QUERY>>");
                echo "<font color='green'>Data added successfully.</font>";
                echo "<br/><a href='../index.php>View Result</a>'";
            }
        }
    </body>
</html>