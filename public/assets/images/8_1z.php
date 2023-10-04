<!DOCTYPE html>
<html lang="en">

<?php
    include_once("common_header.php");
?>
    
    <?php
    $sql = "SELECT * FROM sma JOIN poom ON sma.poombun = poom.poombun;";

    $result = mysqli_query($conn, $sql);
    ?>

<body class="fix-header fix-sidebar card-no-border">
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <?php
            include("topbar_header2.php");
        ?>
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php
            include("side_menu_form2.php");
        ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
			  <!-- ============================================================== -->
                <!-- Container fluid  -->
                <!-- ============================================================== -->
                <div class="container-fluid">
                    <!-- ============================================================== -->
                    <!-- Bread crumb and right sidebar toggle -->
                    <!-- ============================================================== -->
                    <div class="row page-titles">
                        <div class="col-md-5 align-self-center">
                            <h3 class="text-themecolor">시간당생산량</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">KPI</a></li>
                                <li class="breadcrumb-item active">시간당생산량</li>
                            </ol>
                        </div>
                        <div class="">
                            <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Bread crumb and right sidebar toggle -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Start Page Content -->
                    <!-- ============================================================== -->

                    <div class="row" id="foot">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body"> 
                                    <div class="table-responsive">
                                        <button class="btn btn-defalt" type="button">출하지시서 리스트</button>
                                        <p class="colorup pageup1">*리스트에 수량은 (총 생산량)시간당 생산량 입니다.</p>
										<div style="float:right">*작업지기~생산입고된 품목의 8시간 기분 시간당 생산량 입니다.</div>
                                        <table id="demo-foo-addrow"
                                               class="table table-bordered m-t-30 table-hover contact-list" data-paging="true"
                                               data-paging-size="7">
                                            <thead>
                                                <tr>
                                                    <th>품번</th>
                                                    <th>품명</th>
                                                    <th>입고년도</th>
                                                    <th>1월</th>
                                                    <th>2월</th>
                                                    <th>3월</th>
                                                    <th>4월</th>
                                                    <th>5월</th>
                                                    <th>6월</th>
                                                    <th>7월</th>
                                                    <th>8월</th>
                                                    <th>9월</th>
                                                    <th>10월</th>
                                                    <th>11월</th>
                                                    <th>12월</th>
                                                    <th>시간당생산량</th>
													
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    ?>
                                                <tr>
                                                    <th><?= $row['poomtype'] ?></th>
                                                    <th><?= $row['poombun'] ?></th>
                                                    <th><?= $row['smayear'] ?></th>
                                                    <th><span style="color: red;">(<?= $row['y1-1'] ?>)</span><?= $row['y1-2'] ?></th>
                                                    <th><span style="color: red;">(<?= $row['y2-1'] ?>)</span><?= $row['y2-2'] ?></th>
                                                    <th><span style="color: red;">(<?= $row['y3-1'] ?>)</span><?= $row['y3-2'] ?></th>
                                                    <th><span style="color: red;">(<?= $row['y4-1'] ?>)</span><?= $row['y4-2'] ?></th>
                                                    <th><span style="color: red;">(<?= $row['y5-1'] ?>)</span><?= $row['y5-2'] ?></th>
                                                    <th><span style="color: red;">(<?= $row['y6-1'] ?>)</span><?= $row['y6-2'] ?></th>
                                                    <th><span style="color: red;">(<?= $row['y7-1'] ?>)</span><?= $row['y7-2'] ?></th>
                                                    <th><span style="color: red;">(<?= $row['y8-1'] ?>)</span><?= $row['y8-2'] ?></th>
                                                    <th><span style="color: red;">(<?= $row['y9-1'] ?>)</span><?= $row['y9-2'] ?></th>
                                                    <th><span style="color: red;">(<?= $row['y10-1'] ?>)</span><?= $row['y10-2'] ?></th>
                                                    <th><span style="color: red;">(<?= $row['y11-1'] ?>)</span><?= $row['y11-2'] ?></th>
                                                    <th><span style="color: red;">(<?= $row['y12-1'] ?>)</span><?= $row['y12-2'] ?></th>
                                                    <th><?= $row['poombun'] ?></th>
                                                </tr>
                                                <!--
                                                <tr>
                                                    <th>SA-1</th>
                                                    <th>라이트버튼</th>
                                                    <th>2019</th>
                                                    <th>2019</th>
                                                    <th>(0)0</th>
                                                    <th>(0)0</th>
                                                    <th>(0)0</th>
                                                    <th>(0)0</th>
                                                    <th>(0)0</th>
                                                    <th>(0)0</th>
                                                    <th>(0)0</th>
                                                    <th>(0)0</th>
                                                    <th>(0)0</th>
                                                    <th>(0)0</th>
                                                    <th>(0)0</th>
                                                    <th>(0)0</th>
                                                    <th>(0)0</th>
                                                </tr>
                                                -->
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End PAge Content -->
                    <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/node_modules/jquery/jquery.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="../assets/node_modules/bootstrap/js/popper.min.js"></script>
    <script src="../assets/node_modules/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../assets/node_modules/ps/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src="../assets/node_modules/raphael/raphael.min.js"></script>
    <script src="../assets/node_modules/morrisjs/morris.min.js"></script>
    <!--c3 JavaScript -->
    <script src="../assets/node_modules/d3/d3.min.js"></script>
    <script src="../assets/node_modules/c3-master/c3.min.js"></script>
    <!-- Popup message jquery -->
    <script src="../assets/node_modules/toast-master/js/jquery.toast.js"></script>
    <!-- Chart JS -->
    <script src="js/dashboard1.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="../assets/node_modules/styleswitcher/jQuery.style.switcher.js"></script>
    <?php
            mysqli_close($conn); // 디비 접속 닫기
            ?>
</body>

</html>