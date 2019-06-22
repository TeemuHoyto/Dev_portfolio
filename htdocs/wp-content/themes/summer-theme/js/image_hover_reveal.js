document.getElementById("image_hide_show").addEventListener("mouseover", hideText);
document.getElementById("image_hide_show").addEventListener("mouseout", showText);




function hideText() {
    document.getElementById("link_on_image").style.visibility = "hidden";
    console.log("moosse");
}

function showText() {
    document.getElementById("link_on_image").style.visibility = "visible";
}