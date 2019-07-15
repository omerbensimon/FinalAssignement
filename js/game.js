$(document).ready(function() {
    $.getJSON("data/GAMES_DATA.json", function(data) {
        $.getJSON("data/GROUP_DATA.json", function(group) {
            for (var Game of data) {
                var found = false;
                var detaDiv = 0;
                if (teamID == Game.first) {
                    for (var Groupname of group) {
                        if (Game.second == Groupname.id) {
                            var gname = Groupname.name;
                            var shirt = Groupname.color;
                            found = true;

                        }
                    }
                } else if (teamID == Game.second) {
                    for (var Groupname of group) {
                        if (Game.first == Group.id) {
                            var gname = Groupname.name;
                            var shirt = Groupname.color;
                            found = true;
                        }
                    }
                }
                var counter = 0;
                if (found === true) {
                    detaDiv = $('<div class=games> <div class=deta><div class="circle1 circle"></div>' +
                        '<h4 class="option1" id="myBtn" onclick="openmodel()">בניית הרכב משחק</h4>' +
                        '<h4 class="option2"><a href="#" target="_self">קביעת אימון טרום משחק</a></h4>' +
                        '<div class="circle2 circle"></div></div>' +
                        '<div class="clear"></div>' +
                        '<div class=deta><h3 class="date">' + Game.date + '</h3>' +
                        '<h3 class="time">' + Game.hour + '</h3>' +
                        '<h3 class="place">' + Game.place + '</h3>' +
                        '<img class="icon2" src="images/Calendar_Icon_1.svg" alt="icon2">' +
                        '<img class="icon3" src="images/Clock_Fast_Icon_1.svg" alt="icon3">' +
                        '<img class="icon4" src="images/Location_On_Icon_3.svg" alt="icon4"></div>' +
                        '<div class="clear"></div>' +
                        '<div class=deta><span class="shirt" style=color:' + shirt + '><i class="fas fa-tshirt" aria-hidden="true"></i></span>' +
                        '<h3 class="name">' + gname + '</h3>' +
                        '<a href="#"><img class="arrow" src="images/Keyboard_Arrow_Down_Icon_3.svg" alt="arrow"></a>' +
                        '<h3 class="vs">VS</h3></div>' +
                        '<div class="clear"></div>');
                    $(".allGames").append(detaDiv);
                    counter++;

                }

                found = false;
            }

            ;
        });

    });
});