<?php
include_once('./include/head.php');
include_once('./include/header.php');

//업데이트 시 초록 인덱스
$abstract_idx = $_GET["idx"];

// 테스트
// if ($during_yn === "Y" && empty($abstract_idx)) {
?>
<!-- 테스트
<section class="submit_application abstract_online_submission sub_page">
    <div class="container">
        <div class="sub_banner">
            <h5>Call for Abstracts</h5>
            <h1>Abstract Submission</h1>
        </div>
        <div class="tab_area">
            <ul class="clearfix">
                <li><a href="./poster_abstract_submission.php" class="btn"><?= $locale("abstract_menu1") ?></a></li>
                <li><a href="javascript:;" class="btn active"><?= $locale("abstract_menu2") ?></a></li>
                <li><a href="./eposter.php" class="btn"><?= $locale("abstract_menu3") ?></a></li>
            </ul>
        </div>
        <section class="coming">
            <div class="container">
                <div class="sub_banner">
                    <h5>Abstract Submission<br>has been closed</h5>
                </div>
            </div>
        </section>
    </div>
</section> -->
<?php 
	// 테스트
	// } else {

	//국가정보 가져오기
	$nation_list = get_data($_nation_query);

	//카테고리 정보 가져오기

	//echo $_abstract_category_query;
	//exit;
	$category_list = get_data($_abstract_category_query);

	if ($abstract_idx) {
		// $sql = "
		// 					SELECT
		// 						ra.idx, ra.nation_no, ra.last_name, ra.first_name, ra.city, ra.state, ra.affiliation, 
		// 						ra.email, ra.phone, ra.position, ra.position_other AS other_position, ra.abstract_category
		// 					FROM request_abstract AS ra
		// 					LEFT JOIN(
		// 						SELECT
		// 							idx, title
		// 						FROM category
		// 						WHERE is_deleted = 'N'
		// 						AND type = 0
		// 						AND language_type = ".($language == "ko" ? 1 : 0)."
		// 					)AS c
		// 					ON ra.abstract_category = c.idx
		// 					WHERE ra.is_deleted = 'N'
		// 					AND ra.idx = {$abstract_idx}
		// 				";

		$sql =  "
					SELECT
						ra.abstract_title, ra.oral_presentation, presentation_type_yn, presentation_type,
						f.original_name AS file_name, ra.abstract_category
					FROM request_abstract ra
					LEFT JOIN file f
					ON ra.abstract_file = f.idx
					WHERE is_deleted = 'N'
					AND parent_author IS NULL
					AND ra.idx = {$abstract_idx}
					LIMIT 1
				";

		$data = sql_fetch($sql);

		$abstract_title = isset($data["abstract_title"]) ? $data["abstract_title"] : "";
		$oral_presentation = isset($data["oral_presentation"]) ? $data["oral_presentation"] : "";
		$abstract_category = isset($data["abstract_category"]) ? $data["abstract_category"] : "";
		$file_name = isset($data["file_name"]) ? $data["file_name"] : "";
		$presentation_type_yn = isset($data["presentation_type_yn"]) ? $data["presentation_type_yn"] : "";
		$presentation_type = isset($data["presentation_type"]) ? $data["presentation_type"] : "";
	}


	//세션에 저장된 논문 제출 데이터 (step2에서 step1으로 되돌아올시)
	$submit_data = isset($_SESSION["abstract"]["data"]) ? $_SESSION["abstract"]["data"] : "";
	$co_submit_data1 = isset($_SESSION["abstract"]["co_data1"]) ? $_SESSION["abstract"]["co_data1"] : "";

	//co_author데이터 for문(INTO-ON)
	for ($i = 0; $i < (count($_SESSION["abstract"]) - 2); $i++) {
		$coauthor_submit_data[$i] = isset($_SESSION["abstract"]["coauthor_data" . $i]) ? $_SESSION["abstract"]["coauthor_data" . $i] : "";
	}

	/*
	$co_submit_data2 = isset($_SESSION["abstract"]["co_data2"]) ? $_SESSION["abstract"]["co_data2"] : "";
	$co_submit_data3 = isset($_SESSION["abstract"]["co_data3"]) ? $_SESSION["abstract"]["co_data3"] : "";
	*/

	$data_count = count($_SESSION["abstract"]);

	//초기 작성 시 연락처 쪼깨기
    //[231201] sujeong 주석
	// if ($submit_data == "") {
	// 	$_arr_phone = explode("-", $user_info["phone"]);
	// 	$nation_tel = $_arr_phone[0];
	// 	$phone = implode("-", array_splice($_arr_phone, 1));
	// }

    //[231201] sujeong 주석 phone에 82- 제거
    if ($submit_data == "") {
        	$phone = $user_info["phone"];
        }

	//데이터(초기 세팅 및 이전으로 돌아왔을때 입력값 세팅)
	$nation_no = !empty($submit_data) ? $submit_data["nation_no"] : $user_info["nation_no"];
	$city = !empty($submit_data) ? $submit_data["city"] : "";
	$state = !empty($submit_data) ? $submit_data["state"] : "";
	$first_name = !empty($submit_data) ? $submit_data["first_name"] : $user_info["first_name"];
	$last_name = !empty($submit_data) ? $submit_data["last_name"] : $user_info["last_name"];
	$affiliation = !empty($submit_data) ? $submit_data["affiliation"] : "";
	$position = !empty($submit_data) ? $submit_data["position"] : "";
	$other_position = !empty($submit_data) ? $submit_data["other_position"] : "";
	$email = !empty($submit_data) ? $submit_data["email"] : $user_info["email"];
	$nation_tel = !empty($submit_data) ? $submit_data["nation_tel"] : $nation_tel;
	$phone = !empty($submit_data) ? $submit_data["phone"] : $phone;

	$co_nation_no = !empty($submit_data) ? $submit_data["co_nation_no"] : "";
	$co_city = !empty($submit_data) ? $submit_data["co_city"] : "";
	$co_state = !empty($submit_data) ? $submit_data["co_state"] : "";
	$co_first_name = !empty($submit_data) ? $submit_data["co_first_name"] : "";
	$co_last_name = !empty($submit_data) ? $submit_data["co_last_name"] : "";
	$co_affiliation = !empty($submit_data) ? $submit_data["co_affiliation"] : "";
	$co_position = !empty($submit_data) ? $submit_data["co_position"] : "";
	$co_other_position = !empty($submit_data) ? $submit_data["co_other_position"] : "";
	$co_email = !empty($submit_data) ? $submit_data["co_email"] : "";
	$co_nation_tel = !empty($submit_data) ? $submit_data["co_nation_tel1"] : "";
	$co_phone = !empty($submit_data) ? $submit_data["co_phone"] : "";

	//co_author데이터 for문(INTO-ON)
	for ($i = 0; $i < (count($_SESSION["abstract"]) - 2); $i++) {
		$coauthor_first_name[$i] = !empty($coauthor_submit_data[$i]) ? $coauthor_submit_data[$i]["add_co_first_name" . $i] : "";
		$coauthor_last_name[$i] = !empty($coauthor_submit_data[$i]) ? $coauthor_submit_data[$i]["add_co_last_name" . $i] : "";
		$coauthor_email[$i] = !empty($coauthor_submit_data[$i]) ? $coauthor_submit_data[$i]["add_co_email" . $i] : "";
		$coauthor_affiliation[$i] = !empty($coauthor_submit_data[$i]) ? $coauthor_submit_data[$i]["add_co_affiliation" . $i] : "";
	}

	/*
	$co_first_name1 = !empty($co_submit_data2) ? $co_submit_data2["add_co_first_name1"] : "";
	$co_last_name1 = !empty($co_submit_data2) ? $co_submit_data2["add_co_last_name1"] : "";
	$co_affiliation1 = !empty($co_submit_data2) ? $co_submit_data2["add_co_affiliation1"] : "";

	$co_first_name2 = !empty($co_submit_data3) ? $co_submit_data3["add_co_first_name2"] : "";
	$co_last_name2 = !empty($co_submit_data3) ? $co_submit_data3["add_co_last_name2"] : "";
	$co_affiliation2 = !empty($co_submit_data3) ? $co_submit_data3["add_co_affiliation2"] : "";
	*/

	echo "<script> var nation = [];";
	if (!empty($nation_list)) {
		foreach ($nation_list as $list) {
			$idx = $list["idx"];
			$nation_ko = $list["nation_ko"];
			$nation_en = $list["nation_en"];

			echo "nation.push({idx : {$idx}, nation_ko : '{$nation_ko}', nation_en : '{$nation_en}'});";
		}
	}
	echo "</script>";
?>
<style>
	.submit_application .steps_area {margin-top: 100px;}
</style>
<section class="submit_application abstract_submission2 abstract_online_submission container">
    <div class="">
        <h1 class="page_title">초록 접수</h1>
        <!-- <ul class="tab_green long">
				<li><a href="./abstract_submission_guideline.php">Abstract Submission Guideline</a></li>
				<li class="on"><a href="./abstract_submission.php">Online Submission</a></li>
				<li><a href="./abstract_submission_oral.php">Oral Presenters</a></li>
				<li><a href="./abstract_submission_exhibition.php">Poster Exhibition</a></li>
				<li><a href="./abstract_submission_award.php">Awards & Grants</a></li>
			</ul> -->
        <div class="section section1">
            <div class="steps_area">
                <ul class="clearfix">
                    <li class="next">
                        <p>Step 1</p>
                        <!-- <p></p> -->
                        <p class="sm_txt">초록 저자 정보 입력<br>(발표저자/교신저자)</p>
                        <!-- <p class="sm_txt"><?= $locale("abstract_online_tit1") ?></p> -->
                    </li>
                    <li class="on">
                        <p>Step 2</p>
						<p class="sm_txt">초록 파일 업로드<br>*발표 형식/카테고리 선택</p>
                        <!-- <p class="sm_txt"><?= $locale("abstract_submit_tit2") ?></p> -->
                    </li>
                    <li>
                        <p>Step 3</p>
						<p class="sm_txt">제출 완료 및 확인</p>
                        <!-- <p class="sm_txt"><?= $locale("submit_completed_tit") ?></p> -->
                    </li>
                </ul>
            </div>
            <div class="input_area">
				<h3 class="title">
					초록 정보
					<span class="mini_alert"> 필수 입력 사항(<span class="red_txt">*</span>)</span>
				</h3>
                <ul class="basic_ul">
                    <li>
                        <p class="label">발표 형식<span class="red_txt">*</span></p>
                        <!-- <p class="label"><?= $locale("abstract_item_title") ?> *</p> -->
                        <div>
                            <select name="presentation_type" id="presentation_type">
                                <?php
									$i_count = 0;
									if (!$presentation_type) {
										echo '<option value="" hidden>Choose</option>';
									}
									$presentation_type_arr = array("구연/포스터", "구연", "포스터");
									foreach ($presentation_type_arr as $value) {
										if ($presentation_type == $i_count) {
											echo '<option value=' . ($i_count) . ' selected>' . $value . '</option>';
										} else {
											echo '<option value=' . ($i_count) . '>' . $value . '</option>';
										}
										$i_count++;
									}
									?>
                            </select>
                        </div>
                        <div class="radio_wrap mt10">
                            <ul class="flex">
                                <li class="initials">
                                    <input type="checkbox" class="new_radio" id="presentation_type_yn" <?=$presentation_type_yn == 'Y' ? "checked" : "" ?>>
                                    <label for="presentation_type_yn"><i></i>최종 발표 형식은 심사를 통해 결정되며, 개별 공지될 예정임을 확인하였습니다.</label>
                                </li>
                            </ul>
                        </div>
                    </li>
					<li>
                        <p class="label">카테고리 <span class="red_txt">*</span></p>
                        <!-- <p class="label"><?= $locale("abstract_item_file") ?> *</p> -->
                        <div>
                            <select name="abstract_category" id="">
                                <option value="" hidden>카테고리 선택</option>
                                <?php
                                    foreach ($category_list as $index => $list) {
                                        $selected = $abstract_category == $list["idx"] ? "selected" : "";
                                        echo "<option value='" . $list["idx"] . "'" . $selected . ">" . ($index + 1) . ". " . $list["title_en"] . "</option>";
                                    }
                                    ?>
                            </select>
                        </div>
                    </li>
                    <!--[231201] sujeoung /학회팀 요청/ 제목에 한글 제외-->
					<li>
                        <p class="label">초록 제목 <span class="red_txt">*</span><span class="mb10"><b style="color:#c71b1b;">영문작성만 가능합니다. 
</b></span></p>
                        <div>
                            <input type="text" id="abstract_title" name="abstract_title" class="en_num_keyup" maxlength="200" value="<?= $abstract_title ?>">
                        </div>
                    </li>
                    <li>
                        <p class="label">초록 업로드 <span class="red_txt">*</span></p>
                        <div>
                            <div class="file_input search_file clearfix">
                                <input type="file" name="abstract_file" accept=".doc, .docx">
                                <label class='label_form' data-js-label><?= $file_name != "" ? $file_name : "MS word 파일 형식(.docx)으로 업로드해 주십시오 " ?></label>
                                <span class="btn floatR"><img src="./img/icons/icon_search_yellow.svg"
                                        alt="">Search</span>
                            </div>
                        </div>
                    </li>
                </ul>
				<div class="btn_wrap submission_step2">
					<!-- 활성화 시, gray_btn 제거 & blue_btn 추가 -->
					<button type="button" class="btn gray_btn"
                        onclick="window.location.href='./abstract_submission.php?session=Y<?= $abstract_idx ? "&idx=" . $abstract_idx : "" ?>';"><!-- <span>&lt;</span> -->이전</button>
					<button type="button" class="btn submit_button blue_btn on"
                        data-idx="<?= $abstract_idx ?>">제출하기<!-- <span>&gt;</span> --></button>
				</div>
            </div>
        </div>
    </div>
    <div class="popup preview_pop" style="display: none;">
        <div class="pop_bg"></div>
        <div class="pop_contents">
            <button type="button" class="pop_close"><img src="./img/icons/pop_close.png"></button>
            <input type="hidden" name="registration_idx" value="3">
            <div class="table_wrap c_table_wrap input_table">
                <table class="c_table">
                    <tbody>
                        <tr>
                            <th><?= $locale("categories") ?> *</th>
                            <td>
                                <!-- <select name="abstract_category" disabled> -->
                                <?php
									foreach ($category_list as $list) {
										$selected = $abstract_category == $list["idx"] ? "selected" : "";
										echo "<option value='" . $list["idx"] . "'" . $selected . ">" . $list["title"] . "</option>";
									}
									?>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="data_area">
                <h3 class="sub_section_title"><?= $locale("presenting_authors") ?></h3>
                <div class="table_wrap c_table_wrap input_table">
                    <table class="c_table">
                        <tbody>
                            <tr>
                                <th><?= $locale("country") ?> *</th>
                                <td>
                                    <select class="required" name="nation_no" disabled>
                                        <?php
											foreach ($nation_list as $list) {
												$nation = $language == "en" ? $list["nation_en"] : $list["nation_ko"];
												$selected = $nation_no == $list["idx"] ? "selected" : "";
												echo "<option value='" . $list["idx"] . "'" . $selected . ">" . $nation . "</option>";
											}
											?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th><?= $locale("first_name") ?> *</th>
                                <td><input class="required" type="text" name="first_name" value="<?= $first_name ?>"
                                        readonly></td>
                            </tr>
                            <tr>
                                <th><?= $locale("last_name") ?> *</th>
                                <td><input class="required" type="text" name="last_name" value="<?= $last_name ?>"
                                        readonly></td>
                            </tr>
                            <tr>
                                <th><?= $locale("city") ?> *</th>
                                <td><input class="required" type="text" name="city" value="<?= $city ?>" readonly></td>
                            </tr>
                            <tr>
                                <th><?= $locale("state") ?></th>
                                <td><input type="text" name="state" value="<?= $state ?>" readonly></td>
                            </tr>
                            <tr>
                                <th><?= $locale("affiliation") ?> *</th>
                                <td class="affiliation_td">
                                    <ul class="" style="<?= $affiliation != "" ? "display:block" : "" ?>">
                                        <?php
											if ($affiliation != "") {
												$affiliation_arr = explode(",", $affiliation);

												foreach ($affiliation_arr as $list) {
													echo '<li class="clearfix">';
													echo	'<p>' . $list . '</p>';
													echo '</li>';
												}
											}
											?>
                                    </ul>
                                    <input type="hidden" name="affiliation" value="<?= $affiliation ?>">
                                </td>
                            </tr>
                            <tr>
                                <th><?= $locale("abstract_item_position") ?> *</th>
                                <td>
                                    <div class="radio_wrap">
                                        <ul class="flex">
                                            <li>
                                                <input type="radio" class="radio required" id="position1"
                                                    name="position" value="0"
                                                    <?= $position == "0" ? "checked" : "" ?>><label
                                                    for="position1">Professor</label>
                                            </li>
                                            <li>
                                                <input type="radio" class="radio required" id="position2"
                                                    name="position" value="1"
                                                    <?= $position == "1" ? "checked" : "" ?>><label
                                                    for="position2">Physician</label>
                                            </li>
                                            <li>
                                                <input type="radio" class="radio required" id="position3"
                                                    name="position" value="2"
                                                    <?= $position == "2" ? "checked" : "" ?>><label
                                                    for="position3">Researcher</label>
                                            </li>
                                            <li>
                                                <input type="radio" class="radio required" id="position4"
                                                    name="position" value="3"
                                                    <?= $position == "3" ? "checked" : "" ?>><label
                                                    for="position4">Student</label>
                                            </li>
                                        </ul>
                                        <div class="flex sm_input other_input_wrap">
                                            <input type="radio" class="radio required" id="position5" name="position"
                                                value="4" <?= $position == "4" ? "checked" : "" ?>><label
                                                for="position5">Others</label>
                                            <input type="text" class="other_input" name="other_position"
                                                value="<?= $other_position ?>"
                                                style="<?= $position == "4" ? "display:block" : "" ?>">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th><?= $locale("email") ?> *</th>
                                <td><input class="required" type="text" name="email" value="<?= $email ?>" readonly>
                                </td>
                            </tr>
                            <tr>
                                <th rowspan="2"><?= $locale("office_mobile_phone") ?> *</th>
                                <td>
                                    <div class="clearfix">
                                        <select class="required" name="nation_tel" disabled>
                                            <option value="<?= $nation_tel ?>" selected><?= $nation_tel ?></option>
                                        </select>
                                        <input class="required" type="text" placeholder="010-0000-0000" name="phone"
                                            value="<?= $phone ?>" readonly>
                                </td>
                </div>
                </td>
                </tr>
                </tbody>
                </table>
            </div>
            <h3 class="sub_section_title"><?= $locale("corresponding_authors") ?></h3>
            <div class="table_wrap c_table_wrap input_table">
                <table class="c_table">
                    <tbody>
                        <tr>
                            <th><?= $locale("country") ?> *</th>
                            <td>
                                <select class="required co_nation" name="co_nation_no" data-count="1" disabled>
                                    <?php
										foreach ($nation_list as $list) {
											$nation = $language == "en" ? $list["nation_en"] : $list["nation_ko"];
											$selected = $co_nation_no == $list["idx"] ? "selected" : "";
											echo "<option value='" . $list["idx"] . "'" . $selected . ">" . $nation . "</option>";
										}
										?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th><?= $locale("first_name") ?> *</th>
                            <td><input class="required" type="text" name="co_first_name" value="<?= $co_first_name ?>"
                                    readonly></td>
                        </tr>
                        <tr>
                            <th><?= $locale("last_name") ?>*</th>
                            <td><input class="required" type="text" name="co_last_name" value="<?= $co_last_name ?>"
                                    readonly></td>
                        </tr>
                        <tr>
                            <th><?= $locale("city") ?> *</th>
                            <td><input class="required" type="text" name="co_city" value="<?= $co_city ?>" readonly>
                            </td>
                        </tr>
                        <tr>
                            <th><?= $locale("state") ?></th>
                            <td><input type="text" name="co_state" value="<?= $co_state ?>" readonly></td>
                        </tr>
                        <tr>
                            <th><?= $locale("affiliation") ?> *</th>
                            <td class="affiliation_td">
                                <ul class=" " style="<?= $co_affiliation != "" ? "display:block" : "" ?>">
                                    <?php
										if ($co_affiliation != "") {
											$affiliation_arr = explode(",", $co_affiliation);

											foreach ($affiliation_arr as $list) {
												echo '<li class="clearfix">';
												echo	'<p>' . $list . '</p>';
												echo '</li>';
											}
										}
										?>
                                </ul>
                                <input type="hidden" name="co_affiliation" value="<?= $co_affiliation ?>">
                            </td>
                        </tr>
                        <tr>
                            <th><?= $locale("abstract_item_position") ?> *</th>
                            <td>
                                <div class="radio_wrap">
                                    <ul class="flex">
                                        <li>
                                            <input type="radio" class="radio required" id="position6" name="co_position"
                                                value="0" <?= $co_position == "0" ? "checked" : "" ?>><label
                                                for="position6">Professor</label>
                                        </li>
                                        <li>
                                            <input type="radio" class="radio required" id="position7" name="co_position"
                                                value="1" <?= $co_position == "1" ? "checked" : "" ?>><label
                                                for="position7">Physician</label>
                                        </li>
                                        <li>
                                            <input type="radio" class="radio required" id="position8" name="co_position"
                                                value="2" <?= $co_position == "2" ? "checked" : "" ?>><label
                                                for="position8">Researcher</label>
                                        </li>
                                        <li>
                                            <input type="radio" class="radio required" id="position9" name="co_position"
                                                value="3" <?= $co_position == "3" ? "checked" : "" ?>><label
                                                for="position9">Student</label>
                                        </li>
                                    </ul>
                                    <div class="flex sm_input other_input_wrap">
                                        <input type="radio" class="radio required" id="position10" name="co_position"
                                            value="4" <?= $co_position == "4" ? "checked" : "" ?>><label
                                            for="position10">Others</label>
                                        <input type="text" class="other_input" name="co_other_position"
                                            value="<?= $co_other_position ?>"
                                            style="<?= $co_position == "4" ? "display:block" : "" ?>">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th><?= $locale("email") ?> *</th>
                            <td><input class="required" type="text" name="co_email" value="<?= $co_email ?>" readonly>
                            </td>
                        </tr>
                        <tr>
                            <th rowspan="2"><?= $locale("office_mobile_phone") ?> *</th>
                            <td>
                                <div class="clearfix">
                                    <select class="required" name="co_nation_tel1" disabled>
                                        <option value="<?= $co_nation_tel ?>" selected>
                                            <?= $co_nation_tel != "" ? $co_nation_tel : "select" ?></option>
                                    </select>
                                    <input class="required" type="text" placeholder="010-0000-0000" name="co_phone"
                                        value="<?= $co_phone ?>" readonly>
                            </td>
            </div>
            </td>
            </tr>
            </tbody>
            </table>
        </div>
        <h3 class="sub_section_title">Co-author</h3>
        <!--coauthor append-->
        <div class="">
            <?php
				if ($coauthor_submit_data[0] != "") {
					for ($i = 0; $i < ($data_count - 2); $i++) {
						$display = ${"co_affiliation" . $i} != "" ? "block" : "none";
				?>
            <div class="table_wrap c_table_wrap input_table" style="margin-top:20px;">
                <table class="c_table">
                    <tr>
                        <th><?= $locale("first_name") ?> *</th>
                        <td><input class="required" type="text" name="add_co_first_name<?= $i ?>"
                                value="<?= $coauthor_first_name[$i] ?>" maxlength="50" readonly></td>
                    </tr>
                    <tr>
                        <th><?= $locale("last_name") ?> *</th>
                        <td><input class="required" type="text" name="add_co_last_name<?= $i ?>"
                                value="<?= $coauthor_last_name[$i] ?>" maxlength="50" readonly></td>
                    </tr>
                    <tr>
                        <th><?= $locale("email") ?> *</th>
                        <td><input class="required" type="text" name="add_co_email<?= $i ?>"
                                value="<?= $coauthor_email[$i] ?>" maxlength="50" readonly></td>
                    </tr>
                    <tr>
                        <th><?= $locale("affiliation") ?> *</th>
                        <td class="affiliation_td">
                            <ul class=" affiliation_wrap_<?= $i ?>">
                                <?php
											if ($coauthor_affiliation[$i] != "") {
												$affiliation_arr = explode(",", $coauthor_affiliation[$i]);
												foreach ($affiliation_arr as $list) {
											?>
                                <li class="clearfix">
                                    <p><?= $list ?></p>
                                </li>
                                <?php
												}
											}
											?>
                            </ul>
                            <input type="hidden" name="add_co_affiliation<?= $i ?>"
                                value="<?= $coauthor_affiliation[$i] ?>">
                        </td>
                    </tr>
                </table>
            </div>
            <?php
					}
				}
				?>
        </div>
        <h3 class="sub_section_title">Abstract File</h3>
        <div class="table_wrap c_table_wrap input_table">
            <table class="c_table">
                <tbody>
                    <tr>
                        <th><?= $locale("abstract_item_title") ?> *</th>
                        <td><input class="required" type="text" name="abstract_title" value="" readonly></td>
                    </tr>
                    <tr>
                        <th><?= $locale("abstract_item_file") ?> *</th>
                        <td><input class="required" type="text" name="abstract_file" value="" readonly></td>
                    </tr>
                    <tr>
                        <th><?= $locale("abstract_oral_presentation") ?> *</th>
                        <td><input class="required" type="text" name="abstract_oral_presentation" value="" readonly>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
    </div>
    </div>
    </div>
</section>

<div class="loading">
    <img src="./img/icons/loading.gif" />
</div>

<script src="./js/script/client/submission.js"></script>
<script>
var tes = null;
$(document).ready(function() {
    $(document).on("click", ".submit_button", function() {
        var idx = $(this).data("idx");
        var type = idx ? "update" : "insert";
		
		//console.log("idx : "+idx+" type : "+type);

		if(!$("#presentation_type_yn:checked").length) {
			alert("동의 여부를 선택해주십시오.");
			return;
		}
			
        var process = InputCheck(type, idx);
        var status = process.status;
        var data = process.data;

        if (status) {
            $(".loading").show();
            $("body").css("overflow-y", "hidden");

            $.ajax({
                url: "./ajax/client/ajax_submission.php",
                type: "POST",
                data: data,
                dataType: "JSON",
                contentType: false,
                processData: false,
                success: function(res) {
                    if (res.code == 200) {
						tes = res;
                        gmail_abstract(res.language, res.idx, res.email, res.subject, res.user_email, res.title, res.abstract_title);

                        alert(locale(language.value)("abstract_submit_ok"));
                        $(window).off("beforeunload");
                        window.location.replace("./mypage_abstract.php");
                    } else if (res.code == 400) {
                        alert(locale(language.value)("abstract_submit_error"));
                        return false;
                    } else {
                        alert(locale(language.value)("reject_msg"));
                        return false;
                    }
                },
                complete: function() {
                    $(".loading").hide();
                    $("body").css("overflow-y", "auto");
                }
            });
        }
    });
    $('.preview_pop_btn').on('click', function() {

        var abstract_title = $('form[name=abstract_form] input[name=title]').val();
        var abstract_file = $('form[name=abstract_form] .file_input span.label').html();
        var oral_presentation = $(
                'form[name=abstract_form] .radio_wrap input[name=oral_presentation]:checked+label')
            .html();
        $(".preview_pop input[name=abstract_title]").val(abstract_title);
        $(".preview_pop input[name=abstract_file]").val(abstract_file);
        $(".preview_pop input[name=abstract_oral_presentation]").val(oral_presentation);
        $('.preview_pop input[name=position]').attr('disabled', true);
        $('.preview_pop input[name=co_position]').attr('disabled', true);
        $('.preview_pop').show();
    });

    $("input[name=abstract_file]").on("change", function() {
        var lecture_file_type = ["DOCX", "DOC"];
        var label = $(this).val().replace(/^.*[\\\/]/, '');
        var type = $(this).val().replace(/^.*[.]/, '').toUpperCase();

        //파일 용량 제한
        var file = $(this)[0].files[0];
        if (file.size > (10 * 1024 * 1024)) {
            alert("10MB 이하의 파일만 업로드 가능합니다..");
            $(this).val('');
            return false;
        }

        var fileCheck = true; //fileCheck(file);

        if (!lecture_file_type.includes(type)) {
            alert(locale(language.value)("mismatch_file_type"));
            $(this).val("");
            return false;
        }

        if (!fileCheck) {
            // alert(locale(language.value)("file_size_error"));
            $(this).val("");
            return false;
        }

        if ($(this).val() != "") {
            $(".label_form").text(label);
        } else {
            $(".label_form").text("");
        }

    });

    /**[231201] sujeong 수정 / 학회팀 요청 / 제목에 한글 방지 추가*/
    $(document).on("keyup", ".en_num_keyup", function(key) {
        var pattern = /[\[\]{}<>|`\"'\\ㄱ-ㅎㅏ-ㅣ가-힣]/g;
        var _this = $(this);
        if (key.keyCode != 8) {
            var abstract_title = _this.val().replace(pattern, '');
            _this.val(abstract_title);
        }
});

});


function gmail_abstract(language, idx, email, subject, user_email, title, abstract_title) {

    $.ajax({
        url: PATH + "ajax/client/ajax_gmail.php",
        type: "POST",
        data: {
            flag: "abstract",
			idx: idx,
            language: language,
            email: email,
            subject: subject,
            user_email: user_email,
            title: title,
            abstract_title: abstract_title
        },
        dataType: "JSON",
        success: function(res) {
            if (res.code == 200) {
                //alert(locale(language.value)("abstract_submit_ok"));
                //$(window).off("beforeunload");
                //window.location.replace("./abstract_submission3.php");
            } else {
                alert("error");
                return false;
            }
        }
    });
}

function InputCheck(type, idx = '') {
    var data = new FormData();
    var inputCheck = true;

    //if($("input[name=title]").val() == "") {
    //	alert(locale(language.value)("check_abstract_title"));
    //	inputCheck = false;
    //	return false;
    //}
    /* 논문 제목 제한 제외
    else {
    	if($("input[name=title]").val().length > 25) {
    		alert(locale(language.value)("under_25"));
    		inputCheck = false;
    		return false;
    	}
    }
    */

    var presentation_type_yn = $("#presentation_type_yn").is(":checked");
    if (presentation_type_yn == true) {
        presentation_type_yn = 'Y';
    } else {
        presentation_type_yn = 'N';
    }

    var presentation_type = $("select[name=presentation_type]").val();
    if (presentation_type == "" || presentation_type == null) {
        alert("check Presentation Type");
        return;
    }

    var abstract_category = $("select[name=abstract_category]").val();
    if (abstract_category == "" || abstract_category == null) {
        alert("카테고리를 선택해 주세요.");
        return;
    }

    var abstract_title = $("input[name=abstract_title]").val();
    if (abstract_title == "" || abstract_title == null) {
        alert("제목을 입력해 주세요.");
        return;
    }

    if (type != "update") {
        if (!$("input[name=abstract_file]").val()) {
            alert(locale(language.value)("check_abstract_file"));
            inputCheck = false;
            return false;
        }
    } else {
        data.append("type", type);
        data.append("idx", idx);
    }


    //if(!$("input[name=oral_presentation]").is(":checked")) {
    //	alert(locale(language.value)("check_oral_presentation"));
    //	inputCheck = false;
    //	return false;
    //}

    //data.append("title", $("input[name=title]").val());
    //data.append("oral_presentation", $("input[name=oral_presentation]:checked").val());

	data.append("title", abstract_title);
    data.append("presentation_type_yn", presentation_type_yn);
    data.append("presentation_type", presentation_type);
    data.append("abstract_category", abstract_category);

    if ($("input[name=abstract_file]")[0].files[0]) {
        data.append("abstract_file", $("input[name=abstract_file]")[0].files[0]);
    }

    data.append("flag", "abstract_step2");

    return {
        data: data,
        status: inputCheck
    }
}
</script>
<?php
// 테스트
// }
include_once('./include/footer.php');
?>