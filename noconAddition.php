<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nocon Addition</title>
</head>
<body>
    <form action="noconAddition.php" method="POST">
        <h2>
            <table>
                <tr>
                    <td>
                        <label for="noconFirstNumber"> First Number</label>
                    </td>
                    <td>
                        <input type="number" id="nocon_FirstNumber" name="nocon_FirstNumber" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="noconSecondNumber"> Second Number</label>
                    </td>
                    <td>
                        <input type="number" id="nocon_SecondNumber" name="nocon_SecondNumber" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" name="compute" class="noconCompute"> Compute </button>
                    </td>
                </tr>
                <tr>
                    <td> The sum of two numbers is: </td>
                    <td>
                        <input type="text" name="nocon_Answer" value="
                        <?php
                        include_once("noconConnection.php");

                        if(isset($_POST['compute'])){
                            $nocon_FirstNumber = $_POST ['nocon_FirstNumber'];
                            $nocon_SecondNumber = $_POST ['nocon_SecondNumber'];
                            $nocon_Sum = $nocon_FirstNumber + $nocon_SecondNumber; echo $nocon_Sum;

                            $compute = mysqli_query($NOCON_CONNECTION, "INSERT INTO noconAddition(nocon_FirstNumber,nocon_SecondNumber,nocon_Sum)
                            VALUES ('$nocon_FirstNumber', '$nocon_SecondNumber', '$nocon_Sum')");
                                              
                        }
                        ?>">
                    </td>
                </tr>
            </table>
        </h2>
    </form>
    
</html>