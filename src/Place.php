<?php

    class Place
    {
        private $city;
        private $image;

        function __construct($city, $image)
        {
            $this->city = $city;
            $this->image = $image;

        }

        //Getters and Setters for places.php

        function setCity($new_city)
        {
            $this->city = (string) $new_city;
        }

        function getCity()
        {
            return $this->city;
        }

        function setImage($new_image)
        {
            $this->image = $new_image;
        }

        function getImage()
        {
            return $this->image;
        }


        function save()
        {
            array_push($_SESSION["list_of_places"], $this);
        }

        static function getAll()
        {
            return $_SESSION["list_of_places"];
        }

        static function deleteAll()
        {
            $_SESSION["list_of_places"] = array();
        }




    }

 ?>
