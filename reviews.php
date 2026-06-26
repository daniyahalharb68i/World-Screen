

<?php
function displayRatingAndReviews()
{
    echo '<h2>Rating and Reviews</h2>';

    echo '<div id="ratingStars">';
    echo '<span class="fa fa-star"></span>';
    echo '<span class="fa fa-star"></span>';
    echo '<span class="fa fa-star"></span>';
    echo '<span class="fa fa-star"></span>';
    echo '<span class="fa fa-star"></span>';
    echo '</div>';

    echo '<textarea id="reviewContent" placeholder="Write a review..."></textarea>';

    echo '<button id="submitRating">Submit Rating and Review</button>';

    echo '<div id="reviewList"></div>';

    echo '<script>';
    echo 'document.addEventListener("DOMContentLoaded", function() {';

    echo 'var ratingStars = document.getElementById("ratingStars");';
    echo 'var submitButton = document.getElementById("submitRating");';
    echo 'var reviewContent = document.getElementById("reviewContent");';
    echo 'var reviewList = document.getElementById("reviewList");';

    echo 'ratingStars.addEventListener("click", function(e) {';
    echo 'if (e.target.classList.contains("fa-star")) {';
    echo 'var stars = ratingStars.getElementsByClassName("fa-star");';
    echo 'for (var i = 0; i < stars.length; i++) {';
    echo 'stars[i].classList.remove("checked");';
    echo '}';
    echo 'var selectedStar = e.target;';
    echo 'selectedStar.classList.add("checked");';
    echo 'var previousStars = selectedStar.previousElementSibling;';
    echo 'while (previousStars) {';
    echo 'previousStars.classList.add("checked");';
    echo 'previousStars = previousStars.previousElementSibling;';
    echo '}';
    echo '}';
    echo '});';

    echo 'submitButton.addEventListener("click", function() {';
    echo 'var selectedRating = ratingStars.getElementsByClassName("checked").length;';
    echo 'var review = reviewContent.value;';
    echo 'var reviewElement = document.createElement("div");';
    echo 'reviewElement.innerHTML = "<p>Rating: " + selectedRating + "</p><p>Review: " + review + "</p>";';
    echo 'reviewList.appendChild(reviewElement);';
    echo 'var stars = ratingStars.getElementsByClassName("fa-star");';
    echo 'for (var i = 0; i < stars.length; i++) {';
    echo 'stars[i].classList.remove("checked");';
    echo '}';
    echo 'reviewContent.value = "";';
    echo '});';

    echo '});';
    echo '</script>';
}

// Call the function to display the rating and reviews section
displayRatingAndReviews();
?>