<!DOCTYPE html>
<html>
<head>
    <title>User Search</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        .card {
            margin: 10px 0;
        }
    </style>
</head>
<body>
<div class="container">
    <h2 class="my-4"><b>Search</b></h2>
    <input type="text" id="search" class="form-control" placeholder="Search by Name/Department/Designation">
    <div id="user-cards" class="mt-4">
        <div class="row">
        @foreach($users as $user)
        <div class="col-md-6 mb-3">
            <div class="card user-card">
                <div class="card-body">
                    <h5 class="card-title user-name">{{ $user->name }}</h5>
                    <p class="card-text user-department">{{ $user->department->name }}</p>
                    <p class="card-text user-designation">{{ $user->designation->name }}</p>
                   
                </div>
            </div>
        </div>
        @endforeach
        </div>
    </div>
</div>

<script>
$(document).ready(function(){
    $('#search').on('keyup', function(){
        var query = $(this).val().toLowerCase();
        $('.user-card').each(function(){
            var name = $(this).find('.user-name').text().toLowerCase();
            var department = $(this).find('.user-department').text().toLowerCase();
            var designation = $(this).find('.user-designation').text().toLowerCase();
            if(name.includes(query) || department.includes(query) || designation.includes(query)){
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    });
});
</script>
</body>
</html>
