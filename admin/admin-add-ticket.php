<!DOCTYPE html>
<html>

<head>
  <title>Admin Add Ticket - UTMS</title>
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
          <li><a href="./admin-add-ticket.php" class="text-[#1bd1a4]">Add Ticket</a></li>
          <li><a href="./admin-transaction-history.php">Transaction History</a></li>
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
    <div class="w-[80%] mx-auto pt-20">

      <h1 class="font-bold text-3xl text-center mb-5">Add New Ticket</h1>

      <div class="w-full h-full flex flex-col justify-center items-center">
        <form action='process.php' method='post' class="card flex-shrink-0 w-[45%] mx-auto shadow-2xl bg-base-100">
          <div class="card-body">
            <div class="form-control">
              <label class="label">
                <span class="label-text">Ticket ID</span>
              </label>
              <input name='ticket_id' type="text" placeholder="Ticket Id" class="input input-bordered" />
            </div>
            <div class="form-control">
              <label class="label">
                <span class="label-text">Description</span>
              </label>
              <textarea name='description' class="textarea textarea-bordered" placeholder="Description"></textarea>
            </div>
            <div class="form-control">
              <label class="label">
                <span class="label-text">Status</span>
              </label>
              <input name='status' type="text" placeholder="Status" class="input input-bordered" />
            </div>
            <div class="form-control">
              <label class="label">
                <span class="label-text">Priority</span>
              </label>
              <input name='priority' type="text" placeholder="Priority" class="input input-bordered" />
            </div>
            <div class="form-control">
              <label class="label">
                <span class="label-text">Total amount of Ticket</span>
              </label>
              <input name='total_amount_of_ticket' type="text" placeholder="Total Amount of Ticket" class="input input-bordered" />
            </div>
            <div class="form-control">
              <label class="label">
                <span class="label-text">Ticket Price</span>
              </label>
              <input name='ticket_price' type="text" placeholder="Ticket Price" class="input input-bordered" />
            </div>
            <div class="form-control mt-5">
              <select name='ticket_type' class="select select-bordered w-full">
                <option disabled selected>Ticket Type</option>
                <option>Bus</option>
                <option>Train</option>
                <option>Plane</option>
                <option>Launch</option>
              </select>
            </div>
          </div>

          <div class="form-control mt-2 pb-5">
            <input type="submit" name="create" value="Add Ticket" class="btn w-[80%] mx-auto bg-[#1bd1a4] text-white">
          </div>
        </form>
      </div>
    </div>

</body>

</html>