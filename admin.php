<?php require_once "index1.php"?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>Taxa Adventure</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">

    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/owl-carousel-thumb.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
</head>

<body>

<button style="float: right; margin: 15px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#teamMemberModalCreate">
    Insert new team member
</button>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th>#</th>
        <th>Picture</th>
        <th>Name</th>
        <th>Description</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tbody>
    <?php $items = get_team_member($database);
    $i = 1;
    foreach ($items as $item):?>
    <tr>
        <th scope="row"><?= $i++?></th>
        <td>"img/team/<?= $item['pict']?>"</td>
        <td><?= $item['name']?></td>
        <td><?= $item['disc']?></td>
        <td><button type="button" data-id="<?= $item['_id']?>" class="crudBtn updater"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></td>
        <td><form method="post" action="index1.php"><button type="submit" name="deleteTeamMemberBtn" value="<?= $item['_id']?>" class="crudBtn"><i class="fa fa-times-circle" aria-hidden="true"></i></button></form></td>
    </tr>
    <?php endforeach;?>

    </tbody>
</table>

<br/>
<br/>
<br/>

<button style="float: right; margin: 15px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#CommentModalCreate">
    Insert new comment
</button>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th>#</th>
        <th>Picture</th>
        <th>Name</th>
        <th>Description</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tbody>
    <?php $items = get_comment($database);
    $i = 1;
    foreach ($items as $item):?>
        <tr>
            <th scope="row"><?= $i++?></th>
            <td>"img/testimonial/<?= $item['pict']?>"</td>
            <td><?= $item['name']?></td>
            <td><?= $item['desc']?></td>
            <td><button type="button" data-id="<?= $item['_id']?>" class="crudBtn commentUpdater"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></td>
            <td><form method="post" action="index1.php"><button type="submit" name="deleteCommentBtn" value="<?= $item['_id']?>" class="crudBtn"><i class="fa fa-times-circle" aria-hidden="true"></i></button></form></td>
        </tr>
    <?php endforeach;?>

    </tbody>
</table>

<br/>
<br/>
<br/>

<button style="float: right; margin: 15px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#famousPlaceModalCreate">
    Insert new famous place
</button>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th>#</th>
        <th>Picture</th>
        <th>Name</th>
        <th>Description</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tbody>
    <?php $items = get_famous_place($database);
    $i = 1;
    foreach ($items as $item):?>
        <tr>
            <th scope="row"><?= $i++?></th>
            <td>"img/places/<?= $item['pict']?>"</td>
            <td><?= $item['name']?></td>
            <td><?= $item['desc']?></td>
            <td><button type="button" data-id="<?= $item['_id']?>" class="crudBtn famousPlaceUpdater"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></td>
            <td><form method="post" action="index1.php"><button type="submit" name="deleteFamousPlaceModalBtn" value="<?= $item['_id']?>" class="crudBtn"><i class="fa fa-times-circle" aria-hidden="true"></i></button></form></td>
        </tr>
    <?php endforeach;?>

    </tbody>
</table>


<br/>
<br/>
<br/>

<button style="float: right; margin: 15px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#createTripModalCreate">
    Insert new trip
</button>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th>#</th>
        <th>Picture</th>
        <th>Name</th>
        <th>Description</th>
        <th>Date</th>
        <th>Place</th>
        <th>Time</th>
        <th>Full description</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tbody>
    <?php $items = get_trips($database);
    $i = 1;
    foreach ($items as $item):?>
        <tr>
            <th scope="row"><?= $i++?></th>
            <td>"img/package/<?= $item['pict']?>"</td>
            <td><?= $item['name']?></td>
            <td><?= $item['disc']?></td>
            <td><?= $item['date']?></td>
            <td><?= $item['place']?></td>
            <td><?= $item['time']?></td>
            <td><?= $item['full_disc']?></td>
            <td><button type="button" data-id="<?= $item['_id']?>" class="crudBtn tripUpdater"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></td>
            <td><form method="post" action="index1.php"><button type="submit" name="deleteTripModalBtn" value="<?= $item['_id']?>" class="crudBtn"><i class="fa fa-times-circle" aria-hidden="true"></i></button></form></td>
        </tr>
    <?php endforeach;?>

    </tbody>
</table>


<!-- Modal -->
<div class="modal fade" id="teamMemberModal" tabindex="-1" role="dialog" aria-labelledby="teamMemberModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="teamMemberModalLabel">Team member</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="index1.php" id = "updateTeamMemberForm">
            <div class="modal-body">


                    <div style="width: 100%;display: flex;justify-content: space-between; margin-bottom: 20px;">
                        <label for="pict">picture</label>
                        <input style="width: 75%" name="updateTeamMemberFormPict" id="updateTeamMemberFormPict" type="text" required>
                    </div>
                    <div style="width: 100%;display: flex;justify-content: space-between; margin-bottom: 20px;">
                        <label for="name">name</label>
                        <input style="width: 75%" name="updateTeamMemberFormName" id="updateTeamMemberFormName" type="text" required>
                    </div>
                    <div style="width: 100%;display: flex;justify-content: space-between; margin-bottom: 20px;">
                        <label for="description">description</label>
                        <input style="width: 75%" name="updateTeamMemberFormDisc" id="updateTeamMemberFormDisc" type="text" required>
                    </div>

                    <input hidden id = "updateTeamMemberFormId" name="updateTeamMemberFormId">


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="teamMemberModalCreate" tabindex="-1" role="dialog" aria-labelledby="teamMemberModalCreate" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="teamMemberModalLabel">Team member</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="index1.php" id = "updateTeamMemberForm">
                <div class="modal-body">

                    <div style="width: 100%;display: flex;justify-content: space-between; margin-bottom: 20px;">
                        <label for="pict">picture</label>
                        <input style="width: 75%" name="createTeamMemberFormPict" id="createTeamMemberFormPict" type="text" required>
                    </div>
                    <div style="width: 100%;display: flex;justify-content: space-between; margin-bottom: 20px;">
                        <label for="name">name</label>
                        <input style="width: 75%" name="createTeamMemberFormName" id="createTeamMemberFormName" type="text" required>
                    </div>
                    <div style="width: 100%;display: flex;justify-content: space-between; margin-bottom: 20px;">
                        <label for="description">description</label>
                        <input style="width: 75%" name="createTeamMemberFormDisc" id="createTeamMemberFormDisc" type="text" required>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="CommentModal" tabindex="-1" role="dialog" aria-labelledby="CommentModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="CommentModalLabel">Comment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="index1.php" id = "updateCommentModalForm">
                <div class="modal-body">


                    <div style="width: 100%;display: flex;justify-content: space-between; margin-bottom: 20px;">
                        <label for="pict">picture</label>
                        <input style="width: 75%" name="updateCommentModalPict" id="updateCommentModalPict" type="text" required>
                    </div>
                    <div style="width: 100%;display: flex;justify-content: space-between; margin-bottom: 20px;">
                        <label for="name">name</label>
                        <input style="width: 75%" name="updateCommentModalName" id="updateCommentModalName" type="text" required>
                    </div>
                    <div style="width: 100%;display: flex;justify-content: space-between; margin-bottom: 20px;">
                        <label for="description">description</label>
                        <input style="width: 75%" name="updateCommentModalDisc" id="updateCommentModalDisc" type="text" required>
                    </div>

                    <input hidden id = "updateCommentModalId" name="updateCommentModalId">


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="CommentModalCreate" tabindex="-1" role="dialog" aria-labelledby="CommentModalCreate" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="CommentModalLabel">Comment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="index1.php" id = "CommentModalCreate">
                <div class="modal-body">


                    <div style="width: 100%;display: flex;justify-content: space-between; margin-bottom: 20px;">
                        <label for="pict">picture</label>
                        <input style="width: 75%" name="createCommentModalPict" id="createCommentModalPict" type="text" required>
                    </div>
                    <div style="width: 100%;display: flex;justify-content: space-between; margin-bottom: 20px;">
                        <label for="name">name</label>
                        <input style="width: 75%" name="createCommentModalName" id="createCommentModalName" type="text" required>
                    </div>
                    <div style="width: 100%;display: flex;justify-content: space-between; margin-bottom: 20px;">
                        <label for="description">description</label>
                        <input style="width: 75%" name="createCommentModalDisc" id="createCommentModalDisc" type="text" required>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="famousPlaceModal" tabindex="-1" role="dialog" aria-labelledby="famousPlaceModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="famousPlaceModalLabel">Famous place</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="index1.php" id = "updateCommentModalForm">
                <div class="modal-body">


                    <div style="width: 100%;display: flex;justify-content: space-between; margin-bottom: 20px;">
                        <label for="updateFamousPlaceModalPict">picture</label>
                        <input style="width: 75%" name="updateFamousPlaceModalPict" id="updateFamousPlaceModalPict" type="text" required>
                    </div>
                    <div style="width: 100%;display: flex;justify-content: space-between; margin-bottom: 20px;">
                        <label for="updateFamousPlaceModalName">name</label>
                        <input style="width: 75%" name="updateFamousPlaceModalName" id="updateFamousPlaceModalName" type="text" required>
                    </div>
                    <div style="width: 100%;display: flex;justify-content: space-between; margin-bottom: 20px;">
                        <label for="updateFamousPlaceModalDisc">description</label>
                        <input style="width: 75%" name="updateFamousPlaceModalDisc" id="updateFamousPlaceModalDisc" type="text" required>
                    </div>

                    <input hidden id = "updateFamousPlaceModalId" name="updateFamousPlaceModalId">


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="famousPlaceModalCreate" tabindex="-1" role="dialog" aria-labelledby="famousPlaceModalCreateLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="famousPlaceModalCreateLabel">Famous place</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="index1.php" id = "createCommentModalForm">
                <div class="modal-body">


                    <div style="width: 100%;display: flex;justify-content: space-between; margin-bottom: 20px;">
                        <label for="createFamousPlaceModalPict">picture</label>
                        <input style="width: 75%" name="createFamousPlaceModalPict" id="createFamousPlaceModalPict" type="text" required>
                    </div>
                    <div style="width: 100%;display: flex;justify-content: space-between; margin-bottom: 20px;">
                        <label for="createFamousPlaceModalName">name</label>
                        <input style="width: 75%" name="createFamousPlaceModalName" id="createFamousPlaceModalName" type="text" required>
                    </div>
                    <div style="width: 100%;display: flex;justify-content: space-between; margin-bottom: 20px;">
                        <label for="createFamousPlaceModalDisc">description</label>
                        <input style="width: 75%" name="createFamousPlaceModalDisc" id="createFamousPlaceModalDisc" type="text" required>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!--==============------------------------------------------------------------------------------------------>
<!-- Modal -->
<div class="modal fade" id="tripModal" tabindex="-1" role="dialog" aria-labelledby="tripModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tripModalLabel">Trip</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="index1.php" id = "tripModalForm">
                <div class="modal-body">


                    <div style="width: 100%;display: flex;justify-content: space-between; margin-bottom: 20px;">
                        <label for="updateTripModalPict">picture</label>
                        <input style="width: 75%" name="updateTripModalPict" id="updateTripModalPict" type="text" required>
                    </div>
                    <div style="width: 100%;display: flex;justify-content: space-between; margin-bottom: 20px;">
                        <label for="updateTripModalName">name</label>
                        <input style="width: 75%" name="updateTripModalName" id="updateTripModalName" type="text" required>
                    </div>
                    <div style="width: 100%;display: flex;justify-content: space-between; margin-bottom: 20px;">
                        <label for="updateTripModalDisc">description</label>
                        <input style="width: 75%" name="updateTripModalDisc" id="updateTripModalDisc" type="text" required>
                    </div>

                    <div style="width: 100%;display: flex;justify-content: space-between; margin-bottom: 20px;">
                        <label for="updateTripModalDate">date</label>
                        <input style="width: 75%" name="updateTripModalDate" id="updateTripModalDate" type="text" required>
                    </div>

                    <div style="width: 100%;display: flex;justify-content: space-between; margin-bottom: 20px;">
                        <label for="updateTripModalPlace">place</label>
                        <input style="width: 75%" name="updateTripModalPlace" id="updateTripModalPlace" type="text" required>
                    </div>
                    <div style="width: 100%;display: flex;justify-content: space-between; margin-bottom: 20px;">
                        <label for="updateTripModalTime">time</label>
                        <input style="width: 75%" name="updateTripModalTime" id="updateTripModalTime" type="text" required>
                    </div>

                    <div style="width: 100%;display: flex;justify-content: space-between; margin-bottom: 20px;">
                        <label for="updateTripModalFullDisc">Full description</label>
                        <input style="width: 75%" name="updateTripModalFullDisc" id="updateTripModalFullDisc" type="text" required>
                    </div>

                    <input hidden id = "updateTripModalModalId" name="updateTripModalModalId">


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="createTripModalCreate" tabindex="-1" role="dialog" aria-labelledby="createTripModalCreateLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="famousPlaceModalCreateLabel">Trip</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="index1.php" id = "createTripModalForm">
                <div class="modal-body">
                    <div style="width: 100%;display: flex;justify-content: space-between; margin-bottom: 20px;">
                        <label for="createTripModalPict">picture</label>
                        <input style="width: 75%" name="createTripModalPict" id="createTripModalPict" type="text" required>
                    </div>
                    <div style="width: 100%;display: flex;justify-content: space-between; margin-bottom: 20px;">
                        <label for="updateTripModalName">name</label>
                        <input style="width: 75%" name="createTripModalName" id="createTripModalName" type="text" required>
                    </div>
                    <div style="width: 100%;display: flex;justify-content: space-between; margin-bottom: 20px;">
                        <label for="updateTripModalDisc">description</label>
                        <input style="width: 75%" name="createTripModalDisc" id="createTripModalDisc" type="text" required>
                    </div>

                    <div style="width: 100%;display: flex;justify-content: space-between; margin-bottom: 20px;">
                        <label for="createTripModalDate">date</label>
                        <input style="width: 75%" name="createTripModalDate" id="createTripModalDate" type="text" required>
                    </div>

                    <div style="width: 100%;display: flex;justify-content: space-between; margin-bottom: 20px;">
                        <label for="createTripModalPlace">place</label>
                        <input style="width: 75%" name="createTripModalPlace" id="createTripModalPlace" type="text" required>
                    </div>
                    <div style="width: 100%;display: flex;justify-content: space-between; margin-bottom: 20px;">
                        <label for="createTripModalTime">time</label>
                        <input style="width: 75%" name="createTripModalTime" id="createTripModalTime" type="text" required>
                    </div>

                    <div style="width: 100%;display: flex;justify-content: space-between; margin-bottom: 20px;">
                        <label for="createTripModalFullDisc">Full description</label>
                        <input style="width: 75%" name="createTripModalFullDisc" id="createTripModalFullDisc" type="text" required>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script>
    $( function() {
        $( "#createTripModalDate" ).datepicker();
    } );
</script>
<script>
    $( function() {
        $( "#updateTripModalDate" ).datepicker();
    } );
</script>
<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="js/gmaps.min.js"></script>
<script src="js/theme.js"></script>

<script>
    $('.crudBtn.updater').click(function () {
        id = $(this).data('id');
        $.ajax({
            url: 'index1.php',
            data: 'nameCRUD=updateTeamMember&id='+id,
            type: 'POST',
            success: function(item){
                k=JSON.parse(item);
                $('#teamMemberModal').modal('show');

                $('#updateTeamMemberFormPict').val(k['pict']);
                $('#updateTeamMemberFormName').val(k['name']);
                $('#updateTeamMemberFormDisc').val(k['disc']);
                $('#updateTeamMemberFormId').val(k['_id']['$id']);

            }
        });
    })
</script>

<script>
    $('.crudBtn.commentUpdater').click(function () {
        id = $(this).data('id');
        $.ajax({
            url: 'index1.php',
            data: 'nameCRUD=updateComment&id='+id,
            type: 'POST',
            success: function(item){
                k=JSON.parse(item);
                $('#CommentModal').modal('show');

                $('#updateCommentModalPict').val(k['pict']);
                $('#updateCommentModalName').val(k['name']);
                $('#updateCommentModalDisc').val(k['desc']);
                $('#updateCommentModalId').val(k['_id']['$id']);

            }
        });
    })
</script>

<script>
    $('.crudBtn.famousPlaceUpdater').click(function () {
        id = $(this).data('id');
        $.ajax({
            url: 'index1.php',
            data: 'nameCRUD=updateFamousPlaceUpdater&id='+id,
            type: 'POST',
            success: function(item){
                k=JSON.parse(item);
                $('#famousPlaceModal').modal('show');

                $('#updateFamousPlaceModalPict').val(k['pict']);
                $('#updateFamousPlaceModalName').val(k['name']);
                $('#updateFamousPlaceModalDisc').val(k['desc']);
                $('#updateFamousPlaceModalId').val(k['_id']['$id']);

            }
        });
    })
</script>

<script>
    $('.crudBtn.tripUpdater').click(function () {
        id = $(this).data('id');
        $.ajax({
            url: 'index1.php',
            data: 'nameCRUD=updateTripUpdater&id='+id,
            type: 'POST',
            success: function(item){
                k=JSON.parse(item);
                $('#tripModal').modal('show');

                $('#updateTripModalPict').val(k['pict']);
                $('#updateTripModalName').val(k['name']);
                $('#updateTripModalDisc').val(k['disc']);
                $('#updateTripModalDate').val(k['date']);
                $('#updateTripModalPlace').val(k['place']);
                $('#updateTripModalTime').val(k['time']);
                $('#updateTripModalFullDisc').val(k['full_disc']);
                $('#updateTripModalModalId').val(k['_id']['$id']);

            }
        });
    })
</script>

</body>

</html>