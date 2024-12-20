<!DOCTYPE html>
<html>

<head>
    <title>Admin Ticket Cancelation - UTMS</title>
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
                    <li><a href="./admin-report-list.php">Report</a></li>
                    <li><a href="./admin-cancelation-list.php" class="text-[#1bd1a4]">Cancelation</a></li>
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
        <div class="w-[80%] mx-auto flex flex-col justify-center items-center pt-20">

            <h1 class="font-bold text-3xl mb-10">Ticket Cancelation</h1>

            <!-- graph -->
            <div class="w-[80%] max-auto flex items-center justify-center my-12">
                <canvas id="myChart" style="max-width:600px" class="blur"></canvas>
                <div class="relative text-center right-[32%] text-xl drop-shadow-2xl font-bold text-[#1bd1a4]">Coming Soon...</div>
            </div>

            <!-- cancelation cards -->
            <div class="w-full">
                <div class="overflow-x-auto">
                    <table class="table table-zebra">
                        <!-- head -->
                        <thead class="bg-[#1bd1a4] text-white">
                            <tr>
                                <th></th>
                                <th>Customer ID</th>
                                <th>Ticket ID</th>
                                <th>Date</th>
                                <th>Ticket Type</th>
                                <th>Return Amount(TK)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- row 1 -->
                            <tr>
                                <th>1</th>
                                <td>2024m1103c0000201</td>
                                <td>241015t241020ntb301</td>
                                <td>20/10/2024</td>
                                <td>Bus(Non-AC)</td>
                                <td>500</td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <th>2</th>
                                <td>2024m1103c0000252</td>
                                <td>241015t241020ntt001</td>
                                <td>25/10/2024</td>
                                <td>Train</td>
                                <td>700</td>
                            </tr>
                            <!-- row 3 -->
                            <tr>
                                <th>3</th>
                                <td>2023m1203c0000702</td>
                                <td>241015t241020ntt001</td>
                                <td>21/10/2024</td>
                                <td>Launch</td>
                                <td>400</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <script>
            const xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
            const yValues = [55, 49, 44, 24, 15];
            const barColors = [
                "#b91d47",
                "#00aba9",
                "#2b5797",
                "#e8c3b9",
                "#1e7145"
            ];

            new Chart("myChart", {
                type: "pie",
                data: {
                    labels: xValues,
                    datasets: [{
                        backgroundColor: barColors,
                        data: yValues
                    }]
                },
                //   options: {
                //     title: {
                //       display: true,
                //       text: "World Wide Wine Production 2018"
                //     }
                //   }
            });
        </script>
</body>

</html>