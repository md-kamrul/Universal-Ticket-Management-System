<!DOCTYPE html>
<html>

<head>
    <title>Home - UTMS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.4.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <link rel="stylesheet" href="../admin/admin-home.css">
</head>

<body class="text-white">
    <?php

    function ticket_history()
    {
        echo "Hello";
    }
    ?>
    <div class="w-full h-full bg-[#18191a] pb-10">
        <!-- navbar -->
        <div class="navbar bg-[#242526] shadow-2xl">
            <div class="flex-1">
                <a href="./customer-home.php" class="btn btn-ghost text-xl">UTMS</a>
            </div>
            <div class="flex-none">
                <ul class="menu menu-horizontal pl-1 pr-2 flex flex-row items-center">
                    <li><a href="./customer-home.php" class="text-[#1bd1a4]">Home</a></li>
                    <li><a href="./customer-buy-ticket.php">Buy Ticket</a></li>
                    <li><a href="./customer-discount-ticket.php" class="indicator border border-[#1bd1a4]">
                            <span class="indicator-item badge bg-[#1bd1a4] text-white">new</span>
                            Discount Ticket
                        </a></li>
                    <li><a href="./cutomer-ticket-history.php">Ticket History</a></li>
                    <li><a href="./customer-report.php">Report</a></li>
                    <li><a href="./customer-history.php">Customer History</a></li>
                    <li><a href="../login.php" class="text-[#FF0000] font-bold">LogOut</a> </li>
                    <li class="w-10 rounded-full">
                        <a href="./customer-profile.php">
                            <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-person-circle w-6 h-6"
                                viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" fill="white" />
                                <path fill-rule="evenodd"
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"
                                    fill="white" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- body -->
        <div class="w-[80%] mx-auto pt-20">

            <div class="text-container flex items-center justify-center">
                <h1>
                    <span class="prefix">You Can Buy</span>
                    <div class="message">
                        <div class="word1">bus</div>
                        <div class="word2">train</div>
                        <div class="word3">launch</div>
                        <div class="word4">Plane</div>
                    </div>
                </h1>
            </div>

            <div class="mt-20">
                <h1 class="font-bold text-3xl">Buy Ticket</h1>

                <div class="w-full h-full">
                    <div class="overflow-x-auto">
                        <table class="table table-zebra">
                            <!-- head -->
                            <thead class="bg-[#1bd1a4] text-white">
                                <tr class="font-bold text-black">
                                    <th>Ticket Type</th>
                                    <th>Route</th>
                                    <th>Total Seats</th>
                                    <th>Price per Ticket</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                include('../admin/connect.php');
                                $sqlSelect = "SELECT * FROM tickets";
                                $result = mysqli_query($conn, $sqlSelect);
                                while ($data = mysqli_fetch_array($result)) {
                                ?>
                                    <tr>
                                        <td><?php echo $data['ticket_type']; ?></td>
                                        <td><?php echo $data['Description']; ?></td>
                                        <td><?php echo $data['Total_amount_of_ticket']; ?></td>
                                        <td><?php echo $data['ticket_price']; ?></td>
                                        <td>
                                            <a href="./cutomer-ticket-history.php?id=<?php echo $data['Ticket_id']; ?>" class="btn bg-transparent text-[#1bd1a4] border border-[#1bd1a4] hover:border-[#1bd1a4]">
                                                Buy
                                            </a>
                                        </td>
                                    </tr>

                                <?php
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="mt-20">
                <h1 class="font-bold text-3xl">Discount Ticket</h1>

                <div class="w-full h-full">
                    <div class="overflow-x-auto">
                        <table class="table table-zebra">
                            <!-- head -->
                            <thead class="bg-[#1bd1a4] text-white">
                                <tr class="font-bold text-black">
                                    <th>Ticket Type</th>
                                    <th>Route</th>
                                    <th>Total Seats</th>
                                    <th>Price per Ticket</th>
                                    <th>Discount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sqlSelect = "SELECT * FROM discount_tickets";
                                $result = mysqli_query($conn, $sqlSelect);
                                while ($data = mysqli_fetch_array($result)) {
                                ?>
                                    <tr>
                                        <td><?php echo $data['ticket_id']; ?></td>
                                        <td><?php echo $data['Description']; ?></td>
                                        <td><?php echo $data['Total_amount_of_Ticket']; ?></td>
                                        <td><?php echo $data['Actual_price']; ?></td>
                                        <td> <?php echo $data['Discount_amount']; ?>%</td>
                                        <td>
                                            <button onclick="ticket_history()" class="btn bg-transparent text-[#1bd1a4] border border-[#1bd1a4] hover:border-[#1bd1a4]">
                                                <a href="">Buy</a>
                                            </button>
                                        </td>
                                    </tr>

                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
</body>

</html>