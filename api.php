<?php
        $api_url=$_POST['api'];
        $joke_data=json_decode(file_get_contents($api_url),true);

        echo "<pre>";
//        print_r($joke_data);

        $type=$joke_data['type'];

        $safe=$joke_data['safe'];
        $category=$joke_data['category'];
        echo "<h1 id='category'>Category: $category</h1>";

        if($type == 'twopart') {
                $setup=$joke_data['setup'];
                $delivery=$joke_data['delivery'];

                echo "<h1>🌹setup: $setup</h1>";
                echo "<h1>🔥punch: $delivery</h1>";
        }
        else {
                $joke=$joke_data['joke'];
                echo "<h1 id='joke'>Joke:</h1>";
                echo "<h1>$joke</h1>";
        };

        $name="Surendra Longre";
?>

