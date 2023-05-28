<?php

include('header.php');

@$get_usrid = $_SESSION['login_done_id'];

?>

<section>
    <div class="top-text">
        <h1>Appointed Doctors</h1>
        <p>Doctors that you have been appointed.</p>
    </div>

    <div class="top-all">
        <?php
        $query = "Select * From `user_appoint` where user_id = '$get_usrid' Order By id DESC;";
        $q_res = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($q_res)) {
            $dr_id = $row['dr_id'];

            $query2 = "Select * From `dr_list` where id = '$dr_id';";
            $q_res2 = mysqli_query($conn, $query2);

            while ($row2 = mysqli_fetch_assoc($q_res2)) {
                $dr_name = $row2['name'];
                $dr_img_id = $row2['img_id'];
                $dr_specialty = $row2['specialty'];
                $dr_division = $row2['division'];
                $dr_district = $row2['district'];
                $dr_day = $row2['day'];
                $dr_money = $row2['money'];
                echo "
                        <div class='top-dr'>
                            <div class='dr-img-m'>
                                <img class='dr-img' alt='$dr_name' src='assets/img/doctor/$dr_img_id'>
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
                        </div>
                    ";
            }
        }
        ?>
    </div>
</section>

<br /><br /><br /><br /><br /><br /><br /><br />


<?php

include('footer.php');

?>