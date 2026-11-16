<?php
// Student Information
$fullName = "Aranas, John Clyde L.";
$course = "Bachelor of Science in Information Technology";
$school = "Mater Dei College";
$yearLevel = "2nd Year";
$aboutMe = "I am an Information Technology student who enjoys learning about computers, programming, Cycling, Gaming, and technology.";
$hometown = "Panadtaran, Tubigon, Bohol";

// Skills
$skill1 = "Basic HTML";
$skill2 = "Basic CSS";
$skill3 = "PHP Fundamentals";
$skill4 = "Website Designer";

// Hobbies and Interests
$hobby1 = "Cycling";
$hobby2 = "Watching Movies";
$hobby3 = "Learning New Technologies";
$hobby4 = "Gaming";
// Contact Information
$email = "jclyde12345@gmail.com";
$phone = "6663629";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Student Profile</title>

    <style>
        /* Basic page design */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #111111;
            line-height: 1.6;
        }

        /* Page header */
        header {
            background-color: #000000;
            color: white;
            text-align: center;
            padding: 30px 15px;
        }

        header h1 {
            font-size: 30px;
            margin-bottom: 5px;
        }

        header p {
            color: #e5e5e5;
        }

        /* Main profile container */
        .container {
            width: 90%;
            max-width: 900px;
            margin: 30px auto;
        }

        /* Profile introduction card */
        .profile-card {
            background-color: white;
            text-align: center;
            padding: 30px 20px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            margin-bottom: 20px;
        }

        .profile-photo {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            border: 4px solid #dc2626;
            object-fit: cover;
            margin-bottom: 12px;
        }

        .profile-card h2 {
            color: #000000;
            margin-bottom: 5px;
        }

        .profile-card .course {
            color: #dc2626;
            font-weight: bold;
        }

        /* General information cards */
        .card {
            background-color: white;
            padding: 22px;
            border-radius: 12px;
            margin-bottom: 18px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.06);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.10);
        }

        .card h3 {
            color: #dc2626;
            margin-bottom: 12px;
            border-bottom: 2px solid #e5e5e5;
            padding-bottom: 7px;
        }

        .card p {
            margin-bottom: 6px;
        }

        .card ul {
            padding-left: 22px;
        }

        .card li {
            margin-bottom: 5px;
        }

        /* Footer */
        footer {
            background-color: #000000;
            color: white;
            text-align: center;
            padding: 18px;
            margin-top: 30px;
        }

        /* Mobile responsive design */
        @media screen and (max-width: 600px) {
            header h1 {
                font-size: 24px;
            }

            .container {
                width: 94%;
                margin: 18px auto;
            }

            .profile-card,
            .card {
                padding: 20px 16px;
            }
        }
    </style>
</head>

<body>

    <!-- Page header -->
    <header>
        <h1>My Personal Profile</h1>
        <p>Welcome to my student portfolio</p>
    </header>

    <main class="container">

        <!-- Profile photo and name -->
        <section class="profile-card">
            <!-- Put your own photo in this folder and name it profile.jpg -->
            <img src="clyde.jpg" alt="My Profile Photo" class="profile-photo">

            <h2><?php echo $fullName; ?></h2>
            <p class="course"><?php echo $course; ?></p>
            <p><?php echo $school; ?> | <?php echo $yearLevel; ?></p>
        </section>

        <!-- About me -->
        <section class="card">
            <h3>About Me</h3>
            <p><?php echo $aboutMe; ?></p>
            <p><strong>Hometown:</strong> <?php echo $hometown; ?></p>
        </section>

        <!-- Educational background -->
        <section class="card">
            <h3>Educational Background</h3>
            <p><strong>School:</strong> <?php echo $school; ?></p>
            <p><strong>Course:</strong> <?php echo $course; ?></p>
            <p><strong>Year Level:</strong> <?php echo $yearLevel; ?></p>
        </section>

        <!-- Skills -->
        <section class="card">
            <h3>Skills</h3>
            <ul>
                <li><?php echo $skill1; ?></li>
                <li><?php echo $skill2; ?></li>
                <li><?php echo $skill3; ?></li>
                <li><?php echo $skill4; ?></li>
            </ul>
        </section>

        <!-- Hobbies and interests -->
        <section class="card">
            <h3>Hobbies and Interests</h3>
            <ul>
                <li><?php echo $hobby1; ?></li>
                <li><?php echo $hobby2; ?></li>
                <li><?php echo $hobby3; ?></li>
                <li><?php echo $hobby4; ?></li>
            </ul>
        </section>

        <!-- Contact information -->
        <section class="card">
            <h3>Contact Information</h3>
            <p><strong>Email:</strong> <?php echo $email; ?></p>
            <p><strong>Phone:</strong> <?php echo $phone; ?></p>
        </section>

    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; <?php echo date("Y"); ?> <?php echo $fullName; ?>. All rights reserved.</p>
    </footer>

</body>
</html>