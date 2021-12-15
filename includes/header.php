<?php


switch ($page) {
    case 'index':
        //code to be executed if $page=index;
        echo "<li><a class=\"active\" href=\"index.php\">HOME</a></li>
              <li><a href=\"cars.php\">CARS</a></li>
              <li><a href=\"services.php\">SERVICES</a></li>
              <li><a href=\"contact.php\">CONTACT</a></li>
              <li><a href=\"login.php\">LOG IN</a><i class=\"far fa-user user\"></i></li>";

        break;
    case 'contact':
    	//code to be executed if $page=contact;
      echo "<li><a href=\"index.php\">HOME</a></li>
            <li><a href=\"cars.php\">CARS</a></li>
            <li><a href=\"services.php\">SERVICES</a></li>
            <li><a class=\"active\" href=\"contact.php\">CONTACT</a></li>
            <li><a href=\"login.php\">LOG IN</a><i class=\"far fa-user\"></i></li>";

       	break;
    case 'services':
    	//code to be executed if $page=Sservices;
    	echo "<li><a href=\"index.php\">HOME</a></li>
            <li><a href=\"cars.php\">CARS</a></li>
            <li><a class=\"active\" href=\"services.php\">SERVICES</a></li>
            <li><a href=\"contact.php\">CONTACT</a></li>
            <li><a href=\"login.php\">LOG IN</a><i class=\"far fa-user\"></i></li>";
            break;
    case 'cars':
      //code to be executed if $page=cars;
      echo "<li><a href=\"index.php\">HOME</a></li>
            <li><a class=\"active\" href=\"cars.php\">CARS</a></li>
            <li><a href=\"services.php\">SERVICES</a></li>
            <li><a href=\"contact.php\">CONTACT</a></li>
            <li><a href=\"login.php\">LOG IN</a><i class=\"far fa-user\"></i></li>";

      break;
      case 'login':
            //code to be executed if $page=cars;
            echo "<li><a href=\"index.php\">HOME</a></li>
                  <li><a href=\"cars.php\">CARS</a></li>
                  <li><a href=\"services.php\">SERVICES</a></li>
                  <li><a href=\"contact.php\">CONTACT</a></li>
                  <li><a id=\"user\"  href=\"login.php\">LOG IN</a><i class=\"far fa-user\" id=\"user\"></i></li>";
      
            break;
      case 'signup':
            //code to be executed if $page=cars;
            echo "<li><a href=\"index.php\">HOME</a></li>
                  <li><a href=\"cars.php\">CARS</a></li>
                  <li><a href=\"services.php\">SERVICES</a></li>
                  <li><a href=\"contact.php\">CONTACT</a></li>
                  <li><a href=\"login.php\">LOG IN</a><i class=\"far fa-user\"></i></li>";   
                  break;      
    default:
    	
}
?>