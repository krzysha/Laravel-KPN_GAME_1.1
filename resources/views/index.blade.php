@extends('layout')

@section('content')

<script type="text/javascript">

function Table_function(){
if({{ $zmienna }}){
	document.getElementById("Tabla_wynikow").innerHTML = "";
	} 
}
window.onload = Table_function;
</script>
 <p id="Tabla_wynikow"><table-add :records='{{ $AllTable }}'></table-add></p> 
 

@endsection

<table width="100%">	
	<tr>
		<td> Kamień </td> 
		<td>Nożyce</td> 
		<td>Papier</td>
	</tr>
	<tr>
		<form action="{{ route('game.store') }}" method="post">
		{{csrf_field()	 }}
			<td><button name="choose" value="1"><img src="img/Kamien.jpg" alt="Submit"></button></td>	
			<td><button name="choose" value="2"><img src="img/Nozyce.jpg" alt="Submit"></button></td>	
			<td><button name="choose" value="3"><img src="img/Papier.jpg" alt="Submit"></button></td>
		</form>
	</tr>

</table>


