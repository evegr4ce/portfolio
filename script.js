// scroll fucntion

window.addEventListener("scroll", function () {
    const nav = document.getElementById("main-nav");
    if (window.scrollY > 50) {  // adjust 50 to how far you want to scroll before it changes
        nav.classList.add("scrolled");
    } else {
        nav.classList.remove("scrolled");
    }
});

// sleep function
function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

// title change

var titleNum = 0;

function taglineChange() 
{
        document.getElementById("myTitle").innerHTML = titles[titleNum];

        if (titleNum == titles.length - 1)
        {
            titleNum = 0
        }
        else 
        {
            titleNum++;
        }
}