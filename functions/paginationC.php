<!-- Pagnination pour la page Coiffure -->
<?php
  // Set session
//   session_start();
  if(isset($_POST['records-limit'])){
      $_SESSION['records-limit'] = $_POST['records-limit'];
  }
  
  $limit = isset($_SESSION['records-limit']) ? $_SESSION['records-limit'] : 6;
  $page = (isset($_GET['page']) && is_numeric($_GET['page']) ) ? $_GET['page'] : 1;
  $paginationStart = ($page - 1) * $limit;
  $res = $dbh->query("SELECT * FROM coiffures LIMIT $paginationStart, $limit")->fetchAll();

  // Get total records
  $sql = $dbh->query("SELECT count(id) AS id FROM coiffures")->fetchAll();
  $allRecrods = $sql[0]['id'];
  
  // Calculate total pages
  $totoalPages = ceil($allRecrods / $limit);

  // Prev + Next
  $prev = $page - 1;
  $next = $page + 1;
?>