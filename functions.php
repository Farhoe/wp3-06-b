<?php
    function getBelt($age)
    {
        if ($age > 17) {
            return "green";
        } elseif ($age > 0) {
            return "pink";
        } else {
            return "black";
        }
    }
