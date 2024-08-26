<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    body {
    font-family: 'Arial', sans-serif;
    background-color: #f0f8ff;
}

h1 {
    font-weight: bold;
    color: #333;
}

.team-member {
    background: linear-gradient(145deg, #e6e9ef, #ffffff);
    padding: 20px;
    border-radius: 15px;
    box-shadow: 6px 6px 12px #c5c9d1, -6px -6px 12px #ffffff;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.team-member:hover {
    transform: translateY(-10px);
    box-shadow: 12px 12px 24px #c5c9d1, -12px -12px 24px #ffffff;
}

.image-circle {
    width: 150px;
    height: 150px;
    overflow: hidden;
    border-radius: 50%;
    margin: 0 auto;
    position: relative;
}

.image-circle img {
    width: 100%;
    height: auto;
    transform: scale(1);
    transition: transform 0.3s ease;
}

.image-circle img:hover {
    transform: scale(1.1);
}

.member-name {
    font-weight: 700;
    color: #007bff;
    margin-top: 10px;
}

.member-role {
    color: #555;
}

</style>
<body>

<div class="container my-5 pt-5">
    <h1 class="text-center mt-5 mb-5">Meet Our Team</h1>
    <div class="row justify-content-center">
        <!-- First Row: 2 Members -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="team-member text-center">
                <div class="image-circle mb-3">
                    <img src="<?php echo base_url()?>assets/dimas.jpg" class="img-fluid rounded-circle" alt="Member 1">
                </div>
                <h4 class="member-name">Dimas Nurhakim</h4>
                <p class="member-role">Web Developer</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="team-member text-center">
                <div class="image-circle mb-3">
                    <img src="https://via.placeholder.com/150" class="img-fluid rounded-circle" alt="Member 2">
                </div>
                <h4 class="member-name">Member 2</h4>
                <p class="member-role">Role</p>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <!-- Second Row: 3 Members -->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="team-member text-center">
                <div class="image-circle mb-3">
                    <img src="https://via.placeholder.com/150" class="img-fluid rounded-circle" alt="Member 3">
                </div>
                <h4 class="member-name">Member 3</h4>
                <p class="member-role">Role</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="team-member text-center">
                <div class="image-circle mb-3">
                    <img src="https://via.placeholder.com/150" class="img-fluid rounded-circle" alt="Member 4">
                </div>
                <h4 class="member-name">Member 4</h4>
                <p class="member-role">Role</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="team-member text-center">
                <div class="image-circle mb-3">
                    <img src="https://via.placeholder.com/150" class="img-fluid rounded-circle" alt="Member 5">
                </div>
                <h4 class="member-name">Member 5</h4>
                <p class="member-role">Role</p>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
