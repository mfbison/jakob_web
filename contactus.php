
<!DOCTYPE html>
<head>
<style> <?php include 'C:\AppServ\www\styletest.css'; ?> </style>
<link rel="stylesheet" type="text/css" href="css\style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css\style.css">
  <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
<title>Form submission</title>
</head>
<body>
    <?php 
    // include 'header.php';

    
    if(isset($_POST['submit'])){
        $to = "jakob@pacificwestgateway.com"; // this is your Email address
        $from = $_POST['email']; // this is the sender's Email address
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $state = $_POST['state'];
        $subject = "Form submission";
        $subject2 = "Copy of your form submission";
        $message = $first_name . " " . $last_name . " wrote the following:" . "\n" . $_POST['message'];
        $message2 = "Here is a copy of your message " . $first_name . "\n" . $_POST['message'];
    
        $header1 = "From:" . $from;
        $header2 = "From:" . $to; 
        mail($to,$subject,$state,$message,$header1);
        mail($from,$subject2,$state,$message2,$header2); // sends a copy of the message to the sender
        header("Location: https://http://pacificwestgateway.com/index.html");
        exit;
        // You can also use header('Location: thank_you.php'); to redirect to another page.
        }
    ?>
     <div class="header">Pacific West Gateway</div>
  
  <div id="navbar">
  <a href="index.html">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Products 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="metal.html">Metalworks</a>
      <a href="spice.html">Spices</a>
      <a href="textiles.html">Textiles</a>
    </div>
  </div> 
  <a href="services.html">About Us</a>
  <a href="contactus.php">Contact Us</a>
</div>
<div class="poopcontainer">
<div id="Pageform">
        <form action="" method="POST">

            <label for="first_name">First Name<br></label>
            <input type="text" placeholder="First Name" name="first_name"><br><br>

            <label for="last_name">Last Name<br></label>
            <input type="text" placeholder="Last Name"
             name="last_name"><br><br>
             
            <label for="state">State<br></label>
            <select name="state"><br><br>
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="DC">District Of Columbia</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>
            </select>
            <label for="email"><br><br>E-Mail<br>
            </label>
            <input type="text" id="email"
            name="email" 
            placeholder="E-mail"
            >

            <label for="message"><br><br>Have any questions?<br></label>
            <textarea name="message" placeholder="Question?"></textarea>
            <br><br>
            <input type="submit" name="submit" value="Submit">

        </form>
    </div>
</div>
<script>
  window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("navbar");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>






</body>
</html> 