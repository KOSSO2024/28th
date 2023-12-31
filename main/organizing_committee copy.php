<?php
include_once('./include/head.php');
include_once('./include/header.php');

$sql_title =    "SELECT
						GROUP_CONCAT(title) AS title_concat
					FROM (
						SELECT 
							title_" . $language . " AS title
						FROM info_general_commitee
						WHERE is_deleted = 'N'
						AND title_" . $language . " <> ''
						GROUP BY title_" . $language . "
						ORDER BY idx
					) AS res";
$titles = explode(',', sql_fetch($sql_title)['title_concat']);
?>

<section class="container organizing">
    <div>
		<h1 class="page_title">Organization</h1>
        <div class="inner">
            <h3 class="title point_txt">
				<!-- <?= $locale("organizing_committee") ?> -->
				Organization
			</h3>
            <div class="table_wrap">
                <table class="c_table2 center_table fixed_table">
                    <colgroup>
                        <col width="*">
                        <col width="200px">
                        <col width="30%">
                        <col width="20%">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Name</th>
                            <th>Affiliation</th>
                            <th>Specialty</th>
                        </tr>
                    </thead>
                    <tbody class="cat1">
                        <!-- <img class="coming" src="./img/coming.png" /> -->
                        <tr>
                            <th>Chairman</th>
                            <td>Sung Soo Kim
                            </td>
                            <td>Chungnam National University
                            </td>
                            <td>Family Medicine

                            </td>
                        </tr>
                        <tr>
                            <th rowspan="3">Vice-chairman
                            </th>
                            <td>Kyoung-Kon Kim
                            </td>
                            <td>Gachon University
                            </td>
                            <td>Family Medicine

                            </td>
                        </tr>
                        <tr>
                            <td>Eun Mi Kim</td>
                            <td>Kangbuk Samsung Hospital</td>
                            <td>Nutrition Team
                            </td>
                        </tr>
                        <tr>
                            <td>Yoon-A Shin
                            </td>
                            <td>Dankook University
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>President, Board of Directors
                            </th>
                            <td>Cheol-Young Park
                            </td>
                            <td>Sungkyunkwan University
                            </td>
                            <td>Endocrinology</td>
                        </tr>
                        <tr>
                            <th>Director, Committee of General Affairs
                            </th>
                            <td>Sang Mo Hong
                            </td>
                            <td>Hanyang University
                            </td>
                            <td>Endocrinology
                            </td>
                        </tr>
                        <tr>
                            <th>Director, Committee of Academic Affairs
                            </th>
                            <td>Soo Lim</td>
                            <td>Seoul National University
                            </td>
                            <td>Endocrinology
                            </td>
                        </tr>
                        <tr>
                            <th>Director, Committee of Publications
                            </th>
                            <td>You-Cheol Hwang
                            </td>
                            <td>Kyung Hee University
                            </td>
                            <td>Endocrinology
                            </td>
                        </tr>
                        <tr>
                            <th>Director, Committee of Training
                            </th>
                            <td>Jee Hyun Kang
                            </td>
                            <td>Konyang University
                            </td>
                            <td>Family Medicine
                            </td>
                        </tr>
                        <tr>
                            <th>Director, Committee of Research
                            </th>
                            <td>Jang Won Son
                            </td>
                            <td>Catholic University of Korea
                            </td>
                            <td>Endocrinology
                            </td>
                        </tr>
                        <tr>
                            <th>Director, Committee of Research
                            </th>
                            <td>Ki Woo Kim
                            </td>
                            <td>Yonsei University
                            </td>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <th>Director, Committee of Education
                            </th>
                            <td>Hae-Jin Ko
                            </td>
                            <td>Kyungpook National University
                            </td>
                            <td>Family Medicine
                            </td>
                        </tr>
                        <tr>
                            <th>Director, Committee of Public Relations
                            </th>
                            <td>Yang Im Hur
                            </td>
                            <td>CHA University
                            </td>
                            <td>Family Medicine
                            </td>
                        </tr>
                        <tr>
                            <th>Director, Committee of Strategic Planning
                            </th>
                            <td>Sang Yong Kim
                            </td>
                            <td>Chosun University
                            </td>
                            <td>Endocrinology
                            </td>
                        </tr>
                        <tr>
                            <th>Director, Committee of External Affairs and Policy
                            </th>
                            <td>Jeong Hwan Park
                            </td>
                            <td>Hanyang University
                            </td>
                            <td>Endocrinology
                            </td>
                        </tr>
                        <tr>
                            <th>Treasurer
                            </th>
                            <td>Kiyoung Lee
                            </td>
                            <td>Gachon University
                            </td>
                            <td>Endocrinology
                            </td>
                        </tr>
                        <tr>
                            <th>Director, Committee of Information
                            </th>
                            <td>Yoon Jeong Cho
                            </td>
                            <td>Daegu Catholic University
                            </td>
                            <td>Family Medicine
                            </td>
                        </tr>
                        <tr>
                            <th>Director, Committee of International Relations
                            </th>
                            <td>Chang Hee Jung
                            </td>
                            <td>University of Ulsan
                            </td>
                            <td>Endocrinology
                            </td>
                        </tr>
                        <tr>
                            <th>Director, Committee of Private Practice
                            </th>
                            <td>Changhyun Lee
                            </td>
                            <td>Seoul Happiness internal medicine clinic
                            </td>
                            <td>Gastroenterology
                            </td>
                        </tr>
                        <tr>
                            <th>Director, Committee of Health Insurance and Legislation
                            </th>
                            <td>Ga Eun Nam
                            </td>
                            <td>Korea University
                            </td>
                            <td>Family Medicine
                            </td>
                        </tr>
                        <tr>
                            <th>Director, Committee of IT Integrated Metabolic Syndrome
                            </th>
                            <td>Sang Youl Rhee
                            </td>
                            <td>Kyung Hee University
                            </td>
                            <td>Endocrinology
                            </td>
                        </tr>
                        <tr>
                            <th>Director, Committee of Clinical Guidelines
                            </th>
                            <td>Hyuk tae Kwon
                            </td>
                            <td>Seoul National University
                            </td>
                            <td>Family Medicine
                            </td>
                        </tr>
                        <tr>
                            <th>Director, Committee of Food and Nutrition
                            </th>
                            <td>Jeong Hyun Lim
                            </td>
                            <td>Seoul National University Hospital
                            </td>
                            <td>Food Service and Nutrition Care
                            </td>
                        </tr>
                        <tr>
                            <th>Director, Committee of Exercise
                            </th>
                            <td>Jong Hee Kim
                            </td>
                            <td>Hanyang University
                            </td>
                            <td>Physical Education
                            </td>
                        </tr>
                        <tr>
                            <th>Director, Committee of Behavioral Therapy
                            </th>
                            <td>Chang Woo Han
                            </td>
                            <td>Myong-Ji Hospital
                            </td>
                            <td>Psychiatry
                            </td>
                        </tr>
                        <tr>
                            <th>Director, Committee of Bariatric Surgery
                            </th>
                            <td>Sang-Moon Han
                            </td>
                            <td>Seoul Medical Center
                            </td>
                            <td>Surgery
                            </td>
                        </tr>
                        <tr>
                            <th>Director, Committee of Childhood and Adolescence
                            </th>
                            <td>Hong, Yong Hee
                            </td>
                            <td>Soonchunhyang University
                            </td>
                            <td>Pediatrics
                            </td>
                        </tr>
                        <tr>
                            <th>Director, Committee of Big Data
                            </th>
                            <td>Kyung Do Han
                            </td>
                            <td>Soongsil University
                            </td>
                            <td>Statistics and Actuarial Science
                            </td>
                        </tr>
                        <tr>
                            <th>Director without Portfolio
                            </th>
                            <td>
                            </td>
                            <td>
                            </td>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <th rowspan="2">Audit</th>
                            <td>Jun Goo Kang</td>
                            <td>Hallym University</td>
                            <td>Endocrinology</td>
                        </tr>
                        <tr>
                            <td>Chung, Sochung</td>
                            <td>Konkuk University</td>
                            <td>Pediatrics</td>
                        </tr>
                        </tr>
                    </tbody>
                </table>
            </div>
			<!-- <h3 class="title point2_txt">Scientific Committee</h3>
            <div class="table_wrap">
                <table class="c_table2">
                    <colgroup>
                        <col width="18%">
                        <col width="20%">
                        <col width="62%">
                    </colgroup>
                    <tbody class="cat2">
                        <img class="coming" src="./img/coming.png" />
                        <tr>
                            <th>Director</th>
                            <td>Soo Lim</td>
                            <td>Division of Endocrinology and Metabolism, Internal Medicine, <br>Seoul National
                                University College of Medicine and Seoul National University Bundang Hospital</td>
                        </tr>
                        <tr>
                            <th>Coordinator</th>
                            <td>Jang Won Son</td>
                            <td>Division of Endocrinology, Department of Internal Medicine, <br>Bucheon St. Mary’s
                                hospital, The Catholic University of Korea</td>
                        </tr>
                        <tr>
                            <th>Assistant Coordinator</th>
                            <td>Byoungduck Han</td>
                            <td>Korea University College of Medicine Clinical Assistant Professor, Department of Family
                                Medicine</td>
                        </tr>
                        <tr>
                            <th>Assistant Coordinator</th>
                            <td>Hae-Jin Ko</td>
                            <td>Dept. of Family Medicine, School of Medicine, <br>Kyungpook National University,
                                Kyungpook National University Hospital</td>
                        </tr>
                        <tr>
                            <th rowspan="18">Members</th>
                            <td>Il-Young Kim</td>
                            <td>Gachon University School of Medicine</td>
                        </tr>
                        <tr>
                            <td>JaeHyun Kim</td>
                            <td>Seoul National University College of Medicine Seoul National University Bundang Hospital
                            </td>
                        </tr>
                        <tr>
                            <td>Jeeyeon Kim</td>
                            <td>Eunpyeong St. Mary’s Hospital, The Catholic University of Kore</td>
                        </tr>
                        <tr>
                            <td>Jin-Wook Kim </td>
                            <td>CHA Medical Center, Korea</td>
                        </tr>
                        <tr>
                            <td>Ga Eun Nam</td>
                            <td>Department of Family Medicine, Korea University College of Medicine</td>
                        </tr>
                        <tr>
                            <td>Jun Sung Moon</td>
                            <td>Department of Internal Medicine, Yeungnam University College of Medicine</td>
                        </tr>
                        <tr>
                            <td>Kyung Hee Park</td>
                            <td>Dept. of Family Medicine, College of Medicine Hallym University, Korea</td>
                        </tr>
                        <tr>
                            <td>Bumjo Oh</td>
                            <td>Department of Family Medicine & Healthcare Center SMG-SNU Boramae Medical Center</td>
                        </tr>
                        <tr>
                            <td>Ji Won Yoon</td>
                            <td>Department of Internal Medicine, <br>Seoul National University Hospital Healthcare
                                System Gangnam Center</td>
                        </tr>
                        <tr>
                            <td>Sewon Lee</td>
                            <td>Division of Sport Science, College of Arts & Physical Education Incheon National
                                University</td>
                        </tr>
                        <tr>
                            <td>Seung-Hwan Lee</td>
                            <td>The Catholic University of Korea</td>
                        </tr>
                        <tr>
                            <td>Yun-Hee Lee</td>
                            <td>College of Pharmacy, Seoul National University</td>
                        </tr>
                        <tr>
                            <td>Hyeok Lee</td>
                            <td>National Medical Center Clinical Nutrition Team</td>
                        </tr>
                        <tr>
                            <td>Hyunjung Lim</td>
                            <td>Department of Medical Nutrition, Kyung Hee Universit</td>
                        </tr>
                        <tr>
                            <td>Changhee Jung</td>
                            <td>Department of Endocrinology and Metabolism <br>Asan Medical Center University of Ulsan
                                College of Medicine</td>
                        </tr>
                        <tr>
                            <td>Hyung Jin Choi</td>
                            <td>Department of Biomedical Sciences/<br>Anatomy and Cell Biology Seoul National University
                                College of Medicinee</td>
                        </tr>
                        <tr>
                            <td>Yong Hee Hong</td>
                            <td>Department of Pediatrics, Soonchunhyang University Bucheon Hospital</td>
                        </tr>
                        <tr>
                            <td>Jun Hwa Hong</td>
                            <td>Daejeon Eulji Medical Center, Eulji University School of Medicine</td>
                        </tr>
                    </tbody>
                </table>
            </div>-->
        </div>
    </div>
</section>

<?php include_once('./include/footer.php'); ?>