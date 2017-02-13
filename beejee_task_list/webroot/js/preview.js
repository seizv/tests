(function() {
    $("#foto").change(function(e) {
        var file, reader;
        file = e.target.files[0];
        reader = new FileReader();
        reader.onload = function(e) {
            var image;
            image = new Image();
            image.src = e.target.result;
            return image.onload = function() {
                $("#preview img").show("fast");
                return $("#preview img").attr('src', this.src);
            };
        };
        return reader.readAsDataURL(file);
    });

}).call(this);

function preview(){
    $("#preview_name_email").empty();
    $("#preview_task").empty();
    if ($("#task").val() != '' &&  $("#email").val() != '' && $("#name").val() != ''){
        $("#preview").removeClass("hidden");
        $("#preview_name_email").append( $("#name").val()+' '+ $("#email").val());
        $("#preview_task").append( $("#task").val() );
    }
};