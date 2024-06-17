<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="port">
    <title>資管晚會報名表單</title>
</head>

<body>
    <form action="result.php" method="post">
        <fieldset>
            <legend>基本資料</legend>
            <label for="user_acc">學號：</label>
            <input type="text" name="user_acc" id="user_acc" placeholder="請輸入您的學號" required>
            <label for="email">您的電子郵件：</label>
            <input type="email" name="user_email" id="email">
            <label for="user_paswd">密碼：</label>
            <input type="password" name="user_paswd" id="user_paswd" placeholder="請輸入您的密碼" required>
            <label for="gender">性別：</label>
            <input type="radio" name="gender" id="female" value="女">女
            <input type="radio" name="gender" id="male" value="男">男
        </fieldset>
        <fieldset>
        <legend>當天服裝</legend>
            <select name="fashion[]" multiple>
                <optgroup label="服飾">
                    <option value="T恤">T恤</option>
                    <option value="襯衫" selected>襯衫</option>
                    <option value="班服">班服</option>
                </optgroup>
            </select>
        </fieldset>

        <fieldset>
            <legend>意見</legend>
            <label for="talk">請輸入想法：</label>
            <textarea name="talking" id="talk" cols="30" rows="10"></textarea>
        </fieldset>
        <button type="submit">提交</button>
        <button type="reset">重設</button>
    </form>
    <script>
        const range = document.getElementById('range');
        const rangeValue = document.getElementById('rangeValue');

        range.addEventListener('input', function() {
            rangeValue.textContent = this.value;
        });
    </script>
</body>

</html>