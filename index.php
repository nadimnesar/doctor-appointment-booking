<?php

session_start();
@include 'config.php';
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
                <option value="Cox's Bazar">Cox's Bazar</option>
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
                <option value="1">Gastro Liver</option>
                <option value="2">Child Specialist</option>
                <option value="3">Cardiac Surgery</option>
                <option value="4">Thoracic Surgery</option>
                <option value="5">Chest &amp; Esophageal Surgeon</option>
                <option value="6">Rheumatism specialist</option>
                <option value="7">Chest(Lung) &amp; Esophageal Specialist</option>
                <option value="8">Mother &amp; Child Disease</option>
                <option value="9">Pedodontics</option>
                <option value="10">Prosthodontics</option>
                <option value="11">Orthodontics</option>
                <option value="12">Oral &amp; Maxilofacial Surgery</option>
                <option value="13">Conservative Dentistry</option>
                <option value="14">Hepatology</option>
                <option value="15">Family Medicine</option>
                <option value="16">Drug Sddiction</option>
                <option value="17">Psychiatrist</option>
                <option value="18">Physiatrist</option>
                <option value="19">Skin Specialist</option>
                <option value="20">Paralysis</option>
                <option value="21">Arthritis Pain</option>
                <option value="22">Venereology</option>
                <option value="23">Diabetes</option>
                <option value="24">Sonologist</option>
                <option value="25">Radiotherapist</option>
                <option value="26">Oral &amp; Dental Surgery</option>
                <option value="27">Endoscopist</option>
                <option value="28">Orthopedic Surgery</option>
                <option value="29">Laparoscopic Surgery</option>
                <option value="30">Nutritionist</option>
                <option value="31">Paediatrics</option>
                <option value="32">Rehabilitation Medicine</option>
                <option value="33">Orthopedician</option>
                <option value="34">Nephrology</option>
                <option value="35">Oncology</option>
                <option value="36">Pediatric Endocrinology</option>
                <option value="40">Cytopathology</option>
                <option value="41">Hepatopancreatobiliary Surgery</option>
                <option value="50">Neuro Medicine</option>
                <option value="51">Neuro Surgeon</option>
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
                    <center>
                        <button>
                            <a style='color: white;' href='index.php?get_dr_id=$dr_id'>Appoint Now</a>
                        </button>
                    </center>
                </div>
            ";
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