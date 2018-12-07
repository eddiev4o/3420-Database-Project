<?php
require_once('connect.php');
require_once('library.php');
?>
<!doctype html>
<html>
<head>
    <title> Green Landscape Database </title>
	<?php loadboot(); ?>
</head>
</head>
<body>
<nav class='navbar navbar-default navbar-fixed-top'>
	<div class='container'>
	<div class ='navbar-header'>
    	<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#myNavbar'>
    		<span class='icon-bar'></span>
    		<span class='icon-bar'></span>
    		<span class='icon-bar'></span>
            <span class='icon-bar'></span>
    	</button>
        <a class='navbar-brand' href='./home.php'>Green Landscape</a>
    </div>
        <div class='collapse navbar-collapse' id='myNavbar'>
    		<ul class='nav navbar-nav navbar-right'>
            <li><a href='home.php'>HOME</a></li>
            <li><a href='manager.php'><span class='glyphicon glyphicon-user'></span>MANAGER</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container clientMain">
<form class="form-inline" action="clients.php">
    <div class="form-group">
        <label for="fname">Client Name:</label>
        <input type="fname" class="form-control" id="fname">
        <button type="button" class="btn">Search</button>
        <select id="fname" name="fname">
            <option value="">First Name</option>
        </select>
        <select id="lname" name="lname">
            <option value="">Last Name</option>
        </select>
        <select id="address" name="address">
            <option value="">Address</option>
        </select>
        <select id="city" name="city">
            <option value="city">City</option>
        </select>
        <select id="zip" name="zip">
            <option value="zip">Zip Code</option>
        </select>
    </div>
  </form>
</div>
<div class="container row clientPage">
<div class='client col-sm-8'>
<?php
        $sql = pg_query($db, "SELECT * FROM client");
        if(!$sql) {
          echo "An error occured.\n";
          exit;
        }

        while ($row = pg_fetch_array($sql, NULL, PGSQL_ASSOC)) {
          $out="<div class='cList clearfix'>";
          $out.="<ul class='ulLeft'>";
          $out.= "<li><h1>".$row['firstname']." ";
          $out.= $row['lastname']."</h1></li>";
          $out.= "<li>Address: ".$row['h_number']." ";
          $out.= $row['street_name']."</li> ";
          $out.= "<li>City: ".$row['city']." </li>";
          $out.= "<li>Zip: ".$row['zip_code']."</li>";
          $out.= "<li>Phone Number: (".$row['phone'][0].$row['phone'][1].$row['phone'][2].")";
          $out.= " ".$row['phone'][3].$row['phone'][4].$row['phone'][5]."-";
          $out.= "".$row['phone'][6].$row['phone'][7].$row['phone'][8].$row['phone'][9]."</li>";
          $out.= "</ul><div class='ulRight'>";
          $out.= "<form class='form-vertical' action='clients.php' method='POST'>";
          $out.= "<div class='form-group btn-group-vertical' id='clientBtns'>";
          $out.= "<button type='submit' id='cButton' name='contracts' class='btn btn-primary'>Contract Information</button>";
          $out.= "<button type='submit' id='hButton' name='house' class='btn btn-primary'>House List</button>";
          $out.= "<button type='submit' id='dButton' name='delete' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span> DELETE</button>";
          $out.= "</div></form>";
          $out.= "</div></div>";
          echo $out;
        }
?>
</div>
<div class='houses col-sm-4'>
  <table class='table'>
    <thead>
      <tr>
        <th>Address</th>
        <th>City</th>
        <th>Client</th>
      <tr>
    </thead>
    <tbody>
      <tr>
        <td>1234</td>
        <td>Bakersfield</td>
        <td>John1 Doe</td>
      </tr>
      <tr>
        <td>1234</td>
        <td>Bakersfield</td>
        <td>John2 Doe</td>
      </tr>
      <tr>
        <td>1234</td>
        <td>Bakersfield</td>
        <td>John3 Doe</td>
      </tr>
      <tr>
        <td>1234</td>
        <td>Bakersfield</td>
        <td>John4 Doe</td>
      </tr>
      <tr>
        <td>1234</td>
        <td>Bakersfield</td>
        <td>John5 Doe</td>
      </tr>
      <tr>
        <td>1234</td>
        <td>Bakersfield</td>
        <td>John6 Doe</td>
      </tr>
      <tr>
        <td>1234</td>
        <td>Bakersfield</td>
        <td>John7 Doe</td>
      </tr>
    <tbody>
  </table>
</div>

</div>
</body>
</html>
