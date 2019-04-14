<?php 
    $facets = [
        "people" => $_POST["numPeople"],
        "smoking" => $_POST["smoking"] == "on",
        "cats" => $_POST["pet_cats"] == "on",
        "dogs" => $_POST["pet_dogs"] == "on",
        "pets" => $_POST["pet_other"] == "on",
        "sizes" => [],
        "locations" => [],
        "maxPrice" => $_POST["price"],
    ];

    if ($_POST["size_oneTwo"] == "on")
        $facet["sizes"][] = "1/2";
    if ($_POST["size_oneThree"] == "on")
        $facet["sizes"][] = "1/3";     
    if ($_POST["size_oneFour"] == "on")
        $facet["sizes"][] = "1/4";
    if ($_POST["size_twoFive"] == "on")
        $facet["sizes"][] = "2/5";

    if ($_POST["place_tremblant"] == "on")
        $facet["locations"][] = "Laurentides";
    if ($_POST["place_laurentides"] == "on")
        $facet["locations"][] = "Mont-Tremblant";
    if ($_POST["place_magog"] == "on")
        $facet["locations"][] = "Magog";
    if ($_POST["place_gatineau"] == "on")
        $facet["locations"][] = "Gatineau";
    if ($_POST["place_quebecCity"] == "on")
        $facet["locations"][] = "Quebec Cityblant";

    array_filter($context->cottages, function($el) use ($facets) {
        $match = true;
        $match = $match && $facets["people"] <= $el->getMaxPeople();
        $match = $match && $facet["smoking"] == $el->getAllowSmoking();
        $match = $match && $facets["cats"] == $el->getAllowCats();
        $match = $match && $facets["dogs"] == $el->getAllowDogs();
        $match = $match && $facets["pets"] == $el->getAllowPets();
        $match = $match && (in_array($el->getSize(), $facets["sizes"]) || 0==sizeof($facets["sizes"]));
        $match = $match && (in_array($el->getLocation(), $facets["locations"]) || 0==sizeof($facets["locations"]));
        $match = $match && $el->getPrice() <= ($facets["maxPrice"] || $facets["maxPrice"] == NULL);
        if ($match) {
            ?>
            <div style="display: flex; margin-bottom: 5%;" class="col-md-6">
                <div style="margin-right: 5%;">
                    <img 
                        src="<?php echo $el->getImage() ?>" 
                        alt="Random image placeholder"
                        height="125"
                        width="150"
                        />
                </div>
                <div>
                    <label>Capacity: </label>
                    <span><?php echo $el->getMaxPeople() ?></span><br />
                    <label>Size: </label>
                    <span><?php echo $el->getSize() ?></span><br />
                    <label>Location: </label>
                    <span><?php echo $el->getLocation() ?></span><br />
                    <label>Price: </label>
                    <span>$<?php echo $el->getPrice() ?>/weekend</span><br />
                    <label>Ammenities: </label>
                    <span><?php echo $el->getAmmenities() ?></span><br />
                    <?php 
                        if (isset($_SESSION["user"])) {
                            ?>
                            <label>Address: </label>
                            <span><?php echo $el->getAddress() ?></span><br />
                            <?php
                        }
                    ?>
                </div>
            </div>
            <?php
        }

        return $match;
    });
?>