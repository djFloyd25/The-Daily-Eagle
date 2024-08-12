<?php

declare(strict_types=1);

function check_draft_errors() {
    if (isset($_GET["draft"]) && $_GET["draft"] === "success") {
        echo "<br>";
        echo '<p class="draft-success">Draft Successfuly Created!</p>';
    }
}