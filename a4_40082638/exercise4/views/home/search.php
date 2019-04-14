<script src="<?php echo "$root/scripts/search.js" ?>"></script>
<link rel="stylesheet" type="text/css" href="<?php echo "$root/styles/search.css" ?>" />
<header>
    <a href="https://www.aventurequebec.ca/public_upload/images/activites/thumbnails/_18K2215-1-582x400-000000.JPG">
        <img src="<?php echo "$root/images/Cottage.jpg" ?>"
            width="375" 
            height="250"
            alt="Cottage on a lake"
            />
    </a>
    <h1>Cottage Search Form</h1>
</header>

<form method="POST" name="form" action="/home/results" id="rental_form">
    <fieldset>
        <legend>Renter(s) Information</legend>
        
        <div id="numPeople">
            <label class="prompt">How many people will be coming to this cottage? </label>
            <input type="number" min="1" max="25" value="4" name="numPeople"/>
        </div>
        <br />
        <div id="smoker">
            <label class="prompt">Smoker?</label>
            <input type="radio" name="smoker"/> <span>Yes</span>
            <input type="radio" name="smoker" /> <span>No</span>
        </div>
        <br />
        <div id="pets">
            <label class="prompt">Any pets?</label><br />
            <input type="checkbox" name="pet_cats" />
                <label>Cat(s)</label><br />
            <input type="checkbox" name="pet_dogs" />
                <label>Dog(s)</label><br />
            <input type="checkbox" name="pet_other"/>
                <label>Other </label>
                <label class="prompt">Specify: </label><input type="text" />
                <br />
            <input type="checkbox" name="pet_none" />
                <label>No Pets</label>
        </div>

    </fieldset>
    <fieldset>
        <legend>What are you looking for?</legend>
        <ul>
            <li>
                <div id="size">
                    <div class="prompt">Number of Bathrooms/Bedrooms:</div>
                    <input type="checkbox" name="size_oneTwo" /><label>1/2</label>
                    <input type="checkbox" name="size_oneThree" /><label>1/3</label>
                    <input type="checkbox" name="size_oneFour" /><label>1/4</label>
                    <input type="checkbox" name="size_twoFive" /><label>2/5</label>
                </div>
                <br />
            </li>
            <li>
                <div id="place">
                    <div class="prompt">Do you have any preferred locations?</div>
                    <input type="checkbox" name="place_tremblant" /><label>Mont-Tremblant</label>
                    <input type="checkbox" name="place_laurentides" /><label>Laurentides</label>
                    <input type="checkbox" name="place_magog" /><label>Magog</label>
                    <input type="checkbox" name="place_gatineau" /><label>Gatineau</label>
                    <input type="checkbox" name="place_quebecCity" /><label>Quebec City</label>
                    <input type="checkbox" name="place_none" /><label>Don't care</label>
                </div>
                <br />
            </li>
            <li>
                <div id="price">
                    <label class="prompt">Price Range/Weekend</label>
                    <br />
                    <select id="dropPrice" name="price">
                        <option selected="selected" disabled>Select Price Range</option>
                        <option value="500">&lt; 500</option>
                        <option value="750">500-750</option>
                        <option value="1000">750-1000</option>
                        <option value="1500">1000-1500</option>
                        <option value="2000">1500-2000</option>
                        <option value="none">No Price Limit</option>
                    </select>
                </div>
                <br />
            </li>
            <li>
                <div id="nice">
                    <div class="prompt">Would be nice to have</div>
                    <input type="checkbox" name="nice_fireplace" /><label>Fire Place</label>
                    <input type="checkbox" name="nice_laundromat" /><label>Laundromat in building</label>
                    <input type="checkbox" name="nice_bbq" /><label>BBQ</label>
                    <input type="checkbox" name="nice_parking" /><label>Output Parking</label>
                    <input type="checkbox" name="nice_balcony" /><label>Balcony</label>
                    <input type="checkbox" name="nice_water" /><label>Water Front</label>
                </div>
                <br />
            </li>
        </ul>
    </fieldset>
    <fieldset id="expert_suggestion">
        <legend>Expert Suggestion</legend>
        <div>
            It is very difficult to find a cottage with this size in Quebec City.
        </div>
    </fieldset>

    <br />
    <div>Let's see what we can find...</div>
    <br />            

    <input type="submit" name="submit" id="search" value="Search"/>
    <input type="button" name="reset"  id="start_over" value="Start Over" />
</form>