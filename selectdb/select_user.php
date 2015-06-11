
<!DOCTYPE html>
<html>
<head>
    <title>SELECT PDO</title>
    <style>
        body{
            font-family: Georgia, Utopia, Palatino, ‘Palatino Linotype’, serif;
            text-align: center;
            background-color: darkslategrey;
            color: aquamarine;
        }

        #p1 a:link, a:active, a:visited{    text-decoration:underline ;
            color:   #FFB84D;
        }

        #p1 a:hover{
            color: #E0AF66;
        }

        h1{
            text-decoration: overline;
            color: #FFB84D;
        }

        table, tr, td {
            font-family: font-family: Georgia, Utopia, Palatino, ‘Palatino Linotype’, serif;
            margin: 0 auto;
            border: 1px solid black;
            text-align: center;
            background-color: aquamarine;
            color:black;
        }

        .td {
            font-family: Georgia, Utopia, Palatino, ‘Palatino Linotype’, serif;
            color:#FF9900;
        }



        table input[type=submit]{
            border: 0px;
            color: #FF9900;
            font-size: large;
            background-color: transparent;
            font-family: Georgia, Utopia, Palatino, ‘Palatino Linotype’, serif;
            cursor:pointer;
            text-decoration: underline;
        }
        table input[type=submit]:hover{color:#CC7A00}

        table a:link, a:active, a:visited{
            color: #FF9900;

        }
        table a:hover{color:#CC7A00}

    </style>
</head>
<body>

<h1>DataBase Registrazione - Tabella User</h1>
<!-- TEXTFIELD INSERT NEW RECORD -->


<br><br>
<table> <!-- Nomi campi tabella IDuser, Username ed Email indicizzabili con GET -->
    <td><a href="select_form.php?ordern=id" > IDuser </a></td>
    <td> <a href="select_form.php?order=username" > Username</a></td >
    <td class="td"> Password </td>
    <td> <a href="select_form.php?order_e=email" > Email </a> </td>
    <td class="td"> Action </td>
    </tr>

    <?php

    include'db_conn.php';

    If(
        (isset($_GET['order']) and $sql=('SELECT * FROM user ORDER BY Username'))
        or (isset($_GET['ordern']) and  $sql=('SELECT * FROM user ORDER BY IDuser'))
        or (isset($_GET['order_e']) and $sql=('SELECT * FROM user ORDER BY Email'))
        or (empty($_GET) and $sql=('SELECT * FROM user'))
    ) {

        foreach(($connessione->query($sql)) as $row){

            //stampa tutto il DB riga per riga
            echo '<td>'.$row['IDuser'].'</td><td>'.$row['Username'].'</td><td>'.$row['Password'].'</td><td> '.$row['Email'].'</td>';

            // LINK update_form.php
            echo '<td><a href="update_form.php?IDuser='.$row['IDuser'].'&Username='.$row['Username'].'&Password='.$row['Password'].'&Email='.$row['Email'].'">UPDATE</a> or ';

            // LINK delete_form.php
            echo '<a href="delete_form.php?id='.$row['IDuser'].'"> DELETE</a></td></tr> ';
        }
    }




    ?>
</table></body></html>


