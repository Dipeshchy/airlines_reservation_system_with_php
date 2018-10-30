<!DOCTYPE html>
<html>
<head>
	<title></title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>




<h3 class="header3">hello</h3>
<p class="answer">hello here</p>



<script type="text/javascript">
    $(document).ready(function(){
        $(".header3").click(function(){
            console.log("hello");
            $(this).next(".answer").toggle();
            // $( this ).text( "htmlString" );
        })
    })
</script>



</body>
</html>