<?php
require 'vendor/autoload.php';
define('DBNAME', 'trips');
$database = new MongoDB\Client('mongodb+srv://osminojka:RKICsi2Ca63OGRvw@cluster0.0gnd0.mongodb.net/trips?retryWrites=true&w=majority');
session_start();


try {
    function insert_trips($database, $trip){
        $collection = $database->selectCollection(DBNAME, 'trips');
        $collection->insertOne($trip);
    }

    function get_trips($database){
        $collection = $database->selectCollection(DBNAME, 'trips');
        return $collection->find();
    }

    function delete_trip_by_id($database, $id){
        $collection = $database->selectCollection(DBNAME, 'trips');
        $collection->remove(array('_id' => new MongoId($id)), array("justOne" => true));
    }

    function update_trip_by_id($database, $id){
        $collection = $database->selectCollection(DBNAME, 'trips');
        $newdata = array("name" => $id['name'], "disc" => $id['disc'], "pict" => $id['pict'], "date" => $id['date'], "place" => $id['place'],
            "time" => $id['time'], "full_disc" => $id['full_disc']);
        $collection->update(array("_id" => new MongoId($id['id'])), $newdata);
    }

    function get_trip_by_id($database, $id){
        $collection = $database->selectCollection(DBNAME, 'trips');
        return iterator_to_array($collection->find(array('_id' => new MongoId($id))))[$id];
    }




    function get_users($database){
        $collection = $database->selectCollection(DBNAME, 'user');
        return $collection->find();
    }
    function insert_user($database, $user){
        $collection = $database->selectCollection(DBNAME, 'user');
        $collection->insertOne($user);
    }

    function insert_famous_place($database, $famous_place){
        $collection = $database->selectCollection(DBNAME, 'famous_place');
        $collection->insertOne($famous_place);
    }

    function get_famous_place($database){
        $collection = $database->selectCollection(DBNAME, 'famous_place');
        return $collection->find();
    }

    function get_famous_place_by_id($database, $id){
        $collection = $database->selectCollection(DBNAME, 'famous_place');
        return iterator_to_array($collection->find(array('_id' => new MongoId($id))))[$id];
    }

    function update_famous_place_by_id($database, $id){
        $collection = $database->selectCollection(DBNAME, 'famous_place');
        $newdata = array("name" => $id['name'], "desc" => $id['desc'], "pict" => $id['pict']);
        $collection->update(array("_id" => new MongoId($id['id'])), $newdata);
    }

    function delete_famous_place_by_id($database, $id){
        $collection = $database->selectCollection(DBNAME, 'famous_place');
        $collection->remove(array('_id' => new MongoId($id)), array("justOne" => true));
    }

    function insert_comment($database, $comment){
        $collection = $database->selectCollection(DBNAME, 'comment');
        $collection->insertOne($comment);
    }

    function delete_comment_by_id($database, $id){
        $collection = $database->selectCollection(DBNAME, 'comment');
        $collection->remove(array('_id' => new MongoId($id)), array("justOne" => true));
    }

    function get_comment($database){
        $collection = $database->selectCollection(DBNAME, 'comment');
        return $collection->find();
    }

    function get_comment_by_id($database, $id){
        $collection = $database->selectCollection('comment');
        return iterator_to_array($collection->find(array('_id' => new MongoId($id))))[$id];
    }

    function update_comment_by_id($database, $id){
        $collection = $database->selectCollection(DBNAME, 'comment');
        $newdata = array("name" => $id['name'], "desc" => $id['desc'], "pict" => $id['pict']);
        $collection->update(array("_id" => new MongoId($id['id'])), $newdata);
    }

    function insert_team_member($database, $team_member){
        $collection = $database->selectCollection(DBNAME, 'team_member');
        $collection->insertOne($team_member);
    }

    function get_team_member($database){
        $collection = $database->selectCollection(DBNAME, 'team_member');
        return $collection->find();
    }

    function get_team_member_by_id($database, $id){
        $collection = $database->selectCollection(DBNAME, 'team_member');
        return iterator_to_array($collection->find(array('_id' => new MongoId($id))))[$id];
    }

    function update_team_member_by_id($database, $id){
        $collection = $database->selectCollection(DBNAME, 'team_member');
        $newdata = array("name" => $id['name'], "disc" => $id['disc'], "pict" => $id['pict']);
        $collection->update(array("_id" => new MongoId($id['id'])), $newdata);
    }

    function delete_team_member_by_id($database, $id){
        $collection = $database->selectCollection(DBNAME, 'team_member');
        $collection->remove(array('_id' => new MongoId($id)), array("justOne" => true));
    }





    if(isset($_POST['signup_email'])){
        insert_user($database, $_POST);
        $_SESSION['username'] = $_POST['signup_email'];
        $_SESSION['psw'] = $_POST['signup_psw'];
        header('Location: /');
    }



    if(isset($_POST['deleteCommentBtn'])){
        print_r($_POST);
        delete_comment_by_id($database, $_POST['deleteCommentBtn']);
        header('Location: /admin.php');
    }

    if(isset($_POST['deleteTeamMemberBtn'])){
        print_r($_POST);
        delete_team_member_by_id($database, $_POST['deleteTeamMemberBtn']);
        header('Location: /admin.php');
    }

    if(isset($_POST['deleteFamousPlaceModalBtn'])){
        print_r($_POST);
        delete_famous_place_by_id($database, $_POST['deleteFamousPlaceModalBtn']);
        header('Location: /admin.php');
    }

    if(isset($_POST['deleteTripModalBtn'])){
        print_r($_POST);
        delete_trip_by_id($database, $_POST['deleteTripModalBtn']);
        header('Location: /admin.php');
    }




    if(isset($_POST['updateTeamMemberFormName'])){


        $item = [];
        $item['name'] = $_POST['updateTeamMemberFormName'];
        $item['id'] = $_POST['updateTeamMemberFormId'];
        $item['disc'] = $_POST['updateTeamMemberFormDisc'];
        $item['pict'] = $_POST['updateTeamMemberFormPict'];
        update_team_member_by_id($database, $item);
        header('Location: /admin.php');
    }

    if(isset($_POST['updateCommentModalName'])){


        $item = [];
        $item['name'] = $_POST['updateCommentModalName'];
        $item['id'] = $_POST['updateCommentModalId'];
        $item['desc'] = $_POST['updateCommentModalDisc'];
        $item['pict'] = $_POST['updateCommentModalPict'];
        update_comment_by_id($database, $item);
        header('Location: /admin.php');
    }

    if(isset($_POST['updateFamousPlaceModalName'])){


        $item = [];
        $item['name'] = $_POST['updateFamousPlaceModalName'];
        $item['id'] = $_POST['updateFamousPlaceModalId'];
        $item['desc'] = $_POST['updateFamousPlaceModalDisc'];
        $item['pict'] = $_POST['updateFamousPlaceModalPict'];
        update_famous_place_by_id($database, $item);
        header('Location: /admin.php');
    }

    if(isset($_POST['updateTripModalName'])){


        $item = [];
        $item['name'] = $_POST['updateTripModalName'];
        $item['disc'] = $_POST['updateTripModalDisc'];
        $item['pict'] = $_POST['updateTripModalPict'];
        $item['date'] = $_POST['updateTripModalDate'];
        $item['place'] = $_POST['updateTripModalPlace'];
        $item['time'] = $_POST['updateTripModalTime'];
        $item['full_disc'] = $_POST['updateTripModalFullDisc'];
        $item['id'] = $_POST['updateTripModalModalId'];
        update_trip_by_id($database, $item);
        header('Location: /admin.php');
    }







    if(isset($_POST['createTeamMemberFormName'])){
        print_r($_POST);

        $item = [];
        $item['name'] = $_POST['createTeamMemberFormName'];
        $item['disc'] = $_POST['createTeamMemberFormDisc'];
        $item['pict'] = $_POST['createTeamMemberFormPict'];
        insert_team_member($database, $item);
        header('Location: /admin.php');
    }

    if(isset($_POST['createCommentModalName'])){
        print_r($_POST);

        $item = [];
        $item['name'] = $_POST['createCommentModalName'];
        $item['desc'] = $_POST['createCommentModalDisc'];
        $item['pict'] = $_POST['createCommentModalPict'];
        insert_comment($database, $item);
        header('Location: /admin.php');
    }

    if(isset($_POST['createFamousPlaceModalName'])){
        print_r($_POST);

        $item = [];
        $item['name'] = $_POST['createFamousPlaceModalName'];
        $item['desc'] = $_POST['createFamousPlaceModalDisc'];
        $item['pict'] = $_POST['createFamousPlaceModalPict'];
        insert_famous_place($database, $item);
        header('Location: /admin.php');
    }

    if(isset($_POST['createTripModalName'])){
        $item = [];
        $item['name'] = $_POST['createTripModalName'];
        $item['disc'] = $_POST['createTripModalDisc'];
        $item['pict'] = $_POST['createTripModalPict'];
        $item['date'] = $_POST['createTripModalDate'];
        $item['place'] = $_POST['createTripModalPlace'];
        $item['time'] = $_POST['createTripModalTime'];
        $item['full_disc'] = $_POST['createTripModalFullDisc'];
        insert_trips($database, $item);
        header('Location: /admin.php');
    }





    if(isset($_POST['email'])){
        $resp = get_users($database);
        foreach ($resp as $user){
            if($user['signup_email'] == $_POST['email'] && $user['signup_psw'] == $_POST['psw'])
            {
                header('Location: /');
                $_SESSION['username'] = $user['signup_email'];
                $_SESSION['psw'] = $user['signup_psw'];
                exit();
            }
        }
        header('Location: /login.php');
    }




    if(isset($_POST['nameCRUD']) && $_POST['nameCRUD'] == 'updateTeamMember')
    {
        print_r(json_encode(get_team_member_by_id($database,$_POST['id'])));
    }

    if(isset($_POST['nameCRUD']) && $_POST['nameCRUD'] == 'updateComment')
    {
        print_r(json_encode(get_comment_by_id($database,$_POST['id'])));
    }

    if(isset($_POST['nameCRUD']) && $_POST['nameCRUD'] == 'updateFamousPlaceUpdater')
    {
        print_r(json_encode(get_famous_place_by_id($database,$_POST['id'])));
    }

    if(isset($_POST['nameCRUD']) && $_POST['nameCRUD'] == 'updateTripUpdater')
    {
        print_r(json_encode(get_trip_by_id($database,$_POST['id'])));
    }

//    for($i=0;$i<=3;$i++){
//        $item = array("name" => "Person".$i, "pict" => "team-".$i.'.jpg', "disc"=>"Senior Barrister at law");
//        insert_team_member($database,$item);
//    }
//
//    for($i=4;$i<=4;$i++){
//        $item = array("name" => "place".$i, "pict" => "p".$i.'.jpg', "desc"=>"Lorem ipsum dolor sit amet");
//        insert_famous_place($database,$item);
//    }
//    for($i=4;$i<=4;$i++){
//        $item = array("name" => "person ".$i, "pict" => "t".$i.'.jpg', "desc"=>"As conscious traveling Paup ers we must always be oncerned about our dear <br>
//								Mother Earth. If you think about it, you travel across her faceand She is the host <br>
//								to your journey.");
//        insert_comment($database,$item);
//    }

    /*$finder = get_images($database);
    foreach ($finder as $item){
        print_r($item);
    }*/
}
catch(MongoConnectionException $e) {

    die("Failed to connect to database ".$e->getMessage());

}

?>