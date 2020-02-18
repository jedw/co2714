<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
           $.ajax({
                url:"<?php echo base_url(); ?>Welcome/things",
                success: function(data){   
                    $.each(data, function(i, item){
                        $("#things").append("<li>"+item.thing+"</li>");
                    })
                },
                datatype: "json"
            });

            $("#submitbtn").click(function(){
                var thingy = $("#thingtoinput").val();
                var datastring = "thing="+thingy;
                $.ajax({
                    url:"<?php echo base_url(); ?>Welcome/addthing",
                    data: datastring,
                    type: "POST",
                    success: function(data){   
                        console.log("success");
                    }
                });
                $("#things").append("<li>"+thingy+"</li>");
            });
            
        });
    </script>
</head>
<body>
    <ul id="things">
    </ul>
    <input type="text" name="thingtoinput" id="thingtoinput"/>
    <button id="submitbtn">Press to submit</button>
</body>
</html>