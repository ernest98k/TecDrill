<br>
<div class="form-group">
    <label for="inputImage">Imagem</label>
    <input type="file" class="form-control-file" name="image" id="inputImage" aria-describedby="fileHelp" />
</div>
<br>
<div class="form-group">
    <label for="inputFullname">Descrição</label>
    <textarea type="text" class="form-control" name="description" id="inputFulldescription" value="{{old('description',$galery->description)}}"></textarea>
</div>