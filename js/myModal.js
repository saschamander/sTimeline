$('#newEvent-Modal').on('show.bs.modal', function (event) {});
$('#newEvent-Modal').on('hidden.bs.modal', function (event) {
    $("#title").val("");
    $("#time").val("");
    $("#content").val("");
    $("#glyphicon").val("");
    $("#category").val("");
    $("#inverted").prop( "checked" );
    $("#initToggled").prop( "checked" );
    $("#img").val("");
});    

function getValsAndCreateNewEvent(){
    var title = $("#title").val();
    var time = $("#time").val();
    var content = $("#content").val();
    var glyphicon = $("#glyphicon").val();
    var category = $("#category").val();
    var inverted = $("#inverted").prop( "checked" );
    var initToggled = $("#initToggled").prop( "checked" );
    var img =$("#img").val();

    sTimeline.createNewEvent(title, time, content, glyphicon, category, inverted, initToggled, img);
};    