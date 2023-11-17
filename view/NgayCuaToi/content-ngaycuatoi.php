<div class="content-todo">
    <div class="header-content-todo">
        <span class="check-icon"><i class="fa-solid fa-check"></i></span>
        <h2 class="title-header">Hoạt động mỗi ngày</h2>
    </div>

    <div class="todo-all-input">
        <div class="todo-all-work">
            <div class="todo-task-work-label">
                <div class="todo-work-label todo-label">
                    <b>Việc cần làm</b>
                </div>

                <div class="add-todo-work">
                    <span class=""><i id="btn-plus-work" class="fa-solid fa-square-plus"></i></span>

                </div>
            </div>



            <form action="#" id="myForm" method="POST" class="input-form input-form-work" enctype="multipart/form-data">
                <div id="input-task" class="text-input ">
                    <input type="checkbox" class="check_test" name="checkboxes[]" value="value1" id="">
                    <input type="text" class="text_test" name="input-work1" placeholder="nhập công việc" id="">
                </div>

                <div id="input-task" class="text-input ">
                    <input type="checkbox" class="check_test" name="checkboxes[]" value="value2" id="">
                    <input type="text" class="text_test" name="input-work2" placeholder="nhập công việc" id="">
                </div>

                <div id="input-task" class="text-input ">
                    <input type="checkbox" class="check_test" name="checkboxes[]" value="value3" id="">
                    <input type="text" class="text_test" name="input-work3" placeholder="nhập công việc" id="">
                </div>

                <div id="input-task" class="text-input ">
                    <input type="checkbox" class="check_test" name="checkboxes[]" value="value4" id="">
                    <input type="text" class="text_test" name="input-work4" placeholder="nhập công việc" id="">
                </div>

                <div id="input-task" class="text-input ">
                    <input type="checkbox" class="check_test" name="checkboxes[]" value="value5" id="">
                    <input type="text" class="text_test" name="input-work5" placeholder="nhập công việc" id="">
                </div>

                <div id="input-task" class="text-input ">
                    <input type="checkbox" class="check_test" name="checkboxes[]" value="value6" id="">
                    <input type="text" class="text_test" name="input-work6" placeholder="nhập công việc" id="">
                </div>

        </div>

        <div class="todo-all-emoji">
            <div class="todo-emoji-label todo-label">
                <b>Cảm xúc</b>
            </div>

            <div class="input-form input-form-emoji">
                <button type="button" class="btn-emoji" name="happy" onclick="setEmojiValue(1); changeColorPink(this)">
                    <input type="hidden" name="emoji1" value="0" id="emoji1">
                    <span class="icon-happy">
                        <i class="fa-regular fa-face-laugh-beam"></i>
                    </span>
                    <b>Hạnh phúc</b>
                </button>
                <button type="button" class="btn-emoji" onclick="setEmojiValue(2); changeColorPink(this)"><input type="hidden" name="emoji2" value="0" id="emoji2"> <span class="icon-happy"><i class="fa-regular fa-face-smile-beam"></i></span><b>Vui vẻ</b></button>
                <button type="button" class="btn-emoji" onclick="setEmojiValue(3); changeColorPink(this)"><input type="hidden" name="emoji3" value="0" id="emoji3"> <span class="icon-happy"><i class="fa-regular fa-face-meh"></i></span><b>Bình thường</b></button>
                <button type="button" class="btn-emoji" onclick="setEmojiValue(4); changeColorPink(this)"><input type="hidden" name="emoji4" value="0" id="emoji4"> <span class="icon-happy"><i class="fa-regular fa-face-frown-open"></i></span><b>Buồn</b></button>
                <button type="button" class="btn-emoji" onclick="setEmojiValue(5); changeColorPink(this)"><input type="hidden" name="emoji5" value="0" id="emoji5"> <span class="icon-happy"><i class="fa-regular fa-face-sad-tear"></i></span><b>Rất buồn</b></button>
            </div>


        </div>

        <div class="todo-all-water">
            <div class="todo-water-label todo-label">
                <b>Lượng nước uống</b>
            </div>

            <div class="input-form input-form-water">
                <button type="button" class="btn-water" onclick="setWaterValue(1); changeColorBlue(this)"> <input type="hidden" name="water1" value="0" id="water1"> <span class="icon-happy"><i class="fa-solid fa-glass-water-droplet"></i></span><b>0.5 Lit</b></button>
                <button type="button" class="btn-water" onclick="setWaterValue(2); changeColorBlue(this)"> <input type="hidden" name="water2" value="0" id="water2"> <span class="icon-happy"><i class="fa-solid fa-glass-water-droplet"></i></span><b>1 Lit</b></button>
                <button type="button" class="btn-water" onclick="setWaterValue(3); changeColorBlue(this)"> <input type="hidden" name="water3" value="0" id="water3"> <span class="icon-happy"><i class="fa-solid fa-glass-water-droplet"></i></span><b>1.5 Lit</b></button>
                <button type="button" class="btn-water" onclick="setWaterValue(4); changeColorBlue(this)"> <input type="hidden" name="water4" value="0" id="water4"> <span class="icon-happy"><i class="fa-solid fa-glass-water-droplet"></i></span><b>2 Lit</b></button>
                <button type="button" class="btn-water" onclick="setWaterValue(5); changeColorBlue(this)"> <input type="hidden" name="water5" value="0" id="water5"> <span class="icon-happy"><i class="fa-solid fa-glass-water-droplet"></i></span><b>2.5 Lit</b></button>

            </div>

        </div>
    </div>

    <div class="todo-note">
        <div class="todo-note-label ">
            <b>Ghi chú :</b>
        </div>


        <textarea class="todo-note-content" rows="3" cols="30" placeholder="Nhập ghi chú vào đây    "></textarea>

    </div>

    <input type="submit" value="Lưu" name="btnSubmit" id="saveButton">
    </form>

</div>


<?php
include_once("controller/cNgayCuaToi.php");
date_default_timezone_set("Asia/Ho_Chi_Minh");


if (isset($_REQUEST["btnSubmit"])) {

    // start new
    // define avalible
    $userName = "nguyenvana";
    $controlNCT = new controlNgayCuaToi();
    $timeNow = date("Y-m-d");
    $note = 'Default';
    $requestWorkArray = "input-work";
    $checked = "checkboxes";
    //khai báo biến chứa value
    $emojiPost = 'emoji';
    $waterPost = 'water';
    $valueEmoji = $controlNCT->getValue($emojiPost);
    $valueWater = $controlNCT->getValue($waterPost);
    $checkWorkCount = $controlNCT->getCountChecked($checked);

    // call function
    $resultWorkMyDay = $controlNCT->addWorkMyDay($valueEmoji, $valueWater, $checkWorkCount, $note, $timeNow, $userName);
    if ($resultWorkMyDay == 1) {
        echo "<script> alert('them du lieu thanh cong my day! ') </script>";
    } else if ($result == 0) {
        echo "<script> alert('khong the insert my day! ') </script>";
    }

    $result = $controlNCT->addWork($requestWorkArray, $timeNow, $note);

    if ($result == 1) {
        echo "<script> alert('them du lieu thanh cong! ') </script>";
    } else if ($result == 0) {
        echo "<script> alert('khong the insert! ') </script>";
    }
}
?>