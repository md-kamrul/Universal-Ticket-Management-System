<!DOCTYPE html>
<html>

<head>
    <title>Admin Transaction History - UTMS</title>
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
                    <li><a href="./admin-transaction-history.php" class="text-[#1bd1a4]">Transaction History</a></li>
                    <li><a href="./admin-report-list.php">Report</a></li>
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
        <div class="w-[80%] mx-auto flex flex-col justify-center items-center pt-20">

            <div class="w-[80%] mx-auto flex flex-row justify-between mb-10">
                <div class="card bg-white text-black w-96 py-9">
                    <div class="card-body flex flex-col items-center justify-center">
                        <h2 class="font-bold text-xl">Transaction (This Month)</h2>
                      <h2 class="card-title font-bold text-5xl text-[#1bd1a4]">10500 <span>Taka</span></h2>
                    </div>
                  </div>
                <div class="card bg-white text-black w-96 py-9">
                    <div class="card-body flex flex-col items-center justify-center">
                        <h2 class="font-bold text-xl">Transaction (This Year)</h2>
                      <h2 class="card-title font-bold text-5xl text-[#1bd1a4]">10500 <span>Taka</span></h2>
                    </div>
                  </div>                
            </div>

            <h1 class="font-bold text-3xl mb-10">Transaction History</h1>

            <div class="w-full h-full">
                <div class="overflow-x-auto">
                    <table class="table table-zebra">
                        <!-- head -->
                        <thead class="bg-[#1bd1a4] text-white">
                            <tr>
                                <th></th>
                                <th>Transaction ID</th>
                                <th>Customer ID</th>
                                <th>No of Ticket(Per Customer)</th>
                                <th>Total Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- row 1 -->
                            <tr>
                                <th>1</th>
                                <td>241015t241020ntb301</td>
                                <td>2024m1103c0000201</td>
                                <td>2</td>
                                <td>500</td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <th>2</th>
                                <td>241015t241020ntt001</td>
                                <td>2024m1103c0000252</td>
                                <td>1</td>
                                <td>250</td>
                            </tr>
                            <!-- row 3 -->
                            <tr>
                                <th>3</th>
                                <td>241015t241020ntt001</td>
                                <td>2023m1203c0000702</td>
                                <td>4</td>
                                <td>500</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

</body>

</html>