<?php

include('header.php');

$s_division = $_GET['divison'];
$s_district = $_GET['district'];
$s_specialty = $_GET['specialty'];

?>

<section>
    <div class="top-text">
        <h1>Available Doctors</h1>
        <p>Appoint available specialist doctors from your place.</p>
    </div>

    <div class="top-all">
        <?php
        if (strlen($s_division) > 0 or strlen($s_district) > 0 or strlen($s_specialty)) {
            $query = "Select * From `dr_list` where ";

            $cnt = 0;

            if (strlen($s_division) > 0) {
                $query = $query . "division = '$s_division'";
                $cnt = $cnt + 1;
            }

            if (strlen($s_district) > 0) {

                if ($cnt > 0) {
                    $query = $query . " AND district = '$s_district'";
                } else {
                    $query = $query . "district = '$s_district'";
                }

                $cnt = $cnt + 1;
            }

            if (strlen($s_specialty) > 0) {

                if ($cnt > 0) {
                    $query = $query . " AND specialty LIKE '%$s_specialty%'";
                } else {
                    $query = $query . "specialty LIKE '%$s_specialty%'";
                }

                $cnt = $cnt + 1;
            }
            $query = $query . ";";

            $q_res = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_assoc($q_res)) {
                $dr_name = $row['name'];
                $dr_img_id = $row['img_id'];
                $dr_specialty = $row['specialty'];
                $dr_division = $row['division'];
                $dr_district = $row['district'];
                $dr_day = $row['day'];
                $dr_money = $row['money'];

                echo "
                    <div class='top-dr'>
                        <div class='dr-img-m'>
                            <img class='dr-img' alt='$dr_name' src='assets/img/doctor/$dr_img_id.jpg'>
                        </div>
                        <div class='dr-info'>
                            <h3>
                                $dr_name
                                <i style='color: #0c01fe;' class='fas fa-check-circle verified'></i>
                            </h3>
                            <p>$dr_specialty</p>
                            <ul>
                                <li>
                                    <i class='fas fa-map-marker-alt'></i> $dr_division, $dr_district
                                </li>
                                <li>
                                    <i class='far fa-clock'></i> Available on $dr_day
                                </li>
                                <li>
                                    <i class='far fa-money-bill-alt'></i> $dr_money
                                </li>
                            </ul>
                        </div>
                        <center>
                            <button>
                                <a style='color: white;' href='booking.php'>Appoint Now</a>
                            </button>
                        </center>
                    </div>
                ";
            }
        } else {
            echo "<div class='top-text'><h2>Please go back and select atleast a option to search.</h2></div>";
        }
        ?>
    </div>
</section>

<br /><br /><br /><br /><br /><br /><br /><br />

<?php

include('footer.php');

?>