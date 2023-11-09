@extends('layout')
@section('title') Главная страница @endsection
@section('content')

<form action="./order_finish" method="post">
@csrf
<div class="row">
<div class="col-sm-5 col-md-5 col-lg-5 left">
<fieldset> <legend>Введите ваш номер телефона</legend>
<p><input required type="text" name="phone" list="tel-list" placeholder="+7 (900) 123-45-67"></p>
</fieldset>
<fieldset> <legend>Введите ваше имя и адрес</legend>
<div>
<div class="wrapper">
    <div>
        <label for="name">Имя</label>
        <input required type="text" id="name" name="name" autocomplete="name" enterkeyhint="next">
    </div>
    <div>
        <label for="street">Улица</label>
        <input type="text" id="street" name="street" autocomplete="street" required enterkeyhint="next" required>      
    </div>
    
    <div class="row">
    <div class="col">
    <div class="form-group row">
    <label for="house" class="col-sm-2 col-form-label mt-2">дом</label>
    <div class="col-sm-10">
      <input type="number" name="house" class="form-control mt-2" id="house" required>
    </div>
  </div>
    </div>
    <div class="col">
    <div class="form-group row">
    <label for="apart" class="col-sm-2 col-form-label mt-2">кв.</label>
    <div class="col-sm-10">
      <input type="number" name="apart" class="form-control mt-2" id="apart">
    </div>
  </div>
    </div>
   </div>
    <div>
        <label for="city">Город</label>
        <select id="city" name="city" autocomplete="city" enterkeyhint="done" required>
            <option></option>
            <option value="NV">Новосибирск</option>
            <option value="BD">Бердск</option>
        </select> 
    </div>
    <div>
        <label for="postal">Почтовый индекс</label>
        <input class="postal" id="postal" name="postal" autocomplete="postal" enterkeyhint="next">
    </div>   
    </div>
    </div>
    </fieldset>
    </div>
    <div class="col-sm-5 col-md-5 col-lg-5 right ms-5">
    <fieldset> <legend>Введите дату получения заказа</legend>
    <div>
        <label for="date">День</label>
        <input required type="date" id="date" name="date" autocomplete="date" enterkeyhint="next">
    </div>
    <div>
        <label for="time">Время</label>
        <select id="time" name="time" autocomplete="time" enterkeyhint="done" required>
            <option></option>
            <option value="08:00-08:30">08:00-08:30</option>
            <option value="08:30-09:00">08:30-09:00</option>
            <option value="09:00-09:30">09:00-09:30</option>
            <option value="09:30-10:00">09:30-10:00</option>
            <option value="10:00-10:30">10:00-10:30</option>
            <option value="10:30-11:00">10:30-11:00</option>
            <option value="11:00-11:30">11:00-11:30</option>
            <option value="11:30-12:00">11:30-12:00</option>
            <option value="12:00-12:30">12:00-12:30</option>
            <option value="12:30-13:00">12:30-13:00</option>            
            <option value="13:00-13:30">13:00-13:30</option>
            <option value="13:30-14:00">13:30-14:00</option>
            <option value="14:00-14:30">14:00-14:30</option>
            <option value="14:30-15:00">14:30-15:00</option>
            <option value="15:00-15:30">15:00-15:30</option>
            <option value="15:30-16:00">15:30-16:00</option>
            <option value="16:00-16:30">16:00-16:30</option>
            <option value="16:30-17:00">16:30-17:00</option>
            <option value="17:00-17:30">17:00-17:30</option>
            <option value="17:30-18:00">17:30-18:00</option>
            <option value="18:00-18:30">18:00-18:30</option>
            <option value="18:30-19:00">18:30-19:00</option>
            <option value="19:00-19:30">19:00-19:30</option>
            <option value="19:30-20:00">19:30-20:00</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="info" class="form-label">Введите комментарии по доставке</label>
        <textarea class="form-control" name="info" id="info" rows="10"></textarea>
        </div>
  </fieldset>
</div>
    <button type="reset" class="btn btn-primary btn-lg btn-block mt-3">Очистить</button>
    <button type="submit" class="btn btn-secondary btn-lg btn-block mt-3">Оформить заказ</button>
</div>   
</form>
@endsection
<style>
form {
  width: 250vw;
  max-width: 50em;
  margin-left: 20%;
}

button {
  margin-top: 2rem;
}

input, select {
  border: 1px solid;
  padding: 0.3em;
  width: 100%;
}

textarea {
  width: 100%;
  min-height: 6em;
}

label {
  display: block;
  font-size: 1.2rem;
  margin-top: 1rem;
}

select {
  font-size: 16px;
}

.postal-code {
  width: 50%;
}
</style>