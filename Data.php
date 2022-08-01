<?php


function GetUsers()
{
    return json_decode(file_get_contents(__DIR__ . '/Data.json'), true);

}
function getUserById($id){
    $users=GetUsers();
    foreach ($users as $user) {
        if ($user['Vuelo'] == $id) {
            return $user;
        }
    }
    return null;


}
function createdata($data){
    $users = getUsers();

    $data['Vuelo'] = rand(1000000, 2000000);

    $users[] = $data;
    putJson($users);


    return $data;

}
function updatedata($data, $vuelo){
   $updatedata = [];
    $users = getUsers();
    foreach ($users as $i => $user) {
        if ($user['Vuelo'] == $vuelo) {
            $users[$i] =$updatedata= array_merge($user, $data);
        }
    }
    file_put_contents(__DIR__.'/Data.json',json_encode($users));

    return $updatedata;

   
}


function deletedata($vuelo){
    $users = getUsers();

    foreach ($users as $i => $user) {
        if ($user['Vuelo'] == $vuelo) {
            array_splice($users, $i, 1);
        }
    }

    putJson($users);

}
function putJson($users){
    file_put_contents(__DIR__.'/Data.json',json_encode($users));

}

?>