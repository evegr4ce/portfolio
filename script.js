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