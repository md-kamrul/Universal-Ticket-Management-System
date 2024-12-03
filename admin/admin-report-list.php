<!DOCTYPE html>
<html>

<head>
    <title>Admin Report - UTMS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.4.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>

<body class="text-white">
    <div class="w-full h-full bg-[#18191a] pb-10">
        <!-- navbar -->
        <div class="navbar bg-[#242526] shadow-2xl">
            <div class="flex-1">
                <a href="./admin-home.php" class="btn btn-ghost text-xl">UTMS</a>
            </div>
            <div class="flex-none">
                <ul class="menu menu-horizontal pl-1 pr-2 flex flex-row items-center">
                    <li><a href="./admin-home.php">Home</a></li>
                    <li><a href="./admin-add-ticket.php">Add Ticket</a></li>
                    <li><a href="./admin-transaction-history.php">Transaction History</a></li>
                    <li><a href="./admin-report-list.php" class="text-[#1bd1a4]">Report</a></li>
                    <li><a href="./admin-cancelation-list.php">Cancelation</a></li>
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
        <div class="w-[80%] mx-auto flex flex-col justify-center items-center pt-20 h-full">

            <h1 class="font-bold text-3xl mb-10">Report</h1>

            <div class="w-full flex flex-col gap-10">
                <div class="card bg-base-100 shadow-xl w-[70%] mx-auto">
                    <?php
                    include('../admin/connect.php');
                    $sqlSelect = "SELECT * FROM report";
                    $result = mysqli_query($conn, $sqlSelect);
                    while ($data = mysqli_fetch_array($result)) {
                        $sqlSelect = "SELECT * FROM customer";
                        $result = mysqli_query($conn, $sqlSelect);
                        while ($dataCustomer = mysqli_fetch_array($result)) {
                            echo $data['customer_id'], $dataCustomer['customer_id'];
                            if ($data['customer_id'] == $dataCustomer['customer_id']) {
                                echo "paichi";
                            } else {
                                echo "pai nai";
                            }
                        }
                    ?>
                        <!-- <tr>
                            <td><?php echo $data['report_id']; ?></td>
                            <td><?php echo $data['rating']; ?></td>
                            <td><?php echo $data['text']; ?></td>
                            <td><?php echo $data['date']; ?></td>
                            <td><?php echo $data['customer_id']; ?></td>
                            <td>
                                <button class="btn bg-transparent text-[#1bd1a4] border border-[#1bd1a4] hover:border-[#1bd1a4]">
                                    <a href="./admin-ticket-edit.php?id=<?php echo $data['Ticket_id']; ?>">Edit</a>
                                </button>
                            </td>
                        </tr> -->

                    <?php
                    }
                    ?>
                    <div class="card-body">
                        <div class="flex flex-row gap-3 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                class="bi bi-person-circle w-10 h-10" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                <path fill-rule="evenodd"
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                            </svg>
                            <div class="flex flex-row justify-between w-full items-center">
                                <div class="flex flex-col">
                                    <h2 class="font-bold">Md. Kamrul Islam</h2>
                                    <h2 class="">27 July, 2024</h2>
                                </div>
                                <div>
                                    <div class="flex flex-row gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-star-fill text-[#1bd1a4]"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-star-fill text-[#1bd1a4]"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-star-fill text-[#1bd1a4]"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-star text-[#1bd1a4]" viewBox="0 0 16 16">
                                            <path
                                                d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-star text-[#1bd1a4]" viewBox="0 0 16 16">
                                            <path
                                                d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, non aliquam officiis
                            quam nesciunt cum, quo sequi deleniti, a dolores ipsa dicta laborum sit amet! Qui velit
                            assumenda quaerat distinctio!</p>
                        <div class="card-actions justify-end">
                            <button class="btn bg-[#1bd1a4] text-white">Done</button>
                        </div>
                    </div>
                </div>

                <div class="card bg-base-100 shadow-xl w-[70%] mx-auto">
                    <div class="card-body">
                        <div class="flex flex-row gap-3 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                class="bi bi-person-circle w-10 h-10" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                <path fill-rule="evenodd"
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                            </svg>
                            <div class="flex flex-row justify-between w-full items-center">
                                <div class="flex flex-col">
                                    <h2 class="font-bold">Md. Kamrul Islam</h2>
                                    <h2 class="">27 July, 2024</h2>
                                </div>
                                <div>
                                    <div class="flex flex-row gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-star-fill text-[#1bd1a4]"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-star-fill text-[#1bd1a4]"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-star-fill text-[#1bd1a4]"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-star text-[#1bd1a4]" viewBox="0 0 16 16">
                                            <path
                                                d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-star text-[#1bd1a4]" viewBox="0 0 16 16">
                                            <path
                                                d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, non aliquam officiis
                            quam nesciunt cum, quo sequi deleniti, a dolores ipsa dicta laborum sit amet! Qui velit
                            assumenda quaerat distinctio!</p>
                        <div class="card-actions justify-end">
                            <button class="btn bg-[#1bd1a4] text-white">Done</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>