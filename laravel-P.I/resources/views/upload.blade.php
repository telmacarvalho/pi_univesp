<form action="/upload" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="imagem">
    <button type="submit">Enviar</button>
</form>
