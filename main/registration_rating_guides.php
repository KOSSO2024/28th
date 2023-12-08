<?php
	include_once('./include/head.php');

	$session_user = $_SESSION['USER'] ?? NULL;
	$session_app_type = (!empty($_SESSION['APP']) ? 'Y' : 'N');

	//230714 HUBDNC 앱 로그인 시 파라미터 추가 된 부분
	if(!empty($session_user) && $session_app_type == 'Y') {
		include_once('./include/app_header.php');
	} else {
		include_once('./include/header.php');
	}

	$add_section_class = (!empty($session_user) && $session_app_type == 'Y') ? 'app_version' : '';
?>

<!-- app일 시 app_version 클래스 추가 -->
<section class="container registration registration_rating_guides <?= $add_section_class; ?>">
	<!-- HUBDNCLHJ : app 메뉴 탭 -->
<?php
	if(!empty($session_user) && $session_app_type == 'Y') {
?>
	<div class="app_title_box">
		<h2 class="app_title">평점 안내<button type="button" class="app_title_prev" onclick="javascript:window.location.href='./app_index.php';"><img src="/main/img/icons/icon_arrow_prev_wh.svg" alt="이전페이지로 이동"></button></h2>
	</div>
<?php
	} 
?>
	<!-- APP에선 h1.page_title{평점 안내} 주석처리 후 위 app 메뉴 탭 주석해제 -->
	<!-- HUBDNCHYJ : Web 에서는 이 클래스 사용하시면 됩니다. -->
<?php
	if (!empty($session_app_type) && $session_app_type == 'N') {
		// Web일때
?>
	<h1 class="page_title">평점 안내</h1>
<?php
	}
?>
	<!-- <div class="inner"> -->
	<!-- 	<img class="coming" src="./img/coming.png"> -->
	<!-- </div> -->
	<div class="inner">
		<!-- 1. 연수 평점 안내 start -->
		<h3 class="title">연수 평점 안내</h3>
		<div class="details">
			<ul class="indent_ul">
				<li>• <span class="font_b">'제59차 대한비만학회 춘계학술대회' </span>참가에 따른 평점을 아래와 같이 안내해 드립니다.</li>
				<li>• 평점 신청을 위해 참가등록 시 면허번호를 정확히 입력해 주십시오.</li>
				<li>• 면허번호 오류 시 평점 이수 명단에서 누락될 수 있습니다.</li>
				<li>• 교육 시간이 중복될 경우 중복되는 시간의 평점은 인정되지 않습니다.</li>
			</ul>
		</div>
	    <!-- 1. 연수 평점 안내 end -->

		<!-- 2. 제공 평점 start -->
		<h3 class="title">제공 평점 <!--<span class="red_txt font_inherit">(예정)</span>--></h3>
		<div class="details">
			<div class="table_wrap x_scroll">
				<table class="c_table2 detail_table center">
					<thead>
						<tr>
							<th>구분</th>
							<th>9월 7일(목)</th>
							<th>9월 8일(금)</th>
							
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>대한의사협회</td>
							<td>최대 1평점<span class="red_txt bold">(예정)</span></td>
							<td>최대 6평점<span class="red_txt bold">(예정)</span></td>
							
						</tr>
						<tr>
							<td>내과전공의 외부학술회의(학술대회)</td>
							<td>없음</td>
							<td>최대 2평점<span class="red_txt bold">(예정)</span> <br/><span class="font_small">* 오전,오후 각 1점 산정</span></td>
						</tr>
						<tr>
							<td>대한비만학회(비만전문인정의) *별도 신청 없음</td>
							<!-- <td>대한비만학회(비만전문인정의) <br/><span class="font_small">*별도 신청 없음</span></td> -->
							<td>최대 1평점<span class="red_txt bold">(예정)</span></td>
							<td>최대 6평점<span class="red_txt bold">(예정)</span></td>
							
						</tr>
						<tr>
							<td>한국영양교육평가원 임상영양사 전문연수교육(CPD)</td>
							<td>없음</td>
                            <td>5평점<span class="red_txt bold">(예정)</span></td>
						</tr>
						</tr>
						<tr>
							<td>대한운동사협회</td>
							<td>없음</td>
							<td>25평점<span class="red_txt bold">(예정)</span></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<!-- 2. 제공 평점 end -->

		<!-- 3. 이수 시간에 따른 부분 평점 및 주의사항 안내 start -->
		<h3 class="title">이수 시간에 따른 부분 평점 및 주의사항 안내</h3>
		<div class="details">
			<div class="table_wrap x_scroll">
				<table class="c_table2 detail_table center">
					<thead>
						<tr>
							<th>시스템 기록에 따른 이수 시간</th>
							<th>일반 평점</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1시간 미만</td>
							<td>없음</td>

						</tr>
						<tr>
							<td>1시간 이상 ~ 2시간 미만</td>
							<td>1평점</td>
						</tr>
						<tr>
							<td>2시간 이상 ~ 3시간 미만</td>
							<td>2평점</td>

						</tr>
						<tr>
							<td>3시간 이상 ~ 4시간 미만</td>
							<td>3평점</td>

						</tr>
						<tr>
							<td>4시간 이상 ~ 5시간 미만</td>
							<td>4평점</td>

						</tr>
						<tr>
							<td>5시간 이상 ~ 6시간 미만</td>
							<td>5평점</td>

						</tr>
						<tr>
							<td>6시간 이상</td>
							<td>6평점 (최대)</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="mt10">
				<ul class="indent_ul">
					<li>• 이수 시간은 행사장에 설치된  <span class="bold">'입출결 확인 시스템'</span>으로 기록됩니다.</li>
					<li class="red_txt bold">• 입실 시와 퇴실 시 1일 2회 명찰의 바코드를 입출결 확인 시스템에 태깅하여 주십시오.</li>
                    <li>• 입/퇴실 시 바코드를 태깅하지 않은 경우 이수 시간이 인정되지 않습니다.</li>
                    <li>• 휴게 시간은 이수 시간에 포함되지 않습니다.</li>
                    <li>• 이수 시간은 학술대회 시작 시간부터 종료 시간 내에서만 인정됩니다.</li>
                    <li>• 학술대회 종료 후, 학회 사무국에서 취합된 명단을 의사협회 연수 교육 시스템에 등록하여 자동으로 평점이 부여됩니다(약 4주 소요).</li>
					<li>• 개인에게 평점카드를 발급하지 않습니다.</li>
				</ul>
			</div>
		</div>
		<!-- 3. 이수 시간에 따른 부분 평점 및 주의사항 안내 end -->
   </div>
</section>


<?php 
    if (!empty($session_app_type) && $session_app_type == 'Y') {
        // mo일때
        include_once('./include/app_footer.php'); 
    }else {
        include_once('./include/footer.php');
    }
?>