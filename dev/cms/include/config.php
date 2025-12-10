<?php

  setlocale(LC_TIME, "de_DE.utf8");
  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

  define('DB_HOST','localhost');
  define('DB_USER','pfaucms');
  define('DB_PASS','130213071309');
  define('DB_NAME','pfaucms_main');
  
  define('TBL_USER',  "clipper_users");
  define('TBL_SETS',  "clipper_sets");
  define('TBL_ITEMS', "clipper_items");
  define('TBL_CLPRTAGS',  "clipper_tags");
  define('TBL_TAGS',  "data_tags");
  
  define('TBL_PLATTEN',  "data_platten");
  define('TBL_GENRE',  "data_genre");
  define('TBL_STYLE',  "data_genre");
  define('TBL_ARTIST',  "data_genre");
  
  define('ViEW_iTEMS', "v_clpr_own_items");
  define('ViEW_SETS',  "v_clpr_own_sets");
  define('ViEW_STATS', "view_clpr_stats");

  $arr_tage = array("Sonntag","Montag","Dienstag","Mittwoch","Donnerstag","Freitag","Samstag");
  $kat      = array('google','dev','rss','audio','xxx');
  $subkat   = array('link','bootstrap','github','grafiken','scripte','ressources','snippets','tutorials','pix','vid','cam','mag');

?>