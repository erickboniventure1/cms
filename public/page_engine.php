<?php
//---------------------------------------------------
//|                                                 |
//|              SR - PAGE ENGINE                   |
//|                                                 |
//---------------------------------------------------

if(isset($_GET['page'])){
    //------- ORDER ENGINE -------
    if($_GET['page'] == "create_client"){
        require_once 'page_engine/create_client.php';
    }
    if($_GET['page'] == "client_list"){
        require_once 'page_engine/client_list.php';
    }
    //------- CIRCULATION --------
   
    if($_GET['page'] == "store"){
        require_once 'page_engine/store.php';
    }
    if($_GET['page'] == "test"){
        require_once 'test.php';
    }
    
    if($_GET['page'] == "add_client"){
        require_once 'add_client.php';
    }
    //------- REPORTS ENGINE -------
    elseif ($_GET['page'] == "reports") {
        require_once 'page_engine/reports.php';
    }
    elseif ($_GET['page'] == "logout") {
        require_once 'page_engine/logout.php';
    }
    elseif ($_GET['page'] == "setting") {
        require_once 'page_engine/setting.php';
    }
   
  
    //------- SETTINGS ENGINE -------
    elseif ($_GET['page'] == "") {
    
    }
    //------- ACCOUNT ENGINE -------
    elseif ($_GET['page'] == "") {
    
    }
} else {
// 404.php required    
}