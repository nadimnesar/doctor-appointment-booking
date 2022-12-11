<?php

session_start();
@include 'config.php';
include('header.php');

$s_division = $_GET['divison'];
$s_district = $_GET['district'];
$s_specialty = $_GET['specialty'];

if (strlen($s_specialty) > 0) {
    if ($s_specialty == '1') $s_specialty = 'Gastro Liver';
    if ($s_specialty == '2') $s_specialty = 'Child Specialist';
    if ($s_specialty == '3') $s_specialty = 'Cardiac Surgery';
    if ($s_specialty == '4') $s_specialty = 'Thoracic Surgery';
    if ($s_specialty == '5') $s_specialty = 'Chest & Esophageal Surgeon';
    if ($s_specialty == '6') $s_specialty = 'Rheumatism specialist';
    if ($s_specialty == '7') $s_specialty = 'Chest(Lung) & Esophageal Specialist';
    if ($s_specialty == '8') $s_specialty = 'Mother & Child Disease';
    if ($s_specialty == '9') $s_specialty = 'Pedodontics';
    if ($s_specialty == '10') $s_specialty = 'Prosthodontics';
    if ($s_specialty == '11') $s_specialty = 'Orthodontics';
    if ($s_specialty == '12') $s_specialty = 'Oral & Maxilofacial Surgery';
    if ($s_specialty == '13') $s_specialty = 'Conservative Dentistry';
    if ($s_specialty == '14') $s_specialty = 'Hepatology';
    if ($s_specialty == '15') $s_specialty = 'Family Medicine';
    if ($s_specialty == '16') $s_specialty = 'Drug Sddiction';
    if ($s_specialty == '17') $s_specialty = 'Psychiatrist';
    if ($s_specialty == '18') $s_specialty = 'Physiatrist';
    if ($s_specialty == '19') $s_specialty = 'Skin Specialist';
    if ($s_specialty == '20') $s_specialty = 'Paralysis';
    if ($s_specialty == '21') $s_specialty = 'Arthritis Pain';
    if ($s_specialty == '22') $s_specialty = 'Venereology';
    if ($s_specialty == '23') $s_specialty = 'Diabetes';
    if ($s_specialty == '24') $s_specialty = 'Sonologist';
    if ($s_specialty == '25') $s_specialty = 'Radiotherapist';
    if ($s_specialty == '26') $s_specialty = 'Oral & Dental Surgery';
    if ($s_specialty == '27') $s_specialty = 'Endoscopist';
    if ($s_specialty == '28') $s_specialty = 'Orthopedic Surgery';
    if ($s_specialty == '29') $s_specialty = 'Laparoscopic Surgery';
    if ($s_specialty == '30') $s_specialty = 'Nutritionist';
    if ($s_specialty == '31') $s_specialty = 'Paediatrics';
    if ($s_specialty == '32') $s_specialty = 'Rehabilitation Medicine';
    if ($s_specialty == '33') $s_specialty = 'Orthopedician';
    if ($s_specialty == '34') $s_specialty = 'Nephrology';
    if ($s_specialty == '35') $s_specialty = 'Oncology';
    if ($s_specialty == '36') $s_specialty = 'Pediatric Endocrinology';
    if ($s_specialty == '40') $s_specialty = 'Cytopathology';
    if ($s_specialty == '41') $s_specialty = 'Hepatopancreatobiliary Surgery';
    if ($s_specialty == '50') $s_specialty = 'Neuro Medicine';
    if ($s_specialty == '51') $s_specialty = 'Neuro Surgeon';
};

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