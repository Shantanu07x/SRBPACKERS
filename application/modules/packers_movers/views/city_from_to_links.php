 <div class="container cityfrom">
    <div class='row mt-5'>
        <?php
        $ct = array(
            "Jodhpur",
            "Udaipur",
            "Kota",
            "Ajmer",
            "Bikaner",
            "Alwar",
            "Bhilwara",
            "Sikar",
            "Pali",
            "Tonk",

            "Mumbai",
            "Delhi",
            "Bangalore",
            "Gurgaon",

            "Kolkata",
            "Hyderabad",
            "Pune",

            "Lucknow",

            "Agra",
            "Noida",
            "Chennai",
            "Nagpur",
            "Ahmedabad",

            "Faridabad",
            "Vadodara",
            "Rajkot",
            "Jabalpur",
            "Gwalior",
            "Hyderabad",
            "Chandigarh",
            "Surat",
            "Dausa",
            "Bundi",
            "Jhunjhunu",
            "Kanpur",
            "Nashik",
            "Barmer",
            "Jaisalmer",
            "Bharatpur",
            "Chittorgarh",
            "Sri Ganganagar",
            "Hanumangarh",

            "Visakhapatnam",
            "Indore",
            "Thane",
            "Bhopal",
            "Patna",

            "Ghaziabad",
            "Ludhiana",


        );
        $ct = array_diff($ct, array($city));

        foreach ($ct as $c) {
            $flink = strtolower(str_replace(' ', '-', $city));
            $tlink = strtolower(str_replace(' ', '-', $c));
        ?>
            <div class="col-sm-4">
                <a href="<?= site_url("packers-movers-from-$flink-to-$tlink") ?>">
                    <p>Packers movers from <span><?= ucwords($city) ?> to <?= $c ?></span></p>
                </a>
            </div>
        <?php } ?>
    </div>
</div>
<style>
    .cityfrom span {
        color: #B30000;
    }

    .cityfrom p {
        font-size: 16px;
        color: #000;
    }

    .cityfrom a:hover {
        color: #000;
    }
</style>