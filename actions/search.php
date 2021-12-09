<?php

if(isset($_GET['search'])){
    //store the search querry in a variable
  $searchQuerry = $_GET['querry'];
  if(!empty($searchQuerry)){
      //redirect to search results
      header("Location: ../views/search.php?querry=$searchQuerry");
  }
}
?>