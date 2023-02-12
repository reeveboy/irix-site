<?php
// $alert_flag = "none";
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "irix";

$alert_flag = "none";
$servername = "localhost";
$username = "idzzdcmy_irix";
$password = "admin@irix";
$dbname = "idzzdcmy_irix";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
  //  echo "<h2 style='color : white'>db connected</h2>";
  //  echo '<script>alert("db connected")</script>';

}

if (isset($_POST['submit'])) {
    //  echo $_POST["collage"].'<br>';
    //  echo $_POST["team_leader"].'<br>';
    //  echo $_POST["team_leader_contact"].'<br>';
    //  echo $_POST["email"].'<br>';
    $futsal = $_POST["futsal"] ? $_POST["futsal"] : "0" ;
    $gaming = $_POST["futsal"] ? $_POST["gaming"] : "0" ;

    $sql = "INSERT INTO registration (collage_name, team_leader_name, team_leader_contact,email,futsal,gaming)
    VALUES ('".$_POST["collage"]."', '".$_POST["team_leader"]."', '".$_POST["team_leader_contact"]."','".$_POST["email"]."','".$futsal."','".$gaming."')";

    if ($conn->query($sql) === TRUE) {
      $alert_flag = "block";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $to = $_POST["email"];
    $subject = "Irix 2023 Registration";
    
    $message = "<b>Thank you for registering to irix 2023 click the link below to join the whatsapp group</b><br>";
    $message .= "<b>https://chat.whatsapp.com/JtS0EUpGXi9JzwZk96rdab<b>";
    
    $header = "From:admin@i-rix.com \r\n";
    // $header .= "Cc:afgh@somedomain.com \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";
    
    $retval = mail ($to,$subject,$message,$header);
    
    if( $retval == true ) {
        echo "Message sent successfully...";
    }else {
       // echo "Message could not be sent...";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>IRIX 2023</title>
    <link rel="shortcut icon" href="./images/logo2.svg" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=KoHo:wght@200;300;400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="./styles/global.css" />

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              dark: "#120d28",
              light: "#E9E6F7",
              primary: "#113485",
              primaryHover: "#0f2a6b",
              accent: "#ff6524",
              lightDark: "#1A162E",
              g2: "#CF7915",
            },
          },
        },
      };
    </script>
  </head>
  <body class="min-h-screen flex flex-col">
    <!-- Navbar -->
    <nav
      id="navbar"
      class="transition-all duration-300 z-20 px-2 bg-dark sm:px-4 py-2.5 w-full top-0 left-0 border-b border-gray-700"
    >
      <div
        class="container flex flex-wrap items-center justify-between mx-auto"
      >
        <a href="/index.html" class="flex items-center">
          <img src="/images/logo2.svg" class="h-6 mr-3 sm:h-9" />
          >
        </a>
        <div class="flex md:order-2">
          <a
            href="/register.html"
            type="button"
            class="text-light bg-primary hover:bg-primary/90 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0"
          >
            Register
          </a>
          <button
            data-collapse-toggle="navbar-sticky"
            type="button"
            class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-sticky"
            aria-expanded="false"
          >
            <span class="sr-only">Open main menu</span>
            <svg
              class="w-6 h-6"
              aria-hidden="true"
              fill="currentColor"
              viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                clip-rule="evenodd"
              ></path>
            </svg>
          </button>
        </div>
        <div
          class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1"
          id="navbar-sticky"
        >
          <ul
            class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:text-md md:font-medium md:border-0"
          >
            <li>
              <a
                href="/index.html"
                class="cursor-pointer block py-2 pl-3 pr-4 md:p-0 md:hover:text-white text-gray-400 hover:bg-gray-700 hover:text-white md:hover:bg-transparent border-gray-700"
                aria-current="page"
                >Home</a
              >
            </li>
            <li>
              <a
                href="/general-rules.html"
                class="cursor-pointer block py-2 pl-3 pr-4 md:p-0 md:hover:text-white text-gray-400 hover:bg-gray-700 hover:text-white md:hover:bg-transparent border-gray-700"
                >General Rules</a
              >
            </li>
            <li>
              <a
                href="/events.html"
                class="cursor-pointer block py-2 pl-3 pr-4 md:p-0 md:hover:text-white text-gray-400 hover:bg-gray-700 hover:text-white md:hover:bg-transparent border-gray-700"
                >Events</a
              >
            </li>
            <li>
              <a
                href="/schedule.html"
                class="cursor-pointer block py-2 pl-3 pr-4 md:p-0 md:hover:text-white text-gray-400 hover:bg-gray-700 hover:text-white md:hover:bg-transparent border-gray-700"
                >Schedule</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="w-[90%] mx-auto p-4 text-light flex-grow">
      <div id="general-rules" class="text-center max-w-3xl mx-auto">

      <!-- alert for success form submition -->
        <div id="alert_message" style="display: <?= $alert_flag ?>" class="flex justify-center items-center m-1 font-medium py-1 px-2 bg-white rounded-md text-green-100 bg-green-700 border border-green-700 ">
            <div class="text-xl font-normal  max-w-full flex-initial">
                <div class="py-2">Registration Successful
                    <div class="text-sm font-base">A link will be sent to your registered email to join the whatsapp group <a href="/#">here</a></div>
                </div>
            </div>
        </div>
        <h1 class="text-accent text-3xl md:text-5xl font-bold uppercase">
          Registration
        </h1>
        <p class="p-4"></p>
        <div class="text-left">
          <p class="text-accent text-xl md:text-2xl font-bold uppercase">
            Registration Rules
          </p>
          <ul class="list-disc flex flex-col text-left text-light">
            <li class="bg-light/10 rounded-md p-2 mt-2">
              <p>Only Details of the Team Leader is needed for registration.</p>
            </li>
            <li class="bg-light/10 rounded-md p-2 mt-2">
              <p>
                Teams should consist of a maximum of 15 number of members.
                (excluding futsal team & gaming)
              </p>
            </li>
            <li class="bg-light/10 rounded-md p-2 mt-2">
              <p>
                Team leaders will be added to a WhatsApp group after
                registration
              </p>
            </li>
            <li class="bg-light/10 rounded-md p-2 mt-2">
              <p>
                Teams must pay a registration fee of &#x20B9;2,250 for a team of
                15 students. i.e. &#x20B9;150 per student.
              </p>
            </li>
            <li class="bg-light/10 rounded-md p-2 mt-2">
              <p>For futsal a registration fee of &#x20B9;500 per team.</p>
            </li>
            <li class="bg-light/10 rounded-md p-2 mt-2">
              <p>Receipts will be provided after the payment.</p>
            </li>
            <li class="bg-light/10 rounded-md p-2 mt-2">
              <p>All teams should have a Bonafied letter from the Principal</p>
            </li>
          </ul>
        </div>
        <p class="p-4"></p>
        <form action = "register.html" method = "post" class="max-w-lg mx-auto mt-4 p-2">

          <h1 class="text-accent text-2xl md:text-3xl font-bold uppercase">
            Register
          </h1>
          <p class="p-2"></p>
          <div class="mb-6 text-left">
            <label class="block mb-2 text-lg font-medium">College Name</label>
            <input
              id="college-name"
              name="collage"
              class="shadow-md shadow-accent/50 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
              placeholder="College Name"
              required
            />
          </div>

          <div class="mb-6 text-left">
            <label class="block mb-2 text-lg font-medium"
              >Team Leader Name</label
            >
            <input
              id="team-leader"
              name="team_leader"
              class="shadow-md shadow-accent/50 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
              placeholder="Team Leader Name"
              required
            />
          </div>

          <div class="mb-6 text-left">
            <label class="block mb-2 text-lg font-medium"
              >Team Leader Email</label
            >
            <input
              id="email"
              name="email"
              class="shadow-md shadow-accent/50 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
              placeholder="Team Leader Email"
              required
            />
          </div>

          <div class="mb-6 text-left">
            <label class="block mb-2 text-lg font-medium"
              >Team Leader Contact Number</label
            >
            <input
              id="contact-number"
              name="team_leader_contact"
              class="shadow-md shadow-accent/50 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
              placeholder="Team Leader Contact Number"
              required
            />
          </div>

          <div class="mb-6 text-left">
            <label class="block mb-2 text-lg font-medium"
              >Team Participating for: (check event)</label
            >
            <div class="flex items-center mb-4">
              <input
                id="futsal"
                type="checkbox"
                value="1"
                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2"
                name="futsal"
              />
              <label
                data-tooltip-target="futsal-tooltip"
                data-tooltip-style="light"
                for="futsal"
                class="ml-2 text-lg font-medium text-light"
                >Futsal</label
              >
              <div
                id="futsal-tooltip"
                role="tooltip"
                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip"
              >
                Separate registration fee of &#x20B9;500.
                <div class="tooltip-arrow" data-popper-arrow></div>
              </div>
            </div>
            <div class="flex items-center">
              <input
                id="gaming"
                type="checkbox"
                value="1"
                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2"
                name="gaming"
              />
              <label
                data-tooltip-target="gaming-tooltip"
                data-tooltip-style="light"
                for="gaming"
                class="ml-2 text-lg font-medium text-light"
                >Gaming</label
              >
              <div
                id="gaming-tooltip"
                role="tooltip"
                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip"
              >
                Separate registration fee are applied.
                <div class="tooltip-arrow" data-popper-arrow></div>
              </div>
            </div>
          </div>

          <input type = "submit" name = "submit" 
            value = "Submit"
            class="shadow-md shadow-primary/50 mt-4 w-full text-light bg-primary hover:bg-primary/90 font-medium rounded-lg text-lg px-5 py-2.5 text-center md:mr-0"
          >
        </form>
      </div>
    </div>

    <!-- Footer -->
    <div class="flex flex-col text-light">
      <div class="bg-[#0C081B] grid grid-cols-1 p-4 place-items-center">
        <div class="flex flex-col items-center">
          <img
            class="h-[75%] w-[75%] md:h-[100%] md:w-[100%]"
            src="/images/logo2.svg"
          />
          <p class="text-sm">Department of Computer Science</p>
          <p class="p-1"></p>
          <div class="flex">
            <a
              href="https://www.instagram.com/irix_dcs/"
              target="_blank"
              rel="noopener noreferrer"
            >
              <svg
                class="h-[30px] w-[30px] fill-light"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 448 512"
              >
                <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                <path
                  d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
                />
              </svg>
            </a>
          </div>
        </div>
      </div>
      <div class="bg-[#07050D] text-center text-xs p-2 text-gray-400">
        Copyright © 2023-2024 Parvatibai Chowgule College of Arts and Science -
        All rights reserved.
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
  </body>
</html>
