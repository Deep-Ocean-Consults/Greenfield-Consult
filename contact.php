<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GreenField Consult| Contact </title>
    <script src="js/jquery-2.2.3.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/mediaquery.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://use.fontawesome.com/d2cd2acddf.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ window.scrollTo(0,1); } 
	</script>
	<script src="js/bootstrap.js"></script>
	<script src="js/header.js"></script>
	<script type="text/javascript" src="js/responsiveslides.min.js"></script>
</head>
<body>
    <?php $page = 'Services'; include 'header.php';?> 
    <div class="contact-banner">
        <div class="service-overlay">
                
        </div>
    </div> 

    <div class="form-wrap">
        <h2 class="form-wrap-h2">Get in touch</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form>
                        <div class="row row_one">
                            <div class="col">
                            <input type="text" class="form-control" placeholder="First name">
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Last name">
                            </div>
                        </div>

                        <div class="row row_one">
                            <div class="col">
                            <input type="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Phone Number">
                            </div>
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-lg submit-btn">Submit</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="enquiry">
                        <h2>General Information</h2>
                        <ul>
                            <li>Opening Time:8:am</li>
                            <li>Closing Time:5:00pm</li>
                        </ul>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <?php include 'footer.php';?>
</body>
</html>