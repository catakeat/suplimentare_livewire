
$('.sub-menu ul').hide();
$(".sub-menu a").click(function () {

    $(this).parent(".sub-menu").children("ul").slideToggle("100");
    $(this).find(".right").toggleClass("fa-caret-up fa-caret-down");
});

function classic(obiect = 'calendar?month=05&year=2021') {

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {

            document.getElementById("calendarul").innerHTML = this.responseText;

        }
    };
    xhttp.open("GET", obiect, true);
    xhttp.send();

    return false;// ca sa nu mearga dupa link
}
