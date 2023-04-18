<?php
// include "model/config.php";
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}else{
    $action = '';
}

$success = array();

switch ($action) {
    case 'add':{
        if (isset($_POST['add_student'])) {
            $full_name = $_POST['full_name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];

            if($db->insertData($full_name, $email, $phone)){
                $success[] = 'add_success';
            };
        }
    }

        require_once('view/student/add.php');
        break;

    case 'edit':{
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $tblTable = "student";
            $dataId = $db->getDataId($tblTable, $id);

            if (isset($_POST['update_student'])) {
                $full_name = $_POST['full_name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];

                if ($db->updateData($id, $full_name, $email, $phone)) {
                    header('location: index.php?controller=student&action=list');
                }
            }
        }
        require_once('view/student/edit.php');
        break;
    }

    case 'list':{
        $tblTable = "student";
        $data = $db->getAllData($tblTable);
        require_once('view/student/list.php');
        break;
    }

    case 'search':{
        if (isset($_GET['key'])) {
            $key = $_GET['key'];
            $tblTable = "student";

            $search_data = $db->searchData($tblTable, $key);
        }

        require_once('view/student/search.php');
        break;
    }

    case 'delete':{
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $tblTable = "student";

            if($db->deleteData($id, $tblTable)){
                header('location: index.php?controller=student&action=list');
            };
        }else{
            header('location: index.php?controller=student&action=list');
        }
        break;
    }
    default:{
        require_once('view/student/list.php');
        break;
    }
}
?>