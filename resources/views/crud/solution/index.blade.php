<div class="row">
    @foreach ($solutions as $solution)
    <div class="col-sm-4">
          <h3>Solução nº: {{$solution->id}}</h3>
          <h4><a href="{{ route('solution.show', $solution->id) }}">Titulo: {{$solution->title}}</a></h4>
          <hr>
    </div>
    @endforeach
  </div>
  <div class="row">
     <br><br>
  <div class="col-sm-12">
       <a href="{{ route('solution.create')}}" class="btn btn-info">Adicionar Nova Solução</a> 
  </div>
  </div>
