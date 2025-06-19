<?php
require_once '../../Controllers/TrainConroller.php';
require_once '../../Models/train.php';
$trainController = new TrainController;
$trains = $trainController->getTrains();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Table Desing Using HTML & CSS</title>
    <link href="../assets/css/available trains.css" rel="stylesheet">
</head>

    
<body>

    <div class="table-container">
        <table>
                                        <thead>
                                            <tr>
                    <th>train name</th>
                    <th>source</th>
                    <th>destination</th>
                    <th>pnr</th>
                    <th>departure time</th>
                    <th>arrival time</th>
                    <th>train number</th>
                    <th>Book now</th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                        <?php
                                            ?><tr class="tr-shadow"><?php
                                            foreach($trains as $train)
                                            {
                                                ?><td><?php echo $train["train_name"] ?></td>
                                                <td><?php echo $train["source"] ?></td>
                                                <td><?php echo $train["destination"] ?></td>
                                                <td class="desc"><?php echo $train["pnr"] ?></td>
                                                <td><?php echo $train["departure_time"] ?></td>
                                                <td><?php echo $train["arrival_time"] ?></td>
                                                <td><?php echo $train["train_no"] ?></td>
                                                <td><a href="payment.php" class="btn">Book now</a></td>
                                                
                                                
                                               
                                                </tr>
                                                <?php echo "<br>"?>
                                                <?php
                                            }
                                            ?>


                

                                        </tbody>
                                    </table>
                                </div>

</body>

</html>