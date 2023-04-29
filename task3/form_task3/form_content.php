<form action="form_script.php" method="post">
    <div>
        <div>
            <label for="surname">
                <span>Фамилия</span>
                <input type="text" id="surname" name="surname">
            </label>
        </div>
        <div>
            <label for="name">
                <span>Имя</span>
                <input type="text" id="name" name="name">
            </label>
        </div>
    </div>
    <div>
        <label>Выберите время</label>
        <div>
            <input id="time-1" type="radio" name="time" value="9:00 - 10:30">
            <label for="time-1">9:00 - 10:30</label>
        </div>
        <div>
            <input id="time-2" type="radio" name="time" value="10:40 - 12:10">
            <label for="time-2">10:40 - 12:10</label>
        </div>
        <div>
            <input id="time-3" type="radio" name="time" value="12:50 - 14:20">
            <label for="time-3">12:50 - 14:20</label>
        </div>
        <div>
            <input id="time-4" type="radio" name="time" value="14:30 - 16:00">
            <label for="time-4">14:30 - 16:00</label>
        </div>
        <div>
            <input id="time-5" type="radio" name="time" value="16:10 - 17:40">
            <label for="time-5">16:10 - 17:40</label>
        </div>
        <label>Выберите форму контроля</label>
        <div>
            <input id="form-control-1" type="radio" name="control" value="текст">
            <label for="form-control-1">текст</label>
        </div>
        <div>
            <input id="form-control-2" type="radio" name="control" value="собеседование">
            <label for="form-control-2">собеседование</label>
        </div>
        <div>
            <input id="form-control-3" type="radio" name="control" value="доклад">
            <label for="form-control-3">доклад</label>
        </div>
        <div>
            <input id="form-control-4" type="radio" name="control" value="контрольная работа">
            <label for="form-control-4">контрольная работа</label>
        </div>
    </div>
    <div>
        <label for="select-lesson">Выберите предмет</label>
        <select name="select-lesson" id="select-lesson">
            <option value="1">Программирование в UNIX</option>
            <option value="2">Программные технологии ИНТЕРНЕТ</option>
            <option value="3">Разработка приложений на Java</option>
            <option value="4">Функциональное программирование</option>
        </select><br>
    </div>
    <label for="comment">Дополнительная информация</label>
    <textarea name="comment" id="comment" class="w-100" cols="20" rows="10"></textarea>
    <button type="button" class="btn btn-primary mb-3 mt-3" id="confirm-btn">Отправить</button>
    <div id="confirm-message">

    </div>
</form>
<script>
    function confirmMessage() {
        const name = document.getElementById('name').value;
        const surname = document.getElementById('surname').value;
        const sel = document.getElementById('select-lesson');
        const selectedLesson = sel.options[sel.selectedIndex].text;
        const selectedTime = document.querySelector('input[name="time"]:checked').value;
        const selectedControl = document.querySelector('input[name="control"]:checked').value;
        const comment = document.getElementById("comment").value;

        let resultStr = `Уважаемый ${name} ${surname}!<br>
        Ждем вас на экзамен по ${selectedLesson} в ${selectedTime}.<br>
        Экзамен пройдет в форме ${selectedControl}.<br>`;
        if (comment != "") {
            resultStr += `спасибо за комментарий: ${comment}.<br>`;
        }
        resultStr += '<button type="submit" class="btn btn-primary mb-3 mt-3">Подтвердить запись</button>';
        document.getElementById('confirm-message').innerHTML = resultStr;
    }
    const confirmBtn = document.getElementById('confirm-btn');
    confirmBtn.addEventListener('click', confirmMessage);
</script>