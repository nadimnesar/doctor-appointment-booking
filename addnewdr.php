<?php

include('header.php');

if (isset($_POST['submit'])) {
    $name =  $_POST['name'];
    $specialty = $_POST['specialty'];
    $divison = $_POST['divison'];
    $district = $_POST['district'];
    $day = $_POST['day'];
    $money = $_POST['money'];
    $img = $_COOKIE['imagename'];
    $q = "INSERT INTO drlist(name, specialty, divison, district, day, money, img) VALUES('$name','$specialty','$divison','$district', '$day', '$money', '$img');";
    mysqli_query($connect, $q);
    @header('location:index.php');
};

?>



<section>
    <div class="form-container3">
        <form method="post">
            <h3>Add New Doctor</h3>
            <input type="text" name="name" required placeholder="Enter Name">
            <input type="file" id="imageInput" accept="image/*">
            <select name="specialty">
                <option value="">Choose Specialty</option>
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
            <select name="divison">
                <option value="">Choose Division</option>
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
                <option value="">Choose District</option>
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
            <select name="day">
                <option value="">Choose Available Day</option>
                <option value="Saturday">Saturday</option>
                <option value="Sunday">Sunday</option>
                <option value="Monday">Monday</option>
                <option value="Tuesday">Tuesday</option>
                <option value="Wednesday">Wednesday</option>
                <option value="Thursday">Thursday</option>
                <option value="Friday">Friday</option>
            </select>
            <input type="text" name="money" required placeholder="Enter Money">
            <button type="submit" name="submit" class="form-btn" onclick="image_upload()"> Add Now </button>
        </form>
    </div>
</section>

<?php

include('footer.php');

?>