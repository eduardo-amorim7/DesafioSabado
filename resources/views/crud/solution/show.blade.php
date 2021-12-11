<div class="row">
    <div class="col-sm-4">
          
         
    </div>
    <div class="col-sm-12">
          <h2>Solução {{$solution->id}}</h2>
          <h3>Título: {{$solution->title}}</h3>
          <h3>Descrição: {{$solution->description}}</h3>
          <h3>Solução: {{$solution->solution}}</h3>
    </div>
  </div>
  <div class="row">
            <div class="col-sm-12">
                <a href="{{ route('solution.edit', $solution->id) }}" class="btn btn-warning">Editar</a>
            </div>
            <br><br>
            <div class="col-sm-2">
                <form action="{{ route('solution.destroy', $solution->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </div>
        </div>