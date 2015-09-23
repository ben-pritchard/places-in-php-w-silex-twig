<?php

    class Place
    {
        private $city;

        function __construct($city)
        {
            $this->city = $city;
        }

        //Getters and Setters for places.php

        function setCity($new_city)
        {
            $this->city = (string) $new_city;
        }







    }

 ?>
