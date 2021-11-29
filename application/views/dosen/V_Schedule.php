<style>
    html,
    body {
        max-width: 100%;
        overflow-x: hidden;
    }
</style>
<div id="layoutSidenav_content">
    <main>
        <div class="card">
            <!-- <button class="btn btn-outline-primary col-sm-6" id="previous" onclick="previous()">Previous</button> -->
            <div class="row">
                <div class="col-1">
                    <div class="prev" id="previous" onclick="previous()"><i class='bx bx-chevron-left' style="font-size: 64px;"></i></div>
                </div>
                <div class="col-5">
                    <h3 class="card-header" id="monthAndYear"></h3>
                </div>
                <div class="col-1">
                    <div class="next" id="next" onclick="next()"><i class='bx bx-chevron-right' style="font-size: 64px;"></i></div>
                </div>
                <?php
                $tanggal = "2013-11-20";
                //pisahkan tanggal
                $array1 = explode("-", $tanggal);
                $tahun = $array1[0];
                $bulan = $array1[1];
                // $sisa1 = $array1[2];
                $tanggal = $array1[2];
                // $array2 = explode(" ", $sisa1);
                // $tanggal = $array2[0];
                // $sisa2 = $array2[1];
                // $array3 = explode(":", $sisa2);
                // $jam = $array3[0];
                // $menit = $array3[1];
                // $detik = $array3[2];
                //ubah nama bulan menjadi bahasa indonesia
                switch ($bulan) {
                    case "01";
                        $bulan = "0";
                        break;
                    case "02";
                        $bulan = "1";
                        break;
                    case "03";
                        $bulan = "2";
                        break;
                    case "04";
                        $bulan = "3";
                        break;
                    case "05";
                        $bulan = "4";
                        break;
                    case "06";
                        $bulan = "5";
                        break;
                    case "07";
                        $bulan = "6";
                        break;
                    case "08";
                        $bulan = "7";
                        break;
                    case "09";
                        $bulan = "8";
                        break;
                    case "10";
                        $bulan = "9";
                        break;
                    case "11";
                        $bulan = "10";
                        break;
                    case "12";
                        $bulan = "11";
                        break;
                }
                // echo $tanggal . "-" . $bulan . "-" . $tahun;
                ?>
                <div class="col-5">
                    <form class="form-inline mt-3">
                        <label class="lead mr-2 ml-2" for="month">Loncat ke: </label>
                        <select class="form-control col-sm-4" name="month" id="month" onchange="jump()">
                            <option value=0>Jan</option>
                            <option value=1>Feb</option>
                            <option value=2>Mar</option>
                            <option value=3>Apr</option>
                            <option value=4>May</option>
                            <option value=5>Jun</option>
                            <option value=6>Jul</option>
                            <option value=7>Aug</option>
                            <option value=8>Sep</option>
                            <option value=9>Oct</option>
                            <option value=10>Nov</option>
                            <option value=11>Dec</option>
                        </select>


                        <label for="year"></label><select class="form-control col-sm-4" name="year" id="year" onchange="jump()">
                            <?php for ($i = 1990; $i < 2030; $i++) : ?>
                                <option value=<?= $i; ?>><?= $i; ?></option>
                            <?php endfor; ?>
                        </select>
                    </form>
                </div>
            </div>

            <!-- Build Calender -->
            <table class="table table-bordered table-responsive-sm" id="calendar" style="height: 50vh;">
                <thead>
                    <tr>
                        <th>Sun</th>
                        <th>Mon</th>
                        <th>Tue</th>
                        <th>Wed</th>
                        <th>Thu</th>
                        <th>Fri</th>
                        <th>Sat</th>
                    </tr>
                </thead>
                <tbody id="calendar-body"></tbody>
            </table>
        </div>
    </main>

    <script>
        let today = new Date();
        console.log(today.getMonth());
        let currentMonth = today.getMonth();
        let currentYear = today.getFullYear();
        let selectYear = document.getElementById("year");
        let selectMonth = document.getElementById("month");
        let months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
        let monthAndYear = document.getElementById("monthAndYear");
        showCalendar(currentMonth, currentYear);

        function next() {
            currentYear = (currentMonth === 11) ? currentYear + 1 : currentYear;
            currentMonth = (currentMonth + 1) % 12;
            showCalendar(currentMonth, currentYear);
        }

        function previous() {
            currentYear = (currentMonth === 0) ? currentYear - 1 : currentYear;
            currentMonth = (currentMonth === 0) ? 11 : currentMonth - 1;
            showCalendar(currentMonth, currentYear);
        }

        function jump() {
            currentYear = parseInt(selectYear.value);
            currentMonth = parseInt(selectMonth.value);
            showCalendar(currentMonth, currentYear);
        }

        function showCalendar(month, year) {
            let firstDay = (new Date(year, month)).getDay();
            let daysInMonth = 32 - new Date(year, month, 32).getDate();
            let tbl = document.getElementById("calendar-body"); // body of the calendar
            // clearing all previous cells
            tbl.innerHTML = "";
            // filing data about month and in the page via DOM.
            monthAndYear.innerHTML = months[month] + " " + year;
            selectYear.value = year;
            selectMonth.value = month;
            // creating all cells
            let date = 1;
            for (let i = 0; i < 6; i++) {
                // creates a table row
                let row = document.createElement("tr");
                //creating individual cells, filing them up with data.
                for (let j = 0; j < 7; j++) {
                    if (i === 0 && j < firstDay) {
                        let cell = document.createElement("td");
                        let cellText = document.createTextNode("");
                        cell.appendChild(cellText);
                        row.appendChild(cell);
                    } else if (date > daysInMonth) {
                        break;
                    } else {
                        let cell = document.createElement("td");
                        let isi_tanggal = "";
                        if (date === today.getDate() && year === today.getFullYear() && month === today.getMonth()) {
                            cell.classList.add("bg-info");
                        } // color today's date
                        if (date == <?= $tanggal; ?> && month == <?= $bulan; ?>) {
                            console.log("Tanggal dan bulan sesuai");
                            cell.classList.add("bg-warning");
                            isi_tanggal = document.createTextNode(date + " [UTS!]");
                        } else if (date == 23 && month == 10) {
                            cell.classList.add("bg-warning");
                            isi_tanggal = document.createTextNode(date + " [UTS!]");
                        } else {
                            isi_tanggal = document.createTextNode(date);
                        }
                        let cellText = isi_tanggal;
                        cell.appendChild(cellText);
                        row.appendChild(cell);
                        date++;
                    }
                }
                tbl.appendChild(row); // appending each row into calendar body.
            }
        }
    </script>