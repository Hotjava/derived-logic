$(document).ready(function(){

var dropDown = $(".calendar_navigation").detach();
dropDown.show();
$("#cal_nav").append(dropDown);

    assignCalWeeklyEventTitle();

    assignCalMonthlyEventTitle();

function assignCalMonthlyEventTitle(){
    var mainTbl = $("#table_calweekly");
    var dateTable = mainTbl.find(".style1").find("table");
    $.each(dateTable, function(index, t){
        if($(t).has(".calendar-subject").length!=0){

            $(t).find(".style3").css("background-color","#3399F3").find(".calendar_daynumber").css("color","#fff").css("font-weight","bold");
        }
    });}


    function assignCalWeeklyEventTitle() {
        var mainTable = $("#tr_weekly");

        var eventDays = mainTable.find(".rnr-c").has(".calendar-subject");
        $.each(eventDays, function(index, t){
            $(t).find(".style3").css("background-color","#3399F3").find("a").css("color","#fff").css("font-weight","bold");;
        });


    }






});