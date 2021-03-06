<?php

function getallposts(){
    include 'conn.php';
    $data = array();
    $sql = "SELECT * FROM posts";
    $result = $conn->query($sql);
    if($result){     
        while($row = $result -> fetch_assoc()){
        array_push($data,$row);
        }
    }
return $data;
}

function getkeys(){
    include 'conn.php';
    $data = array();
    $sql = "SELECT register.enroll AS enroll, register.email as email, register.keyid AS keyid, votekeys.isused as isused FROM register LEFT JOIN votekeys ON register.keyid = votekeys.keyid ORDER by enroll";
    $result = $conn->query($sql);
    if($result){     
        while($row = $result -> fetch_assoc()){
        array_push($data,$row);
        }
    }
return $data;
}

function getregistered(){
    include 'conn.php';
    $data = array();
    $sql = "SELECT COUNT(*) as count FROM votekeys";
    $result = $conn->query($sql);
    if($result){     
        $row = $result -> fetch_assoc();
        $data = $row['count'];
        
    }
return $data;
}

function getvoted(){
    include 'conn.php';
    $data = array();
    $sql = "SELECT COUNT(*) as count FROM votekeys WHERE isused!='0'";
    $result = $conn->query($sql);
    if($result){     
        $row = $result -> fetch_assoc();
        $data = $row['count'];
        
    }
return $data;
}

function getcandidates(){
    include 'conn.php';
    $data = array();
    $sql = "SELECT * FROM posts WHERE housepost=0";
    $result = $conn->query($sql);
    if($result){     
        while($row = $result -> fetch_assoc()){
            $post=$row['postname'];
            $data[$post]=array();
            $sql = "SELECT id,name,votes FROM candidates WHERE post='$post' ORDER BY votes DESC";
            $result2 = $conn->query($sql);
            if($result2){     
                while($row2 = $result2 -> fetch_assoc()){
                array_push($data[$post],$row2);
         
                }
            }
        }
    }
    

return $data;
}

function gethousecandidates(){
    include 'conn.php';
    $data = array();
    $sql = "SELECT * FROM houses";
    $result = $conn->query($sql);
    if($result){     
        while($row = $result -> fetch_assoc()){
            $house=$row['house'];
            $data[$house]=array();
            $sql = "SELECT postname FROM posts WHERE housepost=1";
            $result2 = $conn->query($sql);
            if($result2){     
                while($row2 = $result2 -> fetch_assoc()){
                $post=$row2['postname'];
                $data[$house][$post]=array();
                $sql = "SELECT id,name,votes FROM candidates WHERE post='$post' AND house='$house' ORDER BY votes DESC";    
                $result3 = $conn->query($sql);
                if($result3){
                    while($row3 = $result3 -> fetch_assoc()){
                        array_push($data[$house][$post],$row3);
                    }
                }

                }
            }
        }
    }
    

return $data;
}

?>