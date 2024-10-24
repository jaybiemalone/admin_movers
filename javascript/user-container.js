document.getElementById("showContent1").addEventListener("click", function() {
    document.getElementById("content1").style.display = "block";
    document.getElementById("content2").style.display = "none";
});

document.getElementById("showContent2").addEventListener("click", function() {
    document.getElementById("content1").style.display = "none";
    document.getElementById("content2").style.display = "block";
});