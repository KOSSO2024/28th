<?php
include_once('./include/head.php');
// HUBDNCHYJ : app 일 경우 전용 헤더 app_header 사용필요 
$session_user = $_SESSION['USER'] ?? NULL;
$session_app_type = (!empty($_SESSION['APP']) ? 'Y' : 'N');

if (!empty($session_user) && $session_app_type == 'Y') {
    include_once('./include/app_header.php');
} else {
    include_once('./include/header.php');
}

$add_section_class = (!empty($session_user) && $session_app_type == 'Y') ? 'app_version' : '';
?>

<style>
section.app_version .inner {
    padding-top: 0 !important;
}
</style>

<!-- HUBDNCHYJ : App 일 경우 padding/margin을 조정하는 app_version 클래스가 container에 들어가야 함 -->
<section class="container program_glance <?= $add_section_class; ?>">
    <!-- HUBDNCHYJ : App 일 경우 타이틀 영역 입니다. -->
    <?php
    if (!empty($session_app_type) && $session_app_type == 'Y') {
        // mobile일때
    ?>
    <div class="app_title_box">
        <h2 class="app_title">Program<button type="button" class="app_title_prev"
                onclick="javascript:window.location.href='./app_index.php';"><img
                    src="/main/img/icons/icon_arrow_prev_wh.svg" alt="이전페이지로 이동"></button></h2>
        <ul class="app_menu_tab langth_2">
            <li class="on"><a href="./program_glance.php">Program at a Glance</a></li>
            <li><a href="./app_program_detail.php">Scientific Program</a></li>
        </ul>
    </div>
    <?php
    } else {
        // pc일때
    ?>
    <h1 class="page_title">Program at a Glance</h1>
    <?php
    }
    ?>
    <!-- HUBDNCHYJ : App 에서는 이 클래스 사용하시면 됩니다. -->
    <?php
    if (!empty($session_app_type) && $session_app_type == 'Y') {
        // mobile일때
    ?>
    <div class="app_tab_wrap fix_cont">
        <ul class="app_tab program glance">
            <li class="row2 all_days on"><a href="javascript:;">All Days</a></li>
            <li><a href="javascript:;">Sep.7(Thu)</a></li>
            <li><a href="javascript:;">Sep.8(Fri)</a></li>
            <li style="margin-right:5px;"><a href="javascript:;">Sep.9(Sat)</a></li>
        </ul>
    </div>
    <?php
    }
    ?>
    <div class="inner">
        <div class="program_wrap section">
            <div class="scroll_table">
                <?php
                if (!empty($session_app_type) && $session_app_type == 'N') {
                    // pc일때
                ?>
                <ul class="tab_green long centerT program_glance">
                    <li class="on"><a href="javascript:;">3월 8일(금) ~ 9(토)</a></li>
                    <li><a href="javascript:;">3월 8일 (금)</a></li>
                    <li><a href="javascript:;">3월 9일 (토)</a></li>
                </ul>
                <?php
                }
                ?>
                <!-- HUBDNCHYJ : App 일때 하위 마크업 주석처리 필요 -->
                <?php
                if (!empty($session_app_type) && $session_app_type == 'N') {
                    // pc일때
                ?>
				<!--231130 sujeong 다운로드 주석-->
                <!-- <div class="rightT mb20">
                    <button 
					 onclick="javascript:window.open('./download/2023 ICOMES_Program at a glance_0901.pdf')" 
                        class="btn blue_btn nowrap"><img src="./img/icons/icon_download_white.svg" alt="">Program at a
                        Glance Download</a>
                </div> -->

				<div class="rightT mb20">
                    <button class="btn blue_btn nowrap not_yet"><img src="./img/icons/icon_download_white.svg" alt="">Program at a
                        Glance Download</a>
                </div>
                <?php
                }
                ?>
                <div class="program_table_wrap">
                    <table class="program_table main-table">
                        <colgroup>
                            <col class="program_first_col" width="10%">
                            <col width="30%">
							<col width="30%">
							<col width="30%">
                        </colgroup>
                        <thead>
                            <tr>
                                <th class="font_big" style="background-color: #F4F4F4;">Time/Location</th>
                                <th style="background-color: #F4F4F4;">Room 1<br> </th>
                                <th style="background-color: #F4F4F4;">Room 2</th>
                                <th style="background-color: #F4F4F4;">Room 3</th>
                            </tr>
                            <tr>
                                <th style="background-color: #FFFF99;" colspan="4" class="font_big day_tbody day_1">
                                    <div class="dots_div">Day 1 - 2024<img src="./img/icons/icon_dots.svg"
                                            class="dots_img" />3<img src="./img/icons/icon_dots.svg"
                                            class="dots_img" />8 (금)</div>
                                </th>
                            </tr>
                        </thead>
                        <!---------- DAY 1 ---------->
                        <tbody name="day" class="day_tbody day_1">
                            <tr>
                                <td>
                                    <div class="colons_div">15:00-16:45</div>
                                </td>
                                <td class="purple_bg pointer" name="pre_congress_symposium_1" onclick="show_modal()" >
                                    Pre-congress<br />Symposium 1<p>적절한 비만관리를 위한 정책적 논의
                                    </p>
                                    <input type="hidden" name="e" value="room1">

                                </td>
                                <td></td>
								<td></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">16:45-17:00</div>
                                </td>
                                <td colspan="2" class="light_gray_bg">Break</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">17:00-18:00</div>
                                </td>
                                <td></td>
                                <td class="purple_bg pointer" name="pre_congress_symposium_2">
                                    Pre-congress<br />Symposium 2<p>Obesity in Asia-Pacific – Is It Different from Rest
                                        of the World?</p>
                                    <input type="hidden" name="e" value="room2">
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">18:00-18:30</div>
                                </td>
                                <td class="sky_bg pointer" name="satellite_symposium_1">
                                    Satellite<br />Symposium 1
                                    <input type="hidden" name="e" value="room1">
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">18:30-19:00</div>
                                </td>
                                <td class="sky_bg pointer" name="satellite_symposium_2">
                                    Satellite<br />Symposium 2
                                    <input type="hidden" name="e" value="room1">
                                </td>
                                <td class="sky_bg pointer" name="satellite_symposium_3">
                                    Satellite<br />Symposium 3
                                    <input type="hidden" name="e" value="room2">
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">19:00-21:00</div>
                                </td>
                                <td></td>
                                <td></td>
                                <td class="yellow_bg pointer" name="welcome_cocktail_party">
                                    Welcome<br />Cocktail Party
                                    <input type="hidden" name="e" value="room3">
								</td>
                            </tr>
                        </tbody>
                        <!---------- DAY 2 ---------->
                        <thead>
                            <tr>
                                <th colspan="4" class="font_big day_tbody day_2">
                                    <div class="dots_div">Day 2 - 2024<img src="./img/icons/icon_dots.svg"
                                            class="dots_img" />3<img src="./img/icons/icon_dots.svg"
                                            class="dots_img" />9 (토)</div>
                                </th>
                            </tr>
                        </thead>
                        <tbody name="day" class="day_tbody day_2">
                            <tr>
                                <td>
                                    <div class="colons_div">07:30-08:20</div>
                                </td>
                                <td></td>
                                <td class="sky_bg pointer" name="breakfast_symposium_1">
                                    Breakfast<br />Symposium 1
                                    <input type="hidden" name="e" value="room2">
                                </td>
                                <td class="sky_bg pointer" name="breakfast_symposium_2">
                                    Breakfast<br />Symposium 2
                                    <input type="hidden" name="e" value="room3">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">08:20-08:30</div>
                                </td>
                                <td colspan="3" class="light_gray_bg">Break</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">08:30-09:10</div>
                                </td>
                                <td colspan="3" class="pink_bg pointer" name="plenary_lecture_1">
                                    Plenary Lecture 1
                                    <p class="bold">Intermittent Metabolic Switching and Brain Health</p>
                                    <p>Thiruma V. Arumugam (La Trobe University, Australia)</p>
                                    <input type="hidden" name="e" value="room1">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">09:10-09:20</div>
                                </td>
                                <td colspan="3" class="light_gray_bg">Break</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">09:20-10:50</div>
                                </td>
                                <td class="green_bg pointer" name="symposium_1">
                                    Symposium 1 <p>Obesity and Cancer</p>
                                    <input type="hidden" name="e" value="room1">
                                </td>
                                <td class="green_bg pointer" name="symposium_2">
                                    Symposium 2 <p>Obesity and Neurodegenerative Diseases</p>
                                    <input type="hidden" name="e" value="room2">
                                </td>
                                <td class="green_bg pointer" name="symposium_3">
                                    Symposium 3 <p>Digital Therapeutics</p>
                                    <input type="hidden" name="e" value="room3">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">10:50-11:00</div>
                                </td>
                                <td colspan="3" class="light_gray_bg">Break</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">11:00-11:10</div>
                                </td>
                                <td colspan="3" class="yellow_bg pointer" name="opening_address">
                                    Opening Address
                                    <input type="hidden" name="e" value="room1">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">11:10-11:50</div>
                                </td>
                                <td colspan="3" class="pink_bg pointer" name="keynote_lecture_1">
                                    Keynote Lecture 1
                                    <p class="bold">Adipose Tissue – A Treasure Box for Discoveries</p>
                                    <p>Matthias Blüher (University of Leipzig, Germany)</p>
                                    <input type="hidden" name="e" value="room1">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">11:50-12:00</div>
                                </td>
                                <td colspan="3" class="light_gray_bg">Break</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">12:00-13:00</div>
                                </td>
                                <td class="sky_bg pointer" name="luncheon_symposium_1">
                                    Luncheon<br />Symposium 1
                                    <input type="hidden" name="e" value="room1">
                                </td>
                                <td class="sky_bg pointer" name="luncheon_symposium_2">
                                    Luncheon<br />Symposium 2
                                    <input type="hidden" name="e" value="room2">
                                </td>
                                <td class="sky_bg pointer" name="luncheon_symposium_3">
                                    Luncheon<br />Symposium 3
                                    <input type="hidden" name="e" value="room3">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">13:00-14:00</div>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">14:00-15:30</div>
                                </td>
                                <td class="green_bg pointer" name="symposium_5">
                                    Symposium 5 <p>Emerging Anti-obesity Drugs: Expectations and Apprehensions</p>
                                    <input type="hidden" name="e" value="room1">
                                </td>
                                <td class="green_bg pointer" name="symposium_6">
                                    Symposium 6 <p>Clinical Exercise with Obesity</p>
                                    <input type="hidden" name="e" value="room2">
                                </td>
                                <td class="green_bg pointer" name="symposium_7">
                                    Symposium 7 <p>Metabolic Signaling in Obesity-Related Diseases</p>
                                    <input type="hidden" name="e" value="room3">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">15:30-15:40</div>
                                </td>
                                <td colspan="3" class="light_gray_bg">Break</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">15:40-16:20</div>
                                </td>
                                <td colspan="3" class="pink_bg pointer" name="plenary_lecture_2">
                                    Plenary Lecture 2
                                    <p class="bold">Understanding Human Metabolic Dysregulation in Vivo Using Stable
                                        Isotope Tracers: More than 50 Years of Experience</p>
                                    <p>Robert R. Wolfe <br />(University of Arkansas for Medical Sciences, USA)</p>
                                    <input type="hidden" name="e" value="room1">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">16:20-16:30</div>
                                </td>
                                <td colspan="3" class="light_gray_bg">Break</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">16:30-18:00</div>
                                </td>
                                <td class="green_bg pointer" name="symposium_9">
                                    Symposium 9 <p>Obesity in Special Conditions</p>
                                    <input type="hidden" name="e" value="room1">
                                </td>
                                <td class="green_bg pointer" name="symposium_10">
                                    Symposium 10 <p>Neuropsychological Aspect of Obesity</p>
                                    <input type="hidden" name="e" value="room2">
                                </td>
                                <td class="green_bg pointer" name="symposium_11">
                                    Symposium 11 <p>Social and Environmental Determinants: Nutritional View of Obesity
                                    </p>
                                    <input type="hidden" name="e" value="room3">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">18:00-18:30</div>
                                </td>
                                <td colspan="3" class="light_gray_bg">Break</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">18:30-20:30</div>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                        <!---------- DAY 3 ---------->
                        <thead>
                            <tr>
                                <th colspan="4" class="font_big day_tbody day_3">
                                    <div class="dots_div">Day 3 - 2023<img src="./img/icons/icon_dots.svg"
                                            class="dots_img" />9<img src="./img/icons/icon_dots.svg"
                                            class="dots_img" />9 (Sat)</div>
                                </th>
                            </tr>
                        </thead>
                        <tbody name="day" class="day_tbody day_3">
                            <tr>
                                <td>
                                    <div class="colons_div">07:30-08:20</div>
                                </td>
                                <td class="sky_bg pointer" name="breakfast_symposium_3">
                                    Breakfast<br />Symposium 3
                                    <input type="hidden" name="e" value="room1">
                                </td>
                                <td class="sky_bg pointer" name="breakfast_symposium_4">
                                    Breakfast<br />Symposium 4
                                    <input type="hidden" name="e" value="room2">
                                </td>
                                <td class="sky_bg pointer" name="breakfast_symposium_5">
                                    Breakfast<br />Symposium 5
                                    <input type="hidden" name="e" value="room3">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">08:20-08:30</div>
                                </td>
                                <td colspan="3" class="light_gray_bg">Break</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">08:30-09:10</div>
                                </td>
                                <td class="pink_bg pointer" name="plenary_lecture_3" colspan="3">
                                    Plenary Lecture 3
                                    <p class="bold">The Role of Hunger-promoting Hypothalamic Neurons in Obesity
                                        Therapeutics</p>
                                    <p>Tamas Horvath (Yale University, USA)</p>
                                    <input type="hidden" name="e" value="room1">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">09:10-09:20</div>
                                </td>
                                <td colspan="3" class="light_gray_bg">Break</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">09:20-10:50</div>
                                </td>
                                <td class="green_bg pointer" name="symposium_13">
                                    Symposium 13 <p>Health Consequences of Obesity</p>
                                    <input type="hidden" name="e" value="room1">
                                </td>
                                <td class="green_bg pointer" name="symposium_14">
                                    Symposium 14 <p>Promoting Healthy Muscle and Liver Metabolism</p>
                                    <input type="hidden" name="e" value="room2">
                                </td>
                                <td class="green_bg pointer" name="symposium_15">
                                    Symposium 15 <p>Community-based Nutrition Interventions and Approaches for
                                        Vulnerable Groups</p>
                                    <input type="hidden" name="e" value="room3">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">10:50-11:00</div>
                                </td>
                                <td colspan="7" class="light_gray_bg">Break</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">11:00-11:40</div>
                                </td>
                                <td class="pink_bg pointer" name="keynote_lecture_2" colspan="3">
                                    Keynote Lecture 2 <p class="bold">Decoding Adipocyte Plasticity: YAP/TAZ's Dual
                                        Control over Energy Storage and Leptin</p>
                                    <p>Jae Myoung Suh (KAIST, Republic of Korea)</p>
                                    <input type="hidden" name="e" value="room1">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">11:40-11:50</div>
                                </td>
                                <td colspan="3" class="light_gray_bg">Break</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">11:50-12:50</div>
                                </td>
                                <td class="sky_bg pointer" name="luncheon_symposium_4">
                                    Luncheon<br />Symposium 4
                                    <input type="hidden" name="e" value="room1">
                                </td>
                                <td class="sky_bg pointer" name="luncheon_symposium_5">
                                    Luncheon<br />Symposium 5
                                    <input type="hidden" name="e" value="room2">
                                </td>
                                <td class="sky_bg pointer" name="luncheon_symposium_6">
                                    Luncheon<br />Symposium 6
                                    <input type="hidden" name="e" value="room3">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">12:50-13:50</div>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">13:50-14:30</div>
                                </td>
                                <td class="pink_bg pointer" name="keynote_lecture_3" colspan="3">
                                    Keynote Lecture 3
                                    <p class="bold">Brainstem Circuits that Control Ingestion</p>
                                    <p>Zachary Knight (University of California, San Francisco, USA)</p>
                                    <input type="hidden" name="e" value="room1">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">14:30-15:10</div>
                                </td>
                                <td class="pink_bg pointer" name="keynote_lecture_4" colspan="3">
                                    Keynote Lecture 4
                                    <p class="bold">National Obesity Strategy in Korea: Past, Present and Future</p>
                                    <p>Jae-Heon Kang (Sungkyunkwan University, Republic of Korea)</p>
                                    <input type="hidden" name="e" value="room1">
								</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">15:10-15:20</div>
                                </td>
                                <td colspan="3" class="light_gray_bg">Break</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">15:20-16:50</div>
                                </td>
                                <td class="green_bg pointer" name="symposium_17">
                                    Symposium 17
                                    <p>The Power of Synergy: Optimizing Anti-Obesity Treatment with Combination
                                        Pharmacotherapy</p>
                                    <input type="hidden" name="e" value="room1">
                                </td>
                                <td class="green_bg pointer" name="symposium_18">
                                    Symposium 18
                                    <p>Neuroscience</p>
                                    <input type="hidden" name="e" value="room2">
                                </td>
                                <td class="green_bg pointer" name="symposium_19">
                                    Symposium 19
                                    <p>Diversity and Challenges of Pediatric Obesity</p>
                                    <input type="hidden" name="e" value="room3">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">16:50-17:00</div>
                                </td>
                                <td colspan="3" class="light_gray_bg">Break</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">17:00-17:40</div>
                                </td>
                                <td class="pink_bg pointer" name="plenary_lecture_4" colspan="3">
                                    Plenary Lecture 4
                                    <p class="bold">Current and Future in Obesity Management</p>
                                    <p>John Wilding (Liverpool University, UK)</p>
                                    <input type="hidden" name="e" value="room1">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">17:40-18:00</div>
                                </td>
                                <td class="yellow_bg pointer" name="closing_ceremony" colspan="3">
                                    Closing & Award Ceremony
                                    <input type="hidden" name="e" value="room1">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--//section1-->

    </div>

</section>

<div class="modal_background" style="display: none;"></div>
<div class="detail_modal" style="display: none;">
	<div class="modal_container">
		<button class="modal_close" onclick="modal_close()">close<img src="./img/icons/icon_x.png" /></button>
		<div class="modal_header">
			<h1>보험법제위원회 Special Symposium</h1>
			<h6>비만의 사회적 및 의료적 관점의 문제점과 해결방안</h6>
			<div class="modal_sub_header">
				<div>
					<b>2023.03.17 (금)</b>
					<p>14:50 - 16:20</p>
					<p>ROOM 1</p>
				</div>
				<div>
					<p>CHAIR</p>
					<div>
						<b>김종화</b>
						<p>부천세종병원 내분비내과</p>
						<b>김성수</b>
						<p>충남의대 가정의학과</p>
					</div>
				</div>
			</div>
		</div>
		<div class="content_container">
				
				<div class="content">
					<div class="content_time">[14:50-14:55] 개회사</div>
					<div class="content_1  content_person">
						<p>SPEAKER</p>
						<p>김성수</p>
						<p>대한비만학회 회장</p>
					</div>
					<div class="content_2  content_person"></div>
				</div>

				<div class="content">
				<div class="content_time">[14:55-15:00] 환영사</div>
					<div class="content_1  content_person">
						<p>SPEAKER</p>
						<p>김성수</p>
						<p>대한비만학회 회장</p>
					</div>
					<div class="content_2  content_person"></div>
				</div>

				<div class="content">
				<div class="content_time">[15:00-15:20] 비만의 공중보건학적 관점의 문제점</div>
					<div class="content_1  content_person">
						<p>SPEAKER</p>
						<p>김성수</p>
						<p>대한비만학회 회장</p>
					</div>
					<div class="content_2  content_person"></div>
				</div>

				<div class="content">
				<div class="content_time">[15:00-15:20] 비만의 공중보건학적 관점의 문제점</div>
					<div class="content_1  content_person">
						<p>SPEAKER</p>
						<p>김성수</p>
						<p>대한비만학회 회장</p>
					</div>
					<div class="content_2  content_person"></div>
				</div>

				<div class="content">
				<div class="content_time">[15:20-15:40] 비만대사수술 현황과 개선 방안</div>
					<div class="content_1 content_person">
						<p>SPEAKER</p>
						<p>김성수</p>
						<p>대한비만학회 회장</p>
					</div>
					<div class="content_2  content_person"></div>
				</div>

				<div class="content">
					<div class="content_time">[15:40-15:55] 정부의 비만 정책 방향</div>
					<div class="content_1 content_person">
						<p>SPEAKER</p>
						<p>김성수</p>
						<p>대한비만학회 회장</p>
					</div>
					<div class="content_2 content_person"></div>
				</div>

				<div class="content_panel">
				<div class="content_time">[15:55-16:20] Panel Discussion</div>
					<div>
					<div class="content_1 content_person">
						<p>SPEAKER</p>
						<p>김성수</p>
						<p>대한비만학회 회장</p>
					</div>
					<div class="content_2 content_person">
						<p>SPEAKER</p>
						<p>김성수</p>
						<p>대한비만학회 회장</p>
					</div>
					</div>
					<div>
					<div class="content_3 content_person">
						<p>SPEAKER</p>
						<p>김성수</p>
						<p>대한비만학회 회장</p>
					</div>
					<div class="content_4 content_person">
						<p>SPEAKER</p>
						<p>김성수</p>
						<p>대한비만학회 회장</p>
					</div>
					</div>
				</div>

		</div>
	</div>
</div>


<!-- HUBDNCHYJ : App 일때만 노출되는 팝업 입니다. -->
<?php
if (!empty($session_app_type) && $session_app_type == 'Y') {
    // mo일때
?>
<div class="popup hold_pop" style="display:block;">
    <!-- -->
    <div class="pop_bg"></div>
    <div class="pop_contents transparent center_t">
        <img src="./img/icons/icon_resize.png" alt="">
        <p class="white_t center_t">Touch on a session to check the details. <br />Use your fingers to zoom in/out</p>
    </div>
</div>
<?php
}
?>
<input type="hidden" name="session_app_type" value="<?= $session_app_type ?>">
<script>
$(document).ready(function() {
    /*$(window).resize(function(){
    	if ($(window).width() <= 480) {
    		var table_width = 1200 * 0.71;
    		var table_height = $(".program_table").height() * 0.71;
    		$(".program_table_wrap").css({"height":table_height});

    		console.log(table_width);
    		// $(".program_table_wrap").css({"width":table_width, "height":table_height});
    	} else {
    		$(".program_table_wrap").css({"width":"auto", "height":"auto"});
    	}
    });
    $(window).trigger("resize");*/

    $(".hold_pop .pop_contents").click(function() {
        $(".hold_pop").hide();
    });

    /* td 클릭 시 페이지 이동 */
    $("td.pointer").click(function() {
        var e = $(this).find("input[name=e]").val();
        var day = $(this).parents("tbody[name=day]").attr("class");
        var target = $(this)
        var this_name = $(this).attr("name");

        //table_location(event, target, e, day, this_name);
    });

    /* tab 클릭 시 랜더링 변경 */
    $(".tab_green li, .app_tab li").click(function() {
        var this_index = $(this).index();
        if (!this_index == 1) {
            $(".day_tbody").show();
        } else {
            $(".day_tbody").hide();
            $(".day_tbody.day_" + this_index + "").show();
        }

    });



    // Program At a Glance 줌 스크립트

    var height_array = [];
    var tbody_height;
    var table_width = $(".program_table").outerWidth();

    $(".program_table tbody").each(function() {
        tbody_height = $(this).outerHeight();
        height_array.push(tbody_height)

        $(".app_tab.glance li").click(function() {
            var i = $(this).index() - 1;
            $(".program_table").css({
                "width": "auto",
                "height": "auto"
            })
            // $(".program_table").css({"width":table_width, "height":height_array[i]})
            $(".program_table td, .program_table th").css({
                "font-size": "8px",
                "line-height": "12px"
            })
            $(".program_table td p").css({
                "font-size": "6px",
                "line-height": "10px"
            })

            // $(".program_table").trigger("touchmove");

            //alert(table_width)
            //alert(table_Height)
            //alert(table_font_size)
            //alert(table_font_size_p)
            console.log(height_array[i]);

        });
    });

    //pinch 진행 상태
    let scaling = false;
    //pinch 초기 거리
    let setDist = 0;

    $(document).on("touchstart", ".program_table", function(event) {
        if (event.originalEvent.touches.length === 2) {
            scaling = true;
        }
    })

    var table_font_size = $(".program_table td").css("font-size");
    var table_font_size_p = $(".program_table td p").css("font-size")
    var table_line_height = $(".program_table td").css("line-height");

    $(document).on("touchmove", ".program_table", function(event) {
        if (scaling) {
            var dist = Math.hypot(
                event.originalEvent.touches[0].pageX - event.originalEvent.touches[1].pageX,
                event.originalEvent.touches[1].pageY - event.originalEvent.touches[1].pageY
            );
            dist = Math.floor(dist / 20);
            if (setDist == 0) setDist = dist;
            fontSize = $(".program_table td").css("font-size");
            fontSizeP = $(".program_table td p").css("font-size")
            imgWidth = $(".program_table")[0].clientWidth;
            imgHeight = $(".program_table")[0].clientHeight;
            // alert(parseInt(fontSize))
            if (setDist < dist) {
                if (parseInt(fontSize) <= 16) {
                    $(this).css("width", 1.1 * parseFloat(imgWidth));
                    $(this).css("height", 0.8 * parseFloat(imgHeight));
                    $(this).find("td").css({
                        "font-size": 1.1 * parseFloat(fontSize),
                        "line-height": 2 + parseFloat(fontSize) + "px"
                    });
                    $(this).find("th").css({
                        "font-size": 1.1 * parseFloat(fontSize),
                        "line-height": 2 + parseFloat(fontSize) + "px"
                    });
                    $(this).find("td").find("p").css({
                        "font-size": 1.1 * parseFloat(fontSizeP),
                        "line-height": 2 + parseFloat(fontSizeP) + "px"
                    });
                    setDist = dist;
                }
            } else if (setDist > dist) {
                if (parseInt(fontSize) >= 8) {
                    $(this).css("width", 0.9 * parseFloat(imgWidth));
                    $(this).css("height", 0.5 * parseFloat(imgHeight));
                    $(this).find("td").css({
                        "font-size": 0.9 * parseFloat(fontSize),
                        "line-height": 2 + parseFloat(fontSize) + "px"
                    });
                    $(this).find("th").css({
                        "font-size": 0.9 * parseFloat(fontSize),
                        "line-height": 2 + parseFloat(fontSize) + "px"
                    });
                    $(this).find("td").find("p").css({
                        "font-size": 0.9 * parseFloat(fontSizeP),
                        "line-height": 2 + parseFloat(fontSizeP) + "px"
                    });
                    setDist = dist;
                }
            }
        }
    })
});

function modal_close() {
    const detailModal = document.querySelector(".detail_modal")
    const background = document.querySelector(".modal_background")
    detailModal.style.display = "none";
    background.style.display = "none";
}

function show_modal() {
    const detailModal = document.querySelector(".detail_modal")
    const background = document.querySelector(".modal_background")
    detailModal.style.display = "";
    background.style.display = "";
}

function table_location(event, _this, e, day, this_name) {
    var session_app_type = $("[name=session_app_type]").val();

    // if (session_app_type != "" && session_app_type == 'N') {
    //     window.location.href = "./program_detail.php?day=" + day + "&e=" + e + "&name=" + this_name;
    // } else {
    //     window.location.href = "./app_program_detail.php?day=" + day + "&e=" + e + "&name=" + this_name;
    // }
}
</script>

<?php
if (!empty($session_app_type) && $session_app_type == 'Y') {
    // mo일때
    include_once('./include/app_footer.php');
} else {
    include_once('./include/footer.php');
}
?>