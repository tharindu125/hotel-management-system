<?php
ob_start();
include 'conetion.php';
$conn = OpenCon();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>BR Hotels & Spas</title>



    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">

                <a class="navbar-brand" href="#"><img src="pic/pic/12.jpeg" width="60px" height="50px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="hotelsandresorts.php">Hotels & Resorts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="gallary.php">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="createAccount.php">Create Account</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Room
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <!-- <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li> -->
                    </ul>

                </div>
            </div>
        </nav>
    </header>


    <main>

        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
                    <img src="pic/pic/9.jpg" width="100%" height="100%">
                    <div class="container">
                        <div class="carousel-caption text-start">

                            <h1>BR Hotels & Resorts</h1>
                            <!-- <p>Some representative placeholder content for the first slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p> -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
                    <img src="pic/pic/10.jpg" width="100%" height="100%">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>BR Hotels & Resorts.</h1>
                            <!-- <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p> -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
                    <img src="pic/pic/11.jpg" width="100%" height="100%">
                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>BR Hotels & Resorts.</h1>
                            <!-- <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p> -->
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


        <div class="container">
            <div style="margin: auto 200px;">
                <div class="featurette">
                    <div class="col-md-12">
                        <h2 class="featurette-heading" style="margin-bottom: 40px;">Booking</h2>
                    </div>

                </div>
                <div id="addcustomer">

                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab"  role="tab" aria-controls="nav-home" aria-selected="true">ADULTS & CHILDREN</a>
                            <a class="nav-item nav-link active"   id="nav-profile-tab" data-toggle="tab"  role="tab" aria-controls="nav-profile" aria-selected="false">DATES OF STAY</a>
                            <a class="nav-item nav-link"  id="nav-contact-tab" data-toggle="tab"  role="tab" aria-controls="nav-contact" aria-selected="false">ACCOMMODATIONS</a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"  role="tab" aria-controls="nav-contact" aria-selected="false">TOTAL</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">

                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                          
                            <div class="welcome-wrapper">
                                <?php
                                $dateFrom = date_create($_GET["startDate"]);
                                echo date_format($dateFrom, "F j, Y");
                                ?>-
                                <?php
                                $date = date_create($_GET["endDate"]);
                                echo date_format($date, "F j, Y");
                                ?>
                            </div>
                            </br>

                            <form action="date.php" method="POST" name="bookday">
                                <div class="row form-row">
                                    <div class="col-md-6 input-layout form-group seleteAge">


                                        <div class="form-group">

                                            <input type="date" id="startDate" name="startDate" value="<?php echo $_GET["startDate"]; ?>" class="datepic" required>
                                        </div>

                                    </div>

                                    <div class="col-md-6 input-layout form-group seleteAge">
                                        <div class="form-group">
                                            <input type="date" id="endDate" name="endDate" class="datepic" value="<?php echo $_GET["endDate"]; ?>" required>
                                        </div>

                                    </div>
                                </div>
                                </br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="content">

                                            <div id="container">
                                                <div id="header">
                                                    <div id="monthDisplay"></div>
                                                    <div id="groupBtn">
                                                        <button class="btn btn-info btn-lg previousBtn"><i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i></button>
                                                        <button class="btn btn-info btn-lg nextBtn"><i class="fa fa-chevron-right fa-2x" aria-hidden="true"></i></i></button>
                                                    </div>
                                                </div>
                                                <div id="weekdays"></div>
                                                <div id="calendar"></div>
                                            </div>



                                            <div id="modalBackDrop"></div>

                                        </div>




                                    </div>
                                </div>
                                <input type="hidden" id="adult" name="adult" value="<?php echo $_GET["adult"]; ?>">
                                <input type="hidden" id="hotelId" name="hotelId" value="<?php echo $_GET["hotelId"]; ?>">
                                <input type="hidden" id="children" name="children" value="<?php echo $_GET["children"]; ?>">
                                <input type="hidden" id="roomCount" name="roomCount" value="<?php echo $_GET["roomCount"]; ?>">
                                <input type="hidden" id="childrenAge" name="childrenAge" value="<?php echo $_GET["childrenAge"]; ?>">

                                <input class="btn btn-outline-success" type="submit" value="UPDATE DATES OF STAY" />
                            </form>

                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">222</div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">.1111111111111111..</div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"></div>
                    </div>


                </div><!-- /.container -->

            </div>
        </div>
        <!-- FOOTER -->
        <?php include 'footer.php'; ?>

    </main>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>

<style>
    .welcome-wrapper {
        text-align: center;

    }

    .navbar {
        padding-bottom: 2px;
        padding-top: 2px;
    }

    .navbar-brand img {
        height: 42px;
        width: 100%;
        border-radius: 50%;
    }

    .bg-dark {
        background-color: #6c757d !important;
    }

    .footer-view {
        background: #0009;
        padding-top: 95px;
        padding-bottom: 85px;
        margin-top: 50px;
    }

    .footer-view p {
        color: #fff;
    }

    .float-end a {
        color: #fff !important;
    }

    .float-end a:hover {
        color: #0d6efd;
    }

    .datepic {
        display: block;
        width: 100%;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #212529;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border-radius: 0.25rem;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;

    }

    .booking-area {
        background: #e3e4e5;
        padding: 40px 10px;
        margin-bottom: 40px;
        box-shadow: 0 2px 0 rgb(0 0 0 / 2%);
    }

    .width-100 {
        width: 100% !important;
    }

    .seleteAge {

        border: none;
    }

    body {
        display: flex;
        margin-top: 50px;
        justify-content: center;
        background-color: #FFFCFF;
    }

    #header {
        padding: 10px;
        color: rgb(205 92 92);
        font-weight: bold;
        font-size: 26px;
        font-family: sans-serif;
        display: flex;
        justify-content: space-around;
        background-color: rgba(209, 226, 235, 0.25);
    }

    #header button {
        background-color: #92a1d1;
        border-color: inherit;
    }

    #container {
        width: 770px;
    }

    #weekdays {
        color: #247BA0;
        text-align: center;
        width: 100%;
        display: flex;
        justify-content: space-around;
    }

    #weekdays div {
        width: 100px;
        padding: 10px;
    }

    #calendar {
        width: 100%;
        margin: auto;
        display: flex;
        flex-wrap: wrap;
    }

    .day {
        text-align: center;
        width: 100px;
        padding: 10px;
        height: 100px;
        cursor: pointer;
        box-sizing: border-box;
        background-color: white;
        margin: 5px;
        box-shadow: 0px 0px 3px #CBD4C2;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .day:hover {
        background-color: #e8faed;
    }

    .day+#currentDay {
        background-color: #e8f4fa;
    }

    #currentDay {
        color: rgb(205 92 92);
        font-weight: bold;
    }

    .event {
        font-size: 10px;
        padding: 3px;
        background-color: #58bae4;
        color: white;
        border-radius: 5px;
        max-height: 55px;
        overflow: hidden;
    }

    .padding {
        cursor: default !important;
        background-color: #FFFCFF !important;
        box-shadow: none !important;
    }

    .card.newEventModal {
        display: none;
        z-index: 20;
        position: absolute;
        padding: 25px;
        background-color: rgba(209, 226, 235, 1);
        ;
        width: 350px;
        top: 100px;
        left: calc(50% - 175px);
        font-family: sans-serif;
    }

    .eventTitleInput,
    .eventTitleInput02 {
        padding: 10px;
        width: 100%;
        box-sizing: border-box;
        margin-bottom: 25px;
        border-radius: 3px;
        outline: none;
        border: none;
        box-shadow: 0px 0px 3px gray;
    }

    eventTitleInput.error,
    .eventTitleInput02.error {
        border: 2px solid red;
    }

    #modalBackDrop {
        top: 0px;
        left: 0px;
        height: 100vh;
        background-color: rgba(0, 0, 0, 0.8);
        width: 100vw;
        display: none;
        z-index: 10;
        position: absolute;
    }

    i:not(i.fa-eye) {
        color: white;
    }

    ul {
        list-style: hangul-consonant;
        text-align: left;
        margin-left: -10rem;
    }

    .error {
        border: 2px solid red;
    }
</style>


<script>
    const calendar = document.getElementById('calendar');
    const newEventModal = document.querySelector('.newEventModal');
    const deleteEventModal = document.querySelector('.deleteEventModal');
    const backDrop = document.getElementById('modalBackDrop');
    const eventTitleInput = document.querySelector('.eventTitleInput');
    const eventTitleInput02 = document.querySelector('.eventTitleInput02');
    const eventText = document.querySelector(".eventText");
    const weekdays = document.getElementById("weekdays");

    const content = document.querySelector("#content");
    const monthDisplay = document.getElementById("monthDisplay");

    let nav = 0;
    let clicked = null;
    let events = [];
    const days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

    content.onclick = toggle;

    (function get_days() {
        for (let i = 0; i < days.length; i++) {
            const div = document.createElement("div");
            div.innerHTML = days[i].substring(0, 3);
            weekdays.appendChild(div);
        }
    })();

    function toggle(e) {
        const t = e.target;
        const date = t.dataset.date;
        if (t.closest('.day')) {
            openModal(date);
        } else if (t.closest(".closeBtn")) {
            closeModal();
        } else if (t.closest(".addBtn")) {
            addEvent(e);
        } else if (t.closest(".updateBtn")) {
            updateEvent(e);
        } else if (t.closest(".removeBtn")) {
            removeEvent();
        } else if (t.closest(".previousBtn")) {
            initPreviousBtn();
        } else if (t.closest(".nextBtn")) {
            initNextBtn();
        } else if (t.closest("#daySquare"))
            openModal();
    }

    function initPreviousBtn() {
        console.log('previousBtn');
        nav--;
        loadCalendar();
    }

    function initNextBtn() {
        console.log('nextBtn');
        nav++;
        loadCalendar();
    }

    function loadCalendar() {

        calendar.innerHTML = "";

        const dt = new Date();
        //   alert(dt);
        console.log('-- dt : ' + dt);

        if (nav !== 0) {
            dt.setMonth(new Date().getMonth() + nav);
            console.log("-- nav : " + nav);
            console.log('-- dt.setMonth(new Date().getMonth() + nav) : ' + dt.setMonth(new Date().getMonth() + nav));
        }

        const year = dt.getFullYear();
        console.log("-- year : " + year);

        const month = dt.getMonth();
        console.log("-- month : " + month);

        const day = dt.getDate();
        console.log('-- day : ' + day);

        const monthString = dt.toLocaleDateString("en-US", {
            month: "long"
        });
        console.log('-- monthString : ' + monthString);

        monthDisplay.innerHTML = (monthString).substring(0, 3) + " " + year;

        const firstDayOfMonth = new Date(year, month, 1);
        console.log('-- firstDayOfMonth : ' + firstDayOfMonth);

        const options = {
            weekday: 'long',
            year: "numeric",
            month: "numeric",
            day: "numeric"
        }

        const dateString = firstDayOfMonth.toLocaleDateString('en-US', options);
        console.log("-- dateString : " + dateString);

        const firstDayWeek = dateString.split(',')[0];
        console.log('-- firstDayWeek : ' + firstDayWeek);

        const paddingDays = days.indexOf(firstDayWeek);
        console.log("-- paddingDays : " + paddingDays);

        const daysInMonth = new Date(year, month + 1, 0).getDate();
        console.log("-- daysInMonth : " + daysInMonth);

        const currentDay00 = nav == 0 ? dt.toLocaleDateString('en-US', options) : "";
        const currentDay = nav == 0 ? currentDay00.split(',')[1] : "";
        console.log('-- currentDay : ' + currentDay);

        const countDays = paddingDays + daysInMonth;
        console.log('-- countDays : ' + countDays);

        let days01 = [];

        for (let i = 1; i <= countDays; i++) {
            const day01 = {
                day: i - paddingDays,
                month: month + 1,
                year: year,
                currentDay: i - paddingDays == day && nav == 0 ? true : false
            }
            days01.push(day01);
            localStorage.setItem("calendar", JSON.stringify(days01));
        }

        const ref = localStorage.getItem("events");

        for (let i = 0; i < days01.length; i++) {
            const id = days01[i].id;
            const day01 = days01[i].day;
            console.log('day01 : ' + day01);
            const dayString = days01[i].month + "/" + days01[i].day + "/" + days01[i].year;
            let currentDay = days01[i].currentDay;

            const daySquare = document.createElement("div");
            daySquare.classList.add("day");

            if (day01 > 0) {

                daySquare.setAttribute('data-date', dayString);
                daySquare.textContent = day01;

                if (ref) {
                    events = JSON.parse(ref);
                    for (let i = 0; i < events.length; i++) {
                        if (events[i].date == dayString) {
                            const eventDiv = document.createElement("div");
                            eventDiv.classList.add('event');
                            eventDiv.textContent = events[i].title;
                            daySquare.appendChild(eventDiv);
                        }
                    }
                }

            } else {
                daySquare.style.visibility = 'hidden';
            }
            if (currentDay) {
                daySquare.setAttribute("id", "currentDay");
            }
            const test = currentDay == true ? "-- currentDay" : "";
            console.log(`dayString[${i}] : ${dayString} ${test}`);
            calendar.appendChild(daySquare);
        }

    }

    loadCalendar();
</script>

<?php
if (isset($_POST["startDate"])) {
    $query = array(
        'startDate' => $_POST["startDate"],
        'hotelId' => $_POST["hotelId"],
        'endDate' => $_POST["endDate"],
        'roomCount' => $_POST["roomCount"],
        'adult' => $_POST["adult"],
        'children' => $_POST["children"],
        'childrenAge' => $_POST["childrenAge"]
    );
    $query = http_build_query($query);
    header("Location: accommodation.php?$query");

    $conn->close();
    ob_end_flush();
}

?>