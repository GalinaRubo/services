@extends('layout')
@section('title') Главная страница @endsection
@section('content')

<div class="row mt-5" >
    <div class="col-sm-6 col-md-6 col-lg-6 right">
	<h1>Ваша корзина</h1>
	</div>
	<div class="col-sm-6 col-md-6 col-lg-6 left"> 
	<a href="./catalog">Вернуться в каталог</a>
	</div>
</div>  
<form method="post" action="del">
@csrf      
	<table class="table table-striped">
	<thead class="table-dark">	     
		<tr> 
		    <th>Продукт</th> 
		    <th>Количество</th> 
		    <th>Цена</th> 
		    <th>Сумма</th>
			<th>Удалить</th> 
		</tr>
	</thead> 		 
		<?php
        $totalprice = 0;		
			foreach($values  as $key=>$value){
                foreach($products as $prd){				
				if ($key == $prd->id){																													
		?> 
			<tr> 
			<td><?php echo $prd->name ?></td> 
			<td><?php echo $value ?></td>
		    <td><?php echo $prd->price?>&#8381;</td> 
			<td><?php echo $value*$prd->price ?>&#8381;</td>             											
			<td><button class="border-0" name="del" type="submit" value = "{{$prd->id}}"><img src="del.jpg" alt="Submit" width="40" height="30"></button></td>  
            </form> 
			</tr> 
		<?php
			$totalprice += $value*$prd->price;			
			}}}				 
		?> 
		<tr> 
		<td colspan="5">Стоимость заказа: <?php echo $totalprice ?>&#8381;</td> 
		</tr> 		 
	</table> 
	<br />
</form>
<form method="post" action="order">
@csrf
	<button type="submit" class="btn btn-primary my-3" name="submit">Перейти к оформлению заказа</button> 
</form> 
<br />
@endsection