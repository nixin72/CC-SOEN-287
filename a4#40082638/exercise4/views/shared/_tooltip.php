<?php 
function tooltip($text, $hover) {
    ?>
    <style>
        /*
            Tooltip styles come from https://www.w3schools.com/css/css_tooltip.asp
        */
        .tool-tip .tool-tip-text {
            visibility: hidden;
            background-color: #008598;
            color: white ;
            border-radius: 6px;
            padding: 5px 0;
            position: absolute;
            z-index: 1;
        }

        .tool-tip:hover .tool-tip-text {
            visibility: visible;
            padding: 1%;
        }
    </style>
    <div class="tool-tip">
        <img src="<?php echo "$root/images/information.png"?>" width="10" alt="tooltip"/>
        <?php echo $text ?>
        <span class="tool-tip-text"><?php echo $hover ?></span>
    </div>
    <?php
}
?>