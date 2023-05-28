<?php

include('header.php');

@$get_drid = $_GET['get_dr_id'];
@$get_usrid = $_SESSION['login_done_id'];

if (isset($get_drid) and isset($get_usrid)) {
    $query2 = "INSERT INTO user_appoint ( user_id, dr_id ) VALUES ( $get_usrid, $get_drid );";
    mysqli_query($conn, $query2);
    echo '<script language="javascript">';
    echo 'alert("Your Appointment is Added.")';
    echo '</script>';
}

?>

<section>
    <div class="search-txt">
        <h1>Find Your Doctor, Make an Appointment</h1>
        <p>Discover the best doctors from the nearest city you live.</p>
    </div>
    <div class="search-box">
        <form action="search.php" method="get">
            <select name="divison">
                <option value="">Search by Division</option>
                <option value="Dhaka">Dhaka</option>
                <option value="Chittagong">Chittagong</option>
                <option value="Rajshahi">Rajshahi</option>
                <option value="Sylhet">Sylhet</option>
                <option value="Rangpur">Rangpur</option>
                <option value="Barisal">Barisal</option>
                <option value="Khulna">Khulna</option>
                <option value="Mymensingh">Mymensingh</option>
            </select>

            <select name="district">
                <option value="">Search by District</option>
                <option value="Dhaka">Dhaka</option>
                <option value="Sylhet">Sylhet</option>
                <option value="Narayanganj">Narayanganj</option>
                <option value="Moulvibazar">Moulvibazar</option>
                <option value="Narsingdi">Narsingdi</option>
                <option value="Gopalganj">Gopalganj</option>
                <option value="Sunamganj">Sunamganj</option>
                <option value="Gazipur">Gazipur</option>
                <option value="Habiganj">Habiganj</option>
                <option value="Khulna">Khulna</option>
                <option value="Bagerhat">Bagerhat</option>
                <option value="Satkhira">Satkhira</option>
                <option value="Jessore">Jessore</option>
                <option value="Narail">Narail</option>
                <option value="Magura">Magura</option>
                <option value="Jhenaidah">Jhenaidah</option>
                <option value="Chuadanga">Chuadanga</option>
                <option value="Meherpur">Meherpur</option>
                <option value="Kushtia">Kushtia</option>
                <option value="Comilla">Comilla</option>
                <option value="Panchagarh">Panchagarh</option>
                <option value="Bandarban">Bandarban</option>
                <option value="Chittagong">Chittagong</option>
                <option value="Rangamati">Rangamati</option>
                <option value="Khagrachhari">Khagrachhari</option>
                <option value="Noakhali">Noakhali</option>
                <option value="Feni">Feni</option>
                <option value="Lakshmipur">Lakshmipur</option>
                <option value="Coxs Bazar">Cox's Bazar</option>
                <option value="Chandpur">Chandpur</option>
                <option value="Brahmanbaria">Brahmanbaria</option>
                <option value="Barguna">Barguna</option>
                <option value="Patuakhali">Patuakhali</option>
                <option value="Jhalokati">Jhalokati</option>
                <option value="Bhola">Bhola</option>
                <option value="Pirojpur">Pirojpur</option>
                <option value="Barisal">Barisal</option>
                <option value="Natore">Natore</option>
                <option value="Nilphamari">Nilphamari</option>
                <option value="Thakurgaon">Thakurgaon</option>
                <option value="Lalmonirhat">Lalmonirhat</option>
                <option value="Kurigram">Kurigram</option>
                <option value="Rangpur">Rangpur</option>
                <option value="Dinajpur">Dinajpur</option>
                <option value="Gaibandha">Gaibandha</option>
                <option value="Joypurhat">Joypurhat</option>
                <option value="Naogaon">Naogaon</option>
                <option value="Bogra">Bogra</option>
                <option value="Chapainawabganj">Chapainawabganj</option>
                <option value="Rajshahi">Rajshahi</option>
                <option value="Sirajganj">Sirajganj</option>
                <option value="Madaripur">Madaripur</option>
                <option value="Pabna">Pabna</option>
                <option value="Sherpur">Sherpur</option>
                <option value="Jamalpur">Jamalpur</option>
                <option value="Netrokona">Netrokona</option>
                <option value="Mymensingh">Mymensingh</option>
                <option value="Tangail">Tangail</option>
                <option value="Kishoreganj">Kishoreganj</option>
                <option value="Manikganj">Manikganj</option>
                <option value="Rajbari">Rajbari</option>
                <option value="Faridpur">Faridpur</option>
                <option value="Munshiganj">Munshiganj</option>
                <option value="Shariatpur">Shariatpur</option>
            </select>

            <select name="specialty">
                <option value="">Search by Specialty</option>
                <option value="Gastro Liver">Gastro Liver</option>
                <option value="Child Specialist">Child Specialist</option>
                <option value="Cardiac Surgery">Cardiac Surgery</option>
                <option value="Thoracic Surgery">Thoracic Surgery</option>
                <option value="Chest & Esophageal Surgeon">Chest &amp; Esophageal Surgeon</option>
                <option value="Rheumatism specialist">Rheumatism specialist</option>
                <option value="Chest(Lung) & Esophageal Specialist">Chest(Lung) &amp; Esophageal Specialist</option>
                <option value="Mother & Child Disease">Mother &amp; Child Disease</option>
                <option value="Pedodontics">Pedodontics</option>
                <option value="Prosthodontics">Prosthodontics</option>
                <option value="Orthodontics">Orthodontics</option>
                <option value="Oral Maxilofacial Surgery">Oral &amp; Maxilofacial Surgery</option>
                <option value="Conservative Dentistry">Conservative Dentistry</option>
                <option value="Hepatology">Hepatology</option>
                <option value="Family Medicine">Family Medicine</option>
                <option value="Drug Sddiction">Drug Sddiction</option>
                <option value="Psychiatrist">Psychiatrist</option>
                <option value="Physiatrist">Physiatrist</option>
                <option value="Skin Specialist">Skin Specialist</option>
                <option value="Paralysis">Paralysis</option>
                <option value="Arthritis">Arthritis Pain</option>
                <option value="Venereology">Venereology</option>
                <option value="Diabetes">Diabetes</option>
                <option value="Sonologist">Sonologist</option>
                <option value="Radiotherapist">Radiotherapist</option>
                <option value="Oral & Dental Surgery">Oral &amp; Dental Surgery</option>
                <option value="Endoscopist">Endoscopist</option>
                <option value="Orthopedic Surgery">Orthopedic Surgery</option>
                <option value="Laparoscopic Surgery">Laparoscopic Surgery</option>
                <option value="Nutritionist">Nutritionist</option>
                <option value="Paediatrics">Paediatrics</option>
                <option value="Rehabilitation Medicine">Rehabilitation Medicine</option>
                <option value="Orthopedician">Orthopedician</option>
                <option value="Nephrology">Nephrology</option>
                <option value="Oncology">Oncology</option>
                <option value="Pediatric Endocrinology">Pediatric Endocrinology</option>
                <option value="Cytopathology">Cytopathology</option>
                <option value="Hepatopancreatobiliary Surgery">Hepatopancreatobiliary Surgery</option>
                <option value="Neuro Medicine">Neuro Medicine</option>
                <option value="Neuro Surgeon">Neuro Surgeon</option>
            </select>
            <input type="submit" value="Search" class="search-box-button">
        </form>
    </div>
</section>

<section>
    <img class="backg" src="assets/img/back.png">
</section>

<section>
    <div class="top-text">
        <h1>Our Latest Doctors</h1>
        <p>Appoint our latest specialist doctors from all over Bangladesh.</p>
    </div>
    <div class="top-all">

        <?php
        $query = "Select * From `dr_list` order by `id` ASC LIMIT 5;";
        $q_res = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($q_res)) {
            $dr_id = $row['id'];
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
                ";

            if (isset($_SESSION['login_done']) && $_SESSION['login_done_type'] == 'user') {
                echo "
                        <center>
                            <button>
                                <a style='color: white;' href='index.php?get_dr_id=$dr_id'>Appoint Now</a>
                            </button>
                        </center>
                        </div>
                    ";
            } else {
                echo "
                        </div>
                    ";
            }
        }
        ?>
    </div>
</section>

<section>
    <div class="top-text">
        <h1>How it Works</h1>
        <p>Learn how you can get rid of your illness.</p>
    </div>
    <div class="htw-m">
        <div class="htw">
            <img src="assets/img/work1.png" width="300px" height="350px" alt="Search">
            <div class="htw-txt-1">
                <h3>Search Doctor</h3>
                <p>Find your doctor easily with a minimum of effort. We've kept everything organised for you.
                </p>
            </div>
        </div><br>
        <div class="htw">
            <div class="htw-txt-2">
                <h3>Book Appointment</h3>
                <p>Ask for an appointment of the doctor quickly with almost a single click. We take care of the
                    rest.
                </p>
            </div>
            <img src="assets/img/work2.png" width="320px" height="320px" alt="Search">
        </div><br>
        <div class="htw">
            <img src="assets/img/work4.png" width="290px" height="310px" alt="Search">
            <div class="htw-txt-3">
                <h3>Get Well Soon</h3>
                <p>Visit the doctor, take the service based on your appointment. Get back to good health and
                    happiness.
                </p>
            </div>
        </div>
    </div>
</section>

<br /><br /><br />

<?php

include('footer.php');

?>