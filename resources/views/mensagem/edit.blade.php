<h1>Formulário de Edição da Mensagem código {{$atividade->id}}</h1>
<hr>

  <!-- EXIBE MENSAGENS DE ERROS -->
  @if ($errors->any())
	<div class="container">
	  <div class="alert alert-danger">
	    <ul>
	      @foreach ($errors->all() as $error)
	      <li>{{ $error }}</li>
	      @endforeach
	    </ul>
	  </div>
	</div>
  @endif

<form action="/mensagens/{{$Mensagem->id}}" method="POST">
	{{ csrf_field() }}
	{{ method_field('PUT') }}
	Título: 		<input type="text" name="title" value="{{$Mensagem->title}}"> 	     <br>
	Descrição:		<input type="text" name="description" value="{{$Mensagem->description}}">   <br>
	Agendado para:  <input type="datetime-local" name="scheduledto" value="{{$Mensagem->scheduledto}}">   <br>
	<input type="submit" value="Salvar">
</form>