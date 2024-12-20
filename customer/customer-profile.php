<!DOCTYPE html>
<html>

<head>
    <title>Profile - UTMS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.4.0/dist/full.css" rel="stylesheet" type="text/css" />
</head>

<body class="text-white">
    <div class="w-full h-full bg-[#18191a] pb-10">
        <!-- navbar -->
        <div class="navbar bg-[#242526] shadow-2xl">
            <div class="flex-1">
                <a href="./customer-home.php" class="btn btn-ghost text-xl">UTMS</a>
            </div>
            <div class="flex-none">
                <ul class="menu menu-horizontal pl-1 pr-2 flex flex-row items-center">
                    <li><a href="./customer-home.php">Home</a></li>
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
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" fill="#1bd1a4" />
                                <path fill-rule="evenodd"
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"
                                    fill="#1bd1a4" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- body -->
        <div class="w-[80%] mx-auto flex flex-col justify-center items-center pt-20">

            <h1 class="font-bold text-3xl mb-10">Profile</h1>

            <div class="avatar">
                <div class="w-24 rounded-full ring ring-[#1bd1a4] ring-offset-base-100 ring-offset-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        class="bi bi-person-circle w-full h-full" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="mt-12 mb-10 px-10">
            <h1 class="font-bold text-3xl">Personal Information:</h1>
            <div class="mt-5 text-lg">
                <h3 class="flex flex-row gap-3 items-center my-2">
                    <span>Full Name:</span> <input type="text" placeholder="Md. Kamrul Islam" class="input h-6 bg-transparent placeholder:text-[#1bd1a4]" />
                </h3>
                <h3 class="flex flex-row gap-3 items-center my-2">
                    <span>Date of Birth:</span> <input type="text" placeholder="27-02-2002" class="input h-6 bg-transparent placeholder:text-[#1bd1a4]" />
                </h3>
                <h3 class="flex flex-row gap-3 items-center my-2">
                    <span>Email:</span> 
                    <span class="text-[#1bd1a4]"> kamrul@google.com</span>
                </h3>
                <h3 class="flex flex-row gap-3 items-center my-2">
                    <span>Password:</span> <input type="password" placeholder="*****" class="input h-6 bg-transparent placeholder:text-[#1bd1a4]" />
                </h3>
                <h3 class="flex flex-row gap-3 items-center my-2">
                    <span>Last Login Time:</span> 
                     <span class="text-[#1bd1a4]"> 03/11/2024, 09:30pm</span>
                </h3>
            </div>
        </div>

        <div class="form-control mt-2 pb-5">
            <button class="btn w-[10%] mx-auto bg-[#1bd1a4] text-white">Save Info</button>
            <i class="bi bi-0-square-fill"></i>
          </div>
    </div>
</body>

</html>