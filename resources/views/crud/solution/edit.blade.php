<div class="row">
    <div class="col-sm-4">
         
    </div>
    <div class="col-sm-4">
   
      <form action="{{ route('solution.update' , $solution->id)}}" method="post">
          @csrf
          @method('PUT')
                    <div class="form-group">
                        <label for="">Título</label>
                        <input name="title" type="text" class="form-control" value="{{ $solution->title }}" required>
                    </div>
                    <div class="form-group">
                        <label for="">Descrição</label>
                        <input name="description" type="text" class="form-control" value="{{ $solution->description }}" required>
                    </div>
                    <div class="form-group">
                        <label for="">Solução</label>
                        <input name="solution" type="text" class="form-control" value="{{ $solution->solution }}" required>
                    </div>
                    <div class="form-group">
                       
                        <button type="submit" class="btn btn-info">Atualizar</button>
                    </div>
    </form>
    </div>
  </div>
  <div class="row">
     
  </div>