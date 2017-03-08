<html>
        <head>
                <title>addressbook</title>
                <meta http-equiv="Content-Type" content="text/html;charset=gb2312">
        </head>

        <body bgcolor="#FFFFFF">
                <?php
                        $conn = mysql_connect("localhost:3306", "root", "fnst-3d3k");
                        if(mysql_select_db("p9janice")){
                                $sql = "select * from address where city='NJ' limit 10 order by id";
                                $result = mysql_query($sql);
                        }

			echo $result;
                ?>

        </body>
</html>

