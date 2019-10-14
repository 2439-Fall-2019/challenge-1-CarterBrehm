<?php
    $regular_entrees = array(
        "Regular Entrees",
        array("Three Little Pigs", "trio of pork tenderloin medallions | peppercorn sauce | garlic mashed potatoes | fresh green beans", "10"),
        array("Autumn Vegetable Cassoulet", "cannellini beans | parsnips | carrots | fennel | sweet potato | leeks | peppers | shallots | toasted herb breadcrumbs", "7"),
        array("Linguine Lagasse", "wild mushrooms | tasso ham | creole seasoning | cream tomato | scallion | linguine pasta | blue cheese crostini", "8"),
        array("Chicken Katsu", "panko coated chicken breast | jasmine rice | japanese tonkatsu sauce | cabbage | chili cukes", "8"),
        array("Salmon Marrakesh", "moroccan bbq salmon fillet | roasted vegetable couscous | toasted pistachios", "12")
    );
    $sandwiches = array(
        "Sandwiches",
        array("Torta Al Pastor", "mexican style braised pork | grilled pineapple and red onion oaxaca cheese | avocado salsa | telera roll", "7"),
        array("Philly French Dip", "lean roast beef au-jus | sauteed mushrooms and onion ", "9"),
        array("Killer Kowalski", "sweet potatoes | beets | feta cheese | red onion | lettuce | tomato | roasted pepper aioli | brioche", "6"),
        array("Texas Holdem", "grilled chicken breast | ancho chili bbq sauce | pepperjack cheese | bacon | slaw | texas toast", "8"),
        array("Bistro Burger", "fresh angus beef | toasted brioche | lettuce | tomato | pickle | onion | choice of pepperjack, provolone, cheddar, or American cheese | add bacon, avocado, egg, sauteed onions or mushrooms for $1", "7"),
        array("Beyond Burger", "plant based vegetarian patty | toasted brioche | lettuce | tomato | pickle | onion | choice of pepperjack, provolone, cheddar, or American cheese", "8")
    );
    $salads = array (
        "Salads",
        array("Empire State Salad", "fuji apples | golden raisins | chili hazelnutes | everything bagel crisps | mixed greens | apple cider vinaigrette", "7"),
        array("Merritt Street Salad", "artichokes | pancetta | beets | gorgonzola | sunflower seeds | organic mixed greens | balsamic vinaigrette", "8"),
        array("Lo Rider", "grilled shrimp | avocado | tomato | olives | spanish onion | sweet peppers | crispy tortillas | chilled greens | chipotle ranch dressing", "9"),
        array("Bistro Side Salad", "mixed greens | tomato | cucumber | carrot | radish | olives | choose a dressing: balsamic vinaigrette, apple cider vinaigrette, chipotle ranch or buttermild ranch dressing | add: grilled chicken breast / $3, salmon or shrimp / $5", "3 reg / $5 lg")
    );
    $sides = array (
        "Sides",
        array("French Fries", "", "2"),
        array("Duck Fat Tater Tots", "", "2")
    );
    $beverages = array (
        "Beverages",
        array("Bottled Soda & Water", "", "1.50"),
        array("Iced Tea", "", "1"),
        array("Coffee & Hot Tea", "", "1")
    );
    $desserts = array (
        "Desserts",
        array("Cookies", "", "1"),
        array("Bars/Fruit Bread", "", "1.50"),
        array("Special Dessert", "", "2.50"),
        array("Thimmie's Bread Pudding", "", "2.50")
    );
    $lunch = array($entrees, $sandwiches, $salads, $sides, $beverages, $desserts);

    $starters = array (
        "Starters",
        array("Charcuterie", "chef's selection house cured | meats & local cheeses | black garlic aioli | raisin whole grain mostarda | blackberry | radish | bread" , "11"),
        array("Beets", "balsamic | mission figs | orange | pistachio | honey vinaigrette", "6"),
        array("Butternut Soup", "farro | chestnuts | black truffle | spiced rye crouton", "7"),
        array("Roasted Marrow", "chermoula | maitake mushroom | cipollini onion | parsley | lemon | rustic bread", "8")
    );
    $special_entrees = array (
        "Special Entrees",
        array("Short Rib", "bordelaise | yukon potato puree | peas | cipollini onion | celery | beach mushrooms", "18"),
        array("Rabbit Ragout", "cavatelli | maitake mushroom | broccoli | cured yolk | parmesan | fresh tarragon" , "15"),
        array("Duck Breast", "whole grain raisin mostarda | parsnip puree | heirloom carrot | trumpet mushrooms | cipollini onion | blackberry", "19"),
        array("Salt Cured Salmon", "sweet corn cream | tart apple & celery root salad | quinoa | onion | picled chilies | poppy | cilantro", "17")
    );
    $special = array($starters, $special_entrees);
    $menu = array($regular_entrees, $sandwiches, $salads, $sides, $beverages, $desserts, $starters, $special_entrees);

    function generatePage($array) {
        $title = $array[0];
        $id = str_replace(' ', '', $array[0]);
        unset($array[0]);
        echo "    <div data-role=\"page\" data-title=\""; 
        echo $title; 
        echo "\" id=\""; 
        echo $id; 
        echo "\">
        <header data-role=\"header\" data-add-back-btn=\"true\" data-position=\"fixed\">
            <h1>"; 
        echo $title; 
        echo "</h1>
        </header>
        <div data-role=\"content\">
            <ul data-role=\"listview\" data-inset=\"true\">";
        foreach ($array as $item) {
            echo "<li><h3>";
            echo $item[0];
            echo "</h3><p><i>";
            echo $item[1];
            echo "</i></p><span class=\"ui-li-count\">";
            echo "$" . $item[2];
            echo "</span></li>";
        }
        echo "</ul>
        </div>
        <footer style=\"text-align: center;\" data-role=\"footer\" data-position=\"fixed\">MCC Sage Bistro</footer>
    </div>";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Menu</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <link rel="stylesheet" href="/~crbrehm/sage/_css/brehm_challenge1.css">
</head>

<body>
    <!--    
        Carter Brehm
        menu.php
        INFO2439.PLA
        Thoendel
        10/9/13
    -->
    <div data-role="page" data-title="Menu" id="homePage">
        <!--Begin Page-->
        <header data-role="header" data-add-back-btn="true" data-position="fixed">
            <!--Begin Header-->
            <a href="index.html" data-role="back" data-icon="carat-l">Back</a>
            <h1>Menu</h1>
        </header>
        <!--End Header-->
        <div data-role="content">
            <!--Begin Content-->
            <ul data-role="listview" data-inset="true">
                <li data-role="list-divider">A LA CARTE</li>
                <li><a href="#RegularEntrees">Entrees</a></li>
                <li><a href="#Sandwiches">Sandwiches</a></li>
                <li><a href="#Salads">Salads</a></li>
                <li><a href="#Sides">Sides</a></li>
                <li><a href="#Beverages">Beverages</a></li>
                <li><a href="#Desserts">Desserts</a></li>
                <li data-role="list-divider">SPECIALS</li>
                <li><a href="#Starters">Starters</a></li>
                <li><a href="#SpecialEntrees">Entrees</a></li>
            </ul>
            <p id="wine" style="text-align: center;">The Sage Student Bistro serves wine and beer. We maintain a concise but thoughtful beverage list featuring red and white wines, as well as an assortment of local and imported beers. If you have a special bottle you would like to enjoy in our restaurant, corking service is available for just $10 per 750 ml bottle.</p>
        </div>
        <!--End Content-->
        <footer style="text-align: center;" data-role="footer" data-position="fixed">MCC Sage Bistro</footer>
        <!--Footer-->
    </div>
    <!--End Page-->

    <?php
    foreach ($menu as $category) {
        generatePage($category);
    }
    ?>


</body>

</html>