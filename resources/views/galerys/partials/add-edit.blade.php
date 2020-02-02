<br>
<div class="form-group">
    <label for="inputImage">Imagem</label>
    <input type="file" class="form-control-file" name="title" id="inputTitle" aria-describedby="fileHelp" value="{{$galery->title}}"/>
</div>
<br>
<div class="form-group">
    <label for="inputFullname">Descrição</label>
    <textarea type="text" class="form-control" name="description" id="inputFulldescription">{{old('description',$galery->description)}}</textarea>
</div>