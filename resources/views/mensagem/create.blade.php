<h1>Formulário de cadastro de Mensagens </h1>
<hr>

<from action ="/mensagens" method="post">
{{csrf_field() }}
Título:  <input type="text" name="title"> <br>
Texto:  <input type="text" name="text"> <br>
Autor:  <input type="text name="text"> <br>
	<input type="submit" value="Salvar">
</from>
