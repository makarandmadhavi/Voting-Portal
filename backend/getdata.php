<?php



function getcandidates(){
    include 'conn.php';
    $data = array();
    $sql = "SELECT * FROM posts WHERE housepost=0";
    $result = $conn->query($sql);
    if($result){     
        while($row = $result -> fetch_assoc()){
            $post=$row['postname'];
            $data[$post]=array();
            $sql = "SELECT id,name FROM candidates WHERE post='$post'";
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

function gethousecandidates($house){
    include 'conn.php';
    $data = array();
    $sql = "SELECT * FROM posts where housepost=1";
    $result = $conn->query($sql);
    if($result){     
        while($row = $result -> fetch_assoc()){
            $post=$row['postname'];
            $data[$post]=array();
            $sql = "SELECT id,name FROM candidates where house='$house' AND post='$post'";
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

?>