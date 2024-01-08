<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Activating Bootstrap 4 Individual Tabs via JavaScript</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
	.bs-example{
    	margin: 20px;
    }
</style>
<script>
    $(document).ready(function(){ 
        $("#myTab a:last").tab('show'); // show last tab on page load
    });
</script>
</head>
<body>
<div class="bs-example">
    <ul class="nav nav-tabs" id="myTab">
        <li class="nav-item">
            <a href="#home" class="nav-link" data-toggle="tab">Home</a>
        </li>
        <li class="nav-item">
            <a href="#profile" class="nav-link" data-toggle="tab">Profile</a>
        </li>
        <li class="nav-item">
            <a href="#messages" class="nav-link" data-toggle="tab">Messages</a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade" id="home">
            <h4 class="mt-2">Home tab content</h4>
            <p>
                   
            </p>
        </div>
        <div class="tab-pane fade" id="profile">
            <h4 class="mt-2">Profile tab content</h4>
            <p>Vestibulum nec erat eu nulla rhoncus fringilla ut non neque. Vivamus nibh urna, ornare id gravida ut, mollis a magna. Aliquam porttitor condimentum nisi, eu viverra ipsum porta ut. Nam hendrerit bibendum turpis, sed molestie mi fermentum id. Aenean volutpat velit sem. Sed consequat ante in rutrum convallis. Nunc facilisis leo at faucibus adipiscing.</p>
        </div>
        <div class="tab-pane fade" id="messages">
            <h4 class="mt-2">Messages tab content</h4>
            <p>Donec vel placerat quam, ut euismod risus. Sed a mi suscipit, elementum sem a, hendrerit velit. Donec at erat magna. Sed dignissim orci nec eleifend egestas. Donec eget mi consequat massa vestibulum laoreet. Mauris et ultrices nulla, malesuada volutpat ante. Fusce ut orci lorem. Donec molestie libero in tempus imperdiet. Cum sociis natoque penatibus et magnis.</p>
        </div>
    </div>
</div>
</body>
</html>                            