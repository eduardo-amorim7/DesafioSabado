<div class="row">
    <div class="col-sm-4">
        
         
    </div>
    <div class="col-sm-4">
   
      <form action="{{ route('solution.store')}}" method="post">
          @csrf
         
                     <div class="form-group">
                        <label for="">Título</label>
                        <input name="title" type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Descrição</label>
                        <input name="description" type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Solução</label>
                        <input name="solution" type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                       
                        <button type="submit" class="btn btn-info">Adicionar</button>
                    </div>
    </form>
    </div>
  </div>
  <div class="row">
     
  </div>