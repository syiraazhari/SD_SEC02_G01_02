<!DOCTYPE html>
<html lang="en">
    <head>
        <style type="text/css">
            body {
                font-family: "Helvetica Neue",Helvetica,Arial;
                width: 1100px;
                margin: auto;
                background-color: #000072;
                color: white;
            }
            table {
                font-size: 12px;
                width: 100%;
            }
            tr, td, th {
                border: 1px solid white;
                padding: 10px;
            }
            th {
                font-size: 14px;
            }
            .btn {
                padding: 10px;
                border: 1px solid white;
                background-color: black;
                width : 300px;
                color: white;
                display: inline;
            }
            #buttons {
                display: inline;
            }
            #delForm {
                display: inline;
            }
            #delBtn:hover {
                background-color: red !important;
            }
            #addBtn:hover {
                background-color: green !important;
            }
        </style>
        <h1>Doctor Listing</h1>
        <?php
            include './doctor.php';

            $doctorList = getListOfDoctors();

            echo "
            <br><br><table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone number</th>
                <th>Department</th>
            </tr>";

            $count = 1;

            while ($row = mysqli_fetch_array($doctorList)) {
                echo "
                <tr>
                    <td>".$row['name']."</td>
                    <td>".$row['email']."</td>
                    <td>".$row['phoneNumber']."</td>
                    <td>".$row['department']."</td>
                </tr>";
                $count++;
            }

            echo "</table>";


        ?>
    </head>
</html>