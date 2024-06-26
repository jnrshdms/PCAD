<?php
include '../conn/pcad.php';
include '../server_date_time.php';
require '../conn/emp_mgt.php';
include '../lib/emp_mgt.php';

// $line_no = '2132';
// $line_no = $_GET['line_no'];
$registlinename = $_GET['registlinename']; // IRCS LINE (PCS)
$shift_group = '';

$processing = false;

if (isset($_GET['registlinename'])) {
    $registlinename = $_GET['registlinename'];
    $q = "SELECT * FROM t_plan WHERE IRCS_Line = '$registlinename' AND group = '$group'";
    $stmt = $conn_pcad->prepare($q);
    $stmt->execute();
    $res = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($res) {
        $started = $res['actual_start_DB'];
        $takt = $res['takt_secs_DB'];
        $last_takt = $res['last_takt_DB'];
        $last_update_DB = $res['last_update_DB'];
        $is_paused = $res['is_paused'];
        $line_no = $res['Line'];
        $shift_group = $res['group'];
        $Carmodel = $res['Carmodel'];
        $yield_target = $res['yeild_target'];
        $ppm_target = $res['ppm_target'];
        $acc_eff = $res['acc_eff'];
        $start_bal_delay = $res['start_bal_delay'];
        $work_time_plan = $res['work_time_plan'];


        $sql = "SELECT * FROM m_ircs_line WHERE ircs_line = '$registlinename'";
        $stmt = $conn_pcad->prepare($sql);
        $stmt->execute();
        $line_data = $stmt->fetch(PDO::FETCH_ASSOC);
        $line_no = $line_data['line_no'];
        $andon_line = $line_data['andon_line'];
        $final_process = $line_data['final_process'];


        if ($res) {
            $processing = true;
        }
        $secs_diff = strtotime(date('Y-m-d H:i:s')) - strtotime($last_update_DB);
        if ($takt > 0) {
            $added_takt_plan = floor($secs_diff / $takt);
        } else {
            $added_takt_plan = 0;
        }
    }
}

$dept_pd = 'PD2';
$dept_qa = 'QA';
$section_pd = get_section($line_no, $conn_emp_mgt);
$section_qa = get_section($line_no, $conn_emp_mgt);
// $section_qa = 'QA';
$shift = get_shift($server_time);
?>