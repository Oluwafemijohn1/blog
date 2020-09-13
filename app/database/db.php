<?php
require('connect.php');



// this function is to be deleted
function dd($value){
    echo "<pre>", print_r($value, true), "</pre>";
    die();
}
// this is to avoid repeatition of code
function executeQuery($sql, $data)
{
    global $conn;
    $stmt = $conn->prepare($sql);
    $values = array_values($data);
    $types = str_repeat('s', count($values));
    $stmt->bind_param($types, ...$values);
    $stmt->execute();
    return $stmt;
}

function selectAll($table, $conditions = []){
    global $conn;
    $sql = "SELECT * FROM $table";
    if (empty($conditions)){
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }else{
        // return records that match conditions.. 
        // $sql = "SELECT * FROM $table WHERE names = 'femi' AND isAdmin = 1";
        $i =0;
        foreach($conditions as $key => $value){
            if ($i === 0){
                $sql = $sql . " WHERE $key=?";
            }else{
                $sql = $sql . " AND $key=?";
            }
            $i++;
        }
        $stmt = executeQuery($sql, $conditions);
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }
  
}


function selectOne($table, $conditions){
    global $conn;
    $sql = "SELECT * FROM $table";
   
        // return records that match conditions.. 
        // $sql = "SELECT * FROM $table WHERE names = 'femi' AND isAdmin = 1";
        $i =0;
        foreach($conditions as $key => $value){
            if ($i === 0){
                $sql = $sql . " WHERE $key=?";
            }else{
                $sql = $sql . " AND $key=?";
            }
            $i++;
        }
        // $sql = "SELECT * FROM $table WHERE names = 'femi' AND isAdmin = 1 LIMIT 1";
        $sql = $sql . ' LIMIT 1';
        $stmt = executeQuery($sql, $conditions);
        $records = $stmt->get_result()->fetch_assoc();
        return $records;
    
  
}

function create($table, $data)
{
    global $conn;
    // there two format for creating in php (u= users in thi project)
    # $sql = "INSERT INTO users (username, admin, email, password) VALUES (?, ?, ?, ?)"
    # $sql = "INSERT INTO users SET username=?, admin=?, email=?, password=?"
    $sql = "INSERT INTO u SET ";
    $i =0;
    foreach($data as $key => $value){
        if ($i === 0){
            $sql = $sql . " $key=?";
        }else{
            $sql = $sql . ", $key=?";
        }
        $i++;
    }
    $stmt = executeQuery($sql, $data);
    $id = $stmt->insert_id;
    return $id; 
}

$data = [
    'isAdmin' => 1,
    'email' => 'ssegrg@gmail.com',
    'password'=> 4252242,
    'names' => 'femsic222'
];

$id = create('u', $data);

dd($id);