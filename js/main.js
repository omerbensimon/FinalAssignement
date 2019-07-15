$(document).ready(function() {
    $.getJSON("data/GAMES_DATA.json", function(data) {
        $.getJSON("data/GROUP_DATA.json", function(group) {

            games_json_data = data
            group_json_data = group
            var teamName = 0;

            for (var Game of data) {

                var divToADD = 0;
                var id = "game" + Game.id;
                var nameFirst, nameSecond, colorFirst, colorSecond;
                for (var Group of group) {
                    if (Group.id === Game.first) {
                        nameFirst = Group.name;
                        colorFirst = Group.color;
                        teamName = Group.name;
                    } else if (Group.id === Game.second) {
                        nameSecond = Group.name;
                        colorSecond = Group.color;
                        teamName = Group.name;
                    }
                }

                divToADD =
                    $(
                        '<div id=' + id + '>' +
                        '<span class="Top">' + Game.date + '&nbsp;&nbsp;' + Game.hour + '</span>' +
                        '<p></p>' +
                        '<span class="ftshirt" style="color:' + colorFirst + '"><i class="fas fa-tshirt" aria-hidden="true"></i></span>' +
                        '<span class="BottomVS">VS</span>' +
                        '<span class="stshirt" style="color:' + colorSecond + '"><i class="fas fa-tshirt" aria-hidden="true"></i></span>' +
                        '<p></p>' +
                        '<span class=Bottom>' +
                        '<span class="BottomRight">' + nameFirst + '</span>' + nameSecond + '</span>'
                    )


                $(divToADD).css({
                    'padding': '30px',
                    'width': '380px',
                    'text-align': 'center',
                    'border-bottom': '1px solid white',
                    'background-color': '#606060'
                });
                $(".AllGames").append(divToADD);

                $(".ftshirt").css({
                    'font-size': '36px',
                    'margin': '20px'
                });
                $(".stshirt").css({
                    'font-size': '36px',
                    'margin': '20px'
                });

            }
            var flag = false;
            var curGame = 0;
            var found = 0;


            flagfirst = false;
            flagsecond = false;
            gamesLeft = 0;


            for (var Game of data) {
                if ((teamID === Game.first || teamID === Game.second)) {
                    if (flag === false) {
                        $("#place").append(Game.place);
                        $("#date").append(Game.date);
                        $("#hour").append(Game.hour);
                        curGame = Game;
                        flag = true;
                    }
                    var today = new Date();
                    var dd = String(today.getDate()).padStart(2, '0');
                    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
                    var yyyy = today.getFullYear();
                    today = mm + '/' + dd + '/' + yyyy;

                    if (new Date(Game.date) > new Date(today)) {
                        gamesLeft++;
                    }
                }



                var counter = 0;

                for (var Group of group) {
                    if (counter < 2) {
                        if (Group.id === curGame.first && flagfirst === false) {
                            $("#firstGame").append(Group.name);
                            counter++;
                            flagfirst = true;
                        } else if (Group.id === curGame.second && flagsecond === false) {
                            $("#secondGame").append(Group.name);
                            counter++;
                            flagsecond = true;

                        }
                    }

                }
            }

            $("#gamesleft").append("נותרו&nbsp;" + gamesLeft + "&nbsp;" + "משחקים");
            $(".Yellowsmall").append(teamName);

            $(".close_").click(function() {

                $("#myModal").css({
                    'display': 'none'
                });
                $(".icon1").css({
                    'color': '#aaaaaa'
                });
                $(".players_list").css({
                    'display': 'none'
                });
            });
            $(".close_2").click(function() {

                $("#myModal2").css({
                    'display': 'none'
                });

            });
            $(".close_3").click(function() {

                $("#myModal3").css({
                    'display': 'none'
                });

            });
$(".icon1").click(function() {
    var color = $(this).css("color");

    if (color === "rgb(170, 170, 170)") {
        $(this).css({
            'color': 'orange'
        });
        $(".players_list").css({
            'display': 'block'
        });
        $(".players_list").css({
            "padding-right": "16%"
        });
    } else {
        $(this).css({
            'color': '#aaaaaa'
        });
        $(".players_list").css({
            'display': 'none'
        });
    }
});


        });



    });
});




function openmodel() {
    $("#myModal").css({
        'display': 'block'
    });

}



var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-36251023-1']);
_gaq.push(['_setDomainName', 'jqueryscript.net']);
_gaq.push(['_trackPageview']);

(function() {
    var ga = document.createElement('script');
    ga.type = 'text/javascript';
    ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(ga, s);
})();

window.onload = function() {
    // Month Day, Year Hour:Minute:Second, id-of-element-container
    countDownToTime("August 21, 2019 15:00:00", 'countdown1');
}


function countDownToTime(countTo, id) {
    countTo = new Date(countTo).getTime();
    var now = new Date(),
        countTo = new Date(countTo),
        timeDifference = (countTo - now);

    var secondsInADay = 60 * 60 * 1000 * 24,
        secondsInAHour = 60 * 60 * 1000;

    days = Math.floor(timeDifference / (secondsInADay) * 1);
    hours = Math.floor((timeDifference % (secondsInADay)) / (secondsInAHour) * 1);
    mins = Math.floor(((timeDifference % (secondsInADay)) % (secondsInAHour)) / (60 * 1000) * 1);
    secs = Math.floor((((timeDifference % (secondsInADay)) % (secondsInAHour)) % (60 * 1000)) / 1000 * 1);

    var idEl = document.getElementById(id);
    idEl.getElementsByClassName('days')[0].innerHTML = ":" + days;
    idEl.getElementsByClassName('hours')[0].innerHTML = ":" + hours;
    idEl.getElementsByClassName('minutes')[0].innerHTML = ":" + mins;
    idEl.getElementsByClassName('seconds')[0].innerHTML = +secs;

    clearTimeout(countDownToTime.interval);
    countDownToTime.interval = setTimeout(function() {
        countDownToTime(countTo, id);
    }, 1000);
}


