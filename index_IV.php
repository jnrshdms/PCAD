<?php
include 'process/pcs/index.php';
include 'dist/js/adminlte.miin.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PCAD | Dashboard - new layout</title>

    <link rel="icon" href="dist/img/pcad_logo.ico" type="image/x-icon" />
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="dist/css/font.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="plugins/ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Sweet Alert -->
    <link rel="stylesheet" href="plugins/sweetalert2/dist/sweetalert2.min.css">

    <style>
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #383B46;
            border-radius: 10px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #332D2D;
        }

        @font-face {
            font-family: 'Poppins';
            src: url('dist/font/poppins/Poppins-Regular.ttf') format('truetype');
        }

        @media screen and (min-width: 1366px) and (max-width: 1366px) {
            .container-fluid {
                width: 100%;
            }
        }

        @media screen and (min-width: 1920px) and (max-width: 1920px) {
            .container-fluid {
                width: 100%;
            }
        }

        body {
            /* background: #292C35; */
            font-family: 'Poppins', sans-serif;

            /* for toggle mode */
            background-color: #FDFDFD;
            min-height: 100vh;
            margin: 0;
            transition: background 0.2s linear;
            cursor: pointer;
        }

        table {
            border-collapse: separate;
            border-spacing: 10px;
            width: 100%;
        }

        /* for inspection output scroll */
        table.scrolldown {
            width: 100%;

            /* border-collapse: collapse; */
            border-spacing: 0;
            border: 2px solid black;
        }

        /* To display the block as level element */
        table.scrolldown tbody,
        table.scrolldown thead {
            display: block;
        }

        table.scrolldown tbody {
            height: 168px;
            overflow-y: auto;
            overflow-x: hidden;
        }

        .darkest-modal .modal-backdrop {
            background-color: rgba(0, 0, 0, 1);
        }

        /* =============== ADDITIONAL CSS FOR NEW LAYOUT*/
        .icon-h1,
        .icon-h2,
        .icon-h3,
        .icon-h4 {
            width: 45px;
        }

        .header-width {
            width: 25%;
        }

        .header-div {
            display: flex;
        }

        .header-div-2 {
            width: 20%;
            display: grid;
            place-content: center;
        }

        .header-div-3 {
            width: 80%;
        }

        .header-title {
            margin: 0;
            padding-top: 10px;
            font-size: 18px;
        }

        .header-content {
            margin: 0;
            padding-right: 30px;
            font-size: 35px;
            font-weight: bold;
            text-align: right;
        }

        /*  */
        .plan-div {
            display: flex;
            justify-content: space-between;
        }

        .plan-container {
            width: 33%;
        }

        .acc-eff-container {
            width: 33%;
        }

        .hourly-container {
            width: 33%;
        }

        .plan-title {
            text-align: left;
            font-size: 20px;
            padding-left: 10px;
            background: #F4F4F4;
            border: 1px solid #F4F4F4;
            border-radius: 5px;
            height: 40px;
        }

        .plan-sub-title {
            text-align: center;
            font-size: 18px;
            width: 33%;
        }

        .plan-content {
            text-align: center;
            font-size: 45px;
            font-weight: bold;
        }

        /*  */
        .yield-div {
            display: flex;
            /* justify-content: space-between; */
        }

        .yield-container {
            width: 33%;
        }

        .inspection-container {
            width: 67%;
            margin-left: 11px;

            display: flex;
            flex-direction: row;
        }

        .inspection-container-2 {
            width: 35%;
        }

        .inspection-container-3 {
            width: 65%;
        }

        .yield-title {
            text-align: center;
            font-size: 20px;
            width: 50%;
        }

        .yield-sub-title {
            text-align: center;
            font-size: 18px;
            width: 33%;
        }

        .yield-content {
            text-align: center;
            font-size: 45px;
            font-weight: bold;
            width: 33%;
        }

        .inspection-title {
            text-align: left;
            padding-left: 10px;
            font-size: 20px;
        }

        .inspection-sub-title {
            text-align: center;
            font-size: 18px;
            width: 50%;

            background: #F4F4F4;
            border: 1px solid #F4F4F4;
            border-radius: 50px;
            height: 50px;
        }

        .inspection-sub-title-2 {
            text-align: center;
            font-size: 18px;
            width: 33%;

            background: #F4F4F4;
            border: 1px solid #F4F4F4;
            border-radius: 5px;
            height: 50px;
        }

        .inspection-content {
            text-align: center;
            font-size: 45px;
            font-weight: bold;
            width: 50%;
        }

        .icon-2 {
            width: 15px;
        }

        /*  */
        .manpower-div {
            display: flex;
            justify-content: space-between;
        }

        .pd-container {
            width: 33%;
        }

        .qa-container {
            width: 33%;
        }

        .other-container {
            width: 33%;
        }

        .manpower-title {
            text-align: center;
            font-size: 20px;
            background: #F4F4F4;
            border: 1px solid #F4F4F4;
            border-radius: 5px;
            height: 40px;
        }

        .manpower-content {
            font-size: 16px;
            padding-left: 15px;
            width: 50%;
        }

        .manpower-content-2 {
            font-size: 20px;
            width: 50%;
        }

        /*  */
        .process-design-div {
            display: flex;
        }

        .process-container {
            width: 33%;

        }

        .graphs-container {
            width: 67%;
            margin-left: 11px;
        }

        .process-title {
            text-align: left;
            padding-left: 10px;
            font-size: 20px;
            background: #F4F4F4;
            border: 1px solid #F4F4F4;
            border-radius: 5px;
            height: 40px;
        }

        .process-sub-title {
            font-size: 16px;
            padding-left: 15px;
        }

        .process-content {
            font-size: 20px;
        }

        .andon-container,
        .good-container,
        .ng-container {
            margin-left: 20px;
            margin-right: 20px;
            margin-top: 10px;
        }

        /* ================================================== */
        body[light-mode=dark] {
            background-color: #212529;
            color: #FFF;
        }

        body[light-mode="dark"] .card {
            background-color: #343a40;
            color: #FFF;
        }

        body[light-mode="dark"] .plan-title,
        body[light-mode="dark"] .inspection-sub-title,
        body[light-mode="dark"] .inspection-sub-title-2,
        body[light-mode="dark"] .manpower-title,
        body[light-mode="dark"] .process-title {
            background-color: #495057;
            color: #FFF;
            border: none;
        }

        body[light-mode="dark"] .icon-h1 {
            content: url('dist/img/car-light.png');
        }

        body[light-mode="dark"] .icon-h2 {
            content: url('dist/img/setting-light.png');
        }

        body[light-mode="dark"] .icon-h3 {
            content: url('dist/img/clock-light.png');
        }

        body[light-mode="dark"] .icon-h4 {
            content: url('dist/img/calendar-light.png');
        }

        body[light-mode="dark"] .icon-2 {
            content: url('dist/img/expand-light.png');
        }

        body[light-mode="dark"] .nav-icon-top {
            content: url('dist/img/up-arrow-light.png');
        }

        .checkbox {
            opacity: 0;
            position: absolute;
        }

        .checkbox-label {
            background-color: #111;
            width: 50px;
            height: 26px;
            border-radius: 50px;
            position: relative;
            padding: 5px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .fa-moon {
            color: #f1c40f;
        }

        .fa-sun {
            color: #f39c12;
        }

        .checkbox-label .ball {
            background-color: #fff;
            width: 22px;
            height: 22px;
            position: absolute;
            left: 2px;
            top: 2px;
            border-radius: 50%;
            transition: transform 0.2s linear;
        }

        .checkbox:checked+.checkbox-label .ball {
            transform: translateX(24px);
        }

        .support {
            position: absolute;
            right: 20px;
            bottom: 20px;
        }

        .support a {
            color: #292c35;
            font-size: 32px;
            backface-visibility: hidden;
            display: inline-block;
            transition: transform 0.2s ease;
        }

        .support a:hover {
            transform: scale(1.1);
        }

        /* ================================================== */
        .return-to-top {
            position: fixed;
            right: 15px;
            bottom: 15px;
            border: none;
            background: none;
            border-radius: 15%;
        }

        .return-to-top:hover {
            border: none;
        }

        .nav-icon-top {
            cursor: pointer;
            height: 50px;
        }
    </style>
</head>

<body>
    <!-- ===================== LIGHT/DARK MODE TOGGLE-->
    <div class="mt-3 ml-2">
        <input type="checkbox" class="checkbox" id="checkbox" onclick="toggle_light_mode()">
        <label for="checkbox" class="checkbox-label">
            <i class="fas fa-moon"></i>
            <i class="fas fa-sun"></i>
            <span class="ball"></span>
        </label>
    </div>

    <!-- ===================== -->
    <input type="hidden" id="shift" value="<?= $shift ?>">
    <input type="hidden" id="shift_group" value="<?= $shift_group ?>">
    <input type="hidden" id="dept_pd" value="<?= $dept_pd ?>">
    <input type="hidden" id="dept_qa" value="<?= $dept_qa ?>">
    <input type="hidden" id="section_pd" value="<?= $section_pd ?>">
    <input type="hidden" id="section_qa" value="<?= $section_qa ?>">
    <input type="hidden" id="line_no" value="<?= $line_no ?>">
    <input type="hidden" id="registlinename" value="<?= $registlinename ?>">
    <input type="hidden" id="started" value="<?= $started; ?>">
    <input type="hidden" id="takt" value="<?= $takt; ?>">
    <input type="hidden" id="last_takt" value="<?= $last_takt; ?>">
    <input type="hidden" id="added_takt_plan" value="<?= $added_takt_plan; ?>">
    <input type="hidden" id="is_paused" value="<?= $is_paused; ?>">
    <input type="hidden" id="andon_line" name="andon_line" value="<?= $andon_line; ?>">
    <input type="hidden" id="final_process" name="final_process" value="<?= $final_process; ?>">

    <input type="hidden" id="yield_target" name="yield_target" value="<?= $yield_target; ?>">
    <input type="hidden" id="ppm_target" name="ppm_target" value="<?= $ppm_target; ?>">
    <input type="hidden" id="acc_eff" name="acc_eff" value="<?= $acc_eff; ?>">
    <input type="hidden" id="start_bal_delay" name="start_bal_delay" value="<?= $start_bal_delay; ?>">
    <input type="hidden" id="work_time_plan" name="work_time_plan" value="<?= $work_time_plan; ?>">

    <div class="container-fluid mt-3">
        <?php
        if ($processing) {
            ?>
            <?php
        } else {
            ?>
            <input type="hidden" id="processing" value="0">
            <div class="modal fade darkest-modal" id="plannotset" tabindex="-1" aria-labelledby="plannotsetLabel"
                aria-hidden="true" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
                data-backdrop="static" data-keyboard="false">
                <div class="modal-dialog modal-xl"
                    style="border-radius: 7px; border: 2px solid #CA3F3F; box-shadow: 0px 10px 10px 0px rgba(0, 0, 0, 0.25)">
                    <div class="modal-content" style="background-color: white;">
                        <div class="modal-body">
                            <h2 class="modal-title display-4 text-center pb-3" id="plannotsetLabel" style="color: #000;">
                                <b>Plan not set</b>
                            </h2>
                            <div class="row justify-content-center text-center mb-3">
                                <div class="col-3">
                                    <a href="pcs_page/setting.php" class="btn btn-lg btn-success text-white btn-close"
                                        id="setplanBtn">SET
                                        PLAN<b>[ 4 ]</b></a>
                                </div>
                                <div class="col-3">
                                    <a href="pcs_page/index.php" class="btn btn-lg btn-secondary text-white btn-close">MAIN
                                        MENU
                                        <b>[ 0 ]</b></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <?php
        }
        ?>
        <!-- <h2 class="text-center m-4">Production Conveyor Analysis Dashboard</h2> -->
        <div class="card">
            <!-- ==========HEADER CONTENT -->
            <table class="col-12">
                <tbody>
                    <tr>
                        <td class="header-width col-3 col-md-3" style="border-right: 1px solid #E0E0E0;">
                            <div class="header-div">
                                <div class="header-div-2">
                                    <img class="icon-h1" src="dist/img/car-dark.png"
                                        data-light-src="dist/img/car-light.png" data-dark-src="dist/img/car-dark.png">
                                </div>
                                <div class="header-div-3">
                                    <p class="header-title">Car Maker / Car Model</p>
                                    <p class="header-content">
                                        <?= $Carmodel ?>
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td class="header-width col-3 col-md-3" style="border-right: 1px solid #E0E0E0;">
                            <div class="header-div">
                                <div class="header-div-2">
                                    <img class="icon-h2" src="dist/img/setting-dark.png"
                                        data-light-src="dist/img/setting-light.png"
                                        data-dark-src="dist/img/setting-dark.png">
                                </div>
                                <div class="header-div-3">
                                    <p class="header-title">Line No.</p>
                                    <p class="header-content">
                                        <?= $line_no ?>
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td class="header-width col-3 col-md-3" style="border-right: 1px solid #E0E0E0;">
                            <div class="header-div">
                                <div class="header-div-2">
                                    <img class="icon-h3" src="dist/img/clock-dark.png"
                                        data-light-src="dist/img/clock-light.png"
                                        data-dark-src="dist/img/clock-dark.png">
                                </div>
                                <div class="header-div-3">
                                    <p class="header-title">Shift</p>
                                    <p class="header-content">
                                        <?= $shift ?>
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td class="header-width col-3 col-md-3">
                            <div class="header-div">
                                <div class="header-div-2">
                                    <img class="icon-h4" src="dist/img/calendar-dark.png"
                                        data-light-src="dist/img/calendar-light.png"
                                        data-dark-src="dist/img/calendar-dark.png">
                                </div>
                                <div class="header-div-3">
                                    <p class="header-title">Date</p>
                                    <p class="header-content">
                                        <?= $server_date_only ?>
                                    </p>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="plan-div">
            <!-- ==========PLAN, ACCOUNTING EFFICIENCY, AND HOURLY OUTPUT-->
            <div class="card plan-container">
                <!-- PLAN -->
                <table>
                    <input type="hidden" id="processing" value="1">
                    <thead>
                        <tr>

                            <td colspan="3" class="plan-title">Plan</td>
                        </tr>
                        <tr>
                            <td class="plan-sub-title">Target</td>
                            <td class="plan-sub-title">Actual</td>
                            <td class="plan-sub-title">Gap</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="plan-content plan_target_value" id="plan_target"
                                style="border-right: 1px solid #E0E0E0; background: #569BE2;"></td>
                            <td class="plan-content plan_actual_value" id="plan_actual"
                                style="border-right: 1px solid #E0E0E0; background: #569BE2;"></td>
                            <td class="plan-content plan_gap_value" id="plan_gap" style="background: #569BE2;"></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="card acc-eff-container">
                <!-- ACCOUNTING EFFICIENCY -->
                <table>
                    <thead>
                        <tr>
                            <td colspan="3" class="plan-title">Accounting Efficiency</td>
                        </tr>
                        <tr>
                            <td class="plan-sub-title">Target</td>
                            <td class="plan-sub-title">Actual</td>
                            <td class="plan-sub-title">Gap</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="plan-content" id="target_accounting_efficiency"
                                style="border-right: 1px solid #E0E0E0; background: #F6DB7F;">
                                <?= $acc_eff; ?>%
                            </td>
                            <td class="plan-content" id="actual_accounting_efficiency"
                                style="border-right: 1px solid #E0E0E0; background: #F6DB7F;"></td>
                            <td class="plan-content" id="gap_accounting_efficiency" style="background: #F6DB7F;"></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="card hourly-container">
                <!-- HOURLY OUTPUT -->
                <table>
                    <thead>
                        <tr>
                            <td colspan="3" class="plan-title">Hourly Output</td>
                        </tr>
                        <tr>
                            <td class="plan-sub-title"
                                onclick='window.open("viewer/hourly_output/hourly_output.php","_blank")'>Target &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<img
                                    class="icon-2" src="dist/img/expand-dark.png"
                                    data-light-src="dist/img/expand-light.png" data-dark-src="dist/img/expand-dark.png">
                            </td>
                            <td class="plan-sub-title"
                                onclick='window.open("viewer/hourly_output/hourly_output.php","_blank")'>Actual &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<img
                                    class="icon-2" src="dist/img/expand-dark.png"
                                    data-light-src="dist/img/expand-light.png" data-dark-src="dist/img/expand-dark.png">
                            </td>
                            <td class="plan-sub-title"
                                onclick='window.open("viewer/hourly_output/hourly_output.php","_blank")'>Gap &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<img
                                    class="icon-2" src="dist/img/expand-dark.png"
                                    data-light-src="dist/img/expand-light.png" data-dark-src="dist/img/expand-dark.png">
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="plan-content" id="target_hourly_output"
                                onclick='window.open("viewer/hourly_output/hourly_output.php","_blank")'
                                style="border-right: 1px solid #E0E0E0; background: #38C578;">
                            </td>
                            <td class="plan-content" id="actual_hourly_output"
                                onclick='window.open("viewer/hourly_output/hourly_output.php","_blank")'
                                style="border-right: 1px solid #E0E0E0; background: #38C578;">
                            </td>
                            <td class="plan-content" id="gap_hourly_output"
                                onclick='window.open("viewer/hourly_output/hourly_output.php","_blank")'
                                style="background: #38C578;"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="yield-div">
            <!-- ========== YIELD/PPM, INSPECTION OUTPUT-->
            <div class="card yield-container">
                <!-- yield, ppm -->
                <table>
                    <thead>
                        <tr>
                            <td colspan="3" class="yield-title" style="border-right: 1px solid #E0E0E0;">Yield</td>
                            <td colspan="3" class="yield-title">PPM</td>
                        </tr>
                    </thead>
                </table>
                <table>
                    <tbody>
                        <tr style="border-bottom: 1px solid #E0E0E0;">
                            <td class="yield-content">
                                <?= $yield_target; ?>%
                            </td>
                            <td class="yield-sub-title">Target</td>
                            <td class="yield-content">
                                <?= number_format($ppm_target); ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="yield-content" id="actual_yield" style="background: #F6DB7F;"></td>
                            <td class="yield-sub-title">Actual</td>
                            <td class="yield-content" id="actual_ppm" style="background: #DD6A5B;"></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="card inspection-container">
                <!-- overall inspection, inspection details -->
                <div class="inspection-container-2">
                    <!-- overall inspection -->
                    <table>
                        <thead>
                            <tr>
                                <td class="inspection-title">Overall Inspection</td>
                            </tr>
                        </thead>
                    </table>
                    <table>
                        <tbody>
                            <tr>
                                <td class="inspection-sub-title"
                                    onclick='window.open("viewer/good_inspection_details/inspection_details.php","_blank")'>
                                    Good &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<img class="icon-2" src="dist/img/expand-dark.png"
                                        data-light-src="dist/img/expand-light.png"
                                        data-dark-src="dist/img/expand-dark.png">
                                </td>
                                <td class="inspection-sub-title"
                                    onclick='window.open("viewer/ng_inspection_details/inspection_details_ng.php","_blank")'>
                                    NG &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<img class="icon-2" src="dist/img/expand-dark.png"
                                        data-light-src="dist/img/expand-light.png"
                                        data-dark-src="dist/img/expand-dark.png">
                                </td>
                            </tr>
                            <tr>
                                <td class="inspection-content" id="insp_overall_g" style="background: #38C578;"></td>
                                <td class="inspection-content" id="insp_overall_ng" style="background: #DD6A5B;"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="inspection-container-3">
                    <!-- inspection details -->
                    <table>
                        <thead>
                            <td class="inspection-sub-title-2">Good</td>
                            <td class="inspection-sub-title-2">Inspection</td>
                            <td class="inspection-sub-title-2">NG</td>
                        </thead>
                        <tbody id="inspection_process_list_copy">
                            <tr></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="manpower-div">
            <!-- ========== PD MANPOWER, QA MANPOWER, OTHER DETAILS -->
            <div class="card pd-container">
                <!-- pd manpower -->
                <table>
                    <thead>
                        <tr>
                            <td colspan="2" class="manpower-title"
                                onclick='window.open("http://172.25.116.188:3000/emp_mgt/viewer/dashboard.php","_blank")'>
                                PD Manpower &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<img class="icon-2" src="dist/img/expand-dark.png"
                                    data-light-src="dist/img/expand-light.png" data-dark-src="dist/img/expand-dark.png">
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="manpower-content">Plan:</td>
                            <td class="manpower-content-2 pl-5" id="total_pd_mp"></td>
                        </tr>
                        <tr>
                            <td class="manpower-content">Actual:</td>
                            <td class="manpower-content-2 pl-5" id="total_present_pd_mp"></td>
                        </tr>
                        <tr>
                            <td class="manpower-content">Absent:</td>
                            <td class="manpower-content-2 pl-5" id="total_absent_pd_mp"></td>
                        </tr>
                        <tr>
                            <td class="manpower-content">Support:</td>
                            <td class="manpower-content-2 pl-5" id="total_pd_mp_line_support_to"></td>
                        </tr>
                        <tr>
                            <td class="manpower-content">Absent Rate:</td>
                            <td class="manpower-content-2 pl-5" id="absent_ratio_pd_mp"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card qa-container">
                <!-- qa manpower -->
                <table>
                    <thead>
                        <tr>
                            <td colspan="2" class="manpower-title"
                                onclick='window.open("http://172.25.116.188:3000/emp_mgt/viewer/dashboard.php","_blank")'>
                                QA Manpower &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<img class="icon-2" src="dist/img/expand-dark.png"
                                    data-light-src="dist/img/expand-light.png" data-dark-src="dist/img/expand-dark.png">
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="manpower-content">Plan:</td>
                            <td class="manpower-content-2 pl-5" id="total_qa_mp"></td>
                        </tr>
                        <tr>
                            <td class="manpower-content">Actual:</td>
                            <td class="manpower-content-2 pl-5" id="total_present_qa_mp"></td>
                        </tr>
                        <tr>
                            <td class="manpower-content">Absent:</td>
                            <td class="manpower-content-2 pl-5" id="total_absent_qa_mp"></td>
                        </tr>
                        <tr>
                            <td class="manpower-content">Support:</td>
                            <td class="manpower-content-2 pl-5" id="total_qa_mp_line_support_to"></td>
                        </tr>
                        <tr>
                            <td class="manpower-content">Absent Rate:</td>
                            <td class="manpower-content-2 pl-5" id="absent_ratio_qa_mp"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card other-container">
                <!-- other details -->
                <table>
                    <thead>
                        <tr>
                            <td colspan="2" class="manpower-title"
                                onclick='window.open("http://172.25.116.188:3000/emp_mgt/viewer/dashboard.php","_blank")'>
                                Other Details &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<img class="icon-2" src="dist/img/expand-dark.png"
                                    data-light-src="dist/img/expand-light.png" data-dark-src="dist/img/expand-dark.png">
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="manpower-content">Starting Balance Delay:</td>
                            <td class="manpower-content-2 pl-5">
                                <?= $start_bal_delay; ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="manpower-content">Conveyor Speed:</td>
                            <td class="manpower-content-2 pl-5" id="taktset"></td>
                        </tr>
                        <tr>
                            <td class="manpower-content">Takt Time:</td>
                            <td class="takt-value manpower-content-2 pl-5"></td>
                        </tr>
                        <tr>
                            <td class="manpower-content">Working Time Plan:</td>
                            <td class="manpower-content-2 pl-5">
                                <?= $work_time_plan; ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="manpower-content">Working Time Actual:</td>
                            <td class="manpower-content-2 pl-5"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="process-design-div">
            <!-- ========== PROCESS DESIGN, HOURLY GRAPHS -->
            <div class="card process-container">
                <!-- process design -->
                <table>
                    <thead>
                        <tr style="height: 40px;">
                            <td class="process-title" colspan="2">Process Design</td>
                            <td class="process-title">Actual</td>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class="process-sub-title">Sub Assy</td>
                            <td class="process-content"></td>
                            <td class="process-content"></td>
                        </tr>
                        <tr>
                            <td class="process-sub-title">Bukumi</td>
                            <td class="process-content"></td>
                            <td class="process-content"></td>
                        </tr>
                        <tr>
                            <td class="process-sub-title">Parts</td>
                            <td class="process-content"></td>
                            <td class="process-content"></td>
                        </tr>
                        <tr>
                            <td class="process-sub-title">Layout</td>
                            <td class="process-content"></td>
                            <td class="process-content"></td>
                        </tr>
                        <tr>
                            <td class="process-sub-title">Assy</td>
                            <td class="process-content"></td>
                            <td class="process-content"></td>
                        </tr>
                        <tr>
                            <td class="process-sub-title">Shiage</td>
                            <td class="process-content"></td>
                            <td class="process-content"></td>
                        </tr>
                        <tr>
                            <td class="process-sub-title">Dimension</td>
                            <td class="process-content"></td>
                            <td class="process-content"></td>
                        </tr>
                        <tr>
                            <td class="process-sub-title">ECT</td>
                            <td class="process-content"></td>
                            <td class="process-content"></td>
                        </tr>
                        <tr>
                            <td class="process-sub-title">ECT (Clamp)</td>
                            <td class="process-content"></td>
                            <td class="process-content"></td>
                        </tr>
                        <tr>
                            <td class="process-sub-title"> Clamp Checking Option</td>
                            <td class="process-content"></td>
                            <td class="process-content"></td>
                        </tr>
                        <tr>
                            <td class="process-sub-title">Appearance</td>
                            <td class="process-content"></td>
                            <td class="process-content"></td>
                        </tr>
                        <tr>
                            <td class="process-sub-title">Assurance</td>
                            <td class="process-content"></td>
                            <td class="process-content"></td>
                        </tr>
                        <tr>
                            <td class="process-sub-title">Jr Staff</td>
                            <td class="process-content"></td>
                            <td class="process-content"></td>
                        </tr>
                        <tr>
                            <td class="process-sub-title">Expert</td>
                            <td class="process-content"></td>
                            <td class="process-content"></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="card graphs-container">
                <!-- andon count graph -->
                <!-- <div class="card andon-container"> -->
                <div id="chart-container1">
                    <canvas id="andon_hourly_chart" height="60"></canvas>
                </div>
                <!-- </div> -->

                <!-- good hourly count graph -->
                <!-- <div class="card good-container"> -->
                <div id="chart-container2">
                    <canvas id="hourly_output_summary_chart" height="60"></canvas>
                </div>
                <!-- </div> -->

                <!-- ng hourly count graph -->
                <!-- <div class="card ng-container"> -->
                <div id="chart-container3">
                    <canvas id="ng_summary_chart" height="60"></canvas>
                </div>
                <!-- </div> -->
            </div>
        </div>

        <!-- Buttons (Progress Counter TV) -->
        <!-- <div class="row">
            <div class="col-4">
                <div>
                    <button type="button" class="btn btn-danger btn-block btn-pause">PAUSE <b>[ 1 ]</b></button>
                </div>
                <div>
                    <button type="button" class="btn btn-info btn-block btn-resume d-none">RESUME<b>[ 3 ]</b></button>
                </div>
            </div>
            <div class="col-4">
                <button type="button" class="btn btn-success btn-block btn-target ">END PROCESS <b>[ 2 ]</b></button>
            </div>
            <div class="col-4">
                <a type="button" class="btn btn-secondary btn-block btn-menu" href="pcs_page/index.php">MAIN MENU <b>[ 0
                        ]</b></a>
            </div>
        </div> -->
        <!-- <div class="col-3">
            <a href="pcs_page/setting.php" class="btn  btn-primary btn-set d-none" id="setnewTargetBtn">SET NEW
                TARGET<b>[ 5 ]</b></a>
        </div> -->

        <!-- return to top -->
        <button id="back-to-top" type="button" class="return-to-top"><img class="nav-icon-top nav-icon"
                src="dist/img/up-arrow-dark.png" data-light-src="dist/img/up-arrow-light.png"
                data-dark-src="dist/img/up-arrow-dark.png"></button>
    </div>
</body>

<!-- jQuery -->
<script src="plugins/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Chart JS -->
<script src="node_modules/chart.js/dist/chart.umd.js"></script>
<script src="plugins/chart.js/annotation/chartjs-plugin-annotation-1.0.2.js"></script>
<!--Moment JS -->
<script src="plugins/moment-js/moment.min.js"></script>
<script src="plugins/moment-js/moment-duration-format.min.js"></script>

<script>
    let chartAndonHourly;
    let chartHourlyOutput;
    let chartNGhourly;

    // Set LocalStorage for these variables
    localStorage.setItem("andon_line", $("#andon_line").val());
    localStorage.setItem("shift", $("#shift").val());

    $(document).ready(function () {
        // Call these functions initially to load the data from PCAD and other Systems
        // Set interval to refresh data every 30 seconds
        // 30000 milliseconds = 30 seconds
        get_accounting_efficiency();
        setInterval(get_accounting_efficiency, 30000);
        get_hourly_output();
        setInterval(get_hourly_output, 30000);
        get_yield();
        setInterval(get_yield, 30000);
        get_ppm();
        setInterval(get_ppm, 30000);

        // INSPECTION
        get_inspection_list_copy();
        setInterval(get_inspection_list_copy, 10000);
        get_overall_inspection();
        setInterval(get_overall_inspection, 10000);

        // Call count_emp initially to load the data from employee management system
        count_emp();
        // Set interval to refresh data every 15 seconds
        setInterval(count_emp, 15000); // 15000 milliseconds = 15 seconds

        // =====hourly graphs=====
        andon_hourly_graph();
        setInterval(andon_hourly_graph, 30000);

        get_hourly_output_chart();
        setInterval(get_hourly_output_chart, 30000);

        ng_graph();
        setInterval(ng_graph, 30000);
    });

    // return to top button
    (function ($) {
        /*--Scroll Back to Top Button Show--*/
        $(window).scroll(function () {
            if ($(this).scrollTop() > 300) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });

        //Click event scroll to top button jquery
        $('#back-to-top').click(function () {
            $('html, body').animate({ scrollTop: 0 }, 600);
            return false;
        });
    })(jQuery);

    // toggle mode
    function toggle_light_mode() {
        var app = document.getElementsByTagName("BODY")[0];
        if (localStorage.lightMode == "dark") {
            localStorage.lightMode = "light";
            app.setAttribute("light-mode", "light");

            updateChartColors('light');
        } else {
            localStorage.lightMode = "dark";
            app.setAttribute("light-mode", "dark");

            updateChartColors('dark');
        }
    }

    // for chart dark mode
    function updateChartColors(mode) {
        var chart1 = document.getElementById('andon_hourly_chart');
        if (chart1) {
            var chartInstance1 = Chart.getChart(chart1);
            if (chartInstance1) {
                if (mode === 'dark') {
                    // Set dark mode colors for chart elements
                    chartInstance1.options.scales.y.ticks.color = '#DDD';
                    chartInstance1.options.scales.y.grid.color = '#555';
                    chartInstance1.options.scales.x.ticks.color = '#DDD';
                    chartInstance1.options.scales.x.grid.color = '#555';
                    chartInstance1.options.plugins.title.color = '#FFF';
                    chartInstance1.options.scales.y.title.color = '#FFF';
                } else {
                    // Set light mode colors for chart elements
                    chartInstance1.options.scales.y.ticks.color = '#000';
                    chartInstance1.options.scales.y.grid.color = '#ddd';
                    chartInstance1.options.scales.x.ticks.color = '#000';
                    chartInstance1.options.scales.x.grid.color = '#ddd';
                    chartInstance1.options.plugins.title.color = '#000';
                    chartInstance1.options.scales.y.title.color = '#000';
                }
                chartInstance1.update();
            }
        }

        var chart2 = document.getElementById('hourly_output_summary_chart');
        if (chart2) {
            var chartInstance2 = Chart.getChart(chart2);
            if (chartInstance2) {
                if (mode === 'dark') {
                    // Set dark mode colors for chart elements
                    chartInstance2.options.scales.y.ticks.color = '#DDD';
                    chartInstance2.options.scales.y.grid.color = '#555';
                    chartInstance2.options.scales.x.ticks.color = '#DDD';
                    chartInstance2.options.scales.x.grid.color = '#555';
                    chartInstance2.options.plugins.title.color = '#FFF';
                    chartInstance2.options.scales.y.title.color = '#FFF';
                } else {
                    // Set light mode colors for chart elements
                    chartInstance2.options.scales.y.ticks.color = '#000';
                    chartInstance2.options.scales.y.grid.color = '#ddd';
                    chartInstance2.options.scales.x.ticks.color = '#000';
                    chartInstance2.options.scales.x.grid.color = '#ddd';
                    chartInstance2.options.plugins.title.color = '#000';
                    chartInstance2.options.scales.y.title.color = '#000';
                }
                chartInstance2.update();
            }
        }

        var chart3 = document.getElementById('ng_summary_chart');
        if (chart3) {
            var chartInstance3 = Chart.getChart(chart3);
            if (chartInstance3) {
                if (mode === 'dark') {
                    // Set dark mode colors for chart elements
                    chartInstance3.options.scales.y.ticks.color = '#DDD';
                    chartInstance3.options.scales.y.grid.color = '#555';
                    chartInstance3.options.scales.x.ticks.color = '#DDD';
                    chartInstance3.options.scales.x.grid.color = '#555';
                    chartInstance3.options.plugins.title.color = '#FFF';
                    chartInstance3.options.scales.y.title.color = '#FFF';
                } else {
                    // Set light mode colors for chart elements
                    chartInstance3.options.scales.y.ticks.color = '#000';
                    chartInstance3.options.scales.y.grid.color = '#ddd';
                    chartInstance3.options.scales.x.ticks.color = '#000';
                    chartInstance3.options.scales.x.grid.color = '#ddd';
                    chartInstance3.options.plugins.title.color = '#000';
                    chartInstance3.options.scales.y.title.color = '#000';
                }
                chartInstance3.update();
            }
        }
    }
    // ==========================================================================================

    // Apply gradient styles for specific cell with ID 'total_pd_mp'
    function applyGradientStyles(selector, color, dataAttribute) {
        document.querySelectorAll(selector).forEach(function (cell) {
            var value = parseInt(cell.dataset[dataAttribute]);
            var gradientValue = value + '%';
            cell.style.background = 'linear-gradient(to right, ' + color + ' ' + gradientValue + ', #f6f6f6 ' + gradientValue + ')';
        });
    }

    // Example usage:
    applyGradientStyles('.numeric-cell', '#abd2fa', 'value');
    applyGradientStyles('.numeric-cell-acct', '#ffe89c', 'value');
    applyGradientStyles('.numeric-cell-hourly', '#95d5b2', 'value');

    // Apply gradient styles for specific cell with ID 'total_pd_mp'
    var specificCell = document.getElementById('total_pd_mp');
    if (specificCell) {
        var specificValue = parseInt(specificCell.dataset.value);
        var specificGradientValue = specificValue + '%';
        specificCell.style.background = 'linear-gradient(to right, #your_specific_color ' + specificGradientValue + ', #f6f6f6 ' + specificGradientValue + ')';
    }
    // ==========================================================================================

    // Handle click event for GOOD cell
    $('#insp_overall_g').on('click', function () {
        var specificUrl = '../pcad/viewer/good_inspection_details/inspection_details.php?card=good';
        window.open(specificUrl, '_blank');
    });

    // Handle click event for NG cell
    $('#insp_overall_ng').on('click', function () {
        var specificUrl = '../pcad/viewer/ng_inspection_details/inspection_details_ng.php?card=ng';
        window.open(specificUrl, '_blank');
    });
</script>

<?php
include 'javascript/pcs.php';
include 'javascript/pcad.php';
include 'javascript/emp_mgt.php';
include 'javascript/andon.php';
include 'javascript/inspection_output.php';
include 'javascript/hourly_graph.php';
?>

</html>
<!-- /.navbar -->