<?php
// When I execute this code. I mistake this. 

// PHP code isn’t working as expected because of a common mistake: you’re using the assignment operator (=) instead of the comparison operator (==) inside your if statements.

function identifyThePerson($dob, $nid)
{
    if ($dob == "06-06-1998" && $nid == "123456") {
        return "The person is Mojnu";
    } else if ($dob == "06-06-2006" && $nid == "098765") {
        return "The person is Mim";
    } else if ($dob == "04-05-2004" && $nid == "123456") {
        return "The person is Asha";
    } else {
        return "I don't know you";
    }
}

echo identifyThePerson("06-06-2006", "123456");
echo identifyThePerson("06-06-2006", "098765");
echo identifyThePerson("04-05-2004", "123456");
