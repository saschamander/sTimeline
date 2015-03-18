<?php 
include './newEventModal.php';
include './importJsonModal.php';
include './exportJsonModal.php';
?>
        

<script type="text/javascript">
    function randomEvent(){
        sTimeline.createNewEvent("Testevent", new Date().toLocaleString(), loremIpsum, "star", "success", false, true); 
    }
    
    $(function() {
        //sTimeline.renderFilterButtonsTo("#timeline-controls");
        randomEvent();    
    });
    
    $('.modal').on('hide.bs.modal', function (event) {
        $(this).find("form").trigger("reset");
    });
    
    $('#export-Modal').on('show.bs.modal', function (event) {
       var jsonString = sTimeline.exportJSON();
       $("#export-json").val(jsonString);
    });    
</script>

<script src="js/myModal.js" type="text/javascript"></script>