<?php session_start(); ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>
<?php include "../../Backend/db/connect.db.php";
include "../assets/header.php";
include "../assets/user_nav.php";

$sql = "SELECT * FROM users";
$query = $db->query($sql);

?>

<div class="container pr-1">
  <div class="text-center">
    <div class="subtitle alt-font"><span class="text-primary">#04</span><span class="title">Timetable</span></div>
  </div>
  <div class="row">
    <div class="col-sm-15 ">
      <div class="schedule-table">
        <table class="table bg-white">
          <thead>
            <tr>
              <th>วัน / เวลา</th>
              <th>โฮมรูม</th>
              <th>8.30 - 9.30</th>
              <th>9.30 - 10.30</th>
              <th>10.30 - 11.30</th>
              <th>11.30 - 12.30</th>
              <th>12.30 - 13.30</th>
              <th>13.30 - 14.30</th>
              <th>14.30 - 15.30</th>
              <th>15.30 - 16.30</th>
              <th>16.30 - 17.30</th>
              <th>17.30 - 18.30</th>
              <th>18.30 - 19.30</th>
              <th>19.30 - 20.30</th>
              <th>20.30 - 21.30</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="day">วันจันทร์</td>

            </tr>
            <tr>
              <td class="day">วันอังคาร</td>

            </tr>
            <tr>
              <td class="day">วันพุธ</td>

            </tr>
            <tr>
              <td class="day">วันพฤหัสบดี</td>
              <td>ทดสอบ</td>

            </tr>
            <tr>
              <td class="day">วันศุกร์</td>

            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>

<style>
  .schedule-table table thead tr {
    background: #86d4f5;
  }

  .schedule-table table thead th {
    color: #fff;
  }

  .schedule-table table thead th:before {
    content: "";
    width: 3px;
    height: 35px;
    background: rgba(255, 255, 255, 0.2);
    position: absolute;
    right: -1px;
    top: 50%;
    transform: translateY(-50%);
  }

  .schedule-table table thead th.last:before {
    content: none;
  }

  .schedule-table table tbody td {
    vertical-align: middle;
    border: 1px solid #e2edf8;
    font-weight: 500;
    padding: 30px;
    text-align: center;
  }

  .schedule-table table tbody td.day {
    font-size: 22px;
    font-weight: 600;
    background: #f0f1f3;
    border: 1px solid #e4e4e4;

  }


  .schedule-table table tbody td.active p {
    font-size: 16px;
    line-height: normal;
    margin-bottom: 0;
  }

  .schedule-table table tbody td .hover h4 {
    font-weight: 700;
    font-size: 20px;
    color: #ffffff;
    margin-bottom: 5px;
  }

  .schedule-table table tbody td .hover p {
    font-size: 16px;
    margin-bottom: 5px;
    color: #ffffff;
    line-height: normal;
  }

  .schedule-table table tbody td .hover span {
    color: #ffffff;
    font-weight: 600;
    font-size: 18px;
  }

  .schedule-table table tbody td.active::before {
    position: absolute;
    content: "";
    min-width: 100%;
    min-height: 100%;
    transform: scale(0);
    top: 0;
    left: 0;
    z-index: -1;
    border-radius: 0.25rem;
    transition: all 0.3s linear 0s;
  }

  .schedule-table table tbody td .hover {
    position: absolute;
    left: 50%;
    top: 50%;
    width: 120%;
    height: 120%;
    transform: translate(-50%, -50%) scale(0.8);
    z-index: 99;
    background: #86d4f5;
    border-radius: 0.25rem;
    padding: 25px 0;
    visibility: hidden;
    opacity: 0;
    transition: all 0.3s linear 0s;
  }

  .schedule-table table tbody td.active:hover .hover {
    transform: translate(-50%, -50%) scale(1);
    visibility: visible;
    opacity: 1;
  }

  .schedule-table table tbody td.day:hover {
    background: #86d4f5;
    color: #fff;
    border: 1px solid #86d4f5;
  }

  @media screen and (max-width: 1199px) {
    .schedule-table {
      display: block;
      width: 100%;
      overflow-x: auto;
    }

    .schedule-table table thead th {
      padding: 25px 40px;
    }

    .schedule-table table tbody td {
      padding: 20px;
    }

    .schedule-table table tbody td.active h4 {
      font-size: 18px;
    }

    .schedule-table table tbody td.active p {
      font-size: 15px;
    }

    .schedule-table table tbody td.day {
      font-size: 20px;
    }

    .schedule-table table tbody td .hover {
      padding: 15px 0;
    }

    .schedule-table table tbody td .hover span {
      font-size: 17px;
    }
  }

  @media screen and (max-width: 991px) {
    .schedule-table table thead th {
      font-size: 18px;
      padding: 20px;
    }

    .schedule-table table tbody td.day {
      font-size: 18px;
    }

    .schedule-table table tbody td.active h4 {
      font-size: 17px;
    }
  }

  @media screen and (max-width: 767px) {
    .schedule-table table thead th {
      padding: 15px;
    }

    .schedule-table table tbody td {
      padding: 15px;
    }

    .schedule-table table tbody td.active h4 {
      font-size: 16px;
    }

    .schedule-table table tbody td.active p {
      font-size: 14px;
    }

    .schedule-table table tbody td .hover {
      padding: 10px 0;
    }

    .schedule-table table tbody td.day {
      font-size: 18px;
    }

    .schedule-table table tbody td .hover span {
      font-size: 15px;
    }
  }

  @media screen and (max-width: 575px) {
    .schedule-table table tbody td.day {
      min-width: 135px;
    }
  }
</style>