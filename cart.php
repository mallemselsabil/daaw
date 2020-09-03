<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-
	scale=1.0">
	<title> All Products Book - Read a Book</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="http://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
		<div class="navbar">
	     <div class="logo">
		<img src="images/logo2.png" width="125px">
	</div>
	<nav>
		<ul id="MenuItems">
			<li><a href="">Home</a></li>
			<li><a href="">Books</a></li>
			<li><a href="">About</a></li>
			<li><a href="">Contact</a></li>
			<li><a href="">Account</a></li>
		</ul>
	</nav>
	<img src="images/icon1.jpg" width="30px" height="30px">
	<img src="images/rd.jpg" class="menu-icon" width="300px" height="30px"
     onclick="menutoggle()">
	</div>
</div>

<!---------------carte items details----->

<div class="small-container cart-page">
    <table>
        <tr>
            <th>Books</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="images/book3.jpg">
                    <div>
                        <p>Marc levy books</p>
                        <small>Price:900.00DA</small>
                        <br>
                        <a href="">Remove</a>
                    </div>
                </div>
            </td>
            <td><input type="number" value="1"></td>
            <td>900 DA</td>
        </tr>
         </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="images/6.jpg">
                    <div>
                        <p>JoJo Moyes Books</p>
                        <small>Price:700.00DA</small>
                        <br>
                        <a href="">Remove</a>
                    </div>
                </div>
            </td>
            <td><input type="number" value="1"></td>
            <td>900 DA</td>
        </tr
         </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="images/book8.jpeg">
                    <div>
                        <p>Musso Books</p>
                        <small>Price:800.00DA</small>
                        <br>
                        <a href="">Remove</a>
                    </div>
                </div>
            </td>
            <td><input type="number" value="1"></td>
            <td>900 DA</td>
        </tr>        
    </table>
    <div class="total-price">
        <table>
            <tr>
                <td>Subtotal</td>
                <td>200.00DA</td>
            </tr>
             <tr>
                <td>bk</td>
                <td>35.00DA</td>
            </tr>
             <tr>
                <td>total</td>
                <td>235.00DA</td>
            </tr>
        </table>
    </div>
</div>


  
    	
    		

<!------js for toggle menu------->
<script>
	var MenuItems = document.getElementById("MenuItems");
	MenuItems.style.maxHeight ="0px";
	function menutoggle(){
		if(MenuItems.style.maxHeight ="0px")
		{
			MenuItems.style.maxHeight ="200px";
		}
		else
		{
			MenuItems.style.maxHeight ="0px";
		}
	}
</script>




</body>
</html>