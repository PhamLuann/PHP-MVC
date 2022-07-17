<?php
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }
    else{
        $action = '';
    }
    $success = array();
    switch($action){
        case 'add':{  
            if(isset($_POST['add_member'])){
                $sname = $_POST['name'];
                $sbirthday = $_POST['birthday'];
                $scountry = $_POST['country'];
                if($db->insertData($sname, $sbirthday, $scountry)){
                    // echo '<script>alert("Them thanh cong")</script>';
                    $success[] = 'success';
                    header('location: index.php?action=list');
                }
            }  
            require_once('Views/member/add_member.php');
            break;
        }

        case 'edit':{  
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $tblTable = 'members';
                $dataID = $db->getByID($tblTable, $id);

                if(isset($_POST['update_member'])){
                    // du lieu tu view
                    $sname = $_POST['name'];
                    $sbirthday = $_POST['birthday'];
                    $scountry = $_POST['country']; 

                    // truyen sang model
                    if($db->updateMember($id, $sname, $sbirthday, $scountry)){
                        $success[] = 'success';
                        header('location: index.php?action=list');
                    }
                }
            }  
            require_once('Views/member/edit_member.php');
            break;
        }

        case 'delete':{     
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $tblTable = 'members';
                if($db->delete($tblTable, $id)){
                    header('location: index.php?action=list');
                }
            }
            else{
                header('location: index.php?action=list');
            }
            // require_once('Views/member/delete_member.php');
            break;
        }

        case 'list':{     
            $tblMember = "members";
            $datas = $db->getAllData($tblMember);
            require_once('Views/member/list.php');
            break;
        }

        default:{
            $tblMember = "members";
            $datas = $db->getAllData($tblMember);
            require_once('Views/member/list.php');
            break;
        }
    }
?>