<?php include_once('./include/head.php'); ?>
<?php include_once('./include/header.php'); ?>
<script src="./js/script/client/program_detail.js?v=0.5"></script>

<?php

$type = $_GET['type'];
$e = $_GET['e'];
$day = $_GET['day'];
$e_num = $e[-1];
$d_num = $day[-1];
$category = $_GET['category'];

$name = $_GET['name'];

//echo 'asdasd', $e_num;

//kcode == 116 새로고침

echo '<script type="text/javascript">
				  $(document).ready(function(){
					  //탭 활성화
					  //큰탭
					  $(".tab_green li").removeClass("on");
					  if ("' . $day . '" === "") {
						$(".tab_green li:first-child").addClass("on");
					  }else{
                         $(".tab_li li").removeClass("on")
                         $("#'.$category.'").addClass("on")
                         var index = $("#'.$category.'").index();

					     $(".tab_wrap > .tab_cont").removeClass("on");
					     $(".tab_wrap > .tab_cont").eq(index).addClass("on");
                      }

					  window.onkeydown = function() {
					  	var kcode = event.keyCode;
						if(kcode == 116) {
							history.replaceState({}, null, location.pathname);
							window.scrollTo({top:0, left:0, behavior:"auto"});
						}
					  }

					  //스크롤 위치 & 액션
					  $(".program_detail_ul li").each(function(){
						if("' . $name . '" === $(this).attr("name")) {
							var this_top = $(this).offset().top;
							$("html, body").animate({scrollTop: this_top - 400}, 1000);
							console.log("scrollTop: ", this_top - 150)
						}
					  });

				  });
		</script>';


?>



<section class="container program_detail">
    <h1 class="page_title">Program Details</h1>
    <div class="inner">
        <!-- <ul class="tab_green long centerT detail_program"> -->
        <ul class="tab_li">
            <li id="plenary_lecture" class="on"><a href="javascript:;">Plenary Lecture</a></li>
            <li id="keynote_lecture"><a href="javascript:;">Keynote Lecture</a></li>
            <li id="special_lecture_1"><a href="javascript:;">문석학술상</a></li>
            <li id="special_lecture_2"><a href="javascript:;">젊은연구자상</a></li>
            <li id="oral_presentation"><a href="javascript:;">Oral Presentation</a></li>
            <li id="pre_congress_symposium"><a href="javascript:;">Pre-congress Symposium</a></li>
            <li id="symposium"><a href="javascript:;">Symposium</a></li>
            <li id="satellite_symposium"><a href="javascript:;">Satellite Symposium</a></li>
            <li id="breakfast_symposium"><a href="javascript:;">Breakfast Symposium</a></li>
            <li id="luncheon_symposium"><a href="javascript:;">Luncheon Lecture</a></li>
        </ul>
        <div class="tab_wrap">
            
            <!-- Plenary lecture -->
            
            <div class="tab_cont on">
                <ul class="program_detail_ul">
                        <li name="special_lecture_1">
                                <div class="program_header">
                                    <p class="font_16 bold">3월 9일(토)</p>
                                    <span class="font_16 bold">ROOM 1, 2, 3</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>12:40-13:20</td>
                                                <td>
                                                    <!-- <p class="font_16 font_pink">2024.03.09. ROOM 1, 2, 3</p> -->
                                                    <p class="font_20 bold">Plenary Lecture</p>
                                                    <!-- <p><span class="bold">Chairperson : 박철영</span> (TBD)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer : TBD (TBD)</p>
                                                    <ul>
                                                        <li>(Plenary Lecture Detail)</li>
                                                        <li>(Plenary Lecture Detail)</li>
                                                        <li>(Plenary Lecture Detail)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                    <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody id="plenary_lecture_1">
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                        </li>
                </ul>
            </div>

            <!-- Keynote lecture -->

                    <div class="tab_cont">
                        <ul class="program_detail_ul">
                            <li name="keynote_lecture_1">
                                <div class="program_header">
                                    <p class="font_16 bold">3월 9일(토)</p>
                                    <span class="font_16 bold">ROOM 1</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>11:40-12:40</td>
                                                <td>
                                                    <!-- <p class="font_16 font_pink">2024.03.09. ROOM 1</p> -->
                                                    <p class="font_20 bold">Keynote Lecture 1</p>
                                                    <!-- <p><span class="bold">Chairperson : 이규래</span> (TBD)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer: TBD (TBD)</p>
                                                    <ul>
                                                        <li>(Keynote Lecture 1 Detail)</li>
                                                        <li>(Keynote Lecture 1 Detail)</li>
                                                        <li>
                                                            <span class="font_inherit bold">• 참고자료</span><br />
                                                            1.TBD<br />
                                                            2.TBD
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                    <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody id="keynote_lecture_1">
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="keynote_lecture_2">
                                <div class="program_header">
                                    <p class="font_16 bold">3월 9일(토)</p>
                                    <span class="font_16 bold">ROOM 2</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>11:40-12:40</td>
                                                <td>
                                                    <!-- <p class="font_16 font_pink">2024.03.09. ROOM 1</p> -->
                                                    <p class="font_20 bold">Keynote Lecture 2</p>
                                                    <!-- <p><span class="bold">Chairperson : 이문규</span> (TBD)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer: TBD (TBD), TBD (TBD)</p>
                                                    <ul>
                                                        <li>(Keynote Lecture 2 Detail)</li>
                                                        <li>
                                                            <span class="font_inherit bold">• 참고자료</span><br />
                                                            1.TBD<br />
                                                            2.TBD
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                    <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody id="keynote_lecture_2">
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </div>

                        
            <!-- 문석학술상 -->
            
            <div class="tab_cont">
                <ul class="program_detail_ul">
                        <li name="special_lecture_1">
                                <div class="program_header">
                                    <p class="font_16 bold">3월 9일(토)</p>
                                    <span class="font_16 bold">ROOM 3</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_orange_bg">
                                                <td>12:40-13:20</td>
                                                <td>
                                                    <!-- <p class="font_16 font_pink">2024.03.09. ROOM 3</p> -->
                                                    <p class="font_20 bold">문석학술상</p>
                                                    <!-- <p><span class="bold">Chairperson : 박철영</span> (TBD)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer : TBD (TBD)</p>
                                                    <ul>
                                                        <li>(Plenary Lecture Detail)</li>
                                                        <li>(Plenary Lecture Detail)</li>
                                                        <li>(Plenary Lecture Detail)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                    <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody id="special_lecture_detail_1">
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                        </li>
                </ul>
            </div>
     
                 <!-- 젊은연구자상-->
            
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
                            <li name="special_lecture_2">
                                <div class="program_header">
                                    <p class="font_16 bold">3월 9일(토)</p>
                                    <span class="font_16 bold">ROOM 1, 2, 3</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_orange_bg">
                                                <td>15:40-16:10</td>
                                                <td>
                                                    <!-- <p class="font_16 font_pink">2024.03.09. ROOM 3</p> -->
                                                    <p class="font_20 bold">젊은연구자상</p>
                                                    <!-- <p><span class="bold">Chairperson : TBD</span> (TBD)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer : TBD (TBD)</p>
                                                    <ul>
                                                        <li>(Plenary Lecture Detail)</li>
                                                        <li>(Plenary Lecture Detail)</li>
                                                        <li>(Plenary Lecture Detail)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                    <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody id="special_lecture_detail_2">
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </div>

                                <!-- Oral Presentation -->

                    <div class="tab_cont">
                        <ul class="program_detail_ul">
                        <li name="oral_presentation_1">
                                <div class="program_header">
                                    <p class="font_16 bold">3월 9일(토)</p>
                                    <span class="font_16 bold">ROOM 4</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_orange_bg">
                                                <td>08:30-10:00</td>
                                                <td>
                                                    <!-- <p class="font_16 font_pink">2024.03.09. ROOM 4</p> -->
                                                    <p class="font_20 bold">Oral Presentation 1</p>
                                                    <!-- <p>
                                                        <span class="bold">Chairpersons : 정창희</span> (TBD), <br>
                                                        <span class="bold">고혜진</span> (TBD)
                                                    </p> -->
                                                    <!-- [↓] 확정 시 까지 버튼 숨김 -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기 </button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer: TBD (TBD), TBD (TBD)</p>
                                                    <ul>
                                                        <li>(Oral Presentation 1 Detail)</li>
                                                        <li>(Oral Presentation 1 Detail)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                    <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody id="oral_presentation_1">
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="oral_presentation_2">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_orange_bg">
                                                <td>14:00-15:30</td>
                                                <td>
                                                    <!-- <p class="font_16 font_pink">2024.03.09. ROOM 4</p> -->
                                                    <p class="font_20 bold">Oral Presentation 2</p>
                                                    <!-- <p>
                                                        <span class="bold">Chairpersons : 박정환</span> (TBD), <br><span
                                                            class="bold">남가은</span> (TBD)
                                                    </p> -->
                                                    <!-- [↓] 확정 시 까지 버튼 숨김 -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기 </button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer: TBD (TBD), TBD (TBD)</p>
                                                    <ul>
                                                        <li>(Oral Presentation 1 Detail)</li>
                                                        <li>(Oral Presentation 1 Detail)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                    <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody id="oral_presentation_2">
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </div>
                  

            <!-- Pre-congress Symposium -->

            <div class="tab_cont">
                        <ul class="program_detail_ul">
                            <li name="pre_congress_symposium_1">
                                <div class="program_header">
                                    <p class="font_16 bold">3월 8일(금)</p>
                                    <span class="font_16 bold">ROOM 1</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>14:50-16:20</td>
                                                <td> 
                                                    <!-- <p class="font_16 font_pink">2024.03.08. ROOM 1</p> -->
                                                    <p class="font_20 bold">Pre-congress Symposium 1</p>
                                                    <!-- <p><span class="bold">Chairperson : TBD</span> (TBD)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer: TBD (TBD)</p>
                                                    <ul>
                                                        <li>(Keynote Lecture 1 Detail)</li>
                                                        <li>(Keynote Lecture 1 Detail)</li>
                                                        <li>
                                                            <span class="font_inherit bold">• 참고자료</span><br />
                                                            1.TBD<br />
                                                            2.TBD
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                    <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody id="pre_congress_symposium_1">
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="pre_congress_symposium_2">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>16:30-18:05</td>
                                                <td>
                                                    <!-- <p class="font_16 font_pink">2024.03.08. ROOM 1</p> -->
                                                    <p class="font_20 bold">Pre-congress Symposium 2</p>
                                                    <!-- <p><span class="bold">Chairperson : TBD</span> (TBD)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer: TBD (TBD), TBD (TBD)</p>
                                                    <ul>
                                                        <li>(Keynote Lecture 2 Detail)</li>
                                                        <li>
                                                            <span class="font_inherit bold">• 참고자료</span><br />
                                                            1.TBD<br />
                                                            2.TBD
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody id="pre_congress_symposium_2">
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </div>

                   
            <!-- Symposium -->

            <div class="tab_cont">
                        <ul class="program_detail_ul">
                            <li name="symposium_1">
                                <div class="program_header">
                                    <p class="font_16 bold">3월 9일(토)</p>
                                    <span class="font_16 bold">ROOM 1</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>08:30-10:00</td>
                                                <td>
                                                    <!-- <p class="font_16 font_green">2024.03.09. ROOM 1</p> -->
                                                    <p class="font_20 bold">Symposium 1 : Treatment of obesity</p>
                                                    <!-- <p><span class="bold">Chairpersons : 이창범</span> (TBD), <br><span
                                                            class="bold">강지현</span> (TBD)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer : 문준성, 박경희</p>
                                                    <ul>
                                                        <li>(Symposium 1 Detail)</li>
                                                        <li>(Symposium 1 Detail)</li>
                                                        <li>(Symposium 1 Detail)</li>
                                                    </ul>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                    <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody id="symposium_1">
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="symposium_4">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>10:10-11:40</td>
                                                <td>
                                                    <!-- <p class="font_16 font_green">2024.03.09. ROOM 1</p> -->
                                                    <p class="font_20 bold">Symposium 4 : Environmental, genetics and obesity</p>
                                                    <!-- <p><span class="bold">Chairpersons : 박혜순</span> (TBD), <br><span
                                                            class="bold">김대중</span> (TBD)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                <p class="bold">Organizer: 배재현, 조윤정</p>
                                                    <ul>
                                                        <li>(Symposium 4 Detail)</li>
                                                        <li>(Symposium 4 Detail)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                    <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody id="symposium_4">
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="symposium_7">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>14:00-15:30</td>
                                                <td>
                                                    <!-- <p class="font_16 font_green">2024.03.09. ROOM 1</p> -->
                                                    <p class="font_20 bold">Symposium 7 : New Antiobesity Drug</p>
                                                    <!-- <p><span class="bold">Chairpersons : 김성수</span> (TBD), <br><span
                                                            class="bold">권혁태</span> (TBD)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                <p class="bold">Organizer: 이승환, 남가은</p>
                                                    <ul>
                                                        <li>(Symposium 7 Detail)</li>
                                                        <li>(Symposium 7 Detail)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                    <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody id="symposium_7">
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="symposium_10">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>16:10-17:40</td>
                                                <td>
                                                    <!-- <p class="font_16 font_green">2024.03.09. ROOM 1</p> -->
                                                    <p class="font_20 bold">Symposium 10 : Cormobidity of obesity</p>
                                                    <!-- <p><span class="bold">Chairpersons : 김선미</span> (TBD), <br><span
                                                            class="bold">황유철</span> (TBD)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                <p class="bold">Organizer: 윤지완, 오범조</p>
                                                    <ul>
                                                        <li>(Symposium 10 Detail)</li>
                                                        <li>(Symposium 10 Detail)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                    <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody id="symposium_10">
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                                
                            <li name="symposium_2">
                                <div class="program_header">
                                    <p class="font_16 bold">3월 9일(토)</p>
                                    <span class="font_16 bold">ROOM 2</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>08:30-10:00</td>
                                                <td>
                                                    <!-- <p class="font_16 font_green">2024.03.09. ROOM 2</p> -->
                                                    <p class="font_20 bold">Symposium 2 : Integrative physiology and molecular mechanisms of obesity</p>
                                                    <!-- <p><span class="bold">Chairpersons : 유순집</span> (TBD), <br><span
                                                            class="bold">김기우</span> (TBD)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer: TBD (TBD), TBD (TBD)</p>
                                                    <ul>
                                                        <li>(Symposium 2 Detail)</li>
                                                        <li>(Symposium 2 Detail)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                    <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody id="symposium_2">
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="symposium_5">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>10:10-11:40</td>
                                                <td>
                                                    <!-- <p class="font_16 font_green">2024.03.09. ROOM 2</p> -->
                                                    <p class="font_20 bold">Symposium 5 : Gut microbiome</p>
                                                    <!-- <p><span class="bold">Chairpersons : 김상용</span> (TBD), <br><span
                                                            class="bold">손장원</span> (TBD)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                <p class="bold">Organizer: TBD (TBD), TBD (TBD)</p>
                                                    <ul>
                                                        <li>(Symposium 5 Detail)</li>
                                                        <li>(Symposium 5 Detail)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                    <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody id="symposium_5">
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                                                        
                            <li name="symposium_8">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>14:00-15:30</td>
                                                <td>
                                                    <!-- <p class="font_16 font_green">2024.03.09. ROOM 2</p> -->
                                                    <p class="font_20 bold">Symposium 8 : Metabolic Surgery</p>
                                                    <!-- <p><span class="bold">Chairpersons : 한상문</span> (TBD), <br><span
                                                            class="bold">김경곤</span> (TBD)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                <p class="bold">Organizer: 한상문</p>
                                                    <ul>
                                                        <li>(Symposium 8 Detail)</li>
                                                        <li>(Symposium 8 Detail)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                    <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody id="symposium_8">
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                           
                            <li name="symposium_11">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>16:10-17:40</td>
                                                <td>
                                                    <!-- <p class="font_16 font_green">2024.03.09. ROOM 2</p> -->
                                                    <p class="font_20 bold">Symposium 11 : Big Data in Obesity Research+Digital Therapeutics in Obesity Management</p>
                                                    <!-- <p><span class="bold">Chairpersons : 강재헌</span> (TBD), <br><span
                                                            class="bold">이상열</span> (TBD)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                <p class="bold">Organizer: 이상열, 한경도</p>
                                                    <ul>
                                                        <li>(Symposium 10 Detail)</li>
                                                        <li>(Symposium 10 Detail)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                    <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody id="symposium_11">
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>

                            <li name="symposium_3">
                                <div class="program_header">
                                    <p class="font_16 bold">3월 9일(토)</p>
                                    <span class="font_16 bold">ROOM 3</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>08:30-10:00</td>
                                                <td>
                                                    <!-- <p class="font_16 font_green">2024.03.09. ROOM 3</p> -->
                                                    <p class="font_20 bold">Symposium 3 : Postprandial glycemic response and Continuous Glucose Monitoring</p>
                                                    <!-- <p><span class="bold">Chairpersons : 김은미</span> (TBD), <br><span
                                                            class="bold">임정현</span> (TBD)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                <p class="bold">Organizer: 임현정, 김오연, 송수진</p>
                                                    <ul>
                                                        <li>(Symposium 3 Detail)</li>
                                                        <li>(Symposium 3 Detail)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                    <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody id="symposium_3">
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                         
                            <li name="symposium_6">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>10:10-11:40</td>
                                                <td>
                                                    <!-- <p class="font_16 font_green">2024.03.09. ROOM 3</p> -->
                                                    <p class="font_20 bold">Symposium 6 : TBD</p>
                                                    <!-- <p><span class="bold">Chairpersons : 이관우</span> (TBD), <br><span
                                                            class="bold">강준구</span> (TBD)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                <p class="bold">Organizer: 임현정, 김오연, 송수진</p>
                                                    <ul>
                                                        <li>(Symposium 6 Detail)</li>
                                                        <li>(Symposium 6 Detail)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                    <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody id="symposium_6">
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>

                            <li name="symposium_9">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>14:00-15:30</td>
                                                <td>
                                                    <!-- <p class="font_16 font_green">2024.03.09. ROOM 3</p> -->
                                                    <p class="font_20 bold">Symposium 9 : Obesity treatment in adolescent</p>
                                                    <!-- <p><span class="bold">Chairpersons : 이기형 or 정소정 </span> (TBD), <br><span
                                                            class="bold">홍용희</span> (TBD)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                <p class="bold">Organizer: 홍용희</p>
                                                    <ul>
                                                        <li>(Symposium 9 Detail)</li>
                                                        <li>(Symposium 9 Detail)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                    <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody id="symposium_9">
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>

                            <li name="symposium_12">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>16:10-17:40</td>
                                                <td>
                                                    <!-- <p class="font_16 font_green">2024.03.09. ROOM 3</p> -->
                                                    <p class="font_20 bold">Symposium 12 : Exercise, Obesity, and Metabolic Dysfunction</p>
                                                    <!-- <p><span class="bold">Chairpersons : 신윤아</span> (TBD), <br><span
                                                            class="bold">김종희</span> (TBD)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                <p class="bold">Organizer: 이세원, 이민철, 김일영</p>
                                                    <ul>
                                                        <li>(Symposium 12 Detail)</li>
                                                        <li>(Symposium 12 Detail)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                    <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody id="symposium_12">
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </div>


            <!-- Satellite Symposium -->

                    <div class="tab_cont">
                        <ul class="program_detail_ul">
                            <li name="satellite_symposium_1">
                                <div class="program_header">
                                    <p class="font_16 bold">3월 8일(금)</p>
                                    <span class="font_16 bold">ROOM 1</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>18:30-19:00</td>
                                                <td>
                                                    <!-- <p class="font_16 font_blue">2024.03.08. ROOM 1</p> -->
                                                    <p class="font_20 bold">Satellite Symposium 1</p>
                                                    <!-- <p><span class="bold">Chairperson : TBD</span> (TBD)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer: TBD (TBD), TBD (TBD)</p>
                                                    <ul>
                                                        <li>(Satellite Symposium 1 Detail)</li>
                                                        <li>(Satellite Symposium 1 Detail)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                    <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody id="satellite_symposium_1">
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="satellite_symposium_2">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>19:10-19:40</td>
                                                <td>
                                                    <!-- <p class="font_16 font_blue">2024.03.08. ROOM 1</p> -->
                                                    <p class="font_20 bold">Satellite Symposium 2</p>
                                                    <!-- <p><span class="bold">Chairperson : TBD</span> (TBD)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer: TBD (TBD), TBD (TBD)</p>
                                                    <ul>
                                                        <li>(Satellite Symposium 2 Detail)</li>
                                                        <li>(Satellite Symposium 2 Detail)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                    <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody id="satellite_symposium_2">
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </div>



            <!-- Breakfast Symposium -->

                    <div class="tab_cont">
                        <ul class="program_detail_ul">
                        <li name="breakfast_symposium_1">
                                <div class="program_header">
                                    <p class="font_16 bold">3월 9일(토)</p>
                                    <span class="font_16 bold">ROOM 1</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>07:30-08:20</td>
                                                <td>
                                                    <!-- <p class="font_16 font_blue">2024.03.09. ROOM 1</p> -->
                                                    <p class="font_20 bold">Breakfast Symposium 1</p>
                                                    <!-- <p><span class="bold">Chairperson : 오승준</span> (TBD)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer : TBD (TBD)</p>
                                                    <ul>
                                                        <li>(Breakfast Symposium 1 Detail)</li>
                                                        <li>(Breakfast Symposium 1 Detail)</li>
                                                        <li>(Breakfast Symposium 1 Detail)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                    <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody id="breakfast_symposium_1"> 
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="breakfast_symposium_2">
                                <div class="program_header">
                                    <p class="font_16 bold">3월 9일(토)</p>
                                    <span class="font_16 bold">ROOM 2</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>07:30-08:20</td>
                                                <td>
                                                    <!-- <p class="font_16 font_blue">2024.03.09. ROOM 2</p> -->
                                                    <p class="font_20 bold">Breakfast Symposium 2</p> 
                                                    <!-- <p><span class="bold">Chairperson : 김용성</span> (TBD)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer : TBD (TBD)</p>
                                                    <ul>
                                                        <li>(Breakfast Symposium 2 Detail)</li>
                                                        <li>(Breakfast Symposium 2 Detail)</li>
                                                        <li>(Breakfast Symposium 2 Detail)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                    <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody id="breakfast_symposium_2"> 
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="breakfast_symposium_3">
                                <div class="program_header">
                                    <p class="font_16 bold">3월 9일(토)</p>
                                    <span class="font_16 bold">ROOM 3</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>07:30-08:20</td>
                                                <td>
                                                    <!-- <p class="font_16 font_blue">2024.03.09. ROOM 3</p> -->
                                                    <p class="font_20 bold">Breakfast Symposium 3</p>
                                                    <!-- <p><span class="bold">Chairperson : 김경수</span> (TBD)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer : TBD (TBD)</p>
                                                    <ul>
                                                        <li>(Breakfast Symposium 3 Detail)</li>
                                                        <li>(Breakfast Symposium 3 Detail)</li>
                                                        <li>(Breakfast Symposium 3 Detail)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                    <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody id="breakfast_symposium_3"> 
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </div>

            <!-- Luncheon Lecture -->

               <div class="tab_cont">
                        <ul class="program_detail_ul">
                            <li name="luncheon_symposium_1">
                                <div class="program_header">
                                    <p class="font_16 bold">3월 9일(토)</p>
                                    <span class="font_16 bold">ROOM 1</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>11:40-12:40</td>
                                                <td>
                                                    <!-- <p class="font_16 font_blue">2024.03.09. ROOM 1</p> -->
                                                    <p class="font_20 bold">Luncheon Symposium 1</p>
                                                    <!-- <p><span class="bold">Chairperson : TBD</span> (TBD)</p> -->
                                                    <!-- [↓] 확정 시 까지 버튼 숨김 -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기 </button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer : TBD (TBD)</p>
                                                    <ul>
                                                        <li>(Luncheon Symposium 1 Detail)</li>
                                                        <li>(Luncheon Symposium 1 Detail)</li>
                                                        <li>(Luncheon Symposium 1 Detail)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                    <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody id="luncheon_symposium_1">
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="luncheon_symposium_2">
                                <div class="program_header">
                                    <p class="font_16 bold">3월 9일(토)</p>
                                    <span class="font_16 bold">ROOM 2</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>11:40-12:40</td>
                                                <td>
                                                    <!-- <p class="font_16 font_blue">2024.03.09. ROOM 2</p> -->
                                                    <p class="font_20 bold">Luncheon Symposium 2</p>
                                                    <!-- <p><span class="bold">Chairperson : TBD</span> (TBD)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer : TBD (TBD)</p>
                                                    <ul>
                                                        <li>(Luncheon Symposium 2 Detail)</li>
                                                        <li>(Luncheon Symposium 2 Detail)</li>
                                                        <li>(Luncheon Symposium 2 Detail)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                    <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody id="luncheon_symposium_2">
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="luncheon_symposium_3">
                                <div class="program_header">
                                    <p class="font_16 bold">3월 9일(토)</p>
                                    <span class="font_16 bold">ROOM 3</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>11:40-12:40</td>
                                                <td>
                                                    <!-- <p class="font_16 font_blue">2024.03.09. ROOM 3</p> -->
                                                    <p class="font_20 bold">Luncheon Symposium 3</p>
                                                    <!-- <p><span class="bold">Chairperson : TBD</span> (TBD)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer : TBD (TBD)</p>
                                                    <ul>
                                                        <li>(Luncheon Symposium 2 Detail)</li>
                                                        <li>(Luncheon Symposium 2 Detail)</li>
                                                        <li>(Luncheon Symposium 2 Detail)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                    <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody id="luncheon_symposium_3">
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                </div>

            <!-- </div> -->
        </div>
</section>


<script>
$(document).ready(function() {
    // 모든 세션의 내용 숨김처리 후, 펼칠 세션의 td에 on 클래스를 붙여 해당 세션의 내용만 펼칩니다.
    $(".program_detail_ul .detail_table_common > table > tbody > tr:first-child").next("tr").next("tr")
        .children("td").children("div").css("display", "none");
    $(".program_detail_ul .detail_table_common > table > tbody > tr:first-child").next("tr").next("tr")
        .children("td.on").children("div").css("display", "block");

    $(".program_detail_ul .detail_table_common > table > tbody > tr:first-child").click(function() {
        $(this).next("tr").next("tr").children("td.on").children("div").slideToggle();
    });

    // $(".program_detail_ul .detail_table_common > table > tbody > tr:first-child").click(function() {
    //     $(this).next("tr").next("tr").children("td").children("div").slideToggle();
    // });

    $(".tab_green li, .tab_li li").click(function() {
        var i = $(this).index();
        $(this).parent("ul").next(".tab_wrap").children(".tab_cont").removeClass("on");
        $(this).parent("ul").next(".tab_wrap").children(".tab_cont").eq(i).addClass("on");
        $(this).siblings("li").removeClass("on");
        $(this).addClass("on");
        getCategoryId()
    });

    $(".program_detail_btn").click(function(event) {
        event.preventDefault();
        event.stopPropagation();
        $(this).parents("tr").next("tr").find(".program_detail_td").toggleClass("on");
    });
    //$('.toggle_title').click(function(e) {
    //	if($(this).hasClass('has_contents')){
    //		e.preventDefault();
    //		var notthis = $('.toggle_contents_wrap2 .has_contents .active').not(this);
    //		notthis.toggleClass('active').next('.toggle_contents2').slideToggle(300);
    //		$(this).toggleClass('active').next().slideToggle("fast");
    //	}
    //});
    //$('.tab_area2 li').on('click',function(){
    //	var idx = $(this).index();
    //	$('.tab_area2 li').removeClass('active');
    //	$(this).addClass('active');
    //	$('.tab_contents').hide();
    //	$('.tab_contents').eq(idx).show();
    //})
    // $('.toggle_title').addClass('active');
    // $('.toggle_contents2').attr('style','display:block;');

    // var hash_parts = location.hash.split('&', 2); 
    // var tab        = hash_parts[0]; 
    // var anc        = hash_parts[1];
    // var tabId      = tab;
    // var idx = $(tabId).index();

    // if(tab){
    //     $('.tab_area2 li').removeClass('active');
    //     $(tabId).addClass('active');
    //     $('.tab_contents').hide();
    //     $('.tab_contents').eq(idx).show();
    //     $('html, body').animate({'scrollTop': ($(anc).offset().top-223)}, 1000); // Animated scroll to anchor.
    //     
    // }
    //var i = 1;
    // $('li.date').each(function(){ 
    //    if ($(this).html() == '　'){
    //        $(this).addClass('no_cont')
    //    }
    // });

 
        getCategoryId()
  
});

        function getCategoryId(){
            const categoryId = $(".tab_li li.on").attr("id");
            const categoryList = [
            {
                id:5,
                name:"plenary_lecture",
            },
            {
                id:6,
                name:"keynote_lecture",
            },
            {
                id:11,
                name:"breakfast_symposium",
            },
            {
                id:12,
                name:"luncheon_symposium",
            },
            {
                id:8,
                name:"symposium",
            },
            {
                id:16,
                name:"oral_presentation",
            },
            {
                id:13,
                name:"satellite_symposium",
            },
            {
                id:10,
                name:"pre_congress_symposium",
            },
            {
                id:19,
                name:"special_lecture_1",
            },
            {
                id:20,
                name:"special_lecture_2",
            }
        ];

        categoryList.map((category)=>{
            if(category.name === categoryId){
                getDetail(category.id, category.name)
            }
        })
        }
</script>

<?php include_once('./include/footer.php'); ?>