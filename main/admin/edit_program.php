<?php include_once('./include/head.php');?>
<?php include_once('./include/header.php');?>
<?php 

    $program_query = "	SELECT * 
                        FROM program";
    $program_list = get_data($program_query);

?>
<style>
    .y_scroll{
        width: 85vw;
        height: 80vh;
        overflow-y: scroll;
        margin-left : auto;
    }
</style>
    <section class="list">
        <div class="container">
            <div class="title clearfix2">
                <h1 class="font_title">프로그램 수정하기</h1>
                <div class="y_scroll">
                <div class="contwrap">
                    <table>
                        <colgroup>
                            <col width="18%">
                            <col width="26%">
                            <col width="26%">
                            <col width="10%">
                            <col width="10%">
                            <col>
                        </colgroup>
                        <tr>
                            <th>프로그램 이름</th>
                            <th>좌장</th>
                            <th>미리보기 내용</th>
                            <th>시작시간</th>
                            <th>끝나는 시간</th>
                            <th></th>
                        </tr>
                        <?php 
                foreach($program_list as $program){
                    ?>
                        <tr>
                            <td style="cursor: pointer;" onclick="goDetail(<?php echo $program['idx']?>)"><?php echo $program['program_name']; ?></td>
                            <td><input type="text" name="chairpersons" value="<?php echo $program['chairpersons'] ?>"/></td>
                            <td><input type="text" name="preview" value="<?php echo $program['preview'] ?>"/></td>
                            <td><?php echo $program['start_time'] ?></td>
                            <td><?php echo $program['end_time'] ?></td>
                            <td><button class="btn save_btn" data-id="<?php echo $program['idx'] ?>">저장</button></td>
                        </tr>
                        <?php } ?>
                    </table>
                    </div>
                </div>
            </div>    
        </div>
    </section>
<script>
    const saveBtnList = document.querySelectorAll(".save_btn");
    
    saveBtnList.forEach((saveBtn)=>{
        saveBtn.addEventListener("click", (e)=>{
             // 현재 버튼이 속한 행을 찾음
             const row = e.target.closest('tr');
    
            // 행에서 input 요소들을 찾아서 값을 가져옴
            const chairpersons = row.querySelector('input[name="chairpersons"]').value;
            const preview = row.querySelector('input[name="preview"]').value;
            const id = e.target.dataset.id;

            if(chairpersons){
                $.ajax({
                    url:"../ajax/admin/ajax_update_program.php",
                    type: "POST",
                    data: {
                        flag: "modify_program",
                        idx:id, 
                        chairpersons:chairpersons, 
                        preview:preview
                    },
                    dataType: "JSON",
                    success: function (res) {
                        // console.log(res)
                        if (res.code == 200) {
                            alert('수정이 완료되었습니다.')
                            return;
                        } else {
                            alert('수정에 실패했습니다.')
                            return;
                        }
                    }
                });
            }
        })
    })

    function goDetail(id){
        window.location.href = `/main/admin/edit_program_detail.php?idx=${id}`;
    }
</script>
<?php include_once('./include/footer.php');?>