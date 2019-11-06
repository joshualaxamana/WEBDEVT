    <html>
        <head>
            <meta charset="UTF-8">
            <title>Using PDO</title>
        </head>
        <body>
            <?php
                $db = new PDO("mysql:host=localhost;dbname=learndb","root","");
                $query = "SELECT id, lastname, firstname, nick, email, salary FROM personnel;";
                $result = $db->query($query);
            ?>
            <table>
                <TR><td><b>ID No.</b></td>
                <td><b>Full Name</b></td>
                <td><b>Nick Name</b></td>
                <td><b>Salary</b></td>
                <td><b>Delete</b></td></TR>
                    <?php
                        while($myrow = $result->fetch(PDO::FETCH_ASSOC)) {
                            echo "<TR><TD align=\"center\">";

                    ?>
                    <a href="itemdetailspdo.php?id=<?php echo $myrow["id"]?>"><?php echo $myrow["id"];?></a>
                    <?php
                        echo "<td>";
                        echo $myrow["firstname"];
                        echo " ";
                        echo $myrow["lastname"] ."</td>";
                        echo "<td>";
                        echo $myrow["nick"] ."</td>";
                        echo "<td>";
                        echo $myrow["salary"] ."</td>";
                        echo "<td align=\"center\">";
                     ?>
                    <a href="deletepdo.php?id=<?php echo $myrow["id"];?>">Delete<?php echo"</td>";?></a>
                        <?php
                    }
                        $result->closeCursor();
                        $db = null;
                        ?>
            </table>
        </body>
    </html>