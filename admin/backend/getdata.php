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
    $sql = "SELECT * FROM votekeys ORDER BY isused,id";
    $result = $conn->query($sql);
    if($result){     
        while($row = $result -> fetch_assoc()){
        array_push($data,$row);
        }
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