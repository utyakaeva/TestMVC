<h1>Страница добавления заявки. Вы механик. Внесите данные!</h1>
<form action="/order/addOrder" method="post">
<form>
    <div class="row">
        <div class="col">
            <input type="text" name = "im" class="form-controlName" placeholder="Имя">
        </div>
        <div class="col">
            <input type="text" name = "fm" class="form-controlFam" placeholder="Фамилия">
        </div>
        <div class="col">
            <input type="text" name = "ot" class="form-controlOtc" placeholder="Отчество">
        </div>
    </div>
    <div class ="row">
        <div class="col">
            <input type="text" name ="naz" class="form-controlNameOrder" placeholder="Название заявки">
        </div>
        <div class="col">
            <input type="date" class="form-control" id="date" name="date" placeholder="Дата заявки" required>
        </div>
    </div>
    <button class="btn btn-primary" type="submit" name = "add" >Submit form</button>
</form>